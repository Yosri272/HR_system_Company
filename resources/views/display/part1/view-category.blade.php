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
                      <a href="{{ url('categories') }}">
                        الفئات
                      </a>
                    </li>
                    <li class="breadcrumb-item">
                      <span>تفاصيل الفئة</span>
                    </li>
                  </ol>
                </div><!-- /.col -->
                <div class="col-sm-12">
                  <h1> الفئة </h1>
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
                      aria-controls="tabs-shelve" aria-selected="false"> الدرجات الوظيفية </a>
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
                            <td style="width: 20%;">كود الفئة</td>
                            <td>{{$data->category_id}}</td>
                          </tr>
                          <tr>
                            <td>اسم الفئة </td>
                            <td>{{$data->category_Name}}</td>
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
                          <div class="card shadow-none text-right">

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
                                    <label class="mr-2" for="class">الفئة </label>
                                    <select name="class" id="class" class=" custom-select" data-select2-id="class" tabindex="-1"
                                      aria-hidden="true">
                                      <option value="all" selected="" data-select2-id="2">الكل</option>
                                      <option value="1">اسم الفئة 1</option>
                                      <option value="11">اسم الفئة 2</option>
                                    </select>
                                  </div>
                                  <div class="form-group mr-2">
                                    <label class="mr-2" for="qualifications">الجنسية</label>
                                    <select class="custom-select qualifications" name="qualifications" id="qualifications">
                                      <option value="all" selected="">الكل</option>
                                      <option value="1"> الجنسية </option>

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

                                  <div class="dt-buttons"> <button class="btn btn-default" tabindex="0"
                                      aria-controls="datatable" type="button"><span>طباعة <i
                                          class="fa fa-print"></i></span></button> <button class="btn btn-success" tabindex="0"
                                      aria-controls="datatable" type="button"><span>اكسل <i
                                          class="fa fa-file-excel"></i></span></button> </div>

                                </div>
                                <table id="datatable" class="datatable table table-bordered table-striped dataTable no-footer"
                                  role="grid">
                                  <thead>
                                    <tr role="row">
                                      <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 172px;">#</th>
                                      <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 455px;"> الدرجة</th>
                                      <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 455px;"> مسمي الدرجة
                                      </th>
                                      <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 455px;"> الفئة</th>
                                      <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 455px;"> العلاوة
                                        السنوية</th>
                                      <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 455px;"> نسبة العلاوة
                                      </th>
                                      <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 455px;"> ادني مرتب</th>
                                      <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 455px;"> اعلا مرتب</th>
                                      <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 859px;">والخيارات</th>
                                    </tr>
                                  </thead>
                                  <tbody>

                                    @foreach($sys_jopdegree as $data)
                        <tr role="row" class="odd">
						    <td>{{$data->jopdegree_id}}</td>
                            <td>{{$data->jopdegree}}</td>
                            <td>{{$data->jopdegree_name}}</td>
                             <td>{{$data->jop_category}}</td>
                            <td>{{$data->annualbonus}}</td>
                             <td>10%</td>
                            <td>{{$data->qualification_min}}</td>
                            <td>{{$data->qualification_hig}}</td>

                            <td>
                              <a class="btn btn-info btn-xs" href="{{ url('view-job-grades')}}/{{  $data->jopdegree_id  }}"><i class="fa fa-eye"></i>
                                عرض</a>
                              <button class="btn btn-warning btn-xs departments update" data-action="#"
                                data-title="خدمة العملاء" data-toggle="modal" data-target="#jobtitlestModal"><i
                                  class="fa fa-edit"></i> تعديل</button>
                                  <button  class="btn btn-danger btn-xs delete" >
                                    <i class="fa fa-trash"></i><a href="{{  url('daljob-grades')  }}/{{  $data->jopdegree_id  }}">حذف</a></button>

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
                                    {{  $sys_jopdegreee->links() }}
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
