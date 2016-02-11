<?php

namespace PornicCSBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class DefaultController extends Controller
{
    /**
     * @return array
     *
     * @Route("/", name="pornic_index")
     * @Method("GET")
     */
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
