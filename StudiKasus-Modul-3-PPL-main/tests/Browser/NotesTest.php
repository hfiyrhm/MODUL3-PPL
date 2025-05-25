<?php

namespace Tests\Browser;

// Removed unnecessary use directive
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NotesTest extends DuskTestCase
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
                    ->clickLink('Create Note')
                    ->visit('http://127.0.0.1:8000/create-note')
                    ->type('title', 'PPL')
                    ->type('description', 'SULIT BANGET BUSET')
                    ->press('CREATE');
        });
    }
}