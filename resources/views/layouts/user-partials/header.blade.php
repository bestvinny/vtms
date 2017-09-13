        <header>
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">VTMS</a>
                    </div>
                    <div id="navbar-collapse" class="collapse navbar-collapse">
                        <form class="navbar-form navbar-left" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                                </span>
                            </div>
                        </form>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a id="flag" href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="http://www.country-dialing-codes.net/img/png-country-4x2-fancy-res-1280x960/ke.png" alt="English" width="28px" height="18px">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-flag" role="menu">
                                    <li>
                                        <a href="#">
                                            <img src="http://www.country-dialing-codes.net/img/png-country-4x2-fancy-res-1280x960/ke.png" alt="Kenya" width="28px" height="18px">
                                            <span>Kenya</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a id="user-profile" href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="http://lorempixel.com/100/100/people/9/" class="img-responsive img-thumbnail img-circle"> Username <b class="fa fa-angle-down"></b></a>
                                <ul class="dropdown-menu dropdown-block" role="menu">
                                    <li><a href="#"><i class="fa fa-fw fa-pencil"></i>Edit Profile</a></li>
                                    <li><a href="#"><i class="fa fa-fw fa-key"></i>Change Password</a></li>
                                    <li class="divider"></li>
                                    <li><a href="{{route('userlogout')}}"><i class="fa fa-fw fa-power-off"></i>Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>