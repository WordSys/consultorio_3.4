<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SistemaController extends Controller
{
    /**
     * @Route("sistema/profesionales", name="profesionales")
     */
    public function profesionalesAction(Request $request)
    {

        return $this->render('sistema/profesionales.html.twig');
        // replace this example code with whatever you need
        /*
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
        */

    }


}
