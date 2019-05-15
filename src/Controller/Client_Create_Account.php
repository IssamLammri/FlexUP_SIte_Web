<?php

 namespace App\Controller ;

 use Symfony\Component\HttpFoundation\Response;
 use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
 use Symfony\Component\Routing\Annotation\Route;


 class Client_Create_Account extends AbstractController {

     /**
      * @Route("/createaccount",name="creataccount")
      * @return Response
      */
     public function index():Response{
                 return $this->render('Client/Create_Account.html.twig');
     }
 }
