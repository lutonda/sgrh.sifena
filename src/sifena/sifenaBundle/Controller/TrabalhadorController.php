<?php

namespace sifena\sifenaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use sifena\sifenaBundle\Entity\Trabalhador;
use sifena\sifenaBundle\Form\TrabalhadorType;

/**
 * Trabalhador controller.
 *
 */
class TrabalhadorController extends Controller {

    /**
     * Lists all Trabalhador entities.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('sifenasifenaBundle:Trabalhador')->findAll();

        return $this->render('sifenasifenaBundle:Trabalhador:index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    public function definirRemuneracaoAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('sifenasifenaBundle:Trabalhador')->findAll();

        return $this->render('sifenasifenaBundle:Trabalhador:definirRemuneracao.html.twig', array(
                    'entities' => $entities,
        ));
    }

    /**
     * Creates a new Trabalhador entity.
     *
     */
    public function createAction(Request $request) {
        $trabalhador = new Trabalhador();
        $form = $this->createCreateForm($trabalhador);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $vector[] = $form->getData();

            $pessoa = $em->getRepository('sifenasifenaBundle:Pessoa')->find($form->getData()->getPessoa()->getId());
            $trabalhador->setPessoa($pessoa);
            $em->persist($trabalhador);
            $em->flush();

            return $this->redirect($this->generateUrl('trabalhador_show', array('id' => $trabalhador->getPessoa()->getId())));
        }

        return $this->render('sifenasifenaBundle:Trabalhador:new.html.twig', array(
                    'entity' => $trabalhador,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Trabalhador entity.
     *
     * @param Trabalhador $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Trabalhador $entity) {
        $form = $this->createForm(new TrabalhadorType(), $entity, array(
            'action' => $this->generateUrl('trabalhador_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Trabalhador entity.
     *
     */
    public function newAction() {
        $entity = new Trabalhador();
        $form = $this->createCreateForm($entity);

        return $this->render('sifenasifenaBundle:Trabalhador:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Trabalhador entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('sifenasifenaBundle:Trabalhador')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Trabalhador entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('sifenasifenaBundle:Trabalhador:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Trabalhador entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('sifenasifenaBundle:Trabalhador')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Trabalhador entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('sifenasifenaBundle:Trabalhador:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    public function editarAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('sifenasifenaBundle:Trabalhador')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Trabalhador entity.');
        }

        $editForm = $this->createEditarForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('sifenasifenaBundle:Trabalhador:editar.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Trabalhador entity.
     *
     * @param Trabalhador $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Trabalhador $entity) {
        $form = $this->createForm(new TrabalhadorType(), $entity, array(
            'action' => $this->generateUrl('trabalhador_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Actualizar'));

        return $form;
    }
    
    
        /**
     * Creates a form to edit a Trabalhador entity.
     *
     * @param Trabalhador $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditarForm(Trabalhador $entity) {
        $form = $this->createForm(new TrabalhadorType(), $entity, array(
            'action' => $this->generateUrl('trabalhador_update', array('id' => $entity->getPessoa()->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Actualizar'));

        return $form;
    }
    
    /**
     * Edits an existing Trabalhador entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('sifenasifenaBundle:Trabalhador')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Trabalhador entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('trabalhador_edit', array('id' => $id)));
        }

        return $this->render('sifenasifenaBundle:Trabalhador:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Trabalhador entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('sifenasifenaBundle:Trabalhador')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Trabalhador entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('trabalhador'));
    }

    /**
     * Creates a form to delete a Trabalhador entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('trabalhador_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Delete'))
                        ->getForm()
        ;
    }

}
