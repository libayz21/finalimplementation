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

        // welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'welcome');
            }

            return array (  '_controller' => 'myBundle\\ictBundle\\Controller\\WelcomeController::welcomeAction',  '_route' => 'welcome',);
        }

        // hello
        if ($pathinfo === '/hello') {
            return array (  '_controller' => 'myBundle\\ictBundle\\Controller\\ContentController::helloAction',  '_route' => 'hello',);
        }

        // career_main
        if ($pathinfo === '/career_main') {
            return array (  '_controller' => 'myBundle\\ictBundle\\Controller\\careerController::mainAction',  '_route' => 'career_main',);
        }

        // activity_main
        if ($pathinfo === '/activity_main') {
            return array (  '_controller' => 'myBundle\\ictBundle\\Controller\\activityController::mainAction',  '_route' => 'activity_main',);
        }

        // scholarship_main
        if ($pathinfo === '/scholarship_main') {
            return array (  '_controller' => 'myBundle\\ictBundle\\Controller\\scholarshipController::mainAction',  '_route' => 'scholarship_main',);
        }

        // teacher_skill_main
        if ($pathinfo === '/teacher_skill_main') {
            return array (  '_controller' => 'myBundle\\ictBundle\\Controller\\teacherController::mainAction',  '_route' => 'teacher_skill_main',);
        }

        if (0 === strpos($pathinfo, '/scholarship')) {
            // scholarship
            if (rtrim($pathinfo, '/') === '/scholarship') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'scholarship');
                }

                return array (  '_controller' => 'myBundle\\ictBundle\\Controller\\scholarshipController::indexAction',  '_route' => 'scholarship',);
            }

            // scholarship_show
            if (preg_match('#^/scholarship/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'scholarship_show')), array (  '_controller' => 'myBundle\\ictBundle\\Controller\\scholarshipController::showAction',));
            }

            // scholarship_new
            if ($pathinfo === '/scholarship/new') {
                return array (  '_controller' => 'myBundle\\ictBundle\\Controller\\scholarshipController::newAction',  '_route' => 'scholarship_new',);
            }

            // scholarship_create
            if ($pathinfo === '/scholarship/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_scholarship_create;
                }

                return array (  '_controller' => 'myBundle\\ictBundle\\Controller\\scholarshipController::createAction',  '_route' => 'scholarship_create',);
            }
            not_scholarship_create:

            // scholarship_edit
            if (preg_match('#^/scholarship/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'scholarship_edit')), array (  '_controller' => 'myBundle\\ictBundle\\Controller\\scholarshipController::editAction',));
            }

            // scholarship_update
            if (preg_match('#^/scholarship/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_scholarship_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'scholarship_update')), array (  '_controller' => 'myBundle\\ictBundle\\Controller\\scholarshipController::updateAction',));
            }
            not_scholarship_update:

            // scholarship_delete
            if (preg_match('#^/scholarship/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_scholarship_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'scholarship_delete')), array (  '_controller' => 'myBundle\\ictBundle\\Controller\\scholarshipController::deleteAction',));
            }
            not_scholarship_delete:

            // scholarship_count
            if (preg_match('#^/scholarship/(?P<id>[^/]++)/count$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'scholarship_count')), array (  '_controller' => 'myBundle\\ictBundle\\Controller\\scholarshipController::countAction',));
            }

        }

        if (0 === strpos($pathinfo, '/activity')) {
            // activity
            if (rtrim($pathinfo, '/') === '/activity') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'activity');
                }

                return array (  '_controller' => 'myBundle\\ictBundle\\Controller\\activityController::indexAction',  '_route' => 'activity',);
            }

            // activity_show
            if (preg_match('#^/activity/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'activity_show')), array (  '_controller' => 'myBundle\\ictBundle\\Controller\\activityController::showAction',));
            }

            // activity_new
            if ($pathinfo === '/activity/new') {
                return array (  '_controller' => 'myBundle\\ictBundle\\Controller\\activityController::newAction',  '_route' => 'activity_new',);
            }

            // activity_create
            if ($pathinfo === '/activity/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_activity_create;
                }

                return array (  '_controller' => 'myBundle\\ictBundle\\Controller\\activityController::createAction',  '_route' => 'activity_create',);
            }
            not_activity_create:

            // activity_edit
            if (preg_match('#^/activity/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'activity_edit')), array (  '_controller' => 'myBundle\\ictBundle\\Controller\\activityController::editAction',));
            }

            // activity_update
            if (preg_match('#^/activity/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_activity_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'activity_update')), array (  '_controller' => 'myBundle\\ictBundle\\Controller\\activityController::updateAction',));
            }
            not_activity_update:

            // activity_delete
            if (preg_match('#^/activity/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_activity_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'activity_delete')), array (  '_controller' => 'myBundle\\ictBundle\\Controller\\activityController::deleteAction',));
            }
            not_activity_delete:

            // activity_count
            if (preg_match('#^/activity/(?P<id>[^/]++)/count$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'activity_count')), array (  '_controller' => 'myBundle\\ictBundle\\Controller\\activityController::countAction',));
            }

        }

        if (0 === strpos($pathinfo, '/teacher')) {
            // teacher
            if (rtrim($pathinfo, '/') === '/teacher') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'teacher');
                }

                return array (  '_controller' => 'myBundle\\ictBundle\\Controller\\teacherController::indexAction',  '_route' => 'teacher',);
            }

            // teacher_show
            if (preg_match('#^/teacher/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'teacher_show')), array (  '_controller' => 'myBundle\\ictBundle\\Controller\\teacherController::showAction',));
            }

            // teacher_new
            if ($pathinfo === '/teacher/new') {
                return array (  '_controller' => 'myBundle\\ictBundle\\Controller\\teacherController::newAction',  '_route' => 'teacher_new',);
            }

            // teacher_create
            if ($pathinfo === '/teacher/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_teacher_create;
                }

                return array (  '_controller' => 'myBundle\\ictBundle\\Controller\\teacherController::createAction',  '_route' => 'teacher_create',);
            }
            not_teacher_create:

            // teacher_edit
            if (preg_match('#^/teacher/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'teacher_edit')), array (  '_controller' => 'myBundle\\ictBundle\\Controller\\teacherController::editAction',));
            }

            // teacher_update
            if (preg_match('#^/teacher/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_teacher_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'teacher_update')), array (  '_controller' => 'myBundle\\ictBundle\\Controller\\teacherController::updateAction',));
            }
            not_teacher_update:

            // teacher_delete
            if (preg_match('#^/teacher/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_teacher_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'teacher_delete')), array (  '_controller' => 'myBundle\\ictBundle\\Controller\\teacherController::deleteAction',));
            }
            not_teacher_delete:

            // teacher_count
            if (preg_match('#^/teacher/(?P<id>[^/]++)/count$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'teacher_count')), array (  '_controller' => 'myBundle\\ictBundle\\Controller\\teacherController::countAction',));
            }

        }

        if (0 === strpos($pathinfo, '/career')) {
            // career
            if (rtrim($pathinfo, '/') === '/career') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'career');
                }

                return array (  '_controller' => 'myBundle\\ictBundle\\Controller\\careerController::indexAction',  '_route' => 'career',);
            }

            // career_show
            if (preg_match('#^/career/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'career_show')), array (  '_controller' => 'myBundle\\ictBundle\\Controller\\careerController::showAction',));
            }

            // career_new
            if ($pathinfo === '/career/new') {
                return array (  '_controller' => 'myBundle\\ictBundle\\Controller\\careerController::newAction',  '_route' => 'career_new',);
            }

            // career_create
            if ($pathinfo === '/career/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_career_create;
                }

                return array (  '_controller' => 'myBundle\\ictBundle\\Controller\\careerController::createAction',  '_route' => 'career_create',);
            }
            not_career_create:

            // career_edit
            if (preg_match('#^/career/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'career_edit')), array (  '_controller' => 'myBundle\\ictBundle\\Controller\\careerController::editAction',));
            }

            // career_update
            if (preg_match('#^/career/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_career_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'career_update')), array (  '_controller' => 'myBundle\\ictBundle\\Controller\\careerController::updateAction',));
            }
            not_career_update:

            // career_delete
            if (preg_match('#^/career/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_career_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'career_delete')), array (  '_controller' => 'myBundle\\ictBundle\\Controller\\careerController::deleteAction',));
            }
            not_career_delete:

            // career_count
            if (preg_match('#^/career/(?P<id>[^/]++)/count$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'career_count')), array (  '_controller' => 'myBundle\\ictBundle\\Controller\\careerController::countAction',));
            }

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

                        // _security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
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
