<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_purge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:purgeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/purge',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_import' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:importAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/import',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_export' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:exportAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '.txt',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler/export',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_configurator_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_configurator_step' => array (  0 =>   array (    0 => 'index',  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'index',    ),    1 =>     array (      0 => 'text',      1 => '/_configurator/step',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_configurator_final' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/final',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'article_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Cms\\ArticleBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'article_admin_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cms\\ArticleBundle\\Controller\\AdminController::contenu_homepageAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gestion/contenu_homepage',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'article_admin_choix_categorie' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cms\\ArticleBundle\\Controller\\AdminController::choix_categorieAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gestion/choix_categorie',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'article_admin_voir_un_contenu' => array (  0 =>   array (    0 => 'idcontenu',  ),  1 =>   array (    '_controller' => 'Cms\\ArticleBundle\\Controller\\AdminController::voir_un_contenuAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idcontenu',    ),    1 =>     array (      0 => 'text',      1 => '/gestion/voir_un_contenu',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'article_admin_ajouter_un_contenu' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cms\\ArticleBundle\\Controller\\AdminController::ajouter_un_contenuAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gestion/ajouter_un_contenu',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'article_admin_modifier_un_contenu' => array (  0 =>   array (    0 => 'idcontenu',  ),  1 =>   array (    '_controller' => 'Cms\\ArticleBundle\\Controller\\AdminController::modifier_un_contenuAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idcontenu',    ),    1 =>     array (      0 => 'text',      1 => '/gestion/modifier_un_contenu',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'article_admin_supprimer_un_contenu' => array (  0 =>   array (    0 => 'idcontenu',  ),  1 =>   array (    '_controller' => 'Cms\\ArticleBundle\\Controller\\AdminController::supprimer_un_contenuAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idcontenu',    ),    1 =>     array (      0 => 'text',      1 => '/gestion/supprimer_un_contenu',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'article_admin_ajouter_photo_contenu' => array (  0 =>   array (    0 => 'idcontenu',  ),  1 =>   array (    '_controller' => 'Cms\\ArticleBundle\\Controller\\AdminController::ajouter_photo_contenuAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idcontenu',    ),    1 =>     array (      0 => 'text',      1 => '/gestion/ajouter_photo_contenu',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'article_admin_modifier_photo_contenu' => array (  0 =>   array (    0 => 'idphoto',  ),  1 =>   array (    '_controller' => 'Cms\\ArticleBundle\\Controller\\AdminController::modifier_photo_contenuAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idphoto',    ),    1 =>     array (      0 => 'text',      1 => '/gestion/modifier_photo_contenu',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'article_admin_supprimer_photo_contenu' => array (  0 =>   array (    0 => 'idphoto',  ),  1 =>   array (    '_controller' => 'Cms\\ArticleBundle\\Controller\\AdminController::supprimer_photo_contenuAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idphoto',    ),    1 =>     array (      0 => 'text',      1 => '/gestion/supprimer_photo_contenu',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'page_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Cms\\PageBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Page_admin_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cms\\PageBundle\\Controller\\AdminController::page_homepageAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gestion/page_homepage',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Page_admin_voir_une_page' => array (  0 =>   array (    0 => 'idpage',  ),  1 =>   array (    '_controller' => 'Cms\\PageBundle\\Controller\\AdminController::voir_une_pageAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idpage',    ),    1 =>     array (      0 => 'text',      1 => '/gestion/voir_une_page',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Page_admin_ajouter_une_page' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cms\\PageBundle\\Controller\\AdminController::ajouter_une_pageAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gestion/ajouter_une_page',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Page_admin_modifier_une_page' => array (  0 =>   array (    0 => 'idpage',  ),  1 =>   array (    '_controller' => 'Cms\\PageBundle\\Controller\\AdminController::modifier_une_pageAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idpage',    ),    1 =>     array (      0 => 'text',      1 => '/gestion/modifier_une_page',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Page_admin_supprimer_une_page' => array (  0 =>   array (    0 => 'idpage',  ),  1 =>   array (    '_controller' => 'Cms\\PageBundle\\Controller\\AdminController::supprimer_une_pageAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idpage',    ),    1 =>     array (      0 => 'text',      1 => '/gestion/supprimer_une_page',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Page_admin_ajouter_image_carousel_page' => array (  0 =>   array (    0 => 'idpage',  ),  1 =>   array (    '_controller' => 'Cms\\PageBundle\\Controller\\AdminController::ajouter_image_carousel_pageAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idpage',    ),    1 =>     array (      0 => 'text',      1 => '/gestion/ajouter_image_carousel_page',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Page_admin_modifier_image_carousel_page' => array (  0 =>   array (    0 => 'idphoto',  ),  1 =>   array (    '_controller' => 'Cms\\PageBundle\\Controller\\AdminController::modifier_image_carousel_pageAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idphoto',    ),    1 =>     array (      0 => 'text',      1 => '/gestion/modifier_image_carousel_page',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Page_admin_supprimer_image_carousel_page' => array (  0 =>   array (    0 => 'idphoto',  ),  1 =>   array (    '_controller' => 'Cms\\PageBundle\\Controller\\AdminController::supprimer_image_carousel_pageAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idphoto',    ),    1 =>     array (      0 => 'text',      1 => '/gestion/supprimer_image_carousel_page',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Page_admin_ajouter_section_page' => array (  0 =>   array (    0 => 'idpage',  ),  1 =>   array (    '_controller' => 'Cms\\PageBundle\\Controller\\AdminController::ajouter_section_pageAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idpage',    ),    1 =>     array (      0 => 'text',      1 => '/gestion/ajouter_section_page',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Page_admin_modifier_section_page' => array (  0 =>   array (    0 => 'idsection',  ),  1 =>   array (    '_controller' => 'Cms\\PageBundle\\Controller\\AdminController::modifier_section_pageAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idsection',    ),    1 =>     array (      0 => 'text',      1 => '/gestion/modifier_section_page',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Page_admin_supprimer_section_page' => array (  0 =>   array (    0 => 'idsection',  ),  1 =>   array (    '_controller' => 'Cms\\PageBundle\\Controller\\AdminController::supprimer_section_pageAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idsection',    ),    1 =>     array (      0 => 'text',      1 => '/gestion/supprimer_section_page',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Page_admin_supprimer_categories_section_page' => array (  0 =>   array (    0 => 'idsection',  ),  1 =>   array (    '_controller' => 'Cms\\PageBundle\\Controller\\AdminController::supprimer_categories_section_pageAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idsection',    ),    1 =>     array (      0 => 'text',      1 => '/gestion/supprimer_categories_section_page',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Page_admin_voir_sous_menu_page' => array (  0 =>   array (    0 => 'idsousmenu',  ),  1 =>   array (    '_controller' => 'Cms\\PageBundle\\Controller\\AdminController::voir_sous_menu_pageAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idsousmenu',    ),    1 =>     array (      0 => 'text',      1 => '/gestion/voir_sous_menu_page',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Page_admin_ajouter_sous_menu_page' => array (  0 =>   array (    0 => 'idpage',  ),  1 =>   array (    '_controller' => 'Cms\\PageBundle\\Controller\\AdminController::ajouter_sous_menu_pageAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idpage',    ),    1 =>     array (      0 => 'text',      1 => '/gestion/ajouter_sous_menu_page',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Cms\\UserBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'domaine_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cms\\DomaineBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'domaine_admin_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cms\\DomaineBundle\\Controller\\AdminController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gestion/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'domaine_admin_menu_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cms\\DomaineBundle\\Controller\\AdminController::menu_homepageAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gestion/menu_homepage',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'domaine_admin_ajouter_menu' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cms\\DomaineBundle\\Controller\\AdminController::ajouter_menuAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gestion/ajouter_menu',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'domaine_admin_modifier_nom_menu' => array (  0 =>   array (    0 => 'idmenu',  ),  1 =>   array (    '_controller' => 'Cms\\DomaineBundle\\Controller\\AdminController::modifier_nom_menuAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idmenu',    ),    1 =>     array (      0 => 'text',      1 => '/gestion/modifier_nom_menu',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'domaine_admin_supprimer_page_menu' => array (  0 =>   array (    0 => 'idmenu',  ),  1 =>   array (    '_controller' => 'Cms\\DomaineBundle\\Controller\\AdminController::supprimer_page_menuAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idmenu',    ),    1 =>     array (      0 => 'text',      1 => '/gestion/supprimer_page_menu',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gestion/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gestion/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gestion/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gestion/profile/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gestion/profile/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gestion/register/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gestion/register/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirm' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/gestion/register/confirm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirmed' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gestion/register/confirmed',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_request' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gestion/resetting/request',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_send_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gestion/resetting/send-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gestion/resetting/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_reset' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/gestion/resetting/reset',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_change_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gestion/profile/change-password',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
