<?php
// src/Controller/TaskController.php
namespace App\Controller;

use App\Entity\Fizzbuzz;
use App\Service\FizzBuzzService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\GeneratedValue;

class FizzController extends AbstractController
{
    /**
     * @Route("/desafio2/fizz/buzz", name="formfizz")
     */
    public function index(Request $request, FizzBuzzService $fizzBuzz, ManagerRegistry $doctrine): Response
    {
        // creates a task object and initializes some data for this example
        $fizz = new Fizzbuzz();
       // $task->setTask('Write a blog post');
       // $task->setDueDate(new \DateTime('tomorrow'));

        $form = $this->createFormBuilder($fizz)
            ->add('num_inicial', TextType::class, ['label' => 'Número Inicial: '])
            ->add('num_termino', TextType::class, ['label' => 'Número Final: '])
            ->add('save', SubmitType::class, ['label' => 'Ejecutar'])
            ->getForm();

        $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                                
                $message = $fizzBuzz->getFizzBuzz($fizz->getNumInicial(), $fizz->getNumTermino());
               
                $entityManager = $doctrine->getManager();

                $fecha = date("Y-m-d H:i:s");

                $fizz->setFecha($fecha);
                $fizz->setFizzbuzz($message);
        
                // tell Doctrine you want to (eventually) save the Product (no queries yet)
                $entityManager->persist($fizz);
        
                // actually executes the queries (i.e. the INSERT query)
                $entityManager->flush();

                return new Response(
                    $message,
                    Response::HTTP_OK,
                    ['content-type' => 'text/html']
                );
            }

            return $this->renderForm('fizz/new.html.twig', [
                'form' => $form,
            ]);
    }
}