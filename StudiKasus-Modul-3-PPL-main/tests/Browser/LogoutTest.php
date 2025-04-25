<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LogoutTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function LogoutTest(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/') 
                    ->assertSee('Logout') // Mengarahkan browser ke halaman utama aplikasi (rute '/')
                    ->clickLink('Log out') // Mengklik tautan dengan teks 'Log out' untuk keluar dari aplikasi
                    ->assertPathIs('/') // Memastikan browser dialihkan ke rute '/' setelah keluar
                    ->assertSee('Login'); // Memastikan teks 'Login' ada di halaman utama untuk memverifikasi bahwa pengguna telah keluar
        });
    }
}
