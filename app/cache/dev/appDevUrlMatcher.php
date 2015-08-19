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

        if (0 === strpos($pathinfo, '/css/df67d08')) {
            // _assetic_df67d08
            if ($pathinfo === '/css/df67d08.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'df67d08',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_df67d08',);
            }

            if (0 === strpos($pathinfo, '/css/df67d08_')) {
                if (0 === strpos($pathinfo, '/css/df67d08_bootstrap')) {
                    // _assetic_df67d08_0
                    if ($pathinfo === '/css/df67d08_bootstrap_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'df67d08',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_df67d08_0',);
                    }

                    // _assetic_df67d08_1
                    if ($pathinfo === '/css/df67d08_bootstrap-theme_2.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'df67d08',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_df67d08_1',);
                    }

                }

                // _assetic_df67d08_2
                if ($pathinfo === '/css/df67d08_custom_3.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'df67d08',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_df67d08_2',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/853976d')) {
            // _assetic_853976d
            if ($pathinfo === '/js/853976d.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '853976d',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_853976d',);
            }

            if (0 === strpos($pathinfo, '/js/853976d_')) {
                // _assetic_853976d_0
                if ($pathinfo === '/js/853976d_jquery_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '853976d',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_853976d_0',);
                }

                // _assetic_853976d_1
                if ($pathinfo === '/js/853976d_bootstrap_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '853976d',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_853976d_1',);
                }

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

        if (0 === strpos($pathinfo, '/categories')) {
            // categories
            if (rtrim($pathinfo, '/') === '/categories') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_categories;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'categories');
                }

                return array (  '_controller' => 'AP\\EsoreBundle\\Controller\\CategoriesController::indexAction',  '_route' => 'categories',);
            }
            not_categories:

            // categories_create
            if ($pathinfo === '/categories/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_categories_create;
                }

                return array (  '_controller' => 'AP\\EsoreBundle\\Controller\\CategoriesController::createAction',  '_route' => 'categories_create',);
            }
            not_categories_create:

            // categories_new
            if ($pathinfo === '/categories/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_categories_new;
                }

                return array (  '_controller' => 'AP\\EsoreBundle\\Controller\\CategoriesController::newAction',  '_route' => 'categories_new',);
            }
            not_categories_new:

            // categories_show
            if (preg_match('#^/categories/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_categories_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'categories_show')), array (  '_controller' => 'AP\\EsoreBundle\\Controller\\CategoriesController::showAction',));
            }
            not_categories_show:

            // categories_edit
            if (preg_match('#^/categories/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_categories_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'categories_edit')), array (  '_controller' => 'AP\\EsoreBundle\\Controller\\CategoriesController::editAction',));
            }
            not_categories_edit:

            // categories_update
            if (preg_match('#^/categories/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_categories_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'categories_update')), array (  '_controller' => 'AP\\EsoreBundle\\Controller\\CategoriesController::updateAction',));
            }
            not_categories_update:

            // categories_delete
            if (preg_match('#^/categories/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_categories_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'categories_delete')), array (  '_controller' => 'AP\\EsoreBundle\\Controller\\CategoriesController::deleteAction',));
            }
            not_categories_delete:

        }

        // ap_esore_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ap_esore_default_index')), array (  '_controller' => 'AP\\EsoreBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/products')) {
            // products
            if (rtrim($pathinfo, '/') === '/products') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_products;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'products');
                }

                return array (  '_controller' => 'AP\\EsoreBundle\\Controller\\ProductsController::indexAction',  '_route' => 'products',);
            }
            not_products:

            // products_create
            if ($pathinfo === '/products/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_products_create;
                }

                return array (  '_controller' => 'AP\\EsoreBundle\\Controller\\ProductsController::createAction',  '_route' => 'products_create',);
            }
            not_products_create:

            // products_new
            if ($pathinfo === '/products/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_products_new;
                }

                return array (  '_controller' => 'AP\\EsoreBundle\\Controller\\ProductsController::newAction',  '_route' => 'products_new',);
            }
            not_products_new:

            // products_show
            if (preg_match('#^/products/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_products_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'products_show')), array (  '_controller' => 'AP\\EsoreBundle\\Controller\\ProductsController::showAction',));
            }
            not_products_show:

            // products_edit
            if (preg_match('#^/products/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_products_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'products_edit')), array (  '_controller' => 'AP\\EsoreBundle\\Controller\\ProductsController::editAction',));
            }
            not_products_edit:

            // products_update
            if (preg_match('#^/products/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_products_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'products_update')), array (  '_controller' => 'AP\\EsoreBundle\\Controller\\ProductsController::updateAction',));
            }
            not_products_update:

            // products_delete
            if (preg_match('#^/products/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_products_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'products_delete')), array (  '_controller' => 'AP\\EsoreBundle\\Controller\\ProductsController::deleteAction',));
            }
            not_products_delete:

        }

        if (0 === strpos($pathinfo, '/subcategories')) {
            // subcategories
            if (rtrim($pathinfo, '/') === '/subcategories') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_subcategories;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'subcategories');
                }

                return array (  '_controller' => 'AP\\EsoreBundle\\Controller\\SubCategoriesController::indexAction',  '_route' => 'subcategories',);
            }
            not_subcategories:

            // subcategories_create
            if ($pathinfo === '/subcategories/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_subcategories_create;
                }

                return array (  '_controller' => 'AP\\EsoreBundle\\Controller\\SubCategoriesController::createAction',  '_route' => 'subcategories_create',);
            }
            not_subcategories_create:

            // subcategories_new
            if ($pathinfo === '/subcategories/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_subcategories_new;
                }

                return array (  '_controller' => 'AP\\EsoreBundle\\Controller\\SubCategoriesController::newAction',  '_route' => 'subcategories_new',);
            }
            not_subcategories_new:

            // subcategories_show
            if (preg_match('#^/subcategories/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_subcategories_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'subcategories_show')), array (  '_controller' => 'AP\\EsoreBundle\\Controller\\SubCategoriesController::showAction',));
            }
            not_subcategories_show:

            // subcategories_edit
            if (preg_match('#^/subcategories/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_subcategories_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'subcategories_edit')), array (  '_controller' => 'AP\\EsoreBundle\\Controller\\SubCategoriesController::editAction',));
            }
            not_subcategories_edit:

            // subcategories_update
            if (preg_match('#^/subcategories/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_subcategories_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'subcategories_update')), array (  '_controller' => 'AP\\EsoreBundle\\Controller\\SubCategoriesController::updateAction',));
            }
            not_subcategories_update:

            // subcategories_delete
            if (preg_match('#^/subcategories/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_subcategories_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'subcategories_delete')), array (  '_controller' => 'AP\\EsoreBundle\\Controller\\SubCategoriesController::deleteAction',));
            }
            not_subcategories_delete:

        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _demo_security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_demo_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
