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
                    <a id="accountingSubMenu" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">
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
                        <li class="navbar-link"><a href="/mail" class="nav-link"><i class="fa fa-bell"></i> <span class="badge badge-primary">0</span></a></li>
                    </div>
                </div>

                <li class="nav-item dropdown">
                    <a id="mainSubMenu" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">
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
                    <a id="mainSubMenu" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">
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
        <!-- /.navbar -->
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
                <li class="nav-item">
              <a href="{{ url('vacationholiday') }}" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p> الاجازات والعطل </p>
              </a>
            </li>
                <li class="nav-item">
              <a href="{{ url('advancesLans') }}" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p> السلف والقروض </p>
              </a>
            </li>

                 <li class="nav-item">
              <a href="{{ url('covenant') }}" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p> العهد</p>
              </a>
            </li>
               <li class="nav-item">
              <a href="{{ url('evaluation') }}" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p> التقيم</p>
              </a>
            </li>
              <li class="nav-item">
              <a href="{{ url('license') }}" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p> التراخيص</p>
              </a>
            </li>

               <li class="nav-item">
              <a href="{{ url('transfers') }}" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p> التنقلات</p>
              </a>
            </li>
                    </ul>

                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="min-height: 757px;">
            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">

                    <!-- Content Header (Page header) -->
                    <div class="content-header">
                        <div class="container-fluid">
                            <div class="row mb-2">
                                <div class="col-sm-12">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="{{ url('index') }}">نظام
                                                نظام الموارد البشرية
                                            </a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a href="{{ url('employees') }}">
                                                الموظفين
                                            </a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <span> بيانات الموظف</span>
                                        </li>
                                    </ol>
                                </div><!-- /.col -->
                                <div class="col-sm-6">
                                    <h1> بيانات الموظف </h1>
                                </div><!-- /.col -->


                            </div><!-- /.row -->
                        </div><!-- /.container-fluid -->
                    </div>
                    <!-- /.content-header -->
                    <div class="col-md-12">
                    </div>
                    <section class="content">
                        <div class="card card-primary card-outline card-outline-tabs">
                            <div class="card-header p-0 border-bottom-0">
                                <ul class="nav nav-tabs" id="tabs-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="tabs-stores-tab" data-toggle="pill" href="#tabs-stores" role="tab" aria-controls="tabs-stores" aria-selected="true"> التفاصيل</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="tabs-shelve-tab" data-toggle="pill" href="#tabs-shelve" role="tab" aria-controls="tabs-shelve" aria-selected="false"> وثائق الموظف </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="tabs-OPEN_BALANCE-tab" data-toggle="pill" href="#tabs-OPEN_BALANCE" role="tab" aria-controls="tabs-OPEN_BALANCE" aria-selected="false"> اثباتات الموظف </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="tabs-warehouse-tab" data-toggle="pill" href="#tabs-warehouse" role="tab" aria-controls="tabs-warehouse" aria-selected="true"> التامينات الاجتماعية </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="tabs-1-tab" data-toggle="pill" href="#tabs-1" role="tab" aria-controls="tabs-1" aria-selected="true">
                                            التامينات الصحية
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" id="tabs-6-tab" data-toggle="pill" href="#tabs-6" role="tab" aria-controls="tabs-10" aria-selected="true">
                                            العهد
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="tabs-8-tab" data-toggle="pill" href="#tabs-8" role="tab" aria-controls="tabs-10" aria-selected="true">
                                            الحضور والانصراف
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a id="more" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">
                                            <span> المزيد </span>
                                        </a>
                                        <ul aria-labelledby="more" class="dropdown-menu">


                                            <li>
                                                <a class="nav-link" id="tabs-2-tab" data-toggle="pill" href="#tabs-2" role="tab" aria-controls="tabs-2" aria-selected="true">
                                                    المؤهلات الخاصة بالموظف
                                                </a>
                                            </li>


                                            <li>
                                                <a class="nav-link" id="tabs-4-tab" data-toggle="pill" href="#tabs-4" role="tab" aria-controls="tabs-4" aria-selected="true">
                                                    الدورات
                                                </a>
                                            </li>

                                            <li>
                                                <a class="nav-link" id="tabs-5-tab" data-toggle="pill" href="#tabs-5" role="tab" aria-controls="tabs-5" aria-selected="true">
                                                    اللغات
                                                </a>
                                            </li>

                                            <li>
                                                <a class="nav-link" id="tabs-7-tab" data-toggle="pill" href="#tabs-7" role="tab" aria-controls="tabs-5" aria-selected="true">
                                                    الاجازات
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-link" id="tabs-9-tab" data-toggle="pill" href="#tabs-9" role="tab" aria-controls="tabs-5" aria-selected="true">
                                                    الاستحقاقات
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-link" id="tabs-10-tab" data-toggle="pill" href="#tabs-10" role="tab" aria-controls="tabs-5" aria-selected="true">
                                                    الخبرات
                                                </a>
                                            </li>


                                            <li>
                                                <a class="nav-link" id="tabs-11-tab" data-toggle="pill" href="#tabs-11" role="tab" aria-controls="tabs-5" aria-selected="true">
                                                    التابعين للموظف
                                                </a>
                                            </li>

                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body ">
                                @foreach($a_viewData as $data)
                                <div class="tab-content" id="tabs-tabContent">
                                    <div class="tab-pane fade active show" id="tabs-stores" role="tabpanel" aria-labelledby="tabs-stores-tab">
                                        <section class="content">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="card card-widget widget-user">
                                                        <!-- Add the bg color to the header using any of the bg-* classes -->
                                                        <div class="widget-user-header text-center" style="background-color:#607d8b">
                                                            <h3 class="text-white widget-user-username ">
                                                                <span class="">
                                                                    اسم الموظف
                                                                </span>
                                                            </h3>
                                                            <h5 class="text-white widget-user-desc ">
                                                                <span class="">
                                                                    الوظيفية
                                                                </span>
                                                            </h5>
                                                        </div>
                                                        <div class="widget-user-image">
                                                            <img class="img-circle elevation-2" src="{{ asset('img/Emply/'.$data->path)}}" alt="User Avatar">
                                                        </div>
                                                        <div class="card-footer">
                                                            <div class="row">
                                                                <div class="col-sm-4 border-right">
                                                                    <div class="description-block">
                                                                        <h5 class="description-header">الجنسية </h5>
                                                                        <span class="description-text d-block">{{$data->nationality}}</span>
                                                                        <a class="btn btn-info btn-xs" href="#"><i class="fa fa-eye"></i> عرض</a>
                                                                    </div>
                                                                    <!-- /.description-block -->
                                                                </div>
                                                                <!-- /.col -->
                                                                <div class="col-sm-4 border-right">
                                                                    <div class="description-block">
                                                                        <h5 class="description-header"> البنك</h5>
                                                                        <span class="description-text d-block">{{$data->Bank}}</span>
                                                                        <a class="btn btn-info btn-xs" href="#"><i class="fa fa-eye"></i> عرض</a>
                                                                    </div>
                                                                    <!-- /.description-block -->
                                                                </div>
                                                                <!-- /.col -->
                                                                <div class="col-sm-4">
                                                                    <div class="description-block">
                                                                        <h5 class="description-header">الحالة</h5>
                                                                        <span class="description-text">{{$data->empy_satus}}</span>
                                                                    </div>
                                                                    <!-- /.description-block -->
                                                                </div>
                                                                <!-- /.col -->
                                                            </div>
                                                            <!-- /.row -->
                                                        </div>
                                                    </div>

                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h3 class="card-title">
                                                                <i class="fas fa-envelope"></i>
                                                                بيانات التواصل

                                                            </h3>
                                                        </div>
                                                        <!-- /.card-header -->
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="form-group">
                                                                        <label> تلفون العمل </label>
                                                                        <div>
                                                                            {{$data->phone_jop}}
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="form-group">
                                                                        <label> تلفون الطوارئ </label>
                                                                        <div>
                                                                            +871488774114
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                                <div class="col-lg-6">
                                                                    <div class="form-group">
                                                                        <label> تلفون فى البلد الام </label>
                                                                        <div>
                                                                            +871488774114
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                                <div class="col-lg-6">
                                                                    <div class="form-group">
                                                                        <label> العنوان في البلد الام </label>
                                                                        <div>
                                                                            البلد/المدينة/الحي
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="form-group">
                                                                        <label> العنوان في المملكة </label>
                                                                        <div>
                                                                            المدينة/الحي/رقم المنزل
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                            </div>
                                                        </div>
                                                        <!-- /.card-body -->
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h3 class="card-title">
                                                                <i class="fas fa-text-width"></i>
                                                                البيانات الاساسية
                                                            </h3>
                                                        </div>
                                                        <!-- /.card-header -->
                                                        <div class="card-body ">


                                                            <div class="row">
                                                                <div class="col-lg-4 ">
                                                                    <div class="form-group">
                                                                        <label for="from-date">مكان الميلاد</label>
                                                                        <div>
                                                                            البلد/المدينة/الحي
                                                                        </div>
                                                                    </div>
                                                                    <hr>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="form-group">
                                                                        <label for="from-date">تاريخ الميلاد</label>
                                                                        <div>
                                                                            8/8/1980
                                                                        </div>
                                                                    </div>
                                                                    <hr>
                                                                </div>

                                                                <div class="col-lg-4">
                                                                    <div class="form-group">
                                                                        <label class="mr-2" for="qualifications"> الجنس</label>
                                                                        <div>
                                                                            ذكر
                                                                        </div>
                                                                    </div>
                                                                    <hr>
                                                                </div>



                                                                <div class="col-lg-6">
                                                                    <div class="form-group">
                                                                        <label for="from-date">الحالة الاجتماعية</label>
                                                                        <div>
                                                                            متزوج
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="form-group">
                                                                        <label for="from-date">الديانة </label>
                                                                        <div>
                                                                            مسلم
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!-- /.card-body -->
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h3 class="card-title">
                                                                <i class="fas fa-money-bill"></i>
                                                                الحسابات
                                                            </h3>
                                                        </div>
                                                        <!-- /.card-header -->
                                                        <div class="card-body ">


                                                            <div class="row">
                                                                <div class="col-lg-4">

                                                                    <div class="form-group">
                                                                        <label> التحويلة</label>
                                                                        <div>
                                                                            12456AQ
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="form-group">
                                                                        <label>رقم الحساب</label>
                                                                        <div>
                                                                            712456
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-4">
                                                                    <div class="form-group">
                                                                        <label class="mr-2" for="qualifications"> البنك</label>
                                                                        <div>
                                                                            اسم البنك
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!-- /.card-body -->
                                                    </div>
                                                </div>

                                            </div>
                                        </section>
                                    </div>

                                    <div class="tab-pane fade" id="tabs-shelve" role="tabpanel" aria-labelledby="tabs-shelve-tab">
                                        <section class="content">

                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="card  shadow-none">

                                                        <!-- /.card-header -->
                                                        <div class="card-body">
                                                            <div class="card-extra clearfix pt-2 pb-3 mb-3">
                                                                <form action="" method="GET" class="form-inline guide-advanced-search" novalidate="">
                                                                    <input type="hidden" name="_token" value="cAFJKjhjoqZ8XW0J41SJVlZeKazkTsCGGDp8H4Kb">
                                                                    <div class="form-group mr-">
                                                                        <label>
                                                                            <i class="fa fa-cogs ml-1"></i>
                                                                            <span>بحث متقدم</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group mr-2">
                                                                        <label class="mr-2" for="class">الموهل </label>
                                                                        <select name="class" id="class" class=" custom-select" data-select2-id="class" tabindex="-1" aria-hidden="true">
                                                                            <option value="all" selected="" data-select2-id="2">الكل</option>

                                                                        </select>
                                                                    </div>


                                                                    <div class="form-group mr-4">
                                                                        <label class="mr-2"> من تاريخ </label>
                                                                        <input type="date" name="from_date" id="from-date" value="2021-09-25" class="form-control">
                                                                    </div>
                                                                    <div class="form-group mr-4">
                                                                        <label class="mr-2"> الي تاريخ </label>
                                                                        <input type="date" name="from_date" id="from-date" value="2021-09-25" class="form-control">
                                                                    </div>



                                                                    <button type="submit" class="btn btn-primary">
                                                                        <span>بحث</span>
                                                                        <i class="fa fa-search"></i>
                                                                    </button>
                                                                </form>
                                                                <div class="d-md-flex justify-content-between">

                                                                    <div id="datatable_filter" class="dataTables_filter"><label><input type="search" class="" placeholder="بحث" aria-controls="datatable"></label></div>

                                                                    <div class="dt-buttons"> <button class="btn btn-default" tabindex="0" aria-controls="datatable" type="button"><span>طباعة <i class="fa fa-print"></i></span></button> <button class="btn btn-success" tabindex="0" aria-controls="datatable" type="button"><span>اكسل <i class="fa fa-file-excel"></i></span></button> </div>

                                                                </div>
                                                            </div>



                                                            <table id="datatable" class="datatable table table-bordered table-striped dataTable no-footer" role="grid">
                                                                <thead>
                                                                    <tr role="row">
                                                                        <th class="sorting_disabled" rowspan="1" colspan="1"># </th>
                                                                        <th class="sorting_disabled" rowspan="1" colspan="1">
                                                                            كود المؤهل
                                                                        </th>
                                                                        <th class="sorting_disabled" rowspan="1" colspan="1">
                                                                            اسم المؤهل

                                                                        </th>
                                                                        <th class="sorting_disabled" rowspan="1" colspan="1">
                                                                            كود الوثيقة
                                                                        </th>
                                                                        <th class="sorting_disabled" rowspan="1" colspan="1">
                                                                            اسم الوثيقة
                                                                        </th>
                                                                        <th class="sorting_disabled" rowspan="1" colspan="1">
                                                                            تاريخ الانتهاء
                                                                        </th>
                                                                        <th class="sorting_disabled" rowspan="1" colspan="1">
                                                                            تاريخ الاصدارة
                                                                        </th>
                                                                        <th class="sorting_disabled" rowspan="1" colspan="1">
                                                                            جهه الاصدار
                                                                        </th>


                                                                    </tr>
                                                                </thead>
                                                                <tbody>

                                                                    <tr role="row" class="odd">
                                                                        <td></td>
                                                                        <td> </td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                                                                <ul class="pagination">
                                                                    <li class="paginate_button page-item previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">السابق</a></li>
                                                                    <li class="paginate_button page-item active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                                                    <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                                                    <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                                                                    <li class="paginate_button page-item next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0" class="page-link">التالي</a></li>
                                                                </ul>
                                                            </div>









                                                        </div>
                                                        <!-- /.card-body -->
                                                    </div>
                                                    <!-- /.card -->
                                                </div>
                                                <!-- /.col -->
                                            </div>


                                            <!-- /.row -->
                                        </section>
                                    </div>

                                    <div class="tab-pane fade" id="tabs-OPEN_BALANCE" role="tabpanel" aria-labelledby="tabs-OPEN_BALANCE-tab">
                                        <section class="content">
                                            <div class="card-extra clearfix pt-2 pb-3 mb-3">
                                                <form action="" method="GET" class="form-inline guide-advanced-search" novalidate="">
                                                    <input type="hidden" name="_token" value="cAFJKjhjoqZ8XW0J41SJVlZeKazkTsCGGDp8H4Kb">
                                                    <div class="form-group mr-">
                                                        <label>
                                                            <i class="fa fa-cogs ml-1"></i>
                                                            <span>بحث متقدم</span>
                                                        </label>
                                                    </div>


                                                    <div class="form-group mr-4">
                                                        <label class="mr-2"> من تاريخ </label>
                                                        <input type="date" name="from_date" id="from-date" value="2021-09-25" class="form-control">
                                                    </div>
                                                    <div class="form-group mr-4">
                                                        <label class="mr-2"> الي تاريخ </label>
                                                        <input type="date" name="from_date" id="from-date" value="2021-09-25" class="form-control">
                                                    </div>



                                                    <button type="submit" class="btn btn-primary">
                                                        <span>بحث</span>
                                                        <i class="fa fa-search"></i>
                                                    </button>
                                                </form>
                                                <div class="d-md-flex justify-content-between">

                                                    <div id="datatable_filter" class="dataTables_filter"><label><input type="search" class="" placeholder="بحث" aria-controls="datatable"></label></div>

                                                    <div class="dt-buttons"> <button class="btn btn-default" tabindex="0" aria-controls="datatable" type="button"><span>طباعة <i class="fa fa-print"></i></span></button> <button class="btn btn-success" tabindex="0" aria-controls="datatable" type="button"><span>اكسل <i class="fa fa-file-excel"></i></span></button> </div>

                                                </div>
                                            </div>




                                            <table id="datatable" class="datatable table table-bordered table-striped dataTable no-footer" role="grid">
                                                <thead>
                                                    <tr role="row">
                                                        <th class="sorting_disabled" rowspan="1" colspan="1"># </th>

                                                        <th class="sorting_disabled" rowspan="1" colspan="1">
                                                            رقم مكتب العمل

                                                        </th>
                                                        <th class="sorting_disabled" rowspan="1" colspan="1">
