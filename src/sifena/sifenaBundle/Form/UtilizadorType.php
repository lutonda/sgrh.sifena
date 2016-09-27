<?php

namespace sifena\sifenaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UtilizadorType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', 'text', array('label' => 'Nome de Utilizador', 'attr' => array('minlength' => 8, 'maxlength' => 24)))
            ->add('password', 'password', array('label' => 'Palavra-passe', 'attr' => array('minlength' => 8, 'maxlength' => 24)))
            ->add('email', 'text', array('label' => 'E-mail', 'attr' => array('minlength' => 8, 'maxlength' => 50)))
            ->add('isActive','choice',array('label'=>'Estado','choices'=>array('1'=>'Activo','0'=>'Desactivado')))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'sifena\sifenaBundle\Entity\Utilizador'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sifena_sifenabundle_utilizador';
    }
}
