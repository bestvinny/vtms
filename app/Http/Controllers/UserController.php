<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Vehicle;
use App\Group;


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


        public function showvehicle($vehicle_id)
    {
        $vehicle = User::where('vehicle_id',$vehicle_id)->first();
        return view('user.vehicle',compact('vehicle'));
    }

    public function showtransfer($vehicle_id)
    {
        $vehicle = User::where('vehicle_id',$vehicle_id)->first();
        $groups = Group::where([ ['is_assigned',0],['is_approved',0] ])->get();
        return view('user.transfer',compact('vehicle','groups'));
    }

     


}
