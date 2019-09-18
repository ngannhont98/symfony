<?php
namespace App\Entity;

class Book
{
    public $bookCode;
    public $bookName;
    public $produce_date;
    public $review;

    /**
     * @return mixed
     */
    public function getBookCode()
    {
        return $this->bookCode;
    }

    /**
     * @param mixed $bookCode
     */
    public function setBookCode($bookCode): void
    {
        $this->bookCode = $bookCode;
    }

    /**
     * @return mixed
     */
    public function getBookName()
    {
        return $this->bookName;
    }

    /**
     * @param mixed $bookName
     */
    public function setBookName($bookName): void
    {
        $this->bookName = $bookName;
    }

    /**
     * @return mixed
     */
    public function getProduceDate()
    {
        return $this->produce_date;
    }

    /**
     * @param mixed $produce_date
     */
    public function setProduceDate($produce_date): void
    {
        $this->produce_date = $produce_date;
    }

    /**
     * @return mixed
     */
    public function getReview()
    {
        return $this->review;
    }

    /**
     * @param mixed $review
     */
    public function setReview($review): void
    {
        $this->review = $review;
    }
}