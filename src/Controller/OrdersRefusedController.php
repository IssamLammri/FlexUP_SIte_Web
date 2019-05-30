<?php

namespace App\Controller;

use App\Entity\OrdersRefused;
use App\Form\OrdersRefusedType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/orders/refused")
 */
class OrdersRefusedController extends AbstractController
{
    /**
     * @Route("/", name="orders_refused_index", methods={"GET"})
     */
    public function index(): Response
    {
        $ordersRefuseds = $this->getDoctrine()
            ->getRepository(OrdersRefused::class)
            ->findAll();

        return $this->render('orders_refused/index.html.twig', [
            'orders_refuseds' => $ordersRefuseds,
        ]);
    }

    /**
     * @Route("/new", name="orders_refused_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $ordersRefused = new OrdersRefused();
        $form = $this->createForm(OrdersRefusedType::class, $ordersRefused);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($ordersRefused);
            $entityManager->flush();

            return $this->redirectToRoute('orders_refused_index');
        }

        return $this->render('orders_refused/new.html.twig', [
            'orders_refused' => $ordersRefused,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idOrderR}", name="orders_refused_show", methods={"GET"})
     */
    public function show(OrdersRefused $ordersRefused): Response
    {
        return $this->render('orders_refused/show.html.twig', [
            'orders_refused' => $ordersRefused,
        ]);
    }

    /**
     * @Route("/{idOrderR}/edit", name="orders_refused_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, OrdersRefused $ordersRefused): Response
    {
        $form = $this->createForm(OrdersRefusedType::class, $ordersRefused);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('orders_refused_index', [
                'idOrderR' => $ordersRefused->getIdOrderR(),
            ]);
        }

        return $this->render('orders_refused/edit.html.twig', [
            'orders_refused' => $ordersRefused,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idOrderR}", name="orders_refused_delete", methods={"DELETE"})
     */
    public function delete(Request $request, OrdersRefused $ordersRefused): Response
    {
        if ($this->isCsrfTokenValid('delete'.$ordersRefused->getIdOrderR(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($ordersRefused);
            $entityManager->flush();
        }

        return $this->redirectToRoute('orders_refused_index');
    }
}
