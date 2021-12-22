<?php
//
//
//namespace App\Events;
//
//use App\Entity\Books;
//use Symfony\Contracts\EventDispatcher\Event;
//
//class BookCount extends Event
//{
//    const NAME = "count.book";
//
//    protected Books $book;
//
//    public function __construct(Books $book)
//    {
//        $this ->book = $book;
//    }
//
//    public function getAuthor() : Books
//    {
//        return $this->book;
//    }
//
//    public function __toString(): string
//    {
//        return sprintf('User ID: %s', $this->book->getAuthor());
//    }
//
//}