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
                    <li class="breadcrumb-item"><span>المناطق</span></li>
                  </ol>
                </div>
                <div class="col-sm-12">
                  <h1>المناطق</h1>
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
              الدول
              </a></li>
          <!-- branch-->
          <li class="nav-item"><a class="nav-link" id="tabs-2-tab" data-toggle="pill" href="#tabs-2" role="tab" aria-controls="tabs-2" aria-selected="false">
              المحافظات
              </a></li>
          <!-- departments-->
          <li class="nav-item"><a class="nav-link" id="tabs-3-tab" data-toggle="pill" href="#tabs-3" role="tab" aria-controls="tabs-3" aria-selected="false">
              الاحياء
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
                              <h4 class="align-self-center">قائمة الدول</h4>
                              <div class="align-self-center">
                                <button class="btn btn-primary departments" data-toggle="modal" data-target="#modal1"><i class="fa fa-plus"></i> اضافة</button>
                                <button class="btn btn-tool" type="button" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                              </div>
                            </div>
                    <!-- add modal-->
                    <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title">اضافة دولة  </h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                  </div>
                          <form action="{{ url('stateSort')}}" method="GET" novalidate="" >
                            <div class="modal-body">
                              <div class="form-group">
                                <label>اسم الدولة </label>
                                <input  name="state_name" class="form-control" type="text"/>
                              </div>

                              <div class="form-group">
                                <label>رمز الدولة</label>
                                <input  name="code_s" class="form-control" type="text"/>
                              </div>

                            </div>
                                    <div class="modal-footer justify-content-start">
                                      <button class="btn btn-secondary" type="button" data-dismiss="modal">اغلاق</button>
                                      <button  type="submit" class="btn btn-primary add" type="button">حفظ</button>
                                    </div>
                          </form>
                        </div>
                      </div>
                    </div>
                    <!-- edit modal-->
                    <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="modal2" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title">تعديل بيانات الدولة </h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                  </div>
                          <form action="{{ url('stateSort')}}" method="GET" novalidate="">
                            <div class="modal-body">
                              <div class="form-group">
                                <label>اسم الدولة </label>
                                <input name="state_name" class="form-control" type="text"/>
                              </div>

                              <div class="form-group">
                                <label>رمز الدولة</label>
                                <input  name="code_s" class="form-control" type="text"/>
                              </div>

                            </div>
                                    <div class="modal-footer justify-content-start">
                                      <button class="btn btn-secondary" type="button" data-dismiss="modal">اغلاق</button>
                                      <button  type="submit" class="btn btn-primary add" type="button">حفظ</button>
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
                            <div class="mb-3"><span>الدولة  :
                                <p class="h4 d-inline">اسم الدولة</p></span></div>
                            <div class="mb-3"><span>رمز الدولة  :
                                <p class="h4 d-inline">UZL</p></span></div>
                            <div class="mb-3"><span>رمز القارة  :
                                <p class="h4 d-inline">AF</p></span></div>
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
                          <button  class="btn btn-success" tabindex="0" aria-controls="datatable" type="button"><span><i class="fa fa-file-excel mr-1"></i>اكسل</span></button>
                        </div>
                      </div>
                      <table class="table table-bordered table-striped text-center">
                        <thead>
                          <tr>
                            <th>الرقم</th>
                            <th>الاسم</th>
                            <th>خيارات</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($sys_state as $data)
                          <tr>
                            <td>{{$data->state_id}}</td>
                            <td>{{$data->state_name}}</td>

                            <td><a class="btn btn-info btn-xs mx-1" href="#" data-toggle="modal" data-target="#modal3"><i class="fa fa-eye mr-1"></i>عرض</a><a class="btn btn-warning btn-xs mx-1" href="yosri.html" data-toggle="modal" data-target="#modal2"><i class="fa fa-edit mr-1"></i>تعديل</a>
							<a class="btn btn-danger btn-xs mx-1" href="{{  url('dalstate')  }}/{{  $data->state_id  }}"><i class="fa fa-trash mr-1"></i>خذف</a>
                                    </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                      <div class="mt-3">
                        <ul class="pagination">

                            {{  $sys_state->links() }}

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
                  <div class="card shadow-none">
                            <div class="d-lg-flex bg-gray-light justify-content-lg-between px-4 py-3">
                              <h4 class="align-self-center">قائمة المحافظات</h4>
                              <div class="align-self-center">
                                <button class="btn btn-primary departments" data-toggle="modal" data-target="#modal4"><i class="fa fa-plus"></i> اضافة</button>
                                <button class="btn btn-tool" type="button" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                              </div>
                            </div>
                    <!-- add modal-->
                    <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="modal1" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title">اضافة محافظة  </h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                  </div>
                          <form action="{{ url('governorSort')}}" method="GET" novalidate="">
                            <div class="modal-body">
                              <div class="form-group">
                                <label>اسم المحافظة </label>
                                <input name="governor_name" class="form-control" type="text"/>
                              </div>

                              <div class="form-group">
                                <label> الدولة</label>
                                <select class="form-control" name="state_name">
                                    @foreach($sys_state as $data)
                                  <option>{{$data->state_name}}</option>
                                  @endforeach
                                </select>
                              </div>
                            </div>
                                    <div class="modal-footer justify-content-start">
                                      <button class="btn btn-secondary" type="button" data-dismiss="modal">اغلاق</button>
                                      <button   type="submit" class="btn btn-primary add" type="button">حفظ</button>
                                    </div>
                          </form>
                        </div>
                      </div>
                    </div>
                    <!-- edit modal-->
                    <div class="modal fade" id="modal5" tabindex="-1" role="dialog" aria-labelledby="modal5" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title">تعديل بيانات المحافظة </h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                  </div>
                          <form>
                            <div class="modal-body">
                              <div class="form-group">
                                <label>اسم المحافظة عربي</label>
                                <input class="form-control" type="text"/>
                              </div>

                              <div class="form-group">
                                <label> الدولة</label>
                                <select class="form-control">
                                  <option>اسم الدولة 1</option>
                                  <option>اسم الدولة 2</option>
                                  <option>اسم الدولة 3</option>
                                  <option>اسم الدولة 4</option>
                                  <option>اسم الدولة 5</option>
                                  <option>اسم الدولة 6</option>
                                  <option>اسم الدولة 7</option>
                                  <option>اسم الدولة 8</option>
                                  <option>اسم الدولة 9</option>
                                  <option>اسم الدولة 10</option>
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
                    <!-- show modal-->
                    <div class="modal fade" id="modal6" tabindex="-1" role="dialog" aria-labelledby="modal6" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title">عرض تفاصيل المحافظة</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                  </div>
                          <div class="modal-body">
                            <div class="mb-3"><span>المحافظة  :
                                <p class="h4 d-inline">اسم المحافظة</p></span></div>
                            <div class="mb-3"><span> الدولة  :
                                <p class="h4 d-inline">UZL</p></span></div>
                            <div class="mb-3"><span> الاحياء  :
                                <p class="h4 d-inline">43</p></span></div>
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
                                    <label class="mr-1">الدولة</label>
                                    <select class="form-control">
                                      <option>الكل</option>
                                      <option>1-الاصول</option>
                                    </select>
                                  </div>
                                  <button class="btn btn-primary" type="button"><i class="fa fa-search ml-2"></i><span>بحث</span></button>
                                </form>
                              </div>
                      <table class="table table-bordered table-striped text-center">
                        <thead>
                          <tr>
                            <th>الرقم</th>
                            <th>الاسم</th>
                            <th>الدولة</th>

                            <th>خيارات</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($sys_governor as $data)
                          <tr>

                            <td>{{$data->governor_id}}</td>
                            <td>{{$data->governor_name}}</td>
                            <td>{{$data->state_id}}</td>

                                    <td><a class="btn btn-info btn-xs mx-1" href="#" data-toggle="modal" data-target="#modal6"><i class="fa fa-eye mr-1"></i>عرض</a><a class="btn btn-warning btn-xs mx-1" href="#" data-toggle="modal" data-target="#modal5"><i class="fa fa-edit mr-1"></i>تعديل</a>
									<a class="btn btn-danger btn-xs mx-1" href="{{  url('dalgovernor')  }}/{{  $data->governor_id  }}"><i class="fa fa-trash mr-1"></i>خذف</a>
                                    </td>

                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                      <div class="mt-3">
                        <ul class="pagination">


                              {{  $sys_governor->links() }}
                        </ul>
                      </div>
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
                <div class="card shadow-none">
                          <div class="d-lg-flex bg-gray-light justify-content-lg-between px-4 py-3">
                            <h4 class="align-self-center">قائمة الاحياء</h4>
                            <div class="align-self-center">
                              <button class="btn btn-primary departments" data-toggle="modal" data-target="#modal7"><i class="fa fa-plus"></i> اضافة</button>
                              <button class="btn btn-tool" type="button" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                            </div>
                          </div>
                  <!-- add modal-->
                  <div class="modal fade" id="modal7" tabindex="-1" role="dialog" aria-labelledby="modal1" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title">اضافة حي  </h5>
                                  <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                        <form action="{{ url('neighSort')}}" method="GET" novalidate="">
                          <div class="modal-body">

                            <div class="form-group">
                              <label>الدولة </label>
                              <select class="form-control"name="state_name">
							  @foreach($sys_state as $data)
                                <option>{{$data->state_name}}</option>
                               @endforeach
                              </select>
                            </div>


							<div class="form-group">
                              <label> المحافظة</label>
                              <select class="form-control" name="governor_id">
							  @foreach($sys_governor as $data)
                                <option>{{$data->governor_name}}</option>
                               @endforeach
                              </select>
                            </div>
                               <div class="form-group">
                              <label>اسم الحي </label>
                              <input name="neigh_name"class="form-control" type="text"/>
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
                                  <h5 class="modal-title">تعديل بيانات الحي </h5>
                                  <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                        <form>
                          <div class="modal-body">

                            <div class="form-group">
                              <label> الدولة</label>
                              <select class="form-control">
                                <option>اسم الدولة 1</option>
                                <option>اسم الدولة 2</option>
                                <option>اسم الدولة 3</option>
                                <option>اسم الدولة 4</option>
                                <option>اسم الدولة 5</option>
                                <option>اسم الدولة 6</option>
                                <option>اسم الدولة 7</option>
                                <option>اسم الدولة 8</option>
                                <option>اسم الدولة 9</option>
                                <option>اسم الدولة 10</option>
                              </select>
                            </div>       <div class="form-group">
                              <label> المحافظة</label>
                              <select class="form-control">
                                <option>اسم المحافظة 1</option>
                                <option>اسم المحافظة 2</option>
                                <option>اسم المحافظة 3</option>
                                <option>اسم المحافظة 4</option>
                                <option>اسم المحافظة 5</option>
                                <option>اسم المحافظة 6</option>
                                <option>اسم المحافظة 7</option>
                                <option>اسم المحافظة 8</option>
                                <option>اسم المحافظة 9</option>
                                <option>اسم المحافظة 10</option>
                              </select>
                            </div>
                               <div class="form-group">
                              <label>اسم الحي </label>
                              <input class="form-control" type="text"/>
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

                  <div class="card-body">
                            <div class="card-extra clearfix mb-3">
                              <form class="form-inline guide-advanced-search mb-3">
                                <div class="form-group mr-2">
                                  <label><i class="fa fa-cogs mr-1"></i><span>بحث متقدم</span></label>
                                </div>
                                <div class="form-group mr-2">
                                  <label class="mr-1">الدولة</label>
                                  <select class="form-control">
                                    <option>الكل</option>
                                    <option>1-الاصول</option>
                                  </select>
                                </div>
                                <div class="form-group mr-2">
                                  <label class="mr-1">المحافظة</label>
                                  <select class="form-control">
                                    <option>الكل</option>
                                  </select>
                                </div>
                                <button class="btn btn-primary" type="button"><i class="fa fa-search ml-2"></i><span>بحث</span></button>
                              </form>
                            </div>
                    <table class="table table-bordered table-striped text-center">
                      <thead>
                        <tr>
                          <th>الرقم</th>
                          <th>الاسم</th>
                          <th>المحافظة</th>
                          <th>خيارات</th>
                        </tr>
                      </thead>
                      <tbody>
					  @foreach($sys_neighs as $data)
                        <tr>
                          <td>{{$data->neigh_id}}</td>
                          <td>{{$data->governor_id}}</td>
                          <td>{{$data->neigh_name}}</td>
                                  <td>
								   <a class="btn btn-info btn-xs" href="{{  url('disneighs')  }}/{{  $data->neigh_id  }}"><i class="fa fa-eye"></i>
                                عرض</a>
								  <a class="btn btn-warning btn-xs mx-1" href="#" data-toggle="modal" data-target="#modal8"><i class="fa fa-edit mr-1"></i>تعديل</a>
								  <a class="btn btn-danger btn-xs mx-1" href="{{  url('dalneighs')  }}/{{  $data->neigh_id  }}"><i class="fa fa-trash mr-1"></i>خذف</a>
                                  </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    <div class="mt-3">
                      <ul class="pagination">

					   {{  $sys_neighs->links() }}

					   </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </section>


       </div>
    </section>
    @endsection
            <!-- /.row -->



