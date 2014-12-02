<?php

namespace APiszczek\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('APiszczekDemoBundle:Default:index.html.twig', array('name' => $name));
    }
}
