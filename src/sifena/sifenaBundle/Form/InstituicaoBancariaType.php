<?php

namespace sifena\sifenaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class InstituicaoBancariaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nome','text',array('label'=>'Nome','attr'=>array('maxlength'=>100,'minlength'=>3)))
            ->add('descricao','textarea',array('label'=>'Descrição'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'sifena\sifenaBundle\Entity\InstituicaoBancaria'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sifena_sifenabundle_instituicaobancaria';
    }
}
