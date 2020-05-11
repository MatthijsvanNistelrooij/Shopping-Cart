<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');

    }
    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
      }
      public function getSignin() {
          return view ('user.signin');

      }
      public function postSignin(Request $request) {
          $this->validate($request, [
              'email' => 'email|required',
              'password' => 'required|min:4',
          ]);
      }
}


