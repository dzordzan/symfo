<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'thread' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'APiszczek\\DemoBundle\\Controller\\ThreadController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/thread/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'thread_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'APiszczek\\DemoBundle\\Controller\\ThreadController::showAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/thread',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'thread_show_by_slug' => array (  0 =>   array (    0 => 'slug',  ),  1 =>   array (    '_controller' => 'APiszczek\\DemoBundle\\Controller\\ThreadController::showBySlugAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'slug',    ),    2 =>     array (      0 => 'text',      1 => '/thread',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'thread_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'APiszczek\\DemoBundle\\Controller\\ThreadController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/thread/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'thread_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'APiszczek\\DemoBundle\\Controller\\ThreadController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/thread/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'thread_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'APiszczek\\DemoBundle\\Controller\\ThreadController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/thread',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'thread_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'APiszczek\\DemoBundle\\Controller\\ThreadController::updateAction',  ),  2 =>   array (    '_method' => 'post|put',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/thread',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'thread_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'APiszczek\\DemoBundle\\Controller\\ThreadController::deleteAction',  ),  2 =>   array (    '_method' => 'post|delete',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/thread',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'a_piszczek_demo_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'APiszczek\\DemoBundle\\Controller\\OverviewController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'a_piszczek_demo_about' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'APiszczek\\DemoBundle\\Controller\\OverviewController::aboutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/about',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'a_piszczek_demo_upload' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'APiszczek\\DemoBundle\\Controller\\OverviewController::uploadAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/upload',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'a_piszczek_demo_feedRemove' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'APiszczek\\DemoBundle\\Controller\\OverviewController::feedRemoveAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/feed/remove',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
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
