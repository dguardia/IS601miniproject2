<?php

namespace Tests\Unit;

use App\Car;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CountCarTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testCountCar()
    {
        $cars = Car::all();
        $countCars = Count($cars);
        echo('The Cars table has: ' . $countCars. ' cars');
        $this->assertEquals(50, $countCars);

    }
}