الكفيل	                                                        </th>
                                                        <th class="sorting_disabled" rowspan="1" colspan="1">
ت الكفيل	                                                        </th>
                                                        <th class="sorting_disabled" rowspan="1" colspan="1">
اسم الوثيقة	                                                        </th>
                                                        <th class="sorting_disabled" rowspan="1" colspan="1">
                                                            تاريخ الاصدارة
                                                        </th>
                                                           <th class="sorting_disabled" rowspan="1" colspan="1">
                                                            تاريخ الانتهاء
                                                        </th>
                                                        <th class="sorting_disabled" rowspan="1" colspan="1">
                                                            جهه الاصدار
                                                        </th>

 <th class="sorting_disabled" rowspan="1" colspan="1">
البلد
                                                        </th>

 <th class="sorting_disabled" rowspan="1" colspan="1">
ملاحظه
                                                        </th>

                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr role="row" class="odd">
                                                        <td></td>
                                                        <td> </td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                           <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                                                <ul class="pagination">
                                                    <li class="paginate_button page-item previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">السابق</a></li>
                                                    <li class="paginate_button page-item active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                                    <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                                    <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                                                    <li class="paginate_button page-item next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0" class="page-link">التالي</a></li>
                                                </ul>
                                            </div>









                                        </section>
                                    </div>

                                    <div class="tab-pane fade " id="tabs-warehouse" role="tabpanel" aria-labelledby="tabs-warehouse-tab">
                                        <section class="content">
                                            <div class="card-extra clearfix pt-2 pb-3 mb-3">
                                                <form action="" method="GET" class="form-inline guide-advanced-search" novalidate="">
                                                    <input type="hidden" name="_token" value="cAFJKjhjoqZ8XW0J41SJVlZeKazkTsCGGDp8H4Kb">
                                                    <div class="form-group mr-">
                                                        <label>
                                                            <i class="fa fa-cogs ml-1"></i>
                                                            <span>بحث متقدم</span>
                                                        </label>
                                                    </div>

                                                    <div class="form-group mr-4">
                                                        <label class="mr-2"> من تاريخ </label>
                                                        <input type="date" name="from_date" id="from-date" value="2021-09-25" class="form-control">
                                                    </div>
                                                    <div class="form-group mr-4">
                                                        <label class="mr-2"> الي تاريخ </label>
                                                        <input type="date" name="from_date" id="from-date" value="2021-09-25" class="form-control">
                                                    </div>



                                                    <button type="submit" class="btn btn-primary">
                                                        <span>بحث</span>
                                                        <i class="fa fa-search"></i>
                                                    </button>
                                                </form>
                                                <div class="d-md-flex justify-content-between">

                                                    <div id="datatable_filter" class="dataTables_filter"><label><input type="search" class="" placeholder="بحث" aria-controls="datatable"></label></div>

                                                    <div class="dt-buttons"> <button class="btn btn-default" tabindex="0" aria-controls="datatable" type="button"><span>طباعة <i class="fa fa-print"></i></span></button> <button class="btn btn-success" tabindex="0" aria-controls="datatable" type="button"><span>اكسل <i class="fa fa-file-excel"></i></span></button> </div>

                                                </div>
                                            </div>


                                              <table id="datatable" class="datatable table table-bordered table-striped dataTable no-footer" role="grid">
                                                <thead>
                                                    <tr role="row">
                                                        <th class="sorting_disabled" rowspan="1" colspan="1"># </th>
                                                        <th class="sorting_disabled" rowspan="1" colspan="1">
 تاريخ الاشتراك	                                                        </th>
                                                        <th class="sorting_disabled" rowspan="1" colspan="1">
                                                           حالة المشترك

                                                        </th>
                                                        <th class="sorting_disabled" rowspan="1" colspan="1">
