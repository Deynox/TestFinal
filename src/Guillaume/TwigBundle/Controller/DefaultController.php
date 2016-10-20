<?php

namespace Guillaume\TwigBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GuillaumeTwigBundle:Default:index.html.twig');
    }
    public function siAction()
    {
        return $this->render('GuillaumeTwigBundle:Default:si.html.twig');
    }
    public function bouclesAction()
    {
        return $this->render('GuillaumeTwigBundle:Default:boucles.html.twig');
    }
}
