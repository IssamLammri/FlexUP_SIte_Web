<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrdersRefused
 *
 * @ORM\Table(name="orders_refused", indexes={@ORM\Index(name="ID_Groupe", columns={"ID_Groupe"}), @ORM\Index(name="ID_Order", columns={"ID_Order"})})
 * @ORM\Entity
 */
class OrdersRefused
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_Order_R", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOrderR;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_Refuse", type="date", nullable=false)
     */
    private $dateRefuse;

    /**
     * @var string
     *
     * @ORM\Column(name="Reason", type="text", length=65535, nullable=false)
     */
    private $reason;

    /**
     * @var \Groups
     *
     * @ORM\ManyToOne(targetEntity="Groups")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_Groupe", referencedColumnName="ID_Group")
     * })
     */
    private $idGroupe;

    /**
     * @var \Orders
     *
     * @ORM\ManyToOne(targetEntity="Orders")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_Order", referencedColumnName="ID_Order")
     * })
     */
    private $idOrder;

    public function getIdOrderR(): ?int
    {
        return $this->idOrderR;
    }

    public function getDateRefuse(): ?\DateTimeInterface
    {
        return $this->dateRefuse;
    }

    public function setDateRefuse(\DateTimeInterface $dateRefuse): self
    {
        $this->dateRefuse = $dateRefuse;

        return $this;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function setReason(string $reason): self
    {
        $this->reason = $reason;

        return $this;
    }

    public function getIdGroupe(): ?Groups
    {
        return $this->idGroupe;
    }

    public function setIdGroupe(?Groups $idGroupe): self
    {
        $this->idGroupe = $idGroupe;

        return $this;
    }

    public function getIdOrder(): ?Orders
    {
        return $this->idOrder;
    }

    public function setIdOrder(?Orders $idOrder): self
    {
        $this->idOrder = $idOrder;

        return $this;
    }


}
