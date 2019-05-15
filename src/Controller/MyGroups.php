<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MyGroups extends  AbstractController {

    /**
     * @Route("/mygroups",name="mygroups")
     * @return Response
     */
    public function index():Response{
        return $this->render('Groups/mygroups.html.twig');    }
}