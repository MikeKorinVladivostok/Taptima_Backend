<?php

namespace App\Controller;

use App\Entity\Books;
use Doctrine\Persistence\ManagerRegistry;
use phpDocumentor\Reflection\Types\Void_;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
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
        $get = $_GET;

        $product = $this->getDoctrine()
            ->getRepository(Books::class)
            ->findAll();

        foreach ($product as $prod) {
            $author[] = $prod -> getAuthor();
        }

        return $this->render('crud.html', array(
            'array' => $product,
        ));

    }


    public function updateData() :  Response
    {
        $request = $_POST;
        $file = $_FILES;

        $entityManager = $this->getDoctrine()->getManager();
        $product = $entityManager->getRepository(Books::class)->find($request['id']);

//        $fotoname = rand(1000,9999). time().'_'.$_FILES['book_form']['name']['image'];
//        $destiation_dir = basename('/public/image/'. $fotoname);
//        move_uploaded_file($_FILES['book_form']['tmp_name']['image'], $destiation_dir );

        $product -> setName($request['name']);
        $product -> setAuthor($request['author']);
        $product -> setTitle($request['title']);
//        $product -> setImage($destiation_dir);
        $product -> setYear($request['year']);
        $entityManager->flush();

        return new JsonResponse(['status' => 'ok','data' => $request, 'file' => $file]);
    }

    public function deleteBook() {

        $response = $_POST;

        $entityManager = $this->getDoctrine()->getManager();
        $product = $entityManager->getRepository(Books::class)->find($response['id']);
        $entityManager->remove($product);
        $entityManager->flush();

        return new JsonResponse(['status' => 'ok']);
    }


    public function formAdd()
    {
        $form = $this -> createForm(\BookForm::class);
        return $this  -> render('books/index.html.twig', ['form' => $form -> createView()]);
    }

}
