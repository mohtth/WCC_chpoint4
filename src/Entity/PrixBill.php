<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PrixBillRepository")
 */
class PrixBill
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $enfant;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adult;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $senior;

    /**
     * @ORM\Column(type="boolean")
     */
    private $ouvree;

    /**
     * @ORM\Column(type="boolean")
     */
    private $weekend;

    /**
     * @ORM\Column(type="boolean")
     */
    private $ferie;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEnfant(): ?string
    {
        return $this->enfant;
    }

    public function setEnfant(string $enfant): self
    {
        $this->enfant = $enfant;

        return $this;
    }

    public function getAdult(): ?string
    {
        return $this->adult;
    }

    public function setAdult(string $adult): self
    {
        $this->adult = $adult;

        return $this;
    }

    public function getSenior(): ?string
    {
        return $this->senior;
    }

    public function setSenior(string $senior): self
    {
        $this->senior = $senior;

        return $this;
    }

    public function getOuvree(): ?bool
    {
        return $this->ouvree;
    }

    public function setOuvree(bool $ouvree): self
    {
        $this->ouvree = $ouvree;

        return $this;
    }

    public function getWeekend(): ?bool
    {
        return $this->weekend;
    }

    public function setWeekend(bool $weekend): self
    {
        $this->weekend = $weekend;

        return $this;
    }

    public function getFerie(): ?bool
    {
        return $this->ferie;
    }

    public function setFerie(bool $ferie): self
    {
        $this->ferie = $ferie;

        return $this;
    }
}
