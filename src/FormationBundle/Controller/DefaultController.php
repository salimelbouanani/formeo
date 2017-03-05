<?php

namespace FormationBundle\Controller;

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
}
