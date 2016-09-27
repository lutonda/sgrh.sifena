<?php

namespace sifena\sifenaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use sifena\sifenaBundle\Entity\Candidato;
use sifena\sifenaBundle\Form\CandidatoType;

/**
 * Candidato controller.
 *
 */
class CandidatoController extends Controller
{

    /**
     * Lists all Candidato entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('sifenasifenaBundle:Candidato')->findAll();

        return $this->render('sifenasifenaBundle:Candidato:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Candidato entity.
     *
     */
    public function createAction(Request $request)
    {
        $candidato = new Candidato();
        $form = $this->createCreateForm($candidato);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            
            $pessoa = new \sifena\sifenaBundle\Entity\Pessoa();
            $documento = new \sifena\sifenaBundle\Entity\Documento();
            $formacao = new \sifena\sifenaBundle\Entity\Formacao();
            
            $vector[] = $form->getData(); 
            
            $formacao->setCurso($vector[0]->getFormacao()->getCurso());
            $formacao->setGrauAcademico($vector[0]->getFormacao()->getGrauAcademico());
            $formacao->setDescricao($vector[0]->getFormacao()->getDescricao());
            
            $em->persist($formacao);
            $em->flush();
            
            $documento->setNdi($vector[0]->getPessoa()->getDocumento()->getNdi());
            $documento->setTipoDocumento($vector[0]->getPessoa()->getDocumento()->getTipoDocumento());
            $em->persist($documento);
            $em->flush();
            
            $pessoa->setNome($vector[0]->getPessoa()->getNome());
            $pessoa->setDdn($vector[0]->getPessoa()->getDdn());
            $pessoa->setGenero($vector[0]->getPessoa()->getGenero());
            $pessoa->setNacionalidade($vector[0]->getPessoa()->getNacionalidade());
            $pessoa->setDocumento($documento);
            $pessoa->setEstadoCivil($vector[0]->getPessoa()->getEstadoCivil());
            
            $em->persist($pessoa);
            $em->flush();
            
            $candidato->setPessoa($pessoa);
            $candidato->setObservacao($vector[0]->getObservacao());
            $candidato->setFormacao($formacao);
            $candidato->setDataCandidatura(new \DateTime("now"));
            $em->persist($candidato);
            $em->flush();

            return $this->redirect($this->generateUrl('candidato_show', array('id' => $candidato->getPessoa()->getId())));
        }

        return $this->render('sifenasifenaBundle:Candidato:new.html.twig', array(
            'entity' => $candidato,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Candidato entity.
     *
     * @param Candidato $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Candidato $entity)
    {
        $form = $this->createForm(new CandidatoType(), $entity, array(
            'action' => $this->generateUrl('candidato_create'),
            'method' => 'POST',
        ));

        //$form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Candidato entity.
     *
     */
    public function newAction()
    {
        $entity = new Candidato();
        $form   = $this->createCreateForm($entity);

        return $this->render('sifenasifenaBundle:Candidato:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Candidato entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('sifenasifenaBundle:Candidato')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Candidato entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('sifenasifenaBundle:Candidato:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Candidato entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('sifenasifenaBundle:Candidato')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Candidato entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('sifenasifenaBundle:Candidato:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Candidato entity.
    *
    * @param Candidato $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Candidato $entity)
    {
        $form = $this->createForm(new CandidatoType(), $entity, array(
            'action' => $this->generateUrl('candidato_update', array('id' => $entity->getPessoa()->getId())),
            'method' => 'PUT',
        ));

        //$form->add('submit', 'submit', array('label' => 'Actualizar'));

        return $form;
    }
    /**
     * Edits an existing Candidato entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('sifenasifenaBundle:Candidato')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Candidato entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('candidato_show', array('id' => $id)));
        }

        return $this->render('sifenasifenaBundle:Candidato:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Candidato entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('sifenasifenaBundle:Candidato')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Candidato entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('candidato'));
    }

    /**
     * Creates a form to delete a Candidato entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('candidato_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
