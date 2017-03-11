<?php

namespace FormationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class PointageController extends Controller
{
    public function createAction()
    {
        return $this->render('FormationBundle:Pointage:create.html.twig', array(
            // ...
        ));
    }

    public function showAction($id)
    {
        return $this->render('FormationBundle:Pointage:show.html.twig', array(
            // ...
        ));
    }

    public function editAction($id)
    {
        return $this->render('FormationBundle:Pointage:edit.html.twig', array(
            // ...
        ));
    }

    public function deleteAction($id)
    {
        return $this->render('FormationBundle:Pointage:delete.html.twig', array(
            // ...
        ));
    }

    public function affectAction($id)
    {
        return $this->render('FormationBundle:Pointage:affect.html.twig', array(
            // ...
        ));
    }

    public function indexAction()
    {
        /*
        $ex = $this->createAccessDeniedException("Acces refuse");
        return new Response($ex);*/

        return $this->render('FormationBundle:Pointage:index.html.twig', array(
            // ...
        ));
    }

}
