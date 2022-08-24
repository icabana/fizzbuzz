<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Desafio1Controller extends AbstractController
{
    /**
     * @Route("/desafio1/fizz/buzz", name="fizzbuzz")
     */
    public function index(): Response
    {
        return $this->render('desafio1/index.html.twig', [
            'controller_name' => 'Desafio1Controller',
        ]);
    }
}
