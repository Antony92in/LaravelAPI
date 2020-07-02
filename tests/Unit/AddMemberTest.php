<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;
use Faker\Factory as Faker;

class AddMemberTest extends TestCase
{	

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {	
    	
    	$faker = Faker::create();
    	
        $response = $this->postJson('/api/add',  [ 'event_id' => rand(1, 50), 'first_name' => $faker->firstName(null), 'second_name' => $faker->lastName, 'email' => $faker->email ]);

        $response->assertStatus(200);
    }
}
