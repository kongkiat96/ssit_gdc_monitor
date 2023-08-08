<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Sleek Dashboard - Free Bootstrap 4 Admin Dashboard Template and UI Kit. It is very powerful bootstrap admin dashboard, which allows you to build products like admin panels, content management systems and CRMs etc.">


  <title>Monitoring Dashboard</title>

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet" />
  <link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />
  <!-- PLUGINS CSS STYLE -->
  <link href="assets/plugins/nprogress/nprogress.css" rel="stylesheet" />
  <!-- No Extra plugin used -->

  <link href="assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />



  <link href="assets/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" />



  <link href="assets/plugins/toastr/toastr.min.css" rel="stylesheet" />



  <!-- SLEEK CSS -->
  <link id="sleek-css" rel="stylesheet" href="assets/css/sleek.css" />

  <!-- FAVICON -->
  <link href="assets/img/favicon.png" rel="shortcut icon" />



  <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="assets/plugins/nprogress/nprogress.js"></script>

  <META HTTP-EQUIV='Refresh' CONTENT='300' URL='https://monitor.grandexclusives.com/'>


</head>


<body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">



  <div class="wrapper">


    <!--
          ====================================
          ——— LEFT SIDEBAR WITH FOOTER
          =====================================
        -->
    <aside class="left-sidebar bg-sidebar">
      <div id="sidebar" class="sidebar sidebar-with-footer">
        <!-- Aplication Brand -->
        <div class="app-brand">
          <a href="#" title="Sleek Dashboard">
            <svg class="brand-icon" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" width="30" height="33" viewBox="0 0 30 33">
              <g fill="none" fill-rule="evenodd">
                <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
                <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
              </g>
            </svg>
            <span class="brand-name text-truncate">Monitoring</span>
          </a>
        </div>
        <!-- begin sidebar scrollbar -->
        <div class="sidebar-scrollbar">

          <!-- sidebar menu -->
          <ul class="nav sidebar-inner" id="sidebar-menu">



            <li class="has active ">
              <a class="sidenav-item-link" href="javascript:void(0)">
                <i class="mdi mdi-view-dashboard-outline"></i>
                <span class="nav-text">Dashboard</span> <b class="caret"></b>
              </a>

            </li>

            <li class="has-sub">
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#app" aria-expanded="false" aria-controls="app">
                <i class="mdi mdi-pencil-box-multiple"></i>
                <span class="nav-text">App</span> <b class="caret"></b>
              </a>
              <ul class="collapse" id="app" data-parent="#sidebar-menu">
                <div class="sub-menu">
                  <li>
                    <a class="sidenav-item-link" href="https://it.grandexclusives.com/">
                      <i class="mdi mdi-login-variant"></i>
                      <span class="nav-text">&nbsp Login IT Support</span>

                    </a>
                  </li>
                  <li>
                    <a class="sidenav-item-link" href="https://maintain.servicesystemit.com/">
                      <i class="mdi mdi-login-variant"></i>
                      <span class="nav-text">&nbsp Login Maintenance</span>

                    </a>
                  </li>

                </div>
              </ul>
            </li>

          </ul>

        </div>


      </div>
    </aside>


    <div class="page-wrapper">
      <!-- Header -->
      <header class="main-header " id="header">
        <nav class="navbar navbar-static-top navbar-expand-lg">
          <!-- Sidebar toggle button -->
          <button id="sidebar-toggler" class="sidebar-toggle">
            <span class="sr-only">Toggle navigation</span>
          </button>
          <!-- search form -->
          <div class="search-form d-none d-lg-inline-block">
            <div class="input-group">

            </div>
            <div id="search-results-container">
              <ul id="search-results"></ul>
            </div>
          </div>

          <div class="navbar-right ">
            <ul class="nav navbar-nav">

              <li class="right-sidebar-in right-sidebar-2-menu">
                <i class="mdi mdi-settings mdi-spin"></i>
              </li>
              <!-- User Account -->

            </ul>
          </div>
        </nav>


      </header>


      <div class="content-wrapper">
        <div class="content">
          <div class="card card-default">
            <div class="card-header card-header-border-bottom">
              <h2>กราฟแสดงจำนวนงานแต่ละฝ่ายงาน</h2>
            </div>
            <div class="card-body">


              <div id="bu" class="accordion accordion-shadow">
                <div class="card">
                  <div class="card-header" id="headingFour">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                      <h3> ฝ่ายงาน IT Support</h3>
                    </button>
                  </div>

                  <div id="collapseFour" class="collapse show" aria-labelledby="headingFour" data-parent="#bu">
                    <div class="card-body">
                      <?php
                      $file_path = 'https://it.grandexclusives.com/report.php';
                      $content = file_get_contents($file_path);
                      echo $content; ?>


                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingFour">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                      <h3>ฝ่ายงาน Maintenance</h3>
                    </button>
                  </div>
                  <div id="collapseFour" class="collapse show" aria-labelledby="headingFour" data-parent="#bu">
                    <div class="card-body">
                      <?php
                      $file_path = 'https://maintain.servicesystemit.com/report.php';
                      $content = file_get_contents($file_path);
                      echo $content; ?>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>



        <div class="right-sidebar-2">
          <div class="right-sidebar-container-2">
            <div class="slim-scroll-right-sidebar-2">

              <div class="right-sidebar-2-header">
                <h2>Layout Settings</h2>
                <p>User Interface Settings</p>
                <div class="btn-close-right-sidebar-2">
                  <i class="mdi mdi-window-close"></i>
                </div>
              </div>

              <div class="right-sidebar-2-body">
                <span class="right-sidebar-2-subtitle">Header Layout</span>
                <div class="no-col-space">
                  <a href="javascript:void(0);" class="btn-right-sidebar-2 header-fixed-to btn-right-sidebar-2-active">Fixed</a>
                  <a href="javascript:void(0);" class="btn-right-sidebar-2 header-static-to">Static</a>
                </div>

                <span class="right-sidebar-2-subtitle">Sidebar Layout</span>
                <div class="no-col-space">
                  <select class="right-sidebar-2-select" id="sidebar-option-select">
                    <option value="sidebar-fixed">Fixed Default</option>
                    <option value="sidebar-fixed-minified">Fixed Minified</option>
                    <option value="sidebar-fixed-offcanvas">Fixed Offcanvas</option>
                    <option value="sidebar-static">Static Default</option>
                    <option value="sidebar-static-minified">Static Minified</option>
                    <option value="sidebar-static-offcanvas">Static Offcanvas</option>
                  </select>
                </div>

                <span class="right-sidebar-2-subtitle">Header Background</span>
                <div class="no-col-space">
                  <a href="javascript:void(0);" class="btn-right-sidebar-2 btn-right-sidebar-2-active header-light-to">Light</a>
                  <a href="javascript:void(0);" class="btn-right-sidebar-2 header-dark-to">Dark</a>
                </div>

                <span class="right-sidebar-2-subtitle">Navigation Background</span>
                <div class="no-col-space">
                  <a href="javascript:void(0);" class="btn-right-sidebar-2 btn-right-sidebar-2-active sidebar-dark-to">Dark</a>
                  <a href="javascript:void(0);" class="btn-right-sidebar-2 sidebar-light-to">Light</a>
                </div>

                <span class="right-sidebar-2-subtitle">Direction</span>
                <div class="no-col-space">
                  <a href="javascript:void(0);" class="btn-right-sidebar-2 btn-right-sidebar-2-active ltr-to">LTR</a>
                  <a href="javascript:void(0);" class="btn-right-sidebar-2 rtl-to">RTL</a>
                </div>

                <div class="d-flex justify-content-center" style="padding-top: 30px">
                  <div id="reset-options" style="width: auto; cursor: pointer" class="btn-right-sidebar-2 btn-reset">Reset
                    Settings</div>
                </div>

              </div>

            </div>
          </div>

        </div>

      </div>

      <footer class="footer mt-auto">
        <div class="copyright bg-white">
          <p>
            &copy; <span id="copy-year"><?php echo date('Y'); ?></span> Copyright Monitoring.
          </p>
        </div>
        <script>
          var d = new Date();
          var year = d.getFullYear();
          document.getElementById("copy-year").innerHTML = year;
        </script>
      </footer>

    </div>
  </div>

  <script src="assets/plugins/jquery/jquery.min.js"></script>
  <script src="assets/plugins/slimscrollbar/jquery.slimscroll.min.js"></script>
  <script src="assets/plugins/jekyll-search.min.js"></script>



  <script src="assets/plugins/charts/Chart.min.js"></script>



  <script src="assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
  <script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill.js"></script>



  <script src="assets/plugins/daterangepicker/moment.min.js"></script>
  <script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
  <script>
    jQuery(document).ready(function() {
      jQuery(' input[name="dateRange" ]').daterangepicker({
        autoUpdateInput: false,
        singleDatePicker: true,
        locale: {
          cancelLabel: 'Clear'
        }
      });
      jQuery('input[name="dateRange" ]').on('apply.daterangepicker', function(ev, picker) {
        jQuery(this).val(picker.startDate.format('MM/DD/YYYY'));
      });
      jQuery('input[name="dateRange" ]').on('cancel.daterangepicker', function(ev, picker) {
        jQuery(this).val('');
      });
    });
  </script>



  <script src="assets/plugins/toastr/toastr.min.js"></script>



  <script src="assets/js/sleek.bundle.js"></script>
</body>

</html>