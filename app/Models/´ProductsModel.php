<?php

namespace App\Models;

use LionSQL\Drivers\MySQL as DB;

class ´ProductsModel {

	public function __construct() {
		
	}

	public function readDB() {
		return DB::table("products")->select()->getAll();
	}


}