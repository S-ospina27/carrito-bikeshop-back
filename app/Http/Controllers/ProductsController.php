<?php

namespace App\Http\Controllers;

use App\Models\´ProductsModel; 

class ProductsController {

	private ´ProductsModel $´ProductsModel;

	public function __construct() {
		$this->´ProductsModel = new ´ProductsModel();
	}

	public function read() {

		return $this->´ProductsModel->readDB();
	}

}