<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class AdminLoginController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin',['except' => ['logout']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginform()
    {
        return view('auth.admin-login');
    }

     public function login(Request $request)
    {
        //Validate form data
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required|min:6'
            ]);

        //Attempt to log the user
        if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember))
        {
           //If successful redirect to intended location
            return redirect()->intended(route('admin.panel'));
        }
        
        //If unsuccessful redirect to login
            return redirect()->back()->withInput($request->only('email','remember'));

    }

    public function logout()
    {

        Auth::guard('admin')->logout();

        return redirect('/');
    }
}
