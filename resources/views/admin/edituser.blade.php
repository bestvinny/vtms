@extends('layouts.admin-main')

@section('content')
   
   <div class="container" style="margin-top:10px;>
    <div class="row">
        <div class="col-md-10 col-md-offset-0">
            <div class="panel panel-default">
             <div class="panel-heading"><h3>Update User</h3></div>
                <div class="panel-body">

                        <form role="form" class="form-horizontal" method="post" action=" {{ route('updateuser',$user->id) }} ">

                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                                <div class="form-group">
                                    <label for="firstname" class="col-sm-3 control-label">
                                        First Name</label>
                                    <div class="col-sm-9">
                                     <div style="color: red;">
                                         {!! $errors->has('firstname')?$errors->first('firstname'):'' !!}
                                    </div>
                                        <input type="text" class="form-control" name="firstname" value=" {{ $user->firstname }} "/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="middlename" class="col-sm-3 control-label">
                                        Middle Name</label>
                                    <div class="col-sm-9">
                                     <div style="color: red;">
                                         {!! $errors->has('middlename')?$errors->first('middlename'):'' !!}
                                    </div>
                                        <input type="text" class="form-control" name="middlename" value=" {{ $user->middlename }} "/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="lastname" class="col-sm-3 control-label">
                                        Last Name</label>
                                    <div class="col-sm-9">
                                     <div style="color: red;">
                                         {!! $errors->has('lastname')?$errors->first('lastname'):'' !!}
                                    </div>
                                        <input type="text" class="form-control" name="lastname" value=" {{ $user->lastname }} "/>
                                    </div>
                                </div>

                                 <div class="form-group">
                                    <label class="col-sm-3 control-label">
                                        Gender</label>
                                    <div class="col-sm-9">
                                    <div style="color: red;">
                                         {!! $errors->has('gender')?$errors->first('gender'):'' !!}
                                    </div>
                                        <input type="text" class="form-control"  name="gender" value=" {{ $user->gender }} "/>
                                    </div>
                                </div>

                                 <div class="form-group">
                                    <label class="col-sm-3 control-label">
                                         Phone Number</label>
                                    <div class="col-sm-9">
                                    <div style="color: red;">
                                         {!! $errors->has('phone_no')?$errors->first('phone_no'):'' !!}
                                    </div>
                                        <input type="text" class="form-control" name="phone_no" value=" {{ $user->phone_no }} "/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">
                                         ID Number</label>
                                    <div class="col-sm-9">
                                    <div style="color: red;">
                                         {!! $errors->has('id_no')?$errors->first('id_no'):'' !!}
                                    </div>
                                        <input type="text" class="form-control" name="id_no" value=" {{ $user->id_no }} "/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">
                                        Group Name</label>
                                    <div class="col-sm-9">
                                     <div style="color: red;">
                                         {!! $errors->has('group_id')?$errors->first('group_id'):'' !!}
                                    </div>
                                        <select name="group_id">
                                          <option disabled="true" selected="true">-Please Select-</option>

                                        @foreach($groups as $group)
                                          <option value="{{ $group->id }}">{{ $group->group_name }}</option>
                                        @endforeach 
                                    </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="email" class="col-sm-3 control-label">
                                        Email</label>
                                    <div class="col-sm-9">
                                     <div style="color: red;">
                                         {!! $errors->has('email')?$errors->first('email'):'' !!}
                                    </div>
                                        <input type="text" class="form-control" name="email" value=" {{ $user->email }} "/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password" class="col-sm-3 control-label">
                                        Password</label>
                                    <div class="col-sm-9">
                                     <div style="color: red;">
                                         {!! $errors->has('password')?$errors->first('password'):'' !!}
                                    </div>
                                        <input type="password" class="form-control" name="password"/>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-sm-3">
                                    </div>
                                    <div class="col-sm-9">
                                        <button type="submit" class="btn btn-success">
                                            Update</button>
                                    </div>
                                </div>
                                </form>
                </div>
            </div>
        </div>
    </div>
</div>
     
@endsection

 