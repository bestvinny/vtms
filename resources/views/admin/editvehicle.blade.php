 @extends('layouts.admin-main')

@section('content')
   
   <div class="container" style="margin-top:10px;>
    <div class="row">
        <div class="col-md-10 col-md-offset-0">
            <div class="panel panel-default">        

            <div class="panel-heading"><h3>Edit Vehicle</h3></div>
                <div class="panel-body">

                        <form role="form" class="form-horizontal" method="post" action=" {{ route('updatevehicle',$vehicle->id) }} ">

                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <div class="form-group">
                                    <label for="model" class="col-sm-3 control-label">
                                        Model</label>
                                    <div class="col-sm-9">
                                     <div style="color: red;">
                                         {!! $errors->has('model')?$errors->first('model'):'' !!}
                                    </div>
                                        <input type="text" class="form-control" name="model" value=" {{ $vehicle->model }} " />
                                    </div>
                                </div>

                                 <div class="form-group">
                                    <label class="col-sm-3 control-label">
                                        Color</label>
                                    <div class="col-sm-9">
                                    <div style="color: red;">
                                         {!! $errors->has('color')?$errors->first('color'):'' !!}
                                    </div>
                                        <input type="text" class="form-control"  name="color" value="{{ $vehicle->color }}" />
                                    </div>
                                </div>

                                 <div class="form-group">
                                    <label class="col-sm-3 control-label">
                                        Registration Number</label>
                                    <div class="col-sm-9">
                                    <div style="color: red;">
                                         {!! $errors->has('reg_no')?$errors->first('reg_no'):'' !!}
                                    </div>
                                        <input type="text" class="form-control" name="reg_no" value="{{ $vehicle->reg_no }}" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">
                                        Description</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="description">{{ $vehicle->description }}</textarea>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-sm-3">
                                    </div>
                                    <div class="col-sm-9">
                                        <button type="submit" class="btn btn-success btn-sm">
                                            Update</button>
                                    </div>
                                </div>
                                </form>
                </div>
            </div>
        </div>
    </div>
</div>
     
@endsection

 