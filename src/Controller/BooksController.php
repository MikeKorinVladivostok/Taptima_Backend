<?php

namespace App\Controller;

use App\Entity\Books;
use Doctrine\Persistence\ManagerRegistry;
use phpDocumentor\Reflection\Types\Void_;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;


class BooksController extends AbstractController
{

    public function writeData()
    {
        $entityManager = $this->getDoctrine()->getManager();

        $response = $_POST;

        $fotoname = rand(1000,9999). time().'_'.$_FILES['book_form']['name']['image'];
        $destiation_dir = basename('/public/image/'. $fotoname);
        move_uploaded_file($_FILES['book_form']['tmp_name']['image'], $destiation_dir );

        $book = new Books();

        $book -> setName($response['book_form']['name']);
        $book -> setAuthor($response['book_form']['author']);
        $book -> setTitle($response['book_form']['title']);
        $book -> setImage($destiation_dir);
        $book -> setYear((int) $response['book_form']['year']);

        $entityManager->persist($book);
        $entityManager->flush();

        unset($response);
        unset($_POST);

        return $this->redirect('http://taptima/');

    }


    public function readData()
    {
        $product = $this->getDoctrine()
            ->getRepository(Books::class)
            ->findAll();

        return $this->render('crud.html', array(
            'array' => $product,
        ));

    }


    public function updateData(ManagerRegistry $doctrine  ,int $id) :  Response
    {
//        $session = new Session();
//        $session->start();

        $entityManager = $doctrine->getManager();
        $product = $entityManager->getRepository(Books::class)->find($id);

        $response = $_POST;

        $fotoname = rand(1000,9999). time().'_'.$_FILES['book_form']['name']['image'];
        $destiation_dir = basename('/public/image/'. $fotoname);
        move_uploaded_file($_FILES['book_form']['tmp_name']['image'], $destiation_dir );

        $product -> setName($response['book_form']['name']);
        $product -> setAuthor($response['book_form']['author']);
        $product -> setTitle($response['book_form']['title']);
        $product -> setImage($destiation_dir);
        $product -> setYear($response['book_form']['year']);
        $entityManager->flush();
//
        return $this-> readData();
    }


    public function formAdd()
    {
        $form = $this -> createForm(\BookForm::class);
        return $this  -> render('books/index.html.twig', ['form' => $form -> createView()]);
    }

}
