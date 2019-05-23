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
        'category_index' => [[], ['_controller' => 'App\\Controller\\CategoryController::index'], [], [['text', '/category/']], [], []],
        'category_new' => [[], ['_controller' => 'App\\Controller\\CategoryController::new'], [], [['text', '/category/new']], [], []],
        'category_show' => [['idCategory'], ['_controller' => 'App\\Controller\\CategoryController::show'], [], [['variable', '/', '[^/]++', 'idCategory', true], ['text', '/category']], [], []],
        'category_edit' => [['idCategory'], ['_controller' => 'App\\Controller\\CategoryController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idCategory', true], ['text', '/category']], [], []],
        'category_delete' => [['idCategory'], ['_controller' => 'App\\Controller\\CategoryController::delete'], [], [['variable', '/', '[^/]++', 'idCategory', true], ['text', '/category']], [], []],
        'creataccount' => [[], ['_controller' => 'App\\Controller\\Client_Create_Account::index'], [], [['text', '/createaccount']], [], []],
        'Commande' => [[], ['_controller' => 'App\\Controller\\Commande::index'], [], [['text', '/commande']], [], []],
        'enquiry_index' => [[], ['_controller' => 'App\\Controller\\EnquiryController::index'], [], [['text', '/enquiry/']], [], []],
        'enquiry_new' => [[], ['_controller' => 'App\\Controller\\EnquiryController::new'], [], [['text', '/enquiry/new']], [], []],
        'enquiry_show' => [['idOrder'], ['_controller' => 'App\\Controller\\EnquiryController::show'], [], [['variable', '/', '[^/]++', 'idOrder', true], ['text', '/enquiry']], [], []],
        'enquiry_edit' => [['idOrder'], ['_controller' => 'App\\Controller\\EnquiryController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idOrder', true], ['text', '/enquiry']], [], []],
        'enquiry_delete' => [['idOrder'], ['_controller' => 'App\\Controller\\EnquiryController::delete'], [], [['variable', '/', '[^/]++', 'idOrder', true], ['text', '/enquiry']], [], []],
        'Groupes' => [[], ['_controller' => 'App\\Controller\\Groupes::index'], [], [['text', '/groupes']], [], []],
        'groups_index' => [[], ['_controller' => 'App\\Controller\\GroupsController::index'], [], [['text', '/groups/']], [], []],
        'groups_new' => [[], ['_controller' => 'App\\Controller\\GroupsController::new'], [], [['text', '/groups/new']], [], []],
        'groups_show' => [['idGroup'], ['_controller' => 'App\\Controller\\GroupsController::show'], [], [['variable', '/', '[^/]++', 'idGroup', true], ['text', '/groups']], [], []],
        'groups_edit' => [['idGroup'], ['_controller' => 'App\\Controller\\GroupsController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idGroup', true], ['text', '/groups']], [], []],
        'groups_delete' => [['idGroup'], ['_controller' => 'App\\Controller\\GroupsController::delete'], [], [['variable', '/', '[^/]++', 'idGroup', true], ['text', '/groups']], [], []],
        'home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], []],
        'issam' => [[], ['_controller' => 'App\\Controller\\IssamController\\IssamController::index'], [], [['text', '/Issam']], [], []],
        'mygroups' => [[], ['_controller' => 'App\\Controller\\MyGroups::index'], [], [['text', '/mygroups']], [], []],
        'Panier' => [[], ['_controller' => 'App\\Controller\\Panier::index'], [], [['text', '/panier']], [], []],
        'login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
        'service_index' => [[], ['_controller' => 'App\\Controller\\ServiceController::index'], [], [['text', '/service/']], [], []],
        'service_new' => [[], ['_controller' => 'App\\Controller\\ServiceController::new'], [], [['text', '/service/new']], [], []],
        'service_show' => [['idService'], ['_controller' => 'App\\Controller\\ServiceController::show'], [], [['variable', '/', '[^/]++', 'idService', true], ['text', '/service']], [], []],
        'service_edit' => [['idService'], ['_controller' => 'App\\Controller\\ServiceController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idService', true], ['text', '/service']], [], []],
        'service_delete' => [['idService'], ['_controller' => 'App\\Controller\\ServiceController::delete'], [], [['variable', '/', '[^/]++', 'idService', true], ['text', '/service']], [], []],
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
