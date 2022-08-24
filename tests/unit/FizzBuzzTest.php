<?php
namespace App\Tests;

use App\Service\FizzBuzzService;
use App\Service\ContactsInfoManager;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{

    /*
        @var MockObject|FizzBuzzService
    */
    private FizzBuzzService $fizzBuzzService;
    private $mensaje = "";

    public function setUp():void
    {
        parent::setUp();

        $this->FizzBuzzService = $this->getMockBuilder(FizzBuzzService::class)->disableOriginalConstructor()->getMock();

        $this->service = new FizzBuzzService();

        $this->mensaje = $this->service->getFizzBuzz(30,67);

    }


    public function testFizzBuzz()
    {      
        $this->assertEquals($this->mensaje == "FizzBuzz, 31, 32, Fizz, 34, Buzz, Fizz, 37, 38, Fizz, Buzz, 41, Fizz, 43, 44, FizzBuzz, 46, 47, Fizz, 49, Buzz, Fizz, 52, 53, Fizz, Buzz, 56, Fizz, 58, 59, FizzBuzz, 61, 62, Fizz, 64, Buzz, Fizz, 67", true);
    }

}