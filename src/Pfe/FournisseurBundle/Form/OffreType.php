<?php

namespace Pfe\FournisseurBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class OffreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('createdAt')
            ->add('expiredAt')
            ->add('designation')
            ->add('userId')
            ->add('cahierCharge')
            ->add('code')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Pfe\FournisseurBundle\Entity\Offre'
        ));
    }

    public function getName()
    {
        return 'pfe_fournisseurbundle_offretype';
    }
}
