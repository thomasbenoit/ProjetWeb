<?php

namespace IUT\PlaningBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Activite
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="IUT\PlaningBundle\Entity\ActiviteRepository")
 */
class Activite
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nomactivite", type="string", length=255)
     */
    private $nomactivite;


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
     * Set nomactivite
     *
     * @param string $nomactivite
     * @return Activite
     */
    public function setNomactivite($nomactivite)
    {
        $this->nomactivite = $nomactivite;

        return $this;
    }

    /**
     * Get nomactivite
     *
     * @return string 
     */
    public function getNomactivite()
    {
        return $this->nomactivite;
    }
}
