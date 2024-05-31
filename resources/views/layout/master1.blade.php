<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>دف جرافكس</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="dist/css/style1.css">

  <link rel="stylesheet" href="dist/css/bootstrap-rtl.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/myEdit.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/style.css">

</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">

        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">الرئيسية</a>
        </li>
        <li class="nav-item dropdown">
          <a id="accountingSubMenu" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
            class="nav-link dropdown-toggle">
            <i class="fa fa-magic"></i>
            <span>روابط سريعة</span>
          </a>
          <ul aria-labelledby="accountingSubMenu" class="dropdown-menu">


            <li><a href="index.html" class="dropdown-item">
                <span> النظام </span>
              </a></li>

          </ul>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <div id="app">
          <div>
            <li class="navbar-link"><a href="/mail" class="nav-link"><i class="fa fa-bell"></i> <span
                  class="badge badge-primary">0</span></a></li>
          </div>
        </div>

        <li class="nav-item dropdown">
          <a id="mainSubMenu" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
            class="nav-link dropdown-toggle">
            <i class="fa fa-th"></i>

          </a>
          <ul aria-labelledby="transactionsSubMenu" class="dropdown-menu">
            <li><a href="#/tutorial/tutorials" class="dropdown-item">
                <i class="fa fa-question-circle"></i>
                <span>مركز المعرفة</span>
              </a></li>
            <li><a href="#/lines" class="dropdown-item">
                <i class="fa fa-phone-square"></i>
                <span>دليل الهاتف</span>
              </a></li>
            <li><a href="#/profile" class="dropdown-item">
                <i class="fa fa-user"></i>
                <span> الملف الشخصي </span>
              </a></li>
            <li><a href="#/tasks" class="dropdown-item">
                <i class="fa fa-check-square"></i>
                <span> المهام </span>
              </a></li>
            <li><a href="#/suggestions" class="dropdown-item">
                <i class="fa fa-exclamation-circle"></i>
                <span> الاقتراحات </span>
              </a></li>
            <li><a href="#/logs" class="dropdown-item">
                <i class="fa fa-list"></i>
                <span> السجلات </span>
              </a></li>

          </ul>
        </li>
        <li class="nav-item dropdown">
          <a id="mainSubMenu" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
            class="nav-link dropdown-toggle">
            <i class="fa fa-language"></i>

          </a>
          <ul aria-labelledby="transactionsSubMenu" class="dropdown-menu">
            <li><a href="#/translate?lang=ar" class="dropdown-item">
                <i class="fa fa-language"></i>
                <span>العربية</span>
              </a></li>
            <li><a href="#/translate?lang=en" class="dropdown-item">
                <i class="fa fa-language"></i>
                <span>English</span>
              </a></li>
            <li><a href="#/translate?lang=ur" class="dropdown-item">
                <i class="fa fa-language"></i>
                <span>ur</span>
              </a></li>
          </ul>
        </li>



        <li class="navbar-link"><a href="#" class="nav-link logout">
            <i class="fa fa-power-off"></i>
          </a></li>

      </ul>
    </nav>
	@yield('content')
    <!-- /.navbar -->


	<nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->


    <div class="form-control">
    <div class="form-group">
              @include('flash-message')
               @yield('content2')
               </div>
     </div>

  </nav>
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-light-primary elevation-4">

      <!-- Brand Logo -->
      <a href="#" class="brand-link">

        <span class="brand-text font-weight-light text-capitalize">المصمم الذكي</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                  <h3 class="text-center"> نظام الموارد البشرية</h3>
                </li>

                <li class="nav-item">
                  <a href="{{ url('index') }}" class="nav-link ">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>الرئيسية</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('qualifications') }}" class="nav-link active">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>المؤهلات</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="{{ url('specialization') }}" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>التخصصات</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('categories') }}" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>الفئات</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('job-titles') }}" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p> المسميات الوظيفية </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('job-grades') }}" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p> الدرجات الوظيفية </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('employees') }}" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>الموظفين</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('jobs') }}" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>الوظائف</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('benefits-deductions') }}" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>الاستقطاع | الاستحقاق</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('contract') }}" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p> العقود </p>
                  </a>
                </li>
              </ul>
        </nav>
		@yield('content1')
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="min-height: 757px;">
      <!-- Main content -->
      <div class="content">


          <!-- Content Header (Page header) -->

      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="float-right d-none d-sm-inline">

      </div>
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
</body>

</html>
