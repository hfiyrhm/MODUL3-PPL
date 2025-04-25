<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterTest extends DuskTestCase
{
    /**
     * @group RegisterTest
     */
    public function RegisterTest(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/') // Mengarahkan browser ke halaman utama aplikasi (rute '/')
                    ->assertSee('Register') // Memastikan teks 'Register' ada di halaman utama untuk memverifikasi tautan registrasi
                    ->clickLink('Sign up') // Mengklik tautan dengan teks 'Sign up' untuk membuka halaman registrasi
                    ->assertPathIs('/signup')  // Memastikan browser dialihkan ke rute '/signup' setelah klik tautan
                    ->type('email', 'admin@gmail.com') // Mengisi kolom input dengan nama 'email' dengan nilai 'admin@gmail.com'
                    ->type('password', 'password') // Mengisi kolom input dengan nama 'password' dengan nilai 'password'
                    ->type('password_confirmation', 'password') //Mengisi kolom input dengan verifikasi password yang telah diketikkan sebelumnya.
                    ->press('Sign up') // Mengklik tombol dengan teks 'Sign up' registrasi setelah mengisi formulir
                    ->assertPathIs('/dashboard'); // Memastikan browser dialihkan ke rute '/dashboard' setelah berhasil registrasi
        });
    }
}