رقم مكتب العمل		                                                        </th>
                                                        <th class="sorting_disabled" rowspan="1" colspan="1">
الاجر الاساسي		                                                        </th>
                                                        <th class="sorting_disabled" rowspan="1" colspan="1">
الاجر الخاضع	 	                                                        </th>
                                                        <th class="sorting_disabled" rowspan="1" colspan="1">
                                                             نسبة الاجر على الموظف
                                                        </th>
                                                           <th class="sorting_disabled" rowspan="1" colspan="1">
                                                            نسبة الاجر على الشركة
                                                        </th>
                                                        <th class="sorting_disabled" rowspan="1" colspan="1">
بدل عمولات
                                                        </th>

 <th class="sorting_disabled" rowspan="1" colspan="1">
بدل سكن
                                                        </th>
                                                         <th class="sorting_disabled" rowspan="1" colspan="1">
بدل اخري
                                                        </th>

 <th class="sorting_disabled" rowspan="1" colspan="1">
ملاحظه
                                                        </th>

                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr role="row" class="odd">
                                                        <td></td>
                                                        <td> </td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                           <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                                                <ul class="pagination">
                                                    <li class="paginate_button page-item previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">السابق</a></li>
                                                    <li class="paginate_button page-item active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                                    <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                                    <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                                                    <li class="paginate_button page-item next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0" class="page-link">التالي</a></li>
                                                </ul>
                                            </div>








                                        </section>
                                    </div>

                                    <div class="tab-pane fade " id="tabs-1" role="tabpanel" aria-labelledby="tabs-1-tab">
                                        <section class="content">
                                            <div class="modal fade" id="jobtitlestModal2" tabindex="-1" role="dialog" aria-labelledby="jobtitlestModal2Label" style="display: none;" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="jobtitlestModal2Label">اضافة</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                        </div>
                                                        <form action="job-titles.html" method="post" novalidate="">
                                                            <input type="hidden" name="_token" value="h101Moov2kEDoN7GAZ5dSATxgNsC62iHlz1B5MYZ">
                                                            <div class="modal-body">

                                                                <div class="form-group mr-2">
                                                                    <label class="mr-2" for="class"> الموظف </label>
                                                                    <select name="class" id="class" class=" custom-select" data-select2-id="class" tabindex="-1" aria-hidden="true">
                                                                        <option value="1">اسم الموظف 1</option>
                                                                        <option value="11">اسم الموظف 2</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group mr-2">
                                                                    <label class="mr-2" for="class"> شركة التأمين </label>
                                                                    <select name="class" id="class" class=" custom-select" data-select2-id="class" tabindex="-1" aria-hidden="true">
                                                                        <option value="1">اسم شركة 1</option>
                                                                        <option value="11">اسم شركة 2</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="title"> فئه التامين</label>
                                                                    <input type="number" class="form-control">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="title"> صلاحية التامينات</label>
                                                                    <input type="number" class="form-control">
                                                                </div>

                                                            </div>
                                                            <div class="modal-footer justify-content-start">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                                                                <button type="submit" class="btn btn-primary add">حفظ</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="card text-right shadow-none">

                                                        <!-- /.card-header -->
                                                        <div class="card-body">
                                                            <div class="card-extra clearfix pt-2 pb-3 mb-3">
                                                                <form action="" method="GET" class="form-inline guide-advanced-search" novalidate="">
                                                                    <input type="hidden" name="_token" value="cAFJKjhjoqZ8XW0J41SJVlZeKazkTsCGGDp8H4Kb">
                                                                    <div class="form-group mr-">
                                                                        <label>
                                                                            <i class="fa fa-cogs ml-1"></i>
                                                                            <span>بحث متقدم</span>
                                                                        </label>
                                                                    </div>


                                                                    <div class="form-group mr-4">
                                                                        <label class="mr-2"> من تاريخ </label>
                                                                        <input type="date" name="from_date" id="from-date" value="2021-09-25" class="form-control">
                                                                    </div>
                                                                    <div class="form-group mr-4">
                                                                        <label class="mr-2"> الي تاريخ </label>
                                                                        <input type="date" name="from_date" id="from-date" value="2021-09-25" class="form-control">
                                                                    </div>



                                                                    <button type="submit" class="btn btn-primary">
                                                                        <span>بحث</span>
                                                                        <i class="fa fa-search"></i>
                                                                    </button>
                                                                </form>
                                                                <div class="d-md-flex justify-content-between">

                                                                    <div id="datatable_filter" class="dataTables_filter"><label><input type="search" class="" placeholder="بحث" aria-controls="datatable"></label></div>

                                                                    <div class="dt-buttons"> <button class="btn btn-default" tabindex="0" aria-controls="datatable" type="button"><span>طباعة <i class="fa fa-print"></i></span></button> <button class="btn btn-success" tabindex="0" aria-controls="datatable" type="button"><span>اكسل <i class="fa fa-file-excel"></i></span></button> </div>

                                                                </div>
                                                            </div>

                                                            <div id="datatable_wrapper" class="dataTables_wrapper no-footer">

                                                                <table id="datatable" class="datatable table table-bordered table-striped dataTable no-footer" role="grid">
                                                                    <thead>
                                                                        <tr role="row">
                                                                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 172px;"># </th>
                                                                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 455px;">
                                                                                الموظف
                                                                            </th>
                                                                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 455px;">
                                                                                فئه التامين
                                                                            </th>
                                                                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 455px;">
                                                                                صلاحية التامين
                                                                            </th>
                                                                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 455px;">
                                                                                شركة التامين
                                                                            </th>

                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>

                                                                        <tr role="row" class="odd">
                                                                            <td>1</td>
                                                                            <td> الموظف </td>
                                                                            <td>38</td>
                                                                            <td>1/12/2021</td>
                                                                            <td>اسم شركة التامين </td>

                                                                        </tr>
                                                                    </tbody>
                                                                </table>

                                                            </div>
                                                        </div>
                                                        <!-- /.card-body -->
                                                    </div>
                                                    <!-- /.card -->
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.row -->
                                        </section>
                                    </div>

                                    <div class="tab-pane fade " id="tabs-2" role="tabpanel" aria-labelledby="tabs-2-tab">
                                        <section class="content">

                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="card text-right shadow-none">
                                                        <div class="d-lg-flex bg-gray-light justify-content-lg-between px-4 py-3">
                                                            <h4 class="align-self-center">
                                                                المؤهلات
                                                            </h4>

                                                        </div>
                                                        <!-- /.card-header -->
                                                        <div class="card-body">
                                                            <div class="card-extra clearfix pt-2 pb-3 mb-3">
                                                                <form action="" method="GET" class="form-inline guide-advanced-search" novalidate="">
                                                                    <input type="hidden" name="_token" value="cAFJKjhjoqZ8XW0J41SJVlZeKazkTsCGGDp8H4Kb">
                                                                    <div class="form-group mr-">
                                                                        <label>
                                                                            <i class="fa fa-cogs ml-1"></i>
                                                                            <span>بحث متقدم</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group mr-2">
                                                                        <label class="mr-2" for="class">نوع الموهل</label>
                                                                        <select name="class" id="class" class=" custom-select" data-select2-id="class" tabindex="-1" aria-hidden="true">
                                                                            <option value="all" selected="" data-select2-id="2">الكل</option>

                                                                        </select>
                                                                    </div>


                                                                    <div class="form-group mr-4">
                                                                        <label class="mr-2"> من تاريخ </label>
                                                                        <input type="date" name="from_date" id="from-date" value="2021-09-25" class="form-control">
                                                                    </div>
                                                                    <div class="form-group mr-4">
                                                                        <label class="mr-2"> الي تاريخ </label>
                                                                        <input type="date" name="from_date" id="from-date" value="2021-09-25" class="form-control">
                                                                    </div>



                                                                    <button type="submit" class="btn btn-primary">
                                                                        <span>بحث</span>
                                                                        <i class="fa fa-search"></i>
                                                                    </button>
                                                                </form>
                                                                <div class="d-md-flex justify-content-between">

                                                                    <div id="datatable_filter" class="dataTables_filter"><label><input type="search" class="" placeholder="بحث" aria-controls="datatable"></label></div>

                                                                    <div class="dt-buttons"> <button class="btn btn-default" tabindex="0" aria-controls="datatable" type="button"><span>طباعة <i class="fa fa-print"></i></span></button> <button class="btn btn-success" tabindex="0" aria-controls="datatable" type="button"><span>اكسل <i class="fa fa-file-excel"></i></span></button> </div>

                                                                </div>
                                                            </div>

                                                            <div id="datatable_wrapper" class="dataTables_wrapper no-footer">

                                                                <table id="datatable" class="datatable table table-bordered table-striped dataTable no-footer" role="grid">
                                                                    <thead>
                                                                        <tr role="row">
                                                                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 172px;"># </th>
                                                                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 455px;">
                                                                                الموظف
                                                                            </th>
                                                                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 455px;">
                                                                                المؤهل
                                                                            </th>
                                                                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 455px;">
                                                                                التخصص
                                                                            </th>
                                                                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 455px;">
                                                                                الجامعة
                                                                            </th>
                                                                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 455px;">
                                                                                مكان الحصول
                                                                            </th>
                                                                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 455px;">
                                                                                سنة التخرج
                                                                            </th>

                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>

                                                                        <tr role="row" class="odd">
                                                                            <td>1</td>
                                                                            <td> الموظف </td>
                                                                            <td>المؤهل</td>
                                                                            <td>التخصص</td>
                                                                            <td>اسم الجامعة </td>
                                                                            <td>البلد</td>
                                                                            <td>2009</td>

                                                                        </tr>
                                                                    </tbody>
                                                                </table>

                                                            </div>
                                                        </div>
                                                        <!-- /.card-body -->
                                                    </div>
                                                    <!-- /.card -->
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.row -->
                                        </section>
                                    </div>


                                    <div class="tab-pane fade " id="tabs-4" role="tabpanel" aria-labelledby="tabs-4-tab">
                                        <section class="content">

                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="card text-right shadow-none">
                                                        <div class="d-lg-flex bg-gray-light justify-content-lg-between px-4 py-3">
                                                            <h4 class="align-self-center">
                                                                الدورات
                                                            </h4>

                                                        </div>
                                                        <!-- /.card-header -->
                                                        <div class="card-body">
                                                            <div class="card-extra clearfix pt-2 pb-3 mb-3">
                                                                <form action="" method="GET" class="form-inline guide-advanced-search" novalidate="">
                                                                    <input type="hidden" name="_token" value="cAFJKjhjoqZ8XW0J41SJVlZeKazkTsCGGDp8H4Kb">
                                                                    <div class="form-group mr-">
                                                                        <label>
                                                                            <i class="fa fa-cogs ml-1"></i>
                                                                            <span>بحث متقدم</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group mr-2">
                                                                        <label class="mr-2" for="class"> المسمي الوظيفي</label>
                                                                        <select name="class" id="class" class=" custom-select" data-select2-id="class" tabindex="-1" aria-hidden="true">
                                                                            <option value="all" selected="" data-select2-id="2">الكل</option>

                                                                        </select>
                                                                    </div>


                                                                    <div class="form-group mr-4">
                                                                        <label class="mr-2"> من تاريخ </label>
                                                                        <input type="date" name="from_date" id="from-date" value="2021-09-25" class="form-control">
                                                                    </div>
                                                                    <div class="form-group mr-4">
                                                                        <label class="mr-2"> الي تاريخ </label>
                                                                        <input type="date" name="from_date" id="from-date" value="2021-09-25" class="form-control">
                                                                    </div>



                                                                    <button type="submit" class="btn btn-primary">
                                                                        <span>بحث</span>
                                                                        <i class="fa fa-search"></i>
                                                                    </button>
                                                                </form>
                                                                <div class="d-md-flex justify-content-between">

                                                                    <div id="datatable_filter" class="dataTables_filter"><label><input type="search" class="" placeholder="بحث" aria-controls="datatable"></label></div>

                                                                    <div class="dt-buttons"> <button class="btn btn-default" tabindex="0" aria-controls="datatable" type="button"><span>طباعة <i class="fa fa-print"></i></span></button> <button class="btn btn-success" tabindex="0" aria-controls="datatable" type="button"><span>اكسل <i class="fa fa-file-excel"></i></span></button> </div>

                                                                </div>
                                                            </div>

                                                            <div id="datatable_wrapper" class="dataTables_wrapper no-footer">

                                                                <table id="datatable" class="datatable table table-bordered table-striped dataTable no-footer" role="grid">
                                                                    <thead>
                                                                        <tr role="row">
                                                                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 172px;"># </th>
                                                                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 455px;">
                                                                                الموظف
                                                                            </th>
                                                                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 455px;">
                                                                                مجال الدورة
                                                                            </th>
                                                                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 455px;">
                                                                                المسمي الوظيفي
                                                                            </th>
                                                                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 455px;">
                                                                                الجهة
                                                                            </th>
                                                                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 455px;">
                                                                                تاريخ البدء
                                                                            </th>
                                                                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 455px;">
                                                                                تاريخ الانتهاء
                                                                            </th>
                                                                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 455px;">
                                                                                مدتها
                                                                            </th>

                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>

                                                                        <tr role="row" class="odd">
                                                                            <td>1</td>
                                                                            <td> الموظف </td>
                                                                            <td>المجال</td>
                                                                            <td>مدير</td>
                                                                            <td> اسم الجهة </td>
                                                                            <td>2/23/2021</td>
                                                                            <td>4/23/2021</td>
                                                                            <td>23</td>


                                                                        </tr>
                                                                    </tbody>
                                                                </table>

                                                            </div>
                                                        </div>
                                                        <!-- /.card-body -->
                                                    </div>
                                                    <!-- /.card -->
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.row -->
                                        </section>
                                    </div>

                                    <div class="tab-pane fade " id="tabs-5" role="tabpanel" aria-labelledby="tabs-5-tab">
                                        <section class="content">

                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="card text-right shadow-none">
                                                        <div class="d-lg-flex bg-gray-light justify-content-lg-between px-4 py-3">
                                                            <h4 class="align-self-center">
                                                                اللغات
                                                            </h4>

                                                        </div>
                                                        <!-- /.card-header -->
                                                        <div class="card-body">

                                                            <div id="datatable_wrapper" class="dataTables_wrapper no-footer">

                                                                <table id="datatable" class="datatable table table-bordered table-striped dataTable no-footer" role="grid">
                                                                    <thead>
                                                                        <tr role="row">
                                                                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 172px;"># </th>
                                                                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 455px;">
                                                                                الموظف
                                                                            </th>
                                                                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 455px;">
                                                                                اللغة الام
                                                                            </th>
                                                                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 455px;">
                                                                                تقييم اللغة
                                                                            </th>


                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>

                                                                        <tr role="row" class="odd">
                                                                            <td>1</td>
                                                                            <td> الموظف </td>
                                                                            <td>اللغة</td>
                                                                            <td>8.5</td>

                                                                        </tr>
                                                                    </tbody>
                                                                </table>

                                                            </div>
                                                        </div>
                                                        <!-- /.card-body -->
                                                    </div>
                                                    <!-- /.card -->
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.row -->
                                        </section>
                                    </div>

                                    <div class="tab-pane fade " id="tabs-6" role="tabpanel" aria-labelledby="tabs-6-tab">
                                        <section class="content">

                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="card text-right shadow-none">
                                                        <div class="d-lg-flex bg-gray-light justify-content-lg-between px-4 py-3">
                                                            <h4 class="align-self-center">
                                                                العهد
                                                            </h4>

                                                        </div>
                                                        <!-- /.card-header -->
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="card  shadow-none">
                                                                    <div class="card-extra clearfix pt-2 pb-3 mb-3">
                                                                        <form action="" method="GET" class="form-inline guide-advanced-search" novalidate="">
                                                                            <input type="hidden" name="_token" value="cAFJKjhjoqZ8XW0J41SJVlZeKazkTsCGGDp8H4Kb">
                                                                            <div class="form-group mr-">
                                                                                <label>
                                                                                    <i class="fa fa-cogs ml-1"></i>
                                                                                    <span>بحث متقدم</span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-group mr-2">
                                                                                <label class="mr-2" for="class">نوع العهدة</label>
                                                                                <select name="class" id="class" class=" custom-select" data-select2-id="class" tabindex="-1" aria-hidden="true">
                                                                                    <option value="all" selected="" data-select2-id="2">الكل</option>

                                                                                </select>
                                                                            </div>


                                                                            <div class="form-group mr-4">
                                                                                <label class="mr-2"> من تاريخ </label>
                                                                                <input type="date" name="from_date" id="from-date" value="2021-09-25" class="form-control">
                                                                            </div>
                                                                            <div class="form-group mr-4">
                                                                                <label class="mr-2"> الي تاريخ </label>
                                                                                <input type="date" name="from_date" id="from-date" value="2021-09-25" class="form-control">
                                                                            </div>



                                                                            <button type="submit" class="btn btn-primary">
                                                                                <span>بحث</span>
                                                                                <i class="fa fa-search"></i>
                                                                            </button>
                                                                        </form>
                                                                        <div class="d-md-flex justify-content-between">

                                                                            <div id="datatable_filter" class="dataTables_filter"><label><input type="search" class="" placeholder="بحث" aria-controls="datatable"></label></div>

                                                                            <div class="dt-buttons"> <button class="btn btn-default" tabindex="0" aria-controls="datatable" type="button"><span>طباعة <i class="fa fa-print"></i></span></button> <button class="btn btn-success" tabindex="0" aria-controls="datatable" type="button"><span>اكسل <i class="fa fa-file-excel"></i></span></button> </div>

                                                                        </div>
                                                                    </div>

                                                                    <!-- /.card-header -->
                                                                    <div class="card-body">

                                                                          <table id="datatable" class="datatable table table-bordered table-striped dataTable no-footer" role="grid">
                                                <thead>
                                                    <tr role="row">
                                                        <th class="sorting_disabled" rowspan="1" colspan="1"># </th>

                                                        <th class="sorting_disabled" rowspan="1" colspan="1">
                                                          رقم الطلب

                                                        </th>
                                                        <th class="sorting_disabled" rowspan="1" colspan="1">
