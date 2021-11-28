<?php

namespace App\Controller;

use App\Entity\Books;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BooksController extends AbstractController
{
    /**
     * @Route("/books", name="books")
     */
    public function writeData() {
//        $entityManager = $this->getDoctrine()->getManager();
//
//        $book = new Books();
//
//        $book -> setName("Земной круг");
//        $book -> setAuthor("Abicrombey");
//        $book -> setTitle("Темное фантази");
//        $book -> setImage("some href...");
//        $book -> setYear(2007);
//
//        $entityManager->persist($book);
//        $entityManager->flush();

        return $this->render('crud.html', [
//            'id' => $book->getId(),
        ]);
    }

    public function readData() {

    }
}
