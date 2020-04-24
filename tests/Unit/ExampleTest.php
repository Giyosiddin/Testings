<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\User;


class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }

    /**
	
	*@test

    **/

	public function user_has_age_attribute()
	{
		$user = factory(User::class)->make();

		$this->assertNotNull($user->age);

	}


}
