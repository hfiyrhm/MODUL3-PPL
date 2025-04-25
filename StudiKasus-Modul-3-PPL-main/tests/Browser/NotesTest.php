<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function NotesTest(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/') // Mengarahkan browser ke halaman notes 
                    ->assertSee('Notes') // Memastikan teks 'Notes' ada di halaman untuk memverifikasi tautan notes
                    ->clickLink('Notes') // Mengklik tautan dengan teks 'Notes' untuk membuka halaman notes
                    ->assertPathIs('/notes') // Memastikan browser dialihkan ke rute '/notes' setelah klik tautan
                    ->assertSee('Create Note') // Memastikan teks 'Create Note' ada di halaman notes untuk memverifikasi tautan create note
                    ->clickLink('Create Note') // Mengklik tautan dengan teks 'Create Note' untuk membuka halaman create note
                    ->assertPathIs('/notes/create') 
                    ->type('title', 'Test Note') // Mengisi kolom input di 'title'
                    ->type('content', 'This is a test note.') // Mengisi kolom input di 'content'
                    ->press('Save') //menyimpan note yang sudah dibuat dengan klik save
                    ->assertPathIs('/notes'); // Memastikan browser dialihkan ke rute '/notes' setelah berhasil menyimpan
        });
    }
}
