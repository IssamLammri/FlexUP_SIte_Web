<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Profil extends AbstractController {

    /**
     * @Route("/profil",name="Profil")
     * @return Response
     */
    public function index():Response {
            return $this->render('Pages/Profil.html.twig');
    }
}