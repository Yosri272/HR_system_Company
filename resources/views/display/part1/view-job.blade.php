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
                      <a href="{{ url('index') }}">نظام
                        نظام الموارد البشرية
                      </a>
                    </li>
                    <li class="breadcrumb-item">
                      <a href="{{ url('jobs') }}">
                        الوظائف
                      </a>
                    </li>
                    <li class="breadcrumb-item">
                      <span>الوظائف</span>
                    </li>
                  </ol>
                </div><!-- /.col -->
                <div class="col-sm-12">
                  <h1> تفاصيل الوظائف </h1>
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
                      aria-controls="tabs-stores" aria-selected="true">
                      التفاصيل
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="tabs-shelve-tab" data-toggle="pill" href="#tabs-shelve" role="tab"
                      aria-controls="tabs-shelve" aria-selected="false">
                      الموظف
                    </a>
                  </li>

                </ul>
              </div>
              <div class="card-body ">
                @foreach($a_viewData as $data)
                <div class="tab-content" id="tabs-tabContent">
                  <div class="tab-pane fade active show" id="tabs-stores" role="tabpanel"
                    aria-labelledby="tabs-stores-tab">
                    <section class="content">

                      <div class="card ">

                        <div class="modal-body">
                          <table class="table table-striped">
                            <tbody>

                              <tr>
                                <td style="width: 20%;"> الموظف </td>
                                <td> emply_nameAR </td>
                              </tr>


                              <tr>
                                <td> الدرجة الوظيفية </td>
                                <td> {{$data->jopdegree}} </td>
                              </tr>


                              <tr>
                                <td>المؤهل </td>
                                <td>  {{$data->qualification}} <a class="btn btn-info btn-xs mr-2" href="{{ url('view-qualification') }}"><i
                                      class="fa fa-eye"></i> عرض</a> </td>
                              </tr>


                              <tr>
                                <td> التخصص</td>
                                <td>  {{$data->specialties_name}}<a class="btn btn-info btn-xs mr-2" href="{{ url('view-specialization') }}"><i
                                      class="fa fa-eye"></i> عرض</a> </td>
                              </tr>

                              <tr>
                                <td> الفرع</td>
                                <td>  {{$data->branch_nameAR}} </td>
                              </tr>


                              <tr>
                                <td> تاريخ التعيين</td>
                                <td>  {{$data->date_hiring}} </td>
                              </tr>



                              <tr>
                                <td> القسم</td>
                                <td>  {{$data->dept_name}} </td>
                              </tr>


                              <tr>
                                <td>خطاب التعيين</td>
                                <td> {{$data->appointment_letter}} </td>
                              </tr>

                              <tr>
                                <td>ملاحظات</td>
                                <td> هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من
                                  إلى زيادة عدد الحروف التى يولدها التطبيق. </td>
                              </tr>

                            </tbody>
                          </table>
                        </div>
                      </div>

                    </section>
                  </div>

                  <div class="tab-pane fade" id="tabs-shelve" role="tabpanel" aria-labelledby="tabs-shelve-tab">
                    <section class="content">

                    </section>
                  </div>
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

  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
</body>
 @endsection
</html>
