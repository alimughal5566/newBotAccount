<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     */
    public function testBasicExample(): void
    {
        $this->browse(function (Browser $browser) {
           
        $browser->visit('https://www.ssvv288.com');
        $browser->pause(1000);
        $browser->type('#account', 'subadmin138');
        $browser->type('#password', '123456Aa');
        $browser->press('button[type="submit"]');
        $browser->pause(1000);
        $browser->waitForText('Profile',10);
        $browser->assertSee('Profile');
        
        
        });
    }
}
