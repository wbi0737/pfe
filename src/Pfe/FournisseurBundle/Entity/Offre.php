<?php

namespace Pfe\FournisseurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pfe\FournisseurBundle\Entity\Offre
 */
class Offre
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var \DateTime $createdAt
     */
    private $createdAt;

    /**
     * @var \DateTime $expiredAt
     */
    private $expiredAt;

    /**
     * @var string $designation
     */
    private $designation;

    /**
     * @var integer $userId
     */
    private $userId;

    /**
     * @var string $cahierCharge
     */
    private $cahierCharge;

    /**
     * @var integer $code
     */
    private $code;


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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Offre
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    
        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set expiredAt
     *
     * @param \DateTime $expiredAt
     * @return Offre
     */
    public function setExpiredAt($expiredAt)
    {
        $this->expiredAt = $expiredAt;
    
        return $this;
    }

    /**
     * Get expiredAt
     *
     * @return \DateTime 
     */
    public function getExpiredAt()
    {
        return $this->expiredAt;
    }

    /**
     * Set designation
     *
     * @param string $designation
     * @return Offre
     */
    public function setDesignation($designation)
    {
        $this->designation = $designation;
    
        return $this;
    }

    /**
     * Get designation
     *
     * @return string 
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     * @return Offre
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    
        return $this;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set cahierCharge
     *
     * @param string $cahierCharge
     * @return Offre
     */
    public function setCahierCharge($cahierCharge)
    {
        $this->cahierCharge = $cahierCharge;
    
        return $this;
    }

    /**
     * Get cahierCharge
     *
     * @return string 
     */
    public function getCahierCharge()
    {
        return $this->cahierCharge;
    }

    /**
     * Set code
     *
     * @param integer $code
     * @return Offre
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
}
