<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {
        $this->browse(function (Browser $browser) {
//            $one = 'o';
//            $two = 'o';
//            $three = 's';
//            $user = 'dmtu0738038';
//            $number = '3000639999';
//            $password = 'A123123123b';
//            $newPassword = 'A123123123bB';
            $browser->visit('https://www.ssvv288.com');
            $browser->pause(1000);
//            $browser->waitForText('Login Name',10);
//        $browser->type('#account', $cridentials->login_user_create_user);
//            $browser->type('#password', $cridentials->login_password_create_user);
            $browser->type('#account', 'subadmin138');
            $browser->type('#password','123456Aa');
            $browser->press('button[type="submit"]');
            $browser->pause(1000);
            $browser->waitForText('Profile',10);
            $browser->assertSee('Profile');
    }
}
