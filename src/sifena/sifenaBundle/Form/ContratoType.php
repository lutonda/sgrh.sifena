<?php

namespace sifena\sifenaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use sifena\sifenaBundle\Repository\TrabalhadorRepository;


class ContratoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                
           /*->add('trabalhador','entity',array('class'=>'sifenasifenaBundle:Trabalhador',
                 'query_builder'=>
               function(TrabalhadorRepository $er){
             return $er->createQueryBuilder('t')
                      ->where('t.estado = :tipo')
                      ->leftJoin('t.pessoa p')
                      ->andWhere('p.id NOT IN (select cn.trabalhador from sifenasifenaBundle:Contrato cn')
                      ->setParameters(array(':tipo'=>'A'));
                 })) */    
            ->add('trabalhador',null,array('label'=>'Trabalhador','required'=>true))
            ->add('tipoContrato',null,array('label'=>'Tipo de Contrato','required'=>true))
            ->add('dataInicio','date',array('label'=>'Data de Início','widget' => 'single_text','required'=>true))
            ->add('dataFim','date',array('label'=>'Data de Fim','widget' => 'single_text','required'=>true))
            //->add('estado')
            ->add('observacao', 'textarea', array('label' => 'Observação'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'sifena\sifenaBundle\Entity\Contrato'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sifena_sifenabundle_contrato';
    }
}
