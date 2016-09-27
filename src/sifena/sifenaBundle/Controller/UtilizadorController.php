<?php

namespace sifena\sifenaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use sifena\sifenaBundle\Entity\Utilizador;
use sifena\sifenaBundle\Form\UtilizadorType;

/**
 * Utilizador controller.
 *
 */
class UtilizadorController extends Controller
{

    /**
     * Lists all Utilizador entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('sifenasifenaBundle:Utilizador')->findAll();

        return $this->render('sifenasifenaBundle:Utilizador:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Utilizador entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Utilizador();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity->setPassword(sha1($form->getData()->getPassword()));
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('utilizador_show', array('id' => $entity->getId())));
        }

        return $this->render('sifenasifenaBundle:Utilizador:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Utilizador entity.
     *
     * @param Utilizador $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Utilizador $entity)
    {
        $form = $this->createForm(new UtilizadorType(), $entity, array(
            'action' => $this->generateUrl('utilizador_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Registar'));
        $form->add('reset', 'reset', array('label' => 'Limpar'));

        return $form;
    }

    /**
     * Displays a form to create a new Utilizador entity.
     *
     */
    public function newAction()
    {
        $entity = new Utilizador();
        $form   = $this->createCreateForm($entity);

        return $this->render('sifenasifenaBundle:Utilizador:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Utilizador entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('sifenasifenaBundle:Utilizador')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Utilizador entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('sifenasifenaBundle:Utilizador:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Utilizador entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('sifenasifenaBundle:Utilizador')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Utilizador entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('sifenasifenaBundle:Utilizador:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Utilizador entity.
    *
    * @param Utilizador $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Utilizador $entity)
    {
        $form = $this->createForm(new UtilizadorType(), $entity, array(
            'action' => $this->generateUrl('utilizador_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        //$form->add('submit', 'submit', array('label' => 'Actualizar'));

        return $form;
    }
    /**
     * Edits an existing Utilizador entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('sifenasifenaBundle:Utilizador')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Utilizador entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('utilizador_edit', array('id' => $id)));
        }

        return $this->render('sifenasifenaBundle:Utilizador:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Utilizador entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('sifenasifenaBundle:Utilizador')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Utilizador entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('utilizador'));
    }

    /**
     * Creates a form to delete a Utilizador entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('utilizador_delete', array('id' => $id)))
            ->setMethod('DELETE')
            //->add('submit', 'submit', array('label' => 'Eliminar'))
            ->getForm()
        ;
    }
}
