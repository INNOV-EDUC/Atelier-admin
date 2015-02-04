<?php

namespace WCS\FlyaroundBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Terrain
 */
class Terrain
{
   
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var boolean
     */
    private $open;

    /**
     * @var integer
     */
    private $toda;


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
     * Set name
     *
     * @param string $name
     * @return Terrain
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Terrain
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
     * Set open
     *
     * @param boolean $open
     * @return Terrain
     */
    public function setOpen($open)
    {
        $this->open = $open;

        return $this;
    }

    /**
     * Get open
     *
     * @return boolean 
     */
    public function getOpen()
    {
        return $this->open;
    }

    /**
     * Set toda
     *
     * @param integer $toda
     * @return Terrain
     */
    public function setToda($toda)
    {
        $this->toda = $toda;

        return $this;
    }

    /**
     * Get toda
     *
     * @return integer 
     */
    public function getToda()
    {
        return $this->toda;
    }
}
