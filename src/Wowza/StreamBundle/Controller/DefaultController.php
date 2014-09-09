<?php

namespace Wowza\StreamBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('WowzaStreamBundle:Default:index.html.twig', array('name' => $name));
    }
}
