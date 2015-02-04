<?php

namespace WCS\FlyaroundBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('WCSFlyaroundBundle:Default:index.html.twig', array('name' => $name));
    }
}
