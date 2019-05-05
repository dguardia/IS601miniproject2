<?php

namespace Tests\Unit;


Use App\Car;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CarMakeTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testCarMake()
    {
        $car = Car::inRandomOrder()->first();
        $this->assertContains($car->Make, ['ford', 'toyota', 'honda']);

    }
}
