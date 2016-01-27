<?php

namespace PornicCSBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PornicCSBundle:Default:index.html.twig');
    }
}
