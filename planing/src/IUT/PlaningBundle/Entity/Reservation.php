<?php

namespace IUT\PlaningBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="IUT\PlaningBundle\Entity\ReservationRepository")
 */
class Reservation
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
     * @ORM\OneToOne(targetEntity="IUT\PlaningBundle\Entity\User", cascade={"persist"})
     */
    private $usr;

   /**
     * @ORM\OneToOne(targetEntity="IUT\PlaningBundle\Entity\Date", cascade={"persist"})
     */
    private $date;

   /**
     * @ORM\OneToOne(targetEntity="IUT\PlaningBundle\Entity\Activite", cascade={"persist"})
     */
    private $activite;





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
     * Set usr
     *
     * @param \IUT\PlaningBundle\Entity\User $usr
     * @return Reservation
     */
    public function setUsr(\IUT\PlaningBundle\Entity\User $usr = null)
    {
        $this->usr = $usr;

        return $this;
    }

    /**
     * Get usr
     *
     * @return \IUT\PlaningBundle\Entity\User 
     */
    public function getUsr()
    {
        return $this->usr;
    }

    /**
     * Set date
     *
     * @param \IUT\PlaningBundle\Entity\Date $date
     * @return Reservation
     */
    public function setDate(\IUT\PlaningBundle\Entity\Date $date = null)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \IUT\PlaningBundle\Entity\Date 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set activite
     *
     * @param \IUT\PlaningBundle\Entity\Activite $activite
     * @return Reservation
     */
    public function setActivite(\IUT\PlaningBundle\Entity\Activite $activite = null)
    {
        $this->activite = $activite;

        return $this;
    }

    /**
     * Get activite
     *
     * @return \IUT\PlaningBundle\Entity\Activite 
     */
    public function getActivite()
    {
        return $this->activite;
    }
}
