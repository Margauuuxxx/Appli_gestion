<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_guest_is_redirected_to_login()
    {
        $response = $this->get('/');

        $response->assertRedirect(route('login'));
    }

    public function test_valid_credentials_open_home_page()
    {
        $login = $this->post(route('login.store'), [
            'email' => 'alice@budget.fr',
            'password' => 'Budget2026!',
        ]);

        $login->assertRedirect(route('home'));
        $this->get(route('home'))->assertOk();
    }
}
