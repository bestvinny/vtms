@extends('layouts.admin-main')

@section('content')
   
   <div class="container" style="margin-top:10px;>
    <div class="row">
        <div class="col-md-10 col-md-offset-0">
            <div class="panel panel-default">


                <div class="panel-body">
                    <div>
                      <table class="table table-striped table-bordered">
                        <thead>

                        @foreach($vehicles as $vehicle)
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
                            <a href="" class="button btn btn-success">Assign</a>
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