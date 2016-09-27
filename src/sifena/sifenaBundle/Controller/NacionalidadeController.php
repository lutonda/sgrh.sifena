<?php

namespace sifena\sifenaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use sifena\sifenaBundle\Entity\Nacionalidade;
use sifena\sifenaBundle\Form\NacionalidadeType;

/**
 * Nacionalidade controller.
 *
 */
class NacionalidadeController extends Controller
{

    /**
     * Lists all Nacionalidade entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('sifenasifenaBundle:Nacionalidade')->findAll();

        return $this->render('sifenasifenaBundle:Nacionalidade:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Nacionalidade entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Nacionalidade();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('nacionalidade_show', array('id' => $entity->getId())));
        }

        return $this->render('sifenasifenaBundle:Nacionalidade:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Nacionalidade entity.
     *
     * @param Nacionalidade $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Nacionalidade $entity)
    {
        $form = $this->createForm(new NacionalidadeType(), $entity, array(
            'action' => $this->generateUrl('nacionalidade_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Nacionalidade entity.
     *
     */
    public function newAction()
    {
        $entity = new Nacionalidade();
        $form   = $this->createCreateForm($entity);

        return $this->render('sifenasifenaBundle:Nacionalidade:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Nacionalidade entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('sifenasifenaBundle:Nacionalidade')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Nacionalidade entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('sifenasifenaBundle:Nacionalidade:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Nacionalidade entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('sifenasifenaBundle:Nacionalidade')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Nacionalidade entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('sifenasifenaBundle:Nacionalidade:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Nacionalidade entity.
    *
    * @param Nacionalidade $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Nacionalidade $entity)
    {
        $form = $this->createForm(new NacionalidadeType(), $entity, array(
            'action' => $this->generateUrl('nacionalidade_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Nacionalidade entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('sifenasifenaBundle:Nacionalidade')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Nacionalidade entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('nacionalidade_edit', array('id' => $id)));
        }

        return $this->render('sifenasifenaBundle:Nacionalidade:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Nacionalidade entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('sifenasifenaBundle:Nacionalidade')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Nacionalidade entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('nacionalidade'));
    }

    /**
     * Creates a form to delete a Nacionalidade entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('nacionalidade_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
