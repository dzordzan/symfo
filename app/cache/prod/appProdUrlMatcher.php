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
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/thread')) {
            // thread
            if (rtrim($pathinfo, '/') === '/thread') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'thread');
                }

                return array (  '_controller' => 'APiszczek\\DemoBundle\\Controller\\ThreadController::indexAction',  '_route' => 'thread',);
            }

            // thread_show
            if (preg_match('#^/thread/(?P<id>\\d+)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'thread_show')), array (  '_controller' => 'APiszczek\\DemoBundle\\Controller\\ThreadController::showAction',));
            }

            // thread_show_by_slug
            if (preg_match('#^/thread/(?P<slug>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'thread_show_by_slug')), array (  '_controller' => 'APiszczek\\DemoBundle\\Controller\\ThreadController::showBySlugAction',));
            }

            // thread_new
            if ($pathinfo === '/thread/new') {
                return array (  '_controller' => 'APiszczek\\DemoBundle\\Controller\\ThreadController::newAction',  '_route' => 'thread_new',);
            }

            // thread_create
            if ($pathinfo === '/thread/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_thread_create;
                }

                return array (  '_controller' => 'APiszczek\\DemoBundle\\Controller\\ThreadController::createAction',  '_route' => 'thread_create',);
            }
            not_thread_create:

            // thread_edit
            if (preg_match('#^/thread/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'thread_edit')), array (  '_controller' => 'APiszczek\\DemoBundle\\Controller\\ThreadController::editAction',));
            }

            // thread_update
            if (preg_match('#^/thread/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_thread_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'thread_update')), array (  '_controller' => 'APiszczek\\DemoBundle\\Controller\\ThreadController::updateAction',));
            }
            not_thread_update:

            // thread_delete
            if (preg_match('#^/thread/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_thread_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'thread_delete')), array (  '_controller' => 'APiszczek\\DemoBundle\\Controller\\ThreadController::deleteAction',));
            }
            not_thread_delete:

        }

        // a_piszczek_demo_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'a_piszczek_demo_index');
            }

            return array (  '_controller' => 'APiszczek\\DemoBundle\\Controller\\OverviewController::indexAction',  '_route' => 'a_piszczek_demo_index',);
        }

        // a_piszczek_demo_about
        if ($pathinfo === '/about') {
            return array (  '_controller' => 'APiszczek\\DemoBundle\\Controller\\OverviewController::aboutAction',  '_route' => 'a_piszczek_demo_about',);
        }

        // a_piszczek_demo_upload
        if ($pathinfo === '/upload') {
            return array (  '_controller' => 'APiszczek\\DemoBundle\\Controller\\OverviewController::uploadAction',  '_route' => 'a_piszczek_demo_upload',);
        }

        // a_piszczek_demo_feedRemove
        if ($pathinfo === '/feed/remove') {
            return array (  '_controller' => 'APiszczek\\DemoBundle\\Controller\\OverviewController::feedRemoveAction',  '_route' => 'a_piszczek_demo_feedRemove',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
