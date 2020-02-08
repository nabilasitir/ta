<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/gentelella/images/favicon.ico" type="image/ico" />

    <title>Perbandingan Prediksi Cuaca | </title>

    <!-- Bootstrap -->
    <link href="/gentelella/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/gentelella/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/gentelella/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="/gentelella/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    
    <!-- bootstrap-progressbar -->
    <link href="/gentelella/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="/gentelellavendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="/gentelella/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="/gentelella/build/css/custom.min.css" rel="stylesheet">
     <!-- Datatables -->
    <link href="/gentelella/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="/gentelella/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="/gentelella/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="/gentelella/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="/gentelella/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">


  
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="/gentelella/index.html" class="site_title" style="align-text:center;"> <i class="fa fa-tree"></i> <span>Prediksi Cuaca</span></a>
            </div>

            <div class="clearfix"></div>


            <br />
            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-cloud"></i> Hasil Prediksi <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/cuaca">Prediksi ANFIS</a></li>
                      <li><a href="index2.html">Prediksi SVM</a></li>
                    </ul>
                  </li>
                  <li><a href="/cuaca/kurva"><i class="fa fa-bar-chart"></i> Kurva Perbandingan </a>
                  </li>
                  <li><a href="/cuaca/riwayat"><i class="fa fa-database"></i> Riwayat Data </a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->
          </div>
        </div>
        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
             	
             		@yield('konten')
             
            </div>
          </div>
          <br />
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="/gentelella/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="/gentelella/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="/gentelella/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="/gentelella/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="/gentelella/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="/gentelella/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="/gentelella/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="/gentelella/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="/gentelella/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="/gentelella/vendors/Flot/jquery.flot.js"></script>
    <script src="/gentelella/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="/gentelella/vendors/Flot/jquery.flot.time.js"></script>
    <script src="/gentelella/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="/gentelella/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="/gentelella/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="/gentelella/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="/gentelella/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="/gentelella/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="/gentelella/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="/gentelella/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="/gentelella/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="/gentelella/vendors/moment/min/moment.min.js"></script>
    <script src="/gentelella/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="/gentelella/build/js/custom.min.js"></script>

    <script src="/gentelella/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="/gentelella/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="/gentelella/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="/gentelella/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="/gentelella/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="/gentelella/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="/gentelella/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="/gentelella/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="/gentelella/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="/gentelella/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/gentelella/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="/gentelella/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="/gentelella/vendors/jszip/dist/jszip.min.js"></script>
    <script src="/gentelella/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="/gentelella/vendors/pdfmake/build/vfs_fonts.js"></script>

 

  </body>
</html>
