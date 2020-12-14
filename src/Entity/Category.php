<?php

namespace App\Entity;

use App\Repository\CategoryRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CategoryRepository::class)
 */
class Category
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $horreur;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getHorreur(): ?string
    {
        return $this->horreur;
    }

    public function setHorreur(string $horreur): self
    {
        $this->horreur = $horreur;

        return $this;
    }
}
