<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Admin;
use App\User;
use App\Vehicle;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.admin');
    }

    public function viewvehicle()
    {
        $vehicles = Vehicle::all();
        return view('admin.managevehicle',compact('vehicles'));
    }

    public function showusers()
    {
        $users = User::all();
        return view('admin.manageuser',compact('users'));
    }

    public function approve()
    {
        $users = User::all();
        return view('admin.approve',compact('users'));
    }

    public function assign()
    {
        $vehicles = Vehicle::all();
        return view('admin.assign',compact('vehicles'));
    }

     public function showform()
    {
        return view('admin.admin');
    }

    public function adduser(Request $request)
        {

         $this->validate($request,[
               'firstname'=>'Required'
            ]);

         $users = $request->all();
         Market::create($users);
         return redirect('users')->with('message','Market added successfully!');
    }


    // Add vehicle methods
    public function addvehicle()
    {
        $vehicle = Vehicle::all();
        return view('admin.addvehicle',compact('vehicle'));
    }


    public function insert(Request $request)
        {

         $this->validate($request,[
               'model'=>'Required',
               'color'=>'Required',
               'reg_no'=>'Required'
            ]);

         $vehicle = $request->all();
         Vehicle::create($vehicle);
         return redirect('admin/vehicle')->with('message','Vehicle added successfully!');
    }

    public function edit($id)
    {
        $vehicle = Vehicle::findOrFail($id);
        return view('admin.editvehicle',compact('vehicle'));
    }


    public function update(Request $request, $id)
    {
             $this->validate($request,[
               'model'=>'Required',
               'color'=>'Required',
               'reg_no'=>'Required'
            ]);

        $vehicle=Vehicle::findOrFail($id);
        $vehicle->model = $request->model;
        $vehicle->color = $request->color;
        $vehicle->reg_no = $request->reg_no;
        $vehicle->save();
        return redirect('admin/vehicle')->with('message','Vehicle updated successfully!');
        
    }


     public function destroy($id)
    {
        $vehicle = Vehicle::findOrFail($id);
        $vehicle->delete();
        return redirect('/admin/vehicle')->with('message','Vehicle deleted successfully!');
    }

}
