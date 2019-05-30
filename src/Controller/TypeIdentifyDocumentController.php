<?php

namespace App\Controller;

use App\Entity\TypeIdentifyDocument;
use App\Form\TypeIdentifyDocumentType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/type/identify/document")
 */
class TypeIdentifyDocumentController extends AbstractController
{
    /**
     * @Route("/", name="type_identify_document_index", methods={"GET"})
     */
    public function index(): Response
    {
        $typeIdentifyDocuments = $this->getDoctrine()
            ->getRepository(TypeIdentifyDocument::class)
            ->findAll();

        return $this->render('type_identify_document/index.html.twig', [
            'type_identify_documents' => $typeIdentifyDocuments,
        ]);
    }

    /**
     * @Route("/new", name="type_identify_document_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $typeIdentifyDocument = new TypeIdentifyDocument();
        $form = $this->createForm(TypeIdentifyDocumentType::class, $typeIdentifyDocument);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($typeIdentifyDocument);
            $entityManager->flush();

            return $this->redirectToRoute('type_identify_document_index');
        }

        return $this->render('type_identify_document/new.html.twig', [
            'type_identify_document' => $typeIdentifyDocument,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idTypeIdentify}", name="type_identify_document_show", methods={"GET"})
     */
    public function show(TypeIdentifyDocument $typeIdentifyDocument): Response
    {
        return $this->render('type_identify_document/show.html.twig', [
            'type_identify_document' => $typeIdentifyDocument,
        ]);
    }

    /**
     * @Route("/{idTypeIdentify}/edit", name="type_identify_document_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, TypeIdentifyDocument $typeIdentifyDocument): Response
    {
        $form = $this->createForm(TypeIdentifyDocumentType::class, $typeIdentifyDocument);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('type_identify_document_index', [
                'idTypeIdentify' => $typeIdentifyDocument->getIdTypeIdentify(),
            ]);
        }

        return $this->render('type_identify_document/edit.html.twig', [
            'type_identify_document' => $typeIdentifyDocument,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idTypeIdentify}", name="type_identify_document_delete", methods={"DELETE"})
     */
    public function delete(Request $request, TypeIdentifyDocument $typeIdentifyDocument): Response
    {
        if ($this->isCsrfTokenValid('delete'.$typeIdentifyDocument->getIdTypeIdentify(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($typeIdentifyDocument);
            $entityManager->flush();
        }

        return $this->redirectToRoute('type_identify_document_index');
    }
}
