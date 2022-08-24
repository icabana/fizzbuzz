<?php

namespace App\Controller;

// src/Controller/Desafio2Controller.php
use App\Service\FizzBuzzService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Desafio2Controller extends AbstractController
{
   
   /**
     * @Route("/desa/fizz/buzz", name="fizzbuzz2")
     */
   public function fizzbuzz(Request $request, FizzBuzzService $fizzBuzz): Response
    {
        // thanks to the type-hint, the container will instantiate a
        // new MessageGenerator and pass it to you!
        // ...
      
        $content = json_decode($request->getContent());

        $num_inicial = $content->num_inicial;
        $num_termino = $content->num_termino; 

        $message = $fizzBuzz->getFizzBuzz($num_inicial, $num_termino);
        
        return new Response(
            $message ,
            Response::HTTP_OK,
            ['content-type' => 'text/html']
        );
        
    }
}