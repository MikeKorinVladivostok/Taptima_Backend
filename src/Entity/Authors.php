<?php

namespace App\Entity;

use App\Repository\AuthorsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AuthorsRepository::class)
 */
class Authors
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $books;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $autors;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBooks(): ?int
    {
        return $this->books;
    }

    public function setBooks(int $books): self
    {
        $this->books = $books;

        return $this;
    }

    public function getAutors(): ?string
    {
        return $this->autors;
    }

    public function setAutors(string $autors): self
    {
        $this->autors = $autors;

        return $this;
    }
}
