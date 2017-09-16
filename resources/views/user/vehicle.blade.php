@extends('layouts.user-main')

@section('content')
   
   <div class="container" style="margin-top:10px;>
    <div class="row">
        <div class="col-md-10 col-md-offset-0">
            <div class="panel panel-default">


                <div class="panel-body">
                    <div>
 <!-- Transfer pop up form -->
<!-- Large modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×</button>
                <h4 class="modal-title" id="myModalLabel">
                    Transfer Vehicle</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12" style="border-right: 1px dotted #C2C2C2;padding-right: 30px;">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="transfer">
                                <form role="form" class="form-horizontal">
                                <div class="form-group">
                                    <label for="group_name" class="col-sm-2 control-label">
                                        Current Group</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" disabled="true" id="group_name" value="{{ $vehicle->group_name }}" />
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                <label for="group_name" class="col-sm-2 control-label">
                                        Next Group</label>
                                    <div class="col-sm-10">
                                    <select id="market_id">
                                          <option value="0" disabled="true" selected="true">-Select-</option>

                                        @foreach($vehicles as $vehicle)
                                          <option value="{{ $vehicle->id }}" >{{ $vehicle->group_name }}</option>
                                        @endforeach 
                                    </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            Submit</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


  <!-- End of Transfer pop up form -->

                      <table class="table table-striped table-bordered">
                        <thead>

                        @foreach($vehicles as $vehicle)
                          <tr>
                            <th>Model</th>
                            <th>Color</th>
                            <th>Registration Number</th>
                            <th>Group using</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>{{ $vehicle->model }}</td>
                            <td>{{ $vehicle->color }}</td>
                            <td>{{ $vehicle->reg_no }}</td>
                            <td>{{ $vehicle->group_name }}</td>
                            <td>  
                            <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Transfer</button>
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