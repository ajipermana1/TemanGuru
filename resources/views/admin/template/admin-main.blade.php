    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="pixelstrap">
        <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
        <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
        <title>Teman Guru | {{ $title }}</title>
        <!-- Google font-->
        <link href="/assets/css/fontonline/style.css" rel="stylesheet">
        <link href="/assets/css/fontonline/style1.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">
        <!-- ico-font-->
        <link rel="stylesheet" type="text/css" href="../assets/css/vendors/icofont.css">
        <!-- Themify icon-->
        <link rel="stylesheet" type="text/css" href="../assets/css/vendors/themify.css">
        <!-- Flag icon-->
        <link rel="stylesheet" type="text/css" href="../assets/css/vendors/flag-icon.css">
        <!-- Feather icon-->
        <link rel="stylesheet" type="text/css" href="../assets/css/vendors/feather-icon.css">
        <!-- Plugins css start-->
        <link rel="stylesheet" type="text/css" href="../assets/css/vendors/scrollbar.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/vendors/animate.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/vendors/chartist.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/vendors/date-picker.css">
        <!-- Plugins css Ends-->
        <!-- Bootstrap css-->
        <link rel="stylesheet" type="text/css" href="../assets/css/vendors/bootstrap.css">
        <!-- App css-->
        <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
        <link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen">
        <!-- Responsive css-->
        <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
    </head>
    <body>
        <!-- tap on top starts-->
        <div class="tap-top"><i data-feather="chevrons-up"></i></div>
        <!-- tap on tap ends-->
        <!-- page-wrapper Start-->
        <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        @include('admin.template.nav-admin')
        <!-- Page Header Ends                              -->
        <!-- Page Body Start-->

        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
        @include('admin.template.side-admin')
            <!-- Page Sidebar Ends-->
            <div class="page-body">
            <div class="container-fluid">
                <div class="page-title">
                <div class="row">
                    <div class="col-6">
                    <h3>Admin Page</h3>
                    </div>
                    <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">                                       <i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">{{ $menu }}</li>
                        <li class="breadcrumb-item">{{ $menu1 }}      </li>
                    </ol>
                    </div>
                </div>
                </div>
            </div>
            <!-- Container-fluid starts-->

            {{-- Body Start --}}
            <div class="container-fluid">
                <div class="user-profile">
                  <div class="row">

            @yield('content')

            <!-- Container-fluid Ends-->
            </div>
                </div>
            </div>
            </div>
            <!-- footer start-->
            <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                <div class="col-md-12 footer-copyright text-center">
                    <p class="mb-0">Created with love at {{ date('Y') }} by <a href="https://instagram.com/ajileutik_" target="_blank">Ajie Permana</a>  </p>
                </div>
                </div>
            </div>
            </footer>
        </div>
        </div>
        <!-- latest jquery-->
        <script src="../assets/js/jquery-3.5.1.min.js"></script>
        <!-- Bootstrap js-->
        <script src="../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
        <!-- feather icon js-->
        <script src="../assets/js/icons/feather-icon/feather.min.js"></script>
        <script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
        <!-- scrollbar js-->
        <script src="../assets/js/scrollbar/simplebar.js"></script>
        <script src="../assets/js/scrollbar/custom.js"></script>
        <!-- Sidebar jquery-->
        <script src="../assets/js/config.js"></script>
        <!-- Plugins JS start-->
        <script src="../assets/js/sidebar-menu.js"></script>
        <script src="../assets/js/chart/chartist/chartist.js"></script>
        <script src="../assets/js/chart/chartist/chartist-plugin-tooltip.js"></script>
        <script src="../assets/js/chart/knob/knob.min.js"></script>
        <script src="../assets/js/chart/knob/knob-chart.js"></script>
        <script src="../assets/js/chart/apex-chart/apex-chart.js"></script>
        <script src="../assets/js/chart/apex-chart/stock-prices.js"></script>
        <script src="../assets/js/notify/bootstrap-notify.min.js"></script>
        <script src="../assets/js/dashboard/default.js"></script>
        <script src="../assets/js/notify/index.js"></script>
        <script src="../assets/js/datepicker/date-picker/datepicker.js"></script>
        <script src="../assets/js/datepicker/date-picker/datepicker.en.js"></script>
        <script src="../assets/js/datepicker/date-picker/datepicker.custom.js"></script>
        <script src="../assets/js/typeahead/handlebars.js"></script>
        <script src="../assets/js/typeahead/typeahead.bundle.js"></script>
        <script src="../assets/js/typeahead/typeahead.custom.js"></script>
        <script src="../assets/js/typeahead-search/handlebars.js"></script>
        <script src="../assets/js/typeahead-search/typeahead-custom.js"></script>
        <script src="../assets/js/tooltip-init.js"></script>
        <!-- Plugins JS Ends-->
        <!-- Theme js-->
        {{-- <script src="../assets/js/script.js"></script> --}}
        <script src="../assets/js/theme-customizer/customizer.js"></script>
        <!-- login js-->
        <!-- Plugin used-->
    </body>
    </html>
