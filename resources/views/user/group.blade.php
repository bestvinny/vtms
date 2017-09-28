@extends('layouts.user-main')

@section('content')
   
   <div class="container" style="margin-top:10px;>
    <div class="row">
        <div class="col-md-10 col-md-offset-0">
            <div class="panel panel-default">

              <div class="panel-heading"><h3>View Groups</h3></div>
                <div class="panel-body">

                @if(Session::has('message'))
                        <h3 style="color: green;"> {{ Session::get('message') }} </h3>
                    @endif
                    <div>


                      <table class="table table-striped table-bordered">
                        <thead>
                          <tr>
                            <th></th>
                            <th>Group Name</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                        
                        @foreach($vehicles as $vehicle)
                          <tr>
                            <td>{{ $vehicle->id }}</td>
                            <td>{{ $vehicle->group_name }}</td>                              
                            <td>  
                            <a href="{{ route('groupvehicle',$vehicle->id) }}" class="button btn btn-success">Check</a>
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