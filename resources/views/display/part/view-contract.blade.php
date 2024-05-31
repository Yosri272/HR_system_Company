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
                      <a href="{{ url('contract') }}">
                        العقود
                      </a>
                    </li>
                    <li class="breadcrumb-item">
                      <span>تفاصيل العقد</span>
                    </li>
                  </ol>
                </div><!-- /.col -->
                <div class="col-sm-12">
                  <h1>تفاصيل العقد </h1>
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
                      aria-controls="tabs-stores" aria-selected="false">
                      التفاصيل
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link " id="tabs-shelve2-tab" data-toggle="pill" href="#tabs-shelve2" role="tab"
                      aria-controls="tabs-shelve2" aria-selected="true">
                      بنود العقد
                    </a>
                  </li>

                </ul>
              </div>
              <div class="card-body ">
                <div class="tab-content" id="tabs-tabContent">
                  <div class="tab-pane fade active show" id="tabs-stores" role="tabpanel"
                    aria-labelledby="tabs-stores-tab">
                    <section class="content">
                      <div class="row">
                        @foreach($a_viewData as $data)
                        <div class="col-lg-6">
                             <div class="card   border  ">
                            <div class="card-header">
                              <h3 class="card-title"><i class="fas fa-list"></i>
                                <span> بيانات الشركة </span></h3>

                              <div class="card-tools">
                              </div>
                              <!-- /.card-tools -->
                            </div>
                            <div class="card-body">
                              <table class="table table-striped">
                                <tbody>

                                  <tr>
                                    <td> اسم الشركة </td>
                                    <td>{{$data->comp_nameAR}} </td>
                                  </tr>

                                  <tr>
                                    <td>الفرع </td>
                                    <td> {{$data->branch_nameAR}} </td>
                                  </tr>
                                  <tr>
                                    <td>القسم</td>
                                    <td>{{$data->dept_name}}</td>

                                  </tr>

                                </tbody>
                              </table>

                            </div>

                          </div>
                                    <div class="card   border  ">
                            <div class="card-header">
                              <h3 class="card-title"><i class="fas fa-list"></i>
                                <span> بيانات الموظف </span></h3>

                              <div class="card-tools">
                              </div>
                              <!-- /.card-tools -->
                            </div>
                            <div class="card-body">
                              <table class="table table-striped">
                                <tbody>

                                  <tr>
                                    <td>اسم الموظف </td>
                                    <td>{{$data->emply_nameAR}}  </td>
                                  </tr>



                                </tbody>
                              </table>

                            </div>

                          </div>

                             <div class="card   border  ">
                            <div class="card-header">
                              <h3 class="card-title"><i class="fas fa-list"></i>
                                <span> بيانات العقد </span></h3>

                              <div class="card-tools">
                              </div>
                              <!-- /.card-tools -->
                            </div>
                            <div class="card-body">
                              <table class="table table-striped">
                                <tbody>

                                  <tr>
                                    <td>نوع العقد </td>
                                    <td>{{$data->contracttype_name}}</td>
                                  </tr>

                                  <tr>
                                    <td>تاريخ العقد</td>
                                    <td> {{$data->contract_date}} </td>
                                  </tr>
                                  <tr>
                                    <td>تاريخ بداية العقد</td>
                                    <td> {{$data->contract_starting}}</td>

                                  </tr>
                                  <tr>
                                    <td>تاريخ نهاية العقد</td>
                                    <td> {{$data->contract_end}} </td>

                                  </tr>
                                  <tr>
                                    <td>تاريخ التجديد</td>
                                    <td> {{$data->date_renewal}} </td>

                                  </tr>
                                  <tr>
                                    <td>حالة العقد</td>
                                    <td> {{$data->contract_status}} </td>

                                  </tr>


                                </tbody>
                              </table>

                            </div>

                          </div>



                          <div class="card   border ">
                            <div class="card-header">
                              <h3 class="card-title"><i class="fas fa-money-bill"></i>
                                <span> العمولة </span></h3>

                              <div class="card-tools">
                              </div>
                              <!-- /.card-tools -->
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                              <table class="table table-striped">
                                <tbody>
                                  <tr>
                                    <td>العمولة </td>
                                    <td> {{$data->commission}} </td>
                                  </tr>
                                  <tr>
                                    <td>عمولة نهاية العقد </td>
                                    <td> {{$data->contractend_comm}} </td>
                                  </tr>
                                  <tr>
                                    <td>نسبة العمولة </td>
                                    <td> {{$data->rate_commission}} </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>

                          </div>
                        </div>

                        <div class="col-lg-6">
                          <div class="card  mb-3 border  ">
                            <div class="card-header">
                              <h3 class="card-title"><i class="fas fa-list"></i>
                                <span> العلاوات و البدلات </span></h3>

                              <div class="card-tools">
                              </div>
                              <!-- /.card-tools -->
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body ">
                              <table class="table table-striped">
                                <tbody>
                                  <tr>
                                    <td>الراتب الاساسي</td>
                                    <td> {{$data->basic_salary}} </td>
                                  </tr>

                                  <tr>
                                    <td>له علاوات</td>
                                    <td> {{$data->bonuses}} </td>
                                  </tr>

                                  <tr>
                                    <td>له بدل سكن</td>
                                    <td> {{$data->housing}} </td>
                                  </tr>

                                  <tr>
                                    <td>ساعات اضافية</td>
                                    <td> {{$data->hour_extra}} </td>
                                  </tr>

                                  <tr>
                                    <td> المواصلات</td>
                                    <td> {{$data->transport}} </td>
                                  </tr>

                                  <tr>
                                    <td>بدل اتصال</td>
                                    <td> {{$data->contact}} </td>
                                  </tr>

                                  <tr>
                                    <td>بدل معيشة</td>
                                    <td> {{$data->living}} </td>
                                  </tr>

                                  <tr>
                                    <td>طبيعة عمل</td>
                                    <td> {{$data->empy_satus}} </td>
                                  </tr>

                                  <tr>
                                    <td>له تذاكر</td>
                                    <td> {{$data->tickets}} </td>
                                  </tr>

                                  <tr>
                                    <td>عدد التذاكر</td>
                                    <td> {{$data->tickets_number}} </td>
                                  </tr>
                                  <tr>
                                    <td>نوع التذاكر</td>
                                    <td>{{$data->tickets_type}}</td>
                                  </tr>


                                </tbody>
                              </table>

                            </div>

                          </div>
                        </div>

                        @endforeach
                      </div>
                    </section>
                  </div>

                  <div class="tab-pane fade " id="tabs-shelve2" role="tabpanel" aria-labelledby="tabs-shelve2-tab">
                    <section class="content">

                      <div class="row">
                        <div class="col-12">
                          <div class="card text-right shadow-none">

                            <!-- /.card-header -->
                            <div class="card-body">

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
                                      <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 172px;"> #
                                      </th>
                                      <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 455px;">
                                        اسم البند</th>
                                      <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 455px;">
                                        مستوي البند</th>

                                      <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 859px;">
                                        والخيارات</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @foreach($sys_contractitem as $data)
                                    <tr role="row" class="odd">
                                    <td>{{$data->contractitem_id}}</td>
                                    <td>{{$data->contractitem_nameAR}}</td>
							        <td>{{$data->item_leve}}</td>
                                      <td>

                                        <button class="btn btn-warning btn-xs departments update" data-action="#"
                                          data-title="خدمة العملاء" data-toggle="modal" data-target="#shelve32Modal"><i
                                            class="fa fa-edit"></i> تعديل</button>
                                        <button  class="btn btn-danger btn-xs delete" >
                                           <i class="fa fa-trash"></i>
										   <a href="{{  url('dalcontractitem')  }}/{{  $data->contractitem_id  }}">حذف</a></button>

                                      </td>
                                    </tr>

									 @endforeach
                                  </tbody>
                                </table>
                                <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                                  <ul class="pagination">
                                    {{  $sys_contractitemm->links() }}
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
                    @endsection
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
