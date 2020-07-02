<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;
use Faker\Factory as Faker;

class RegisterTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
    	$faker = Faker::create();
    	$response = $this->post('/api/register',  [ 'name' => $faker->firstName(null), 'password' => 111, 'email' => $faker->email ]);

    	$response->assertStatus(200);
    }
}
