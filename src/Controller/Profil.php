<?php

namespace App\Controller;

use App\Entity\Category;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Profil extends AbstractController {

    /**
     * @Route("/profil",name="Profil")
     * @return Response
     */
    public function index():Response {
        $categories = $this->getDoctrine()
            ->getRepository(Category::class)
            ->findAll();

        return $this->render('Pages/Profil.html.twig', [
            'categories' => $categories,
        ]);
    }
}