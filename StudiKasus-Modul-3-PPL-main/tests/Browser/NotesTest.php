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
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Notes')
                    ->clickLink('Notes')
                    ->assertPathIs('/notes')
                    ->assertSee('Create Note')
                    ->clickLink('Create Note')
                    ->assertPathIs('/notes/create')
                    ->type('title', 'Test Note')
                    ->type('content', 'This is a test note.')
                    ->press('Save')
                    ->assertPathIs('/notes');
        });
    }
}
