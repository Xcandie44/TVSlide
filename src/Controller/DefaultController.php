<?php

namespace App\Controller;

use App\Entity\Building;
use App\Entity\Slide;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\BuildingRepository;
use App\Repository\SlideRepository;
use FFMpeg\FFMpeg;
use FFMpeg\FFProbe;




class DefaultController extends AbstractController
{
    /**
     * @Route("/{url}", name="tv-action")
     */
    public function tvAction($url)
    {
        $em = $this->getDoctrine()->getManager();
        $arrayOfSlides = [
            'datas' => $em->getRepository(Slide::class)->getActiveSlidesArray($url)
        ];

        $response = new Response(json_encode($arrayOfSlides));

        //var_dump($arrayOfSlides);exit;

        $response->headers->set('Content-Type', 'application/json');

        return $response;

        /*return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);*/
    }

    /**
     * @Route("/", name="main-index")
     */
    public function indexAction (BuildingRepository $buildingRepository, SlideRepository $slideRepository)
    {
            $buildings = $buildingRepository->findAll();
            $slides = $slideRepository->findAll();
            //dump($slides);
            //dump($buildings);
            $videos = array();
            foreach($slides as $values){
                if($values->getisVideo()){
                    //dump($values);
                    array_push($videos, $values);
                }
            }
           /* $ffmpeg = FFMpeg::create([
                'ffmpeg.binaries'  => exec('which ffmpeg'),
                'ffprobe.binaries' => exec('which ffprobe')
            ]);
            $video = $ffmpeg->open($videos[0].url);*/

            //$movie = new ffmpeg_movie($videos[1].url, true);

            //dump($movie->getFrameNumber());
            //dump($videos);
            dump($slides[0]);
            //$videos[1]->getFrame(1);
            return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
            'buildings' => $buildings,
            'slides' => $slides
        ]);
    }
}
