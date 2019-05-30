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
            self::$declaredRoutes = [
        '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
        '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
        '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
        '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
        '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
        '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
        '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
        '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception::showAction'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception::cssAction'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        'addresses_index' => [[], ['_controller' => 'App\\Controller\\AddressesController::index'], [], [['text', '/addresses/']], [], []],
        'addresses_new' => [[], ['_controller' => 'App\\Controller\\AddressesController::new'], [], [['text', '/addresses/new']], [], []],
        'addresses_show' => [['idAddress'], ['_controller' => 'App\\Controller\\AddressesController::show'], [], [['variable', '/', '[^/]++', 'idAddress', true], ['text', '/addresses']], [], []],
        'addresses_edit' => [['idAddress'], ['_controller' => 'App\\Controller\\AddressesController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idAddress', true], ['text', '/addresses']], [], []],
        'addresses_delete' => [['idAddress'], ['_controller' => 'App\\Controller\\AddressesController::delete'], [], [['variable', '/', '[^/]++', 'idAddress', true], ['text', '/addresses']], [], []],
        'basket_index' => [[], ['_controller' => 'App\\Controller\\BasketController::index'], [], [['text', '/basket/']], [], []],
        'basket_new' => [[], ['_controller' => 'App\\Controller\\BasketController::new'], [], [['text', '/basket/new']], [], []],
        'basket_show' => [['idBasket'], ['_controller' => 'App\\Controller\\BasketController::show'], [], [['variable', '/', '[^/]++', 'idBasket', true], ['text', '/basket']], [], []],
        'basket_edit' => [['idBasket'], ['_controller' => 'App\\Controller\\BasketController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idBasket', true], ['text', '/basket']], [], []],
        'basket_delete' => [['idBasket'], ['_controller' => 'App\\Controller\\BasketController::delete'], [], [['variable', '/', '[^/]++', 'idBasket', true], ['text', '/basket']], [], []],
        'category_index' => [[], ['_controller' => 'App\\Controller\\CategoryController::index'], [], [['text', '/category/']], [], []],
        'category_new' => [[], ['_controller' => 'App\\Controller\\CategoryController::new'], [], [['text', '/category/new']], [], []],
        'category_show' => [['idCategory'], ['_controller' => 'App\\Controller\\CategoryController::show'], [], [['variable', '/', '[^/]++', 'idCategory', true], ['text', '/category']], [], []],
        'category_edit' => [['idCategory'], ['_controller' => 'App\\Controller\\CategoryController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idCategory', true], ['text', '/category']], [], []],
        'category_delete' => [['idCategory'], ['_controller' => 'App\\Controller\\CategoryController::delete'], [], [['variable', '/', '[^/]++', 'idCategory', true], ['text', '/category']], [], []],
        'creataccount' => [[], ['_controller' => 'App\\Controller\\Client_Create_Account::index'], [], [['text', '/createaccount']], [], []],
        'currency_index' => [[], ['_controller' => 'App\\Controller\\CurrencyController::index'], [], [['text', '/currency/']], [], []],
        'currency_new' => [[], ['_controller' => 'App\\Controller\\CurrencyController::new'], [], [['text', '/currency/new']], [], []],
        'currency_show' => [['idCurrency'], ['_controller' => 'App\\Controller\\CurrencyController::show'], [], [['variable', '/', '[^/]++', 'idCurrency', true], ['text', '/currency']], [], []],
        'currency_edit' => [['idCurrency'], ['_controller' => 'App\\Controller\\CurrencyController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idCurrency', true], ['text', '/currency']], [], []],
        'currency_delete' => [['idCurrency'], ['_controller' => 'App\\Controller\\CurrencyController::delete'], [], [['variable', '/', '[^/]++', 'idCurrency', true], ['text', '/currency']], [], []],
        'enquiry_index' => [[], ['_controller' => 'App\\Controller\\EnquiryController::index'], [], [['text', '/enquiry/']], [], []],
        'enquiry_new' => [[], ['_controller' => 'App\\Controller\\EnquiryController::new'], [], [['text', '/enquiry/new']], [], []],
        'enquiry_show' => [['idOrder'], ['_controller' => 'App\\Controller\\EnquiryController::show'], [], [['variable', '/', '[^/]++', 'idOrder', true], ['text', '/enquiry']], [], []],
        'enquiry_edit' => [['idOrder'], ['_controller' => 'App\\Controller\\EnquiryController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idOrder', true], ['text', '/enquiry']], [], []],
        'enquiry_delete' => [['idOrder'], ['_controller' => 'App\\Controller\\EnquiryController::delete'], [], [['variable', '/', '[^/]++', 'idOrder', true], ['text', '/enquiry']], [], []],
        'group_zone_index' => [[], ['_controller' => 'App\\Controller\\GroupZoneController::index'], [], [['text', '/group/zone/']], [], []],
        'group_zone_new' => [[], ['_controller' => 'App\\Controller\\GroupZoneController::new'], [], [['text', '/group/zone/new']], [], []],
        'group_zone_show' => [['idGroupZone'], ['_controller' => 'App\\Controller\\GroupZoneController::show'], [], [['variable', '/', '[^/]++', 'idGroupZone', true], ['text', '/group/zone']], [], []],
        'group_zone_edit' => [['idGroupZone'], ['_controller' => 'App\\Controller\\GroupZoneController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idGroupZone', true], ['text', '/group/zone']], [], []],
        'group_zone_delete' => [['idGroupZone'], ['_controller' => 'App\\Controller\\GroupZoneController::delete'], [], [['variable', '/', '[^/]++', 'idGroupZone', true], ['text', '/group/zone']], [], []],
        'Groupes' => [[], ['_controller' => 'App\\Controller\\Groupes::index'], [], [['text', '/groupes']], [], []],
        'groups_index' => [[], ['_controller' => 'App\\Controller\\GroupsController::index'], [], [['text', '/groups/']], [], []],
        'groups_new' => [[], ['_controller' => 'App\\Controller\\GroupsController::new'], [], [['text', '/groups/new']], [], []],
        'groups_show' => [['idGroup'], ['_controller' => 'App\\Controller\\GroupsController::show'], [], [['variable', '/', '[^/]++', 'idGroup', true], ['text', '/groups']], [], []],
        'groups_edit' => [['idGroup'], ['_controller' => 'App\\Controller\\GroupsController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idGroup', true], ['text', '/groups']], [], []],
        'groups_delete' => [['idGroup'], ['_controller' => 'App\\Controller\\GroupsController::delete'], [], [['variable', '/', '[^/]++', 'idGroup', true], ['text', '/groups']], [], []],
        'home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], []],
        'issam' => [[], ['_controller' => 'App\\Controller\\IssamController\\IssamController::index'], [], [['text', '/Issam']], [], []],
        'mygroups' => [[], ['_controller' => 'App\\Controller\\MyGroups::index'], [], [['text', '/mygroups']], [], []],
        'offered_prices_index' => [[], ['_controller' => 'App\\Controller\\OfferedPricesController::index'], [], [['text', '/offered/prices/']], [], []],
        'offered_prices_new' => [[], ['_controller' => 'App\\Controller\\OfferedPricesController::new'], [], [['text', '/offered/prices/new']], [], []],
        'offered_prices_show' => [['idOffersPrice'], ['_controller' => 'App\\Controller\\OfferedPricesController::show'], [], [['variable', '/', '[^/]++', 'idOffersPrice', true], ['text', '/offered/prices']], [], []],
        'offered_prices_edit' => [['idOffersPrice'], ['_controller' => 'App\\Controller\\OfferedPricesController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idOffersPrice', true], ['text', '/offered/prices']], [], []],
        'offered_prices_delete' => [['idOffersPrice'], ['_controller' => 'App\\Controller\\OfferedPricesController::delete'], [], [['variable', '/', '[^/]++', 'idOffersPrice', true], ['text', '/offered/prices']], [], []],
        'offers_index' => [[], ['_controller' => 'App\\Controller\\OffersController::index'], [], [['text', '/offers/']], [], []],
        'offers_new' => [[], ['_controller' => 'App\\Controller\\OffersController::new'], [], [['text', '/offers/new']], [], []],
        'offers_show' => [['idOffers'], ['_controller' => 'App\\Controller\\OffersController::show'], [], [['variable', '/', '[^/]++', 'idOffers', true], ['text', '/offers']], [], []],
        'offers_edit' => [['idOffers'], ['_controller' => 'App\\Controller\\OffersController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idOffers', true], ['text', '/offers']], [], []],
        'offers_delete' => [['idOffers'], ['_controller' => 'App\\Controller\\OffersController::delete'], [], [['variable', '/', '[^/]++', 'idOffers', true], ['text', '/offers']], [], []],
        'orders_refused_index' => [[], ['_controller' => 'App\\Controller\\OrdersRefusedController::index'], [], [['text', '/orders/refused/']], [], []],
        'orders_refused_new' => [[], ['_controller' => 'App\\Controller\\OrdersRefusedController::new'], [], [['text', '/orders/refused/new']], [], []],
        'orders_refused_show' => [['idOrderR'], ['_controller' => 'App\\Controller\\OrdersRefusedController::show'], [], [['variable', '/', '[^/]++', 'idOrderR', true], ['text', '/orders/refused']], [], []],
        'orders_refused_edit' => [['idOrderR'], ['_controller' => 'App\\Controller\\OrdersRefusedController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idOrderR', true], ['text', '/orders/refused']], [], []],
        'orders_refused_delete' => [['idOrderR'], ['_controller' => 'App\\Controller\\OrdersRefusedController::delete'], [], [['variable', '/', '[^/]++', 'idOrderR', true], ['text', '/orders/refused']], [], []],
        'Panier' => [[], ['_controller' => 'App\\Controller\\Panier::index'], [], [['text', '/panier']], [], []],
        'participants_index' => [[], ['_controller' => 'App\\Controller\\ParticipantsController::index'], [], [['text', '/participants/']], [], []],
        'participants_new' => [[], ['_controller' => 'App\\Controller\\ParticipantsController::new'], [], [['text', '/participants/new']], [], []],
        'participants_show' => [['idParticipant'], ['_controller' => 'App\\Controller\\ParticipantsController::show'], [], [['variable', '/', '[^/]++', 'idParticipant', true], ['text', '/participants']], [], []],
        'participants_edit' => [['idParticipant'], ['_controller' => 'App\\Controller\\ParticipantsController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idParticipant', true], ['text', '/participants']], [], []],
        'participants_delete' => [['idParticipant'], ['_controller' => 'App\\Controller\\ParticipantsController::delete'], [], [['variable', '/', '[^/]++', 'idParticipant', true], ['text', '/participants']], [], []],
        'participants_groups_index' => [[], ['_controller' => 'App\\Controller\\ParticipantsGroupsController::index'], [], [['text', '/participants/groups/']], [], []],
        'participants_groups_new' => [[], ['_controller' => 'App\\Controller\\ParticipantsGroupsController::new'], [], [['text', '/participants/groups/new']], [], []],
        'participants_groups_show' => [['idParticipantG'], ['_controller' => 'App\\Controller\\ParticipantsGroupsController::show'], [], [['variable', '/', '[^/]++', 'idParticipantG', true], ['text', '/participants/groups']], [], []],
        'participants_groups_edit' => [['idParticipantG'], ['_controller' => 'App\\Controller\\ParticipantsGroupsController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idParticipantG', true], ['text', '/participants/groups']], [], []],
        'participants_groups_delete' => [['idParticipantG'], ['_controller' => 'App\\Controller\\ParticipantsGroupsController::delete'], [], [['variable', '/', '[^/]++', 'idParticipantG', true], ['text', '/participants/groups']], [], []],
        'Profil' => [[], ['_controller' => 'App\\Controller\\Profil::index'], [], [['text', '/profil']], [], []],
        'login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
        'service_index' => [[], ['_controller' => 'App\\Controller\\ServiceController::index'], [], [['text', '/service/']], [], []],
        'service_new' => [[], ['_controller' => 'App\\Controller\\ServiceController::new'], [], [['text', '/service/new']], [], []],
        'service_show' => [['idService'], ['_controller' => 'App\\Controller\\ServiceController::show'], [], [['variable', '/', '[^/]++', 'idService', true], ['text', '/service']], [], []],
        'service_edit' => [['idService'], ['_controller' => 'App\\Controller\\ServiceController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idService', true], ['text', '/service']], [], []],
        'service_delete' => [['idService'], ['_controller' => 'App\\Controller\\ServiceController::delete'], [], [['variable', '/', '[^/]++', 'idService', true], ['text', '/service']], [], []],
        'type_identify_document_index' => [[], ['_controller' => 'App\\Controller\\TypeIdentifyDocumentController::index'], [], [['text', '/type/identify/document/']], [], []],
        'type_identify_document_new' => [[], ['_controller' => 'App\\Controller\\TypeIdentifyDocumentController::new'], [], [['text', '/type/identify/document/new']], [], []],
        'type_identify_document_show' => [['idTypeIdentify'], ['_controller' => 'App\\Controller\\TypeIdentifyDocumentController::show'], [], [['variable', '/', '[^/]++', 'idTypeIdentify', true], ['text', '/type/identify/document']], [], []],
        'type_identify_document_edit' => [['idTypeIdentify'], ['_controller' => 'App\\Controller\\TypeIdentifyDocumentController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idTypeIdentify', true], ['text', '/type/identify/document']], [], []],
        'type_identify_document_delete' => [['idTypeIdentify'], ['_controller' => 'App\\Controller\\TypeIdentifyDocumentController::delete'], [], [['variable', '/', '[^/]++', 'idTypeIdentify', true], ['text', '/type/identify/document']], [], []],
        'user_identify_index' => [[], ['_controller' => 'App\\Controller\\UserIdentifyController::index'], [], [['text', '/user/identify/']], [], []],
        'user_identify_new' => [[], ['_controller' => 'App\\Controller\\UserIdentifyController::new'], [], [['text', '/user/identify/new']], [], []],
        'user_identify_show' => [['id'], ['_controller' => 'App\\Controller\\UserIdentifyController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user/identify']], [], []],
        'user_identify_edit' => [['id'], ['_controller' => 'App\\Controller\\UserIdentifyController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/user/identify']], [], []],
        'user_identify_delete' => [['id'], ['_controller' => 'App\\Controller\\UserIdentifyController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user/identify']], [], []],
        'users_index' => [[], ['_controller' => 'App\\Controller\\UsersController::index'], [], [['text', '/users/']], [], []],
        'users_new' => [[], ['_controller' => 'App\\Controller\\UsersController::new'], [], [['text', '/users/new']], [], []],
        'users_show' => [['idUser'], ['_controller' => 'App\\Controller\\UsersController::show'], [], [['variable', '/', '[^/]++', 'idUser', true], ['text', '/users']], [], []],
        'users_edit' => [['idUser'], ['_controller' => 'App\\Controller\\UsersController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idUser', true], ['text', '/users']], [], []],
        'users_delete' => [['idUser'], ['_controller' => 'App\\Controller\\UsersController::delete'], [], [['variable', '/', '[^/]++', 'idUser', true], ['text', '/users']], [], []],
        'zone_index' => [[], ['_controller' => 'App\\Controller\\ZoneController::index'], [], [['text', '/zone/']], [], []],
        'zone_new' => [[], ['_controller' => 'App\\Controller\\ZoneController::new'], [], [['text', '/zone/new']], [], []],
        'zone_show' => [['idZone'], ['_controller' => 'App\\Controller\\ZoneController::show'], [], [['variable', '/', '[^/]++', 'idZone', true], ['text', '/zone']], [], []],
        'zone_edit' => [['idZone'], ['_controller' => 'App\\Controller\\ZoneController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idZone', true], ['text', '/zone']], [], []],
        'zone_delete' => [['idZone'], ['_controller' => 'App\\Controller\\ZoneController::delete'], [], [['variable', '/', '[^/]++', 'idZone', true], ['text', '/zone']], [], []],
        'logout' => [[], [], [], [['text', '/logout']], [], []],
    ];
        }
    }

    public function generate($name, $parameters = [], $referenceType = self::ABSOLUTE_PATH)
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
