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
   * @ORM\OneToOne(targetEntity="Sdz\BlogBundle\Entity\Activite", cascade={"persist"})
   */
  private $activite;

  /**
   * @ORM\ManyToOne(targetEntity="Sdz\BlogBundle\Entity\User")
   * @ORM\JoinColumn(nullable=false)
   */
  private $user;


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
     * Set activite
     *
     * @param \Sdz\BlogBundle\Entity\Activite $activite
     * @return Reservation
     */
    public function setActivite(\Sdz\BlogBundle\Entity\Activite $activite = null)
    {
        $this->activite = $activite;

        return $this;
    }

    /**
     * Get activite
     *
     * @return \Sdz\BlogBundle\Entity\Activite 
     */
    public function getActivite()
    {
        return $this->activite;
    }

    /**
     * Set user
     *
     * @param \Sdz\BlogBundle\Entity\User $user
     * @return Reservation
     */
    public function setUser(\Sdz\BlogBundle\Entity\User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Sdz\BlogBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}
