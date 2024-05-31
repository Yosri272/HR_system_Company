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
                    <li class="breadcrumb-item"><span>الاعدادات </span></li>

                      <li class="breadcrumb-item"><span>الحسابات </span></li>
                  </ol>
                </div>
                <div class="col-sm-12">
                  <h1> الحسابات</h1>
                </div>
              </div>
            </div>
          </div>
  <section class="content">
    <div class="card card-primary card-outline card-outline-tabs">
      <div class="card-header p-0 border-bottom-0">
        <ul class="nav nav-tabs" id="tabs-tab" role="tablist">
          <!-- ‫‪SYSTEM‬‬-->
          <li class="nav-item"><a class="nav-link active" id="tabs-1-tab" data-toggle="pill" href="#tabs-1" role="tab" aria-controls="tabs-1" aria-selected="true">
              مراكز التكلفة
              </a></li>
          <!-- ‫‪SYSTEM_B‬‬-->
          <li class="nav-item"><a class="nav-link" id="tabs-2-tab" data-toggle="pill" href="#tabs-2" role="tab" aria-controls="tabs-2" aria-selected="false">
              العملات
              </a></li>
          <!-- ‫‪SYSTEM_SCREEN‬‬-->
          <li class="nav-item"><a class="nav-link" id="tabs-3-tab" data-toggle="pill" href="#tabs-3" role="tab" aria-controls="tabs-3" aria-selected="false">
                 البنوك
              </a></li>
        </ul>
      </div>
      <div class="card-body">
        <div class="tab-content" id="tabs-tabContent">
          <!-- ‫‪SYSTEM‬‬-->
          <div class="tab-pane fade active show" id="tabs-1" role="tabpanel" aria-labelledby="tabs-1-tab">
            <section class="content">
              <div class="row">
                <div class="col-12">
                  <div class="card shadow-none">
                            <div class="d-lg-flex bg-gray-light justify-content-lg-between px-4 py-3">
                              <h4 class="align-self-center">مراكز التكلفة</h4>
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
                                    <h5 class="modal-title">اضافة  مركز تكلفة جديد</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                  </div>
                          <form action="{{ url('contersSort')}}" method="GET" novalidate="" >
                            <div class="modal-body">
                              <div class="form-group">
                                <label>اسم  المركزالعربي</label>
                                <input class="form-control" name="conter_nameAR" type="text"/>
                              </div>
							  <div class="form-group">
                                <label>اسم  المركز انجليزي</label>
                                <input class="form-control" name="conter_nameEN" type="text"/>
                              </div>
                               <div class="form-group">
                                 <label> حاله المركز</label>
                                <input class="form-control" name="conter_status" type="text"/>
                              </div>

                               <div class="form-group">
                                 <label>  نوع المركز </label>
                                <input class="form-control" name="conter_type" type="text"/>
                              </div>
                                  <div class="form-group">
                                 <label> المستوي </label>
                                <input class="form-control" name="conter_level" type="number"/>
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
                                    <h5 class="modal-title">تعديل مركز التكلفة </h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                  </div>
                           <form>
                            <div class="modal-body">
                              <div class="form-group">
                                <label>اسم  المركز</label>
                                <input class="form-control" type="text"/>
                              </div>

                              <div class="form-group">
                                <label> حاله المركز</label>
                                <select class="form-control">
                                  <option>حاله المركز  1</option>

                                </select>
                              </div>

                                  <div class="form-group">
                                <label> نوع المركز</label>
                                <select class="form-control">
                                  <option>نوع المركز  1</option>

                                </select>
                              </div>  <div class="form-group">
                                <label> المستوي </label>
                                <select class="form-control">
                                  <option>المستوي   1</option>

                                </select>
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
                      <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title">عرض تفاصيل </h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                  </div>
                          <div class="modal-body">
                            <div>
                              <h4>اسم مركز التكلفة</h4>
                            </div>
                            <div class="mb-4">
                            </div>
                            <div class="row">

                              <div class="col-md-4">
                                  <h5>حاله المركز: هنا عرض حاله المركز</h5>
                              </div>
                              <div class="col-md-4 ">
                                  <h5>نوع المركز: هنا عرض نوع المركز </h5>
                              </div> <div class="col-md-4">
                                  <h5>المستوي : هنا عرض  المستوي</h5>
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
                            <th>الرقم</th>
                            <th>اسم مركز التكلفة</th>
                            <th>حاله المركز</th>
                            <th>نوع المركز</th>
                            <th>المستوي </th>
                            <th>خيارات</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($sys_conters as $data)
                          <tr>
                            <td>{{$data->conter_id}}</td>
                            <td>{{$data->conter_nameAR}}</td>
                            <td>{{$data->conter_status}}</td>
							<td>{{$data->conter_type}}</td>
                            <td>{{$data->conter_level}}</td>
                                    <td><a class="btn btn-info btn-xs" href="#" data-toggle="modal" data-target="#modal3"><i class="fa fa-eye mr-1"></i>عرض</a>
                                      <div class="dropdown d-inline-block">
                                        <button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"><span>المزيد</span><span class="caret"></span></button>
                                        <div class="dropdown-menu"><a class="dropdown-item text-info" href="#" data-toggle="modal" data-target="#modal3"><i class="fa fa-eye mr-1"></i><span>تفاصيل</span></a><a class="dropdown-item text-warning" href="#" data-toggle="modal" data-target="#modal2"><i class="fa fa-edit mr-1"></i><span>تعديل</span></a>
										<a class="dropdown-item delete text-danger" href="{{  url('dalconters')  }}/{{  $data->conter_id  }}"><i class="fa fa-trash mr-1"></i><span>حذف</span></a></div>
                                      </div>
                                    </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                      <div class="mt-3">
                        <ul class="pagination">

                            {{  $sys_conters->links() }}

                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        <!-- ‫‪SYSTEM_B‬‬-->
        <div class="tab-pane fade" id="tabs-2" role="tabpanel" aria-labelledby="tabs-2-tab">
            <section class="content">
              <div class="row">
                <div class="col-12">
                  <div class="card shadow-none"></div>
                          <div class="d-lg-flex bg-gray-light justify-content-lg-between px-4 py-3">
                            <h4 class="align-self-center">العملات </h4>
                            <div class="align-self-center">
                              <button class="btn btn-primary departments" data-toggle="modal" data-target="#modal4"><i class="fa fa-plus"></i> اضافة</button>
                              <button class="btn btn-tool" type="button" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                            </div>
                          </div>
                  <!-- add modal-->
                  <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="modal4" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title">اضافة  العملات</h5>
                                  <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                      <form action="{{ url('currenciesSort')}}" method="GET" novalidate="">
                          <div class="modal-body">

                          <div class="form-group">
                                <label>اسم  العملة</label>
                                <input  name="currency_name"  class="form-control" type="text"/>
                              </div>
                                <div class="form-group">
                                <label>كود  العملة</label>
                                <input   name="qr_currency" class="form-control" type="text"/>
                              </div>
                                <div class="form-group">
                                <label>نوع  العملة</label>
                                <input   name="currency_type" class="form-control" type="number"/>
                              </div>
                               <div class="form-group">
                                <label>  سعر العملة مقابل العملة المحلية</label>
                                <input   name="currency_rateInOfG" class="form-control" type="number"/>
                              </div>
                               <div class="form-group">
                                <label>  الفكه</label>
                                <input   name="change" class="form-control" type="text"/>
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
                  <div class="modal fade" id="modal5" tabindex="-1" role="dialog" aria-labelledby="modal5" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title">تعديل  العملات</h5>
                                  <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                        <form action="{{ url('currenciesSort')}}" method="GET" novalidate="">
                          <div class="modal-body">

                          <div class="form-group">
                                <label>اسم  العملة</label>
                                <input  name="currency_name"  class="form-control" type="text"/>
                              </div>
                                <div class="form-group">
                                <label>كود  العملة</label>
                                <input   name="qr_currency" class="form-control" type="text"/>
                              </div>
                                <div class="form-group">
                                <label>نوع  العملة</label>
                                <input   name="currency_type" class="form-control" type="number"/>
                              </div>
                               <div class="form-group">
                                <label>  سعر العملة مقابل العملة المحلية</label>
                                <input   name="currency_rateInOfG" class="form-control" type="number"/>
                              </div>
                               <div class="form-group">
                                <label>  الفكه</label>
                                <input   name="change" class="form-control" type="text"/>
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
                  <!-- show modal-->
                  <div class="modal fade" id="modal6" tabindex="-1" role="dialog" aria-labelledby="modal6" aria-hidden="true">
                    <div class="modal-dialog">(role="document")
                      <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title">عرض تفاصيل العمله</h5>
                                  <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                        <div class="modal-body">
                          <div>
                            <h4>اسم العملة</h4>
                          </div>
                          <div class="mb-4">
                            <p class="h5">  </p>
                          </div>
                          <div class="row">

                             <div class="col-md-4 mb-4">
                                  <h5>كود العمله : هنا كود </h5>
                              </div>
                                <div class="col-md-4 mb-4">
                                  <h5>نوع العمله : هنا نوع </h5>
                              </div>
                               <div class="col-md-4">
                                  <h5>الفكة : هنا  الفكه</h5>
                              </div>

                                <div class="col-md-12">
                                  <h5>سعر  العمله مقابل المحليه : هنا نوع العملة</h5>
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
                    <table class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>الرقم</th>
                          <th>اسم العملة</th>
                          <th>كود العملة </th>
                          <th>نوع العملة</th>
                          <th>خيارات</th>
                        </tr>
                      </thead>
                      <tbody>

                              @foreach($sys_currencies as $data)
                          <tr>
                            <td>{{$data->currency_id}}</td>
                            <td>{{$data->currency_name}}</td>
                            <td>{{$data->qr_currency}}</td>
                            <td>{{$data->currency_type}}</td>

                                  <td><a class="btn btn-info btn-xs" href="#" data-toggle="modal" data-target="#modal6"><i class="fa fa-eye mr-1"></i>عرض</a>
                                    <div class="dropdown d-inline-block">
                                      <button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"><span>المزيد</span><span class="caret"></span></button>
                                      <div class="dropdown-menu"><a class="dropdown-item text-info" href="#" data-toggle="modal" data-target="#modal6"><i class="fa fa-eye mr-1"></i><span>تفاصيل</span></a><a class="dropdown-item text-warning" href="#" data-toggle="modal" data-target="#modal5"><i class="fa fa-edit mr-1"></i><span>تعديل</span></a>
									  <a class="dropdown-item delete text-danger" href="{{  url('dalcurrencies')  }}/{{  $data->currency_id  }}"><i class="fa fa-trash mr-1"></i><span>حذف</span></a></div>
                                    </div>
                                  </td>
                        </tr>
                        @endforeach

                      </tbody>
                    </table>
                    <div class="mt-3">
                      <ul class="pagination">

                        {{  $sys_currencies->links() }}

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
        <div class="card border">
          <div class="card-header p-2">
                    <div class="d-lg-flex bg-gray-light justify-content-lg-between px-4 py-3">
                      <h4 class="align-self-center">قائمة البنوك</h4>
                      <div class="align-self-center">
                        <button class="btn btn-primary departments" data-toggle="modal" data-target="#modal50"><i class="fa fa-plus"></i> اضافة</button>
                        <button class="btn btn-tool" type="button" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                      </div>
                    </div>
          </div>
          <!-- add modal-->
          <div class="modal fade" id="modal50" tabindex="-1" role="dialog" aria-labelledby="modal50" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">اضافة بنك  </h5>
                          <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        </div>
                <form action="{{ url('bankSort')}}" method="GET" novalidate="" >
                  <div class="modal-body row">
                    <div class="form-group col-lg-6">
                      <label>اسم البنك عربي</label>
                      <input name="bank_nameAR" class="form-control" type="text"/>
                    </div>
                    <div class="form-group col-lg-6">
                      <label>اسم البنك انجليزي</label>
                      <input name="bank_nameEN" class="form-control" type="text"/>
                    </div>

                    <div class="form-group col-lg-6">
                      <label>التلفون</label>
                      <input name="bank_tel" class="form-control" type="number"/>
                    </div>
                    <div class="form-group col-lg-6">
                      <label>فاكس</label>
                      <input name="bank_fax" class="form-control" type="text"/>
                    </div>
                    <div class="form-group col-lg-6">
                      <label>البريد</label>
                      <input name="bank_box"class="form-control" type="text"/>
                    </div>
                    <div class="form-group col-lg-6">
                      <label>العنوان</label>
                      <input name="bank_address" class="form-control" type="text"/>
                    </div>

                  </div>
                          <div class="modal-footer justify-content-start">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">اغلاق</button>
                            <button type="submit"  class="btn btn-primary add" type="button">حفظ</button>
                          </div>
                </form>
              </div>
            </div>
          </div>
          <!-- edit modal-->
          <div class="modal fade" id="modal51" tabindex="-1" role="dialog" aria-labelledby="modal2" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">تعديل بيانات البنك </h5>
                          <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        </div>
                <form>
                  <div class="modal-body row">
                    <div class="form-group col-lg-6">
                      <label>اسم البنك عربي</label>
                      <input class="form-control" type="text"/>
                    </div>
                    <div class="form-group col-lg-6">
                      <label>اسم البنك انجليزي</label>
                      <input class="form-control" type="text"/>
                    </div>

                    <div class="form-group col-lg-6">
                      <label>التلفون</label>
                      <input class="form-control" type="phone"/>
                    </div>
                    <div class="form-group col-lg-6">
                      <label>فاكس</label>
                      <input class="form-control" type="text"/>
                    </div>
                    <div class="form-group col-lg-6">
                      <label>البريد</label>
                      <input class="form-control" type="text"/>
                    </div>
                    <div class="form-group col-lg-6">
                      <label>العنوان</label>
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
          <!-- show modal-->
          <div class="modal fade" id="modal52" tabindex="-1" role="dialog" aria-labelledby="modal3" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">عرض تفاصيل البنك</h5>
                          <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-12 mb-4">
                      <h4 class="mt-0">بنك السلام</h4>
                      <p class="h5">الامارت \ دبي \ شارع 23 \ مبني رقم 88</p>
                      <p class="h5">+2234567890</p>
                      <p class="h5">jshsa@gmail.com</p>
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
                  <th>الرقم</th>
                  <th>اسم البنك</th>
                  <th>فاكس</th>
                  <th>التلفون</th>
                  <th>خيارات</th>
                </tr>
              </thead>
              <tbody>
                @foreach($sys_bank as $data)
                          <tr>
                            <td>{{$data->bank_id}}</td>
                            <td>{{$data->bank_nameAR}}</td>
                            <td>{{$data->bank_fax}}</td>
							<td>{{$data->bank_tel}}</td>
                          <td><a class="btn btn-info btn-xs" href="#" data-toggle="modal" data-target="#modal52"><i class="fa fa-eye mr-1"></i>عرض</a>
                            <div class="dropdown d-inline-block">
                              <button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"><span>المزيد</span><span class="caret"></span></button>
                              <div class="dropdown-menu"><a class="dropdown-item text-info" href="#" data-toggle="modal" data-target="#modal52"><i class="fa fa-eye mr-1"></i><span>تفاصيل</span></a><a class="dropdown-item text-warning" href="#" data-toggle="modal" data-target="#modal51"><i class="fa fa-edit mr-1"></i><span>تعديل</span></a>
							  <a class="dropdown-item delete text-danger" href="{{  url('dalbank')  }}/{{  $data->bank_id  }}"><i class="fa fa-trash mr-1"></i><span>حذف</span></a></div>
                            </div>
                          </td>

                         </tr>
                          @endforeach
                        </tbody>
                      </table>
                      <div class="mt-3">
                        <ul class="pagination">

                            {{  $sys_bank->links() }}

                        </ul>
            </div>
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



