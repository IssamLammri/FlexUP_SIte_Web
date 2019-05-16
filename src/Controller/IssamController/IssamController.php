<?php

namespace App\Controller\IssamController;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IssamController extends  AbstractController {




    /**
     * @Route("/Issam",name="issam")
     * @return Response
     */
    public function index():Response{
        return $this->render('Issam/issam.html.twig');    }
}