<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ShowNoteTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function ShowNoteTest(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Laravel')
                    ->clickLink('Notes') // Mengklik tautan dengan teks 'Notes' untuk membuka halaman notes
                    ->assertPathIs('/notes') // Memastikan browser dialihkan ke rute '/notes' setelah klik tautan
                    ->assertSee('Test Note') // Memastikan teks 'Test Note' ada di halaman notes untuk memverifikasi bahwa notes tersebut ada
                    ->click('button[wire\\:click="showNote(1)"]') // Mengklik tombol untuk menampilkan note dengan ID 1
                    ->assertPathIs('/notes/1') // Memastikan browser dialihkan ke rute '/notes/1' setelah mengklik tombol
                    ->assertSee('Test Note') // Memastikan teks 'Test Note' ada di halaman detail notes
                    ->assertSee('This is a test note.'); // Memastikan teks 'This is a test note.' ada di halaman detail note
        });
    }
}
