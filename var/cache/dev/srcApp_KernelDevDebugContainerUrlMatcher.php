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
        $this->staticRoutes = [
            '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
            '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
            '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
            '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
            '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
            '/addresses' => [[['_route' => 'addresses_index', '_controller' => 'App\\Controller\\AddressesController::index'], null, ['GET' => 0], null, true, false, null]],
            '/addresses/new' => [[['_route' => 'addresses_new', '_controller' => 'App\\Controller\\AddressesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/category' => [[['_route' => 'category_index', '_controller' => 'App\\Controller\\CategoryController::index'], null, ['GET' => 0], null, true, false, null]],
            '/category/new' => [[['_route' => 'category_new', '_controller' => 'App\\Controller\\CategoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/createaccount' => [[['_route' => 'creataccount', '_controller' => 'App\\Controller\\Client_Create_Account::index'], null, null, null, false, false, null]],
            '/commande' => [[['_route' => 'Commande', '_controller' => 'App\\Controller\\Commande::index'], null, null, null, false, false, null]],
            '/connexion' => [[['_route' => 'Connexion', '_controller' => 'App\\Controller\\Connexion::index'], null, null, null, false, false, null]],
            '/enquiry' => [[['_route' => 'enquiry_index', '_controller' => 'App\\Controller\\EnquiryController::index'], null, ['GET' => 0], null, true, false, null]],
            '/enquiry/new' => [[['_route' => 'enquiry_new', '_controller' => 'App\\Controller\\EnquiryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/groupes' => [[['_route' => 'Groupes', '_controller' => 'App\\Controller\\Groupes::index'], null, null, null, false, false, null]],
            '/groups' => [[['_route' => 'groups_index', '_controller' => 'App\\Controller\\GroupsController::index'], null, ['GET' => 0], null, true, false, null]],
            '/groups/new' => [[['_route' => 'groups_new', '_controller' => 'App\\Controller\\GroupsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
            '/Issam' => [[['_route' => 'issam', '_controller' => 'App\\Controller\\IssamController\\IssamController::index'], null, null, null, false, false, null]],
            '/mygroups' => [[['_route' => 'mygroups', '_controller' => 'App\\Controller\\MyGroups::index'], null, null, null, false, false, null]],
            '/panier' => [[['_route' => 'Panier', '_controller' => 'App\\Controller\\Panier::index'], null, null, null, false, false, null]],
            '/service' => [[['_route' => 'service_index', '_controller' => 'App\\Controller\\ServiceController::index'], null, ['GET' => 0], null, true, false, null]],
            '/service/new' => [[['_route' => 'service_new', '_controller' => 'App\\Controller\\ServiceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/users' => [[['_route' => 'users_index', '_controller' => 'App\\Controller\\UsersController::index'], null, ['GET' => 0], null, true, false, null]],
            '/users/new' => [[['_route' => 'users_new', '_controller' => 'App\\Controller\\UsersController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/zone' => [[['_route' => 'zone_index', '_controller' => 'App\\Controller\\ZoneController::index'], null, ['GET' => 0], null, true, false, null]],
            '/zone/new' => [[['_route' => 'zone_new', '_controller' => 'App\\Controller\\ZoneController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        ];
        $this->regexpList = [
            0 => '{^(?'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                        .'|wdt/([^/]++)(*:57)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:102)'
                                .'|router(*:116)'
                                .'|exception(?'
                                    .'|(*:136)'
                                    .'|\\.css(*:149)'
                                .')'
                            .')'
                            .'|(*:159)'
                        .')'
                    .')'
                    .'|/addresses/([^/]++)(?'
                        .'|(*:191)'
                        .'|/edit(*:204)'
                        .'|(*:212)'
                    .')'
                    .'|/category/([^/]++)(?'
                        .'|(*:242)'
                        .'|/edit(*:255)'
                        .'|(*:263)'
                    .')'
                    .'|/enquiry/([^/]++)(?'
                        .'|(*:292)'
                        .'|/edit(*:305)'
                        .'|(*:313)'
                    .')'
                    .'|/groups/([^/]++)(?'
                        .'|(*:341)'
                        .'|/edit(*:354)'
                        .'|(*:362)'
                    .')'
                    .'|/service/([^/]++)(?'
                        .'|(*:391)'
                        .'|/edit(*:404)'
                        .'|(*:412)'
                    .')'
                    .'|/users/([^/]++)(?'
                        .'|(*:439)'
                        .'|/edit(*:452)'
                        .'|(*:460)'
                    .')'
                    .'|/zone/([^/]++)(?'
                        .'|(*:486)'
                        .'|/edit(*:499)'
                        .'|(*:507)'
                    .')'
                .')/?$}sDu',
        ];
        $this->dynamicRoutes = [
            38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
            57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
            102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
            116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
            136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
            149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
            159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
            191 => [[['_route' => 'addresses_show', '_controller' => 'App\\Controller\\AddressesController::show'], ['idAddress'], ['GET' => 0], null, false, true, null]],
            204 => [[['_route' => 'addresses_edit', '_controller' => 'App\\Controller\\AddressesController::edit'], ['idAddress'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            212 => [[['_route' => 'addresses_delete', '_controller' => 'App\\Controller\\AddressesController::delete'], ['idAddress'], ['DELETE' => 0], null, false, true, null]],
            242 => [[['_route' => 'category_show', '_controller' => 'App\\Controller\\CategoryController::show'], ['idCategory'], ['GET' => 0], null, false, true, null]],
            255 => [[['_route' => 'category_edit', '_controller' => 'App\\Controller\\CategoryController::edit'], ['idCategory'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            263 => [[['_route' => 'category_delete', '_controller' => 'App\\Controller\\CategoryController::delete'], ['idCategory'], ['DELETE' => 0], null, false, true, null]],
            292 => [[['_route' => 'enquiry_show', '_controller' => 'App\\Controller\\EnquiryController::show'], ['idOrder'], ['GET' => 0], null, false, true, null]],
            305 => [[['_route' => 'enquiry_edit', '_controller' => 'App\\Controller\\EnquiryController::edit'], ['idOrder'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            313 => [[['_route' => 'enquiry_delete', '_controller' => 'App\\Controller\\EnquiryController::delete'], ['idOrder'], ['DELETE' => 0], null, false, true, null]],
            341 => [[['_route' => 'groups_show', '_controller' => 'App\\Controller\\GroupsController::show'], ['idGroup'], ['GET' => 0], null, false, true, null]],
            354 => [[['_route' => 'groups_edit', '_controller' => 'App\\Controller\\GroupsController::edit'], ['idGroup'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            362 => [[['_route' => 'groups_delete', '_controller' => 'App\\Controller\\GroupsController::delete'], ['idGroup'], ['DELETE' => 0], null, false, true, null]],
            391 => [[['_route' => 'service_show', '_controller' => 'App\\Controller\\ServiceController::show'], ['idService'], ['GET' => 0], null, false, true, null]],
            404 => [[['_route' => 'service_edit', '_controller' => 'App\\Controller\\ServiceController::edit'], ['idService'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            412 => [[['_route' => 'service_delete', '_controller' => 'App\\Controller\\ServiceController::delete'], ['idService'], ['DELETE' => 0], null, false, true, null]],
            439 => [[['_route' => 'users_show', '_controller' => 'App\\Controller\\UsersController::show'], ['idUser'], ['GET' => 0], null, false, true, null]],
            452 => [[['_route' => 'users_edit', '_controller' => 'App\\Controller\\UsersController::edit'], ['idUser'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            460 => [[['_route' => 'users_delete', '_controller' => 'App\\Controller\\UsersController::delete'], ['idUser'], ['DELETE' => 0], null, false, true, null]],
            486 => [[['_route' => 'zone_show', '_controller' => 'App\\Controller\\ZoneController::show'], ['idZone'], ['GET' => 0], null, false, true, null]],
            499 => [[['_route' => 'zone_edit', '_controller' => 'App\\Controller\\ZoneController::edit'], ['idZone'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            507 => [[['_route' => 'zone_delete', '_controller' => 'App\\Controller\\ZoneController::delete'], ['idZone'], ['DELETE' => 0], null, false, true, null]],
        ];
    }
}
