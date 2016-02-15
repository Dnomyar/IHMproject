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

    /**
     * @return array
     *
     * @Route("/culture", name="pornic_culture")
     * @Method("GET")
     */
    public function cultureAction()
    {
        return $this->render('PornicCSBundle:Default:culture.html.twig');
    }

}
