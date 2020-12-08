<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="height: none !important ">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">{{ucwords(config('app.name'))}}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{auth()->user()->username}}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->


                <li class="nav-item">
                    <a href="{{url('/tickets-admin')}}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Support Ticket
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('/tickets')}}" class="nav-link">
                                <p>Active Ticket</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/tickets/complete')}}" class="nav-link">
                                <p>Completed Ticket</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/tickets-admin/priority')}}" class="nav-link">
                                <p>Priority Management</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/tickets-admin/agent')}}" class="nav-link">
                                <p>Agent Management</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/tickets-admin/category')}}" class="nav-link">
                                <p>Category Management</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/tickets-admin/status')}}" class="nav-link">
                                <p>Statuses Management</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/tickets-admin/configuration')}}" class="nav-link">
                                <p>Configuration Management</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/tickets-admin/configuration')}}" class="nav-link">
                                <p>Configuration Management</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/tickets-admin/administrator')}}" class="nav-link">
                                <p>Administrator Management</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            User Management
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="../forms/general.html" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create User</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../forms/advanced.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manage User</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item">
                    <a href="../gallery.html" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Activity Log
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../gallery.html" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Change Password
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../calendar.html" class="nav-link">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            Settings
                        </p>
                    </a>
                </li>


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>