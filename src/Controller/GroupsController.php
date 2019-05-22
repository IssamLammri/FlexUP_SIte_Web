<?php

namespace App\Controller;

use App\Entity\Groups;
use App\Form\GroupsType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/groups")
 */
class GroupsController extends AbstractController
{
    /**
     * @Route("/", name="groups_index", methods={"GET"})
     */
    public function index(): Response
    {
        $groups = $this->getDoctrine()
            ->getRepository(Groups::class)
            ->findAll();

        return $this->render('groups/index.html.twig', [
            'groups' => $groups,
        ]);
    }

    /**
     * @Route("/new", name="groups_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $group = new Groups();
        $form = $this->createForm(GroupsType::class, $group);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($group);
            $entityManager->flush();

            return $this->redirectToRoute('groups_index');
        }

        return $this->render('groups/new.html.twig', [
            'group' => $group,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idGroup}", name="groups_show", methods={"GET"})
     */
    public function show(Groups $group): Response
    {
        return $this->render('groups/show.html.twig', [
            'group' => $group,
        ]);
    }

    /**
     * @Route("/{idGroup}/edit", name="groups_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Groups $group): Response
    {
        $form = $this->createForm(GroupsType::class, $group);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('groups_index', [
                'idGroup' => $group->getIdGroup(),
            ]);
        }

        return $this->render('groups/edit.html.twig', [
            'group' => $group,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idGroup}", name="groups_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Groups $group): Response
    {
        if ($this->isCsrfTokenValid('delete'.$group->getIdGroup(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($group);
            $entityManager->flush();
        }

        return $this->redirectToRoute('groups_index');
    }
}
