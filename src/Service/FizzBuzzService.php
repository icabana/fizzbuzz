<?php

// src/Service/FizzBuzz.php
namespace App\Service;

class FizzBuzzService
{

    public function __constructor(){
        
    }

    public function getFizzBuzz(String $num_inicial, String $num_termino): string
    {       

        $msg = ""; 

        for($i = $num_inicial; $i<=$num_termino; $i++){

            if($i%3 == 0 && $i%5 == 0){
                $msg .= "FizzBuzz";
            }else if($i%3 == 0){
                $msg .=  "Fizz";
            }else if($i%5 == 0){
                $msg .=  "Buzz";
            }else{
                $msg .= $i;
            }

            if($i!=$num_termino){
                $msg .= ", ";
            }
        }  
        
        return $msg;

    }
}