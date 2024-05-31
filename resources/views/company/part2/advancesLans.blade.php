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
                        <li class="breadcrumb-item"><span>السلف والقروض</span></li>
                  </ol>
                </div>
                <div class="col-sm-12">
                  <h1>السلف والقروض</h1>
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
السلف

              </a></li>
          <!-- license type-->
          <li class="nav-item"><a class="nav-link" id="tabs-2-tab" data-toggle="pill" href="#tabs-2" role="tab" aria-controls="tabs-2" aria-selected="false">
              الاقساط

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
                              <h4 class="align-self-center">قائمة السلف</h4>
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
                                    <h5 class="modal-title">اضافة   </h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                  </div>
                         <form action="{{ url('predSort')}}" method="GET" novalidate="" >
                            <div class="modal-body row">
                              <div class="form-group col-lg-6">
                                <label>   الفرع</label>
                                <select name="branch_nameAR" class="form-control">
                                  <option>اسم الفرع</option>

                                </select>
                              </div>
							   <div class="form-group col-lg-6">
                                <label>   القسم</label>
                                <select name="dept_name" class="form-control">
                                  <option>اسم القسم     1</option>

                                </select>
                              </div>
                              <div class="form-group col-lg-6">
                                <label>   الموظف</label>
                                <select name="emply_name" class="form-control">
                                  <option>اسم الموظف     1</option>

                                </select>
                              </div>
                                    <div class="form-group col-lg-6">
                                    <label>الغرض من السلفية </label>
                                    <input name="pred_purpose" class="form-control" type="text"/>
                                  </div>
                                <div class="form-group col-lg-6">
                                    <label> نوعها  </label>
                                    <input name="type" class="form-control" type="text"/>
                                  </div>
                                      <div class="form-group col-lg-6">
                                    <label> المبلغ  </label>
                                    <input name="amount" class="form-control" type="number"/>
                                  </div>
                                       <div class="form-group col-lg-6">
                                <label>   العمله</label>
                                <select name="currency_name" class="form-control">
                                  <option>    دولار</option>

                                </select>
                              </div>
                                        <div class="form-group col-lg-6">
                                        <label> طريقة حساب القسط  </label>
                                        <input name="calculation"  class="form-control" type="text"/>
                                      </div>

                                <div class="form-group col-lg-6">
                                        <label>عدد الاشهر </label>
                                        <input name="months_number" class="form-control" type="number"/>
                                      </div>
                                <div class="form-group col-lg-6">
                                        <label> القسط </label>
                                        <input name="premium" class="form-control" type="number"/>
                                      </div>


                                <div class="form-group col-lg-6">
                                        <label> اقصى مبلغ للسلفة </label>
                                        <input name="pred_max" class="form-control" type="number"/>
                                      </div><div class="form-group col-lg-6">
                                        <label> تاريخ السلفة </label>
                                        <input name="pred_date"  class="form-control" type="date"/>
                                      </div>

                                <div class="form-group col-lg-6">
                                        <label> تاريخ بداية الاستقطاع  </label>
                                        <input name="startdate" class="form-control" type="date"/>
                                      </div>

                                <div class="form-group col-lg-6">
                                        <label> تاريخ الانتهاء  </label>
                                        <input name="expirydate" class="form-control" type="date"/>
                                      </div>


                                 <div class="form-group col-lg-6">
                                  <label> السماح بأكثر من سلفة  </label>
                                <select name="allow_more" class="form-control">
                                  <option> سماح</option>
								  <option>  عدم سماح</option>

                                </select>
                              </div>


                              <div class="form-group col-lg-6">
                                <label>حالة الطلب </label>
                                <input name="order_status" class="form-control" type="text"/>
                              </div>

                                 <div class="form-group col-lg-6">
                                <label> السماح للموظف باختيارالسياسة القرض او السلفة </label>
                                <select name="allow_choose" class="form-control">
                                  <option> سماح</option>
								  <option>  عدم سماح</option>

                                </select>
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
                                    <h5 class="modal-title">تعديل   </h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                  </div>
                           <form action="{{ url('predSort')}}" method="GET" novalidate="" >
                            <div class="modal-body row">
                              <div class="form-group col-lg-6">
                                <label>   الفرع</label>
                                <select name="branch_nameAR" class="form-control">
                                  <option>اسم الفرع</option>

                                </select>
                              </div>
							   <div class="form-group col-lg-6">
                                <label>   القسم</label>
                                <select name="dept_name" class="form-control">
                                  <option>اسم القسم     1</option>

                                </select>
                              </div>
                              <div class="form-group col-lg-6">
                                <label>   الموظف</label>
                                <select name="emply_name" class="form-control">
                                  <option>اسم الموظف     1</option>

                                </select>
                              </div>
                                    <div class="form-group col-lg-6">
                                    <label>الغرض من السلفية </label>
                                    <input name="pred_purpose" class="form-control" type="text"/>
                                  </div>
                                <div class="form-group col-lg-6">
                                    <label> نوعها  </label>
                                    <input name="type" class="form-control" type="text"/>
                                  </div>
                                      <div class="form-group col-lg-6">
                                    <label> المبلغ  </label>
                                    <input name="amount" class="form-control" type="text"/>
                                  </div>
                                       <div class="form-group col-lg-6">
                                <label>   العمله</label>
                                <select name="currency_name" class="form-control">
                                  <option>    دولار</option>

                                </select>
                              </div>
                                        <div class="form-group col-lg-6">
                                        <label> طريقة حساب القسط  </label>
                                        <input name="calculation"  class="form-control" type="text"/>
                                      </div>

                                <div class="form-group col-lg-6">
                                        <label>عدد الاشهر </label>
                                        <input name="months_number" class="form-control" type="text"/>
                                      </div>
                                <div class="form-group col-lg-6">
                                        <label> القسط </label>
                                        <input name="premium" class="form-control" type="text"/>
                                      </div>


                                <div class="form-group col-lg-6">
                                        <label> اقصى مبلغ للسلفة </label>
                                        <input name="pred_max" class="form-control" type="text"/>
                                      </div><div class="form-group col-lg-6">
                                        <label> تاريخ السلفة </label>
                                        <input name="pred_date"  class="form-control" type="text"/>
                                      </div>

                                <div class="form-group col-lg-6">
                                        <label> تاريخ بداية الاستقطاع  </label>
                                        <input name="startdate" class="form-control" type="text"/>
                                      </div>

                                <div class="form-group col-lg-6">
                                        <label> تاريخ الانتهاء  </label>
                                        <input name="expirydate" class="form-control" type="text"/>
                                      </div>

                                <div class="form-group col-lg-6">
                                        <label> السماح بأكثر من سلفة  </label>
                                        <input name="allow_more" class="form-control" type="text"/>
                                      </div>



                              <div class="form-group col-lg-4">
                                <label>حالة الطلب </label>
                                <input name="order_status" class="form-control" type="text"/>
                              </div>

                                 <div class="form-group col-lg-6">
                                <label> السماح للموظف باختيارالسياسة القرض او السلفة </label>
                                <select name="allow_choose" class="form-control">
                                  <option> سماح</option>
								  <option>  عدم سماح</option>

                                </select>
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
                    <!-- show modal-->
                    <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="modal3" aria-hidden="true">
                      <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title">عرض  </h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                  </div>
                          <div class="modal-body row">
                            <div class="form-group mb-3 col-lg-6">
                              <label>رقم السلفة
                                <p class="h5">35467</p>
                              </label>
                            </div>
                            <div class="form-group mb-3 col-lg-4">
                              <label>   اسم المؤظف</label>
                              <p class="h5">اسم الترخيص</p>
                            </div>


                          <div class="form-group mb-3 col-lg-4">
                              <label>غرض السلفة </label>
                              <p class="h5">غرض </p>
                            </div>
                             <div class="form-group mb-3 col-lg-4">
                              <label> نوعها</label>
                              <p class="h5">نوع </p>
                            </div>
                             <div class="form-group mb-3 col-lg-4">
                              <label>المبلغ</label>
                                  <p class="h5">10000</p>
                            </div>
                            <div class="form-group mb-3 col-lg-4">
                              <label>   العملة</label>
                              <p class="h5">دولار</p>
                            </div>
                              <div class="form-group mb-3 col-lg-4">
                              <label>طريقة حساب القسط</label>
                              <p class="h5">  شهري </p>
                            </div>

                                                                   <div class="form-group mb-3 col-lg-4">

                              <label>  عدد الاشهر</label>
                              <p class="h5">  شهري </p>
                            </div>
                                                               <div class="form-group mb-3 col-lg-4">

                              <label>  القسط</label>
                              <p class="h5">  شهري </p>
                            </div>
            <div class="form-group mb-3 col-lg-4">

                              <label>اقصى مبلغ للسلفة  </label>
                              <p class="h5">  شهري </p>
                            </div>
                  <div class="form-group mb-3 col-lg-4">

                              <label>تاريخ السلفة</label>
                              <p class="h5">  شهري </p>
                            </div>
                             <div class="form-group mb-3 col-lg-4">

                              <label>تاريخ بداية الاستقطاع</label>
                              <p class="h5">  شهري </p>
                            </div>
                           <div class="form-group mb-3 col-lg-4">

                              <label>تاريخ الانتهاء</label>
                              <p class="h5">  شهري </p>
                            </div>
                         <div class="form-group mb-3 col-lg-4">

                              <label>السماح بأكثر من سلفة  </label>
                              <p class="h5">  شهري </p>
                            </div>
                <div class="form-group mb-3 col-lg-4">

                                  <label>حالة الطلب</label>
                                  <p class="h5">  شهري </p>
                                </div>
