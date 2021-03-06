<?php

namespace Tests\Unit;

use App\Car;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CarYearTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testCarYearIsInt()
    {
        $car = Car::find(1);
        $year = (int) $car->Year;
        $this->assertIsInt($year);

    }
}
