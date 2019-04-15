<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = array(
            '/' => array(array(array('_route' => 'main-index', '_controller' => 'App\\Controller\\DefaultController::indexAction'), null, null, null, false, false, null)),
            '/profile/edit' => array(array(array('_route' => 'fos_user_profile_edit', '_controller' => 'fos_user.profile.controller:editAction'), null, array('GET' => 0, 'POST' => 1), null, false, false, null)),
            '/register/check-email' => array(array(array('_route' => 'fos_user_registration_check_email', '_controller' => 'fos_user.registration.controller:checkEmailAction'), null, array('GET' => 0), null, false, false, null)),
            '/register/confirmed' => array(array(array('_route' => 'fos_user_registration_confirmed', '_controller' => 'fos_user.registration.controller:confirmedAction'), null, array('GET' => 0), null, false, false, null)),
            '/resetting/request' => array(array(array('_route' => 'fos_user_resetting_request', '_controller' => 'fos_user.resetting.controller:requestAction'), null, array('GET' => 0), null, false, false, null)),
            '/resetting/send-email' => array(array(array('_route' => 'fos_user_resetting_send_email', '_controller' => 'fos_user.resetting.controller:sendEmailAction'), null, array('POST' => 0), null, false, false, null)),
            '/resetting/check-email' => array(array(array('_route' => 'fos_user_resetting_check_email', '_controller' => 'fos_user.resetting.controller:checkEmailAction'), null, array('GET' => 0), null, false, false, null)),
            '/profile/change-password' => array(array(array('_route' => 'fos_user_change_password', '_controller' => 'fos_user.change_password.controller:changePasswordAction'), null, array('GET' => 0, 'POST' => 1), null, false, false, null)),
            '/admin/dashboard' => array(array(array('_route' => 'sonata_admin_dashboard', '_controller' => 'Sonata\\AdminBundle\\Action\\DashboardAction'), null, null, null, false, false, null)),
            '/admin/core/get-form-field-element' => array(array(array('_route' => 'sonata_admin_retrieve_form_element', '_controller' => 'sonata.admin.action.retrieve_form_field_element'), null, null, null, false, false, null)),
            '/admin/core/append-form-field-element' => array(array(array('_route' => 'sonata_admin_append_form_element', '_controller' => 'sonata.admin.action.append_form_field_element'), null, null, null, false, false, null)),
            '/admin/core/set-object-field-value' => array(array(array('_route' => 'sonata_admin_set_object_field_value', '_controller' => 'sonata.admin.action.set_object_field_value'), null, null, null, false, false, null)),
            '/admin/search' => array(array(array('_route' => 'sonata_admin_search', '_controller' => 'Sonata\\AdminBundle\\Action\\SearchAction'), null, null, null, false, false, null)),
            '/admin/core/get-autocomplete-items' => array(array(array('_route' => 'sonata_admin_retrieve_autocomplete_items', '_controller' => 'sonata.admin.action.retrieve_autocomplete_items'), null, null, null, false, false, null)),
            '/admin/sonata/user/user/list' => array(array(array('_route' => 'admin_sonata_user_user_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'sonata.user.admin.user', '_sonata_name' => 'admin_sonata_user_user_list'), null, null, null, false, false, null)),
            '/admin/sonata/user/user/create' => array(array(array('_route' => 'admin_sonata_user_user_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'sonata.user.admin.user', '_sonata_name' => 'admin_sonata_user_user_create'), null, null, null, false, false, null)),
            '/admin/sonata/user/user/batch' => array(array(array('_route' => 'admin_sonata_user_user_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'sonata.user.admin.user', '_sonata_name' => 'admin_sonata_user_user_batch'), null, null, null, false, false, null)),
            '/admin/sonata/user/user/export' => array(array(array('_route' => 'admin_sonata_user_user_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'sonata.user.admin.user', '_sonata_name' => 'admin_sonata_user_user_export'), null, null, null, false, false, null)),
            '/admin/sonata/user/group/list' => array(array(array('_route' => 'admin_sonata_user_group_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'sonata.user.admin.group', '_sonata_name' => 'admin_sonata_user_group_list'), null, null, null, false, false, null)),
            '/admin/sonata/user/group/create' => array(array(array('_route' => 'admin_sonata_user_group_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'sonata.user.admin.group', '_sonata_name' => 'admin_sonata_user_group_create'), null, null, null, false, false, null)),
            '/admin/sonata/user/group/batch' => array(array(array('_route' => 'admin_sonata_user_group_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'sonata.user.admin.group', '_sonata_name' => 'admin_sonata_user_group_batch'), null, null, null, false, false, null)),
            '/admin/sonata/user/group/export' => array(array(array('_route' => 'admin_sonata_user_group_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'sonata.user.admin.group', '_sonata_name' => 'admin_sonata_user_group_export'), null, null, null, false, false, null)),
            '/admin/app/slide/list' => array(array(array('_route' => 'admin_app_slide_list', '_controller' => 'App\\Controller\\SlideAdminController::listAction', '_sonata_admin' => 'admin.slide', '_sonata_name' => 'admin_app_slide_list'), null, null, null, false, false, null)),
            '/admin/app/slide/create' => array(array(array('_route' => 'admin_app_slide_create', '_controller' => 'App\\Controller\\SlideAdminController::createAction', '_sonata_admin' => 'admin.slide', '_sonata_name' => 'admin_app_slide_create'), null, null, null, false, false, null)),
            '/admin/app/slide/batch' => array(array(array('_route' => 'admin_app_slide_batch', '_controller' => 'App\\Controller\\SlideAdminController::batchAction', '_sonata_admin' => 'admin.slide', '_sonata_name' => 'admin_app_slide_batch'), null, null, null, false, false, null)),
            '/admin/app/slide/export' => array(array(array('_route' => 'admin_app_slide_export', '_controller' => 'App\\Controller\\SlideAdminController::exportAction', '_sonata_admin' => 'admin.slide', '_sonata_name' => 'admin_app_slide_export'), null, null, null, false, false, null)),
            '/admin/app/building/list' => array(array(array('_route' => 'admin_app_building_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.building', '_sonata_name' => 'admin_app_building_list'), null, null, null, false, false, null)),
            '/admin/app/building/create' => array(array(array('_route' => 'admin_app_building_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.building', '_sonata_name' => 'admin_app_building_create'), null, null, null, false, false, null)),
            '/admin/app/building/batch' => array(array(array('_route' => 'admin_app_building_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.building', '_sonata_name' => 'admin_app_building_batch'), null, null, null, false, false, null)),
            '/admin/app/building/export' => array(array(array('_route' => 'admin_app_building_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.building', '_sonata_name' => 'admin_app_building_export'), null, null, null, false, false, null)),
            '/_profiler/search' => array(array(array('_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'), null, null, null, false, false, null)),
            '/_profiler/search_bar' => array(array(array('_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'), null, null, null, false, false, null)),
            '/_profiler/phpinfo' => array(array(array('_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'), null, null, null, false, false, null)),
            '/_profiler/open' => array(array(array('_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'), null, null, null, false, false, null)),
            '/admin/login' => array(array(array('_route' => 'sonata_user_admin_security_login', '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::loginAction'), null, null, null, false, false, null)),
            '/admin/login_check' => array(array(array('_route' => 'sonata_user_admin_security_check', '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::checkAction'), null, array('POST' => 0), null, false, false, null)),
            '/admin/logout' => array(array(array('_route' => 'sonata_user_admin_security_logout', '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::logoutAction'), null, null, null, false, false, null)),
            '/admin/resetting/request' => array(array(array('_route' => 'sonata_user_admin_resetting_request', '_controller' => 'Sonata\\UserBundle\\Controller\\AdminResettingController::requestAction'), null, array('GET' => 0), null, false, false, null)),
            '/admin/resetting/send-email' => array(array(array('_route' => 'sonata_user_admin_resetting_send_email', '_controller' => 'Sonata\\UserBundle\\Controller\\AdminResettingController::sendEmailAction'), null, array('POST' => 0), null, false, false, null)),
            '/admin/resetting/check-email' => array(array(array('_route' => 'sonata_user_admin_resetting_check_email', '_controller' => 'Sonata\\UserBundle\\Controller\\AdminResettingController::checkEmailAction'), null, array('GET' => 0), null, false, false, null)),
        );
        $this->regexpList = array(
            0 => '{^(?'
                    .'|/([^/]++)(*:16)'
                    .'|/log(?'
                        .'|in(?'
                            .'|(*:35)'
                            .'|_check(*:48)'
                        .')'
                        .'|out(*:59)'
                    .')'
                    .'|/profile(*:75)'
                    .'|/re(?'
                        .'|gister(?'
                            .'|(*:97)'
                            .'|/confirm/([^/]++)(*:121)'
                        .')'
                        .'|setting/reset/([^/]++)(*:152)'
                    .')'
                    .'|/admin(?'
                        .'|(*:170)'
                        .'|/(?'
                            .'|core/get\\-short\\-object\\-description(?:\\.(html|json))?(*:236)'
                            .'|sonata/user/(?'
                                .'|user/([^/]++)/(?'
                                    .'|edit(*:280)'
                                    .'|delete(*:294)'
                                    .'|show(*:306)'
                                .')'
                                .'|group/([^/]++)/(?'
                                    .'|edit(*:337)'
                                    .'|delete(*:351)'
                                    .'|show(*:363)'
                                .')'
                            .')'
                            .'|app/(?'
                                .'|slide/([^/]++)/(?'
                                    .'|edit(*:402)'
                                    .'|de(?'
                                        .'|lete(*:419)'
                                        .'|crease\\-priority(*:443)'
                                    .')'
                                    .'|show(*:456)'
                                    .'|building/(?'
                                        .'|list(*:480)'
                                        .'|create(*:494)'
                                        .'|batch(*:507)'
                                        .'|([^/]++)/(?'
                                            .'|edit(*:531)'
                                            .'|delete(*:545)'
                                            .'|show(*:557)'
                                        .')'
                                        .'|export(*:572)'
                                    .')'
                                    .'|increase\\-priority(*:599)'
                                .')'
                                .'|building/([^/]++)/(?'
                                    .'|edit(*:633)'
                                    .'|delete(*:647)'
                                    .'|show(*:659)'
                                .')'
                            .')'
                            .'|resetting/reset/([^/]++)(*:693)'
                        .')'
                    .')'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:734)'
                        .'|wdt/([^/]++)(*:754)'
                        .'|profiler(?'
                            .'|(*:773)'
                            .'|/([^/]++)(?'
                                .'|/(?'
                                    .'|search/results(*:811)'
                                    .'|router(*:825)'
                                    .'|exception(?'
                                        .'|(*:845)'
                                        .'|\\.css(*:858)'
                                    .')'
                                .')'
                                .'|(*:868)'
                            .')'
                        .')'
                    .')'
                .')/?$}sDu',
        );
        $this->dynamicRoutes = array(
            16 => array(array(array('_route' => 'tv-action', '_controller' => 'App\\Controller\\DefaultController::tvAction'), array('url'), null, null, false, true, null)),
            35 => array(array(array('_route' => 'fos_user_security_login', '_controller' => 'fos_user.security.controller:loginAction'), array(), array('GET' => 0, 'POST' => 1), null, false, false, null)),
            48 => array(array(array('_route' => 'fos_user_security_check', '_controller' => 'fos_user.security.controller:checkAction'), array(), array('POST' => 0), null, false, false, null)),
            59 => array(array(array('_route' => 'fos_user_security_logout', '_controller' => 'fos_user.security.controller:logoutAction'), array(), array('GET' => 0, 'POST' => 1), null, false, false, null)),
            75 => array(array(array('_route' => 'fos_user_profile_show', '_controller' => 'fos_user.profile.controller:showAction'), array(), array('GET' => 0), null, true, false, null)),
            97 => array(array(array('_route' => 'fos_user_registration_register', '_controller' => 'fos_user.registration.controller:registerAction'), array(), array('GET' => 0, 'POST' => 1), null, true, false, null)),
            121 => array(array(array('_route' => 'fos_user_registration_confirm', '_controller' => 'fos_user.registration.controller:confirmAction'), array('token'), array('GET' => 0), null, false, true, null)),
            152 => array(array(array('_route' => 'fos_user_resetting_reset', '_controller' => 'fos_user.resetting.controller:resetAction'), array('token'), array('GET' => 0, 'POST' => 1), null, false, true, null)),
            170 => array(array(array('_route' => 'sonata_admin_redirect', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction', 'route' => 'sonata_admin_dashboard', 'permanent' => 'true'), array(), null, null, true, false, null)),
            236 => array(array(array('_route' => 'sonata_admin_short_object_information', '_controller' => 'sonata.admin.action.get_short_object_description', '_format' => 'html'), array('_format'), null, null, false, true, null)),
            280 => array(array(array('_route' => 'admin_sonata_user_user_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'sonata.user.admin.user', '_sonata_name' => 'admin_sonata_user_user_edit'), array('id'), null, null, false, false, null)),
            294 => array(array(array('_route' => 'admin_sonata_user_user_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'sonata.user.admin.user', '_sonata_name' => 'admin_sonata_user_user_delete'), array('id'), null, null, false, false, null)),
            306 => array(array(array('_route' => 'admin_sonata_user_user_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'sonata.user.admin.user', '_sonata_name' => 'admin_sonata_user_user_show'), array('id'), null, null, false, false, null)),
            337 => array(array(array('_route' => 'admin_sonata_user_group_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'sonata.user.admin.group', '_sonata_name' => 'admin_sonata_user_group_edit'), array('id'), null, null, false, false, null)),
            351 => array(array(array('_route' => 'admin_sonata_user_group_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'sonata.user.admin.group', '_sonata_name' => 'admin_sonata_user_group_delete'), array('id'), null, null, false, false, null)),
            363 => array(array(array('_route' => 'admin_sonata_user_group_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'sonata.user.admin.group', '_sonata_name' => 'admin_sonata_user_group_show'), array('id'), null, null, false, false, null)),
            402 => array(array(array('_route' => 'admin_app_slide_edit', '_controller' => 'App\\Controller\\SlideAdminController::editAction', '_sonata_admin' => 'admin.slide', '_sonata_name' => 'admin_app_slide_edit'), array('id'), null, null, false, false, null)),
            419 => array(array(array('_route' => 'admin_app_slide_delete', '_controller' => 'App\\Controller\\SlideAdminController::deleteAction', '_sonata_admin' => 'admin.slide', '_sonata_name' => 'admin_app_slide_delete'), array('id'), null, null, false, false, null)),
            443 => array(array(array('_route' => 'admin_app_slide_decrease_priority', '_controller' => 'App\\Controller\\SlideAdminController::decreasePriorityAction', '_sonata_admin' => 'admin.slide', '_sonata_name' => 'admin_app_slide_decrease_priority'), array('id'), null, null, false, false, null)),
            456 => array(array(array('_route' => 'admin_app_slide_show', '_controller' => 'App\\Controller\\SlideAdminController::showAction', '_sonata_admin' => 'admin.slide', '_sonata_name' => 'admin_app_slide_show'), array('id'), null, null, false, false, null)),
            480 => array(array(array('_route' => 'admin_app_slide_building_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.slide|admin.building', '_sonata_name' => 'admin_app_slide_building_list'), array('id'), null, null, false, false, null)),
            494 => array(array(array('_route' => 'admin_app_slide_building_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.slide|admin.building', '_sonata_name' => 'admin_app_slide_building_create'), array('id'), null, null, false, false, null)),
            507 => array(array(array('_route' => 'admin_app_slide_building_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.slide|admin.building', '_sonata_name' => 'admin_app_slide_building_batch'), array('id'), null, null, false, false, null)),
            531 => array(array(array('_route' => 'admin_app_slide_building_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.slide|admin.building', '_sonata_name' => 'admin_app_slide_building_edit'), array('id', 'childId'), null, null, false, false, null)),
            545 => array(array(array('_route' => 'admin_app_slide_building_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.slide|admin.building', '_sonata_name' => 'admin_app_slide_building_delete'), array('id', 'childId'), null, null, false, false, null)),
            557 => array(array(array('_route' => 'admin_app_slide_building_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.slide|admin.building', '_sonata_name' => 'admin_app_slide_building_show'), array('id', 'childId'), null, null, false, false, null)),
            572 => array(array(array('_route' => 'admin_app_slide_building_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.slide|admin.building', '_sonata_name' => 'admin_app_slide_building_export'), array('id'), null, null, false, false, null)),
            599 => array(array(array('_route' => 'admin_app_slide_increase_priority', '_controller' => 'App\\Controller\\SlideAdminController::increasePriorityAction', '_sonata_admin' => 'admin.slide', '_sonata_name' => 'admin_app_slide_increase_priority'), array('id'), null, null, false, false, null)),
            633 => array(array(array('_route' => 'admin_app_building_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.building', '_sonata_name' => 'admin_app_building_edit'), array('id'), null, null, false, false, null)),
            647 => array(array(array('_route' => 'admin_app_building_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.building', '_sonata_name' => 'admin_app_building_delete'), array('id'), null, null, false, false, null)),
            659 => array(array(array('_route' => 'admin_app_building_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.building', '_sonata_name' => 'admin_app_building_show'), array('id'), null, null, false, false, null)),
            693 => array(array(array('_route' => 'sonata_user_admin_resetting_reset', '_controller' => 'Sonata\\UserBundle\\Controller\\AdminResettingController::resetAction'), array('token'), array('GET' => 0, 'POST' => 1), null, false, true, null)),
            734 => array(array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null, false, true, null)),
            754 => array(array(array('_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'), array('token'), null, null, false, true, null)),
            773 => array(array(array('_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'), array(), null, null, true, false, null)),
            811 => array(array(array('_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array('token'), null, null, false, false, null)),
            825 => array(array(array('_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'), array('token'), null, null, false, false, null)),
            845 => array(array(array('_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'), array('token'), null, null, false, false, null)),
            858 => array(array(array('_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'), array('token'), null, null, false, false, null)),
            868 => array(array(array('_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'), array('token'), null, null, false, true, null)),
        );
    }
}