<div class="form-group mb-3 col-lg-4">
                                  <label>السماح للموظف باختيارالسياسة القرض او السلفة</label>
                                  <p class="h5">  شهري </p>
                                </div>

                            <div class="col-12">
                              <hr/>
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
                            <th>رقم السلفية</th>
                            <th>اسم الموظف</th>
                            <th>غرض السلفة</th>
                            <th>نوعها</th>
                            <th>المبلغ</th>
                            <th>تاريخ بداية الاستقطاع</th>
                            <th>تاريخ الانتهاء</th>
                            <th>خيارات</th>
                          </tr>
                        </thead>
                        <tbody>
						@foreach($sys_pred as $data)
                          <tr>
                                      <td>{{$data->pred_id}}</td>
                                      <td>{{$data->pred_id}}</td>
                                      <td>{{$data->emply_name}}</td>
                                      <td>{{$data->pred_purpose}}</td>
                                      <td>{{$data->type}}</td>
                                      <td>{{$data->amount}}</td>
                                       <td>{{$data->startdate}}</td>
                                      <td>{{$data->expirydate}}</td>
                                    <td><a class="btn btn-info btn-xs" href="#" data-toggle="modal" data-target="#modal3"><i class="fa fa-eye mr-1"></i>عرض</a>
                                      <div class="dropdown d-inline-block">
                                        <button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"><span>المزيد</span><span class="caret"></span></button>
                                        <div class="dropdown-menu"><a class="dropdown-item text-info" href="#" data-toggle="modal" data-target="#modal3"><i class="fa fa-eye mr-1"></i><span>تفاصيل</span></a><a class="dropdown-item text-warning" href="#" data-toggle="modal" data-target="#modal2"><i class="fa fa-edit mr-1"></i><span>تعديل</span></a><a class="dropdown-item delete text-danger" href="#"><i class="fa fa-trash mr-1"></i><span>حذف</span></a></div>
                                      </div>
                                    </td>
                          </tr>

                         @endforeach
                        </tbody>
                      </table>
                      <div class="mt-3">
                        <ul class="pagination">

                          {{  $sys_pred->links() }}

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
                            <h4 class="align-self-center">الاقساط </h4>
                            <div class="align-self-center">
                              <button class="btn btn-primary departments" data-toggle="modal" data-target="#modal7"><i class="fa fa-plus"></i> اضافة</button>
                              <button class="btn btn-tool" type="button" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                            </div>
                          </div>
                  <!-- add modal-->
                  <div class="modal fade" id="modal7" tabindex="-1" role="dialog" aria-labelledby="modal7" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title">اضافة   </h5>
                                  <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                      <form action="{{ url('installmentsSort')}}" method="GET" novalidate="" >
                          <div class="modal-body row">
                                     <div class="form-group col-lg-6">
                               <label>    رقم السلفة</label>
                                <select name="pred_id" class="form-control">
                                  @foreach($sys_pred as $data)
                                 <option >{{$data->pred_id}}</option>
                                  @endforeach
                               </select>
                              </div>
                                <div class="form-group col-lg-6">
                                <label>   اسم الفرع</label>
                                <select name="branch_nameAR" class="form-control">
                                  @foreach($sys_branch as $data)
                                 <option >{{$data->branch_nameAR}}</option>
                                  @endforeach
                               </select>
                              </div>
							    <div class="form-group col-lg-6">
                                <label>   اسم القسم</label>
                                <select name="dept_name" class="form-control">
                                 @foreach($sys_dept as $data)
                                 <option >{{$data->dept_name}}</option>
                                  @endforeach
                               </select>
                              </div>
                               <div class="form-group col-lg-6">
                                <label>   اسم الموظف</label>
                                <select name="emply_name" class="form-control">
                                 @foreach($users as $data)
                                 <option >{{$data->emply_nameAR}}</option>
                                  @endforeach
                               </select>
                              </div>
                                 <div class="form-group col-lg-6">
                                    <label>رقم القسط</label>
                                       <input name="installments_number" class="form-control" type="number"/>
                                    </div>
                                            <div class="form-group col-lg-6">
                                              <label>مبلغ القسط</label>
                                              <input name="installments_amount" class="form-control" type="number"/>
                                            </div>
                                            <div class="form-group col-lg-12">
                                              <label> تاريخ الدفع</label>
                                              <input name="payment_date" class="form-control" type="date"/>
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
                                  <h5 class="modal-title">تعديل   </h5>
                                  <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                       <form>
                          <div class="modal-body">
                                    <div class="form-group">
                                      <label>رقم السلفية</label>
                                      <input class="form-control" type="text"/>
                                    </div>

                               <div class="form-group ">
                                <label>   اسم الموظف</label>
                                <select class="form-control">
                                  <option>اسم الموظف     1</option>

                                </select>
                              </div>
                                   <div class="form-group">
                                          <label>رقم القسط</label>
                                          <input class="form-control" type="number"/>
                                        </div>
                                            <div class="form-group">
                                              <label>مبلغ القسط</label>
                                              <input class="form-control" type="number"/>
                                            </div>
                                             <div class="form-group">
                                              <label> تاريخ الدفع</label>
                                              <input class="form-control" type="date"/>
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
                          <th>رقم السلفة</th>
                          <th>الموظف </th>
                          <th>رقم القسط </th>
                          <th>مبلغ القسط </th>
                          <th>تاريخ القسط </th>


                          <th>خيارات</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($sys_installments as $data)
                        <tr>
                          <td>{{$data->installments_id}}</td>
                          <td>{{$data->pred_id}}</td>
                          <td>{{$data->emply_name}}</td>
                          <td>{{$data->payment_date}}</td>
                          <td>{{$data->installments_amount}}</td>
						  <td>{{$data->payment_date}}</td>

                                  <td><a class="btn btn-warning btn-xs mx-1" href="#" data-toggle="modal" data-target="#modal8"><i class="fa fa-edit mr-1"></i>تعديل</a><a class="btn btn-danger btn-xs mx-1" href="#"><i class="fa fa-trash mr-1"></i>خذف</a>
                                  </td>
                        </tr>
						@endforeach
                      </tbody>
                    </table>
                    <div class="mt-3">
                      <ul class="pagination">
                        {{  $sys_installments->links() }}
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



