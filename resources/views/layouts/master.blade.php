<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/velonic_wb_3/admin/blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Apr 2018 19:53:39 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <link rel="shortcut icon" href="{{ url('img/single-logo.png') }}">

        <title>myBookstore</title>

        <!-- Google-Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:100,300,400,600,700,900,400italic' rel='stylesheet'>


        <!-- Bootstrap core CSS -->
        <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ url('css/bootstrap-reset.css') }}" rel="stylesheet">

        <!--Animation css-->
        <link href="{{ url('css/animate.css') }}" rel="stylesheet">

        <!--Icon-fonts css-->
        <link href="{{ url('assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
        <link href="{{ url('assets/ionicon/css/ionicons.min.css') }}" rel="stylesheet" />

        <!-- Custom styles for this template -->
        <link href="{{ url('css/style.css') }}" rel="stylesheet">
        <link href="{{ url('css/helper.css') }}" rel="stylesheet">
        <link href="{{ url('css/style-responsive.css') }}" rel="stylesheet" />
        <link href="{{url('assets/select2/select2.css')}}" rel="stylesheet" type="text/css" />

        <!-- DataTable CSS -->
        <link href="{{ url('assets/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.bootstrap.min.css" rel="stylesheet">

        <!-- SweetAlert CSS -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    </head>
    <body>

        <!-- Aside Start-->
        <aside class="left-panel">

            <!-- brand -->
            <div class="logo">
                <a href="/home" class="logo-expanded">
                    <img src="{{ url('img/single-logo.png') }}" alt="logo">
                    <span class="nav-label">myBookstore</span>
                </a>
            </div>
            <!-- / brand -->
        
            <!-- Navbar Start -->
            <nav class="navigation">
                <ul class="list-unstyled">
                    <li class="has-submenu"><a href="/home"><i class="ion-home"></i> <span class="nav-label">Dashboard</span></a></li>
                    <li class="has-submenu"><a href="/buku"><i class="ion-android-book"></i> <span class="nav-label">Buku</span></a></li>
                    <li class="has-submenu"><a href="/distrib"><i class="ion-android-social"></i> <span class="nav-label">Distributor</span></a></li>
                    <li class="has-submenu"><a href="/user"><i class="ion-android-social-user"></i> <span class="nav-label">Kasir</span></a></li>
                    <li class="has-submenu"><a href="/pasok"><i class="ion-android-archive"></i> <span class="nav-label">Pasok</span></a></li>
                    <li class="has-submenu"><a href="/penjualan"><i class="ion-social-usd"></i> <span class="nav-label">Penjualan</span></a></li>
                </ul>
            </nav>
                
        </aside>
        <!-- Aside Ends-->


        <!--Main Content Start -->
        <section class="content">
            
            <!-- Header -->
            <header class="top-head container-fluid">
                <button type="button" class="navbar-toggle pull-left">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Right navbar -->
                <ul class="list-inline navbar-right top-menu top-right-menu">  

                    <!-- user login dropdown start-->
                    <li class="dropdown text-center">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="" src="{{ url('img/fb.jpg') }}" class="img-circle profile-img thumb-sm">
                            <span class="username">{{ Auth::user()->username }} </span> <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu pro-menu fadeInUp animated" tabindex="5003" style="overflow: hidden; outline: none;">
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out"></i>  Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->       
                </ul>
                <!-- End right navbar -->

            </header>
            <!-- Header Ends -->


            <!-- Page Content Start -->
            <!-- ================== -->

            <div class="wraper container-fluid">
                <?php
                    $buku = $buku->count();
                    $distrib = $distrib->count();
                    $pasok = $pasok->count();
                    $penjualan = $penjualan->count();
                    $user = $user->count();
                ?>

                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="widget-panel widget-style-2 bg-pink">
                            <i class="fa fa-book" style="padding:40px; "></i> 
                            <h2 class="m-0 counter">{{number_format($buku)}}</h2>
                            <div>Total Buku</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="widget-panel widget-style-2 bg-info">
                            <i class="fa fa-sign-in" style="padding:40px;"></i> 
                            <h2 class="m-0 counter">{{number_format($pasok)}}</h2>
                            <div>Total Pasok</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="widget-panel widget-style-2 bg-purple">
                            <i class="fa fa-users" style="padding:40px;"></i> 
                            <h2 class="m-0 counter">{{number_format($distrib)}}</h2>
                            <div>Total Distributor</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="widget-panel widget-style-2 bg-success">
                            <i class="fa fa-dollar" style="padding:40px;"></i> 
                            <h2 class="m-0 counter">{{number_format($penjualan)}}</h2>
                            <div>Total Penjualan</div>
                        </div>
                    </div>

                @yield('content')


            </div>
            <!-- Page Content Ends -->
            <!-- ================== -->

            <!-- Footer Start -->
            <footer class="footer">
                2018 © myBookstore.
            </footer>
            <!-- Footer Ends -->

        </section>
        <!-- Main Content Ends -->
        

        <!-- js placed at the end of the document so the pages load faster -->
        <script src="{{ url('js/jquery.js') }}"></script>
        <script src="{{ url('js/bootstrap.min.js') }}"></script>
        <script src="{{ url('js/pace.min.js') }}"></script>
        <script src="{{ url('js/modernizr.min.js') }}"></script>
        <script src="{{ url('js/wow.min.js') }}"></script>
        <script src="{{ url('js/jquery.nicescroll.js') }}"></script>
        <script src="{{url('assets/select2/select2.min.js')}}"></script>

        <!-- SweetAlert CSS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        @include('sweet::alert')

        <!-- dataTable Js -->
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>


        <script src="{{ url('js/jquery.app.js') }}"></script>

        <script>
            $(document).ready(function() {

                $('#hometable').DataTable( {
                    dom: 'Bfrtip',
                    buttons: [
                        {
                            extend: 'print',
                            title: 'myBookstore - Data Penjualan',
                            filename: 'myBookstore_-_Data_Penjualan',
                            exportOptions: {
                                columns: [ 0, 1, 2, 3, 4 ]
                            }
                        },
                        {
                            extend: 'pdfHtml5',
                            title: 'myBookstore - Data Penjualan',
                            filename: 'myBookstore_-_Data_Penjualan',
                            exportOptions: {
                                columns: [ 0, 1, 2, 3, 4 ]
                            }
                        },
                        {
                            extend: 'excelHtml5',
                            title: 'myBookstore - Data Penjualan',
                            filename: 'myBookstore_-_Data_Penjualan',
                            exportOptions: {
                                columns: [ 0, 1, 2, 3, 4 ]
                            }
                        },
                    ]
                } );

                var table = $('#hometable').DataTable();
                table
                    .order( [ 4, 'desc' ] )
                    .draw();
                } );
        </script>

    </body>
</html>
