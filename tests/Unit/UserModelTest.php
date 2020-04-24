<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\User;

class UserModelTest extends TestCase
{
	
	use DatabaseTransactions;

	use DatabaseMigrations;
    /**
     * A basic unit test example.
     
     * @test	
     
     * @return void
     */
    public function user_has_full_name_attribute()
    {	

    	// $data = ['name' => 'Timon',  'email' => 'test@mail.ru', 'password' => 'secret'];

    	 $user = User::create(['firstname' => 'Timon', 'lastname' =>'Simon', 'email' => 'test@mail.ru', 'password' => 'secret' ]);


        $this->assertEquals('Timon Simon', $user->fullname);
    }
}
