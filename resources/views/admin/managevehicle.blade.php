@extends('layouts.admin-main')

@section('content')
   
   <div class="container" style="margin-top:10px;>
    <div class="row">
        <div class="col-md-10 col-md-offset-0">
            <div class="panel panel-default">

                <div class="panel-body">
                    <div>

                     @if(Session::has('message'))
                        <h3 style="color: green;"> {{ Session::get('message') }} </h3>
                    @endif

                    <div>
                <a href=" {{ route('showaddvehicle') }} "><button class="button btn btn-primary pull-right" style="margin-bottom:5px;">Add new</button></a>

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
                            <th>Model</th>
                            <th>Color</th>
                            <th>Registration Number</th>
                            <th colspan="2">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($vehicles as $vehicle)
                          <tr>
                            <td>{{ $vehicle->model }}</td>
                            <td>{{ $vehicle->color }}</td>
                            <td>{{ $vehicle->reg_no }}</td>
                            <td>  
                            <a href="{{ route('editvehicle',$vehicle->id) }}" class="button btn btn-success">Edit</a>
                            </td>
                            <td>                                 
                              <form action=" {{ route('delete',$vehicle->id) }} " method="post">
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