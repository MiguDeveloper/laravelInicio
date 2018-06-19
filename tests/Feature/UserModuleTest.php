<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserModuleTest extends TestCase
{
    /**
     * @test
     */
    function it_loads_the_users_list_page()
    {
        $this->get("/usuarios")
            ->assertStatus(200)
            ->assertSee("usuarios");
    }

    /**
     * @test
     */
    function it_loads_the_users_detail_page()
    {
        $this->get("/usuarios/6")
            ->assertStatus(200)
            ->assertSee("Mostrando detalle del usuario 6");
    }

    /**
     * @test
     */
    function it_load_the_new_user_page()
    {
        $this->get("/usuarios/nuevo")
            ->assertStatus(200)
            ->assertSee("Crear nuevo usuario");
    }
}
