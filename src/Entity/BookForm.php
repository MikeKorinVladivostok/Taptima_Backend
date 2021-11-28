<?php


namespace App\Entity;

use phpDocumentor\Reflection\Types\Integer;

class BookForm
{
    protected $bookName;
    protected $author;
    protected $title;
    protected $image;
    protected $year;

    public function getBookName(): string
    {
        return $this->bookName;
    }

    public function setBookName(string $bookName): void
    {
        $this->bookName = $bookName;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function setAuthor(string $author): void
    {
        $this->author = $author;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getImage(): string
    {
        return $this->image;
    }

    public function setImage(string $image): void
    {
        $this->image = $image;
    }

    public function getYear(): Integer
    {
        return $this->year;
    }

    public function setYear(Integer $year): void
    {
        $this->year = $year;
    }


}