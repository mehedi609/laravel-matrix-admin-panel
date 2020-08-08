<?php

namespace App\Http\Controllers;

use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth')->except('login');
  }

  public function login(Request $request)
  {
    if ($request->isMethod('post')) {
      $email = $request->email;
      $password = $request->password;

      $credentials = ['email' => $email, 'password' => $password, 'admin' => 1];

      if (Auth::attempt($credentials)) {
        Toastr::success('You have logged in successfully', 'Login Success');
//        Session::put('adminSession', $email);
        return redirect(route('admin.dashboard'));
      } else {
        Toastr::error('Username or Password is Incorrect!', 'Login Error');
        return redirect()->back();
      }

    }
    return view('admin.admin_login');
  }

  public function dashboard()
  {
    /*if (Session::has('adminSession')) {
      return view('admin.dashboard');
    } else {
      Toastr::warning('Please login to access', 'Access Denied');
      return redirect(route('admin.login'));
    }*/

    return view('admin.dashboard');
  }

  public function logout()
  {
    Session::flush();
    Toastr::info('You are logged out!', 'Log Out');
    return redirect(route('admin.login'));
  }
}
