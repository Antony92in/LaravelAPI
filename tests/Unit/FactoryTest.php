<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;
use App\Customevent;

class FactoryTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testDatabase()
    {
       $event = factory(Customevent::class, 10)->create();
    }
}
