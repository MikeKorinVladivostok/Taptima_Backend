<?php

namespace App\Controller;

use App\Entity\Authors;
use App\Entity\Books;
use App\Repository\AuthorsRepository;
use Doctrine\Persistence\ManagerRegistry;
use phpDocumentor\Reflection\Types\Void_;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;


class BooksController extends AbstractController
{

    private $authorRep;

    public function __construct(AuthorsRepository $authorsRepository)
    {
        $this->authorRep = $authorsRepository;
    }

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

        $books = $this->getDoctrine()
            ->getRepository(Books::class)
            ->findAll();

        foreach ($books as $prod) {
            $author = $this->getDoctrine()
                ->getRepository(Authors::class)
                ->findOneBy(['id' => $prod->getAuthor()]);

            $prod->author_name = '';
            if ($author) {
                $prod->author_name = $author->getAutors();
            }
        }

        $authors = $this->getDoctrine()
            ->getRepository(Authors::class)
            ->findAll();

        return $this->render('crud.html', array(
            'array' => $books,
            'authors' => $authors,
        ));

    }


    public function updateImage(){
        $request = $_POST;
        $file = $_FILES;

//        $entityManager = $this->getDoctrine()->getManager();
//        $product = $entityManager->getRepository(Books::class)->find($request['id']);
//
//        $fotoname = rand(1000,9999). time().'_'.$_FILES['name']['image'];
//        $destiation_dir = basename('/public/image/'. $fotoname);
//        move_uploaded_file($_FILES['tmp_name']['image'], $destiation_dir );
//
//        $product -> setImage($destiation_dir);
//        $entityManager->flush();

        return new JsonResponse(['status' => 'ok','data' => $file]);
    }

    public function updateData()
    {
        $request = $_POST;
//        $file = $_FILES;

        $entityManager = $this->getDoctrine()->getManager();
        $product = $entityManager->getRepository(Books::class)->find($request['id']);

        if (isset($_FILES['input_file_name'])) {
            $fotoname = rand(1000, 9999) . time() . '_' . $_FILES['input_file_name']['name'];
            $destiation_dir = basename('/public/image/' . $fotoname);
            move_uploaded_file($_FILES['input_file_name']['tmp_name'], $destiation_dir);

            $product -> setImage($destiation_dir);
        }



        $product -> setName($request['name']);
        $product -> setAuthor($request['author']);
        $product -> setTitle($request['title']);

        $author = $this->getDoctrine()
            ->getRepository(Authors::class)
            ->findOneBy(['id' => $request['author']]);

        $request['author'] = $author->getAutors();

        $product -> setYear($request['year']);
        $entityManager->flush();

        $request['image_path'] = $product -> getImage();
        return new JsonResponse(['status' => 'ok','data' => $request]);
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
