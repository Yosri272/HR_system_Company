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
                                <li class="breadcrumb-item"><span>التراخيص</span></li>
                              </ol>
                            </div>
                            <div class="col-sm-12">
                              <h1>التراخيص</h1>
                            </div>
                          </div>
                        </div>
                      </div>
              <section class="content">
                <div class="card card-primary card-outline card-outline-tabs">
                  <div class="card-header p-0 border-bottom-0">
                    <ul class="nav nav-tabs" id="tabs-tab" role="tablist">
                      <!-- license-->
                      <li class="nav-item"><a class="nav-link active" id="tabs-1-tab" data-toggle="pill" href="#tabs-1" role="tab" aria-controls="tabs-1" aria-selected="true">
                          قائمة التراخيص
                          </a></li>
                      <!-- license type-->
                      <li class="nav-item"><a class="nav-link" id="tabs-2-tab" data-toggle="pill" href="#tabs-2" role="tab" aria-controls="tabs-2" aria-selected="false">
                          انواع التراخيص

                          </a></li>
                    </ul>
                  </div>
                  <div class="card-body">
                    <div class="tab-content" id="tabs-tabContent">
                      <!-- license-->
                      <div class="tab-pane fade active show" id="tabs-1" role="tabpanel" aria-labelledby="tabs-1-tab">
                        <section class="content">
                          <div class="row">
                            <div class="col-12">
                              <div class="card shadow-none">
                                        <div class="d-lg-flex bg-gray-light justify-content-lg-between px-4 py-3">
                                          <h4 class="align-self-center">قائمة التراخيص</h4>
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
                                                <h5 class="modal-title">اضافة ترخيص  </h5>
                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                              </div>
                                     <form  method="post" action="{{ route('files.licenses') }}" enctype="multipart/form-data">
						                 @csrf
                                        <div class="modal-body row">
                                          <div class="form-group col-lg-6">
                                            <label>رقم الترخيص</label>
                                            <input name="licenses_number" class="form-control" type="text"/>
                                          </div>
                                          <div class="form-group col-lg-6">
                                            <label>   الاسم</label>
                                           <select class="form-control" name="licenses_name">
							                  @foreach($sys_Type_licenses as $data)
                                              <option>{{$data->type_licenses_name}}</option>
                                              @endforeach
                                              </select>
                                          </div>
                                          <div class="form-group col-lg-4">
                                            <label>تاريخ الاصدار</label>
                                            <input class="form-control" name="date_release" type="date"/>
                                          </div>
                                          <div class="form-group col-lg-4">
                                            <label>تاريخ الانتهاء</label>
                                            <input class="form-control" name="date_Expiry" type="date"/>
                                          </div>
                                          <div class="form-group col-lg-4">
                                            <label>تاريخ التجديد</label>
                                            <input class="form-control" name="date_renewal" type="date"/>
                                          </div>
                                          <div class="form-group col-lg-6">
                                            <label>مكان الاصدار</label>
                                            <input class="form-control" name="place_issue" type="text"/>
                                          </div>
                                          <div class="form-group col-lg-6">
                                            <label>جهة الاصدار</label>
                                            <input class="form-control" name="issuer" type="text"/>
                                          </div>
                                          <div class="form-group col-lg-6">
                                            <label>حالة الترخيص</label>
                                            <select class="form-control" name="version_ststus">

                                              <option>الترخيص     1</option>
                                              <option>الترخيص     2</option>
                                              <option>الترخيص     3</option>
                                              <option>الترخيص     4</option>
                                              <option>الترخيص     5</option>
                                            </select>
                                          </div>
                                          <div class="form-group col-lg-6">
                                            <label>   النشاط</label>
                                            <select class="form-control"name="activity">
                                              <option>النشاط     1</option>
                                              <option>النشاط     2</option>
                                              <option>النشاط     3</option>
                                              <option>النشاط     4</option>
                                              <option>النشاط     5</option>
                                            </select>
                                          </div>
                                          <div class="form-group col-lg-12">
                                            <label>الفرع</label>
                                             <select class="form-control" name="branch_nameAR">
							                  @foreach($sys_branch as $data)
                                              <option>{{$data->branch_nameAR}}</option>
                                              @endforeach
                                              </select>
                                          </div>
                                          <div class="form-group col-lg-12">
                                            <label>مرفق</label>
                                           <input type="file" name="files[]" multiple class="form-control" accept="image/*">
                                          </div>
                                        </div>
                                                <div class="modal-footer justify-content-start">
                                                  <button class="btn btn-secondary" type="button" data-dismiss="modal">اغلاق</button>
                                                  <button type="submit" class="btn btn-primary add" type="button">حفظ</button>
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
                                                <h5 class="modal-title">تعديل بيانات الترخيص </h5>
                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                              </div>
                                      <form>
                                        <div class="modal-body row">
                                          <div class="form-group col-lg-6">
                                            <label>رقم الترخيص</label>
                                            <input class="form-control" type="text"/>
                                          </div>
                                          <div class="form-group col-lg-6">
                                            <label>   الاسم</label>
                                            <select class="form-control">
                                              <option>الترخيص     1</option>
                                              <option>الترخيص     2</option>
                                              <option>الترخيص     3</option>
                                              <option>الترخيص     4</option>
                                              <option>الترخيص     5</option>
                                            </select>
                                          </div>
                                          <div class="form-group col-lg-4">
                                            <label>تاريخ الاصدار</label>
                                            <input class="form-control" type="date"/>
                                          </div>
                                          <div class="form-group col-lg-4">
                                            <label>تاريخ الانتهاء</label>
                                            <input class="form-control" type="date"/>
                                          </div>
                                          <div class="form-group col-lg-4">
                                            <label>تاريخ التجديد</label>
                                            <input class="form-control" type="date"/>
                                          </div>
                                          <div class="form-group col-lg-6">
                                            <label>مكان الاصدار</label>
                                            <input class="form-control" type="text"/>
                                          </div>
                                          <div class="form-group col-lg-6">
                                            <label>جهة الاصدار</label>
                                            <input class="form-control" type="text"/>
                                          </div>
                                          <div class="form-group col-lg-6">
                                            <label>حالة الترخيص</label>
                                            <select class="form-control">
                                              <option>الترخيص     1</option>
                                              <option>الترخيص     2</option>
                                              <option>الترخيص     3</option>
                                              <option>الترخيص     4</option>
                                              <option>الترخيص     5</option>
                                            </select>
                                          </div>
                                          <div class="form-group col-lg-6">
                                            <label>   النشاط</label>
                                            <select class="form-control">
                                              <option>النشاط     1</option>
                                              <option>النشاط     2</option>
                                              <option>النشاط     3</option>
                                              <option>النشاط     4</option>
                                              <option>النشاط     5</option>
                                            </select>
                                          </div>
                                          <div class="form-group col-lg-12">
                                            <label>الفرع</label>
                                            <select class="form-control">
                                              <option>الفرع     1</option>
                                              <option>الفرع     2</option>
                                              <option>الفرع     3</option>
                                              <option>الفرع     4</option>
                                              <option>الفرع     5</option>
                                            </select>
                                          </div>
                                          <div class="form-group col-lg-12">
                                            <label>مرفق</label>
                                            <input class="form-control" type="file"/>
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
                                  <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title">عرض تفاصيل الشركة</h5>
                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                              </div>
                                      <div class="modal-body row">
                                        <div class="form-group mb-3 col-lg-6">
                                          <label>رقم الترخيص
                                            <p class="h5">35467</p>
                                          </label>
                                        </div>
                                        <div class="form-group mb-3 col-lg-6">
                                          <label>   الاسم</label>
                                          <p class="h5">اسم الترخيص</p>
                                        </div>
                                        <div class="col-12">
                                          <hr/>
                                        </div>
                                        <div class="form-group mb-3 col-lg-4">
                                          <label>تاريخ الاصدار</label>
                                          <p class="h5">12\12\2022</p>
                                        </div>
                                        <div class="form-group mb-3 col-lg-4">
                                          <label>تاريخ الانتهاء</label>
                                          <p class="h5">12\12\2022</p>
                                        </div>
                                        <div class="form-group mb-3 col-lg-4">
                                          <label>تاريخ التجديد</label>
                                          <p class="h5">12\12\2022</p>
                                        </div>
                                        <div class="col-12">
                                          <hr/>
                                        </div>
                                        <div class="form-group mb-3 col-lg-6">
                                          <label>مكان الاصدار</label>
                                          <p class="h5">مكان الاصدار</p>
                                        </div>
                                        <div class="form-group mb-3 col-lg-6">
                                          <label>جهة الاصدار</label>
                                          <p class="h5">جهة الاصدار</p>
                                        </div>
                                        <div class="form-group mb-3 col-lg-6">
                                          <label>حالة الترخيص</label>
                                          <p class="h5">نشط</p>
                                        </div>
                                        <div class="form-group mb-3 col-lg-6">
                                          <label>   النشاط</label>
                                          <p class="h5">النشاط</p>
                                        </div>
                                        <div class="form-group mb-3 col-lg-12">
                                          <label>الفرع</label>
                                          <p class="h5">  وسط المدينة</p>
                                        </div>
                                        <div class="col-12">
                                          <hr/>
                                        </div>
                                        <div class="form-group mb-3 col-lg-12">
                                          <label>مرفق</label>
                                          <p><img class="p-1" src="dist/img/default-150x150.png" alt="alt"/><img class="p-1" src="dist/img/default-150x150.png" alt="alt"/><img class="p-1" src="dist/img/default-150x150.png" alt="alt"/></p>
                                        </div>
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
                                                <label class="mr-1">نوع الترخيص</label>
                                                <select class="form-control">
                                                  <option>الكل</option>
                                                </select>
                                              </div>
                                              <div class="form-group mr-2">
                                                <label class="mr-1">تاريخ الاصدار من</label>
                                                <input class="form-control" type="date" value="2021-11-28"/>
                                              </div>
                                              <div class="form-group mr-2">
                                                <label class="mr-1">و حتي</label>
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
                                  <table class="table table-bordered table-striped text-center">
                                    <thead>
                                      <tr>
                                        <th>رقم</th>
                                        <th>رقم الترخيص</th>
                                        <th>النوع</th>
                                        <th>الاصدار</th>
                                        <th>الانتهاء</th>
                                        <th>التجديد</th>
                                        <th>الحالة</th>
                                        <th>الفرع</th>
                                        <th>خيارات</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($sys_Licenses as $data)
                                      <tr>
                                      <td>{{$data->licenses_id}}</td>
                                      <td>{{$data->licenses_number}}</td>
									  <td>{{$data->place_issue}}</td>
                                      <td>{{$data->place_issue}}</td>
                                       <td>{{$data->date_Expiry}}</td>
                                      <td>{{$data->date_renewal}}</td>
                                      <td>{{$data->version_ststus}}</td>
                                       <td>{{$data->branch_nameAR}}</td>
                                                <td><a class="btn btn-info btn-xs" href="#" data-toggle="modal" data-target="#modal3"><i class="fa fa-eye mr-1"></i>عرض</a>
                                                  <div class="dropdown d-inline-block">
                                                    <button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"><span>المزيد</span><span class="caret"></span></button>
                                                    <div class="dropdown-menu"><a class="dropdown-item text-info" href="#" data-toggle="modal" data-target="#modal3"><i class="fa fa-eye mr-1"></i><span>تفاصيل</span></a><a class="dropdown-item text-warning" href="#"" data-toggle="modal" data-target="#modal2"><i class="fa fa-edit mr-1"></i><span>تعديل</span></a><a class="dropdown-item delete text-danger" href="{{  url('dallicenses')  }}/{{  $data->licenses_id  }}"><i class="fa fa-trash mr-1"></i><span>حذف</span></a></div>
                                                  </div>
                                                </td>
                                      </tr>
									   @endforeach
                                    </tbody>
                                  </table>
                                  <div class="mt-3">
                                    <ul class="pagination">
                                      {{  $sys_Licenses->links() }}

									  </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </section>
                      </div>
                      <!-- license type-->
                      <div class="tab-pane fade" id="tabs-2" role="tabpanel" aria-labelledby="tabs-2-tab">
                        <section class="content">
                          <div class="row">
                            <div class="col-12">
                              <div class="card shadow-none"></div>
                                      <div class="d-lg-flex bg-gray-light justify-content-lg-between px-4 py-3">
                                        <h4 class="align-self-center">انواع التراخيص</h4>
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
                                              <h5 class="modal-title">اضافة ترخيص  </h5>
                                              <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            </div>
                                    <form action="{{ url('typeLicensesStort')}}" method="GET" novalidate="">
                                      <div class="modal-body">
                                        <div class="form-group">
                                          <label>الاسم</label>
                                          <input  name="type_licenses_name" class="form-control" type="text"/>
                                        </div>
                                      </div>
                                              <div class="modal-footer justify-content-start">
                                                <button class="btn btn-secondary" type="button" data-dismiss="modal">اغلاق</button>
                                                <button type="submit" class="btn btn-primary add" type="button">حفظ</button>
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
                                          <label>الاسم</label>
                                          <input class="form-control" type="text"/>
                                        </div>
                                      </div>
                                    </form>
                                            <div class="modal-footer justify-content-start">
                                              <button class="btn btn-secondary" type="button" data-dismiss="modal">اغلاق</button>
                                              <button class="btn btn-primary add" type="button">حفظ</button>
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
                                <table class="table table-bordered table-striped">
                                  <thead>
                                    <tr>
                                      <th>الرقم</th>
                                      <th>الاسم</th>
                                      <th>عدد التراخيص</th>
                                      <th>خيارات</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                     @foreach($sys_Type_licenses as $data)
                                      <tr>
                                      <td>{{$data->type_licenses_id}}</td>
                                      <td>{{$data->type_licenses_name}}</td>
                                      <td>32 </td>
                                       <td>
									      <a class="btn btn-warning btn-xs mx-1" href="#" data-toggle="modal" data-target="#modal8"><i class="fa fa-edit mr-1"></i>تعديل</a>
										  <a class="btn btn-danger btn-xs mx-1" href="{{  url('dalType_licenses')  }}/{{  $data->type_licenses_id  }}"><i class="fa fa-trash mr-1"></i>خذف</a>
                                        </td>


                                    </tr>
									 @endforeach
                                  </tbody>
                                </table>
                                <div class="mt-3">
                                    <ul class="pagination">


                                          {{  $sys_Type_licenses->links() }}
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



