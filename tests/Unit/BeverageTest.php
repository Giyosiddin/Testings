<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Exceptions\MinorCannotBuyAlcoholicBeverageException;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\Beverage;
use App\User;

class BeverageTest extends TestCase
{

	use DatabaseMigrations;

	private $beverage;


	public function setup(): void
	{
		parent::setup();
		$this->beverage = factory(Beverage::class)->make();

	}

    /**
     * A basic unit test example.
     
     *@test

     * @return void
     */
    public function beverage_has_name()
    {
        // $beverage = factory(Beverage::class)->make();

        // $name = $beverage->name;

        $this->assertNotEmpty($this->beverage->name);
    }


    public function beverage_has_type()
    {
        // $beverage = factory(Beverage::class)->make();

        // $type = $beverage->type;

        $this->assertNotEmpty($this->beverage->type);
    }

    /**
     
     *@test

     */

    public function a_minor_user_can_not_but_alcoholic_beverage()
    {
    		$beverage = factory(Beverage::class)->make([
    			'type' => 'Alcoholic'
    		]);

    		$user = factory(User::class)->make([
    			'age' => ' 17'
    		]);

    		$this->actingAs($user);

    		$this->expectException(MinorCannotBuyAlcoholicBeverageException::class);

    		$beverage->buy();

    }
}
