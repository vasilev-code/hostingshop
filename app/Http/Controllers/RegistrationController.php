<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HTTP\Requests\RegistrationRequest;
use App\Models\Account;
class RegistrationController extends Controller
{
    public function submit(RegistrationRequest $req) {
        $account = new Account();
        $account -> login = $req->input("login");
        $account -> password = $req->input("password");
        $account -> repeatPassword = $req->input("repeatPassword");
        $account -> email = $req->input("email");

        $account -> save();

        return redirect()-> route("main");
    }
}
