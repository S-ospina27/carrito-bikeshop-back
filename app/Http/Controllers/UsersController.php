<?php

namespace App\Http\Controllers;

use App\Models\UsersModel;
use Database\Class\Bikeshop\Users;

class UsersController {

	private UsersModel $usersModel;

	public function __construct() {
		$this->usersModel = new UsersModel();
	}

	public function create() {
		$responseCreate = $this->usersModel->createDB(Users::formFields()->setUsersPassword(request->users_identification_number));

		if ($responseCreate === "database-error") {
			return response->error("Ocurrio un error al registrar al usuario");
		}

		return response->success("Usuario registrado correctamente");
	}

}