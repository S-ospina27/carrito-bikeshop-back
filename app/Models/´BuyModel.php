<?php

namespace App\Models;

use LionSQL\Drivers\MySQL as DB;

class ´BuyModel {

	public function __construct() {
		
	}

	public function createDB(array $rows) {
		return DB::table("buy")
		->bulk([
			"users_identification_number",
			"idproducts",
			"buy_date",
			"buy_code"
		],$rows)->execute();
	}

	public function readDB() {

		return DB::view("buys")->select()->get();
	}


}