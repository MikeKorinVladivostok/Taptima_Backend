<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CRUD_Taptima extends AbstractController
{
    public function number(): Response
    {
        $number = random_int(0, 100);

        return $this->render('crud.html', [
            'number' => $number,
        ]);
    }
}