<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Inscription extends AbstractController {

    /**
     * @Route("/inscription",name="Inscription")
     * @return Response
     */
    public function index():Response {
            return $this->render('Pages/Inscription.html.twig');
    }
}