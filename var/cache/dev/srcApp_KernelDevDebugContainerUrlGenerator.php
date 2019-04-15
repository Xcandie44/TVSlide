<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'tv-action' => array(array('url'), array('_controller' => 'App\\Controller\\DefaultController::tvAction'), array(), array(array('variable', '/', '[^/]++', 'url', true)), array(), array()),
        'main-index' => array(array(), array('_controller' => 'App\\Controller\\DefaultController::indexAction'), array(), array(array('text', '/')), array(), array()),
        'fos_user_security_login' => array(array(), array('_controller' => 'fos_user.security.controller:loginAction'), array(), array(array('text', '/login')), array(), array()),
        'fos_user_security_check' => array(array(), array('_controller' => 'fos_user.security.controller:checkAction'), array(), array(array('text', '/login_check')), array(), array()),
        'fos_user_security_logout' => array(array(), array('_controller' => 'fos_user.security.controller:logoutAction'), array(), array(array('text', '/logout')), array(), array()),
        'fos_user_profile_show' => array(array(), array('_controller' => 'fos_user.profile.controller:showAction'), array(), array(array('text', '/profile/')), array(), array()),
        'fos_user_profile_edit' => array(array(), array('_controller' => 'fos_user.profile.controller:editAction'), array(), array(array('text', '/profile/edit')), array(), array()),
        'fos_user_registration_register' => array(array(), array('_controller' => 'fos_user.registration.controller:registerAction'), array(), array(array('text', '/register/')), array(), array()),
        'fos_user_registration_check_email' => array(array(), array('_controller' => 'fos_user.registration.controller:checkEmailAction'), array(), array(array('text', '/register/check-email')), array(), array()),
        'fos_user_registration_confirm' => array(array('token'), array('_controller' => 'fos_user.registration.controller:confirmAction'), array(), array(array('variable', '/', '[^/]++', 'token', true), array('text', '/register/confirm')), array(), array()),
        'fos_user_registration_confirmed' => array(array(), array('_controller' => 'fos_user.registration.controller:confirmedAction'), array(), array(array('text', '/register/confirmed')), array(), array()),
        'fos_user_resetting_request' => array(array(), array('_controller' => 'fos_user.resetting.controller:requestAction'), array(), array(array('text', '/resetting/request')), array(), array()),
        'fos_user_resetting_send_email' => array(array(), array('_controller' => 'fos_user.resetting.controller:sendEmailAction'), array(), array(array('text', '/resetting/send-email')), array(), array()),
        'fos_user_resetting_check_email' => array(array(), array('_controller' => 'fos_user.resetting.controller:checkEmailAction'), array(), array(array('text', '/resetting/check-email')), array(), array()),
        'fos_user_resetting_reset' => array(array('token'), array('_controller' => 'fos_user.resetting.controller:resetAction'), array(), array(array('variable', '/', '[^/]++', 'token', true), array('text', '/resetting/reset')), array(), array()),
        'fos_user_change_password' => array(array(), array('_controller' => 'fos_user.change_password.controller:changePasswordAction'), array(), array(array('text', '/profile/change-password')), array(), array()),
        'sonata_admin_redirect' => array(array(), array('_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction', 'route' => 'sonata_admin_dashboard', 'permanent' => 'true'), array(), array(array('text', '/admin/')), array(), array()),
        'sonata_admin_dashboard' => array(array(), array('_controller' => 'Sonata\\AdminBundle\\Action\\DashboardAction'), array(), array(array('text', '/admin/dashboard')), array(), array()),
        'sonata_admin_retrieve_form_element' => array(array(), array('_controller' => 'sonata.admin.action.retrieve_form_field_element'), array(), array(array('text', '/admin/core/get-form-field-element')), array(), array()),
        'sonata_admin_append_form_element' => array(array(), array('_controller' => 'sonata.admin.action.append_form_field_element'), array(), array(array('text', '/admin/core/append-form-field-element')), array(), array()),
        'sonata_admin_short_object_information' => array(array('_format'), array('_controller' => 'sonata.admin.action.get_short_object_description', '_format' => 'html'), array('_format' => 'html|json'), array(array('variable', '.', 'html|json', '_format', true), array('text', '/admin/core/get-short-object-description')), array(), array()),
        'sonata_admin_set_object_field_value' => array(array(), array('_controller' => 'sonata.admin.action.set_object_field_value'), array(), array(array('text', '/admin/core/set-object-field-value')), array(), array()),
        'sonata_admin_search' => array(array(), array('_controller' => 'Sonata\\AdminBundle\\Action\\SearchAction'), array(), array(array('text', '/admin/search')), array(), array()),
        'sonata_admin_retrieve_autocomplete_items' => array(array(), array('_controller' => 'sonata.admin.action.retrieve_autocomplete_items'), array(), array(array('text', '/admin/core/get-autocomplete-items')), array(), array()),
        'admin_sonata_user_user_list' => array(array(), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'sonata.user.admin.user', '_sonata_name' => 'admin_sonata_user_user_list'), array(), array(array('text', '/admin/sonata/user/user/list')), array(), array()),
        'admin_sonata_user_user_create' => array(array(), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'sonata.user.admin.user', '_sonata_name' => 'admin_sonata_user_user_create'), array(), array(array('text', '/admin/sonata/user/user/create')), array(), array()),
        'admin_sonata_user_user_batch' => array(array(), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'sonata.user.admin.user', '_sonata_name' => 'admin_sonata_user_user_batch'), array(), array(array('text', '/admin/sonata/user/user/batch')), array(), array()),
        'admin_sonata_user_user_edit' => array(array('id'), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'sonata.user.admin.user', '_sonata_name' => 'admin_sonata_user_user_edit'), array(), array(array('text', '/edit'), array('variable', '/', '[^/]++', 'id', true), array('text', '/admin/sonata/user/user')), array(), array()),
        'admin_sonata_user_user_delete' => array(array('id'), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'sonata.user.admin.user', '_sonata_name' => 'admin_sonata_user_user_delete'), array(), array(array('text', '/delete'), array('variable', '/', '[^/]++', 'id', true), array('text', '/admin/sonata/user/user')), array(), array()),
        'admin_sonata_user_user_show' => array(array('id'), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'sonata.user.admin.user', '_sonata_name' => 'admin_sonata_user_user_show'), array(), array(array('text', '/show'), array('variable', '/', '[^/]++', 'id', true), array('text', '/admin/sonata/user/user')), array(), array()),
        'admin_sonata_user_user_export' => array(array(), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'sonata.user.admin.user', '_sonata_name' => 'admin_sonata_user_user_export'), array(), array(array('text', '/admin/sonata/user/user/export')), array(), array()),
        'admin_sonata_user_group_list' => array(array(), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'sonata.user.admin.group', '_sonata_name' => 'admin_sonata_user_group_list'), array(), array(array('text', '/admin/sonata/user/group/list')), array(), array()),
        'admin_sonata_user_group_create' => array(array(), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'sonata.user.admin.group', '_sonata_name' => 'admin_sonata_user_group_create'), array(), array(array('text', '/admin/sonata/user/group/create')), array(), array()),
        'admin_sonata_user_group_batch' => array(array(), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'sonata.user.admin.group', '_sonata_name' => 'admin_sonata_user_group_batch'), array(), array(array('text', '/admin/sonata/user/group/batch')), array(), array()),
        'admin_sonata_user_group_edit' => array(array('id'), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'sonata.user.admin.group', '_sonata_name' => 'admin_sonata_user_group_edit'), array(), array(array('text', '/edit'), array('variable', '/', '[^/]++', 'id', true), array('text', '/admin/sonata/user/group')), array(), array()),
        'admin_sonata_user_group_delete' => array(array('id'), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'sonata.user.admin.group', '_sonata_name' => 'admin_sonata_user_group_delete'), array(), array(array('text', '/delete'), array('variable', '/', '[^/]++', 'id', true), array('text', '/admin/sonata/user/group')), array(), array()),
        'admin_sonata_user_group_show' => array(array('id'), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'sonata.user.admin.group', '_sonata_name' => 'admin_sonata_user_group_show'), array(), array(array('text', '/show'), array('variable', '/', '[^/]++', 'id', true), array('text', '/admin/sonata/user/group')), array(), array()),
        'admin_sonata_user_group_export' => array(array(), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'sonata.user.admin.group', '_sonata_name' => 'admin_sonata_user_group_export'), array(), array(array('text', '/admin/sonata/user/group/export')), array(), array()),
        'admin_app_slide_list' => array(array(), array('_controller' => 'App\\Controller\\SlideAdminController::listAction', '_sonata_admin' => 'admin.slide', '_sonata_name' => 'admin_app_slide_list'), array(), array(array('text', '/admin/app/slide/list')), array(), array()),
        'admin_app_slide_create' => array(array(), array('_controller' => 'App\\Controller\\SlideAdminController::createAction', '_sonata_admin' => 'admin.slide', '_sonata_name' => 'admin_app_slide_create'), array(), array(array('text', '/admin/app/slide/create')), array(), array()),
        'admin_app_slide_batch' => array(array(), array('_controller' => 'App\\Controller\\SlideAdminController::batchAction', '_sonata_admin' => 'admin.slide', '_sonata_name' => 'admin_app_slide_batch'), array(), array(array('text', '/admin/app/slide/batch')), array(), array()),
        'admin_app_slide_edit' => array(array('id'), array('_controller' => 'App\\Controller\\SlideAdminController::editAction', '_sonata_admin' => 'admin.slide', '_sonata_name' => 'admin_app_slide_edit'), array(), array(array('text', '/edit'), array('variable', '/', '[^/]++', 'id', true), array('text', '/admin/app/slide')), array(), array()),
        'admin_app_slide_delete' => array(array('id'), array('_controller' => 'App\\Controller\\SlideAdminController::deleteAction', '_sonata_admin' => 'admin.slide', '_sonata_name' => 'admin_app_slide_delete'), array(), array(array('text', '/delete'), array('variable', '/', '[^/]++', 'id', true), array('text', '/admin/app/slide')), array(), array()),
        'admin_app_slide_show' => array(array('id'), array('_controller' => 'App\\Controller\\SlideAdminController::showAction', '_sonata_admin' => 'admin.slide', '_sonata_name' => 'admin_app_slide_show'), array(), array(array('text', '/show'), array('variable', '/', '[^/]++', 'id', true), array('text', '/admin/app/slide')), array(), array()),
        'admin_app_slide_export' => array(array(), array('_controller' => 'App\\Controller\\SlideAdminController::exportAction', '_sonata_admin' => 'admin.slide', '_sonata_name' => 'admin_app_slide_export'), array(), array(array('text', '/admin/app/slide/export')), array(), array()),
        'admin_app_slide_building_list' => array(array('id'), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.slide|admin.building', '_sonata_name' => 'admin_app_slide_building_list'), array(), array(array('text', '/building/list'), array('variable', '/', '[^/]++', 'id', true), array('text', '/admin/app/slide')), array(), array()),
        'admin_app_slide_building_create' => array(array('id'), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.slide|admin.building', '_sonata_name' => 'admin_app_slide_building_create'), array(), array(array('text', '/building/create'), array('variable', '/', '[^/]++', 'id', true), array('text', '/admin/app/slide')), array(), array()),
        'admin_app_slide_building_batch' => array(array('id'), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.slide|admin.building', '_sonata_name' => 'admin_app_slide_building_batch'), array(), array(array('text', '/building/batch'), array('variable', '/', '[^/]++', 'id', true), array('text', '/admin/app/slide')), array(), array()),
        'admin_app_slide_building_edit' => array(array('id', 'childId'), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.slide|admin.building', '_sonata_name' => 'admin_app_slide_building_edit'), array(), array(array('text', '/edit'), array('variable', '/', '[^/]++', 'childId', true), array('text', '/building'), array('variable', '/', '[^/]++', 'id', true), array('text', '/admin/app/slide')), array(), array()),
        'admin_app_slide_building_delete' => array(array('id', 'childId'), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.slide|admin.building', '_sonata_name' => 'admin_app_slide_building_delete'), array(), array(array('text', '/delete'), array('variable', '/', '[^/]++', 'childId', true), array('text', '/building'), array('variable', '/', '[^/]++', 'id', true), array('text', '/admin/app/slide')), array(), array()),
        'admin_app_slide_building_show' => array(array('id', 'childId'), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.slide|admin.building', '_sonata_name' => 'admin_app_slide_building_show'), array(), array(array('text', '/show'), array('variable', '/', '[^/]++', 'childId', true), array('text', '/building'), array('variable', '/', '[^/]++', 'id', true), array('text', '/admin/app/slide')), array(), array()),
        'admin_app_slide_building_export' => array(array('id'), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.slide|admin.building', '_sonata_name' => 'admin_app_slide_building_export'), array(), array(array('text', '/building/export'), array('variable', '/', '[^/]++', 'id', true), array('text', '/admin/app/slide')), array(), array()),
        'admin_app_slide_increase_priority' => array(array('id'), array('_controller' => 'App\\Controller\\SlideAdminController::increasePriorityAction', '_sonata_admin' => 'admin.slide', '_sonata_name' => 'admin_app_slide_increase_priority'), array(), array(array('text', '/increase-priority'), array('variable', '/', '[^/]++', 'id', true), array('text', '/admin/app/slide')), array(), array()),
        'admin_app_slide_decrease_priority' => array(array('id'), array('_controller' => 'App\\Controller\\SlideAdminController::decreasePriorityAction', '_sonata_admin' => 'admin.slide', '_sonata_name' => 'admin_app_slide_decrease_priority'), array(), array(array('text', '/decrease-priority'), array('variable', '/', '[^/]++', 'id', true), array('text', '/admin/app/slide')), array(), array()),
        'admin_app_building_list' => array(array(), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.building', '_sonata_name' => 'admin_app_building_list'), array(), array(array('text', '/admin/app/building/list')), array(), array()),
        'admin_app_building_create' => array(array(), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.building', '_sonata_name' => 'admin_app_building_create'), array(), array(array('text', '/admin/app/building/create')), array(), array()),
        'admin_app_building_batch' => array(array(), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.building', '_sonata_name' => 'admin_app_building_batch'), array(), array(array('text', '/admin/app/building/batch')), array(), array()),
        'admin_app_building_edit' => array(array('id'), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.building', '_sonata_name' => 'admin_app_building_edit'), array(), array(array('text', '/edit'), array('variable', '/', '[^/]++', 'id', true), array('text', '/admin/app/building')), array(), array()),
        'admin_app_building_delete' => array(array('id'), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.building', '_sonata_name' => 'admin_app_building_delete'), array(), array(array('text', '/delete'), array('variable', '/', '[^/]++', 'id', true), array('text', '/admin/app/building')), array(), array()),
        'admin_app_building_show' => array(array('id'), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.building', '_sonata_name' => 'admin_app_building_show'), array(), array(array('text', '/show'), array('variable', '/', '[^/]++', 'id', true), array('text', '/admin/app/building')), array(), array()),
        'admin_app_building_export' => array(array(), array('_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.building', '_sonata_name' => 'admin_app_building_export'), array(), array(array('text', '/admin/app/building/export')), array(), array()),
        '_twig_error_test' => array(array('code', '_format'), array('_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code' => '\\d+'), array(array('variable', '.', '[^/]++', '_format', true), array('variable', '/', '\\d+', 'code', true), array('text', '/_error')), array(), array()),
        '_wdt' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::toolbarAction'), array(), array(array('variable', '/', '[^/]++', 'token', true), array('text', '/_wdt')), array(), array()),
        '_profiler_home' => array(array(), array('_controller' => 'web_profiler.controller.profiler::homeAction'), array(), array(array('text', '/_profiler/')), array(), array()),
        '_profiler_search' => array(array(), array('_controller' => 'web_profiler.controller.profiler::searchAction'), array(), array(array('text', '/_profiler/search')), array(), array()),
        '_profiler_search_bar' => array(array(), array('_controller' => 'web_profiler.controller.profiler::searchBarAction'), array(), array(array('text', '/_profiler/search_bar')), array(), array()),
        '_profiler_phpinfo' => array(array(), array('_controller' => 'web_profiler.controller.profiler::phpinfoAction'), array(), array(array('text', '/_profiler/phpinfo')), array(), array()),
        '_profiler_search_results' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array(), array(array('text', '/search/results'), array('variable', '/', '[^/]++', 'token', true), array('text', '/_profiler')), array(), array()),
        '_profiler_open_file' => array(array(), array('_controller' => 'web_profiler.controller.profiler::openAction'), array(), array(array('text', '/_profiler/open')), array(), array()),
        '_profiler' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::panelAction'), array(), array(array('variable', '/', '[^/]++', 'token', true), array('text', '/_profiler')), array(), array()),
        '_profiler_router' => array(array('token'), array('_controller' => 'web_profiler.controller.router::panelAction'), array(), array(array('text', '/router'), array('variable', '/', '[^/]++', 'token', true), array('text', '/_profiler')), array(), array()),
        '_profiler_exception' => array(array('token'), array('_controller' => 'web_profiler.controller.exception::showAction'), array(), array(array('text', '/exception'), array('variable', '/', '[^/]++', 'token', true), array('text', '/_profiler')), array(), array()),
        '_profiler_exception_css' => array(array('token'), array('_controller' => 'web_profiler.controller.exception::cssAction'), array(), array(array('text', '/exception.css'), array('variable', '/', '[^/]++', 'token', true), array('text', '/_profiler')), array(), array()),
        'sonata_user_admin_security_login' => array(array(), array('_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::loginAction'), array(), array(array('text', '/admin/login')), array(), array()),
        'sonata_user_admin_security_check' => array(array(), array('_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::checkAction'), array(), array(array('text', '/admin/login_check')), array(), array()),
        'sonata_user_admin_security_logout' => array(array(), array('_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::logoutAction'), array(), array(array('text', '/admin/logout')), array(), array()),
        'sonata_user_admin_resetting_request' => array(array(), array('_controller' => 'Sonata\\UserBundle\\Controller\\AdminResettingController::requestAction'), array(), array(array('text', '/admin/resetting/request')), array(), array()),
        'sonata_user_admin_resetting_send_email' => array(array(), array('_controller' => 'Sonata\\UserBundle\\Controller\\AdminResettingController::sendEmailAction'), array(), array(array('text', '/admin/resetting/send-email')), array(), array()),
        'sonata_user_admin_resetting_check_email' => array(array(), array('_controller' => 'Sonata\\UserBundle\\Controller\\AdminResettingController::checkEmailAction'), array(), array(array('text', '/admin/resetting/check-email')), array(), array()),
        'sonata_user_admin_resetting_reset' => array(array('token'), array('_controller' => 'Sonata\\UserBundle\\Controller\\AdminResettingController::resetAction'), array(), array(array('variable', '/', '[^/]++', 'token', true), array('text', '/admin/resetting/reset')), array(), array()),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && null !== $name) {
            do {
                if ((self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
                    unset($parameters['_locale']);
                    $name .= '.'.$locale;
                    break;
                }
            } while (false !== $locale = strstr($locale, '_', true));
        }

        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
