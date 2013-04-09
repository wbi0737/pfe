<?php

namespace Pfe\FournisseurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pfe\FournisseurBundle\Entity\Lignecommande
 */
class Lignecommande
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $quantite
     */
    private $quantite;

    /**
     * @var Pfe\FournisseurBundle\Entity\Boncommande
     */
    private $boncommande;

    /**
     * @var Pfe\FournisseurBundle\Entity\Article
     */
    private $article;


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
     * Set quantite
     *
     * @param integer $quantite
     * @return Lignecommande
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;
    
        return $this;
    }

    /**
     * Get quantite
     *
     * @return integer 
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set boncommande
     *
     * @param Pfe\FournisseurBundle\Entity\Boncommande $boncommande
     * @return Lignecommande
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

    /**
     * Set article
     *
     * @param Pfe\FournisseurBundle\Entity\Article $article
     * @return Lignecommande
     */
    public function setArticle(\Pfe\FournisseurBundle\Entity\Article $article = null)
    {
        $this->article = $article;
    
        return $this;
    }

    /**
     * Get article
     *
     * @return Pfe\FournisseurBundle\Entity\Article 
     */
    public function getArticle()
    {
        return $this->article;
    }
}
