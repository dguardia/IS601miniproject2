<?php

namespace Tests\Unit;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CountUserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testUserCount()
    {
        $users = User::all();
        $usersCount = Count($users);
        $this->assertEquals(50,$usersCount);
    }
}
