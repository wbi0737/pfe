<?php

namespace Pfe\FournisseurBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Pfe\FournisseurBundle\Entity\Bonlivraison;
use Pfe\FournisseurBundle\Form\BonlivraisonType;

/**
 * Bonlivraison controller.
 *
 * @Route("/bonlivraison")
 */
class BonlivraisonController extends Controller
{
    /**
     * Lists all Bonlivraison entities.
     *
     * @Route("/", name="bonlivraison")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('PfeFournisseurBundle:Bonlivraison')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Finds and displays a Bonlivraison entity.
     *
     * @Route("/{id}/show", name="bonlivraison_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PfeFournisseurBundle:Bonlivraison')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Bonlivraison entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to create a new Bonlivraison entity.
     *
     * @Route("/new", name="bonlivraison_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Bonlivraison();
        $form   = $this->createForm(new BonlivraisonType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a new Bonlivraison entity.
     *
     * @Route("/create", name="bonlivraison_create")
     * @Method("POST")
     * @Template("PfeFournisseurBundle:Bonlivraison:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Bonlivraison();
        $form = $this->createForm(new BonlivraisonType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('bonlivraison_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Bonlivraison entity.
     *
     * @Route("/{id}/edit", name="bonlivraison_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PfeFournisseurBundle:Bonlivraison')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Bonlivraison entity.');
        }

        $editForm = $this->createForm(new BonlivraisonType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Bonlivraison entity.
     *
     * @Route("/{id}/update", name="bonlivraison_update")
     * @Method("POST")
     * @Template("PfeFournisseurBundle:Bonlivraison:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PfeFournisseurBundle:Bonlivraison')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Bonlivraison entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new BonlivraisonType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('bonlivraison_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Bonlivraison entity.
     *
     * @Route("/{id}/delete", name="bonlivraison_delete")
     * @Method("POST")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('PfeFournisseurBundle:Bonlivraison')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Bonlivraison entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('bonlivraison'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
