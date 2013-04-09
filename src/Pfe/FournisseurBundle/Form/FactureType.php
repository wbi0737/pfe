<?php

namespace Pfe\FournisseurBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FactureType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numero')
            ->add('dateFacture')
            ->add('codeFournisseur')
            ->add('objetFacture')
            ->add('numBc')
            ->add('tht')
            ->add('trem')
            ->add('ttva')
            ->add('tttc')
            ->add('boncommande')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Pfe\FournisseurBundle\Entity\Facture'
        ));
    }

    public function getName()
    {
        return 'pfe_fournisseurbundle_facturetype';
    }
}
