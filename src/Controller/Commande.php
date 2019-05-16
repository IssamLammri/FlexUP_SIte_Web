<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Commande extends AbstractController {

    /**
     * @Route("/commande",name="Commande")
     * @return Response
     */
    public function index():Response {
            return $this->render('Pages/Commande.html.twig');
    }
}