<?php

namespace App\Controller;

use App\Entity\Slide;
use Sonata\AdminBundle\Controller\CRUDController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


class SlideAdminController extends CRUDController
{
    public function increasePriorityAction()
    {
        return $this->getSlideToChange(true);
    }

    public function decreasePriorityAction()
    {
        return $this->getSlideToChange(false);
    }

    private function returnToList(string $messageClass, string $message){
        $this->addFlash($messageClass, $message);
        return new RedirectResponse($this->admin->generateUrl('list'));
    }

    private function getSlideToChange(bool $up){

        /** @var Slide $currentSlide */
        $currentSlide = $this->admin->getSubject();
        $currentSlideId = $currentSlide->getId();
        $currentSlidePriority = $currentSlide->getPriority();

        if (!$currentSlide) {
            throw new NotFoundHttpException(sprintf('unable to find the slide with id: %s', $currentSlideId));
        }
        $doctrine = $this->getDoctrine();
        $messageClass = 'sonata_flash_success';
        if($up){
            $message='Приоритет увеличен';
            /** @var array $newSlide */
            $newSlide = $doctrine->getRepository(Slide::class)->getNextSlidePriority($currentSlidePriority);
            if(count($newSlide)==0){
                $messageClass = 'sonata_flash_error';
                $message='Слайд первый в очереди, приоритет увеличить нельзя нельзя';
                return $this->returnToList($messageClass, $message);
            }
        } else {
            $message='Приоритет уменьшен';
            /** @var array $newSlide */
            $newSlide = $doctrine->getRepository(Slide::class)->getPreviousSlidePriority($currentSlidePriority);
            if(count($newSlide)==0){
                $messageClass = 'sonata_flash_error';
                $message='Слайд последний в очереди, приоритет уменьшить нельзя';
                return $this->returnToList($messageClass, $message);
            }
        }

        /** @var Slide $slideToChange */
        $slideToChange = $newSlide[0];
        $slideToChangePriority = $slideToChange->getPriority();
        $currentSlide->setPriority($slideToChangePriority);
        $slideToChange->setPriority($currentSlidePriority);
        $doctrine->getManager()->flush();

        return $this->returnToList($messageClass,$message);
    }
}
