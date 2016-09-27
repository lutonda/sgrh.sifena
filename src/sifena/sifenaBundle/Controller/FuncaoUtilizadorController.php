<?php

namespace sifena\sifenaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use sifena\sifenaBundle\Entity\FuncaoUtilizador;
use sifena\sifenaBundle\Form\FuncaoUtilizadorType;

/**
 * FuncaoUtilizador controller.
 *
 */
class FuncaoUtilizadorController extends Controller
{

    /**
     * Lists all FuncaoUtilizador entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('sifenasifenaBundle:FuncaoUtilizador')->findAll();

        return $this->render('sifenasifenaBundle:FuncaoUtilizador:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new FuncaoUtilizador entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new FuncaoUtilizador();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('funcaoutilizador_show', array('id' => $entity->getId())));
        }

        return $this->render('sifenasifenaBundle:FuncaoUtilizador:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a FuncaoUtilizador entity.
     *
     * @param FuncaoUtilizador $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(FuncaoUtilizador $entity)
    {
        $form = $this->createForm(new FuncaoUtilizadorType(), $entity, array(
            'action' => $this->generateUrl('funcaoutilizador_create'),
            'method' => 'POST',
        ));
        
        $form->add('submit', 'submit', array('label' => 'Registar'));
        $form->add('reset', 'reset', array('label' => 'Limpar'));
        return $form;
    }

    /**
     * Displays a form to create a new FuncaoUtilizador entity.
     *
     */
    public function newAction()
    {
        $entity = new FuncaoUtilizador();
        $form   = $this->createCreateForm($entity);

        return $this->render('sifenasifenaBundle:FuncaoUtilizador:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a FuncaoUtilizador entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('sifenasifenaBundle:FuncaoUtilizador')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find FuncaoUtilizador entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('sifenasifenaBundle:FuncaoUtilizador:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing FuncaoUtilizador entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('sifenasifenaBundle:FuncaoUtilizador')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find FuncaoUtilizador entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('sifenasifenaBundle:FuncaoUtilizador:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a FuncaoUtilizador entity.
    *
    * @param FuncaoUtilizador $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(FuncaoUtilizador $entity)
    {
        $form = $this->createForm(new FuncaoUtilizadorType(), $entity, array(
            'action' => $this->generateUrl('funcaoutilizador_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing FuncaoUtilizador entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('sifenasifenaBundle:FuncaoUtilizador')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find FuncaoUtilizador entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('funcaoutilizador_edit', array('id' => $id)));
        }

        return $this->render('sifenasifenaBundle:FuncaoUtilizador:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a FuncaoUtilizador entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('sifenasifenaBundle:FuncaoUtilizador')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find FuncaoUtilizador entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('funcaoutilizador'));
    }

    /**
     * Creates a form to delete a FuncaoUtilizador entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('funcaoutilizador_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
