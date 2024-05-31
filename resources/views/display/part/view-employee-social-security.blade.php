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
                        <a href="{{ url('employees') }}">
                            الموظفين
                        </a>
                      </li>
                    <li class="breadcrumb-item">
                      <span> تامين الموظف</span>
                    </li>
                  </ol>
                </div><!-- /.col -->
                <div class="col-sm-12">
                  <h1> تامين الموظف </h1>
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
                    <li class="nav-item ">
                      <a class="nav-link active" id="tabs-shelve-tab" data-toggle="pill" href="#tabs-shelve" role="tab"
                        aria-controls="tabs-shelve" aria-selected="false">التفاصيل    </a>
                    </li>
                  <li class="nav-item">
                    <a class="nav-link " id="tabs-stores-tab" data-toggle="pill" href="#tabs-stores" role="tab"
                      aria-controls="tabs-stores" aria-selected="true"> الموظف</a>
                  </li>

                </ul>
              </div>
              <div class="card-body ">
                <div class="tab-content" id="tabs-tabContent">
                    <div class="tab-pane fade active show" id="tabs-shelve" role="tabpanel" aria-labelledby="tabs-shelve-tab">
                        <section class="content">
                            <table class="table table-striped">
                              <tbody>

                                <tr>
                                  <td style="width: 20%;">تاريخ الاشتراك</td>
                                  <td>7/8/2021</td>
                                </tr>
                                <tr>
                                  <td> الموظف </td>
                                  <td>الموظف</td>
                                </tr>
                                <tr>
                                  <td> حالة المشترك</td>
                                  <td> حالة المشترك</td>
                                </tr>
                                <tr>
                                  <td>رقم مكتب العمل</td>
                                  <td>+98747147</td>
                                </tr>
                                <tr>
                                  <td> الاجر الاساسي </td>
                                  <td>87414</td>
                                </tr>
                                <tr>
                                  <td> الاجر الخاضع </td>
                                  <td>874</td>
                                </tr>
                                <tr>
                                  <td> نسبة الاجر على الموظف </td>
                                  <td>8%</td>
                                </tr>
                                <tr>
                                  <td> نسبة الاجر على الشركة </td>
                                  <td>12%</td>
                                </tr>
                                <tr>
                                  <td> بدل عمولات </td>
                                  <td>7471</td>
                                </tr>
                                <tr>
                                  <td> بدل سكن </td>
                                  <td>874</td>
                                </tr>
                                <tr>
                                  <td> بدلات اخرى </td>
                                  <td>22500</td>
                                </tr>
                                <tr>
                                  <td>ملاحظات</td>
                                  <td>هذا النص العربي هو مثال.</td>
                                </tr>


                              </tbody>
                            </table>
                          </section>
                      </div>

                  <div class="tab-pane fade " id="tabs-stores" role="tabpanel"
                    aria-labelledby="tabs-stores-tab">
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
                                <img class="img-circle elevation-2" src="./dist/img/default-150x150.png" alt="User Avatar">
                              </div>
                              <div class="card-footer">
                                <div class="row">
                                  <div class="col-sm-4 border-right">
                                    <div class="description-block">
                                      <h5 class="description-header">الجنسية </h5>
                                      <span class="description-text d-block">الجنسية</span>
                                      <a class="btn btn-info btn-xs" href="#"><i class="fa fa-eye"></i> عرض</a>
                                    </div>
                                    <!-- /.description-block -->
                                  </div>
                                  <!-- /.col -->
                                  <div class="col-sm-4 border-right">
                                    <div class="description-block">
                                      <h5 class="description-header"> البنك</h5>
                                      <span class="description-text d-block">البنك</span>
                                      <a class="btn btn-info btn-xs" href="#"><i class="fa fa-eye"></i> عرض</a>
                                    </div>
                                    <!-- /.description-block -->
                                  </div>
                                  <!-- /.col -->
                                  <div class="col-sm-4">
                                    <div class="description-block">
                                      <h5 class="description-header">الحالة</h5>
                                      <span class="description-text">Qav43345</span>
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
                                                    +871488774114
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
                                                <label>   العنوان في البلد الام </label>
                                                <div>
                                                    البلد/المدينة/الحي
                                                </div>
                                              </div>

                                          </div>
                                          <div class="col-lg-6">
                                              <div class="form-group">
                                                <label>   العنوان في المملكة </label>
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
                                            <label class="mr-2" for="qualifications">  الجنس</label>
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
                                            <label>  التحويلة</label>
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
                                          <label class="mr-2" for="qualifications">  البنك</label>
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
    document.querySelector(".delete").addEventListener('click', function () {
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
</body>
@endsection
</html>
