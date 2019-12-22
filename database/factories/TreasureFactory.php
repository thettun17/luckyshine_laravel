<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Treasure;
use Faker\Generator as Faker;

$factory->define(Treasure::

class , function (Faker $faker) {
		return [
			'latitude'  => $faker->randomFloat(3, 4, 1000),
			'longitude' => $faker->randomFloat(3, 4, 1000),
			'name'      => $faker->sentence(6),
		];
	});
