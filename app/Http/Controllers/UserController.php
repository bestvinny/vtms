<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
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


        public function showvehicle($id)
    {
        $vehicle = Vehicle::where('id',$id)->first();
        return view('user.vehicle',compact('vehicle'));
    }

    public function showtransfer($id)
    {
        $vehicle = Vehicle::where('id',$id)->first();
        $groups = Group::where([ ['is_assigned',0],['is_approved',0] ])->get();
        return view('user.transfer',compact('vehicle','groups'));
    }


        public function transfer(Request $request,$group_name)
    {

        $this->validate($request,[
               'group_name'=>'Required'
            ]);

        $transfer = Group::where('group_name', Auth::user()->group->group_name)->first();
        $transfer->vehicle_id = null;
        $transfer->v_id = null;
        $transfer->is_assigned = 0;
        $transfer->is_approved = 0;
        $transfer->save();

        $transfered = Group::where('group_name', $request->group_name)->first();
        $transfered->v_id = $request->id;
        $transfered->is_assigned = 1;
        $transfered->is_approved = 0;
        $transfered->save();

        return redirect('/user/vehicle')->with('message','Vehicle transfered successfully!');
    }

    public function novehicle()
    {
        return view('user.novehicle');
    }

     


}
