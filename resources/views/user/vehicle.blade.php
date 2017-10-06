@extends('layouts.user-main')

@section('content')
   
   <div class="container" style="margin-top:10px;>
    <div class="row">
        <div class="col-md-10 col-md-offset-0">
            <div class="panel panel-default">

              <div class="panel-heading"><h3>View vehicle</h3></div>
                <div class="panel-body">

                @if(Session::has('message'))
                        <h3 style="color: green;"> {{ Session::get('message') }} </h3>
                    @endif
                    <div>

                   <h4>You are currently assigned the vehicle below:</h3>
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

                          <tr>
                            <td>{{ $vehicle->model }}</td>
                            <td>{{ $vehicle->color }}</td>
                            <td>{{ $vehicle->reg_no }}</td>                               
                            <td>  
                            <a href="{{ route('showtransfer',$vehicle->id) }}" class="button btn btn-success">Transfer</a>
                            </td>
                          </tr>              

                        </tbody>
                      </table>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
     
@endsection