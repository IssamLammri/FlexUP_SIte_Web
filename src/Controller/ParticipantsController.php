<?php

namespace App\Controller;

use App\Entity\Participants;
use App\Form\ParticipantsType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/participants")
 */
class ParticipantsController extends AbstractController
{
    /**
     * @Route("/", name="participants_index", methods={"GET"})
     */
    public function index(): Response
    {
        $participants = $this->getDoctrine()
            ->getRepository(Participants::class)
            ->findAll();

        return $this->render('participants/index.html.twig', [
            'participants' => $participants,
        ]);
    }

    /**
     * @Route("/new", name="participants_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $participant = new Participants();
        $form = $this->createForm(ParticipantsType::class, $participant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($participant);
            $entityManager->flush();

            return $this->redirectToRoute('participants_index');
        }

        return $this->render('participants/new.html.twig', [
            'participant' => $participant,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idParticipant}", name="participants_show", methods={"GET"})
     */
    public function show(Participants $participant): Response
    {
        return $this->render('participants/show.html.twig', [
            'participant' => $participant,
        ]);
    }

    /**
     * @Route("/{idParticipant}/edit", name="participants_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Participants $participant): Response
    {
        $form = $this->createForm(ParticipantsType::class, $participant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('participants_index', [
                'idParticipant' => $participant->getIdParticipant(),
            ]);
        }

        return $this->render('participants/edit.html.twig', [
            'participant' => $participant,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idParticipant}", name="participants_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Participants $participant): Response
    {
        if ($this->isCsrfTokenValid('delete'.$participant->getIdParticipant(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($participant);
            $entityManager->flush();
        }

        return $this->redirectToRoute('participants_index');
    }
}
