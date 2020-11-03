<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    {{--<a href="index3.html" class="brand-link">--}}
        {{--<img src="{{asset('images/avatar2.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"--}}
             {{--style="opacity: .8">--}}
        {{--<span class="brand-text font-weight-light">AdminLTE 3</span>--}}
    {{--</a>--}}

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            {{--<div class="image">--}}
                {{--<img src="{{asset('images/avatar2.png')}}" class="img-circle elevation-2" alt="User Image">--}}
            {{--</div>--}}
            <div class="info">
                <a href="#" class="d-block">Welcome, User</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                {{--<li class="nav-item has-treeview">--}}
                    {{--<a href="#" class="nav-link ">--}}
                        {{--<i class="nav-icon fa fa-dashboard"></i>--}}
                        {{--<p>--}}
                            {{--Starter Pages--}}
                            {{--<i class="right fa fa-angle-left"></i>--}}
                        {{--</p>--}}
                    {{--</a>--}}
                    {{--<ul class="nav nav-treeview">--}}
                        {{--<li class="nav-item">--}}
                            {{--<a href="#" class="nav-link ">--}}
                                {{--<i class="fa fa-circle-o nav-icon"></i>--}}
                                {{--<p>Active Page</p>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item">--}}
                            {{--<a href="#" class="nav-link">--}}
                                {{--<i class="fa fa-circle-o nav-icon"></i>--}}
                                {{--<p>Inactive Page</p>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</li>--}}

                {{-------------CMS, Slider--------------------}}
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fa fa-dashboard"></i>
                        <p>
                            CMS
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/slider" class="nav-link ">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Slider</p>
                            </a>
                        </li>

                    </ul>
                </li>
                {{-------------CMS, Slider--------------------}}


            <!-- News Events And Notice -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-bullhorn"></i>
                        <p>
                            News Events and Notice
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/newseventnotice/create" class="nav-link ">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Create News/Notice</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/event/create" class="nav-link ">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Create Events</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/manage-news" class="nav-link ">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Manage News</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/event/" class="nav-link ">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Manage Events</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/manage-notice" class="nav-link ">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Manage Notice</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- News Events and Notice -->


                <!-- Features -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-dashboard"></i>
                        <p>
                            Features
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/features/create" class="nav-link ">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Create</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/features/" class="nav-link ">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>View</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- Features -->




                <!-- About Us -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-info"></i>
                        <p>
                            About Us
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/aboutus/create" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Create</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/manage-intro" class="nav-link ">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Manage Introduction</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/manage-history" class="nav-link ">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Manage History</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/manage-voice" class="nav-link ">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Manage Voice</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- About us-->


                {{----------types of Staff---------------}}
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fa fa-users"></i>
                        <p>
                            Staff Types
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/stafftype/create" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Create Staff type</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/stafftype" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p> View Staff Type</p>
                            </a>
                        </li>

                    </ul>
                </li>
                {{----------types of Staff---------------}}

                {{----------------Staff information---------------}}
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-user-plus"></i>
                        <p>
                            Staff
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/staff/create" class="nav-link ">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Create Staff</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/staff" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>View Staff</p>
                            </a>
                        </li>
                    </ul>
                </li>
            {{----------------Staff information---------------}}

                {{----------Department and program--------}}
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fa fa-sitemap"></i>
                        <p>
                            Department
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/department/create" class="nav-link ">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Create Department</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/department" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p> View Department</p>
                            </a>
                        </li>


                    </ul>
                </li>
            {{----------Department and program--------}}



            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>