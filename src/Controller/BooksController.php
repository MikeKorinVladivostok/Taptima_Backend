<?php

namespace App\Controller;

use App\Entity\Books;
use phpDocumentor\Reflection\Types\Void_;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class BooksController extends AbstractController
{
    /**
     * @Route("/books", name="books")
     */


    public function writeData() : Void_ {
        $entityManager = $this->getDoctrine()->getManager();

        $book = new Books();

        $book -> setName("Земной круг");
        $book -> setAuthor("Abicrombey");
        $book -> setTitle("Темное фантази");
        $book -> setImage("some href...");
        $book -> setYear(2007);

        $entityManager->persist($book);
        $entityManager->flush();

    }

    public function readData()  {

        $product = $this->getDoctrine()
            ->getRepository(Books::class)
            ->findAll();

        if (!$product) {
            throw $this->createNotFoundException(
                'No product found for id '
            );
        }

        return $this->render('crud.html', array(
            'array' => $product,
        ));

    }
}
