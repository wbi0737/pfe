<?php

namespace Pfe\FournisseurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pfe\FournisseurBundle\Entity\Reglement
 */
class Reglement
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $numReg
     */
    private $numReg;

    /**
     * @var \DateTime $dateReg
     */
    private $dateReg;

    /**
     * @var integer $factureBoncommandeId
     */
    private $factureBoncommandeId;

    /**
     * @var Pfe\FournisseurBundle\Entity\Facture
     */
    private $facture;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set numReg
     *
     * @param integer $numReg
     * @return Reglement
     */
    public function setNumReg($numReg)
    {
        $this->numReg = $numReg;
    
        return $this;
    }

    /**
     * Get numReg
     *
     * @return integer 
     */
    public function getNumReg()
    {
        return $this->numReg;
    }

    /**
     * Set dateReg
     *
     * @param \DateTime $dateReg
     * @return Reglement
     */
    public function setDateReg($dateReg)
    {
        $this->dateReg = $dateReg;
    
        return $this;
    }

    /**
     * Get dateReg
     *
     * @return \DateTime 
     */
    public function getDateReg()
    {
        return $this->dateReg;
    }

    /**
     * Set factureBoncommandeId
     *
     * @param integer $factureBoncommandeId
     * @return Reglement
     */
    public function setFactureBoncommandeId($factureBoncommandeId)
    {
        $this->factureBoncommandeId = $factureBoncommandeId;
    
        return $this;
    }

    /**
     * Get factureBoncommandeId
     *
     * @return integer 
     */
    public function getFactureBoncommandeId()
    {
        return $this->factureBoncommandeId;
    }

    /**
     * Set facture
     *
     * @param Pfe\FournisseurBundle\Entity\Facture $facture
     * @return Reglement
     */
    public function setFacture(\Pfe\FournisseurBundle\Entity\Facture $facture = null)
    {
        $this->facture = $facture;
    
        return $this;
    }

    /**
     * Get facture
     *
     * @return Pfe\FournisseurBundle\Entity\Facture 
     */
    public function getFacture()
    {
        return $this->facture;
    }
}
