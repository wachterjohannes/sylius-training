<?php

namespace AppBundle\Form;

use AppBundle\Entity\WarrantyPlan;
use Sylius\Bundle\CustomerBundle\Form\Type\CustomerType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\FormBuilderInterface;

class CustomerTypeExtension extends AbstractTypeExtension
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('warrantyPlan', EntityType::class, ['class' => WarrantyPlan::class, 'required' => false]);
    }

    public function getExtendedType()
    {
        return CustomerType::class;
    }
}
