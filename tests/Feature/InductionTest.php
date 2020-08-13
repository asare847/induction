<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class InductionTest extends TestCase
{
    use RefreshDatabase,WithFaker;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_user_can_register_profile()
    {
        $this->withoutExceptionHandling();
        $attributes =[
            'firstname'=> $this->faker->firstName,
            'lastname'=> $this->faker->lastName
        ];
        
        $this->post('/inductions',$attributes);

        $this->assertDatabaseHas('inductions',$attributes);
          

        
        $this->get('/inductions')->assertSee($attributes['firstname'])->assertSee($attributes['lastname']);
    }


}
