<?php
//namespace App\EventListener;
//
//use App\Events\BookCount;
//use Doctrine\ORM\EntityManagerInterface;
//use Symfony\Component\EventDispatcher\EventSubscriberInterface;
//
//class EventListener implements EventSubscriberInterface
//{
//    private EntityManagerInterface $entityManager;
//
//    public function __construct(EntityManagerInterface $entityManager)
//    {
//        $this->entityManager = $entityManager;
//    }
//
//    public static function getSubscribedEvents(): array
//    {
//        return [BookCount::NAME => ['count.book',1]  ];
//    }
//
//    public function countBooks(BookCount $event) : void
//    {
//        $book = $event-> getAuthor();
//        $book-> setYear("1488");
//    }
//
//
//}