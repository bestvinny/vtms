 @extends('layouts.admin-main')

@section('content')
   
   <div class="container" style="margin-top:10px;>
    <div class="row">
        <div class="col-md-10 col-md-offset-0">
            <div class="panel panel-default">
             <div class="panel-heading"><h3>Reject Vehicle</h3></div>
                <div class="panel-body">

                        <form role="form" class="form-horizontal" method="post" action=" {{ route('reject_to',$reject->id) }} ">

                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                             

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">
                                        Group Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="group_name" value="{{ $reject->group_name }}" disabled="true"/>
                                    </div>
                                </div>
        
                                
                                <div class="row">
                                    <div class="col-sm-3">
                                    </div>
                                    <div class="col-sm-9">
                                        <button type="submit" class="btn btn-danger">
                                            Reject</button>
                                    </div>
                                </div>
                                </form>
                </div>
            </div>
        </div>
    </div>
</div>
     
@endsection

 