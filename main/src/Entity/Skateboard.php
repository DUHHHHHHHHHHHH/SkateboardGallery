<?php

namespace App\Entity;

use App\Repository\SkateboardRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SkateboardRepository::class)]
class Skateboard
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $marca = null;

    #[ORM\Column(length: 255)]
    private ?string $modello = null;

    #[ORM\Column(length: 50)]
    private ?string $taglia = null;

    #[ORM\Column(length: 100)]
    private ?string $colore = null;

    #[ORM\Column(length: 255)]
    private ?string $tipologia = null;

    #[ORM\Column(type: Types::SIMPLE_ARRAY)]
    private array $immagini = [];

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMarca(): ?string
    {
        return $this->marca;
    }

    public function setMarca(string $marca): static
    {
        $this->marca = $marca;

        return $this;
    }

    public function getModello(): ?string
    {
        return $this->modello;
    }

    public function setModello(string $modello): static
    {
        $this->modello = $modello;

        return $this;
    }

    public function getTaglia(): ?string
    {
        return $this->taglia;
    }

    public function setTaglia(string $taglia): static
    {
        $this->taglia = $taglia;

        return $this;
    }

    public function getColore(): ?string
    {
        return $this->colore;
    }

    public function setColore(string $colore): static
    {
        $this->colore = $colore;

        return $this;
    }

    public function getTipologia(): ?string
    {
        return $this->tipologia;
    }

    public function setTipologia(string $tipologia): static
    {
        $this->tipologia = $tipologia;

        return $this;
    }

    public function getImmagini(): array
    {
        return $this->immagini;
    }

    public function setImmagini(array $immagini): static
    {
        $this->immagini = $immagini;

        return $this;
    }
}
