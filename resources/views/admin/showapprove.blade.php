@extends('layouts.admin-main')

@section('content')
   
   <div class="container" style="margin-top:10px;>
    <div class="row">
        <div class="col-md-10 col-md-offset-0">
            <div class="panel panel-default">
            <div class="panel-heading"><h3>Approve Vehicle</h3></div>
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
                            <th colspan="2">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($approves as $approve)
                          <tr>
                            <td>{{ $approve->id }}</td>
                            <td>{{ $approve->group_name }}</td>
                            <td>  
                             <a href="{{ route('approve',$approve->id) }}" class="button btn btn-success">Approve</a>
                            </td>
                            <td>                                 
                             <a href="{{ route('reject',$approve->id) }}" class="button btn btn-danger">Reject</a>
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