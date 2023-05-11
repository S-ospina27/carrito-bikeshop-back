<?php

namespace App\Http\Controllers;

use App\Models\´BuyModel;
use Carbon\Carbon;

class BuyController {

	private ´BuyModel $´BuyModel;

	public function __construct() {
		$this->´BuyModel = new ´BuyModel();
	}

	public function create() {


		$rows = [];
		$count =0;
		$code =uniqid(uniqid());
		foreach (request->data as $key => $value) {

			$rows[] = [

				request->username,
				$key,
				Carbon::now()->format('Y-m-d'),
				$code
			];

		}
		$responseCreate = $this->´BuyModel->createDB($rows);

		if ($responseCreate->status === "database-error") {

			return $responseCreate;
			return error("Ocurrió un error al crear los usuarios");
		}
		$responserRead= $this->´BuyModel->readDB();
		return success("Se han registrado  compras correctamente",$responserRead);

	}


}