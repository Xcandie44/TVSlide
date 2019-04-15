<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'fos_user.user_manager' shared service.

include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\Model\\UserManagerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\Model\\UserManager.php';
include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\Doctrine\\UserManager.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\doctrine-extensions\\src\\Model\\PageableManagerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\src\\Model\\UserManagerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\doctrine-extensions\\src\\Model\\ManagerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\src\\Entity\\UserManager.php';

return $this->services['fos_user.user_manager'] = new \Sonata\UserBundle\Entity\UserManager(($this->privates['fos_user.util.password_updater'] ?? $this->load('getFosUser_Util_PasswordUpdaterService.php')), ($this->privates['fos_user.util.canonical_fields_updater'] ?? $this->getFosUser_Util_CanonicalFieldsUpdaterService()), ($this->privates['fos_user.object_manager'] ?? $this->load('getFosUser_ObjectManagerService.php')), 'App\\Application\\Sonata\\UserBundle\\Entity\\User');
