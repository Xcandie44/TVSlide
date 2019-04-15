<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.access_map' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\security-http\\AccessMapInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security-http\\AccessMap.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\http-foundation\\RequestMatcherInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\http-foundation\\RequestMatcher.php';

$this->privates['security.access_map'] = $instance = new \Symfony\Component\Security\Http\AccessMap();

$a = new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin/');

$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin/login$'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin/logout$'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin/login_check$'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin/resetting'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
$instance->add($a, array(0 => 'ROLE_ADMIN', 1 => 'ROLE_SONATA_ADMIN'), NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/.*'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/login$'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/register'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/resetting'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
$instance->add($a, array(0 => 'ROLE_ADMIN'), NULL);

return $instance;