رقم العهدة		                                                        </th>
                                                        <th class="sorting_disabled" rowspan="1" colspan="1">
 نوعها	                                                        </th>
                                                        <th class="sorting_disabled" rowspan="1" colspan="1">
 الوحده	                                                        </th>
                                                        <th class="sorting_disabled" rowspan="1" colspan="1">
                                                            العدد
                                                        </th>
                                                           <th class="sorting_disabled" rowspan="1" colspan="1">
                                                             حاله العهده
                                                        </th>
                                                        <th class="sorting_disabled" rowspan="1" colspan="1">
                                                             الغرض منها
                                                        </th>

 <th class="sorting_disabled" rowspan="1" colspan="1">
صلاحيه العهدة
                                                        </th>

 <th class="sorting_disabled" rowspan="1" colspan="1">
التاريخ
                                                        </th>
                                                         <th class="sorting_disabled" rowspan="1" colspan="1">
ننوع الحركة
                                                        </th>


                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr role="row" class="odd">
                                                        <td></td>
                                                        <td> </td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                           <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                                                <ul class="pagination">
                                                    <li class="paginate_button page-item previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">السابق</a></li>
                                                    <li class="paginate_button page-item active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                                    <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                                    <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                                                    <li class="paginate_button page-item next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0" class="page-link">التالي</a></li>
                                                </ul>
                                            </div>









                                                                    </div>
                                                                    <!-- /.card-body -->
                                                                </div>
                                                                <!-- /.card -->
                                                            </div>
                                                            <!-- /.col -->
                                                        </div>


                                                        <!-- /.card-body -->
                                                    </div>
                                                    <!-- /.card -->
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.row -->
                                        </section>
                                    </div>

                                    <div class="tab-pane fade " id="tabs-7" role="tabpanel" aria-labelledby="tabs-7-tab">
                                        <section class="content">

                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="card text-right shadow-none">
                                                        <div class="d-lg-flex bg-gray-light justify-content-lg-between px-4 py-3">
                                                            <h4 class="align-self-center">
                                                                الاجازات
                                                            </h4>

                                                        </div>
                                                        <!-- /.card-header -->
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="card  shadow-none">

                                                                    <!-- /.card-header -->
                                                                    <div class="card-body">
                                                                        <div class="card-extra clearfix pt-2 pb-3 mb-3">
                                                                            <form action="" method="GET" class="form-inline guide-advanced-search" novalidate="">
                                                                                <input type="hidden" name="_token" value="cAFJKjhjoqZ8XW0J41SJVlZeKazkTsCGGDp8H4Kb">
                                                                                <div class="form-group mr-">
                                                                                    <label>
                                                                                        <i class="fa fa-cogs ml-1"></i>
                                                                                        <span>بحث متقدم</span>
                                                                                    </label>
                                                                                </div>
                                                                                <div class="form-group mr-2">
                                                                                    <label class="mr-2" for="class">نوع الاجازة</label>
                                                                                    <select name="class" id="class" class=" custom-select" data-select2-id="class" tabindex="-1" aria-hidden="true">
                                                                                        <option value="all" selected="" data-select2-id="2">الكل</option>
                                                                                        <option value="1"> الموظفين 1</option>
                                                                                        <option value="11"> الموظفين 2</option>
                                                                                    </select>
                                                                                </div>


                                                                                <div class="form-group mr-4">
                                                                                    <label class="mr-2"> من تاريخ </label>
                                                                                    <input type="date" name="from_date" id="from-date" value="2021-09-25" class="form-control">
                                                                                </div>
                                                                                <div class="form-group mr-4">
                                                                                    <label class="mr-2"> الي تاريخ </label>
                                                                                    <input type="date" name="from_date" id="from-date" value="2021-09-25" class="form-control">
                                                                                </div>



                                                                                <button type="submit" class="btn btn-primary">
                                                                                    <span>بحث</span>
                                                                                    <i class="fa fa-search"></i>
                                                                                </button>
                                                                            </form>
                                                                            <div class="d-md-flex justify-content-between">

                                                                                <div id="datatable_filter" class="dataTables_filter"><label><input type="search" class="" placeholder="بحث" aria-controls="datatable"></label></div>

                                                                                <div class="dt-buttons"> <button class="btn btn-default" tabindex="0" aria-controls="datatable" type="button"><span>طباعة <i class="fa fa-print"></i></span></button> <button class="btn btn-success" tabindex="0" aria-controls="datatable" type="button"><span>اكسل <i class="fa fa-file-excel"></i></span></button> </div>

                                                                            </div>
                                                                        </div>











                                                                        <div class="row">

                                                                        <div class="col-md-6">


                                                                        <table class="table table-striped">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td> السنة </td>
                                                                                    <td>
                                                                                        اسم الجهة
                                                                                    </td>
                                                                                </tr>

                                                                                <tr>

                                                                                    <td style="width: 20%;">اسم الموظف </td>
                                                                                    <td>12111</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>نوع الاجازة </td>
                                                                                    <td>نوع العهدة </td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td>تبداء من تاريخ </td>
                                                                                    <td>
                                                                                        1-1-2020
                                                                                    </td>
                                                                                </tr>



                                                                                <tr>
                                                                                    <td>تنتهي في تاريخ </td>
                                                                                    <td>
                                                                                        2020
                                                                                    </td>
                                                                                </tr>



                                                                                <tr>
                                                                                    <td>عدد ايام الاجازة </td>
                                                                                    <td>
                                                                                        4/8/2022
                                                                                    </td>
                                                                                </tr>



                                                                                <tr>
                                                                                    <td> عدد الايام المدفوعة </td>
                                                                                    <td>
                                                                                        4/8/2020
                                                                                    </td>
                                                                                </tr>



                                                                                <tr>
                                                                                    <td> عدد الايام المدفوعة </td>
                                                                                    <td>
                                                                                        4/8/2020
                                                                                    </td>
                                                                                </tr>


                                                                                <tr>
                                                                                    <td>عدد ايام تاخر بعد انتهاء الاجازةة </td>
                                                                                    <td>
                                                                                        4/8/2020
                                                                                    </td>
                                                                                </tr>


                                                                                <tr>
                                                                                    <td> عدد الايام رجوع الموظف قبل انتهاء ايام الاجازة المحجوزة </td>
                                                                                    <td>
                                                                                        4/8/2020
                                                                                    </td>
                                                                                </tr>


                                                                                <tr>
                                                                                    <td> راتب الاجازة </td>
                                                                                    <td>
                                                                                        4/8/2020
                                                                                    </td>
                                                                                </tr>


                                                                                <tr>
                                                                                    <td> تحتاج الى تذاكر </td>
                                                                                    <td>
                                                                                        4/8/2020
                                                                                    </td>
                                                                                </tr>


                                                                                <tr>
                                                                                    <td> طلب قيمة التذاكر </td>
                                                                                    <td>
                                                                                        4/8/2020
                                                                                    </td>
                                                                                </tr>


                                                                                <tr>
                                                                                    <td> رقم التواصل </td>
                                                                                    <td>
                                                                                        4/8/2020
                                                                                    </td>
                                                                                </tr>


                                                                                <tr>
                                                                                    <td> رقم الموظف البديل</td>
                                                                                    <td>
                                                                                        4/8/2020
                                                                                    </td>
                                                                                </tr>


                                                                                <tr>
                                                                                    <td> اسم الموظف البديل </td>
                                                                                    <td>
                                                                                        4/8/2020
                                                                                    </td>
                                                                                </tr>


                                                                                <tr>
                                                                                    <td> وظيفة الموظف البديل </td>
                                                                                    <td>
                                                                                        4/8/2020
                                                                                    </td>
                                                                                </tr>




                                                                                <tr>
                                                                                    <td>رقم الطلب </td>
                                                                                    <td>
                                                                                        اسم الجهة
                                                                                    </td>
                                                                                </tr>


                                                                            </tbody>
                                                                        </table>
                                </div>
                                                                             <div class="col-md-6">


                                                                        <table class="table table-striped">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td> السنة </td>
                                                                                    <td>
                                                                                        اسم الجهة
                                                                                    </td>
                                                                                </tr>

                                                                                <tr>

                                                                                    <td style="width: 20%;">اسم الموظف </td>
                                                                                    <td>12111</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>نوع الاجازة </td>
                                                                                    <td>نوع العهدة </td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td>تبداء من تاريخ </td>
                                                                                    <td>
                                                                                        1-1-2020
                                                                                    </td>
                                                                                </tr>



                                                                                <tr>
                                                                                    <td>تنتهي في تاريخ </td>
                                                                                    <td>
                                                                                        2020
                                                                                    </td>
                                                                                </tr>



                                                                                <tr>
                                                                                    <td>عدد ايام الاجازة </td>
                                                                                    <td>
                                                                                        4/8/2022
                                                                                    </td>
                                                                                </tr>



                                                                                <tr>
                                                                                    <td> عدد الايام المدفوعة </td>
                                                                                    <td>
                                                                                        4/8/2020
                                                                                    </td>
                                                                                </tr>



                                                                                <tr>
                                                                                    <td> عدد الايام المدفوعة </td>
                                                                                    <td>
                                                                                        4/8/2020
                                                                                    </td>
                                                                                </tr>


                                                                                <tr>
                                                                                    <td>عدد ايام تاخر بعد انتهاء الاجازةة </td>
                                                                                    <td>
                                                                                        4/8/2020
                                                                                    </td>
                                                                                </tr>


                                                                                <tr>
                                                                                    <td> عدد الايام رجوع الموظف قبل انتهاء ايام الاجازة المحجوزة </td>
                                                                                    <td>
                                                                                        4/8/2020
                                                                                    </td>
                                                                                </tr>


                                                                                <tr>
                                                                                    <td> راتب الاجازة </td>
                                                                                    <td>
                                                                                        4/8/2020
                                                                                    </td>
                                                                                </tr>


                                                                                <tr>
                                                                                    <td> تحتاج الى تذاكر </td>
                                                                                    <td>
                                                                                        4/8/2020
                                                                                    </td>
                                                                                </tr>


                                                                                <tr>
                                                                                    <td> طلب قيمة التذاكر </td>
                                                                                    <td>
                                                                                        4/8/2020
                                                                                    </td>
                                                                                </tr>


                                                                                <tr>
                                                                                    <td> رقم التواصل </td>
                                                                                    <td>
                                                                                        4/8/2020
                                                                                    </td>
                                                                                </tr>


                                                                                <tr>
                                                                                    <td> رقم الموظف البديل</td>
                                                                                    <td>
                                                                                        4/8/2020
                                                                                    </td>
                                                                                </tr>


                                                                                <tr>
                                                                                    <td> اسم الموظف البديل </td>
                                                                                    <td>
                                                                                        4/8/2020
                                                                                    </td>
                                                                                </tr>


                                                                                <tr>
                                                                                    <td> وظيفة الموظف البديل </td>
                                                                                    <td>
                                                                                        4/8/2020
                                                                                    </td>
                                                                                </tr>




                                                                                <tr>
                                                                                    <td>رقم الطلب </td>
                                                                                    <td>
                                                                                        اسم الجهة
                                                                                    </td>
                                                                                </tr>


                                                                            </tbody>
                                                                        </table>
                                </div>


                                             </div>

                                            <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                                                <ul class="pagination">
                                                    <li class="paginate_button page-item previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">السابق</a></li>
                                                    <li class="paginate_button page-item active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                                    <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                                    <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                                                    <li class="paginate_button page-item next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0" class="page-link">التالي</a></li>
                                                </ul>
                                            </div>



                                                                    </div>
                                                                    <!-- /.card-body -->
                                                                </div>
                                                                <!-- /.card -->
                                                            </div>
                                                            <!-- /.col -->
                                                        </div>


                                                        <!-- /.card-body -->
                                                    </div>
                                                    <!-- /.card -->
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.row -->
                                        </section>
                                    </div>

                                    <div class="tab-pane fade " id="tabs-8" role="tabpanel" aria-labelledby="tabs-8-tab">
                                        <section class="content">

                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="card text-right shadow-none">
                                                        <div class="d-lg-flex bg-gray-light justify-content-lg-between px-4 py-3">
                                                            <h4 class="align-self-center">
                                                                الحضور والانصراف
                                                            </h4>

                                                        </div>
                                                        <!-- /.card-header -->
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="card  shadow-none">

                                                                    <!-- /.card-header -->
                                                                    <div class="card-body">
                                                                        <div class="card-body p-0">
                                                                            <div class="table-responsive">
                                                                                <table class="table m-0">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th>Order ID</th>
                                                                                            <th>Item</th>
                                                                                            <th>Status</th>
                                                                                            <th>Popularity</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                                                                            <td>Call of Duty IV</td>
                                                                                            <td><span class="badge badge-success">Shipped</span></td>
                                                                                            <td>
                                                                                                <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td><a href="pages/examples/invoice.html">OR1848</a></td>
                                                                                            <td>Samsung Smart TV</td>
                                                                                            <td><span class="badge badge-warning">Pending</span></td>
                                                                                            <td>
                                                                                                <div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                                                                            <td>iPhone 6 Plus</td>
                                                                                            <td><span class="badge badge-danger">Delivered</span></td>
                                                                                            <td>
                                                                                                <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                                                                            <td>Samsung Smart TV</td>
                                                                                            <td><span class="badge badge-info">Processing</span></td>
                                                                                            <td>
                                                                                                <div class="sparkbar" data-color="#00c0ef" data-height="20">90,80,-90,70,-61,83,63</div>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td><a href="pages/examples/invoice.html">OR1848</a></td>
                                                                                            <td>Samsung Smart TV</td>
                                                                                            <td><span class="badge badge-warning">Pending</span></td>
                                                                                            <td>
                                                                                                <div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                                                                            <td>iPhone 6 Plus</td>
                                                                                            <td><span class="badge badge-danger">Delivered</span></td>
                                                                                            <td>
                                                                                                <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                                                                            <td>Call of Duty IV</td>
                                                                                            <td><span class="badge badge-success">Shipped</span></td>
                                                                                            <td>
                                                                                                <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                            <!-- /.table-responsive -->
                                                                        </div>

                                                                    </div>
                                                                    <!-- /.card-body -->
                                                                </div>
                                                                <!-- /.card -->
                                                            </div>
                                                            <!-- /.col -->
                                                        </div>


                                                        <!-- /.card-body -->
                                                    </div>
                                                    <!-- /.card -->
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.row -->
                                        </section>
                                    </div>


                                    <div class="tab-pane fade " id="tabs-9" role="tabpanel" aria-labelledby="tabs-9-tab">
                                        <section class="content">

                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="card text-right shadow-none">
                                                        <div class="d-lg-flex bg-gray-light justify-content-lg-between px-4 py-3">
                                                            <h4 class="align-self-center">
                                                                الاستحقاقات
                                                            </h4>

                                                        </div>
                                                        <!-- /.card-header -->
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="card  shadow-none">

                                                                    <!-- /.card-header -->
                                                                    <div class="card-body">

                                                                        <div class="card-extra clearfix pt-2 pb-3 mb-3">
                                                                            <form action="" method="GET" class="form-inline guide-advanced-search" novalidate="">
                                                                                <input type="hidden" name="_token" value="cAFJKjhjoqZ8XW0J41SJVlZeKazkTsCGGDp8H4Kb">
                                                                                <div class="form-group mr-">
                                                                                    <label>
                                                                                        <i class="fa fa-cogs ml-1"></i>
                                                                                        <span>بحث متقدم</span>
                                                                                    </label>
                                                                                </div>



                                                                                <div class="form-group mr-4">
                                                                                    <label class="mr-2"> من تاريخ </label>
                                                                                    <input type="date" name="from_date" id="from-date" value="2021-09-25" class="form-control">
                                                                                </div>
                                                                                <div class="form-group mr-4">
                                                                                    <label class="mr-2"> الي تاريخ </label>
                                                                                    <input type="date" name="from_date" id="from-date" value="2021-09-25" class="form-control">
                                                                                </div>



                                                                                <button type="submit" class="btn btn-primary">
                                                                                    <span>بحث</span>
                                                                                    <i class="fa fa-search"></i>
                                                                                </button>
                                                                            </form>
                                                                            <div class="d-md-flex justify-content-between">

                                                                                <div id="datatable_filter" class="dataTables_filter"><label><input type="search" class="" placeholder="بحث" aria-controls="datatable"></label></div>

                                                                                <div class="dt-buttons"> <button class="btn btn-default" tabindex="0" aria-controls="datatable" type="button"><span>طباعة <i class="fa fa-print"></i></span></button> <button class="btn btn-success" tabindex="0" aria-controls="datatable" type="button"><span>اكسل <i class="fa fa-file-excel"></i></span></button> </div>

                                                                            </div>
                                                                        </div>


                                                                        <div class="card-body p-0">



                                            <table id="datatable" class="datatable table table-bordered table-striped dataTable no-footer" role="grid">
                                                <thead>
                                                    <tr role="row">
                                                        <th class="sorting_disabled" rowspan="1" colspan="1"># </th>

                                                        <th class="sorting_disabled" rowspan="1" colspan="1">
                                                            البند

                                                        </th>
                                                        <th class="sorting_disabled" rowspan="1" colspan="1">
