<?php

namespace Pfe\FournisseurBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Pfe\FournisseurBundle\Entity\Lignecommande;
use Pfe\FournisseurBundle\Form\LignecommandeType;

/**
 * Lignecommande controller.
 *
 * @Route("/lignecommande")
 */
class LignecommandeController extends Controller
{
    /**
     * Lists all Lignecommande entities.
     *
     * @Route("/", name="lignecommande")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('PfeFournisseurBundle:Lignecommande')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Finds and displays a Lignecommande entity.
     *
     * @Route("/{id}/show", name="lignecommande_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PfeFournisseurBundle:Lignecommande')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Lignecommande entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to create a new Lignecommande entity.
     *
     * @Route("/new", name="lignecommande_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Lignecommande();
        $form   = $this->createForm(new LignecommandeType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a new Lignecommande entity.
     *
     * @Route("/create", name="lignecommande_create")
     * @Method("POST")
     * @Template("PfeFournisseurBundle:Lignecommande:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Lignecommande();
        $form = $this->createForm(new LignecommandeType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('lignecommande_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Lignecommande entity.
     *
     * @Route("/{id}/edit", name="lignecommande_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PfeFournisseurBundle:Lignecommande')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Lignecommande entity.');
        }

        $editForm = $this->createForm(new LignecommandeType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Lignecommande entity.
     *
     * @Route("/{id}/update", name="lignecommande_update")
     * @Method("POST")
     * @Template("PfeFournisseurBundle:Lignecommande:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PfeFournisseurBundle:Lignecommande')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Lignecommande entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new LignecommandeType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('lignecommande_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Lignecommande entity.
     *
     * @Route("/{id}/delete", name="lignecommande_delete")
     * @Method("POST")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('PfeFournisseurBundle:Lignecommande')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Lignecommande entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('lignecommande'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
