<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;

class LoginTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_login_view_load()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function test_user_login() {

        $user = User::factory()->create();

        $this->post('login', [
            'email'=>$user->email,
            'password'=>'password'
        ]);
        $this->assertAuthenticated();
    }
}
