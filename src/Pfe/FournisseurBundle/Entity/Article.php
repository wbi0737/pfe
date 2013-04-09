<?php

namespace Pfe\FournisseurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pfe\FournisseurBundle\Entity\Article
 */
class Article
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $code
     */
    private $code;

    /**
     * @var string $libelle
     */
    private $libelle;

    /**
     * @var integer $prixAchat
     */
    private $prixAchat;

    /**
     * @var integer $tva
     */
    private $tva;


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
     * Set code
     *
     * @param integer $code
     * @return Article
     */
    public function setCode($code)
    {
        $this->code = $code;
    
        return $this;
    }

    /**
     * Get code
     *
     * @return integer 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return Article
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    
        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set prixAchat
     *
     * @param integer $prixAchat
     * @return Article
     */
    public function setPrixAchat($prixAchat)
    {
        $this->prixAchat = $prixAchat;
    
        return $this;
    }

    /**
     * Get prixAchat
     *
     * @return integer 
     */
    public function getPrixAchat()
    {
        return $this->prixAchat;
    }

    /**
     * Set tva
     *
     * @param integer $tva
     * @return Article
     */
    public function setTva($tva)
    {
        $this->tva = $tva;
    
        return $this;
    }

    /**
     * Get tva
     *
     * @return integer 
     */
    public function getTva()
    {
        return $this->tva;
    }
}
