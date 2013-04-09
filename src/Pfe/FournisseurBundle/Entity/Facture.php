<?php

namespace Pfe\FournisseurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pfe\FournisseurBundle\Entity\Facture
 */
class Facture
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
     * @var \DateTime $dateFacture
     */
    private $dateFacture;

    /**
     * @var integer $codeFournisseur
     */
    private $codeFournisseur;

    /**
     * @var string $objetFacture
     */
    private $objetFacture;

    /**
     * @var integer $numBc
     */
    private $numBc;

    /**
     * @var string $tht
     */
    private $tht;

    /**
     * @var string $trem
     */
    private $trem;

    /**
     * @var string $ttva
     */
    private $ttva;

    /**
     * @var string $tttc
     */
    private $tttc;

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
     * @return Facture
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
     * Set dateFacture
     *
     * @param \DateTime $dateFacture
     * @return Facture
     */
    public function setDateFacture($dateFacture)
    {
        $this->dateFacture = $dateFacture;
    
        return $this;
    }

    /**
     * Get dateFacture
     *
     * @return \DateTime 
     */
    public function getDateFacture()
    {
        return $this->dateFacture;
    }

    /**
     * Set codeFournisseur
     *
     * @param integer $codeFournisseur
     * @return Facture
     */
    public function setCodeFournisseur($codeFournisseur)
    {
        $this->codeFournisseur = $codeFournisseur;
    
        return $this;
    }

    /**
     * Get codeFournisseur
     *
     * @return integer 
     */
    public function getCodeFournisseur()
    {
        return $this->codeFournisseur;
    }

    /**
     * Set objetFacture
     *
     * @param string $objetFacture
     * @return Facture
     */
    public function setObjetFacture($objetFacture)
    {
        $this->objetFacture = $objetFacture;
    
        return $this;
    }

    /**
     * Get objetFacture
     *
     * @return string 
     */
    public function getObjetFacture()
    {
        return $this->objetFacture;
    }

    /**
     * Set numBc
     *
     * @param integer $numBc
     * @return Facture
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
     * Set tht
     *
     * @param string $tht
     * @return Facture
     */
    public function setTht($tht)
    {
        $this->tht = $tht;
    
        return $this;
    }

    /**
     * Get tht
     *
     * @return string 
     */
    public function getTht()
    {
        return $this->tht;
    }

    /**
     * Set trem
     *
     * @param string $trem
     * @return Facture
     */
    public function setTrem($trem)
    {
        $this->trem = $trem;
    
        return $this;
    }

    /**
     * Get trem
     *
     * @return string 
     */
    public function getTrem()
    {
        return $this->trem;
    }

    /**
     * Set ttva
     *
     * @param string $ttva
     * @return Facture
     */
    public function setTtva($ttva)
    {
        $this->ttva = $ttva;
    
        return $this;
    }

    /**
     * Get ttva
     *
     * @return string 
     */
    public function getTtva()
    {
        return $this->ttva;
    }

    /**
     * Set tttc
     *
     * @param string $tttc
     * @return Facture
     */
    public function setTttc($tttc)
    {
        $this->tttc = $tttc;
    
        return $this;
    }

    /**
     * Get tttc
     *
     * @return string 
     */
    public function getTttc()
    {
        return $this->tttc;
    }

    /**
     * Set boncommande
     *
     * @param Pfe\FournisseurBundle\Entity\Boncommande $boncommande
     * @return Facture
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
