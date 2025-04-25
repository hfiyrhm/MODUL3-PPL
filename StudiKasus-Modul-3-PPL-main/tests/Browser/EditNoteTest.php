<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class EditNoteTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function EditNoteTest(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Laravel')
                    ->clickLink('Notes') // Mengklik tautan dengan teks 'Notes' untuk membuka halaman notes
                    ->assertPathIs('/notes') // Memastikan browser dialihkan ke rute '/notes' setelah klik tautan
                    ->assertSee('Test Note') // Memastikan teks 'Test Note' ada di halaman notes untuk memverifikasi bahwa note tersebut ada
                    ->click('button[wire\\:click="editNote(1)"]') // Mengklik tombol edit catatan dengan ID 1
                    ->assertPathIs('/notes/1/edit') // Memastikan browser dialihkan ke rute '/notes/1/edit' setelah mengklik tombol edit
                    ->type('title', 'Updated Test Note') // Mengisi kolom input di 'title' dengan teks baru
                    ->type('content', 'This is an updated test note.'); // Mengisi kolom input di 'content' dengan teks baru
        });
    }
}