<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Currency
 *
 * @ORM\Table(name="currency")
 * @ORM\Entity
 */
class Currency
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_Currency", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCurrency;

    /**
     * @var string
     *
     * @ORM\Column(name="Name_Currency", type="string", length=50, nullable=false)
     */
    private $nameCurrency;

    /**
     * @var string
     *
     * @ORM\Column(name="symbol", type="string", length=20, nullable=false)
     */
    private $symbol;

    public function getIdCurrency(): ?int
    {
        return $this->idCurrency;
    }

    public function getNameCurrency(): ?string
    {
        return $this->nameCurrency;
    }

    public function setNameCurrency(string $nameCurrency): self
    {
        $this->nameCurrency = $nameCurrency;

        return $this;
    }

    public function getSymbol(): ?string
    {
        return $this->symbol;
    }

    public function setSymbol(string $symbol): self
    {
        $this->symbol = $symbol;

        return $this;
    }


}
