 @extends('layouts.admin-main')

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
                                                            <div class="tab-pane active" id="Login">
                                                                <form role="form" class="form-horizontal">
                                                                <div class="form-group">
                                                                    <label for="email" class="col-sm-2 control-label">
                                                                        Current Group</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="email" class="form-control" id="email1" placeholder="Email" />
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputPassword1" class="col-sm-2 control-label">
                                                                        Next Group</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email" />
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


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
     
@endsection

 