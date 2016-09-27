<?php

namespace sifena\sifenaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use sifena\sifenaBundle\Form\DocumentoType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PessoaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nome','text',array('label'=>'Nome','attr'=>array('maxlength'=>100,'minlength'=>3)))
            ->add('genero','choice',array('label'=>'Género','choices'=>array('F'=>'Feminino','M'=>'Masculino')))
            ->add('ddn','date',array('label'=>'Data de Nascimento','widget' => 'single_text','required'=>true))
            ->add('estadoCivil','choice',array('label'=>'Estado Civil','choices'=>array('C'=>'Casado','D'=>'Divorciado','S'=>'Solteiro','V'=>'Viúvo')))
            ->add('nacionalidade',null,array('label'=>'Nacionalidade','required'=>true))
            ->add('documento', new DocumentoType())
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'sifena\sifenaBundle\Entity\Pessoa'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sifena_sifenabundle_pessoa';
    }
}
