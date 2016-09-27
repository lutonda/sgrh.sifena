<?php

namespace sifena\sifenaBundle\Form;

use Symfony\Component\Form\AbstractType;
use sifena\sifenaBundle\Form\PessoaType;
use sifena\sifenaBundle\Form\FormacaoType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CandidatoType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                //->add('dataCandidatura')
                ->add('pessoa', new PessoaType())
                ->add('anexo', 'text', array('label' => 'Anexo'))
                ->add('observacao', 'textarea', array('label' => 'Observação'))
                ->add('formacao', new FormacaoType())
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'sifena\sifenaBundle\Entity\Candidato'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'sifena_sifenabundle_candidato';
    }

}
