<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // article_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_homepage')), array (  '_controller' => 'Cms\\ArticleBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/gestion')) {
            if (0 === strpos($pathinfo, '/gestion/c')) {
                // article_admin_homepage
                if ($pathinfo === '/gestion/contenu_homepage') {
                    return array (  '_controller' => 'Cms\\ArticleBundle\\Controller\\AdminController::contenu_homepageAction',  '_route' => 'article_admin_homepage',);
                }

                // article_admin_choix_categorie
                if ($pathinfo === '/gestion/choix_categorie') {
                    return array (  '_controller' => 'Cms\\ArticleBundle\\Controller\\AdminController::choix_categorieAction',  '_route' => 'article_admin_choix_categorie',);
                }

            }

            // article_admin_voir_un_contenu
            if (0 === strpos($pathinfo, '/gestion/voir_un_contenu') && preg_match('#^/gestion/voir_un_contenu/(?P<idcontenu>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_admin_voir_un_contenu')), array (  '_controller' => 'Cms\\ArticleBundle\\Controller\\AdminController::voir_un_contenuAction',));
            }

            // article_admin_ajouter_un_contenu
            if ($pathinfo === '/gestion/ajouter_un_contenu') {
                return array (  '_controller' => 'Cms\\ArticleBundle\\Controller\\AdminController::ajouter_un_contenuAction',  '_route' => 'article_admin_ajouter_un_contenu',);
            }

            // article_admin_modifier_un_contenu
            if (0 === strpos($pathinfo, '/gestion/modifier_un_contenu') && preg_match('#^/gestion/modifier_un_contenu/(?P<idcontenu>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_admin_modifier_un_contenu')), array (  '_controller' => 'Cms\\ArticleBundle\\Controller\\AdminController::modifier_un_contenuAction',));
            }

            // article_admin_supprimer_un_contenu
            if (0 === strpos($pathinfo, '/gestion/supprimer_un_contenu') && preg_match('#^/gestion/supprimer_un_contenu/(?P<idcontenu>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_admin_supprimer_un_contenu')), array (  '_controller' => 'Cms\\ArticleBundle\\Controller\\AdminController::supprimer_un_contenuAction',));
            }

            // article_admin_ajouter_photo_contenu
            if (0 === strpos($pathinfo, '/gestion/ajouter_photo_contenu') && preg_match('#^/gestion/ajouter_photo_contenu/(?P<idcontenu>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_admin_ajouter_photo_contenu')), array (  '_controller' => 'Cms\\ArticleBundle\\Controller\\AdminController::ajouter_photo_contenuAction',));
            }

            // article_admin_modifier_photo_contenu
            if (0 === strpos($pathinfo, '/gestion/modifier_photo_contenu') && preg_match('#^/gestion/modifier_photo_contenu/(?P<idphoto>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_admin_modifier_photo_contenu')), array (  '_controller' => 'Cms\\ArticleBundle\\Controller\\AdminController::modifier_photo_contenuAction',));
            }

            // article_admin_supprimer_photo_contenu
            if (0 === strpos($pathinfo, '/gestion/supprimer_photo_contenu') && preg_match('#^/gestion/supprimer_photo_contenu/(?P<idphoto>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_admin_supprimer_photo_contenu')), array (  '_controller' => 'Cms\\ArticleBundle\\Controller\\AdminController::supprimer_photo_contenuAction',));
            }

        }

        // page_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'page_homepage')), array (  '_controller' => 'Cms\\PageBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/gestion')) {
            // Page_admin_homepage
            if ($pathinfo === '/gestion/page_homepage') {
                return array (  '_controller' => 'Cms\\PageBundle\\Controller\\AdminController::page_homepageAction',  '_route' => 'Page_admin_homepage',);
            }

            // Page_admin_voir_une_page
            if (0 === strpos($pathinfo, '/gestion/voir_une_page') && preg_match('#^/gestion/voir_une_page/(?P<idpage>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Page_admin_voir_une_page')), array (  '_controller' => 'Cms\\PageBundle\\Controller\\AdminController::voir_une_pageAction',));
            }

            // Page_admin_ajouter_une_page
            if ($pathinfo === '/gestion/ajouter_une_page') {
                return array (  '_controller' => 'Cms\\PageBundle\\Controller\\AdminController::ajouter_une_pageAction',  '_route' => 'Page_admin_ajouter_une_page',);
            }

            // Page_admin_modifier_une_page
            if (0 === strpos($pathinfo, '/gestion/modifier_une_page') && preg_match('#^/gestion/modifier_une_page/(?P<idpage>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Page_admin_modifier_une_page')), array (  '_controller' => 'Cms\\PageBundle\\Controller\\AdminController::modifier_une_pageAction',));
            }

            // Page_admin_supprimer_une_page
            if (0 === strpos($pathinfo, '/gestion/supprimer_une_page') && preg_match('#^/gestion/supprimer_une_page/(?P<idpage>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Page_admin_supprimer_une_page')), array (  '_controller' => 'Cms\\PageBundle\\Controller\\AdminController::supprimer_une_pageAction',));
            }

            // Page_admin_ajouter_image_carousel_page
            if (0 === strpos($pathinfo, '/gestion/ajouter_image_carousel_page') && preg_match('#^/gestion/ajouter_image_carousel_page/(?P<idpage>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Page_admin_ajouter_image_carousel_page')), array (  '_controller' => 'Cms\\PageBundle\\Controller\\AdminController::ajouter_image_carousel_pageAction',));
            }

            // Page_admin_modifier_image_carousel_page
            if (0 === strpos($pathinfo, '/gestion/modifier_image_carousel_page') && preg_match('#^/gestion/modifier_image_carousel_page/(?P<idphoto>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Page_admin_modifier_image_carousel_page')), array (  '_controller' => 'Cms\\PageBundle\\Controller\\AdminController::modifier_image_carousel_pageAction',));
            }

            // Page_admin_supprimer_image_carousel_page
            if (0 === strpos($pathinfo, '/gestion/supprimer_image_carousel_page') && preg_match('#^/gestion/supprimer_image_carousel_page/(?P<idphoto>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Page_admin_supprimer_image_carousel_page')), array (  '_controller' => 'Cms\\PageBundle\\Controller\\AdminController::supprimer_image_carousel_pageAction',));
            }

            // Page_admin_ajouter_section_page
            if (0 === strpos($pathinfo, '/gestion/ajouter_section_page') && preg_match('#^/gestion/ajouter_section_page/(?P<idpage>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Page_admin_ajouter_section_page')), array (  '_controller' => 'Cms\\PageBundle\\Controller\\AdminController::ajouter_section_pageAction',));
            }

        }

        // user_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_homepage')), array (  '_controller' => 'Cms\\UserBundle\\Controller\\DefaultController::indexAction',));
        }

        // domaine_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'domaine_homepage');
            }

            return array (  '_controller' => 'Cms\\DomaineBundle\\Controller\\DefaultController::indexAction',  '_route' => 'domaine_homepage',);
        }

        if (0 === strpos($pathinfo, '/gestion')) {
            // domaine_admin_homepage
            if (rtrim($pathinfo, '/') === '/gestion') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'domaine_admin_homepage');
                }

                return array (  '_controller' => 'Cms\\DomaineBundle\\Controller\\AdminController::indexAction',  '_route' => 'domaine_admin_homepage',);
            }

            // domaine_admin_menu_homepage
            if ($pathinfo === '/gestion/menu_homepage') {
                return array (  '_controller' => 'Cms\\DomaineBundle\\Controller\\AdminController::menu_homepageAction',  '_route' => 'domaine_admin_menu_homepage',);
            }

            // domaine_admin_ajouter_menu
            if ($pathinfo === '/gestion/ajouter_menu') {
                return array (  '_controller' => 'Cms\\DomaineBundle\\Controller\\AdminController::ajouter_menuAction',  '_route' => 'domaine_admin_ajouter_menu',);
            }

            // domaine_admin_modifier_nom_menu
            if (0 === strpos($pathinfo, '/gestion/modifier_nom_menu') && preg_match('#^/gestion/modifier_nom_menu/(?P<idmenu>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'domaine_admin_modifier_nom_menu')), array (  '_controller' => 'Cms\\DomaineBundle\\Controller\\AdminController::modifier_nom_menuAction',));
            }

            // domaine_admin_supprimer_page_menu
            if (0 === strpos($pathinfo, '/gestion/supprimer_page_menu') && preg_match('#^/gestion/supprimer_page_menu/(?P<idmenu>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'domaine_admin_supprimer_page_menu')), array (  '_controller' => 'Cms\\DomaineBundle\\Controller\\AdminController::supprimer_page_menuAction',));
            }

            if (0 === strpos($pathinfo, '/gestion/log')) {
                if (0 === strpos($pathinfo, '/gestion/login')) {
                    // fos_user_security_login
                    if ($pathinfo === '/gestion/login') {
                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                    }

                    // fos_user_security_check
                    if ($pathinfo === '/gestion/login_check') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_fos_user_security_check;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                    }
                    not_fos_user_security_check:

                }

                // fos_user_security_logout
                if ($pathinfo === '/gestion/logout') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
                }

            }

            if (0 === strpos($pathinfo, '/gestion/profile')) {
                // fos_user_profile_show
                if (rtrim($pathinfo, '/') === '/gestion/profile') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_profile_show;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
                }
                not_fos_user_profile_show:

                // fos_user_profile_edit
                if ($pathinfo === '/gestion/profile/edit') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
                }

            }

            if (0 === strpos($pathinfo, '/gestion/re')) {
                if (0 === strpos($pathinfo, '/gestion/register')) {
                    // fos_user_registration_register
                    if (rtrim($pathinfo, '/') === '/gestion/register') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                    }

                    if (0 === strpos($pathinfo, '/gestion/register/c')) {
                        // fos_user_registration_check_email
                        if ($pathinfo === '/gestion/register/check-email') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_check_email;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                        }
                        not_fos_user_registration_check_email:

                        if (0 === strpos($pathinfo, '/gestion/register/confirm')) {
                            // fos_user_registration_confirm
                            if (preg_match('#^/gestion/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_fos_user_registration_confirm;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                            }
                            not_fos_user_registration_confirm:

                            // fos_user_registration_confirmed
                            if ($pathinfo === '/gestion/register/confirmed') {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_fos_user_registration_confirmed;
                                }

                                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                            }
                            not_fos_user_registration_confirmed:

                        }

                    }

                }

                if (0 === strpos($pathinfo, '/gestion/resetting')) {
                    // fos_user_resetting_request
                    if ($pathinfo === '/gestion/resetting/request') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_resetting_request;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                    }
                    not_fos_user_resetting_request:

                    // fos_user_resetting_send_email
                    if ($pathinfo === '/gestion/resetting/send-email') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_fos_user_resetting_send_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                    }
                    not_fos_user_resetting_send_email:

                    // fos_user_resetting_check_email
                    if ($pathinfo === '/gestion/resetting/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_resetting_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                    }
                    not_fos_user_resetting_check_email:

                    // fos_user_resetting_reset
                    if (0 === strpos($pathinfo, '/gestion/resetting/reset') && preg_match('#^/gestion/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_fos_user_resetting_reset;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                    }
                    not_fos_user_resetting_reset:

                }

            }

            // fos_user_change_password
            if ($pathinfo === '/gestion/profile/change-password') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_change_password;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
