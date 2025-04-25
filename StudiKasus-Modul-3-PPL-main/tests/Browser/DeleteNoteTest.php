<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class DeleteNoteTest extends DuskTestCase
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
                    ->assertSee('Test Note') // Memastikan teks 'Test Note' ada di halaman notes untuk memverifikasi bahwa catatan tersebut ada
                    ->click('button[wire\\:click="deleteNote(1)"]') // Mengklik tombol hapus catatan dengan ID 1
                    ->assertPathIs('/notes') // Memastikan browser dialihkan ke rute '/notes' setelah mengklik tombol hapus
                    ->assertDontSee('Test Note'); // Memastikan teks 'Test Note' tidak ada di halaman notes setelah dihapus
        });
    }
}
