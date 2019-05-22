<?php

namespace App\Controller;

use App\Entity\Enquiry;
use App\Form\EnquiryType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/enquiry")
 */
class EnquiryController extends AbstractController
{
    /**
     * @Route("/", name="enquiry_index", methods={"GET"})
     */
    public function index(): Response
    {
        $enquiries = $this->getDoctrine()
            ->getRepository(Enquiry::class)
            ->findAll();

        return $this->render('enquiry/index.html.twig', [
            'enquiries' => $enquiries,
        ]);
    }

    /**
     * @Route("/new", name="enquiry_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $enquiry = new Enquiry();
        $form = $this->createForm(EnquiryType::class, $enquiry);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($enquiry);
            $entityManager->flush();

            return $this->redirectToRoute('enquiry_index');
        }

        return $this->render('enquiry/new.html.twig', [
            'enquiry' => $enquiry,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idOrder}", name="enquiry_show", methods={"GET"})
     */
    public function show(Enquiry $enquiry): Response
    {
        return $this->render('enquiry/show.html.twig', [
            'enquiry' => $enquiry,
        ]);
    }

    /**
     * @Route("/{idOrder}/edit", name="enquiry_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Enquiry $enquiry): Response
    {
        $form = $this->createForm(EnquiryType::class, $enquiry);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('enquiry_index', [
                'idOrder' => $enquiry->getIdOrder(),
            ]);
        }

        return $this->render('enquiry/edit.html.twig', [
            'enquiry' => $enquiry,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idOrder}", name="enquiry_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Enquiry $enquiry): Response
    {
        if ($this->isCsrfTokenValid('delete'.$enquiry->getIdOrder(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($enquiry);
            $entityManager->flush();
        }

        return $this->redirectToRoute('enquiry_index');
    }
}
