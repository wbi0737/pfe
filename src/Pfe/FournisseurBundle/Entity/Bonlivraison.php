<?php

namespace Pfe\FournisseurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pfe\FournisseurBundle\Entity\Bonlivraison
 */
class Bonlivraison
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
     * @var \DateTime $dateLiv
     */
    private $dateLiv;

    /**
     * @var integer $numBc
     */
    private $numBc;

    /**
     * @var string $objet
     */
    private $objet;

    /**
     * @var Pfe\FournisseurBundle\Entity\Boncommande
     */
    private $boncommande;


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
     * @return Bonlivraison
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
     * Set dateLiv
     *
     * @param \DateTime $dateLiv
     * @return Bonlivraison
     */
    public function setDateLiv($dateLiv)
    {
        $this->dateLiv = $dateLiv;
    
        return $this;
    }

    /**
     * Get dateLiv
     *
     * @return \DateTime 
     */
    public function getDateLiv()
    {
        return $this->dateLiv;
    }

    /**
     * Set numBc
     *
     * @param integer $numBc
     * @return Bonlivraison
     */
    public function setNumBc($numBc)
    {
        $this->numBc = $numBc;
    
        return $this;
    }

    /**
     * Get numBc
     *
     * @return integer 
     */
    public function getNumBc()
    {
        return $this->numBc;
    }

    /**
     * Set objet
     *
     * @param string $objet
     * @return Bonlivraison
     */
    public function setObjet($objet)
    {
        $this->objet = $objet;
    
        return $this;
    }

    /**
     * Get objet
     *
     * @return string 
     */
    public function getObjet()
    {
        return $this->objet;
    }

    /**
     * Set boncommande
     *
     * @param Pfe\FournisseurBundle\Entity\Boncommande $boncommande
     * @return Bonlivraison
     */
    public function setBoncommande(\Pfe\FournisseurBundle\Entity\Boncommande $boncommande = null)
    {
        $this->boncommande = $boncommande;
    
        return $this;
    }

    /**
     * Get boncommande
     *
     * @return Pfe\FournisseurBundle\Entity\Boncommande 
     */
    public function getBoncommande()
    {
        return $this->boncommande;
    }
}
