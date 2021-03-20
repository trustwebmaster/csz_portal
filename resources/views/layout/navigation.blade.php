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

<div id="custom-modal" class="modal-demo">
    <button type="button" class="close" onclick="Custombox.modal.close();">
        <span>&times;</span><span class="sr-only">Close</span>
    </button>
    <h4 class="custom-modal-title">Modal title</h4>
    <div class="custom-modal-text">
         Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
    </div>
</div>
