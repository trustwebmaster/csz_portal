<div class="left-side-menu">
    <div class="slimscroll-menu">
        <!-- User box -->

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul class="metismenu" id="side-menu">

                <li class="menu-title">Navigation</li>

                <li>
                    <a href="/member_dashboard">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span> Dashboard </span>
                    </a>
                </li>

                <li>
                    @if(Auth::user()->status == 'pending')
                        <a href="#custom-modal"
                           class="btn btn-primary btn-sm waves-effect" data-animation="makeway" data-plugin="custommodal" data-overlayColor="#36404a">
                            <i class="nav-icon fas fa-user-plus"></i>
                            <span> My Profile </span>
                        </a>
                    @else
                    <a href="/member_profile">
                        <i class="nav-icon fas fa-user-plus"></i>
                        <span> My Profile </span>
                    </a>
                    @endif
                </li>
                <li>
                    <a href="#custom-modal"
                       class="btn btn-primary btn-sm waves-effect" data-animation="makeway" data-plugin="custommodal" data-overlayColor="#36404a">
                        <i class="nav-icon fas fa-user-plus"></i>
                        <span> Membership Details </span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- End Sidebar -->
        <div class="clearfix"></div>
    </div>
</div>
