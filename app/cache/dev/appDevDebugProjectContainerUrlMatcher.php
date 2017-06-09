<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // landing_clarin
        if ($pathinfo === '/clarin') {
            return array (  '_controller' => 'VOD\\QubitArgentinaBundle\\Controller\\HomeController::landingClarinAction',  '_route' => 'landing_clarin',);
        }

        // new_player_crazy
        if (rtrim($pathinfo, '/') === '/_______player') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'new_player_crazy');
            }

            return array (  '_controller' => 'VOD\\QubitArgentinaBundle\\Controller\\PlayerController::newPlayerWayAction',  '_route' => 'new_player_crazy',);
        }

        // service_constraint_clarin_validator
        if (0 === strpos($pathinfo, '/service/clarin-validator') && preg_match('#^/service/clarin\\-validator(?:/(?P<cardNumber>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'service_constraint_clarin_validator')), array (  'cardNumber' => NULL,  '_controller' => 'VOD\\QubitArgentinaBundle\\Controller\\ServiceController::checkPromoClarin',));
        }

        if (0 === strpos($pathinfo, '/itv')) {
            // vod_itv_base
            if (rtrim($pathinfo, '/') === '/itv') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'vod_itv_base');
                }

                return array (  '_controller' => 'VOD\\ItvBaseBundle\\Controller\\BaseController::indexAction',  '_route' => 'vod_itv_base',);
            }

            if (0 === strpos($pathinfo, '/itv/p')) {
                if (0 === strpos($pathinfo, '/itv/programacion')) {
                    // vod_itv_programacion
                    if (rtrim($pathinfo, '/') === '/itv/programacion') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'vod_itv_programacion');
                        }

                        return array (  '_controller' => 'VOD\\ItvBaseBundle\\Controller\\BaseController::indexAction',  '_route' => 'vod_itv_programacion',);
                    }

                    // vod_itv_programacion_channel
                    if (preg_match('#^/itv/programacion/(?P<channelSlug>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'vod_itv_programacion_channel')), array (  '_controller' => 'VOD\\ItvBaseBundle\\Controller\\BaseController::indexAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/itv/player/vivo')) {
                    // vod_itv_now
                    if (rtrim($pathinfo, '/') === '/itv/player/vivo') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'vod_itv_now');
                        }

                        return array (  '_controller' => 'VOD\\ItvBaseBundle\\Controller\\BaseController::indexAction',  '_route' => 'vod_itv_now',);
                    }

                    // vod_itv_live
                    if (preg_match('#^/itv/player/vivo/(?P<channelSlug>[^/]++)/?$#s', $pathinfo, $matches)) {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'vod_itv_live');
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'vod_itv_live')), array (  '_controller' => 'VOD\\ItvBaseBundle\\Controller\\BaseController::indexAction',));
                    }

                }

            }

            // vod_itv_terms_and_conditions
            if (rtrim($pathinfo, '/') === '/itv/terminos-y-condiciones') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'vod_itv_terms_and_conditions');
                }

                return array (  '_controller' => 'VOD\\ItvBaseBundle\\Controller\\BaseController::termsAndConditionsAction',  '_route' => 'vod_itv_terms_and_conditions',);
            }

            // vod_itv_generate_cookie
            if (rtrim($pathinfo, '/') === '/itv/generate-cookie') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'vod_itv_generate_cookie');
                }

                return array (  '_controller' => 'VOD\\ItvBaseBundle\\Controller\\BaseController::generateCookieAction',  '_route' => 'vod_itv_generate_cookie',);
            }

            // vod_itv_show_cookie
            if (rtrim($pathinfo, '/') === '/itv/show-cookie') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'vod_itv_show_cookie');
                }

                return array (  '_controller' => 'VOD\\ItvBaseBundle\\Controller\\BaseController::showCookieAction',  '_route' => 'vod_itv_show_cookie',);
            }

            // vod_itv_check_cookie
            if ($pathinfo === '/itv/check-cookie/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_vod_itv_check_cookie;
                }

                return array (  '_controller' => 'VOD\\ItvBaseBundle\\Controller\\BaseController::checkAction',  '_route' => 'vod_itv_check_cookie',);
            }
            not_vod_itv_check_cookie:

        }

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        // homepage
        if (rtrim($pathinfo, '/') === '/inicio') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_homepage;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'VOD\\QubitArgentinaBundle\\Controller\\HomeController::indexAction',  '_route' => 'homepage',);
        }
        not_homepage:

        // landing
        if (rtrim($pathinfo, '/') === '') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_landing;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'landing');
            }

            return array (  '_controller' => 'VOD\\QubitArgentinaBundle\\Controller\\HomeController::landingAction',  '_route' => 'landing',);
        }
        not_landing:

        if (0 === strpos($pathinfo, '/centro-ayuda')) {
            // help
            if (rtrim($pathinfo, '/') === '/centro-ayuda') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_help;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'help');
                }

                return array (  '_controller' => 'VOD\\QubitArgentinaBundle\\Controller\\HomeController::helpAction',  '_route' => 'help',);
            }
            not_help:

            // help_option
            if (0 === strpos($pathinfo, '/centro-ayuda/opcion') && preg_match('#^/centro\\-ayuda/opcion/(?P<opcion>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_help_option;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'help_option');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'help_option')), array (  '_controller' => 'VOD\\QubitArgentinaBundle\\Controller\\HomeController::helpOptionAction',));
            }
            not_help_option:

        }

        // terms_and_conditions
        if (rtrim($pathinfo, '/') === '/terminos-y-condiciones') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_terms_and_conditions;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'terms_and_conditions');
            }

            return array (  '_controller' => 'VOD\\QubitArgentinaBundle\\Controller\\HomeController::termsAndConditionsAction',  '_route' => 'terms_and_conditions',);
        }
        not_terms_and_conditions:

        // about_us
        if (rtrim($pathinfo, '/') === '/quienes-somos') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_about_us;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'about_us');
            }

            return array (  '_controller' => 'VOD\\QubitArgentinaBundle\\Controller\\HomeController::aboutUsAction',  '_route' => 'about_us',);
        }
        not_about_us:

        // work_with_us
        if (rtrim($pathinfo, '/') === '/trabaja-en-qubit') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_work_with_us;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'work_with_us');
            }

            return array (  '_controller' => 'VOD\\QubitArgentinaBundle\\Controller\\HomeController::workWithUsAction',  '_route' => 'work_with_us',);
        }
        not_work_with_us:

        // widevine_info
        if (rtrim($pathinfo, '/') === '/widevine-informacion') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_widevine_info;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'widevine_info');
            }

            return array (  '_controller' => 'VOD\\QubitArgentinaBundle\\Controller\\HomeController::widevineInfoAction',  '_route' => 'widevine_info',);
        }
        not_widevine_info:

        // sitemap
        if (0 === strpos($pathinfo, '/sitemap') && preg_match('#^/sitemap\\.(?P<_format>xml)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_sitemap;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sitemap')), array (  '_controller' => 'VOD\\QubitArgentinaBundle\\Controller\\HomeController::sitemapAction',));
        }
        not_sitemap:

        // old-ayuda
        if (rtrim($pathinfo, '/') === '/institutional/Ayuda') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_oldayuda;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'old-ayuda');
            }

            return array (  '_controller' => 'VOD\\QubitArgentinaBundle\\Controller\\HomeController::oldHelpAction',  '_route' => 'old-ayuda',);
        }
        not_oldayuda:

        if (0 === strpos($pathinfo, '/l')) {
            if (0 === strpos($pathinfo, '/landing/tu-primer-mes-gratis-0')) {
                // pauta-promo-google1
                if (rtrim($pathinfo, '/') === '/landing/tu-primer-mes-gratis-01') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_pautapromogoogle1;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'pauta-promo-google1');
                    }

                    return array (  '_controller' => 'VOD\\QubitArgentinaBundle\\Controller\\HomeController::pautaPromoGoogleAction',  '_route' => 'pauta-promo-google1',);
                }
                not_pautapromogoogle1:

                // pauta-promo-google2
                if (rtrim($pathinfo, '/') === '/landing/tu-primer-mes-gratis-02') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_pautapromogoogle2;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'pauta-promo-google2');
                    }

                    return array (  '_controller' => 'VOD\\QubitArgentinaBundle\\Controller\\HomeController::pautaPromoGoogleAction',  '_route' => 'pauta-promo-google2',);
                }
                not_pautapromogoogle2:

                // pauta-promo-google3
                if (rtrim($pathinfo, '/') === '/landing/tu-primer-mes-gratis-03') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_pautapromogoogle3;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'pauta-promo-google3');
                    }

                    return array (  '_controller' => 'VOD\\QubitArgentinaBundle\\Controller\\HomeController::pautaPromoGoogleAction',  '_route' => 'pauta-promo-google3',);
                }
                not_pautapromogoogle3:

            }

            // promo-lg
            if (rtrim($pathinfo, '/') === '/lg') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_promolg;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'promo-lg');
                }

                return array (  '_controller' => 'VOD\\QubitArgentinaBundle\\Controller\\HomeController::pautaLgAction',  '_route' => 'promo-lg',);
            }
            not_promolg:

        }

        // promo-landing-cc
        if (rtrim($pathinfo, '/') === '/promo/cc') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_promolandingcc;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'promo-landing-cc');
            }

            return array (  '_controller' => 'VOD\\QubitArgentinaBundle\\Controller\\HomeController::promoLandingCCAction',  '_route' => 'promo-landing-cc',);
        }
        not_promolandingcc:

        // promo-cupon-prepago
        if (rtrim($pathinfo, '/') === '/cuponprepago') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_promocuponprepago;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'promo-cupon-prepago');
            }

            return array (  '_controller' => 'VOD\\QubitArgentinaBundle\\Controller\\HomeController::promoCuponPrePagoAction',  '_route' => 'promo-cupon-prepago',);
        }
        not_promocuponprepago:

        // landing-redirect-naranja
        if (rtrim($pathinfo, '/') === '/activacion-tarjeta-landing') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_landingredirectnaranja;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'landing-redirect-naranja');
            }

            return array (  '_controller' => 'VOD\\QubitArgentinaBundle\\Controller\\HomeController::landingRedirectNaranjaAction',  '_route' => 'landing-redirect-naranja',);
        }
        not_landingredirectnaranja:

        if (0 === strpos($pathinfo, '/homejson')) {
            // homejson
            if (rtrim($pathinfo, '/') === '/homejson') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_homejson;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'homejson');
                }

                return array (  '_controller' => 'VOD\\BaseBundle\\Controller\\TestController::indexJsonAction',  '_route' => 'homejson',);
            }
            not_homejson:

            // homejson-test
            if ($pathinfo === '/homejson/test') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_homejsontest;
                }

                return array (  '_controller' => 'VOD\\BaseBundle\\Controller\\TestController::testContentAction',  '_route' => 'homejson-test',);
            }
            not_homejsontest:

        }

        // bannersjson
        if (rtrim($pathinfo, '/') === '/bannersjson') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_bannersjson;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'bannersjson');
            }

            return array (  '_controller' => 'VOD\\BaseBundle\\Controller\\TestController::bannersJsonAction',  '_route' => 'bannersjson',);
        }
        not_bannersjson:

        if (0 === strpos($pathinfo, '/content-')) {
            // content_router
            if (0 === strpos($pathinfo, '/content-router') && preg_match('#^/content\\-router/(?P<uuid>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'content_router')), array (  '_controller' => 'VOD\\BaseBundle\\Controller\\ContentController::contentRouterAction',));
            }

            // content_play_redirect
            if (0 === strpos($pathinfo, '/content-play-redirect') && preg_match('#^/content\\-play\\-redirect/(?P<uuid>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'content_play_redirect')), array (  '_controller' => 'VOD\\BaseBundle\\Controller\\ContentController::contentPlayRedirectAction',));
            }

        }

        // movie_content_detail
        if (0 === strpos($pathinfo, '/pelicula') && preg_match('#^/pelicula/(?P<slug>[^/]++)/(?P<uuid>[^/]++)/detalle$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'movie_content_detail')), array (  '_controller' => 'VOD\\BaseBundle\\Controller\\ContentController::detailAction',  'contentType' => 'Movie',  'slug' => 'null',));
        }

        if (0 === strpos($pathinfo, '/conten')) {
            if (0 === strpos($pathinfo, '/contenido')) {
                // movie_content_detail_old
                if (preg_match('#^/contenido/(?P<slug>[^/]++)/(?P<uuid>[^/]++)/detalle$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'movie_content_detail_old')), array (  '_controller' => 'VOD\\BaseBundle\\Controller\\ContentController::contentDetailAction',  'contentType' => 'Movie',  'slug' => 'null',));
                }

                // rent_ppv
                if (0 === strpos($pathinfo, '/contenido/alquilar') && preg_match('#^/contenido/alquilar(?:/(?P<uuid>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rent_ppv')), array (  '_controller' => 'VOD\\BaseBundle\\Controller\\ContentController::rentContentAction',  'uuid' => 'null',));
                }

            }

            if (0 === strpos($pathinfo, '/content')) {
                // movie_content_detail_old_v4
                if (preg_match('#^/content/(?P<id>[^/]++)(?:/(?P<slug>[^/]++)(?:/(?P<recomended>[^/]++)(?:/(?P<idRecomended>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'movie_content_detail_old_v4')), array (  '_controller' => 'VOD\\BaseBundle\\Controller\\ContentController::detailV4Action',  'slug' => 'null',  'recomended' => 'recomended',  'idRecomended' => 'idRecomended',));
                }

                // movie_content_detail_old2_v4
                if (preg_match('#^/content/(?P<id>[^/]++)/(?P<slug>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'movie_content_detail_old2_v4');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'movie_content_detail_old2_v4')), array (  '_controller' => 'VOD\\BaseBundle\\Controller\\ContentController::detailV4Action',  'slug' => 'null',));
                }

            }

        }

        // series_content_detail
        if (0 === strpos($pathinfo, '/serie') && preg_match('#^/serie/(?P<slug>[^/]++)/(?P<uuid>[^/]++)/detalle$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'series_content_detail')), array (  '_controller' => 'VOD\\BaseBundle\\Controller\\ContentController::detailAction',  'contentType' => 'Series',  'slug' => 'null',));
        }

        // channel_content_detail
        if (0 === strpos($pathinfo, '/canal') && preg_match('#^/canal/(?P<slug>[^/]++)/(?P<uuid>[^/]++)/detalle$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'channel_content_detail')), array (  '_controller' => 'VOD\\BaseBundle\\Controller\\ContentController::channelAction',  'contentType' => 'Channel',  'slug' => 'null',));
        }

        // episode_content_detail
        if (0 === strpos($pathinfo, '/episodio') && preg_match('#^/episodio/(?P<slug>[^/]++)/(?P<uuid>[^/]++)/detalle$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'episode_content_detail')), array (  '_controller' => 'VOD\\BaseBundle\\Controller\\ContentController::detailAction',  'contentType' => 'Episode',  'slug' => 'null',));
        }

        // channel
        if (0 === strpos($pathinfo, '/canal') && preg_match('#^/canal/(?P<slug>[^/]++)/(?P<uuid>[^/]++)/detalle$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'channel')), array (  '_controller' => 'VOD\\BaseBundle\\Controller\\ContentController::channelAction',  'contentType' => 'Channel',  'slug' => 'null',));
        }

        // series_detail
        if (0 === strpos($pathinfo, '/serie') && preg_match('#^/serie/(?P<slug>[^/]++)/(?P<uuid>[^/]++)/detalle$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'series_detail')), array (  '_controller' => 'VOD\\BaseBundle\\Controller\\ContentController::seriesAction',  'contentType' => 'Series',  'slug' => 'null',));
        }

        // content_play
        if (0 === strpos($pathinfo, '/pelicula/reproductor') && preg_match('#^/pelicula/reproductor/(?P<hash>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'content_play')), array (  '_controller' => 'VOD\\BaseBundle\\Controller\\ContentController::playAction',));
        }

        // content_play_old
        if (0 === strpos($pathinfo, '/contenido/reproductor') && preg_match('#^/contenido/reproductor/(?P<hash>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'content_play_old')), array (  '_controller' => 'VOD\\BaseBundle\\Controller\\ContentController::playAction',));
        }

        // content_track_subtitle
        if (0 === strpos($pathinfo, '/player/subtitle') && preg_match('#^/player/subtitle(?:/(?P<uuid>[^/]++)(?:/(?P<subtitled>[^/]++))?)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'content_track_subtitle')), array (  '_controller' => 'VOD\\BaseBundle\\Controller\\ContentController::trackSubtitleAction',  'uuid' => 'false',  'subtitled' => '',));
        }

        if (0 === strpos($pathinfo, '/g')) {
            // content_genre_grid
            if (0 === strpos($pathinfo, '/genero') && preg_match('#^/genero/(?P<genreSlug>[^/]++)(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'content_genre_grid')), array (  '_controller' => 'VOD\\BaseBundle\\Controller\\ContentController::genreGridAction',  'page' => '1',));
            }

            // content_featured_criteria_grid
            if (0 === strpos($pathinfo, '/grilla') && preg_match('#^/grilla/(?P<featuredCriteriaSlug>[^/]++)(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'content_featured_criteria_grid')), array (  '_controller' => 'VOD\\BaseBundle\\Controller\\ContentController::featuredCriteriaGridAction',  'page' => '1',));
            }

        }

        // mobile_landing
        if (0 === strpos($pathinfo, '/mobile/landing') && preg_match('#^/mobile/landing(?:/(?P<redirectAction>[^/]++)(?:/(?P<OS>[^/]++)(?:/(?P<uuid>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mobile_landing')), array (  '_controller' => 'VOD\\BaseBundle\\Controller\\ContentController::mobileLandingAction',  'redirectAction' => 'null',  'OS' => 'undefinedOS',  'uuid' => 'null',));
        }

        // content_stars_grid
        if (0 === strpos($pathinfo, '/actor') && preg_match('#^/actor/(?P<keyword>[^/]++)(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'content_stars_grid')), array (  '_controller' => 'VOD\\BaseBundle\\Controller\\ContentController::filterGridAction',  'page' => '1',));
        }

        // content_directors_grid
        if (0 === strpos($pathinfo, '/director') && preg_match('#^/director/(?P<keyword>[^/]++)(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'content_directors_grid')), array (  '_controller' => 'VOD\\BaseBundle\\Controller\\ContentController::filterGridAction',  'page' => '1',));
        }

        // content_keywords_grid
        if (0 === strpos($pathinfo, '/tag') && preg_match('#^/tag/(?P<keyword>[^/]++)(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'content_keywords_grid')), array (  '_controller' => 'VOD\\BaseBundle\\Controller\\ContentController::filterGridAction',  'page' => '1',));
        }

        if (0 === strpos($pathinfo, '/service')) {
            // service_homepage
            if (0 === strpos($pathinfo, '/service/home') && preg_match('#^/service/home(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_service_homepage;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'service_homepage')), array (  '_controller' => 'VOD\\QubitArgentinaBundle\\Controller\\ServiceController::homeServiceAction',  'page' => '1',));
            }
            not_service_homepage:

            // buy_and_play_trailer
            if (0 === strpos($pathinfo, '/service/buytrailer') && preg_match('#^/service/buytrailer/(?P<trailerUuid>[^/]++)/(?P<trailerHigherQuality>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_buy_and_play_trailer;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'buy_and_play_trailer')), array (  '_controller' => 'VOD\\QubitArgentinaBundle\\Controller\\ServiceController::buyAndPlayTrailerAction',));
            }
            not_buy_and_play_trailer:

            // service_criteria
            if (0 === strpos($pathinfo, '/service/criteria') && preg_match('#^/service/criteria(?:/(?P<criteria>[^/]++)(?:/(?P<page>[^/]++)(?:/(?P<hash>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_service_criteria;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'service_criteria')), array (  '_controller' => 'VOD\\QubitArgentinaBundle\\Controller\\ServiceController::criteriaServiceAction',  'criteria' => 'null',  'page' => '1',  'hash' => 'null',));
            }
            not_service_criteria:

            // service_list
            if (0 === strpos($pathinfo, '/service/list') && preg_match('#^/service/list(?:/(?P<criteria>[^/]++)(?:/(?P<status>[^/]++)(?:/(?P<page>[^/]++)(?:/(?P<hash>[^/]++))?)?)?)?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_service_list;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'service_list')), array (  '_controller' => 'VOD\\QubitArgentinaBundle\\Controller\\ServiceController::listServiceAction',  'criteria' => 'null',  'status' => 'null',  'page' => '1',  'hash' => 'null',));
            }
            not_service_list:

            if (0 === strpos($pathinfo, '/service/content')) {
                // content_popup
                if (0 === strpos($pathinfo, '/service/content/popup') && preg_match('#^/service/content/popup(?:/(?P<uuid>[^/]++))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_content_popup;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'content_popup')), array (  '_controller' => 'VOD\\QubitArgentinaBundle\\Controller\\ServiceController::contentPopupServiceAction',  'uuid' => 'null',));
                }
                not_content_popup:

                // content_favorite
                if (0 === strpos($pathinfo, '/service/content/favorite') && preg_match('#^/service/content/favorite(?:/(?P<uuid>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_content_favorite;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'content_favorite')), array (  '_controller' => 'VOD\\QubitArgentinaBundle\\Controller\\ServiceController::isContentFavoriteAction',  'uuid' => 'null',));
                }
                not_content_favorite:

                // service_content_recommendation
                if (0 === strpos($pathinfo, '/service/content/recommendation') && preg_match('#^/service/content/recommendation(?:/(?P<uuid>[^/]++))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_service_content_recommendation;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'service_content_recommendation')), array (  '_controller' => 'VOD\\QubitArgentinaBundle\\Controller\\ServiceController::contentRecommendationServiceAction',  'uuid' => 'null',));
                }
                not_service_content_recommendation:

                // service_content_search
                if ($pathinfo === '/service/content/search/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_service_content_search;
                    }

                    return array (  '_controller' => 'VOD\\QubitArgentinaBundle\\Controller\\ServiceController::contentSearchServiceAction',  '_route' => 'service_content_search',);
                }
                not_service_content_search:

                // service_content_status
                if (0 === strpos($pathinfo, '/service/content-status') && preg_match('#^/service/content\\-status(?:/(?P<uuid>[^/]++)(?:/(?P<password>[^/]++))?)?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_service_content_status;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'service_content_status')), array (  '_controller' => 'VOD\\QubitArgentinaBundle\\Controller\\ServiceController::contentStatusServiceAction',  'uuid' => NULL,  'password' => NULL,));
                }
                not_service_content_status:

            }

            // service_user_history
            if ($pathinfo === '/service/user-history/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_service_user_history;
                }

                return array (  '_controller' => 'VOD\\QubitArgentinaBundle\\Controller\\ServiceController::userHistoryServiceAction',  '_route' => 'service_user_history',);
            }
            not_service_user_history:

            // service_set_recommended
            if (0 === strpos($pathinfo, '/service/recommender') && preg_match('#^/service/recommender(?:/(?P<uuid>[^/]++)(?:/(?P<recommended>[^/]++)(?:/(?P<type>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_service_set_recommended;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'service_set_recommended')), array (  '_controller' => 'VOD\\QubitArgentinaBundle\\Controller\\ServiceController::setRecommendedEventAction',  'uuid' => 'null',  'recommended' => '0',  'type' => 'null',));
            }
            not_service_set_recommended:

            // service_user_favorite
            if (0 === strpos($pathinfo, '/service/user-favorite') && preg_match('#^/service/user\\-favorite(?:/(?P<uuid>[^/]++))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                    goto not_service_user_favorite;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'service_user_favorite')), array (  '_controller' => 'VOD\\QubitArgentinaBundle\\Controller\\ServiceController::userFavoriteServiceAction',  'uuid' => 'null',));
            }
            not_service_user_favorite:

            if (0 === strpos($pathinfo, '/service/s')) {
                // service_set_current_time
                if ($pathinfo === '/service/set-current-time') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_service_set_current_time;
                    }

                    return array (  '_controller' => 'VOD\\QubitArgentinaBundle\\Controller\\ServiceController::setCurrentTimeAction',  '_route' => 'service_set_current_time',);
                }
                not_service_set_current_time:

                // service_subscribe_newsletter
                if ($pathinfo === '/service/subscribe-to-newsletter') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_service_subscribe_newsletter;
                    }

                    return array (  '_controller' => 'VOD\\QubitArgentinaBundle\\Controller\\ServiceController::subscribeToNewsletterAction',  '_route' => 'service_subscribe_newsletter',);
                }
                not_service_subscribe_newsletter:

            }

            // service_constraint_username_validator
            if ($pathinfo === '/service/username-validator') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_service_constraint_username_validator;
                }

                return array (  '_controller' => 'VOD\\QubitArgentinaBundle\\Controller\\ServiceController::usernameValidatorAction',  '_route' => 'service_constraint_username_validator',);
            }
            not_service_constraint_username_validator:

            // service_constraint_change_username_validator
            if ($pathinfo === '/service/change-username-validator') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_service_constraint_change_username_validator;
                }

                return array (  '_controller' => 'VOD\\QubitArgentinaBundle\\Controller\\ServiceController::changeUsernameValidatorAction',  '_route' => 'service_constraint_change_username_validator',);
            }
            not_service_constraint_change_username_validator:

            if (0 === strpos($pathinfo, '/service/pa')) {
                // service_constraint_parental_password_validator
                if ($pathinfo === '/service/parental-password-validator') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_service_constraint_parental_password_validator;
                    }

                    return array (  '_controller' => 'VOD\\QubitArgentinaBundle\\Controller\\ServiceController::parentalPasswordValidatorAction',  '_route' => 'service_constraint_parental_password_validator',);
                }
                not_service_constraint_parental_password_validator:

                // service_constraint_password_validator
                if ($pathinfo === '/service/password-validator') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_service_constraint_password_validator;
                    }

                    return array (  '_controller' => 'VOD\\QubitArgentinaBundle\\Controller\\ServiceController::passwordValidatorAction',  '_route' => 'service_constraint_password_validator',);
                }
                not_service_constraint_password_validator:

            }

            // service_constraint_coupon_validator
            if ($pathinfo === '/service/coupon-validator') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_service_constraint_coupon_validator;
                }

                return array (  '_controller' => 'VOD\\QubitArgentinaBundle\\Controller\\ServiceController::couponValidatorAction',  '_route' => 'service_constraint_coupon_validator',);
            }
            not_service_constraint_coupon_validator:

            // service_ajax_request
            if ($pathinfo === '/service/ajax') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_service_ajax_request;
                }

                return array (  '_controller' => 'VOD\\QubitArgentinaBundle\\Controller\\ServiceController::ajaxRequestAction',  '_route' => 'service_ajax_request',);
            }
            not_service_ajax_request:

            // service_set_leaveplayer
            if ($pathinfo === '/service/leaveplayer') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_service_set_leaveplayer;
                }

                return array (  '_controller' => 'VOD\\QubitArgentinaBundle\\Controller\\ServiceController::leavePlayerAction',  '_route' => 'service_set_leaveplayer',);
            }
            not_service_set_leaveplayer:

            // service_poll_quality
            if ($pathinfo === '/service/pollquality') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_service_poll_quality;
                }

                return array (  '_controller' => 'VOD\\QubitArgentinaBundle\\Controller\\ServiceController::pollQualityAction',  '_route' => 'service_poll_quality',);
            }
            not_service_poll_quality:

            // service_validate_geoip
            if ($pathinfo === '/service/validate-geoip') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_service_validate_geoip;
                }

                return array (  '_controller' => 'VOD\\QubitArgentinaBundle\\Controller\\ServiceController::validateGeoIpAction',  '_route' => 'service_validate_geoip',);
            }
            not_service_validate_geoip:

        }

        // login
        if (rtrim($pathinfo, '/') === '/ingreso') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_login;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'login');
            }

            return array (  '_controller' => 'VOD\\QubitArgentinaBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
        }
        not_login:

        if (0 === strpos($pathinfo, '/log')) {
            // login_check
            if (rtrim($pathinfo, '/') === '/login-check') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_login_check;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'login_check');
                }

                return array (  '_controller' => 'VOD\\QubitArgentinaBundle\\Controller\\SecurityController::loginCheckAction',  '_route' => 'login_check',);
            }
            not_login_check:

            // logout
            if (rtrim($pathinfo, '/') === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_logout;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'logout');
                }

                return array('_route' => 'logout');
            }
            not_logout:

        }

        if (0 === strpos($pathinfo, '/usuario')) {
            // payment_method
            if ($pathinfo === '/usuario/metodo-pago') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_payment_method;
                }

                return array (  '_controller' => 'VOD\\QubitArgentinaBundle\\Controller\\PaymentController::paymentMethodAction',  '_route' => 'payment_method',);
            }
            not_payment_method:

            if (0 === strpos($pathinfo, '/usuario/activar-')) {
                // user_activate_subscription
                if (rtrim($pathinfo, '/') === '/usuario/activar-suscripcion') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_user_activate_subscription;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'user_activate_subscription');
                    }

                    return array (  '_controller' => 'VOD\\QubitArgentinaBundle\\Controller\\PaymentController::paymentMethodAction',  '_route' => 'user_activate_subscription',);
                }
                not_user_activate_subscription:

                // user_activate_payment_method
                if (rtrim($pathinfo, '/') === '/usuario/activar-medio-pago') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_user_activate_payment_method;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'user_activate_payment_method');
                    }

                    return array (  '_controller' => 'VOD\\QubitArgentinaBundle\\Controller\\PaymentController::paymentMethodAction',  '_route' => 'user_activate_payment_method',);
                }
                not_user_activate_payment_method:

            }

            // user_success_subscription
            if (rtrim($pathinfo, '/') === '/usuario/suscripcion-exitosa') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_success_subscription;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'user_success_subscription');
                }

                return array (  '_controller' => 'VOD\\BaseBundle\\Controller\\UserController::successSubscriptionAction',  '_route' => 'user_success_subscription',);
            }
            not_user_success_subscription:

        }

        if (0 === strpos($pathinfo, '/operacion')) {
            // operation_status
            if (preg_match('#^/operacion(?:/(?P<operationId>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'operation_status')), array (  'operationId' => 'null',  '_controller' => 'VOD\\QubitArgentinaBundle\\Controller\\PaymentController::operationStatusAction',));
            }

            // operation_result
            if (0 === strpos($pathinfo, '/operacion/resultado') && preg_match('#^/operacion/resultado(?:/(?P<status>[^/]++)(?:/(?P<paramHash>[^/]++))?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'operation_result')), array (  'status' => 'null',  'paramHash' => 'null',  '_controller' => 'VOD\\QubitArgentinaBundle\\Controller\\PaymentController::operationResultAction',));
            }

        }

        // infotainment_callback
        if (0 === strpos($pathinfo, '/infotainment') && preg_match('#^/infotainment(?:/(?P<parameters>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'infotainment_callback')), array (  'parameters' => 'null',  '_controller' => 'VOD\\QubitArgentinaBundle\\Controller\\PaymentController::infotainmentCallbackAction',));
        }

        if (0 === strpos($pathinfo, '/usuario')) {
            // user_data
            if (rtrim($pathinfo, '/') === '/usuario/mis-datos') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_user_data;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'user_data');
                }

                return array (  '_controller' => 'VOD\\BaseBundle\\Controller\\UserController::dataAction',  '_route' => 'user_data',);
            }
            not_user_data:

            // user_subscription
            if (rtrim($pathinfo, '/') === '/usuario/suscripcion') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_user_subscription;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'user_subscription');
                }

                return array (  '_controller' => 'VOD\\BaseBundle\\Controller\\UserController::subscriptionAction',  '_route' => 'user_subscription',);
            }
            not_user_subscription:

            // user_confirm_subscription
            if (rtrim($pathinfo, '/') === '/usuario/confirmar-suscripcion') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_user_confirm_subscription;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'user_confirm_subscription');
                }

                return array (  '_controller' => 'VOD\\BaseBundle\\Controller\\UserController::confirmSubscriptionAction',  '_route' => 'user_confirm_subscription',);
            }
            not_user_confirm_subscription:

            if (0 === strpos($pathinfo, '/usuario/perfil')) {
                // user_profile
                if (rtrim($pathinfo, '/') === '/usuario/perfil') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_user_profile;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'user_profile');
                    }

                    return array (  '_controller' => 'VOD\\BaseBundle\\Controller\\UserController::profileAction',  '_route' => 'user_profile',);
                }
                not_user_profile:

                // user_profile_edit
                if (preg_match('#^/usuario/perfil/(?P<profileId>[^/]++)/editar/?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_user_profile_edit;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'user_profile_edit');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_profile_edit')), array (  '_controller' => 'VOD\\BaseBundle\\Controller\\UserController::profileCrudAction',  'action' => 'editar',));
                }
                not_user_profile_edit:

                // user_profile_new
                if (rtrim($pathinfo, '/') === '/usuario/perfil/nuevo') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_user_profile_new;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'user_profile_new');
                    }

                    return array (  '_controller' => 'VOD\\BaseBundle\\Controller\\UserController::profileCrudAction',  'action' => 'nuevo',  'profileId' => NULL,  '_route' => 'user_profile_new',);
                }
                not_user_profile_new:

            }

            // user_profile_delete
            if (0 === strpos($pathinfo, '/usuario/borrar/perfil') && preg_match('#^/usuario/borrar/perfil/(?P<profileId>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'DELETE', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'DELETE', 'HEAD'));
                    goto not_user_profile_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_profile_delete')), array (  '_controller' => 'VOD\\BaseBundle\\Controller\\UserController::profileDeleteAction',));
            }
            not_user_profile_delete:

            // user_parental_control
            if (rtrim($pathinfo, '/') === '/usuario/control-parental') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_user_parental_control;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'user_parental_control');
                }

                return array (  '_controller' => 'VOD\\BaseBundle\\Controller\\UserController::parentalControlAction',  '_route' => 'user_parental_control',);
            }
            not_user_parental_control:

            // user_consumption
            if (0 === strpos($pathinfo, '/usuario/mis-alquileres') && preg_match('#^/usuario/mis\\-alquileres(?:/(?P<page>[^/]++)(?:/(?P<pageSize>[^/]++))?)?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_consumption;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_consumption')), array (  '_controller' => 'VOD\\BaseBundle\\Controller\\UserController::consumptionAction',  'pageSize' => '4',  'page' => '1',));
            }
            not_user_consumption:

            // select_profile
            if (rtrim($pathinfo, '/') === '/usuario/seleccionar-perfil') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_select_profile;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'select_profile');
                }

                return array (  '_controller' => 'VOD\\BaseBundle\\Controller\\UserController::selectProfileAction',  '_route' => 'select_profile',);
            }
            not_select_profile:

            if (0 === strpos($pathinfo, '/usuario/ca')) {
                // switch_profile
                if (0 === strpos($pathinfo, '/usuario/cambiar-perfil') && preg_match('#^/usuario/cambiar\\-perfil/(?P<profileId>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_switch_profile;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'switch_profile')), array (  '_controller' => 'VOD\\BaseBundle\\Controller\\UserController::switchProfileAction',));
                }
                not_switch_profile:

                if (0 === strpos($pathinfo, '/usuario/cancela')) {
                    if (0 === strpos($pathinfo, '/usuario/cancelar-suscripcion')) {
                        // user_cancel_subscription
                        if (rtrim($pathinfo, '/') === '/usuario/cancelar-suscripcion') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_user_cancel_subscription;
                            }

                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'user_cancel_subscription');
                            }

                            return array (  '_controller' => 'VOD\\BaseBundle\\Controller\\UserController::cancelSubscriptionAction',  '_route' => 'user_cancel_subscription',);
                        }
                        not_user_cancel_subscription:

                        // user_cancel_subscription_poll
                        if (rtrim($pathinfo, '/') === '/usuario/cancelar-suscripcion-encuesta') {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_user_cancel_subscription_poll;
                            }

                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'user_cancel_subscription_poll');
                            }

                            return array (  '_controller' => 'VOD\\BaseBundle\\Controller\\UserController::cancelSubscriptionPollAction',  '_route' => 'user_cancel_subscription_poll',);
                        }
                        not_user_cancel_subscription_poll:

                    }

                    // user_cancel_subscription_success
                    if (rtrim($pathinfo, '/') === '/usuario/cancelacion-exitosa') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_user_cancel_subscription_success;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'user_cancel_subscription_success');
                        }

                        return array (  '_controller' => 'VOD\\BaseBundle\\Controller\\UserController::cancelSubscriptionSuccessAction',  '_route' => 'user_cancel_subscription_success',);
                    }
                    not_user_cancel_subscription_success:

                }

            }

        }

        // registration
        if (rtrim($pathinfo, '/') === '/registro') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_registration;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'registration');
            }

            return array (  '_controller' => 'VOD\\QubitArgentinaBundle\\Controller\\SecurityController::registrationAction',  '_route' => 'registration',);
        }
        not_registration:

        // request_new_password
        if (rtrim($pathinfo, '/') === '/nueva-contrasena') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_request_new_password;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'request_new_password');
            }

            return array (  '_controller' => 'VOD\\QubitArgentinaBundle\\Controller\\SecurityController::resettingAction',  '_route' => 'request_new_password',);
        }
        not_request_new_password:

        if (0 === strpos($pathinfo, '/usuario')) {
            // check_new_password_hash
            if (0 === strpos($pathinfo, '/usuario/recuperar') && preg_match('#^/usuario/recuperar/(?P<hash>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_check_new_password_hash;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'check_new_password_hash')), array (  '_controller' => 'VOD\\QubitArgentinaBundle\\Controller\\SecurityController::checkPasswordHashAction',));
            }
            not_check_new_password_hash:

            // generate_new_password
            if (0 === strpos($pathinfo, '/usuario/generar') && preg_match('#^/usuario/generar/(?P<hash>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_generate_new_password;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'generate_new_password')), array (  '_controller' => 'VOD\\QubitArgentinaBundle\\Controller\\SecurityController::generateNewPasswordAction',));
            }
            not_generate_new_password:

        }

        // landing-tarjeta-naranja
        if (0 === strpos($pathinfo, '/landing/cliente') && preg_match('#^/landing/cliente/(?P<cliente>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_landingtarjetanaranja;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'landing-tarjeta-naranja')), array (  '_controller' => 'VOD\\QubitArgentinaBundle\\Controller\\SecurityController::landigClienteAction',));
        }
        not_landingtarjetanaranja:

        if (0 === strpos($pathinfo, '/bienvenida')) {
            // _promotions
            if (rtrim($pathinfo, '/') === '/bienvenida') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not__promotions;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_promotions');
                }

                return array (  '_controller' => 'VOD\\BaseBundle\\Controller\\PromotionController::indexAction',  '_route' => '_promotions',);
            }
            not__promotions:

            // promotions
            if (preg_match('#^/bienvenida(?P<number>\\d+)/?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_promotions;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'promotions');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'promotions')), array (  '_controller' => 'VOD\\BaseBundle\\Controller\\PromotionController::indexAction',  'number' => 'null',));
            }
            not_promotions:

        }

        if (0 === strpos($pathinfo, '/s')) {
            if (0 === strpos($pathinfo, '/search')) {
                // service_search_directors
                if ($pathinfo === '/search/directors') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_service_search_directors;
                    }

                    return array (  '_controller' => 'VOD\\BaseBundle\\Controller\\SearchController::searchDirectorsAction',  '_route' => 'service_search_directors',);
                }
                not_service_search_directors:

                // service_search_tags
                if ($pathinfo === '/search/tags') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_service_search_tags;
                    }

                    return array (  '_controller' => 'VOD\\BaseBundle\\Controller\\SearchController::searchTagsAction',  '_route' => 'service_search_tags',);
                }
                not_service_search_tags:

                // service_search_stars
                if ($pathinfo === '/search/stars') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_service_search_stars;
                    }

                    return array (  '_controller' => 'VOD\\BaseBundle\\Controller\\SearchController::searchStarsAction',  '_route' => 'service_search_stars',);
                }
                not_service_search_stars:

            }

            // promotion_and_subscription
            if (0 === strpos($pathinfo, '/suscripcion-promocional') && preg_match('#^/suscripcion\\-promocional/(?P<company>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'promotion_and_subscription');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'promotion_and_subscription')), array (  '_controller' => 'VOD\\QubitArgentinaBundle\\Controller\\SubscriptionController::promotionAndSubscriptionAction',));
            }

            // short_promotion
            if (0 === strpos($pathinfo, '/short') && preg_match('#^/short/(?P<promotion>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_short_promotion;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'short_promotion');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'short_promotion')), array (  '_controller' => 'VOD\\QubitArgentinaBundle\\Controller\\SubscriptionController::shortPromotionAction',));
            }
            not_short_promotion:

        }

        // clear_default_memcache_pool
        if (rtrim($pathinfo, '/') === '/__clearcache') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_clear_default_memcache_pool;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'clear_default_memcache_pool');
            }

            return array (  '_controller' => 'VOD\\BaseBundle\\Controller\\CacheController::clearDefaultMemcacheAction',  '_route' => 'clear_default_memcache_pool',);
        }
        not_clear_default_memcache_pool:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
