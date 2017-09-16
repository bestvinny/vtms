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

                        @foreach($users as $user)
                          <tr>
                            <th></th>
                            <th>Group Name</th>
                            <th colspan="2">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->group_name }}</td>
                            <td>  
                             <a href="" class="button btn btn-success">Approve</a>
                            </td>
                            <td>                                 
                             <a href="" class="button btn btn-danger">Reject</a>
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