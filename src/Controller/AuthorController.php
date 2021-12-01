<?php

namespace App\Controller;

use App\Entity\Authors;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AuthorController extends AbstractController
{
    /**
     * @Route("/author", name="author")
     * @param ManagerRegistry $doctrine
     * @return Response
     */
    public function addAuthors(ManagerRegistry $doctrine)
    {
        $entityManager = $doctrine->getManager();

        $author = $_POST;

        $product = new Authors();

        $product->setBooks(1);
        $product->setAutors($author['author']);

        $entityManager->persist($product);

        $entityManager->flush();

        return $this->redirect('http://taptima/getauthors');
    }

    public function readData()
    {
        $product = $this->getDoctrine()
            ->getRepository(Authors::class)
            ->findAll();

        return $this->render('author/index.html.twig', array(
            'authors' => $product,
        ));

    }

    public function formAdd()
    {
        $form = $this -> createForm(\AuthorForm::class);
        return $this  -> render('author/authorform.html.twig', ['form' => $form -> createView()]);
    }
}
