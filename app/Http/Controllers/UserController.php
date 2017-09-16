<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Vehicle;

class UserController extends Controller
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
     * @return \Illuminate\Http\Response
     */

     public function user()
    {
        return view('user.user');
    }

    public function showvehicle()
    {
       // $vehicles = Vehicle::all();
       // return view('user.vehicle',compact('vehicles'));

        $vehicles = User::join('vehicles', 'vehicles.user_id', 'users.id')->get();
        $vehicle = User::join('vehicles', 'vehicles.user_id', 'users.id')->first();
        return view('user.vehicle',compact('vehicles','vehicle'));
    }

}
