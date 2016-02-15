<?php

namespace PornicCSBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use PornicCSBundle\Entity\Annonces;
use PornicCSBundle\Form\AnnoncesType;

/**
 * Annonces controller.
 *
 * @Route("/annonces")
 */
class AnnoncesController extends Controller
{
    /**
     * Lists all Annonces entities.
     *
     * @Route("/", name="annonces_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $annonces = $em->getRepository('PornicCSBundle:Annonces')->findAll();

        return $this->render('annonces/index.html.twig', array(
            'annonces' => $annonces,
        ));
    }

    /**
     * Creates a new Annonces entity.
     *
     * @Route("/new", name="annonces_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $annonce = new Annonces();
        $form = $this->createForm('PornicCSBundle\Form\AnnoncesType', $annonce);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($annonce);
            $em->flush();

            return $this->redirectToRoute('annonces_show', array('id' => $annonce->getId()));
        }

        return $this->render('annonces/new.html.twig', array(
            'annonce' => $annonce,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Annonces entity.
     *
     * @Route("/{id}", name="annonces_show")
     * @Method("GET")
     */
    public function showAction(Annonces $annonce)
    {
        $deleteForm = $this->createDeleteForm($annonce);

        return $this->render('annonces/show.html.twig', array(
            'annonce' => $annonce,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Annonces entity.
     *
     * @Route("/{id}/edit", name="annonces_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Annonces $annonce)
    {
        $deleteForm = $this->createDeleteForm($annonce);
        $editForm = $this->createForm('PornicCSBundle\Form\AnnoncesType', $annonce);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($annonce);
            $em->flush();

            return $this->redirectToRoute('annonces_edit', array('id' => $annonce->getId()));
        }

        return $this->render('annonces/edit.html.twig', array(
            'annonce' => $annonce,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Annonces entity.
     *
     * @Route("/{id}", name="annonces_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Annonces $annonce)
    {
        $form = $this->createDeleteForm($annonce);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($annonce);
            $em->flush();
        }

        return $this->redirectToRoute('annonces_index');
    }

    /**
     * Creates a form to delete a Annonces entity.
     *
     * @param Annonces $annonce The Annonces entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Annonces $annonce)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('annonces_delete', array('id' => $annonce->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
