<?php
/**
 * Created by PhpStorm.
 * User: oit
 * Date: 09.01.19
 * Time: 11:55
 */

namespace App\Services;


use App\Entity\Slide;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Container\ContainerInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class UploadService
{
    private $container;
    private $em;

    public function __construct(ContainerInterface $container, EntityManagerInterface $em)
    {
        $this->container = $container;
        $this->em = $em;
    }

    public function saveFile(UploadedFile $file, Slide $slide)
    {
        $rootDir = $this->container->getParameter('kernel.project_dir');
        $webDir = $this->container->getParameter('upload_directory');
        $fullDir = $rootDir.'/public'.$webDir;

        $priority = count($this->em->getRepository(Slide::class)->findAll())+1;
        $mimeType = $file->getClientMimeType();
        $format = $file->getClientOriginalExtension();

        $fileName = time().'.'.$format;
        $url = $webDir.$fileName;

        $fullPath = $fullDir.$fileName;
        $file->move($fullDir,$fileName);

        if(preg_match("/video/i", $mimeType)){
            $fileInfo = $this->getVideoFileInfo($fullPath);
            $format = 'video';
            $videoInfo = $fileInfo['video'];
            $width = $videoInfo['resolution_x'];
            $height = $videoInfo['resolution_y'];
            $duration = $fileInfo['playtime_seconds'];
            $duration = round($duration, PHP_ROUND_HALF_UP);

            $slide->setDuration($duration);
            $slide->setIsVideo(true);

        } elseif (preg_match("/image/i", $mimeType)){
            $format = 'image';
            $fileInfo = getimagesize($fullPath);
            $width = $fileInfo['0'];
            $height = $fileInfo['1'];

        } else {
            return false;
        }

        $slide->setUrl($url);
        $slide->setFormat($format);
        $slide->setHeight($height);
        $slide->setWidth($width);
        $slide->setPriority($priority);

        // the file property can be empty if the field is not required

        // clean up the file property as you won't need it anymore
        return true;

    }

    public function getVideoFileInfo($remotefilename){
        error_reporting(E_ERROR | E_WARNING | E_PARSE);
        if ($fp_remote = fopen($remotefilename, 'rb')) {
            $localtempfilename = tempnam('/tmp', 'getID3');
            if ($fp_local = fopen($localtempfilename, 'wb')) {
                while ($buffer = fread($fp_remote, 8192)) {
                    fwrite($fp_local, $buffer);
                }
                fclose($fp_local);
                try{
                    // Initialize getID3 engine
                    $getID3 = new \getID3();
                    $ThisFileInfo = $getID3->analyze($localtempfilename);
                    // Delete temporary file
                    unlink($localtempfilename);
                    fclose($fp_remote);
                    error_reporting(E_ALL);
                    return $ThisFileInfo;
                } catch(\Exception $e){
                    echo 'Error in UploadService';exit;
                }


            }

        }
    }





}