العملة	                                                        </th>
                                                        <th class="sorting_disabled" rowspan="1" colspan="1">
مركز التكلفة	 	                                                        </th>
                                                        <th class="sorting_disabled" rowspan="1" colspan="1">
طريقة الحساب</th>
                                                        <th class="sorting_disabled" rowspan="1" colspan="1">
                                                            طريقة الدفع
                                                        </th>
                                                           <th class="sorting_disabled" rowspan="1" colspan="1">
                                                            حماية الاجور
                                                        </th>
                                                        <th class="sorting_disabled" rowspan="1" colspan="1">
                                                            حالة البند
                                                        </th>

 <th class="sorting_disabled" rowspan="1" colspan="1">
البيان
                                                        </th>

 <th class="sorting_disabled" rowspan="1" colspan="1">
ملاحظه
                                                        </th>

                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr role="row" class="odd">
                                                        <td></td>
                                                        <td> </td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                           <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                                                <ul class="pagination">
                                                    <li class="paginate_button page-item previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">السابق</a></li>
                                                    <li class="paginate_button page-item active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                                    <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                                    <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                                                    <li class="paginate_button page-item next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0" class="page-link">التالي</a></li>
                                                </ul>
                                            </div>







                                                                        </div>

                                                                    </div>
                                                                    <!-- /.card-body -->
                                                                </div>
                                                                <!-- /.card -->
                                                            </div>
                                                            <!-- /.col -->
                                                        </div>


                                                        <!-- /.card-body -->
                                                    </div>
                                                    <!-- /.card -->
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.row -->
                                        </section>
                                    </div>



                                    <div class="tab-pane fade " id="tabs-10" role="tabpanel" aria-labelledby="tabs-10-tab">

                                        <section class="content">
                                            <div class="modal fade" id="exprtitlestModal5" tabindex="-1" role="dialog" aria-labelledby="exprtitlestModal5" style="display: none;" aria-hidden="true">


                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="card text-right shadow-none">
                                                        <div class="d-lg-flex bg-gray-light justify-content-lg-between px-4 py-3">
                                                            <h4 class="align-self-center">
                                                                الخبرات
                                                            </h4>

                                                        </div>
                                                        <!-- /.card-header -->
                                                        <div class="card-body">
                                                            <div class="card-extra clearfix pt-2 pb-3 mb-3">
                                                                <form action="" method="GET" class="form-inline guide-advanced-search" novalidate="">
                                                                    <input type="hidden" name="_token" value="cAFJKjhjoqZ8XW0J41SJVlZeKazkTsCGGDp8H4Kb">
                                                                    <div class="form-group mr-">
                                                                        <label>
                                                                            <i class="fa fa-cogs ml-1"></i>
                                                                            <span>بحث متقدم</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group mr-2">
                                                                        <label class="mr-2" for="class">نوع الوثيقه</label>
                                                                        <select name="class" id="class" class=" custom-select" data-select2-id="class" tabindex="-1" aria-hidden="true">
                                                                            <option value="all" selected="" data-select2-id="2">الكل</option>
                                                                            <option value="1"> الموظفين 1</option>
                                                                            <option value="11"> الموظفين 2</option>
                                                                        </select>
                                                                    </div>


                                                                    <div class="form-group mr-4">
                                                                        <label class="mr-2"> من تاريخ </label>
                                                                        <input type="date" name="from_date" id="from-date" value="2021-09-25" class="form-control">
                                                                    </div>
                                                                    <div class="form-group mr-4">
                                                                        <label class="mr-2"> الي تاريخ </label>
                                                                        <input type="date" name="from_date" id="from-date" value="2021-09-25" class="form-control">
                                                                    </div>



                                                                    <button type="submit" class="btn btn-primary">
                                                                        <span>بحث</span>
                                                                        <i class="fa fa-search"></i>
                                                                    </button>
                                                                </form>

                                                            </div>

                                                            <div id="datatable_wrapper" class="dataTables_wrapper no-footer">
                                                                <div class="d-md-flex justify-content-between">

                                                                    <div id="datatable_filter" class="dataTables_filter"><label><input type="search" class="" placeholder="بحث" aria-controls="datatable"></label></div>

                                                                    <div class="dt-buttons"> <button class="btn btn-default" tabindex="0" aria-controls="datatable" type="button"><span>طباعة <i class="fa fa-print"></i></span></button> <button class="btn btn-success" tabindex="0" aria-controls="datatable" type="button"><span>اكسل <i class="fa fa-file-excel"></i></span></button> </div>

                                                                </div>
                                                                <table id="datatable" class="datatable table table-bordered table-striped dataTable no-footer" role="grid">
                                                                    <thead>
                                                                        <tr role="row">
                                                                            <th class="sorting_disabled" rowspan="1" colspan="1"># </th>
                                                                            <th class="sorting_disabled" rowspan="1" colspan="1">
                                                                                الموظف
                                                                            </th>
                                                                            <th class="sorting_disabled" rowspan="1" colspan="1">
                                                                                الخبرة

                                                                            </th>
                                                                            <th class="sorting_disabled" rowspan="1" colspan="1">
                                                                                الجهه
                                                                            </th>
                                                                            <th class="sorting_disabled" rowspan="1" colspan="1">
                                                                                تاريخ البداية
                                                                            </th>
                                                                            <th class="sorting_disabled" rowspan="1" colspan="1">
                                                                                تاريخ النهايه
                                                                            </th>

                                                                            <th class="sorting_disabled" rowspan="1" colspan="1">
                                                                                والخيارات</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>

                                                                        <tr role="row" class="odd">
                                                                            <td></td>
                                                                            <td> </td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td>

                                                                                <a href="view-employee-expe.html">
                                                                                    <button class="btn btn-info btn-xs departments update" data-action="#" data-title="خدمة العملاء" data-toggle="modal" data-target="#exprtitlestModal5"><i class="fa fa-eye"></i> تفاصيل</button>
                                                                                </a>



                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                                                                    <ul class="pagination">
                                                                        <li class="paginate_button page-item previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">السابق</a></li>
                                                                        <li class="paginate_button page-item active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                                                        <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                                                        <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                                                                        <li class="paginate_button page-item next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0" class="page-link">التالي</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /.card-body -->
                                                    </div>
                                                    <!-- /.card -->
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.row -->
                                        </section>
                                    </div>





                                    <!-- التابعين للموظف -->


                                    <div class="tab-pane fade " id="tabs-11" role="tabpanel" aria-labelledby="tabs-11-tab">

                                        <section class="content">

                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="card text-right shadow-none">
                                                        <div class="d-lg-flex bg-gray-light justify-content-lg-between px-4 py-3">
                                                            <h4 class="align-self-center">
                                                                التابعين للموظف
                                                            </h4>
                                                            <div class="align-self-center">

                                                                <button type="button" class="btn btn-tool" data-card-widget="maximize">
                                                                    <i class="fas fa-expand"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <!-- /.card-header -->
                                                        <div class="card-body">
                                                            <div class="card-extra clearfix pt-2 pb-3 mb-3">
                                                                <form action="" method="GET" class="form-inline guide-advanced-search" novalidate="">
                                                                    <input type="hidden" name="_token" value="cAFJKjhjoqZ8XW0J41SJVlZeKazkTsCGGDp8H4Kb">
                                                                    <div class="form-group mr-">
                                                                        <label>
                                                                            <i class="fa fa-cogs ml-1"></i>
                                                                            <span>بحث متقدم</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group mr-2">
                                                                        <label class="mr-2" for="class">الجنس </label>
                                                                        <select name="class" id="class" class=" custom-select" data-select2-id="class" tabindex="-1" aria-hidden="true">
                                                                            <option value="all" selected="" data-select2-id="2">الكل</option>

                                                                        </select>
                                                                    </div>


                                                                    <div class="form-group mr-4">
                                                                        <label class="mr-2"> من تاريخ </label>
                                                                        <input type="date" name="from_date" id="from-date" value="2021-09-25" class="form-control">
                                                                    </div>
                                                                    <div class="form-group mr-4">
                                                                        <label class="mr-2"> الي تاريخ </label>
                                                                        <input type="date" name="from_date" id="from-date" value="2021-09-25" class="form-control">
                                                                    </div>



                                                                    <button type="submit" class="btn btn-primary">
                                                                        <span>بحث</span>
                                                                        <i class="fa fa-search"></i>
                                                                    </button>
                                                                </form>

                                                            </div>

                                                            <div id="datatable_wrapper" class="dataTables_wrapper no-footer">
                                                                <div class="d-md-flex justify-content-between">

                                                                    <div id="datatable_filter" class="dataTables_filter"><label><input type="search" class="" placeholder="بحث" aria-controls="datatable"></label></div>

                                                                    <div class="dt-buttons"> <button class="btn btn-default" tabindex="0" aria-controls="datatable" type="button"><span>طباعة <i class="fa fa-print"></i></span></button> <button class="btn btn-success" tabindex="0" aria-controls="datatable" type="button"><span>اكسل <i class="fa fa-file-excel"></i></span></button> </div>

                                                                </div>
                                                                <table id="datatable" class="datatable table table-bordered table-striped dataTable no-footer" role="grid">
                                                                    <thead>
                                                                        <tr role="row">
                                                                            <th class="sorting_disabled" rowspan="1" colspan="1"># </th>
                                                                            <th class="sorting_disabled" rowspan="1" colspan="1">
                                                                                الموظف
                                                                            </th>
                                                                            <th class="sorting_disabled" rowspan="1" colspan="1">
                                                                                رقم الهوية

                                                                            </th>
                                                                            <th class="sorting_disabled" rowspan="1" colspan="1">
                                                                                الاسم
                                                                            </th>
                                                                            <th class="sorting_disabled" rowspan="1" colspan="1">
                                                                                الجنس
                                                                            </th>
                                                                            <th class="sorting_disabled" rowspan="1" colspan="1">
                                                                                الحالة الاجتماعية
                                                                            </th>
                                                                            <th class="sorting_disabled" rowspan="1" colspan="1">
                                                                                صلة القرابة
                                                                            </th>

                                                                            <th class="sorting_disabled" rowspan="1" colspan="1">
                                                                                والخيارات</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>

                                                                        <tr role="row" class="odd">
                                                                            <td></td>
                                                                            <td> </td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td>

                                                                                <a href="view-employee-tabian.html">
                                                                                    <button class="btn btn-info btn-xs departments update" data-action="#" data-title="خدمة العملاء" data-toggle="modal" data-target="#exprtitlestModal5"><i class="fa fa-eye"></i> تفاصيل</button>
                                                                                </a>


                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                                                                    <ul class="pagination">
                                                                        <li class="paginate_button page-item previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">السابق</a></li>
                                                                        <li class="paginate_button page-item active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                                                        <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                                                        <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                                                                        <li class="paginate_button page-item next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0" class="page-link">التالي</a></li>
                                                                    </ul>
                                                                </div>




                                                            </div>
                                                        </div>
                                                        <!-- /.card-body -->
                                                    </div>
                                                    <!-- /.card -->
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.row -->
                                        </section>
                                    </div>


                                    <!-- التابعين للموظف -->


                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- /.row -->
                </div><!-- /.container-fluid -->
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.querySelector(".delete").addEventListener('click', function() {
            Swal.fire({
                title: 'تأكيد الحذف',
                text: "سوف تتم عملية الحذف هل انت متأكد؟",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: 'إلغاء',
                confirmButtonText: 'تأكيد'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                        'تم الحذف',
                        'تم الحذف بنجاح',
                        'success'
                    )
                }
            })
        });
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <script src="./plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="./plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="./plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- ChartJS 1.0.2 -->
    <script src="./plugins/chartjs-old/Chart.min.js"></script>

    <!-- PAGE SCRIPTS -->
    <script src="./dist/js/pages/dashboard2.js"></script>
</body></html>
