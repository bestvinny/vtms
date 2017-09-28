 @extends('layouts.admin-main')

@section('content')
   
   <div class="container" style="margin-top:10px;>
    <div class="row">
        <div class="col-md-10 col-md-offset-0">
            <div class="panel panel-default">
             <div class="panel-heading"><h3>Assign Vehicle</h3></div>
                <div class="panel-body">

                        <form role="form" class="form-horizontal" method="post" action=" {{ route('assign_to',$vehicle->id) }} ">

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
                                        Choose Group To Use</label>
                                        <div style="color: red;">
                                         {!! $errors->has('group_name')?$errors->first('group_name'):'' !!}
                                        </div>
                                    <div class="col-sm-9">
                                    <select name="group_name">
                                          <option value="0" disabled="true" selected="true">-Please Select-</option>

                                        @foreach($groups as $group)
                                          <option value="{{ $group->id }}">{{ $group->group_name }}</option>
                                        @endforeach 
                                    </select>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-sm-3">
                                    </div>
                                    <div class="col-sm-9">
                                        <button type="submit" class="btn btn-success">
                                            Assign</button>
                                    </div>
                                </div>
                                </form>
                </div>
            </div>
        </div>
    </div>
</div>
     
@endsection

 