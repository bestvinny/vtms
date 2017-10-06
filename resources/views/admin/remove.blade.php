 @extends('layouts.admin-main')

@section('content')
   
   <div class="container" style="margin-top:10px;>
    <div class="row">
        <div class="col-md-10 col-md-offset-0">
            <div class="panel panel-default">
             <div class="panel-heading"><h3>Transfer Vehicle</h3></div>
                <div class="panel-body">

                        <form role="form" class="form-horizontal" method="post" action="{{ route('removed',$vehicle->id) }}">

                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                                <div class="form-group">
                                    <label for="group_name" class="col-sm-3 control-label">
                                        Model</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="model" value="{{ $vehicle->model }}" disabled="true"/>
                                    </div>
                                </div>

                                 <div class="form-group">
                                    <label class="col-sm-3 control-label">
                                        Color</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control"  name="color" value="{{ $vehicle->color }}" disabled="true"/>
                                    </div>
                                </div>

                                 <div class="form-group">
                                    <label class="col-sm-3 control-label">
                                        Registration Number</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="reg_no" value="{{ $vehicle->reg_no }}" disabled="true"/>
                                    </div>
                                </div>
   
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">
                                     Current Group Using</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="group_name" disabled="true" value="{{ $vehicle->group->group_name }}" />
                                    </div>
                                </div>
                               
                                
                                <div class="row">
                                    <div class="col-sm-3">
                                    </div>
                                    <div class="col-sm-9">
                                        <button type="submit" class="btn btn-danger">
                                            Remove</button>
                                    </div>
                                </div>
                                </form>
                </div>
            </div>
        </div>
    </div>
</div>
     
@endsection

 