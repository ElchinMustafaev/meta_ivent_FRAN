<?php

namespace CalcBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Buyers
 *
 * @ORM\Table(name="buyers")
 * @ORM\Entity(repositoryClass="CalcBundle\Repository\BuyersRepository")
 */
class Buyers
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="FIO", type="string", nullable=true)
     */
    private $FIO;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", nullable=true)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="money", type="string", nullable=true)
     */
    private $money;

    /**
     *
     *
     * @ORM\OneToMany(targetEntity="Seller", mappedBy="title",cascade={"persist", "remove"}, orphanRemoval=true)
     */
    private $title;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->title = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set fIO.
     *
     * @param string|null $fIO
     *
     * @return Buyers
     */
    public function setFIO($fIO = null)
    {
        $this->FIO = $fIO;

        return $this;
    }

    /**
     * Get fIO.
     *
     * @return string|null
     */
    public function getFIO()
    {
        return $this->FIO;
    }

    /**
     * Set phone.
     *
     * @param string|null $phone
     *
     * @return Buyers
     */
    public function setPhone($phone = null)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone.
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set email.
     *
     * @param string|null $email
     *
     * @return Buyers
     */
    public function setEmail($email = null)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email.
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set money.
     *
     * @param string|null $money
     *
     * @return Buyers
     */
    public function setMoney($money = null)
    {
        $this->money = $money;

        return $this;
    }

    /**
     * Get money.
     *
     * @return string|null
     */
    public function getMoney()
    {
        return $this->money;
    }

    /**
     * Add title.
     *
     * @param \CalcBundle\Entity\Seller $title
     *
     * @return Buyers
     */
    public function addTitle(\CalcBundle\Entity\Seller $title)
    {
        $this->title[] = $title;

        return $this;
    }

    /**
     * Remove title.
     *
     * @param \CalcBundle\Entity\Seller $title
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeTitle(\CalcBundle\Entity\Seller $title)
    {
        return $this->title->removeElement($title);
    }

    /**
     * Get title.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTitle()
    {
        return $this->title;
    }
}
