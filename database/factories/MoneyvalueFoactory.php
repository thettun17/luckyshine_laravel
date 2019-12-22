<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Moneyvalue;
use Faker\Generator as Faker;

$factory->define(Moneyvalue::

class , function (Faker $faker) {
		return [
			'amt' => $faker->numberBetween(9, 30)
		];
	});
