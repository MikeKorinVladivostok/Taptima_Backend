<?php

namespace App\Controller;

use App\Entity\Coauthors;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class CoauthorController extends AbstractController
{

    public function formAdd()
    {
        $form = $this -> createForm(CoauthorForm::class);
        return $this->render('coauthor/index.html.twig', ['form' => $form -> createView()]);
    }

    public function readData()
    {
        $coAuthor = array();

        $product = $this->getDoctrine()
            ->getRepository(Coauthors::class)
            ->findAll();

        foreach ($product as $value)
        {
            $coAuthor[] = array(
                'id'     => $value-> getId(),
                'author' => $value-> getAuthorId(),
                'book'   => $value-> getBookId(),
            );
        }

        return $this->render('coauthor/coauthor.html.twig', array(
            'authors' => $coAuthor,
        ));

    }

    public function writeData(Request $request){

        $entityManager = $this->getDoctrine()->getManager();
        $data = $request->request->all();

        $coAuthor = new Coauthors();

        $coAuthor -> setAuthorId($data['coauthor_form']['author_id']);
        $coAuthor -> setBookId($data['coauthor_form']['book_id']);

        $entityManager->persist($coAuthor);
        $entityManager->flush();

        return $this ->readData();

    }

}
