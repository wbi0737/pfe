<?php

namespace Pfe\FournisseurBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ReglementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numReg')
            ->add('dateReg')
            ->add('factureBoncommandeId')
            ->add('facture')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Pfe\FournisseurBundle\Entity\Reglement'
        ));
    }

    public function getName()
    {
        return 'pfe_fournisseurbundle_reglementtype';
    }
}
