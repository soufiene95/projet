<?php

namespace App\Entity;

use App\Repository\ResauRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ResauRepository::class)]
class Resau
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $reseau_sociaux = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReseauSociaux(): ?string
    {
        return $this->reseau_sociaux;
    }

    public function setReseauSociaux(string $reseau_sociaux): static
    {
        $this->reseau_sociaux = $reseau_sociaux;

        return $this;
    }
}
