<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Panier extends AbstractController {

    /**
     * @Route("/panier",name="Panier")
     * @return Response
     */
    public function index():Response {
            return $this->render('Pages/Panier.html.twig');
    }
}