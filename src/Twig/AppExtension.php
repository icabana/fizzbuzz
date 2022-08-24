<?php
// src/Twig/AppExtension.php
namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class AppExtension extends AbstractExtension
{
    public function getFunctions()
    {
        return [
            new TwigFunction('fizzbuzz', [$this, 'imprimirfizzbuzz']),
        ];
    }

    public function imprimirfizzbuzz(int $inicio)
    {
        for($i = $inicio; $i<=30; $i++){

            if($i%3 == 0 && $i%5 == 0){
                echo "FizzBuzz";
            }else if($i%3 == 0){
                echo "Fizz";
            }else if($i%5 == 0){
                echo "Buzz";
            }else{
                echo $i;
            }

            if($i!=30){
                echo ", ";
            }
        }
    }
}