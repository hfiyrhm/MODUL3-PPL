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
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/login') 
                    ->type('email', 'fiyya@gmail.com') 
                    ->type('password', 'password') 
                    ->press('LOG IN')
                    ->visit('http://127.0.0.1:8000/dashboard')
                    ->clickLink('Notes')
                    ->visit('http://127.0.0.1:8000/notes')
                    ->press('Delete');
        });
    }
}