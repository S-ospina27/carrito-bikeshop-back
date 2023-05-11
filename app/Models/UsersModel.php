<?php

namespace App\Models;

use Database\Class\Bikeshop\Users;
use LionSQL\Drivers\MySQL as DB;

class UsersModel {

	public function __construct() {
		
	}

	public function createDB(Users $users) {
		return DB::call("create_users",[
			$users->getUsersName(),
			$users->getUsersIdentificationNumber(),
			$users->getUsersEmail(),
			$users->getUsersPassword()
		])->execute();
	}

}