<?php

namespace AppBundle\Entity;

class Customer extends \Sylius\Component\Core\Model\Customer
{
    /**
     * @var WarrantyPlan
     */
    private $warrantyPlan;

    public function getWarrantyPlan(): ?WarrantyPlan
    {
        return $this->warrantyPlan;
    }

    public function setWarrantyPlan(?WarrantyPlan $warrantyPlan = null): void
    {
        $this->warrantyPlan = $warrantyPlan;
    }
}
