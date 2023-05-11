<?php

namespace App\Http\Controllers\Auth;

use App\Models\Auth\LoginModel;
use Database\Class\Bikeshop\Users;

class LoginController {

    private LoginModel $loginModel;

    public function __construct() {
        $this->loginModel = new LoginModel();
    }

    public function auth() {
        $responseExist = $this->loginModel->authDB( ( new Users)->setUsersEmail(request->users_email)->setUsersPassword(request->users_password));

        if ($responseExist->cont > 0) {

            return response->success("Ingreso exitoso",$responseExist);
        }

        return response->error("su contraseña o email estan errados");
    }

}