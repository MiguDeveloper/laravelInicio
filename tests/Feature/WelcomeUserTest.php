<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUserTest extends TestCase
{
    /**
     * @test
     */
    public function it_welcome_user_with_nickname()
    {
        $this->get("/usuarios/miguel/miguelon")
            ->assertStatus(200)
            ->assertSee("Hola miguel,  tu apodo es miguelon");
    }

    /**
     * @test
     */
    public function it_welcome_user_without_nickname()
    {
        $this->get("/usuarios/miguel")
            ->assertStatus(200)
            ->assertSee("Hola miguel, no tienes apodo");
    }
}
