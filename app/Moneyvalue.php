<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Moneyvalue extends Model {
	protected $fillable = ['treasure_id', 'amt'];

	public function treasures() {
		return $this->belongTo('App\Treasure');
	}
}
