<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\Book2Repository")
 */
class Book2
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $bookCode;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $bookName;

//    /**
//     * @ORM\Column(type="datetime", nullable=true)
//     */
//    private $produce_date;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $review;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBookCode(): ?string
    {
        return $this->bookCode;
    }

    public function setBookCode(string $bookCode): self
    {
        $this->bookCode = $bookCode;

        return $this;
    }

    public function getBookName(): ?string
    {
        return $this->bookName;
    }

    public function setBookName(string $bookName): self
    {
        $this->bookName = $bookName;

        return $this;
    }

//    public function getProduceDate(): ?\DateTimeInterface
//    {
//        return $this->produce_date;
//    }
//
//    public function setProduceDate(?\DateTimeInterface $produce_date)
//    {
//        $this->produce_date = $produce_date;
//        return $this;
//    }

    public function getReview(): ?string
    {
        return $this->review;
    }

    public function setReview(?string $review): self
    {
        $this->review = $review;

        return $this;
    }
}
