<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserModelTest extends TestCase
{
    /**
     * Test Username.
     *
     * @return void
     */
    public function testUserName()
    {	
    	// Get User
    	$user = User::find(1);
        $this->assertEquals($user->name, 'Rehman Ghani');
    }

    /**
     * Test email.
     *
     * @return void
     */
    public function testUserEmail()
    {	
    	// Get User
    	$user = User::find(1);
        $this->assertEquals($user->email, 'rehman@msn.com');
    }
}
