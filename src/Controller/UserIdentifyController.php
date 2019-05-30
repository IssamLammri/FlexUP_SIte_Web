<?php

namespace App\Controller;

use App\Entity\UserIdentify;
use App\Form\UserIdentifyType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/user/identify")
 */
class UserIdentifyController extends AbstractController
{
    /**
     * @Route("/", name="user_identify_index", methods={"GET"})
     */
    public function index(): Response
    {
        $userIdentifies = $this->getDoctrine()
            ->getRepository(UserIdentify::class)
            ->findAll();

        return $this->render('user_identify/index.html.twig', [
            'user_identifies' => $userIdentifies,
        ]);
    }

    /**
     * @Route("/new", name="user_identify_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $userIdentify = new UserIdentify();
        $form = $this->createForm(UserIdentifyType::class, $userIdentify);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($userIdentify);
            $entityManager->flush();

            return $this->redirectToRoute('user_identify_index');
        }

        return $this->render('user_identify/new.html.twig', [
            'user_identify' => $userIdentify,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="user_identify_show", methods={"GET"})
     */
    public function show(UserIdentify $userIdentify): Response
    {
        return $this->render('user_identify/show.html.twig', [
            'user_identify' => $userIdentify,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="user_identify_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, UserIdentify $userIdentify): Response
    {
        $form = $this->createForm(UserIdentifyType::class, $userIdentify);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('user_identify_index', [
                'id' => $userIdentify->getId(),
            ]);
        }

        return $this->render('user_identify/edit.html.twig', [
            'user_identify' => $userIdentify,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="user_identify_delete", methods={"DELETE"})
     */
    public function delete(Request $request, UserIdentify $userIdentify): Response
    {
        if ($this->isCsrfTokenValid('delete'.$userIdentify->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($userIdentify);
            $entityManager->flush();
        }

        return $this->redirectToRoute('user_identify_index');
    }
}
