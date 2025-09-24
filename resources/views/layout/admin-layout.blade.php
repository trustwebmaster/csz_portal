<div class="left-side-menu">
    <div class="slimscroll-menu">
        <!-- User box -->

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul class="metismenu" id="side-menu">

                <li class="menu-title">Adminstrator</li>

                <li>
                    <a href="/admin">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span> Dashboard </span>
                    </a>
                </li>
                <li class="pcoded-hasmenu">
                    <a href="#">
                        <i class="nav-icon fas fa-users"></i>
                        <span> Members </span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('p-members') }}">
                                <i class="nav-icon fas fa-user-plus"></i>
                                <span>Pending Approvals </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="nav-icon fas fa-users"></i>
                        <span> Membership Details </span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- End Sidebar -->
        <div class="clearfix"></div>
    </div>
</div>
