 @extends('layouts.admin-main')

@section('content')
   
   <div class="container" style="margin-top:10px;>
    <div class="row">
        <div class="col-md-10 col-md-offset-0">
            <div class="panel panel-default">
             <div class="panel-heading"><h3>Edit Group</h3></div>
                <div class="panel-body">

                        <form role="form" class="form-horizontal" method="post" action=" {{ route('updategroup', $group->id) }} ">

                        {{ csrf_field() }}
                        {{ method_field('put') }}

                        <input type="hidden" name="vehicle_id" value="{{ 0 }}">

                                <div class="form-group">
                                    <label for="model" class="col-sm-3 control-label">
                                        Group Name</label>
                                    <div class="col-sm-9">
                                     <div style="color: red;">
                                         {!! $errors->has('group_name')?$errors->first('group_name'):'' !!}
                                    </div>
                                        <input type="text" class="form-control" name="group_name" value=" {{ $group->group_name }} " />
                                    </div>
                                </div>

                                 
                                
                                <div class="row">
                                    <div class="col-sm-3">
                                    </div>
                                    <div class="col-sm-9">
                                        <button type="submit" class="btn btn-primary">
                                            Save</button>
                                    </div>
                                </div>
                                </form>
                </div>
            </div>
        </div>
    </div>
</div>
     
@endsection

 