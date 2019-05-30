<?php

namespace App\Controller;

use App\Entity\OfferedPrices;
use App\Form\OfferedPricesType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/offered/prices")
 */
class OfferedPricesController extends AbstractController
{
    /**
     * @Route("/", name="offered_prices_index", methods={"GET"})
     */
    public function index(): Response
    {
        $offeredPrices = $this->getDoctrine()
            ->getRepository(OfferedPrices::class)
            ->findAll();

        return $this->render('offered_prices/index.html.twig', [
            'offered_prices' => $offeredPrices,
        ]);
    }

    /**
     * @Route("/new", name="offered_prices_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $offeredPrice = new OfferedPrices();
        $form = $this->createForm(OfferedPricesType::class, $offeredPrice);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($offeredPrice);
            $entityManager->flush();

            return $this->redirectToRoute('offered_prices_index');
        }

        return $this->render('offered_prices/new.html.twig', [
            'offered_price' => $offeredPrice,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idOffersPrice}", name="offered_prices_show", methods={"GET"})
     */
    public function show(OfferedPrices $offeredPrice): Response
    {
        return $this->render('offered_prices/show.html.twig', [
            'offered_price' => $offeredPrice,
        ]);
    }

    /**
     * @Route("/{idOffersPrice}/edit", name="offered_prices_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, OfferedPrices $offeredPrice): Response
    {
        $form = $this->createForm(OfferedPricesType::class, $offeredPrice);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('offered_prices_index', [
                'idOffersPrice' => $offeredPrice->getIdOffersPrice(),
            ]);
        }

        return $this->render('offered_prices/edit.html.twig', [
            'offered_price' => $offeredPrice,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idOffersPrice}", name="offered_prices_delete", methods={"DELETE"})
     */
    public function delete(Request $request, OfferedPrices $offeredPrice): Response
    {
        if ($this->isCsrfTokenValid('delete'.$offeredPrice->getIdOffersPrice(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($offeredPrice);
            $entityManager->flush();
        }

        return $this->redirectToRoute('offered_prices_index');
    }
}
