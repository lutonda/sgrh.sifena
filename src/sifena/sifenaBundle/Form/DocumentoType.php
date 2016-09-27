<?php

namespace sifena\sifenaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DocumentoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('tipoDocumento', 'choice', array('label' => 'Tipo do documento','choices'=>array('P'=>'Passaporte','B'=>'Bilhete')))
            ->add('ndi', 'text', array('label' => 'Nº. documento','attr'=>array('maxlength'=>16,'minlength'=>6)))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'sifena\sifenaBundle\Entity\Documento'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sifena_sifenabundle_documento';
    }
}
