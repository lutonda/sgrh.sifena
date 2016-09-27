<?php

namespace sifena\sifenaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use sifena\sifenaBundle\Entity\InstituicaoBancaria;
use sifena\sifenaBundle\Form\InstituicaoBancariaType;

/**
 * InstituicaoBancaria controller.
 *
 */
class InstituicaoBancariaController extends Controller
{

    /**
     * Lists all InstituicaoBancaria entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('sifenasifenaBundle:InstituicaoBancaria')->findAll();

        return $this->render('sifenasifenaBundle:InstituicaoBancaria:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new InstituicaoBancaria entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new InstituicaoBancaria();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('instituicaobancaria_show', array('id' => $entity->getId())));
        }

        return $this->render('sifenasifenaBundle:InstituicaoBancaria:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a InstituicaoBancaria entity.
     *
     * @param InstituicaoBancaria $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(InstituicaoBancaria $entity)
    {
        $form = $this->createForm(new InstituicaoBancariaType(), $entity, array(
            'action' => $this->generateUrl('instituicaobancaria_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new InstituicaoBancaria entity.
     *
     */
    public function newAction()
    {
        $entity = new InstituicaoBancaria();
        $form   = $this->createCreateForm($entity);

        return $this->render('sifenasifenaBundle:InstituicaoBancaria:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a InstituicaoBancaria entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('sifenasifenaBundle:InstituicaoBancaria')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find InstituicaoBancaria entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('sifenasifenaBundle:InstituicaoBancaria:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing InstituicaoBancaria entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('sifenasifenaBundle:InstituicaoBancaria')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find InstituicaoBancaria entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('sifenasifenaBundle:InstituicaoBancaria:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a InstituicaoBancaria entity.
    *
    * @param InstituicaoBancaria $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(InstituicaoBancaria $entity)
    {
        $form = $this->createForm(new InstituicaoBancariaType(), $entity, array(
            'action' => $this->generateUrl('instituicaobancaria_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing InstituicaoBancaria entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('sifenasifenaBundle:InstituicaoBancaria')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find InstituicaoBancaria entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('instituicaobancaria_edit', array('id' => $id)));
        }

        return $this->render('sifenasifenaBundle:InstituicaoBancaria:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a InstituicaoBancaria entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('sifenasifenaBundle:InstituicaoBancaria')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find InstituicaoBancaria entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('instituicaobancaria'));
    }

    /**
     * Creates a form to delete a InstituicaoBancaria entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('instituicaobancaria_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
