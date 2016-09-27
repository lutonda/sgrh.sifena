<?php

namespace sifena\sifenaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use sifena\sifenaBundle\Entity\Gabinete;
use sifena\sifenaBundle\Form\GabineteType;

/**
 * Gabinete controller.
 *
 */
class GabineteController extends Controller
{

    /**
     * Lists all Gabinete entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('sifenasifenaBundle:Gabinete')->findAll();

        return $this->render('sifenasifenaBundle:Gabinete:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Gabinete entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Gabinete();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('yes_show', array('id' => $entity->getId())));
        }

        return $this->render('sifenasifenaBundle:Gabinete:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Gabinete entity.
     *
     * @param Gabinete $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Gabinete $entity)
    {
        $form = $this->createForm(new GabineteType(), $entity, array(
            'action' => $this->generateUrl('yes_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Gabinete entity.
     *
     */
    public function newAction()
    {
        $entity = new Gabinete();
        $form   = $this->createCreateForm($entity);

        return $this->render('sifenasifenaBundle:Gabinete:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Gabinete entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('sifenasifenaBundle:Gabinete')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Gabinete entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('sifenasifenaBundle:Gabinete:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Gabinete entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('sifenasifenaBundle:Gabinete')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Gabinete entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('sifenasifenaBundle:Gabinete:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Gabinete entity.
    *
    * @param Gabinete $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Gabinete $entity)
    {
        $form = $this->createForm(new GabineteType(), $entity, array(
            'action' => $this->generateUrl('yes_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Gabinete entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('sifenasifenaBundle:Gabinete')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Gabinete entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('yes_edit', array('id' => $id)));
        }

        return $this->render('sifenasifenaBundle:Gabinete:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Gabinete entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('sifenasifenaBundle:Gabinete')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Gabinete entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('yes'));
    }

    /**
     * Creates a form to delete a Gabinete entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('yes_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
