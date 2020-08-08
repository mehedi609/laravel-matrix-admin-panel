<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
  public function login(Request $request)
  {
    if ($request->isMethod('post')) {
      $email = $request->email;
      $password = $request->password;

      $credentials = ['email' => $email, 'password' => $password, 'admin' => 1];

      if (Auth::attempt($credentials)) {
        echo 'success';
        die();
      } else {
        echo "fail";
        die();
      }

    }
    return view('admin.admin_login');
  }
}
