        <div id="sidebar-wrapper">
            <aside id="sidebar">
                <ul id="sidemenu" class="sidebar-nav">
                    <li>
                        <a href="{{ route('user') }}">
                            <span class="sidebar-icon"><i class="fa fa-home"></i></span>
                            <span class="sidebar-title">HOME</span>
                        </a>
                    </li>
                    <li>
                        <a class="accordion-toggle collapsed toggle-switch" data-toggle="collapse" href="#submenu-2">
                            <span class="sidebar-icon"><i class="fa fa-dashboard"></i></span>
                            <span class="sidebar-title">MANAGEMENT</span>
                            <b class="caret"></b>
                        </a>
                        <ul id="submenu-2" class="panel-collapse collapse panel-switch" role="menu">
                            <li><a href="{{ route('showvehicle',Auth::user()->vehicle_id) }}"><i class="fa fa-caret-right"></i>Vehicle</a></li>
                            <li><a href="{{ route('showgroup') }}"><i class="fa fa-caret-right"></i>Groups</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <span class="sidebar-icon"><i class="fa fa-question-circle"></i></span>
                            <span class="sidebar-title">HELP</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="sidebar-icon"><i class="fa fa-cog"></i></span>
                            <span class="sidebar-title">SETTINGS</span>
                        </a>
                    </li>
                </ul>
            </aside>            
        </div>
        <main id="page-content-wrapper" role="main">
        </main>
