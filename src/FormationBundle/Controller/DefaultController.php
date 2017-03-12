<?php

namespace FormationBundle\Controller;

use FormationBundle\Entity\Teacher;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FormationBundle:Default:index.html.twig');
    }

    public function demoAction()
    {
        /*
        $response = new Response('Demo');

        return $response; */

        return $this->render('FormationBundle:Default:demo.html.twig');
    }

    public function newTeacherAction()
    {

        /*
        sauvegarder un Teacher dans la base de donnees, inserer une nouvelle ligne*/
       $teacher= new Teacher();
       $teacher->setName("test");
       $teacher->setSurname("surtest");
       $em=$this->getDoctrine()->getEntityManager();
       $em->persist($teacher);
       $em->flush();

       return $this->redirectToRoute('formation_index');
    }
}
