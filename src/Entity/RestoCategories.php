<?php

namespace App\Entity;

use App\Repository\RestoCategoriesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RestoCategoriesRepository::class)]
class RestoCategories
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $id_resto = null;

    #[ORM\Column]
    private ?int $id_categories = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdResto(): ?int
    {
        return $this->id_resto;
    }

    public function setIdResto(int $id_resto): static
    {
        $this->id_resto = $id_resto;

        return $this;
    }

    public function getIdCategories(): ?int
    {
        return $this->id_categories;
    }

    public function setIdCategories(int $id_categories): static
    {
        $this->id_categories = $id_categories;

        return $this;
    }
}
