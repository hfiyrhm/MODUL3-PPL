<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Register')
                    ->clickLink('Sign up')
                    ->assertPathIs('/signup')
                    ->type('email', 'admin@gmail.com')
                    ->type('password', 'password')
                    ->type('password_confirmation', 'password')
                    ->press('Sign up')
                    ->assertPathIs('/dashboard');
        });
    }
}
