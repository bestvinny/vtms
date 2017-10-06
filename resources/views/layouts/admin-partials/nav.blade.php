        <div id="sidebar-wrapper">
            <aside id="sidebar">
                <ul id="sidemenu" class="sidebar-nav">
                    <li>
                        <a href="#">
                            <span class="sidebar-icon"><i class="fa fa-home"></i></span>
                            <span class="sidebar-title">GENERAL</span>
                        </a>
                    </li>
                    <li>
                        <a class="accordion-toggle collapsed toggle-switch" data-toggle="collapse" href="#submenu-1">
                            <span class="sidebar-icon"><i class="fa fa-wrench"></i></span>
                            <span class="sidebar-title">ADMINISTRATION</span>
                            <b class="caret"></b>
                        </a>
                        <ul id="submenu-1" class="panel-collapse collapse panel-switch" role="menu">
                            <li><a href="{{ route('showusers') }}"><i class="fa fa-users"></i>Users</a></li>
                            <li><a href="{{ route('viewvehicle') }}"><i class="fa fa-car"></i>Vehicles</a></li>
                            <li><a href="{{ route('viewgroup') }}"><i class="fa fa-users"></i>Groups</a></li>
                        </ul>
                    </li>

                     <li>
                        <a class="accordion-toggle collapsed toggle-switch" data-toggle="collapse" href="#submenu-2">
                            <span class="sidebar-icon"><i class="fa fa-tasks"></i></span>
                            <span class="sidebar-title">TASKS</span>
                            <b class="caret"></b>
                        </a>
                        <ul id="submenu-2" class="panel-collapse collapse panel-switch" role="menu">
                            <li><a href="{{ route('showapprove') }}"><i class="fa fa-users"></i>Approve</a></li>
                            <li><a href="{{ route('showassign') }}"><i class="fa fa-car"></i>Assign</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#">
                            <span class="sidebar-icon"><i class="fa fa-question-circle"></i></span>
                            <span class="sidebar-title">ISSUES</span>
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
