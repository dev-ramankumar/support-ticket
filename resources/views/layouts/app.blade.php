<!DOCTYPE html>
<html>
    @include('partials/header')
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            <!-- Navbar -->
            @include('partials/navbar')
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            @include('partials/sidebar')

            <!-- Content Wrapper. Contains page content -->
            @yield('content')
            <!-- /.content-wrapper -->
            @include('partials/footer')

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->
        @include('partials/javascript')
        <!-- jQuery -->
    </body>
</html>

<body>