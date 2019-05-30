<?php

namespace App\Controller;

use App\Entity\GroupZone;
use App\Form\GroupZoneType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/group/zone")
 */
class GroupZoneController extends AbstractController
{
    /**
     * @Route("/", name="group_zone_index", methods={"GET"})
     */
    public function index(): Response
    {
        $groupZones = $this->getDoctrine()
            ->getRepository(GroupZone::class)
            ->findAll();

        return $this->render('group_zone/index.html.twig', [
            'group_zones' => $groupZones,
        ]);
    }

    /**
     * @Route("/new", name="group_zone_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $groupZone = new GroupZone();
        $form = $this->createForm(GroupZoneType::class, $groupZone);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($groupZone);
            $entityManager->flush();

            return $this->redirectToRoute('group_zone_index');
        }

        return $this->render('group_zone/new.html.twig', [
            'group_zone' => $groupZone,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idGroupZone}", name="group_zone_show", methods={"GET"})
     */
    public function show(GroupZone $groupZone): Response
    {
        return $this->render('group_zone/show.html.twig', [
            'group_zone' => $groupZone,
        ]);
    }

    /**
     * @Route("/{idGroupZone}/edit", name="group_zone_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, GroupZone $groupZone): Response
    {
        $form = $this->createForm(GroupZoneType::class, $groupZone);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('group_zone_index', [
                'idGroupZone' => $groupZone->getIdGroupZone(),
            ]);
        }

        return $this->render('group_zone/edit.html.twig', [
            'group_zone' => $groupZone,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idGroupZone}", name="group_zone_delete", methods={"DELETE"})
     */
    public function delete(Request $request, GroupZone $groupZone): Response
    {
        if ($this->isCsrfTokenValid('delete'.$groupZone->getIdGroupZone(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($groupZone);
            $entityManager->flush();
        }

        return $this->redirectToRoute('group_zone_index');
    }
}
