<?php

namespace Pfe\FournisseurBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Pfe\FournisseurBundle\Entity\Boncommande;
use Pfe\FournisseurBundle\Form\BoncommandeType;

/**
 * Boncommande controller.
 *
 * @Route("/boncommande")
 */
class BoncommandeController extends Controller
{
    /**
     * Lists all Boncommande entities.
     *
     * @Route("/", name="boncommande")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('PfeFournisseurBundle:Boncommande')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Finds and displays a Boncommande entity.
     *
     * @Route("/{id}/show", name="boncommande_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PfeFournisseurBundle:Boncommande')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Boncommande entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to create a new Boncommande entity.
     *
     * @Route("/new", name="boncommande_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Boncommande();
        $form   = $this->createForm(new BoncommandeType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a new Boncommande entity.
     *
     * @Route("/create", name="boncommande_create")
     * @Method("POST")
     * @Template("PfeFournisseurBundle:Boncommande:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Boncommande();
        $form = $this->createForm(new BoncommandeType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('boncommande_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Boncommande entity.
     *
     * @Route("/{id}/edit", name="boncommande_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PfeFournisseurBundle:Boncommande')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Boncommande entity.');
        }

        $editForm = $this->createForm(new BoncommandeType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Boncommande entity.
     *
     * @Route("/{id}/update", name="boncommande_update")
     * @Method("POST")
     * @Template("PfeFournisseurBundle:Boncommande:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PfeFournisseurBundle:Boncommande')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Boncommande entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new BoncommandeType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('boncommande_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Boncommande entity.
     *
     * @Route("/{id}/delete", name="boncommande_delete")
     * @Method("POST")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('PfeFournisseurBundle:Boncommande')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Boncommande entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('boncommande'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
