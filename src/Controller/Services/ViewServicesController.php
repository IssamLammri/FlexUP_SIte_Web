<?php

namespace App\Controller\Services;

use App\Entity\Addresses;
use App\Form\AddressesType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/ViewServices")
 */
class ViewServicesController extends AbstractController
{
    /**
     * @Route("/", name="ViewServices_index", methods={"GET"})
     */
    public function index(): Response
    {
        $addresses = $this->getDoctrine()
            ->getRepository(Addresses::class)
            ->findAll();

        return $this->render('addresses/index.html.twig', [
            'addresses' => $addresses,
        ]);
    }

    /**
     * @Route("/new", name="addresses_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $address = new Addresses();
        $form = $this->createForm(AddressesType::class, $address);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($address);
            $entityManager->flush();

            return $this->redirectToRoute('addresses_index');
        }

        return $this->render('addresses/new.html.twig', [
            'address' => $address,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idAddress}", name="addresses_show", methods={"GET"})
     */
    public function show(Addresses $address): Response
    {
        return $this->render('addresses/show.html.twig', [
            'address' => $address,
        ]);
    }

    /**
     * @Route("/{idAddress}/edit", name="addresses_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Addresses $address): Response
    {
        $form = $this->createForm(AddressesType::class, $address);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('addresses_index', [
                'idAddress' => $address->getIdAddress(),
            ]);
        }

        return $this->render('addresses/edit.html.twig', [
            'address' => $address,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idAddress}", name="addresses_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Addresses $address): Response
    {
        if ($this->isCsrfTokenValid('delete'.$address->getIdAddress(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($address);
            $entityManager->flush();
        }

        return $this->redirectToRoute('addresses_index');
    }
}
