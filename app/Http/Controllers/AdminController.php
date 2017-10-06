<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Admin;
use App\User;
use App\Vehicle;
use App\Group;

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


    

     public function showform()
    {
        return view('admin.admin');
    }



    // Manage users methods

    public function showusers()
    {
        $users = User::all();
        $groups = Group::all();
        return view('admin.manageuser',compact('users','groups'));
    }


    public function adduser()
    {
        $users = User::all();
        $groups = Group::all();
        return view('admin.adduser',compact('users','groups'));
    }


    public function insertuser(Request $request)
        {

         $this->validate($request,[
               'firstname'=>'Required',
               'middlename'=>'Required',
               'lastname'=>'Required',
               'gender'=>'Required',
               'phone_no'=>'Required',
               'id_no'=>'Required',
               'group_id'=>'Required',
               'email'=>'Required',
               'password'=>'Required'
            ]);
         $user = $request->all();
         User::create($user);
         return redirect('admin/users')->with('message','User added successfully!');
    }

    public function edituser($id)
    {
        $groups = Group::all();
        $user = User::findOrFail($id);
        return view('admin.edituser',compact('user','groups'));
    }


    public function updateuser(Request $request, $id)
    {
             $this->validate($request,[
               'firstname'=>'Required',
               'middlename'=>'Required',
               'lastname'=>'Required',
               'gender'=>'Required',
               'phone_no'=>'Required',
               'id_no'=>'Required',
               'group_id'=>'Required',
               'email'=>'Required',
               'password'=>'Required'
            ]);

        $user=User::findOrFail($id);
        $user->firstname = $request->firstname;
        $user->middlename = $request->middlename;
        $user->gender = $request->gender;
        $user->phone_no = $request->phone_no;
        $user->phone_no = $request->phone_no;
        $user->id_no = $request->id_no;
        $user->group_id = $request->group_id;
        $user->email = $request->email;
        $user->password = $request->becrypt('password');
        $user->save();
        return redirect('admin/users')->with('message','User updated successfully!');
        
    }


     public function destroyuser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('/admin/users')->with('message','User deleted successfully!');
    }

   


    // Manage vehicle methods

    public function viewvehicle()
    {
        $vehicles = Vehicle::all();
        return view('admin.managevehicle',compact('vehicles'));
    }


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

    public function searchvehicle(Request $request){
        $input = $request->model;
        $search = Vehicle::where('model', 'LIKE', '%'.$input.'%')->first();
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



     // Manage Groups methods

    public function viewgroup()
    {
        $groups = Group::all();
        return view('admin.managegroup',compact('groups'));
    }


    public function addgroupform()
    {
        return view('admin.addgroup',compact('group'));
    }


    public function insertgroup(Request $request)
        {

         $this->validate($request,[
               'group_name'=>'Required'
            ]);

         $group = $request->all();
         Group::create($group);
         return redirect('admin/group')->with('message','Group added successfully!');
    }


    public function editgroup($id)
    {
        $group = Group::findOrFail($id);
        return view('admin.editgroup',compact('group'));
    }


    public function updategroup(Request $request, $id)
    {
             $this->validate($request,[
               'group_name'=>'Required'
            ]);

        $vehicle=Group::findOrFail($id);
        $vehicle->group_name = $request->group_name;
        $vehicle->save();
        return redirect('admin/group')->with('message','Group updated successfully!');
        
    }


     public function destroygroup($id)
    {
        $group = Group::findOrFail($id);
        $group->delete();
        return redirect('/admin/group')->with('message','Group deleted successfully!');
    }



    // Approve Vehicle
    public function showapprove()
    {
        $approves = Group::where([ ['is_assigned',1],['is_approved',0] ])->get();
            return view('admin.showapprove',compact('approves'));
    }

    public function approve($id)
    {
        $approve = Group::findOrFail($id);
        return view('admin.approve',compact('approve'));
    }

    public function approve_to(Request $request,$id)
    {
        $approve = Group::findOrFail($id);
        $approve->vehicle_id = $approve->v_id;
        $approve->v_id = $approve->v_id;
        $approve->is_approved = 1;
        $approve->save();

        //$approvemail = User::where($id);


        return redirect('/admin/showapprove')->with('message','Vehicle approved successfully!');
    }

    public function reject($id)
    {
        $reject = Group::findOrFail($id);
         return view('admin.reject',compact('reject'));
    }

    public function reject_to(Request $request,$id)
    {
        $reject = Group::where('id', $request->id)->first();
        $reject->is_assigned = 0;
        $reject->is_approved = 0;
        $reject->save();
        return redirect('/admin/showapprove')->with('message','Vehicle rejected!');
    }

    
    // Assign Vehicle
    public function showassign()
    {
        $vehicles = Vehicle::all();
        return view('admin.showassign',compact('vehicles'));
    }

    public function assign($id)
    {
        $vehicle = Vehicle::findOrFail($id);
        $groups = Group::all();
        return view('admin.assign',compact('vehicle','groups'));
    }

    public function assign_to(Request $request,$group_name)
    {

        $this->validate($request,[
               'group_name'=>'Required'
            ]);

            $vehicle = Vehicle::all();
            $groups = Group::where([ ['is_assigned',0],['is_approved',0] ])->get();
            $assign = Group::where('group_name', $request->group_name)->first();
            $assign->vehicle_id = $request->id;
            $assign->v_id = $request->id;
            $assign->is_assigned = 1;
            $assign->is_approved = 1;
            $assign->vehicle_id = $request->id; 
            $assign->save();
        return redirect('/admin/showassign')->with('message','Vehicle assigned successfully!');
    }


    public function remove($id)
    {
        $vehicle = Vehicle::findOrFail($id);
        return view('admin.remove',compact('vehicle'));
    }


     public function removed(Request $request,$id)
    {

            $remove = Group::where('id', $request->id)->first();
            $remove->is_assigned = 0;
            $remove->is_approved = 0;
            $remove->vehicle_id = $request->id; 
            $remove->save();
        return redirect('/admin/showassign')->with('message','Vehicle assigned successfully!');
    }




}
