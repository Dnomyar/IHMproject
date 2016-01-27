<?php

// src/IHMprojet/Bundle/GeneralBundle/Controller/AdvertController.php

namespace IHMprojet\Bundle\GeneralBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

class AdvertController
{
    public function indexAction()
    {
        return new Response("Hello World !");
    }
}
