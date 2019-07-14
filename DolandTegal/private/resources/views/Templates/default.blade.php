<!DOCTYPE html>
<html lang="en">
    @include('templates.partials._head')
    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col  menu_fixed">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;">
                            <a href="{{url('/')}}" class="site_title"><i class="fa fa-send"></i> <span> Doland Tegal</span></a>
                        </div>
                    <div class="clearfix"></div>
                    <!-- menu profile quick info -->
                    @include('templates.partials._profile')
                    <!-- /menu profile quick info -->
                    <br />
                    <!-- sidebar menu -->
                    @include('templates.partials._sidebar')
                    <!-- /sidebar menu -->

                    <!-- menu footer buttons -->
                    @include('templates.partials._menu-footer')
                    <!-- /menu footer buttons -->
                </div>
            </div>
                <!-- top navigation -->
                @include('templates.partials._top-nav')
                <!-- /top navigation -->

                <!-- page content -->
                <div class="right_col" role="main">
                    <div class="">
                        @yield('main')
                    </div>
                </div>
                <!-- /page content -->

                <!-- footer content -->
                @include('templates.partials._footer')
                <!-- /footer content -->
            </div>
        </div>
        @include('templates.partials._scripts')
    </body>
</html>
