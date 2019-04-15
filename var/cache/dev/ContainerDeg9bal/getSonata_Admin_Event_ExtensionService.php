<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sonata.admin.event.extension' shared service.

include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\AdminExtensionInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Admin\\AbstractAdminExtension.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Event\\AdminEventExtension.php';

return $this->services['sonata.admin.event.extension'] = new \Sonata\AdminBundle\Event\AdminEventExtension(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
