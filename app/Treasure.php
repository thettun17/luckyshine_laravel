<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Treasure extends Model {
	protected $fillable = ['latitude', 'longitude', 'name'];

	public function moneyvalues() {
		return $this->hasOne('App\Moneyvalue');
	}
}
