@extends('layouts.user-main')

@section('content')
   
   <div class="container" style="margin-top:10px;>
    <div class="row">
        <div class="col-md-10 col-md-offset-0">
            <div class="panel panel-default">

              <div class="panel-heading"><h3>View Vehicle</h3></div>
                <div class="panel-body">

                @if(Session::has('message'))
                        <h3 style="color: green;"> {{ Session::get('message') }} </h3>
                    @endif
                    <div>

                      <h3>No vehicle assigned</h3>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
     
@endsection