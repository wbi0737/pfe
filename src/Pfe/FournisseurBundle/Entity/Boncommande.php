<?php

namespace Pfe\FournisseurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pfe\FournisseurBundle\Entity\Boncommande
 */
class Boncommande
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $numero
     */
    private $numero;

    /**
     * @var \DateTime $dateMouvement
     */
    private $dateMouvement;

    /**
     * @var string $objetBc
     */
    private $objetBc;

    /**
     * @var string $designationLivraison
     */
    private $designationLivraison;

    /**
     * @var Pfe\FournisseurBundle\Entity\Offre
     */
    private $offre;


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
     * Set numero
     *
     * @param integer $numero
     * @return Boncommande
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    
        return $this;
    }

    /**
     * Get numero
     *
     * @return integer 
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set dateMouvement
     *
     * @param \DateTime $dateMouvement
     * @return Boncommande
     */
    public function setDateMouvement($dateMouvement)
    {
        $this->dateMouvement = $dateMouvement;
    
        return $this;
    }

    /**
     * Get dateMouvement
     *
     * @return \DateTime 
     */
    public function getDateMouvement()
    {
        return $this->dateMouvement;
    }

    /**
     * Set objetBc
     *
     * @param string $objetBc
     * @return Boncommande
     */
    public function setObjetBc($objetBc)
    {
        $this->objetBc = $objetBc;
    
        return $this;
    }

    /**
     * Get objetBc
     *
     * @return string 
     */
    public function getObjetBc()
    {
        return $this->objetBc;
    }

    /**
     * Set designationLivraison
     *
     * @param string $designationLivraison
     * @return Boncommande
     */
    public function setDesignationLivraison($designationLivraison)
    {
        $this->designationLivraison = $designationLivraison;
    
        return $this;
    }

    /**
     * Get designationLivraison
     *
     * @return string 
     */
    public function getDesignationLivraison()
    {
        return $this->designationLivraison;
    }

    /**
     * Set offre
     *
     * @param Pfe\FournisseurBundle\Entity\Offre $offre
     * @return Boncommande
     */
    public function setOffre(\Pfe\FournisseurBundle\Entity\Offre $offre = null)
    {
        $this->offre = $offre;
    
        return $this;
    }

    /**
     * Get offre
     *
     * @return Pfe\FournisseurBundle\Entity\Offre 
     */
    public function getOffre()
    {
        return $this->offre;
    }
}
