@extends('layouts.admin-main')

@section('content')
   
   <div class="container" style="margin-top:10px;>
    <div class="row">
        <div class="col-md-10 col-md-offset-0">
            <div class="panel panel-default">
              <div class="panel-heading"><h3>Manage users</h3></div>
                <div class="panel-body">
                    <div>

                    <div>

                    @if(Session::has('message'))
                        <h3 style="color: green;"> {{ Session::get('message') }} </h3>
                    @endif

                <a href=" {{ route('showadduser') }} "><button class="button btn btn-primary pull-right" style="margin-bottom:5px;">Add new</button></a>

                <form class="navbar-form navbar-left" style="padding-left: 1px; role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                                </span>
                            </div>
                        </form>

              </div>
                      <table class="table table-striped table-bordered">
                        <thead>
                          <tr>
                            <th></th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Group Name</th>
                            <th colspan="2">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                          <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->firstname }} {{ $user->middlename }} {{ $user->lastname }}</td>
                            <td>{{ $user->gender }}</td>
                            <td>{{ $user->group_name }}</td>
                            <td>  
                            <a href="{{ route('edituser',$user->id) }}" class="button btn btn-success">Edit</a>
                            </td>
                            <td>                                 
                              <form action="{{ route('deleteuser',$user->id) }}" method="post">
                              {{ csrf_field() }}
                              {{ method_field('delete') }}
                              <input type="submit" class="button btn btn-danger" value="Delete">
                              </form>
                            </td>        
                          </tr>
                          @endforeach

                        </tbody>
                      </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
     
@endsection