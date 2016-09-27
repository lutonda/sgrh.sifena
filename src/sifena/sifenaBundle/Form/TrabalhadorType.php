<?php

namespace sifena\sifenaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TrabalhadorType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                //->add('grauAcademico')
                ->add('pessoa', null, array('label' => 'Candidato','required' => true))
                ->add('numeroInterno', 'text', array('label' => 'Número interno', 'attr' => array('minlength' => 1, 'maxlength' => 50)))
                ->add('numeroConta', 'text', array('label' => 'Número de conta', 'attr' => array('minlength' => 1, 'maxlength' => 50)))
                ->add('iban', 'text', array('label' => 'Iban', 'attr' => array('minlength' => 24, 'maxlength' => 26)))
                ->add('sector', null, array('label' => 'Sector'))
                ->add('profissao', null, array('label' => 'Profissão'))
                ->add('categoria', null, array('label' => 'Categoria'))
                ->add('instituicaoBancaria', null, array('label' => 'Instituição bancaria','required' => true))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'sifena\sifenaBundle\Entity\Trabalhador'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'sifena_sifenabundle_trabalhador';
    }

}
