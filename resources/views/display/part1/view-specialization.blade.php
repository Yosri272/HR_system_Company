@extends ('layout.master')
@section('content')
@section('content1')
@section('content2')

         <!-- Content Header (Page header) -->
		  <br>
          <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-12">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a href="{{ url('index') }}">نظام الموارد البشرية
                      </a>
                    </li>
                    <li class="breadcrumb-item">
                      <a href="{{ url('specialization') }}">
                        التخصصات
                      </a>
                    </li>
                    <li class="breadcrumb-item">
                      <span>تفاصيل التخصص</span>
                    </li>
                  </ol>
                </div><!-- /.col -->
                <div class="col-sm-12">
                  <h1> التخصص </h1>
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
                    <a class="nav-link active" id="tabs-stores-tab" data-toggle="pill" href="#tabs-stores" role="tab"
                      aria-controls="tabs-stores" aria-selected="true"> التفاصيل </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="tabs-shelve-tab" data-toggle="pill" href="#tabs-shelve" role="tab"
                      aria-controls="tabs-shelve" aria-selected="false"> الموظفين </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="tabs-OPEN_BALANCE-tab" data-toggle="pill" href="#tabs-OPEN_BALANCE"
                      role="tab" aria-controls="tabs-OPEN_BALANCE" aria-selected="false"> الوظائف </a>
                  </li>

                </ul>
              </div>
              <div class="card-body ">

                <div class="tab-content" id="tabs-tabContent">
                  <div class="tab-pane fade active show" id="tabs-stores" role="tabpanel"
                    aria-labelledby="tabs-stores-tab">
                    <section class="content">
                      <table class="table table-striped">
                        <tbody>
                            @foreach($a_viewData as $data)
                          <tr>
                            <td style="width: 20%;">كود التخصص</td>
                            <td>{{$data->specialties_Id}}</td>
                          </tr>
                          <tr>
                            <td>اسم التخصص </td>
                            <td>{{$data->specialties_name}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>

                    </section>
                  </div>
                  <div class="tab-pane fade" id="tabs-shelve" role="tabpanel" aria-labelledby="tabs-shelve-tab">
                    <section class="content">

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
                                  <div class="form-group mr-2">
                                    <label class="mr-2" for="class">الجنسية </label>
                                    <select name="class" id="class" class=" custom-select" data-select2-id="class"
                                      tabindex="-1" aria-hidden="true">
                                      <option value="all" selected="" data-select2-id="2">الكل</option>
                                      <option value="1">اسم الجنسية 1</option>
                                      <option value="11">اسم الجنسية 2</option>
                                    </select>
                                  </div>
                                  <div class="form-group mr-2">
                                    <label class="mr-2" for="qualifications">
                                      المهنة
                                    </label>
                                    <select class="custom-select qualifications">
                                      <option value="all" selected="">الكل</option>
                                      <option value="1"> المهنة 1 </option>

                                    </select>
                                  </div>

                                  <button type="submit" class="btn btn-primary">
                                    <span>بحث</span>
                                    <i class="fa fa-search"></i>
                                  </button>
                                </form>
                              </div>
                              <div id="datatable_wrapper" class="dataTables_wrapper no-footer">
                                <div class="d-md-flex justify-content-between">

                                  <div id="datatable_filter" class="dataTables_filter"><label><input type="search"
                                        class="" placeholder="بحث" aria-controls="datatable"></label></div>

                                  <div class="dt-buttons"> <button class="btn btn-default" tabindex="0"
                                      aria-controls="datatable" type="button"><span>طباعة <i
                                          class="fa fa-print"></i></span></button> <button class="btn btn-success"
                                      tabindex="0" aria-controls="datatable" type="button"><span>اكسل <i
                                          class="fa fa-file-excel"></i></span></button> </div>

                                </div>
                                <table id="datatable"
                                  class="datatable table table-bordered table-striped dataTable no-footer" role="grid">
                                  <thead>
                                    <tr role="row">
                                      <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 172px;"># </th>
                                      <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 455px;"> اسم
                                        الموظف</th>
                                      <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 172px;">
                                        التلفون</th>
                                      <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 172px;">
                                        الجنس</th>
                                      <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 172px;">
                                        المهنة</th>
                                      <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 172px;">
                                        الحالة</th>
                                      <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 859px;">
                                        والخيارات</th>
                                    </tr>
                                  </thead>
                                  <tbody>

                                    <tr role="row" class="odd">
                                      <td>1</td>
                                      <td> علي محمد علي </td>
                                      <td>0986234568</td>
                                      <td> ذكر </td>
                                      <td>مشرف</td>
                                      <td> مباشر للعمل </td>
                                      <td>
                                        <a class="btn btn-info btn-xs" href="view-employee.html"><i
                                            class="fa fa-eye"></i>
                                          عرض</a>
                                        <div class="dropdown d-inline-block">
                                          <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                            data-toggle="dropdown" aria-expanded="false">
                                            <span>المزيد</span>
                                            <span class="caret"></span>

                                          </button>
                                          <div class="dropdown-menu" style="">
                                            <a href="view-employee.html" class="dropdown-item text-info">
                                              <i class="fa fa-eye"></i>
                                              <span>تفاصيل</span>
                                            </a>

                                            <a href="#" class="dropdown-item delete text-danger"
                                              data-form="#deleteForm-12127">
                                              <i class="fa fa-trash"></i>
                                              <span>حذف</span>
                                            </a>
                                          </div>
                                          <form id="deleteForm-12127" action="#" method="POST" novalidate="">
                                            <input type="hidden" name="_token"
                                              value="cAFJKjhjoqZ8XW0J41SJVlZeKazkTsCGGDp8H4Kb">
                                            <input type="hidden" name="_method" value="DELETE"> </form>
                                        </div>


                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                                <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                                  <ul class="pagination">
                                 /////////
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
                  <div class="tab-pane fade" id="tabs-OPEN_BALANCE" role="tabpanel"
                    aria-labelledby="tabs-OPEN_BALANCE-tab">
                    <section class="content">

                      <div class="row">
                        <div class="col-12">
                          <div class="card text-right">

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
                                    <label class="mr-2" for="class">التخصص </label>
                                    <select name="class" id="class" class=" custom-select" data-select2-id="class" tabindex="-1"
                                      aria-hidden="true">
                                      <option value="all" selected="" data-select2-id="2">الكل</option>
                                      <option value="1">اسم التخصص 1</option>
                                      <option value="11">اسم التخصص 2</option>
                                    </select>
                                  </div>
                                  <div class="form-group mr-2">
                                    <label class="mr-2" for="qualifications">الموظف</label>
                                    <select class="custom-select qualifications" name="qualifications" id="qualifications">
                                      <option value="all" selected="">الكل</option>
                                      <option value="1"> الموظف </option>

                                    </select>
                                  </div>

                                  <button type="submit" class="btn btn-primary">
                                    <span>بحث</span>
                                    <i class="fa fa-search"></i>
                                  </button>
                                </form>
                              </div>
                              <div id="datatable_wrapper" class="dataTables_wrapper no-footer">
                                <div class="d-md-flex justify-content-between">

                                  <div id="datatable_filter" class="dataTables_filter"><label><input type="search" class=""
                                        placeholder="بحث" aria-controls="datatable"></label></div>

                                  <div class="dt-buttons"> <button class="btn btn-default" tabindex="0" aria-controls="datatable"
                                      type="button"><span>طباعة <i class="fa fa-print"></i></span></button> <button
                                      class="btn btn-success" tabindex="0" aria-controls="datatable" type="button"><span>اكسل <i
                                          class="fa fa-file-excel"></i></span></button> </div>

                                </div>
                                <table id="datatable" class="datatable table table-bordered table-striped dataTable no-footer"
                                  role="grid">
                                  <thead>
                                    <tr role="row">
                                      <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 172px;">#</th>
                                      <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 455px;"> المؤهل</th>
                                      <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 455px;"> التخصص
                                      </th>
                                      <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 455px;"> الفرع</th>
                                      <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 455px;">
                                        القسم</th>
                                      <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 455px;"> تاريخ التعيين
                                      </th>
                                      <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 455px;"> الموظف </th>

                                      <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 859px;">والخيارات</th>
                                    </tr>
                                  </thead>
                                  <tbody>

                                    @foreach($sys_jopdata as $data)
                                    <tr role="row" class="odd">
                                        <td>{{$data->jop_id}}</td>
                                        <td>{{$data->qualification}}</td>
                                        <td>{{$data->specialties_name}}</td>
                                        <td>{{$data->branch_nameAR}}</td>
                                        <td>{{$data->dept_name}}</td>
                                        <td>{{$data->date_hiring}}</td>
                                       <td>{{$data->emply_nameAR}}</td>
                                      <td>
                                        <a class="btn btn-info btn-xs" href="{{ url('view-job') }}"><i class="fa fa-eye"></i>
                                          عرض</a>

                                        <button type="button" data-form="#deleteForm-1" class="btn btn-danger btn-xs delete"><i
                                            class="fa fa-trash"></i>
                                          <span>حذف</span> </button>
                                        <form id="deleteForm-1" action="#" method="POST" novalidate="">
                                          <input type="hidden" name="_token" value="h101Moov2kEDoN7GAZ5dSATxgNsC62iHlz1B5MYZ">
                                          <input type="hidden" name="_method" value="DELETE"> </form>
                                      </td>
                                    </tr>
                                    @endforeach
                                  </tbody>
                                </table>
                                <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                                  <ul class="pagination">
                                    {{  $sys_jopdataa->links() }}

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

  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
</body>
 @endsection
</html>
