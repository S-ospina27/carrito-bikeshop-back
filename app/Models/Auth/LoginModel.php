<?php

namespace App\Models\Auth;

use Database\Class\Bikeshop\Users;
use LionSQL\Drivers\MySQL as DB;

class LoginModel {

	public function __construct() {

	}

  public function authDB(Users $users) {
        return DB::table('users')
            ->select(
                DB::as(DB::count('*'), "cont"),
                DB::column('idusers'),
                DB::column('users_name'),
                DB::column('users_identification_number'),
                DB::column('users_email'),
                DB::column('users_password')
            )
            ->where(DB::equalTo("users_email"), $users->getUsersEmail())
            ->and(DB::equalTo("users_password"),$users->getUsersPassword())
            ->get();
    }

}
