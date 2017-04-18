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

        if (0 === strpos($pathinfo, '/css/aa7d62c')) {
            // _assetic_aa7d62c
            if ($pathinfo === '/css/aa7d62c.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'aa7d62c',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_aa7d62c',);
            }

            // _assetic_aa7d62c_0
            if ($pathinfo === '/css/aa7d62c_part_1_style_1.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'aa7d62c',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_aa7d62c_0',);
            }

        }

        if (0 === strpos($pathinfo, '/js/8160aab')) {
            // _assetic_8160aab
            if ($pathinfo === '/js/8160aab.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '8160aab',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_8160aab',);
            }

            // _assetic_8160aab_0
            if ($pathinfo === '/js/8160aab_part_1_script_1.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '8160aab',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_8160aab_0',);
            }

        }

        if (0 === strpos($pathinfo, '/css/fcf8523')) {
            // _assetic_fcf8523
            if ($pathinfo === '/css/fcf8523.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'fcf8523',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_fcf8523',);
            }

            // _assetic_fcf8523_0
            if ($pathinfo === '/css/fcf8523_part_1_style_1.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'fcf8523',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_fcf8523_0',);
            }

        }

        if (0 === strpos($pathinfo, '/js/26319e4')) {
            // _assetic_26319e4
            if ($pathinfo === '/js/26319e4.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '26319e4',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_26319e4',);
            }

            // _assetic_26319e4_0
            if ($pathinfo === '/js/26319e4_part_1_script_1.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '26319e4',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_26319e4_0',);
            }

        }

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

                // _profiler_open_file
                if ($pathinfo === '/_profiler/open') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
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

        // medust_admin_default_index
        if ($pathinfo === '/admin') {
            return array (  '_controller' => 'Medust\\AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'medust_admin_default_index',);
        }

        // homepage
        if ($pathinfo === '/default') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // Home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'Home');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\HomeController::indexAction',  '_route' => 'Home',);
        }

        // Hello
        if ($pathinfo === '/hello') {
            return array (  '_controller' => 'AppBundle\\Controller\\HomeController::helloAction',  '_route' => 'Hello',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
