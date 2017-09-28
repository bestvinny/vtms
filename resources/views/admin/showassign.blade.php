@extends('layouts.admin-main')

@section('content')
   
   <div class="container" style="margin-top:10px;>
    <div class="row">
        <div class="col-md-10 col-md-offset-0">
            <div class="panel panel-default">
            <div class="panel-heading"><h3>Assign Vehicle</h3></div>
                <div class="panel-body">
                    <div>
                    @if(Session::has('message'))
                        <h3 style="color: green;"> {{ Session::get('message') }} </h3>
                    @endif
                      <table class="table table-striped table-bordered">
                        <thead>
                          <tr>
                            <th>Model</th>
                            <th>Color</th>
                            <th>Registration Number</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                         @foreach($vehicles as $vehicle)
                          <tr>
                            <td>{{ $vehicle->model }}</td>
                            <td>{{ $vehicle->color }}</td>
                            <td>{{ $vehicle->reg_no }}</td>
                            <td>  
                            <a href="{{ route('assign',$vehicle->id) }}" class="button btn btn-success">Assign</a>
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