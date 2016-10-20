<?php

namespace Guillaume\CRUDBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;
use Doctrine\ORM\EntityManager;

class DefaultController extends Controller
{
    public function indexAction()
    {

        $repository = $this->getDoctrine()->getRepository('GuillaumeCRUDBundle:Article');
        $query = $repository->createQueryBuilder('a')
                ->select('a')
                ->innerJoin('a.utilisateur','u')
                ->innerJoin('a.section','s')
                ->getQuery();
        
        $articles = $query->getResult();
        
        return $this->render('GuillaumeCRUDBundle:Default:index.html.twig', array(
            'articles' => $articles,
        ));
    }
}
