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


                      <table class="table table-striped table-bordered">
                        <thead>
                          <tr>
                            <th>Model</th>
                            <th>Color</th>
                            <th>Registration Number</th>
                          </tr>
                        </thead>
                        <tbody>
                        
                        @foreach($groups as $group)
                          <tr>
                            <td>{{ $group->vehicle->model }}</td>
                            <td>{{ $group->vehicle->color }}</td>
                            <td>{{ $group->vehicle->reg_no }}</td>                               
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