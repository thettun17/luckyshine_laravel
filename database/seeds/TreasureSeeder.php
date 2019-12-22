<?php

use App\Moneyvalue;
use App\Treasure;
use Illuminate\Database\Seeder;

class TreasureSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		factory(Treasure::class , 5)->create()->each(function ($treasure) {
				$treasure->moneyvalues()->save(factory(Moneyvalue::class )->create());
			});
	}
}
