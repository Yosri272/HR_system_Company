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
                      <span>العقود</span>
                    </li>
                  </ol>
                </div><!-- /.col -->
                <div class="col-sm-12">
                  <h1>العقود </h1>
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
                      العقود
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="tabs-shelve-tab" data-toggle="pill" href="#tabs-shelve" role="tab"
                      aria-controls="tabs-shelve" aria-selected="false">
                      انواع العقود
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="tabs-shelve2-tab" data-toggle="pill" href="#tabs-shelve2" role="tab"
                      aria-controls="tabs-shelve2" aria-selected="false">
                      بنود العقود
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
                        <div class="col-12">
                          <div class="card text-right shadow-none">
                            <div class="d-lg-flex bg-gray-light justify-content-lg-between px-4 py-3">
                              <h4 class="align-self-center"> العقود </h4>
                              <div class="align-self-center">
                                <a href="{{ url('add-contract') }}" class="btn btn-primary departments">
                                  <i class="fa fa-plus"></i> اضافة
                                </a>

                                <button type="button" class="btn btn-tool" data-card-widget="maximize">
                                  <i class="fas fa-expand"></i>
                                </button>
                              </div>
                            </div>
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
                                      <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 172px;"># </th>
                                      <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 455px;"> اسم
                                        الموظف</th>
                                      <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 172px;">
                                        نوع العقد</th>
                                      <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 172px;">
                                        الراتب الاساسي</th>
                                      <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 172px;">
                                        تاريخ البداية</th>
                                      <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 172px;">
                                        تاريخ النهاية</th>
                                      <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 859px;">
                                        والخيارات</th>
                                    </tr>
                                  </thead>
                                  <tbody>
								   @foreach($sys_contract as $data)
                                    <tr role="row" class="odd">
                                     <td>{{$data->contract_id }}</td>
                                     <td>{{$data->emply_nameAR}}</td>
                                     <td>{{$data->contracttype_name}}</td>
                                     <td>{{$data->basic_salary}}</td>
                                     <td>{{$data->contract_starting}}</td>
						           	 <td>{{$data->contract_end}}</td>

							         <td>
                                        <a class="btn btn-info btn-xs" href="{{  url('view-contract')  }}/{{  $data->contract_id  }}"><i
                                            class="fa fa-eye"></i>
                                          عرض</a>
                                        <div class="dropdown d-inline-block">
                                          <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                            data-toggle="dropdown" aria-expanded="false">
                                            <span>المزيد</span>
                                            <span class="caret"></span>

                                          </button>
                                          <div class="dropdown-menu" style="">
                                            <a href="{{  url('view-contract')  }}/{{  $data->contract_id  }}" class="dropdown-item text-info">
                                              <i class="fa fa-eye"></i>
                                              <span>تفاصيل</span>
                                            </a>

                                            <a href="edit-contract.html" class="dropdown-item text-warning">
                                              <i class="fa fa-edit"></i>
                                              <span>تعديل</span>
                                            </a>
                                            <a href="{{  url('dalcontract')  }}/{{  $data->contract_id  }}" class="dropdown-item delete text-danger"
                                              data-form="#deleteForm-12127">
                                              <i class="fa fa-trash"></i>
                                              <span>حذف</span>
                                            </a>
                                          </div>

                                        </div>


                                      </td>
                                    </tr>
									 @endforeach
                                  </tbody>
                                </table>
                                <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                                  <ul class="pagination">
                                   {{  $sys_contract->links() }}


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
                            <form action="{{ url('contracttypeSort')}}" method="GET" novalidate="">

                              <div class="modal-body">
                                <div class="form-group">
                                  <label for="from-date"> اسم نوع العقد </label>
                                  <input name="contracttype_name" type="text" class="form-control">
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
                                انواع العقود
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
                                      <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 172px;">كود نوع
                                        العقد </th>
                                      <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 455px;"> اسم
                                        نوع العقد</th>

                                      <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 859px;">
                                        والخيارات</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                  @foreach($sys_contracttype as $data)
                                    <tr role="row" class="odd">
                                      <td>{{$data->contracttype_id}}</td>
                                      <td>{{$data->contracttype_name}}</td>

                                      <td>

                                        <button class="btn btn-warning btn-xs departments update" data-action="#"
                                          data-title="خدمة العملاء" data-toggle="modal" data-target="#shelveModal"><i
                                            class="fa fa-edit"></i> تعديل</button>
                                        <button  class="btn btn-danger btn-xs delete" >
                                        <i class="fa fa-trash"></i><a href="{{  url('dalcontracttype')  }}/{{  $data->contracttype_id  }}">حذف</a>
										</button>

                                      </td>
                                    </tr>
									 @endforeach
                                  </tbody>
                                </table>
                                <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                                  <ul class="pagination">

								  {{  $sys_contracttype->links() }}

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

                  <div class="tab-pane fade" id="tabs-shelve2" role="tabpanel" aria-labelledby="tabs-shelve2-tab">
                    <section class="content">
                      <div class="modal fade" id="shelve32Modal" tabindex="-1" role="dialog"
                        aria-labelledby="shelve32Modal" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="shelve32ModalLabel">اضافة</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                              </button>
                            </div>
                           <form action="{{ url('contractitemSort')}}" method="GET" novalidate="">
                              <input type="hidden" name="_token" value="h101Moov2kEDoN7GAZ5dSATxgNsC62iHlz1B5MYZ">
                              <div class="modal-body">

                                <div class="form-group">
                                  <label class="mr-2" for="class"> بند العقد </label>
                                  <select class="form-control" name="contracttype_id">
                                @foreach($sys_contracttype as $data)
                                 <option >{{$data->contracttype_name}}</option>
                                  @endforeach
                               </select>
                                </div>
                                <div class="row">
                                  <div class="col-lg-6">
                                    <div class="form-group">
                                      <label> اسم البند (ar)</label>
                                      <input  name="contractitem_nameAR" type="text" class="form-control">
                                    </div>

                                  </div>
                                  <div class="col-lg-6">
                                    <div class="form-group">
                                      <label> اسم البند (en)</label>
                                      <input  name="contractitem_nameEN" type="text" class="form-control">
                                    </div>

                                  </div>
                                </div>
                                <div class="form-group">
                                  <label> مستوي البند </label>
                                  <input  name="item_leve" type="number" class="form-control">
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
                                بنود العقود
                              </h4>
                              <div class="align-self-center">
                                <button class="btn btn-primary departments" data-toggle="modal"
                                  data-target="#shelve32Modal">
                                  <i class="fa fa-plus"></i> اضافة
                                </button>

                                <button type="button" class="btn btn-tool" data-card-widget="maximize">
                                  <i class="fas fa-expand"></i>
                                </button>
                              </div>
                            </div>
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

                                   {{  $sys_contractitem->links() }}


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


