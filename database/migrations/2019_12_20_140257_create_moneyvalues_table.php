<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoneyvaluesTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('moneyvalues', function (Blueprint $table) {
				$table->bigIncrements('id');
				$table->unsignedBigInteger('treasure_id')->nullable();
				$table->foreign('treasure_id')->references('id')->on('treasures');
				$table->integer('amt');
				$table->timestamps();
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('moneyvalues');
	}
}
