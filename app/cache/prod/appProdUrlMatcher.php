<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
