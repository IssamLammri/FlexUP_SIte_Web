<?php

namespace App\Controller;

use App\Entity\ParticipantsGroups;
use App\Form\ParticipantsGroupsType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/participants/groups")
 */
class ParticipantsGroupsController extends AbstractController
{
    /**
     * @Route("/", name="participants_groups_index", methods={"GET"})
     */
    public function index(): Response
    {
        $participantsGroups = $this->getDoctrine()
            ->getRepository(ParticipantsGroups::class)
            ->findAll();

        return $this->render('participants_groups/index.html.twig', [
            'participants_groups' => $participantsGroups,
        ]);
    }

    /**
     * @Route("/new", name="participants_groups_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $participantsGroup = new ParticipantsGroups();
        $form = $this->createForm(ParticipantsGroupsType::class, $participantsGroup);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($participantsGroup);
            $entityManager->flush();

            return $this->redirectToRoute('participants_groups_index');
        }

        return $this->render('participants_groups/new.html.twig', [
            'participants_group' => $participantsGroup,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idParticipantG}", name="participants_groups_show", methods={"GET"})
     */
    public function show(ParticipantsGroups $participantsGroup): Response
    {
        return $this->render('participants_groups/show.html.twig', [
            'participants_group' => $participantsGroup,
        ]);
    }

    /**
     * @Route("/{idParticipantG}/edit", name="participants_groups_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, ParticipantsGroups $participantsGroup): Response
    {
        $form = $this->createForm(ParticipantsGroupsType::class, $participantsGroup);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('participants_groups_index', [
                'idParticipantG' => $participantsGroup->getIdParticipantG(),
            ]);
        }

        return $this->render('participants_groups/edit.html.twig', [
            'participants_group' => $participantsGroup,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idParticipantG}", name="participants_groups_delete", methods={"DELETE"})
     */
    public function delete(Request $request, ParticipantsGroups $participantsGroup): Response
    {
        if ($this->isCsrfTokenValid('delete'.$participantsGroup->getIdParticipantG(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($participantsGroup);
            $entityManager->flush();
        }

        return $this->redirectToRoute('participants_groups_index');
    }
}
