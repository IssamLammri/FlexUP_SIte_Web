<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Connexion extends AbstractController {

    /**
     * @Route("/connexion",name="Connexion")
     * @return Response
     */
    public function index():Response {
            return $this->render('Pages/Connexion.html.twig');
    }
}