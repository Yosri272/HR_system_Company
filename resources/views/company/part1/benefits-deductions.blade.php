@extends ('layout.master')
@section('content')
@section('content1')
@section('content2')

         <!-- Content Header (Page header) -->
		  <br>
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
                      <span> الاستقطاع | الاستحقاق</span>
                    </li>
                  </ol>
                </div><!-- /.col -->
                <div class="col-sm-12">
                  <h1> الاستقطاع | الاستحقاق </h1>
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
                      الاستحقاقات
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="tabs-shelve-tab" data-toggle="pill" href="#tabs-shelve" role="tab"
                      aria-controls="tabs-shelve" aria-selected="false">
                      الاستقطاعات
                    </a>
                  </li>

                </ul>
              </div>
              <div class="card-body ">
                <div class="tab-content" id="tabs-tabContent">
                  <div class="tab-pane fade active show" id="tabs-stores" role="tabpanel"
                    aria-labelledby="tabs-stores-tab">
                    <section class="content">
                      <div class="modal fade" id="jobtitlestModal" tabindex="-1" role="dialog"
                        aria-labelledby="jobtitlestModalLabel" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="jobtitlestModalLabel">اضافة</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                              </button>
                            </div>
                            <form method="post" novalidate="">
                              <input type="hidden" name="_token" value="h101Moov2kEDoN7GAZ5dSATxgNsC62iHlz1B5MYZ">
                              <div class="modal-body">

                                <div class="row">
                                  <div class="col-lg-6">
                                    <div class="form-group mr-2">
                                      <label class="mr-2" for="class"> الموظف </label>
                                      <select name="class" id="class" class=" custom-select" data-select2-id="class"
                                        tabindex="-1" aria-hidden="true">
                                        <option value="1">اسم الموظف 1</option>
                                        <option value="11">اسم الموظف 2</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="col-lg-6">
                                    <div class="form-group mr-2">
                                      <label class="mr-2" for="class"> البند </label>
                                      <select name="class" id="class" class=" custom-select" data-select2-id="class"
                                        tabindex="-1" aria-hidden="true">
                                        <option value="1">البند 1</option>
                                        <option value="11">البند 2</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="col-lg-6">
                                    <div class="form-group mr-2">
                                      <label class="mr-2" for="class">العملة </label>
                                      <select name="class" id="class" class=" custom-select" data-select2-id="class"
                                        tabindex="-1" aria-hidden="true">
                                        <option value="1">اسم العملة 1</option>
                                        <option value="11">اسم العملة 2</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="col-lg-6">
                                    <div class="form-group mr-2">
                                      <label class="mr-2" for="class"> مركز التكلفة </label>
                                      <select name="class" id="class" class=" custom-select" data-select2-id="class"
                                        tabindex="-1" aria-hidden="true">
                                        <option value="1"> مركز التكلفة 1</option>
                                        <option value="11"> مركز التكلفة 2</option>
                                      </select>
                                    </div>
                                  </div>

                                  <div class="col-lg-4">
                                    <div class="form-group">
                                      <label for="from-date"> المبلغ</label>
                                      <input type="number" class="form-control">
                                    </div>
                                  </div>

                                  <div class="col-lg-4">
                                    <div class="form-group">
                                      <label for="from-date"> طريقة الحساب</label>
                                      <input type="number" class="form-control">
                                    </div>
                                  </div>

                                  <div class="col-lg-4">
                                    <div class="form-group">
                                      <label for="from-date"> طريقة الدفع</label>
                                      <input type="number" class="form-control">
                                    </div>
                                  </div>

                                  <div class="col-lg-6">
                                    <div class="form-group">
                                      <label for="from-date"> حماية الاجور</label>
                                      <input type="number" class="form-control">
                                    </div>
                                  </div>

                                  <div class="col-lg-6">
                                    <div class="form-group">
                                      <label for="from-date"> حالة البند</label>
                                      <input type="number" class="form-control">
                                    </div>
                                  </div>

                                </div>
                                <div class="form-group">
                                  <label>البيان</label>
                                  <textarea class="form-control" placeholder="البيان" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                  <label>ملاحظات</label>
                                  <textarea class="form-control" placeholder="ملاحظات" rows="3"></textarea>
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
                            <div class="d-lg-flex bg-gray-light justify-content-lg-between px-4 py-3">
                              <h4 class="align-self-center"> عرض الاستحقاقات الموظفين </h4>
                              <div class="align-self-center">
                                <button class="btn btn-primary departments" data-toggle="modal"
                                  data-target="#jobtitlestModal">
                                  <i class="fa fa-plus"></i> اضافة
                                </button>

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
                                    <label class="mr-2" for="class">الموظف </label>
                                    <select name="class" id="class" class=" custom-select" data-select2-id="class"
                                      tabindex="-1" aria-hidden="true">
                                      <option value="all" selected="" data-select2-id="2">الكل</option>
                                      <option value="1">اسم الموظف 1</option>
                                      <option value="11">اسم الموظف 2</option>
                                    </select>
                                  </div>
                                  <div class="form-group mr-2">
                                    <label class="mr-2" for="qualifications">
                                      العملة
                                    </label>
                                    <select class="custom-select qualifications">
                                      <option value="all" selected="">الكل</option>
                                      <option value="1"> العملة 1 </option>

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
                                        البند</th>
                                      <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 172px;">
                                        المبلغ</th>
                                      <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 172px;">
                                        العملة</th>
                                      <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 172px;">
                                        حالة البند</th>
                                      <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 859px;">
                                        والخيارات</th>
                                    </tr>
                                  </thead>
                                  <tbody>

                                    <tr role="row" class="odd">
                                      <td>1</td>
                                      <td> علي محمد علي </td>
                                      <td>123</td>
                                      <td> 8741 </td>
                                      <td>USD</td>
                                      <td> في الانتظار </td>
                                      <td>
                                        <a class="btn btn-info btn-xs" href="view-benefits.html"><i
                                            class="fa fa-eye"></i>
                                          عرض</a>
                                        <div class="dropdown d-inline-block">
                                          <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                            data-toggle="dropdown" aria-expanded="false">
                                            <span>المزيد</span>
                                            <span class="caret"></span>

                                          </button>
                                          <div class="dropdown-menu" style="">
                                            <a href="view-benefits.html" class="dropdown-item text-info">
                                              <i class="fa fa-eye"></i>
                                              <span>تفاصيل</span>
                                            </a>

                                            <button data-toggle="modal" data-target="#jobtitlestModal"
                                              class="dropdown-item text-warning">
                                              <i class="fa fa-edit"></i>
                                              <span>تعديل</span>
                                            </button>
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
                                    <li class="paginate_button page-item previous disabled" id="example1_previous"><a
                                        href="#" aria-controls="example1" data-dt-idx="0" tabindex="0"
                                        class="page-link">السابق</a></li>
                                    <li class="paginate_button page-item active"><a href="#" aria-controls="example1"
                                        data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="example1"
                                        data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="example1"
                                        data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                                    <li class="paginate_button page-item next" id="example1_next"><a href="#"
                                        aria-controls="example1" data-dt-idx="7" tabindex="0"
                                        class="page-link">التالي</a></li>
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

                  <div class="tab-pane fade" id="tabs-shelve" role="tabpanel" aria-labelledby="tabs-shelve-tab">
                    <section class="content">
                      <div class="modal fade" id="shelveModal" tabindex="-1" role="dialog" aria-labelledby="shelveModal"
                        style="display: none;" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="shelveModalLabel">اضافة</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                              </button>
                            </div>
                            <form method="post" novalidate="">
                              <input type="hidden" name="_token" value="h101Moov2kEDoN7GAZ5dSATxgNsC62iHlz1B5MYZ">
                              <div class="modal-body">

                                <div class="row">
                                  <div class="col-lg-12">
                                    <div class="form-group mr-2">
                                      <label class="mr-2" for="class"> الموظف </label>
                                      <select name="class" id="class" class=" custom-select" data-select2-id="class"
                                        tabindex="-1" aria-hidden="true">
                                        <option value="1">اسم الموظف 1</option>
                                        <option value="11">اسم الموظف 2</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="col-lg-6">
                                    <div class="form-group mr-2">
                                      <label class="mr-2" for="class"> البند </label>
                                      <select name="class" id="class" class=" custom-select" data-select2-id="class"
                                        tabindex="-1" aria-hidden="true">
                                        <option value="1">البند 1</option>
                                        <option value="11">البند 2</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="col-lg-6">
                                    <div class="form-group mr-2">
                                      <label class="mr-2" for="class">العملة </label>
                                      <select name="class" id="class" class=" custom-select" data-select2-id="class"
                                        tabindex="-1" aria-hidden="true">
                                        <option value="1">اسم العملة 1</option>
                                        <option value="11">اسم العملة 2</option>
                                      </select>
                                    </div>
                                  </div>


                                  <div class="col-lg-4">
                                    <div class="form-group">
                                      <label for="from-date"> المبلغ</label>
                                      <input type="number" class="form-control">
                                    </div>
                                  </div>


                                  <div class="col-lg-4">
                                    <div class="form-group">
                                      <label for="from-date"> حالة البند</label>
                                      <input type="number" class="form-control">
                                    </div>
                                  </div>
                                  <div class="col-lg-4">
                                    <div class="form-group">
                                      <label for="from-date"> النسبة</label>
                                      <input type="number" class="form-control">
                                    </div>
                                  </div>
                                  <div class="col-lg-4">
                                    <div class="form-group">
                                      <label for="from-date"> نوع الاستقطاع</label>
                                      <input type="number" class="form-control">
                                    </div>
                                  </div>
                                  <div class="col-lg-4">
                                    <div class="form-group">
                                      <label for="from-date"> سبب الاستقطاع</label>
                                      <input type="number" class="form-control">
                                    </div>
                                  </div>
                                  <div class="col-lg-4">
                                    <div class="form-group">
                                      <label for="from-date"> الشهر </label>
                                      <input type="date" name="from_date" id="from-date" value="2021-09-25"
                                        class="form-control">
                                    </div>

                                  </div>

                                </div>

                                <div class="form-group">
                                  <label>ملاحظات</label>
                                  <textarea class="form-control" placeholder="ملاحظات" rows="3"></textarea>
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
                            <div class="d-lg-flex bg-gray-light justify-content-lg-between px-4 py-3">
                              <h4 class="align-self-center">
                                عرض استقطاعات الموظفين
                              </h4>
                              <div class="align-self-center">
                                <button class="btn btn-primary departments" data-toggle="modal"
                                  data-target="#shelveModal">
                                  <i class="fa fa-plus"></i> اضافة
                                </button>

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
                                    <label class="mr-2" for="class">الموظف </label>
                                    <select name="class" id="class" class=" custom-select" data-select2-id="class"
                                      tabindex="-1" aria-hidden="true">
                                      <option value="all" selected="" data-select2-id="2">الكل</option>
                                      <option value="1">اسم الموظف 1</option>
                                      <option value="11">اسم الموظف 2</option>
                                    </select>
                                  </div>
                                  <div class="form-group mr-2">
                                    <label class="mr-2" for="qualifications">
                                      العملة
                                    </label>
                                    <select class="custom-select qualifications">
                                      <option value="all" selected="">الكل</option>
                                      <option value="1"> العملة 1 </option>

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
                                        البند</th>
                                      <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 172px;">
                                        المبلغ</th>
                                      <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 172px;">
                                        العملة</th>
                                      <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 172px;">
                                        التاريخ</th>
                                      <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 859px;">
                                        والخيارات</th>
                                    </tr>
                                  </thead>
                                  <tbody>

                                    <tr role="row" class="odd">
                                      <td>1</td>
                                      <td> علي محمد علي </td>
                                      <td>123</td>
                                      <td> 8741 </td>
                                      <td>USD</td>
                                      <td> في الانتظار </td>
                                      <td>
                                        <a class="btn btn-info btn-xs" href="view-deductions.html"><i
                                            class="fa fa-eye"></i>
                                          عرض</a>
                                        <div class="dropdown d-inline-block">
                                          <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                            data-toggle="dropdown" aria-expanded="false">
                                            <span>المزيد</span>
                                            <span class="caret"></span>

                                          </button>
                                          <div class="dropdown-menu" style="">
                                            <a href="view-deductions.html" class="dropdown-item text-info">
                                              <i class="fa fa-eye"></i>
                                              <span>تفاصيل</span>
                                            </a>

                                            <button data-toggle="modal" data-target="#shelveModal"
                                              class="dropdown-item text-warning">
                                              <i class="fa fa-edit"></i>
                                              <span>تعديل</span>
                                            </button>
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
                                    <li class="paginate_button page-item previous disabled" id="example1_previous"><a
                                        href="#" aria-controls="example1" data-dt-idx="0" tabindex="0"
                                        class="page-link">السابق</a></li>
                                    <li class="paginate_button page-item active"><a href="#" aria-controls="example1"
                                        data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="example1"
                                        data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="example1"
                                        data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                                    <li class="paginate_button page-item next" id="example1_next"><a href="#"
                                        aria-controls="example1" data-dt-idx="7" tabindex="0"
                                        class="page-link">التالي</a></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <!-- /.card-body -->
                          </div>
                          <!-- /.card -->
                        </div>
                        <!-- /.col -->
              @endsection
            </div>
            <!-- /.row -->



