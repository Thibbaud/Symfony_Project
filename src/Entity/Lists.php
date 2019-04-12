<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ListsRepository")
 */
class Lists
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="bigint")
     */
    private $movie;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMovie(): ?int
    {
        return $this->movie;
    }

    public function setMovie(int $movie): self
    {
        $this->movie = $movie;

        return $this;
    }
}
