<?php

namespace PornicCSBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PornicCSBundle:Default:index.html.twig');
    }

    public function navAction()
    {
        return $this->render('PornicCSBundle:Default:nav.html.twig');
    }

    public function testAction()
    {
        return $this->render('PornicCSBundle:Default:test.html.twig');
    }

}
