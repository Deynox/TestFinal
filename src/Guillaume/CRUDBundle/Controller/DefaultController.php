<?php

namespace Guillaume\CRUDBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GuillaumeCRUDBundle:Default:index.html.twig');
    }
}
