<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Sonata\UserBundle\Command\TwoStepVerificationCommand' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\console\\Command\\Command.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\dependency-injection\\ContainerAwareInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Command\\ContainerAwareCommand.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\src\\Command\\TwoStepVerificationCommand.php';

return $this->services['Sonata\UserBundle\Command\TwoStepVerificationCommand'] = new \Sonata\UserBundle\Command\TwoStepVerificationCommand();
