<?php

namespace Pfe\FournisseurBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BoncommandeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numero')
            ->add('dateMouvement')
            ->add('objetBc')
            ->add('designationLivraison')
            ->add('offre')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Pfe\FournisseurBundle\Entity\Boncommande'
        ));
    }

    public function getName()
    {
        return 'pfe_fournisseurbundle_boncommandetype';
    }
}
