<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">Menu</li>
                <li>
                    <a href="{{ route('admin') }}" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="menu-title" key="t-menu">Membership</li>

                <li>
                    <a href="{{ route('user.membership-renewal') }}" class="waves-effect">
                        <i class="bx bx-shield-quarter"></i>
                        <span>Membership Renewal</span>
                    </a>
                </li>

                <li class="menu-title" key="t-menu">CPD</li>

                <li>
                    <a href="{{ route('user.cpd-events') }}" class="waves-effect">
                        <i class="bx bx-calendar-event"></i>
                        <span>CPD Events</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('user.cpd-points') }}" class="waves-effect">
                        <i class="bx bx-check-shield"></i>
                        <span>CPD Points</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
