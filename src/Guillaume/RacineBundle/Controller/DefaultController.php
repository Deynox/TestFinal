<?php

namespace Guillaume\RacineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GuillaumeRacineBundle:Default:index.html.twig');
    }
}
