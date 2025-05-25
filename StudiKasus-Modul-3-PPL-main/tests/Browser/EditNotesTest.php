<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class EditNotesTest extends DuskTestCase
{
    public function testEditNote(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/login')
                ->type('email', 'fiyya@gmail.com')
                ->type('password', 'password')
                ->press('LOG IN')
                ->visit('http://127.0.0.1:8000/notes')
                ->clickLink('Edit')
                ->assertSee('Edit Note')
                ->type('input[name=title]', 'PPL M')
                ->type('textarea[name=description]', 'MAKASIH')
                ->press('UPDATE');
        });
    }
}