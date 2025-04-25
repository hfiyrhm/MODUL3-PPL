<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function LoginTest(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Started') // Mengarahkan browser ke halaman utama aplikasi (rute '/')
                    ->clickLink('Log in') // Mengklik tautan dengan teks 'Log in' untuk membuka halaman login
                    ->assertpathis('/login') // Memastikan browser dialihkan ke rute '/login' setelah klik link
                    ->type('email', 'admin@gmail.com') // Mengisi kolom input dengan nama 'email'
                    ->type('password', 'password') // Mengisi kolom input dengan nama 'password'
                    ->press('Log in') // Mengklik tombol dengan teks 'Log in' untuk masuk ke aplikasi
                    ->assertPathIs('/dashboard');  // Memastikan browser dialihkan ke rute '/dashboard' setelah berhasil login
        });
    }
}
