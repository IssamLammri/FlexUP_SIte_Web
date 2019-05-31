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
            '/basket' => [[['_route' => 'basket_index', '_controller' => 'App\\Controller\\BasketController::index'], null, ['GET' => 0], null, true, false, null]],
            '/basket/new' => [[['_route' => 'basket_new', '_controller' => 'App\\Controller\\BasketController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/category' => [[['_route' => 'category_index', '_controller' => 'App\\Controller\\CategoryController::index'], null, ['GET' => 0], null, true, false, null]],
            '/category/new' => [[['_route' => 'category_new', '_controller' => 'App\\Controller\\CategoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/createaccount' => [[['_route' => 'creataccount', '_controller' => 'App\\Controller\\Client_Create_Account::index'], null, null, null, false, false, null]],
            '/currency' => [[['_route' => 'currency_index', '_controller' => 'App\\Controller\\CurrencyController::index'], null, ['GET' => 0], null, true, false, null]],
            '/currency/new' => [[['_route' => 'currency_new', '_controller' => 'App\\Controller\\CurrencyController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/enquiry' => [[['_route' => 'enquiry_index', '_controller' => 'App\\Controller\\EnquiryController::index'], null, ['GET' => 0], null, true, false, null]],
            '/enquiry/new' => [[['_route' => 'enquiry_new', '_controller' => 'App\\Controller\\EnquiryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/group/zone' => [[['_route' => 'group_zone_index', '_controller' => 'App\\Controller\\GroupZoneController::index'], null, ['GET' => 0], null, true, false, null]],
            '/group/zone/new' => [[['_route' => 'group_zone_new', '_controller' => 'App\\Controller\\GroupZoneController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/groupes' => [[['_route' => 'Groupes', '_controller' => 'App\\Controller\\Groupes::index'], null, null, null, false, false, null]],
            '/groups' => [[['_route' => 'groups_index', '_controller' => 'App\\Controller\\GroupsController::index'], null, ['GET' => 0], null, true, false, null]],
            '/groups/new' => [[['_route' => 'groups_new', '_controller' => 'App\\Controller\\GroupsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
            '/Issam' => [[['_route' => 'issam', '_controller' => 'App\\Controller\\IssamController\\IssamController::index'], null, null, null, false, false, null]],
            '/mygroups' => [[['_route' => 'mygroups', '_controller' => 'App\\Controller\\MyGroups::index'], null, null, null, false, false, null]],
            '/offered/prices' => [[['_route' => 'offered_prices_index', '_controller' => 'App\\Controller\\OfferedPricesController::index'], null, ['GET' => 0], null, true, false, null]],
            '/offered/prices/new' => [[['_route' => 'offered_prices_new', '_controller' => 'App\\Controller\\OfferedPricesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/offers' => [[['_route' => 'offers_index', '_controller' => 'App\\Controller\\OffersController::index'], null, ['GET' => 0], null, true, false, null]],
            '/offers/new' => [[['_route' => 'offers_new', '_controller' => 'App\\Controller\\OffersController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/orders/refused' => [[['_route' => 'orders_refused_index', '_controller' => 'App\\Controller\\OrdersRefusedController::index'], null, ['GET' => 0], null, true, false, null]],
            '/orders/refused/new' => [[['_route' => 'orders_refused_new', '_controller' => 'App\\Controller\\OrdersRefusedController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/panier' => [[['_route' => 'Panier', '_controller' => 'App\\Controller\\Panier::index'], null, null, null, false, false, null]],
            '/participants' => [[['_route' => 'participants_index', '_controller' => 'App\\Controller\\ParticipantsController::index'], null, ['GET' => 0], null, true, false, null]],
            '/participants/new' => [[['_route' => 'participants_new', '_controller' => 'App\\Controller\\ParticipantsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/participantsgroups' => [[['_route' => 'participants_groups_index', '_controller' => 'App\\Controller\\ParticipantsGroupsController::index'], null, ['GET' => 0], null, true, false, null]],
            '/participantsgroups/new' => [[['_route' => 'participants_groups_new', '_controller' => 'App\\Controller\\ParticipantsGroupsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/profil' => [[['_route' => 'Profil', '_controller' => 'App\\Controller\\Profil::index'], null, null, null, false, false, null]],
            '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
            '/service' => [[['_route' => 'service_index', '_controller' => 'App\\Controller\\ServiceController::index'], null, ['GET' => 0], null, true, false, null]],
            '/service/new' => [[['_route' => 'service_new', '_controller' => 'App\\Controller\\ServiceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/ViewServices' => [[['_route' => 'ViewServices_index', '_controller' => 'App\\Controller\\Services\\ViewServicesController::index'], null, ['GET' => 0], null, true, false, null]],
            '/ViewServices/new' => [[['_route' => 'addresses_new', '_controller' => 'App\\Controller\\Services\\ViewServicesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/type/identify/document' => [[['_route' => 'type_identify_document_index', '_controller' => 'App\\Controller\\TypeIdentifyDocumentController::index'], null, ['GET' => 0], null, true, false, null]],
            '/type/identify/document/new' => [[['_route' => 'type_identify_document_new', '_controller' => 'App\\Controller\\TypeIdentifyDocumentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/user/identify' => [[['_route' => 'user_identify_index', '_controller' => 'App\\Controller\\UserIdentifyController::index'], null, ['GET' => 0], null, true, false, null]],
            '/user/identify/new' => [[['_route' => 'user_identify_new', '_controller' => 'App\\Controller\\UserIdentifyController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/users' => [[['_route' => 'users_index', '_controller' => 'App\\Controller\\UsersController::index'], null, ['GET' => 0], null, true, false, null]],
            '/users/new' => [[['_route' => 'users_new', '_controller' => 'App\\Controller\\UsersController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/zone' => [[['_route' => 'zone_index', '_controller' => 'App\\Controller\\ZoneController::index'], null, ['GET' => 0], null, true, false, null]],
            '/zone/new' => [[['_route' => 'zone_new', '_controller' => 'App\\Controller\\ZoneController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/logout' => [[['_route' => 'logout'], null, null, null, false, false, null]],
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
                    .'|/basket/([^/]++)(?'
                        .'|(*:188)'
                        .'|/edit(*:201)'
                        .'|(*:209)'
                    .')'
                    .'|/c(?'
                        .'|ategory/([^/]++)(?'
                            .'|(*:242)'
                            .'|/edit(*:255)'
                            .'|(*:263)'
                        .')'
                        .'|urrency/([^/]++)(?'
                            .'|(*:291)'
                            .'|/edit(*:304)'
                            .'|(*:312)'
                        .')'
                    .')'
                    .'|/enquiry/([^/]++)(?'
                        .'|(*:342)'
                        .'|/edit(*:355)'
                        .'|(*:363)'
                    .')'
                    .'|/group(?'
                        .'|/zone/([^/]++)(?'
                            .'|(*:398)'
                            .'|/edit(*:411)'
                            .'|(*:419)'
                        .')'
                        .'|s/([^/]++)(?'
                            .'|(*:441)'
                            .'|/edit(*:454)'
                            .'|(*:462)'
                        .')'
                    .')'
                    .'|/o(?'
                        .'|ffer(?'
                            .'|ed/prices/([^/]++)(?'
                                .'|(*:505)'
                                .'|/edit(*:518)'
                                .'|(*:526)'
                            .')'
                            .'|s/([^/]++)(?'
                                .'|(*:548)'
                                .'|/edit(*:561)'
                                .'|(*:569)'
                            .')'
                        .')'
                        .'|rders/refused/([^/]++)(?'
                            .'|(*:604)'
                            .'|/edit(*:617)'
                            .'|(*:625)'
                        .')'
                    .')'
                    .'|/participants(?'
                        .'|/([^/]++)(?'
                            .'|(*:663)'
                            .'|/edit(*:676)'
                            .'|(*:684)'
                        .')'
                        .'|groups/([^/]++)(?'
                            .'|(*:711)'
                            .'|/edit(*:724)'
                            .'|(*:732)'
                        .')'
                    .')'
                    .'|/service/([^/]++)(?'
                        .'|(*:762)'
                        .'|/edit(*:775)'
                        .'|(*:783)'
                    .')'
                    .'|/ViewServices/([^/]++)(?'
                        .'|(*:817)'
                        .'|/edit(*:830)'
                        .'|(*:838)'
                    .')'
                    .'|/type/identify/document/([^/]++)(?'
                        .'|(*:882)'
                        .'|/edit(*:895)'
                        .'|(*:903)'
                    .')'
                    .'|/user(?'
                        .'|/identify/([^/]++)(?'
                            .'|(*:941)'
                            .'|/edit(*:954)'
                            .'|(*:962)'
                        .')'
                        .'|s/([^/]++)(?'
                            .'|(*:984)'
                            .'|/edit(*:997)'
                            .'|(*:1005)'
                        .')'
                    .')'
                    .'|/zone/([^/]++)(?'
                        .'|(*:1033)'
                        .'|/edit(*:1047)'
                        .'|(*:1056)'
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
            188 => [[['_route' => 'basket_show', '_controller' => 'App\\Controller\\BasketController::show'], ['idBasket'], ['GET' => 0], null, false, true, null]],
            201 => [[['_route' => 'basket_edit', '_controller' => 'App\\Controller\\BasketController::edit'], ['idBasket'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            209 => [[['_route' => 'basket_delete', '_controller' => 'App\\Controller\\BasketController::delete'], ['idBasket'], ['DELETE' => 0], null, false, true, null]],
            242 => [[['_route' => 'category_show', '_controller' => 'App\\Controller\\CategoryController::show'], ['idCategory'], ['GET' => 0], null, false, true, null]],
            255 => [[['_route' => 'category_edit', '_controller' => 'App\\Controller\\CategoryController::edit'], ['idCategory'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            263 => [[['_route' => 'category_delete', '_controller' => 'App\\Controller\\CategoryController::delete'], ['idCategory'], ['DELETE' => 0], null, false, true, null]],
            291 => [[['_route' => 'currency_show', '_controller' => 'App\\Controller\\CurrencyController::show'], ['idCurrency'], ['GET' => 0], null, false, true, null]],
            304 => [[['_route' => 'currency_edit', '_controller' => 'App\\Controller\\CurrencyController::edit'], ['idCurrency'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            312 => [[['_route' => 'currency_delete', '_controller' => 'App\\Controller\\CurrencyController::delete'], ['idCurrency'], ['DELETE' => 0], null, false, true, null]],
            342 => [[['_route' => 'enquiry_show', '_controller' => 'App\\Controller\\EnquiryController::show'], ['idOrder'], ['GET' => 0], null, false, true, null]],
            355 => [[['_route' => 'enquiry_edit', '_controller' => 'App\\Controller\\EnquiryController::edit'], ['idOrder'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            363 => [[['_route' => 'enquiry_delete', '_controller' => 'App\\Controller\\EnquiryController::delete'], ['idOrder'], ['DELETE' => 0], null, false, true, null]],
            398 => [[['_route' => 'group_zone_show', '_controller' => 'App\\Controller\\GroupZoneController::show'], ['idGroupZone'], ['GET' => 0], null, false, true, null]],
            411 => [[['_route' => 'group_zone_edit', '_controller' => 'App\\Controller\\GroupZoneController::edit'], ['idGroupZone'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            419 => [[['_route' => 'group_zone_delete', '_controller' => 'App\\Controller\\GroupZoneController::delete'], ['idGroupZone'], ['DELETE' => 0], null, false, true, null]],
            441 => [[['_route' => 'groups_show', '_controller' => 'App\\Controller\\GroupsController::show'], ['idGroup'], ['GET' => 0], null, false, true, null]],
            454 => [[['_route' => 'groups_edit', '_controller' => 'App\\Controller\\GroupsController::edit'], ['idGroup'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            462 => [[['_route' => 'groups_delete', '_controller' => 'App\\Controller\\GroupsController::delete'], ['idGroup'], ['DELETE' => 0], null, false, true, null]],
            505 => [[['_route' => 'offered_prices_show', '_controller' => 'App\\Controller\\OfferedPricesController::show'], ['idOffersPrice'], ['GET' => 0], null, false, true, null]],
            518 => [[['_route' => 'offered_prices_edit', '_controller' => 'App\\Controller\\OfferedPricesController::edit'], ['idOffersPrice'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            526 => [[['_route' => 'offered_prices_delete', '_controller' => 'App\\Controller\\OfferedPricesController::delete'], ['idOffersPrice'], ['DELETE' => 0], null, false, true, null]],
            548 => [[['_route' => 'offers_show', '_controller' => 'App\\Controller\\OffersController::show'], ['idOffers'], ['GET' => 0], null, false, true, null]],
            561 => [[['_route' => 'offers_edit', '_controller' => 'App\\Controller\\OffersController::edit'], ['idOffers'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            569 => [[['_route' => 'offers_delete', '_controller' => 'App\\Controller\\OffersController::delete'], ['idOffers'], ['DELETE' => 0], null, false, true, null]],
            604 => [[['_route' => 'orders_refused_show', '_controller' => 'App\\Controller\\OrdersRefusedController::show'], ['idOrderR'], ['GET' => 0], null, false, true, null]],
            617 => [[['_route' => 'orders_refused_edit', '_controller' => 'App\\Controller\\OrdersRefusedController::edit'], ['idOrderR'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            625 => [[['_route' => 'orders_refused_delete', '_controller' => 'App\\Controller\\OrdersRefusedController::delete'], ['idOrderR'], ['DELETE' => 0], null, false, true, null]],
            663 => [[['_route' => 'participants_show', '_controller' => 'App\\Controller\\ParticipantsController::show'], ['idParticipant'], ['GET' => 0], null, false, true, null]],
            676 => [[['_route' => 'participants_edit', '_controller' => 'App\\Controller\\ParticipantsController::edit'], ['idParticipant'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            684 => [[['_route' => 'participants_delete', '_controller' => 'App\\Controller\\ParticipantsController::delete'], ['idParticipant'], ['DELETE' => 0], null, false, true, null]],
            711 => [[['_route' => 'participants_groups_show', '_controller' => 'App\\Controller\\ParticipantsGroupsController::show'], ['idParticipantG'], ['GET' => 0], null, false, true, null]],
            724 => [[['_route' => 'participants_groups_edit', '_controller' => 'App\\Controller\\ParticipantsGroupsController::edit'], ['idParticipantG'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            732 => [[['_route' => 'participants_groups_delete', '_controller' => 'App\\Controller\\ParticipantsGroupsController::delete'], ['idParticipantG'], ['DELETE' => 0], null, false, true, null]],
            762 => [[['_route' => 'service_show', '_controller' => 'App\\Controller\\ServiceController::show'], ['idService'], ['GET' => 0], null, false, true, null]],
            775 => [[['_route' => 'service_edit', '_controller' => 'App\\Controller\\ServiceController::edit'], ['idService'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            783 => [[['_route' => 'service_delete', '_controller' => 'App\\Controller\\ServiceController::delete'], ['idService'], ['DELETE' => 0], null, false, true, null]],
            817 => [[['_route' => 'addresses_show', '_controller' => 'App\\Controller\\Services\\ViewServicesController::show'], ['idAddress'], ['GET' => 0], null, false, true, null]],
            830 => [[['_route' => 'addresses_edit', '_controller' => 'App\\Controller\\Services\\ViewServicesController::edit'], ['idAddress'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            838 => [[['_route' => 'addresses_delete', '_controller' => 'App\\Controller\\Services\\ViewServicesController::delete'], ['idAddress'], ['DELETE' => 0], null, false, true, null]],
            882 => [[['_route' => 'type_identify_document_show', '_controller' => 'App\\Controller\\TypeIdentifyDocumentController::show'], ['idTypeIdentify'], ['GET' => 0], null, false, true, null]],
            895 => [[['_route' => 'type_identify_document_edit', '_controller' => 'App\\Controller\\TypeIdentifyDocumentController::edit'], ['idTypeIdentify'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            903 => [[['_route' => 'type_identify_document_delete', '_controller' => 'App\\Controller\\TypeIdentifyDocumentController::delete'], ['idTypeIdentify'], ['DELETE' => 0], null, false, true, null]],
            941 => [[['_route' => 'user_identify_show', '_controller' => 'App\\Controller\\UserIdentifyController::show'], ['id'], ['GET' => 0], null, false, true, null]],
            954 => [[['_route' => 'user_identify_edit', '_controller' => 'App\\Controller\\UserIdentifyController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            962 => [[['_route' => 'user_identify_delete', '_controller' => 'App\\Controller\\UserIdentifyController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
            984 => [[['_route' => 'users_show', '_controller' => 'App\\Controller\\UsersController::show'], ['idUser'], ['GET' => 0], null, false, true, null]],
            997 => [[['_route' => 'users_edit', '_controller' => 'App\\Controller\\UsersController::edit'], ['idUser'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            1005 => [[['_route' => 'users_delete', '_controller' => 'App\\Controller\\UsersController::delete'], ['idUser'], ['DELETE' => 0], null, false, true, null]],
            1033 => [[['_route' => 'zone_show', '_controller' => 'App\\Controller\\ZoneController::show'], ['idZone'], ['GET' => 0], null, false, true, null]],
            1047 => [[['_route' => 'zone_edit', '_controller' => 'App\\Controller\\ZoneController::edit'], ['idZone'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            1056 => [[['_route' => 'zone_delete', '_controller' => 'App\\Controller\\ZoneController::delete'], ['idZone'], ['DELETE' => 0], null, false, true, null]],
        ];
    }
}
