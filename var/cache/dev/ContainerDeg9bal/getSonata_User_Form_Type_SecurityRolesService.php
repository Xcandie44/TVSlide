<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sonata.user.form.type.security_roles' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\form\\FormTypeInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\form\\AbstractType.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\src\\Form\\Type\\SecurityRolesType.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\src\\Security\\EditableRolesBuilder.php';

$a = new \Sonata\UserBundle\Security\EditableRolesBuilder(($this->services['security.token_storage'] ?? ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()), ($this->services['sonata.admin.pool'] ?? $this->getSonata_Admin_PoolService()), $this->parameters['security.role_hierarchy.roles']);
$a->setTranslator(($this->services['translator'] ?? $this->getTranslatorService()));

return $this->services['sonata.user.form.type.security_roles'] = new \Sonata\UserBundle\Form\Type\SecurityRolesType($a);
