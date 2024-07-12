<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Webkit | Responsive Bootstrap 4 Admin Dashboard Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('/webkit/assets/images/favicon.ico') }}" />
    <link rel="stylesheet" href="{{ asset('/webkit/assets/css/backend-plugin.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/webkit/assets/css/backend.css?v=1.0.0') }}">
    <link rel="stylesheet"
        href="{{ asset('/webkit/assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/webkit/assets/vendor/remixicon/fonts/remixicon.css') }}">

    <link rel="stylesheet" href="{{ asset('/webkit/assets/vendor/tui-calendar/tui-calendar/dist/tui-calendar.css') }}">
    <link rel="stylesheet"
        href="{{ asset('/webkit/assets/vendor/tui-calendar/tui-date-picker/dist/tui-date-picker.css') }}">
    <link rel="stylesheet"
        href="{{ asset('/webkit/assets/vendor/tui-calendar/tui-time-picker/dist/tui-time-picker.css') }}">
</head>

<body class="  ">
    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">

        <!-- Sidebar -->
        @include('components.sidebar')
        <!-- End Sidebar -->

        <!-- Top Navbar -->
        @include('components.navbar_top')
        <!-- End Top Navbar -->
        <div class="content-page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div
                                    class="d-flex flex-wrap align-items-center justify-content-between breadcrumb-content">
                                    <h5>{{ $title ?? 'Blank Page' }}</h5>
                                    <div class="d-flex align-items-center">
                                        <div class="list-grid-toggle d-flex align-items-center mr-3">
                                            <div data-toggle-extra="tab" data-target-extra="#grid" class="active">
                                                <div class="grid-icon mr-3">
                                                    <svg width="20" height="20"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <rect x="3" y="3" width="7" height="7"></rect>
                                                        <rect x="14" y="3" width="7" height="7"></rect>
                                                        <rect x="14" y="14" width="7" height="7"></rect>
                                                        <rect x="3" y="14" width="7" height="7"></rect>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div data-toggle-extra="tab" data-target-extra="#list">
                                                <div class="grid-icon">
                                                    <svg width="20" height="20"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <line x1="21" y1="10" x2="3"
                                                            y2="10"></line>
                                                        <line x1="21" y1="6" x2="3"
                                                            y2="6"></line>
                                                        <line x1="21" y1="14" x2="3"
                                                            y2="14"></line>
                                                        <line x1="21" y1="18" x2="3"
                                                            y2="18"></line>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pl-3 border-left btn-new">
                                            <a href="#" class="btn btn-primary" data-target="#new-user-modal"
                                                data-toggle="modal">New Contact</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <!-- Content -->
                            {{ $slot }}
                            <!-- End Content -->
                        </div>
                    </div>
                </div>

                <!-- Page end  -->
            </div>
        </div>
    </div>
    <!-- Wrapper End-->

    <!-- Modal list start -->
    <!-- End Modal list start -->

    <!-- Footer Plugin -->
    @include('components.footer_plugin')
    <!-- End Footer Plugin -->
</body>

</html>
