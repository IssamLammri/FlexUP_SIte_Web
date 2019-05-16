<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Groupes extends  AbstractController {

    /**
     * @Route("/groupes",name="Groupes")
     * @return Response
     */
    public function index():Response{
        return $this->render('Pages/Groupes.html.twig');    }
}