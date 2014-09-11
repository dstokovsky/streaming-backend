<?php

namespace Wowza\StreamBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller{
    
    public function indexAction(){
        $repository = $this->get('doctrine_mongodb')->getManager()->getRepository('WowzaStreamBundle:Stream');
        return $this->render('WowzaStreamBundle:Default:index.html.twig', array( "streams" => $repository->findAll() ) );
    }
}
