<?php

namespace FormationBundle\Controller;

use FormationBundle\Entity\Formation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\VarDumper\VarDumper;

class OldFormationController extends Controller
{
    public function indexAction()
    {
        //redirection
        $url = $this->generateUrl('formation_homepage');
        return $this->redirectToRoute('formation_homepage');

        return $this->render('FormationBundle:Formation:index.html.twig', array(
            // ...
        ));
    }

    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $rep = $em->getRepository('FormationBundle:Formation');

        $formation = $rep->find($id);

        if (empty($formation)){
            return new Response($this->createNotFoundException());
        }

        return $this->render('FormationBundle:Formation:show.html.twig', array(
            'formation'    => $formation
        ));
    }

    public function editAction($id)
    {
        return $this->render('FormationBundle:Formation:edit.html.twig', array(
            // ...
        ));
    }

    public function createAction(Request $request)
    {
        VarDumper::dump($request); die;
        $em = $this->getDoctrine()->getManager();

        $formation = new Formation();
        $formation->setTitle("Symfony");
        $formation->setPrice(1000);
        $formation->setDateStart(new \DateTime());
        $formation->setDateEnd(new \DateTime());

        $em->persist($formation);
        $em->flush();

        return $this->render('FormationBundle:Formation:create.html.twig', array(
            // ...
        ));
    }
}
