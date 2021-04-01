<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HTTP\Requests\RegistrationRequest;
use App\Models\Account;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Session\Session;
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
    // public function index()
    // {
    //   $login = DB::table('accounts')->get('login');
  
    //   return view('checklogin', ['login' => $login]);
    // }
    public function index(Request $req) {
        // $login = $request->session()->all();
        // dump($login);
        // return view('checklogin', ['login' => $login]);
        $login = $req->input();
        $req->session()->put('logincheck', $login['logincheck']);
        echo session('logincheck');
        return redirect("profile");
    }
    
}


