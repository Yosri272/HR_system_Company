@extends ('layout.master')
@section('content')
@section('content1')
@section('content2')

         <!-- Content Header (Page header) -->
		  <br>
          <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-12 mb-3">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('index') }}">الرئسية</a></li>
                    <li class="breadcrumb-item"><span>الشركات</span></li>
                  </ol>
                </div>
                <div class="col-sm-12">
                  <h1>الشركات</h1>
                </div>
              </div>
            </div>
          </div>
  <section class="content">
    <div class="card card-primary card-outline card-outline-tabs">
      <div class="card-header p-0 border-bottom-0">
        <ul class="nav nav-tabs" id="tabs-tab" role="tablist">
          <!-- companies-->
          <li class="nav-item"><a class="nav-link active" id="tabs-1-tab" data-toggle="pill" href="#tabs-1" role="tab" aria-controls="tabs-1" aria-selected="true">
              قائمة الشركات
              </a></li>
          <!-- branch-->
          <li class="nav-item"><a class="nav-link" id="tabs-2-tab" data-toggle="pill" href="#tabs-2" role="tab" aria-controls="tabs-2" aria-selected="false">
              الفروع
              </a></li>
          <!-- departments-->
          <li class="nav-item"><a class="nav-link" id="tabs-3-tab" data-toggle="pill" href="#tabs-3" role="tab" aria-controls="tabs-3" aria-selected="false">
              الادارات \ الاقسام
              </a></li>
        </ul>
      </div>
      <div class="card-body">
        <div class="tab-content" id="tabs-tabContent">
          <!-- companies-->
          <div class="tab-pane fade active show" id="tabs-1" role="tabpanel" aria-labelledby="tabs-1-tab">
            <section class="content">
              <div class="row">
                <div class="col-12">
                  <div class="card shadow-none">
                            <div class="d-lg-flex bg-gray-light justify-content-lg-between px-4 py-3">
                              <h4 class="align-self-center">قائمة الشركات</h4>
                              <div class="align-self-center">
                                <button class="btn btn-primary departments" data-toggle="modal" data-target="#modal1"><i class="fa fa-plus"></i> اضافة</button>
                                <button class="btn btn-tool" type="button" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                              </div>
                            </div>
                    <!-- add modal-->
                    <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1" aria-hidden="true">
                      <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title">اضافة شركة  </h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                  </div>
                          <form>
                            <div class="modal-body row">
                              <div class="form-group col-lg-6">
                                <label>اسم الشركة عربي</label>
                                <input class="form-control" type="text"/>
                              </div>
                              <div class="form-group col-lg-6">
                                <label>اسم الشركة انجليزي</label>
                                <input class="form-control" type="text"/>
                              </div>
                              <div class="form-group col-lg-6">
                                <label>نوع النشاط</label>
                                <input class="form-control" type="text"/>
                              </div>
                              <div class="form-group col-lg-6">
                                <label>التلفون</label>
                                <input class="form-control" type="text"/>
                              </div>
                              <div class="form-group col-lg-6">
                                <label>فاكس</label>
                                <input class="form-control" type="text"/>
                              </div>
                              <div class="form-group col-lg-6">
                                <label>البريد</label>
                                <input class="form-control" type="text"/>
                              </div>
                              <div class="form-group col-12">
                                <label>العنوان</label>
                                <input class="form-control" type="text"/>
                              </div>
                              <div class="form-group col-12">
                                <label>شعار الشركة</label>
                                <input class="form-control" type="file"/>
                              </div>
                              <div class="form-group col-12">
                                <label>ملاحظات</label>
                                <textarea class="form-control"></textarea>
                              </div>
                            </div>
                                    <div class="modal-footer justify-content-start">
                                      <button class="btn btn-secondary" type="button" data-dismiss="modal">اغلاق</button>
                                      <button class="btn btn-primary add" type="button">حفظ</button>
                                    </div>
                          </form>
                        </div>
                      </div>
                    </div>
                    <!-- edit modal-->
                    <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="modal2" aria-hidden="true">
                      <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title">تعديل بيانات الشركة </h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                  </div>
                          <form>
                            <div class="modal-body row">
                              <div class="form-group col-lg-6">
                                <label>اسم الشركة عربي</label>
                                <input class="form-control" type="text"/>
                              </div>
                              <div class="form-group col-lg-6">
                                <label>اسم الشركة انجليزي</label>
                                <input class="form-control" type="text"/>
                              </div>
                              <div class="form-group col-lg-6">
                                <label>نوع النشاط</label>
                                <input class="form-control" type="text"/>
                              </div>
                              <div class="form-group col-lg-6">
                                <label>التلفون</label>
                                <input class="form-control" type="text"/>
                              </div>
                              <div class="form-group col-lg-6">
                                <label>فاكس</label>
                                <input class="form-control" type="text"/>
                              </div>
                              <div class="form-group col-lg-6">
                                <label>البريد</label>
                                <input class="form-control" type="text"/>
                              </div>
                              <div class="form-group col-12">
                                <label>العنوان</label>
                                <input class="form-control" type="text"/>
                              </div>
                              <div class="form-group col-12">
                                <label>شعار الشركة</label>
                                <input class="form-control" type="file"/>
                              </div>
                              <div class="form-group col-12">
                                <label>ملاحظات</label>
                                <textarea class="form-control"></textarea>
                              </div>
                            </div>
                                    <div class="modal-footer justify-content-start">
                                      <button class="btn btn-secondary" type="button" data-dismiss="modal">اغلاق</button>
                                      <button class="btn btn-primary add" type="button">حفظ</button>
                                    </div>
                          </form>
                        </div>
                      </div>
                    </div>
                    <!-- show modal-->
                    <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="modal3" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title">عرض تفاصيل الشركة</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                  </div>
                          <div class="modal-body">
                            <div class="row">
                              <div class="col-12 mb-4">
                                <div class="media"><img class="align-self-start mr-3" src="dist/img/default-150x150.png" alt="logo"/>
                                  <div class="media-body">
                                    <h5 class="mt-0">المتحدة للخدمات</h5>
                                    <p class="h5">الامارت \ دبي \ شارع 23 \ مبني رقم 88</p>
                                    <p class="h5">+2234567890</p>
                                    <p class="h5">jshsa@gmail.com</p>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-6 mb-3">
                                <div class="form-group">
                                  <label>الفاكس</label>
                                  <p class="h5">35467</p>
                                </div>
                              </div>
                              <div class="col-md-6 mb-3">
                                <div class="form-group">
                                  <label>صندوق البريد</label>
                                  <p class="h5">654</p>
                                </div>
                              </div>
                              <div class="col-12 mb-3">
                                <div class="form-group">
                                  <label>ملاحظات</label>
                                  <p class="h5">مثال بسيط علي ملاحظات</p>
                                </div>
                              </div>
                            </div>
                          </div>
                                  <div class="modal-footer justify-content-start">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">اغلاق</button>
                                  </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="d-md-flex justify-content-between mb-4">
                        <div class="dataTables_filter" id="datatable_filter">
                          <label>
                            <input type="search" placeholder="بحث" aria-controls="datatable"/>
                          </label>
                        </div>
                        <div class="dt-buttons">
                          <button class="btn btn-default" tabindex="0" aria-controls="datatable" type="button"><span><i class="fa fa-print mr-1"></i>طباعة</span></button>
                          <button class="btn btn-success" tabindex="0" aria-controls="datatable" type="button"><span><i class="fa fa-file-excel mr-1"></i>اكسل</span></button>
                        </div>
                      </div>
                      <table class="table table-bordered table-striped text-center">
                        <thead>
                          <tr>
                            <th> </th>
                            <th>الرقم</th>
                            <th>اسم الشركة</th>
                            <th>الفروع</th>
                            <th>الاقسام الإدارات</th>
                            <th>خيارات</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><img src="dist/img/default-150x150.png" alt="alt" width="63" height="63"/></td>
                            <td>1</td>
                            <td>المتحدة للخدامات</td>
                            <td>23</td>
                            <td>23</td>
                                    <td><a class="btn btn-info btn-xs" href="#" data-toggle="modal" data-target="#modal3"><i class="fa fa-eye mr-1"></i>عرض</a>
                                      <div class="dropdown d-inline-block">
                                        <button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"><span>المزيد</span><span class="caret"></span></button>
                                        <div class="dropdown-menu"><a class="dropdown-item text-info" href="#" data-toggle="modal" data-target="#modal3"><i class="fa fa-eye mr-1"></i><span>تفاصيل</span></a><a class="dropdown-item text-warning" href="#" data-toggle="modal" data-target="#modal2"><i class="fa fa-edit mr-1"></i><span>تعديل</span></a><a class="dropdown-item delete text-danger" href="#"><i class="fa fa-trash mr-1"></i><span>حذف</span></a></div>
                                      </div>
                                    </td>
                          </tr>
                          <tr>
                            <td><img src="dist/img/default-150x150.png" alt="alt" width="63" height="63"/></td>
                            <td>2</td>
                            <td>المتحدة للخدامات</td>
                            <td>23</td>
                            <td>23</td>
                                    <td><a class="btn btn-info btn-xs" href="#" data-toggle="modal" data-target="#modal3"><i class="fa fa-eye mr-1"></i>عرض</a>
                                      <div class="dropdown d-inline-block">
                                        <button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"><span>المزيد</span><span class="caret"></span></button>
                                        <div class="dropdown-menu"><a class="dropdown-item text-info" href="#" data-toggle="modal" data-target="#modal3"><i class="fa fa-eye mr-1"></i><span>تفاصيل</span></a><a class="dropdown-item text-warning" href="#" data-toggle="modal" data-target="#modal2"><i class="fa fa-edit mr-1"></i><span>تعديل</span></a><a class="dropdown-item delete text-danger" href="#"><i class="fa fa-trash mr-1"></i><span>حذف</span></a></div>
                                      </div>
                                    </td>
                          </tr>
                          <tr>
                            <td><img src="dist/img/default-150x150.png" alt="alt" width="63" height="63"/></td>
                            <td>3</td>
                            <td>المتحدة للخدامات</td>
                            <td>23</td>
                            <td>23</td>
                                    <td><a class="btn btn-info btn-xs" href="#" data-toggle="modal" data-target="#modal3"><i class="fa fa-eye mr-1"></i>عرض</a>
                                      <div class="dropdown d-inline-block">
                                        <button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"><span>المزيد</span><span class="caret"></span></button>
                                        <div class="dropdown-menu"><a class="dropdown-item text-info" href="#" data-toggle="modal" data-target="#modal3"><i class="fa fa-eye mr-1"></i><span>تفاصيل</span></a><a class="dropdown-item text-warning" href="#" data-toggle="modal" data-target="#modal2"><i class="fa fa-edit mr-1"></i><span>تعديل</span></a><a class="dropdown-item delete text-danger" href="#"><i class="fa fa-trash mr-1"></i><span>حذف</span></a></div>
                                      </div>
                                    </td>
                          </tr>
                          <tr>
                            <td><img src="dist/img/default-150x150.png" alt="alt" width="63" height="63"/></td>
                            <td>4</td>
                            <td>المتحدة للخدامات</td>
                            <td>23</td>
                            <td>23</td>
                                    <td><a class="btn btn-info btn-xs" href="#" data-toggle="modal" data-target="#modal3"><i class="fa fa-eye mr-1"></i>عرض</a>
                                      <div class="dropdown d-inline-block">
                                        <button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"><span>المزيد</span><span class="caret"></span></button>
                                        <div class="dropdown-menu"><a class="dropdown-item text-info" href="#" data-toggle="modal" data-target="#modal3"><i class="fa fa-eye mr-1"></i><span>تفاصيل</span></a><a class="dropdown-item text-warning" href="#" data-toggle="modal" data-target="#modal2"><i class="fa fa-edit mr-1"></i><span>تعديل</span></a><a class="dropdown-item delete text-danger" href="#"><i class="fa fa-trash mr-1"></i><span>حذف</span></a></div>
                                      </div>
                                    </td>
                          </tr>
                          <tr>
                            <td><img src="dist/img/default-150x150.png" alt="alt" width="63" height="63"/></td>
                            <td>5</td>
                            <td>المتحدة للخدامات</td>
                            <td>23</td>
                            <td>23</td>
                                    <td><a class="btn btn-info btn-xs" href="#" data-toggle="modal" data-target="#modal3"><i class="fa fa-eye mr-1"></i>عرض</a>
                                      <div class="dropdown d-inline-block">
                                        <button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"><span>المزيد</span><span class="caret"></span></button>
                                        <div class="dropdown-menu"><a class="dropdown-item text-info" href="#" data-toggle="modal" data-target="#modal3"><i class="fa fa-eye mr-1"></i><span>تفاصيل</span></a><a class="dropdown-item text-warning" href="#" data-toggle="modal" data-target="#modal2"><i class="fa fa-edit mr-1"></i><span>تعديل</span></a><a class="dropdown-item delete text-danger" href="#"><i class="fa fa-trash mr-1"></i><span>حذف</span></a></div>
                                      </div>
                                    </td>
                          </tr>
                          <tr>
                            <td><img src="dist/img/default-150x150.png" alt="alt" width="63" height="63"/></td>
                            <td>6</td>
                            <td>المتحدة للخدامات</td>
                            <td>23</td>
                            <td>23</td>
                                    <td><a class="btn btn-info btn-xs" href="#" data-toggle="modal" data-target="#modal3"><i class="fa fa-eye mr-1"></i>عرض</a>
                                      <div class="dropdown d-inline-block">
                                        <button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"><span>المزيد</span><span class="caret"></span></button>
                                        <div class="dropdown-menu"><a class="dropdown-item text-info" href="#" data-toggle="modal" data-target="#modal3"><i class="fa fa-eye mr-1"></i><span>تفاصيل</span></a><a class="dropdown-item text-warning" href="#" data-toggle="modal" data-target="#modal2"><i class="fa fa-edit mr-1"></i><span>تعديل</span></a><a class="dropdown-item delete text-danger" href="#"><i class="fa fa-trash mr-1"></i><span>حذف</span></a></div>
                                      </div>
                                    </td>
                          </tr>
                          <tr>
                            <td><img src="dist/img/default-150x150.png" alt="alt" width="63" height="63"/></td>
                            <td>7</td>
                            <td>المتحدة للخدامات</td>
                            <td>23</td>
                            <td>23</td>
                                    <td><a class="btn btn-info btn-xs" href="#" data-toggle="modal" data-target="#modal3"><i class="fa fa-eye mr-1"></i>عرض</a>
                                      <div class="dropdown d-inline-block">
                                        <button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"><span>المزيد</span><span class="caret"></span></button>
                                        <div class="dropdown-menu"><a class="dropdown-item text-info" href="#" data-toggle="modal" data-target="#modal3"><i class="fa fa-eye mr-1"></i><span>تفاصيل</span></a><a class="dropdown-item text-warning" href="#" data-toggle="modal" data-target="#modal2"><i class="fa fa-edit mr-1"></i><span>تعديل</span></a><a class="dropdown-item delete text-danger" href="#"><i class="fa fa-trash mr-1"></i><span>حذف</span></a></div>
                                      </div>
                                    </td>
                          </tr>
                          <tr>
                            <td><img src="dist/img/default-150x150.png" alt="alt" width="63" height="63"/></td>
                            <td>8</td>
                            <td>المتحدة للخدامات</td>
                            <td>23</td>
                            <td>23</td>
                                    <td><a class="btn btn-info btn-xs" href="#" data-toggle="modal" data-target="#modal3"><i class="fa fa-eye mr-1"></i>عرض</a>
                                      <div class="dropdown d-inline-block">
                                        <button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"><span>المزيد</span><span class="caret"></span></button>
                                        <div class="dropdown-menu"><a class="dropdown-item text-info" href="#" data-toggle="modal" data-target="#modal3"><i class="fa fa-eye mr-1"></i><span>تفاصيل</span></a><a class="dropdown-item text-warning" href="#" data-toggle="modal" data-target="#modal2"><i class="fa fa-edit mr-1"></i><span>تعديل</span></a><a class="dropdown-item delete text-danger" href="#"><i class="fa fa-trash mr-1"></i><span>حذف</span></a></div>
                                      </div>
                                    </td>
                          </tr>
                          <tr>
                            <td><img src="dist/img/default-150x150.png" alt="alt" width="63" height="63"/></td>
                            <td>9</td>
                            <td>المتحدة للخدامات</td>
                            <td>23</td>
                            <td>23</td>
                                    <td><a class="btn btn-info btn-xs" href="#" data-toggle="modal" data-target="#modal3"><i class="fa fa-eye mr-1"></i>عرض</a>
                                      <div class="dropdown d-inline-block">
                                        <button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"><span>المزيد</span><span class="caret"></span></button>
                                        <div class="dropdown-menu"><a class="dropdown-item text-info" href="#" data-toggle="modal" data-target="#modal3"><i class="fa fa-eye mr-1"></i><span>تفاصيل</span></a><a class="dropdown-item text-warning" href="#" data-toggle="modal" data-target="#modal2"><i class="fa fa-edit mr-1"></i><span>تعديل</span></a><a class="dropdown-item delete text-danger" href="#"><i class="fa fa-trash mr-1"></i><span>حذف</span></a></div>
                                      </div>
                                    </td>
                          </tr>
                          <tr>
                            <td><img src="dist/img/default-150x150.png" alt="alt" width="63" height="63"/></td>
                            <td>10</td>
                            <td>المتحدة للخدامات</td>
                            <td>23</td>
                            <td>23</td>
                                    <td><a class="btn btn-info btn-xs" href="#" data-toggle="modal" data-target="#modal3"><i class="fa fa-eye mr-1"></i>عرض</a>
                                      <div class="dropdown d-inline-block">
                                        <button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"><span>المزيد</span><span class="caret"></span></button>
                                        <div class="dropdown-menu"><a class="dropdown-item text-info" href="#" data-toggle="modal" data-target="#modal3"><i class="fa fa-eye mr-1"></i><span>تفاصيل</span></a><a class="dropdown-item text-warning" href="#" data-toggle="modal" data-target="#modal2"><i class="fa fa-edit mr-1"></i><span>تعديل</span></a><a class="dropdown-item delete text-danger" href="#"><i class="fa fa-trash mr-1"></i><span>حذف</span></a></div>
                                      </div>
                                    </td>
                          </tr>
                        </tbody>
                      </table>
                      <div class="mt-3">
                        <ul class="pagination">
                          <li class="paginate_button page-item previous disabled" id="example1_previous"><a class="page-link" href="#" aria-controls="example1" data-dt-idx="0" tabindex="0">السابق</a></li>
                          <li class="paginate_button page-item active"><a class="page-link" href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1</a></li>
                          <li class="paginate_button page-item"><a class="page-link" href="#" aria-controls="example1" data-dt-idx="2" tabindex="0">2</a></li>
                          <li class="paginate_button page-item"><a class="page-link" href="#" aria-controls="example1" data-dt-idx="3" tabindex="0">3</a></li>
                          <li class="paginate_button page-item next" id="example1_next"><a class="page-link" href="#" aria-controls="example1" data-dt-idx="7" tabindex="0">التالي</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
          <!-- branch-->
          <div class="tab-pane fade" id="tabs-2" role="tabpanel" aria-labelledby="tabs-2-tab">
            <section class="content">
              <div class="row">
                <div class="col-12">
                  <!-- add modal-->
                  <div class="modal fade" id="modal10" tabindex="-1" role="dialog" aria-labelledby="modal10" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title">صلاحيات الفرع</h5>
                                  <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                        <form>
                          <div class="modal-body">
                            <div class="form-group">
                              <label>الاسم الفرع
                                <p class="h5">وسط المدينة</p>
                              </label>
                            </div>
                            <div class="form-group">
                              <label>   المستخدم</label>
                              <select class="form-control">
                                <option>اسم المستخدم   1</option>
                                <option>اسم المستخدم   2</option>
                                <option>اسم المستخدم   3</option>
                                <option>اسم المستخدم   4</option>
                                <option>اسم المستخدم   5</option>
                              </select>
                            </div>
                          </div>
                                  <div class="modal-footer justify-content-start">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">اغلاق</button>
                                    <button class="btn btn-primary add" type="button">حفظ</button>
                                  </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <div class="card shadow-none"></div>
                          <div class="d-lg-flex bg-gray-light justify-content-lg-between px-4 py-3">
                            <h4 class="align-self-center">الفروع</h4>
                            <div class="align-self-center"><a class="btn btn-primary departments" href="add-branch.html"><i class="fa fa-plus"></i> اضافة</a>
                              <button class="btn btn-tool" type="button" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                            </div>
                          </div>
                  <div class="card-body">
                            <div class="card-extra clearfix mb-3">
                              <form class="form-inline guide-advanced-search mb-3">
                                <div class="form-group mr-2">
                                  <label><i class="fa fa-cogs mr-1"></i><span>بحث متقدم</span></label>
                                </div>
                                <div class="form-group mr-2">
                                  <label class="mr-1">الشركة</label>
                                  <select class="form-control">
                                    <option>الكل</option>
                                    <option>1-الاصول</option>
                                  </select>
                                </div>
                                <div class="form-group mr-2">
                                  <label class="mr-1">الدولة</label>
                                  <select class="form-control">
                                    <option>الكل</option>
                                  </select>
                                </div>
                                <button class="btn btn-primary" type="button"><i class="fa fa-search ml-2"></i><span>بحث</span></button>
                              </form>
                            </div>
                    <div class="d-md-flex justify-content-between mb-4">
                      <div class="dataTables_filter" id="datatable_filter">
                        <label>
                          <input type="search" placeholder="بحث" aria-controls="datatable"/>
                        </label>
                      </div>
                      <div class="dt-buttons">
                        <button class="btn btn-default" tabindex="0" aria-controls="datatable" type="button"><span><i class="fa fa-print mr-1"></i>طباعة</span></button>
                        <button class="btn btn-success" tabindex="0" aria-controls="datatable" type="button"><span><i class="fa fa-file-excel mr-1"></i>اكسل</span></button>
                      </div>
                    </div>
                    <table class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>الرقم</th>
                          <th>الاسم</th>
                          <th>الشركة</th>
                          <th>التلفون</th>
                          <th>العوان</th>
                          <th>خيارات</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>وسط المدينة</td>
                          <td>المتحدة للخدامات</td>
                          <td>1234567890</td>
                          <td>الامارات / دبي / شارع 1 مبني 865</td>
                          <td><a class="btn btn-info btn-xs" href="show-branch.html"><i class="fa fa-eye mr-1"></i>عرض</a>
                            <div class="dropdown d-inline-block">
                              <button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"><span>المزيد</span><span class="caret"></span></button>
                              <div class="dropdown-menu"><a class="dropdown-item text-info" href="#" data-toggle="modal" data-target="#modal10"><i class="fa fa-edit mr-1"></i><span>صلاحيات الفرع</span></a><a class="dropdown-item text-warning" href="edit-branch.html"><i class="fa fa-edit mr-1"></i><span>تعديل</span></a><a class="dropdown-item delete text-danger" href="#"><i class="fa fa-trash mr-1"></i><span>حذف</span></a></div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>وسط المدينة</td>
                          <td>المتحدة للخدامات</td>
                          <td>1234567890</td>
                          <td>الامارات / دبي / شارع 1 مبني 865</td>
                          <td><a class="btn btn-info btn-xs" href="show-branch.html"><i class="fa fa-eye mr-1"></i>عرض</a>
                            <div class="dropdown d-inline-block">
                              <button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"><span>المزيد</span><span class="caret"></span></button>
                              <div class="dropdown-menu"><a class="dropdown-item text-info" href="#" data-toggle="modal" data-target="#modal10"><i class="fa fa-edit mr-1"></i><span>صلاحيات الفرع</span></a><a class="dropdown-item text-warning" href="edit-branch.html"><i class="fa fa-edit mr-1"></i><span>تعديل</span></a><a class="dropdown-item delete text-danger" href="#"><i class="fa fa-trash mr-1"></i><span>حذف</span></a></div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>وسط المدينة</td>
                          <td>المتحدة للخدامات</td>
                          <td>1234567890</td>
                          <td>الامارات / دبي / شارع 1 مبني 865</td>
                          <td><a class="btn btn-info btn-xs" href="show-branch.html"><i class="fa fa-eye mr-1"></i>عرض</a>
                            <div class="dropdown d-inline-block">
                              <button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"><span>المزيد</span><span class="caret"></span></button>
                              <div class="dropdown-menu"><a class="dropdown-item text-info" href="#" data-toggle="modal" data-target="#modal10"><i class="fa fa-edit mr-1"></i><span>صلاحيات الفرع</span></a><a class="dropdown-item text-warning" href="edit-branch.html"><i class="fa fa-edit mr-1"></i><span>تعديل</span></a><a class="dropdown-item delete text-danger" href="#"><i class="fa fa-trash mr-1"></i><span>حذف</span></a></div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>وسط المدينة</td>
                          <td>المتحدة للخدامات</td>
                          <td>1234567890</td>
                          <td>الامارات / دبي / شارع 1 مبني 865</td>
                          <td><a class="btn btn-info btn-xs" href="show-branch.html"><i class="fa fa-eye mr-1"></i>عرض</a>
                            <div class="dropdown d-inline-block">
                              <button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"><span>المزيد</span><span class="caret"></span></button>
                              <div class="dropdown-menu"><a class="dropdown-item text-info" href="#" data-toggle="modal" data-target="#modal10"><i class="fa fa-edit mr-1"></i><span>صلاحيات الفرع</span></a><a class="dropdown-item text-warning" href="edit-branch.html"><i class="fa fa-edit mr-1"></i><span>تعديل</span></a><a class="dropdown-item delete text-danger" href="#"><i class="fa fa-trash mr-1"></i><span>حذف</span></a></div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>5</td>
                          <td>وسط المدينة</td>
                          <td>المتحدة للخدامات</td>
                          <td>1234567890</td>
                          <td>الامارات / دبي / شارع 1 مبني 865</td>
                          <td><a class="btn btn-info btn-xs" href="show-branch.html"><i class="fa fa-eye mr-1"></i>عرض</a>
                            <div class="dropdown d-inline-block">
                              <button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"><span>المزيد</span><span class="caret"></span></button>
                              <div class="dropdown-menu"><a class="dropdown-item text-info" href="#" data-toggle="modal" data-target="#modal10"><i class="fa fa-edit mr-1"></i><span>صلاحيات الفرع</span></a><a class="dropdown-item text-warning" href="edit-branch.html"><i class="fa fa-edit mr-1"></i><span>تعديل</span></a><a class="dropdown-item delete text-danger" href="#"><i class="fa fa-trash mr-1"></i><span>حذف</span></a></div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>6</td>
                          <td>وسط المدينة</td>
                          <td>المتحدة للخدامات</td>
                          <td>1234567890</td>
                          <td>الامارات / دبي / شارع 1 مبني 865</td>
                          <td><a class="btn btn-info btn-xs" href="show-branch.html"><i class="fa fa-eye mr-1"></i>عرض</a>
                            <div class="dropdown d-inline-block">
                              <button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"><span>المزيد</span><span class="caret"></span></button>
                              <div class="dropdown-menu"><a class="dropdown-item text-info" href="#" data-toggle="modal" data-target="#modal10"><i class="fa fa-edit mr-1"></i><span>صلاحيات الفرع</span></a><a class="dropdown-item text-warning" href="edit-branch.html"><i class="fa fa-edit mr-1"></i><span>تعديل</span></a><a class="dropdown-item delete text-danger" href="#"><i class="fa fa-trash mr-1"></i><span>حذف</span></a></div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>7</td>
                          <td>وسط المدينة</td>
                          <td>المتحدة للخدامات</td>
                          <td>1234567890</td>
                          <td>الامارات / دبي / شارع 1 مبني 865</td>
                          <td><a class="btn btn-info btn-xs" href="show-branch.html"><i class="fa fa-eye mr-1"></i>عرض</a>
                            <div class="dropdown d-inline-block">
                              <button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"><span>المزيد</span><span class="caret"></span></button>
                              <div class="dropdown-menu"><a class="dropdown-item text-info" href="#" data-toggle="modal" data-target="#modal10"><i class="fa fa-edit mr-1"></i><span>صلاحيات الفرع</span></a><a class="dropdown-item text-warning" href="edit-branch.html"><i class="fa fa-edit mr-1"></i><span>تعديل</span></a><a class="dropdown-item delete text-danger" href="#"><i class="fa fa-trash mr-1"></i><span>حذف</span></a></div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>8</td>
                          <td>وسط المدينة</td>
                          <td>المتحدة للخدامات</td>
                          <td>1234567890</td>
                          <td>الامارات / دبي / شارع 1 مبني 865</td>
                          <td><a class="btn btn-info btn-xs" href="show-branch.html"><i class="fa fa-eye mr-1"></i>عرض</a>
                            <div class="dropdown d-inline-block">
                              <button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"><span>المزيد</span><span class="caret"></span></button>
                              <div class="dropdown-menu"><a class="dropdown-item text-info" href="#" data-toggle="modal" data-target="#modal10"><i class="fa fa-edit mr-1"></i><span>صلاحيات الفرع</span></a><a class="dropdown-item text-warning" href="edit-branch.html"><i class="fa fa-edit mr-1"></i><span>تعديل</span></a><a class="dropdown-item delete text-danger" href="#"><i class="fa fa-trash mr-1"></i><span>حذف</span></a></div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>9</td>
                          <td>وسط المدينة</td>
                          <td>المتحدة للخدامات</td>
                          <td>1234567890</td>
                          <td>الامارات / دبي / شارع 1 مبني 865</td>
                          <td><a class="btn btn-info btn-xs" href="show-branch.html"><i class="fa fa-eye mr-1"></i>عرض</a>
                            <div class="dropdown d-inline-block">
                              <button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"><span>المزيد</span><span class="caret"></span></button>
                              <div class="dropdown-menu"><a class="dropdown-item text-info" href="#" data-toggle="modal" data-target="#modal10"><i class="fa fa-edit mr-1"></i><span>صلاحيات الفرع</span></a><a class="dropdown-item text-warning" href="edit-branch.html"><i class="fa fa-edit mr-1"></i><span>تعديل</span></a><a class="dropdown-item delete text-danger" href="#"><i class="fa fa-trash mr-1"></i><span>حذف</span></a></div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>10</td>
                          <td>وسط المدينة</td>
                          <td>المتحدة للخدامات</td>
                          <td>1234567890</td>
                          <td>الامارات / دبي / شارع 1 مبني 865</td>
                          <td><a class="btn btn-info btn-xs" href="show-branch.html"><i class="fa fa-eye mr-1"></i>عرض</a>
                            <div class="dropdown d-inline-block">
                              <button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"><span>المزيد</span><span class="caret"></span></button>
                              <div class="dropdown-menu"><a class="dropdown-item text-info" href="#" data-toggle="modal" data-target="#modal10"><i class="fa fa-edit mr-1"></i><span>صلاحيات الفرع</span></a><a class="dropdown-item text-warning" href="edit-branch.html"><i class="fa fa-edit mr-1"></i><span>تعديل</span></a><a class="dropdown-item delete text-danger" href="#"><i class="fa fa-trash mr-1"></i><span>حذف</span></a></div>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    <div class="mt-3">
                      <ul class="pagination">
                        <li class="paginate_button page-item previous disabled" id="example1_previous"><a class="page-link" href="#" aria-controls="example1" data-dt-idx="0" tabindex="0">السابق</a></li>
                        <li class="paginate_button page-item active"><a class="page-link" href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1</a></li>
                        <li class="paginate_button page-item"><a class="page-link" href="#" aria-controls="example1" data-dt-idx="2" tabindex="0">2</a></li>
                        <li class="paginate_button page-item"><a class="page-link" href="#" aria-controls="example1" data-dt-idx="3" tabindex="0">3</a></li>
                        <li class="paginate_button page-item next" id="example1_next"><a class="page-link" href="#" aria-controls="example1" data-dt-idx="7" tabindex="0">التالي</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
          <!-- ‫‪SYSTEM_SCREEN-->
          <div class="tab-pane fade" id="tabs-3" role="tabpanel" aria-labelledby="tabs-3-tab">
            <section class="content">
              <div class="row">
                <div class="col-12">
                  <div class="card shadow-none"></div>
                          <div class="d-lg-flex bg-gray-light justify-content-lg-between px-4 py-3">
                            <h4 class="align-self-center">الإدارات و الاقسام</h4>
                            <div class="align-self-center">
                              <button class="btn btn-primary departments" data-toggle="modal" data-target="#modal7"><i class="fa fa-plus"></i> اضافة</button>
                              <button class="btn btn-tool" type="button" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                            </div>
                          </div>
                  <!-- add modal-->
                  <div class="modal fade" id="modal7" tabindex="-1" role="dialog" aria-labelledby="modal7" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title">اضافة قسم  </h5>
                                  <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                        <form>
                          <div class="modal-body">
                            <div class="form-group">
                              <label>اسم القسم عربي</label>
                              <input class="form-control" type="text"/>
                            </div>

                            <div class="form-group">
                              <label>تاريخ البدء</label>
                              <input class="form-control" type="date"/>
                            </div>
                            <div class="form-group">
                              <label> الفروع</label>
                              <select class="form-control">
                                <option>الفروع 1</option>
                                <option>الفروع 2</option>
                                <option>الفروع 3</option>
                                <option>الفروع 4</option>
                                <option>الفروع 5</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label> مركز التكلفة</label>
                              <select class="form-control">
                                <option>مركز التكلفة 1</option>
                                <option>مركز التكلفة 2</option>
                                <option>مركز التكلفة 3</option>
                                <option>مركز التكلفة 4</option>
                                <option>مركز التكلفة 5</option>
                              </select>
                            </div>
                          </div>
                                  <div class="modal-footer justify-content-start">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">اغلاق</button>
                                    <button class="btn btn-primary add" type="button">حفظ</button>
                                  </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <!-- edit modal-->
                  <div class="modal fade" id="modal8" tabindex="-1" role="dialog" aria-labelledby="modal8" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title">تعديل القسم  </h5>
                                  <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                        <form>
                          <div class="modal-body">
                            <div class="form-group">
                              <label>اسم القسم عربي</label>
                              <input class="form-control" type="text"/>
                            </div>

                            <div class="form-group">
                              <label>تاريخ البدء</label>
                              <input class="form-control" type="date"/>
                            </div>
                            <div class="form-group">
                              <label> الفروع</label>
                              <select class="form-control">
                                <option>الفروع 1</option>
                                <option>الفروع 2</option>
                                <option>الفروع 3</option>
                                <option>الفروع 4</option>
                                <option>الفروع 5</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label> مركز التكلفة</label>
                              <select class="form-control">
                                <option>مركز التكلفة 1</option>
                                <option>مركز التكلفة 2</option>
                                <option>مركز التكلفة 3</option>
                                <option>مركز التكلفة 4</option>
                                <option>مركز التكلفة 5</option>
                              </select>
                            </div>
                          </div>
                                  <div class="modal-footer justify-content-start">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">اغلاق</button>
                                    <button class="btn btn-primary add" type="button">حفظ</button>
                                  </div>
                        </form>

                                <div class="modal-footer justify-content-start">
                                  <button class="btn btn-secondary" type="button" data-dismiss="modal">اغلاق</button>
                                  <button class="btn btn-primary add" type="button">حفظ</button>
                                </div>
                      </div>
                    </div>
                  </div>
                  <!-- show modal-->
                  <div class="modal fade" id="modal9" tabindex="-1" role="dialog" aria-labelledby="modal9" aria-hidden="true">
                    <div class="modal-dialog">(role="document")
                      <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title">عرض تفاصيل القسم</h5>
                                  <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                        <div class="modal-body">
                          <div class="mb-3">
                            <h4>قسم الحسابات</h4>
                          </div>
                          <div class="mb-3"><span>الفرع  :
                              <p class="h4 d-inline">وسط المدينة</p></span></div>
                          <div class="mb-3"><span>المدير  :
                              <p class="h4 d-inline">علي محمد</p></span></div>
                          <div class="mb-3"><span>تاريخ البدء  :
                              <p class="h4 d-inline">21/12/2021</p></span></div>
                          <div class="mb-3"><span>مركز التكلفة  :
                              <p class="h4 d-inline">2348</p></span></div>
                        </div>
                                <div class="modal-footer justify-content-start">
                                  <button class="btn btn-secondary" type="button" data-dismiss="modal">اغلاق</button>
                                </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                            <div class="card-extra clearfix mb-3">
                              <form class="form-inline guide-advanced-search mb-3">
                                <div class="form-group mr-2">
                                  <label><i class="fa fa-cogs mr-1"></i><span>بحث متقدم</span></label>
                                </div>
                                <div class="form-group mr-2">
                                  <label class="mr-1">الفرع</label>
                                  <select class="form-control">
                                    <option>الكل</option>
                                    <option>1-الاصول</option>
                                  </select>
                                </div>
                                <div class="form-group mr-2">
                                  <label class="mr-1">تاريخ البدء</label>
                                  <input class="form-control" type="date" value="2021-11-28"/>
                                </div>
                                <button class="btn btn-primary" type="button"><i class="fa fa-search ml-2"></i><span>بحث</span></button>
                              </form>
                            </div>
                    <div class="d-md-flex justify-content-between mb-4">
                      <div class="dataTables_filter" id="datatable_filter">
                        <label>
                          <input type="search" placeholder="بحث" aria-controls="datatable"/>
                        </label>
                      </div>
                      <div class="dt-buttons">
                        <button class="btn btn-default" tabindex="0" aria-controls="datatable" type="button"><span><i class="fa fa-print mr-1"></i>طباعة</span></button>
                        <button class="btn btn-success" tabindex="0" aria-controls="datatable" type="button"><span><i class="fa fa-file-excel mr-1"></i>اكسل</span></button>
                      </div>
                    </div>
                    <table class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>الرقم</th>
                          <th>المدير</th>
                          <th>الفرع</th>
                          <th>القسم</th>
                          <th>تاريخ البدء</th>
                          <th>خيارات</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>محمد علي</td>
                          <td>وسط المدينة</td>
                          <td>الحسابات  </td>
                          <td>21/12/2021  </td>
                                  <td><a class="btn btn-info btn-xs" href="#" data-toggle="modal" data-target="#modal9"><i class="fa fa-eye mr-1"></i>عرض</a>
                                    <div class="dropdown d-inline-block">
                                      <button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"><span>المزيد</span><span class="caret"></span></button>
                                      <div class="dropdown-menu"><a class="dropdown-item text-info" href="#" data-toggle="modal" data-target="#modal9"><i class="fa fa-eye mr-1"></i><span>تفاصيل</span></a><a class="dropdown-item text-warning" href="#" data-toggle="modal" data-target="#modal8"><i class="fa fa-edit mr-1"></i><span>تعديل</span></a><a class="dropdown-item delete text-danger" href="#"><i class="fa fa-trash mr-1"></i><span>حذف</span></a></div>
                                    </div>
                                  </td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>محمد علي</td>
                          <td>وسط المدينة</td>
                          <td>الحسابات  </td>
                          <td>21/12/2021  </td>
                                  <td><a class="btn btn-info btn-xs" href="#" data-toggle="modal" data-target="#modal9"><i class="fa fa-eye mr-1"></i>عرض</a>
                                    <div class="dropdown d-inline-block">
                                      <button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"><span>المزيد</span><span class="caret"></span></button>
                                      <div class="dropdown-menu"><a class="dropdown-item text-info" href="#" data-toggle="modal" data-target="#modal9"><i class="fa fa-eye mr-1"></i><span>تفاصيل</span></a><a class="dropdown-item text-warning" href="#" data-toggle="modal" data-target="#modal8"><i class="fa fa-edit mr-1"></i><span>تعديل</span></a><a class="dropdown-item delete text-danger" href="#"><i class="fa fa-trash mr-1"></i><span>حذف</span></a></div>
                                    </div>
                                  </td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>محمد علي</td>
                          <td>وسط المدينة</td>
                          <td>الحسابات  </td>
                          <td>21/12/2021  </td>
                                  <td><a class="btn btn-info btn-xs" href="#" data-toggle="modal" data-target="#modal9"><i class="fa fa-eye mr-1"></i>عرض</a>
                                    <div class="dropdown d-inline-block">
                                      <button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"><span>المزيد</span><span class="caret"></span></button>
                                      <div class="dropdown-menu"><a class="dropdown-item text-info" href="#" data-toggle="modal" data-target="#modal9"><i class="fa fa-eye mr-1"></i><span>تفاصيل</span></a><a class="dropdown-item text-warning" href="#" data-toggle="modal" data-target="#modal8"><i class="fa fa-edit mr-1"></i><span>تعديل</span></a><a class="dropdown-item delete text-danger" href="#"><i class="fa fa-trash mr-1"></i><span>حذف</span></a></div>
                                    </div>
                                  </td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>محمد علي</td>
                          <td>وسط المدينة</td>
                          <td>الحسابات  </td>
                          <td>21/12/2021  </td>
                                  <td><a class="btn btn-info btn-xs" href="#" data-toggle="modal" data-target="#modal9"><i class="fa fa-eye mr-1"></i>عرض</a>
                                    <div class="dropdown d-inline-block">
                                      <button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"><span>المزيد</span><span class="caret"></span></button>
                                      <div class="dropdown-menu"><a class="dropdown-item text-info" href="#" data-toggle="modal" data-target="#modal9"><i class="fa fa-eye mr-1"></i><span>تفاصيل</span></a><a class="dropdown-item text-warning" href="#" data-toggle="modal" data-target="#modal8"><i class="fa fa-edit mr-1"></i><span>تعديل</span></a><a class="dropdown-item delete text-danger" href="#"><i class="fa fa-trash mr-1"></i><span>حذف</span></a></div>
                                    </div>
                                  </td>
                        </tr>
                        <tr>
                          <td>5</td>
                          <td>محمد علي</td>
                          <td>وسط المدينة</td>
                          <td>الحسابات  </td>
                          <td>21/12/2021  </td>
                                  <td><a class="btn btn-info btn-xs" href="#" data-toggle="modal" data-target="#modal9"><i class="fa fa-eye mr-1"></i>عرض</a>
                                    <div class="dropdown d-inline-block">
                                      <button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"><span>المزيد</span><span class="caret"></span></button>
                                      <div class="dropdown-menu"><a class="dropdown-item text-info" href="#" data-toggle="modal" data-target="#modal9"><i class="fa fa-eye mr-1"></i><span>تفاصيل</span></a><a class="dropdown-item text-warning" href="#" data-toggle="modal" data-target="#modal8"><i class="fa fa-edit mr-1"></i><span>تعديل</span></a><a class="dropdown-item delete text-danger" href="#"><i class="fa fa-trash mr-1"></i><span>حذف</span></a></div>
                                    </div>
                                  </td>
                        </tr>
                        <tr>
                          <td>6</td>
                          <td>محمد علي</td>
                          <td>وسط المدينة</td>
                          <td>الحسابات  </td>
                          <td>21/12/2021  </td>
                                  <td><a class="btn btn-info btn-xs" href="#" data-toggle="modal" data-target="#modal9"><i class="fa fa-eye mr-1"></i>عرض</a>
                                    <div class="dropdown d-inline-block">
                                      <button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"><span>المزيد</span><span class="caret"></span></button>
                                      <div class="dropdown-menu"><a class="dropdown-item text-info" href="#" data-toggle="modal" data-target="#modal9"><i class="fa fa-eye mr-1"></i><span>تفاصيل</span></a><a class="dropdown-item text-warning" href="#" data-toggle="modal" data-target="#modal8"><i class="fa fa-edit mr-1"></i><span>تعديل</span></a><a class="dropdown-item delete text-danger" href="#"><i class="fa fa-trash mr-1"></i><span>حذف</span></a></div>
                                    </div>
                                  </td>
                        </tr>
                        <tr>
                          <td>7</td>
                          <td>محمد علي</td>
                          <td>وسط المدينة</td>
                          <td>الحسابات  </td>
                          <td>21/12/2021  </td>
                                  <td><a class="btn btn-info btn-xs" href="#" data-toggle="modal" data-target="#modal9"><i class="fa fa-eye mr-1"></i>عرض</a>
                                    <div class="dropdown d-inline-block">
                                      <button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"><span>المزيد</span><span class="caret"></span></button>
                                      <div class="dropdown-menu"><a class="dropdown-item text-info" href="#" data-toggle="modal" data-target="#modal9"><i class="fa fa-eye mr-1"></i><span>تفاصيل</span></a><a class="dropdown-item text-warning" href="#" data-toggle="modal" data-target="#modal8"><i class="fa fa-edit mr-1"></i><span>تعديل</span></a><a class="dropdown-item delete text-danger" href="#"><i class="fa fa-trash mr-1"></i><span>حذف</span></a></div>
                                    </div>
                                  </td>
                        </tr>
                        <tr>
                          <td>8</td>
                          <td>محمد علي</td>
                          <td>وسط المدينة</td>
                          <td>الحسابات  </td>
                          <td>21/12/2021  </td>
                                  <td><a class="btn btn-info btn-xs" href="#" data-toggle="modal" data-target="#modal9"><i class="fa fa-eye mr-1"></i>عرض</a>
                                    <div class="dropdown d-inline-block">
                                      <button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"><span>المزيد</span><span class="caret"></span></button>
                                      <div class="dropdown-menu"><a class="dropdown-item text-info" href="#" data-toggle="modal" data-target="#modal9"><i class="fa fa-eye mr-1"></i><span>تفاصيل</span></a><a class="dropdown-item text-warning" href="#" data-toggle="modal" data-target="#modal8"><i class="fa fa-edit mr-1"></i><span>تعديل</span></a><a class="dropdown-item delete text-danger" href="#"><i class="fa fa-trash mr-1"></i><span>حذف</span></a></div>
                                    </div>
                                  </td>
                        </tr>
                        <tr>
                          <td>9</td>
                          <td>محمد علي</td>
                          <td>وسط المدينة</td>
                          <td>الحسابات  </td>
                          <td>21/12/2021  </td>
                                  <td><a class="btn btn-info btn-xs" href="#" data-toggle="modal" data-target="#modal9"><i class="fa fa-eye mr-1"></i>عرض</a>
                                    <div class="dropdown d-inline-block">
                                      <button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"><span>المزيد</span><span class="caret"></span></button>
                                      <div class="dropdown-menu"><a class="dropdown-item text-info" href="#" data-toggle="modal" data-target="#modal9"><i class="fa fa-eye mr-1"></i><span>تفاصيل</span></a><a class="dropdown-item text-warning" href="#" data-toggle="modal" data-target="#modal8"><i class="fa fa-edit mr-1"></i><span>تعديل</span></a><a class="dropdown-item delete text-danger" href="#"><i class="fa fa-trash mr-1"></i><span>حذف</span></a></div>
                                    </div>
                                  </td>
                        </tr>
                        <tr>
                          <td>10</td>
                          <td>محمد علي</td>
                          <td>وسط المدينة</td>
                          <td>الحسابات  </td>
                          <td>21/12/2021  </td>
                                  <td><a class="btn btn-info btn-xs" href="#" data-toggle="modal" data-target="#modal9"><i class="fa fa-eye mr-1"></i>عرض</a>
                                    <div class="dropdown d-inline-block">
                                      <button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"><span>المزيد</span><span class="caret"></span></button>
                                      <div class="dropdown-menu"><a class="dropdown-item text-info" href="#" data-toggle="modal" data-target="#modal9"><i class="fa fa-eye mr-1"></i><span>تفاصيل</span></a><a class="dropdown-item text-warning" href="#" data-toggle="modal" data-target="#modal8"><i class="fa fa-edit mr-1"></i><span>تعديل</span></a><a class="dropdown-item delete text-danger" href="#"><i class="fa fa-trash mr-1"></i><span>حذف</span></a></div>
                                    </div>
                                  </td>
                        </tr>
                      </tbody>
                    </table>
                    <div class="mt-3">
                      <ul class="pagination">
                        <li class="paginate_button page-item previous disabled" id="example1_previous"><a class="page-link" href="#" aria-controls="example1" data-dt-idx="0" tabindex="0">السابق</a></li>
                        <li class="paginate_button page-item active"><a class="page-link" href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1</a></li>
                        <li class="paginate_button page-item"><a class="page-link" href="#" aria-controls="example1" data-dt-idx="2" tabindex="0">2</a></li>
                        <li class="paginate_button page-item"><a class="page-link" href="#" aria-controls="example1" data-dt-idx="3" tabindex="0">3</a></li>
                        <li class="paginate_button page-item next" id="example1_next"><a class="page-link" href="#" aria-controls="example1" data-dt-idx="7" tabindex="0">التالي</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>

 @endsection
  </div>
            <!-- /.row -->



