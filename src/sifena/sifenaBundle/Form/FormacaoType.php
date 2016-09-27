<?php

namespace sifena\sifenaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FormacaoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('curso','text',array('label'=>'Curso','attr'=>array('maxlength'=>100,'minlength'=>4)))
            ->add('descricao','textarea',array('label'=>'Descrição'))
            ->add('grauAcademico', 'choice', array('label' => 'Grau académico','choices'=>
                array('B'=>'Bacharel',
                      'L'=>'Licenciatura',
                      'M'=>'Mestrado')))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'sifena\sifenaBundle\Entity\Formacao'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sifena_sifenabundle_formacao';
    }
}
