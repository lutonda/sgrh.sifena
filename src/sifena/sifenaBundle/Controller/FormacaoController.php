<?php

namespace sifena\sifenaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use sifena\sifenaBundle\Entity\Formacao;
use sifena\sifenaBundle\Form\FormacaoType;

/**
 * Formacao controller.
 *
 */
class FormacaoController extends Controller
{

    /**
     * Lists all Formacao entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('sifenasifenaBundle:Formacao')->findAll();

        return $this->render('sifenasifenaBundle:Formacao:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Formacao entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Formacao();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('formacao_show', array('id' => $entity->getId())));
        }

        return $this->render('sifenasifenaBundle:Formacao:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Formacao entity.
     *
     * @param Formacao $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Formacao $entity)
    {
        $form = $this->createForm(new FormacaoType(), $entity, array(
            'action' => $this->generateUrl('formacao_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Formacao entity.
     *
     */
    public function newAction()
    {
        $entity = new Formacao();
        $form   = $this->createCreateForm($entity);

        return $this->render('sifenasifenaBundle:Formacao:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Formacao entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('sifenasifenaBundle:Formacao')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Formacao entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('sifenasifenaBundle:Formacao:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Formacao entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('sifenasifenaBundle:Formacao')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Formacao entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('sifenasifenaBundle:Formacao:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Formacao entity.
    *
    * @param Formacao $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Formacao $entity)
    {
        $form = $this->createForm(new FormacaoType(), $entity, array(
            'action' => $this->generateUrl('formacao_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Formacao entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('sifenasifenaBundle:Formacao')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Formacao entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('formacao_edit', array('id' => $id)));
        }

        return $this->render('sifenasifenaBundle:Formacao:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Formacao entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('sifenasifenaBundle:Formacao')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Formacao entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('formacao'));
    }

    /**
     * Creates a form to delete a Formacao entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('formacao_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
