<?php

namespace App\Controller;

use App\Entity\Authors;
use App\Entity\Books;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AuthorController extends AbstractController
{
    /**
     * @Route("/author", name="author")
     * @param ManagerRegistry $doctrine
     * @return Response
     */

    public function countBooks() : array
    {
        $count = array();

        $authors = $this->getDoctrine()
            ->getRepository(Authors::class)
            ->findAll();

        foreach ($authors as $author) {
            $oneAuthor = (string)($author->getAutors());

            $product = $this->getDoctrine()
                ->getRepository(Books::class)
                ->findBy(
                    ['author' => $oneAuthor]
                );
            if($product != null){
                $count[] = count($product);
            }else{
                $count[] = 0;
            }
        }
        return $count;

    }

    public function addAuthors(ManagerRegistry $doctrine)
    {
        $entityManager = $doctrine->getManager();

        $author = $_POST;

        $product = new Authors();

        $product->setBooks(0);
        $product->setAutors($author['author_form']['author']);

        $entityManager->persist($product);
        $entityManager->flush();

        return $this->redirect('http://taptima/getauthors');
    }

    public function readData()
    {
        $data = $this->countBooks();
        $update = $this->updateEventListener();

        $product = $this->getDoctrine()
            ->getRepository(Authors::class)
            ->findAll();

        return $this->render('author/index.html.twig', array(
            'authors' => $product,
        ));

    }

    public function updateEventListener() : Response
    {
        $data = $this->countBooks();

        $authors = $this->getDoctrine()
            ->getRepository(Authors::class)
            ->findAll();

        $count = 0;

        foreach ($authors as $author){
            $entityManager = $this->getDoctrine()->getManager();
            $product = $entityManager->getRepository(Authors::class)->find($author ->getId());

            $product->setBooks($data[$count]);
            $entityManager->flush();

            $count++;
        }

        return $this->redirect('http://taptima/getauthors');
    }

    public function updateAuthor()
    {
        $request = $_POST;

        $entityManager = $this->getDoctrine()->getManager();
        $product = $entityManager->getRepository(Authors::class)->find($request['id']);

        $product->setAutors($request['autors']);
        $entityManager->flush();
        $books = $this->countBooks();


        return new JsonResponse(['status' => 'ok','authors' => $request['autors'], 'books' => $books]);
    }

    public function deleteAuthor() {

        $response = $_POST;

        $entityManager = $this->getDoctrine()->getManager();
        $product = $entityManager->getRepository(Authors::class)->find($response['id']);
        $entityManager->remove($product);
        $entityManager->flush();

        return new JsonResponse(['status' => 'ok']);
    }

    public function formAdd()
    {
        $form = $this -> createForm(\AuthorForm::class);
        return $this  -> render('author/authorform.html.twig', ['form' => $form -> createView()]);
    }
}
