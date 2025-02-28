<?php

namespace App\Entity;

use App\Repository\ReviewRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReviewRepository::class)]
class Review
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $id_user = null;

    #[ORM\Column]
    private ?int $id_resto = null;

    #[ORM\Column]
    private ?int $ruting = null;

    #[ORM\Column(length: 255)]
    private ?string $commentaire = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $created_at = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getIdUser(): ?int
    {
        return $this->id_user;
    }

    public function setIdUser(int $id_user): static
    {
        $this->id_user = $id_user;

        return $this;
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

    public function getRuting(): ?int
    {
        return $this->ruting;
    }

    public function setRuting(int $ruting): static
    {
        $this->ruting = $ruting;

        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(string $commentaire): static
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeImmutable $created_at): static
    {
        $this->created_at = $created_at;

        return $this;
    }



    // src/Entity/Review.php
#[ORM\ManyToOne(targetEntity: Rest::class, inversedBy: 'reviews')]
#[ORM\JoinColumn(name: 'restaurant_id', referencedColumnName: 'id')]
private ?Rest $restaurant = null;

public function getRestaurant(): ?Rest
{
    return $this->restaurant;
}

public function setRestaurant(?Rest $restaurant): self
{
    $this->restaurant = $restaurant;

    return $this;
}

}
