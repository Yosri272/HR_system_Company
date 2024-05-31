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

                                  <li class="breadcrumb-item"><span>الاجازات والعطل الرسمية  </span></li>
                              </ol>
                            </div>
                            <div class="col-sm-12">
                              <h1> الاجازات والعطل الرسمية </h1>
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
                          العطل الرسمية
                          </a></li>
                      <!-- ‫‪SYSTEM_B‬‬-->
                      <li class="nav-item"><a class="nav-link" id="tabs-2-tab" data-toggle="pill" href="#tabs-2" role="tab" aria-controls="tabs-2" aria-selected="false">
                          انواع الاجازات
                          </a></li>
                      <!-- ‫‪SYSTEM_SCREEN‬‬-->
                      <li class="nav-item"><a class="nav-link" id="tabs-4-tab" data-toggle="pill" href="#tabs-4" role="tab" aria-controls="tabs-4" aria-selected="false">
                             رصيد الاجازات
                          </a></li>   <li class="nav-item"><a class="nav-link" id="tabs-3-tab" data-toggle="pill" href="#tabs-3" role="tab" aria-controls="tabs-3" aria-selected="false">

                        تقديم الاجازات
                        </a></li> <li class="nav-item"><a class="nav-link" id="tabs-5-tab" data-toggle="pill" href="#tabs-5" role="tab" aria-controls="tabs-5" aria-selected="false">
      بيانات السنوات                    </a></li>
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
                                          <h4 class="align-self-center"> العطلات الرسمية</h4>
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
                                                <h5 class="modal-title">اضافة    </h5>
                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                              </div>
                                      <form action="{{ url('holidaySort')}}" method="GET" novalidate="" >
                                        <div class="modal-body">
                                          <div class="form-group">
                                            <label>اسم  العطله</label>
                                            <input name="holiday_name" class="form-control" type="text"/>
                                          </div>
                                         <div class="form-group">
                                            <label>  عدد الايام</label>
                                            <input name="numberday" class="form-control" type="number"/>
                                          </div>

                                                <div class="form-group">
                                            <label>ناريخ البدء</label>
                                            <input name="startingdate" class="form-control" type="date"/>
                                          </div>

                                               <div class="form-group">
                                            <label>تاريخ الانتهاء </label>
                                            <input name="expirydate" class="form-control" type="date"/>
                                          </div>

                                           <div class="form-group">
                                            <label>السنة م  </label>
                                            <input name="calendaryear" class="form-control" type="text"/>
                                          </div>
                                    <div class="form-group">
                                            <label>السنة ه  </label>
                                            <input name="airyear" class="form-control" type="text"/>
                                          </div>
                                       <div class="form-group">
                                            <label> احتياطي  </label>
                                            <input name="spare" class="form-control" type="text"/>
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
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title">تعديل   </h5>
                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                              </div>
                                       <form>
                                           <div class="modal-body">
                                          <div class="form-group">
                                            <label>اسم  العطله</label>
                                            <input class="form-control" type="text"/>
                                          </div>
                                         <div class="form-group">
                                            <label>  عدد الايام</label>
                                            <input class="form-control" type="text"/>
                                          </div>

                                                <div class="form-group">
                                            <label>ناريخ البدء</label>
                                            <input class="form-control" type="date"/>
                                          </div>

                                               <div class="form-group">
                                            <label>تاريخ الانتهاء </label>
                                            <input class="form-control" type="date"/>
                                          </div>

                                           <div class="form-group">
                                            <label>السنة م  </label>
                                            <input class="form-control" type="text"/>
                                          </div>
                                    <div class="form-group">
                                            <label>السنة ه  </label>
                                            <input class="form-control" type="text"/>
                                          </div>
                                       <div class="form-group">
                                            <label> احتياطي  </label>
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
                                <!-- show modal-->

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
                                        <th>الاسم  </th>
                                       <th>عدد الايام  </th>
                                       <th> تاريخ البدء  </th>
                                         <th> تاريخ الانتهاء  </th>
                                       <th> السنه م   </th>
                                       <th> السنه هـ   </th>

                                        <th>خيارات</th>
                                      </tr>
                                    </thead>
                                    <tbody>

                                         <tr>

                                         <td></td>
                                         <td></td>

                                         <td><a class="btn btn-warning btn-xs mx-1" href="#" data-toggle="modal" data-target="#modal2"><i class="fa fa-edit mr-1"></i>تعديل</a><a class="btn btn-danger btn-xs mx-1" href="#"><i class="fa fa-trash mr-1"></i>خذف</a>
                                              </td>


                                      </tr>

                                   </tbody>
                            </table>
                            <div class="mt-3">
                               <ul class="pagination">



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
                                        <h4 class="align-self-center">انواع الاجازات </h4>
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
                                              <h5 class="modal-title">اضافة  </h5>
                                              <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            </div>
                                  <form action="{{ url('holidaytypeSort')}}" method="GET" novalidate="" >
                                        <div class="modal-body">
                                          <div class="form-group">
                                            <label>الاسم  </label>
                                            <input name="holidaytype_name" class="form-control" type="text"/>
                                          </div>  <div class="form-group">
                                            <label>عدد الايام  </label>
                                            <input name="numberday" class="form-control" type="number"/>
                                          </div>
                                         <div class="form-group">
                                  <label>الدفع  </label>
                                  <select name="paying" class="form-control">
                                    <option>     اختر </option>

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
                              <div class="modal fade" id="modal5" tabindex="-1" role="dialog" aria-labelledby="modal5" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                            <div class="modal-header">
                                              <h5 class="modal-title">تعديل  التخصص</h5>
                                              <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            </div>
                                    <form>
                                 <div class="modal-body">
                                          <div class="form-group">
                                            <label>الاسم  </label>
                                            <input class="form-control" type="text"/>
                                          </div>  <div class="form-group">
                                            <label>عدد الايام  </label>
                                            <input class="form-control" type="text"/>
                                          </div>
                                         <div class="form-group">
                                  <label>الدفع  </label>
                                  <select class="form-control">
                                    <option>     اختر </option>

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
                                      <th>اسم الاجازة </th>
                                      <th>عدد الايام </th>
                                      <th>خيارات</th>
                                    </tr>
                                  </thead>
                                  <tbody>

                          <tr>

                            <td></td>
                                            <td><a class="btn btn-warning btn-xs mx-1" href="#" data-toggle="modal" data-target="#modal5"><i class="fa fa-edit mr-1"></i>تعديل</a><a class="btn btn-danger btn-xs mx-1" href="#"><i class="fa fa-trash mr-1"></i>خذف</a>
                                              </td>

                                    </tr>

                        </tbody>
                      </table>
                      <div class="mt-3">
                        <ul class="pagination">



                        </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </section>
                      </div>
                      <!-- ‫‪SYSTEM_SCREEN-->
                         <!-- ‫‪SYSTEM‬‬-->
                      <div class="tab-pane fade  " id="tabs-3" role="tabpanel" aria-labelledby="tabs-3-tab">
                        <section class="content">
                          <div class="row">
                            <div class="col-12">
                              <div class="card shadow-none">
                                        <div class="d-lg-flex bg-gray-light justify-content-lg-between px-4 py-3">
                                          <h4 class="align-self-center">تقديم الاجازات </h4>
                                          <div class="align-self-center">
                                            <button class="btn btn-primary departments" data-toggle="modal" data-target="#modal70"><i class="fa fa-plus"></i> اضافة</button>
                                            <button class="btn btn-tool" type="button" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                                          </div>
                                        </div>
                                <!-- add modal-->
                             <!-- add modal-->
                      <div class="modal fade" id="modal70" tabindex="-1" role="dialog" aria-labelledby="modal70" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title">اضافة     </h5>
                                      <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    </div>
                       <form action="{{ url('offervactionSort')}}" method="GET" novalidate="" >
                              <div class="modal-body row ">
                                     <div class="col-md-3">

                                <div class="form-group ">
                                  <label>  السنه</label>
                                  <input name="year" class="form-control" type="text"/>
                                </div>
								</div>
								 <div class="col-md-3">
                                          <div class="form-group">
                                  <label>اسم الفرع  </label>
                                  <select name="BRANCH_NAMEAR" class="form-control">
                                    <option>     هزو محمد </option>

                                  </select>


                                           </div>
                                  </div>
								   <div class="col-md-3">
                                          <div class="form-group">
                                  <label>اسم القسم  </label>
                                  <select name="DEPT_NAME" class="form-control">
                                    <option>     هزو محمد </option>

                                  </select>


                                           </div>
                                  </div>
                                  <div class="col-md-3">
                                          <div class="form-group">
                                  <label>اسم الموظف  </label>
                                  <select name="emply_id" class="form-control">
                                    <option>     هزو محمد </option>

                                  </select>


                                           </div>
                                  </div>

                                    <div class="col-md-3">

                                <div class="form-group ">
                                  <label>  نوع الاجازة</label>
                                  <input name="holidaytype_name" class="form-control" type="text"/>
                                </div>       </div>


                                    <div class="col-md-3">

                                <div class="form-group ">
                                  <label>  تبداء   </label>
                                  <input name="start_form" class="form-control" type="date"/>
                                </div>       </div>

                                    <div class="col-md-3">

                                <div class="form-group ">
                                  <label>  تنتهي   </label>
                                  <input name="end_to" class="form-control" type="date"/>
                                </div>       </div>
                                    <div class="col-md-3">

                                <div class="form-group ">
                                  <label>  عدد الايام المدفوعه   </label>
                                  <input  name="numberpaidday" class="form-control" type="number"/>
                                </div>       </div>

                                    <div class="col-md-6">

                                <div class="form-group ">
                                  <label>  عدد الايام المجانيه   </label>
                                  <input name="numberfreeday" class="form-control" type="number"/>
                                </div>       </div>

                                    <div class="col-md-6">

                                <div class="form-group ">
                                  <label> عدد ايام تاخر بعد انتهاء الاجازة  </label>
                                  <input name="numberdaylate" class="form-control" type="number"/>
                                </div>       </div>


                                 <div class="col-md-6">

                                <div class="form-group ">
                                  <label>عدد ايام الاجازة</label>
                                  <input  name="numbervactionday"class="form-control" type="number"/>
                                </div>       </div>
                                          <div class="col-md-6">

                                <div class="form-group ">
                                  <label>عدد الايام رجوع الموظف قبل انتهاء  الاجازة المحجوزة </label>
                                  <input  name="backdayemply" class="form-control" type="number"/>
                                </div>       </div>

                                   <div class="col-md-3">

                                <div class="form-group ">
                                  <label>راتب الاجازة </label>
                                  <input name="vactionsalary" class="form-control" type="text"/>
                                </div>       </div>

                                  <div class="col-md-3">

                                <div class="form-group ">
                                  <label>تحتاج الى تذاكر  </label>
                                  <input  name="ticketsneed" class="form-control" type="text"/>
                                </div>       </div>

                                     <div class="col-md-3">

                                <div class="form-group ">
                                  <label> طلب قيمة تذاكر  </label>
                                  <input name="ticketprice" class="form-control" type="text"/>
                                </div>       </div>




                                     <div class="col-md-3">

                                <div class="form-group ">
                                  <label>  رقم التواصل  </label>
                                  <input name="contact_number" class="form-control" type="text"/>
                                </div>       </div>


                                     <div class="col-md-3">

                                <div class="form-group ">
                                  <label>  رقم الموظف البديل   </label>
                                  <input name="number_alternateemply" class="form-control" type="number"/>
                                </div>       </div>




                                <div class="col-md-3">
                                          <div class="form-group">
                                  <label> اسم الموظف البديل</label>
                                  <select name="name_alternateemply"  class="form-control">
                                    <option>     عزو محمد </option>

                                  </select>


                                           </div>
                                  </div>

                                <div class="col-md-3">
                                          <div class="form-group">
                                  <label> وظيفه الموظف البديل</label>
                                  <select name="jop_alternateemply" class="form-control">
                                    <option>     عزو محمد </option>

                                  </select>


                                           </div>
                                  </div>

                                     <div class="col-md-3">

                                <div class="form-group ">
                                  <label> رقم الطلب </label>
                                  <input name="ordernumber" class="form-control" type="number"/>
                                </div>       </div>

                                     <div class="col-md-3">




                              </div>

                                      <div class="modal-footer justify-content-start">
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">اغلاق</button>
                                        <button type="submit" class="btn btn-primary add" type="button">حفظ</button>
                                      </div>
                            </form>



                                    </div>
                                  </div>
                                </div>


                                 <div class="modal fade" id="modal71" tabindex="-1" role="dialog" aria-labelledby="modal71" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title">تعديل     </h5>
                                      <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    </div>
                       <form>
                              <div class="modal-body row ">
                                     <div class="col-md-3">

                                <div class="form-group ">
                                  <label>  السنه</label>
                                  <input class="form-control" type="text"/>
                                </div>       </div>
                                  <div class="col-md-3">
                                          <div class="form-group">
                                  <label>اسم الموظف  </label>
                                  <select class="form-control">
                                    <option>     هزو محمد </option>

                                  </select>


                                           </div>
                                  </div>
                                    <div class="col-md-3">

                                <div class="form-group ">
                                  <label>  رقم الاجازة</label>
                                  <input class="form-control" type="text"/>
                                </div>       </div>
                                    <div class="col-md-3">

                                <div class="form-group ">
                                  <label>  نوع الاجازة</label>
                                  <input class="form-control" type="text"/>
                                </div>       </div>


                                    <div class="col-md-3">

                                <div class="form-group ">
                                  <label>  تبداء   </label>
                                  <input class="form-control" type="date"/>
                                </div>       </div>

                                    <div class="col-md-3">

                                <div class="form-group ">
                                  <label>  تنتهي   </label>
                                  <input class="form-control" type="date"/>
                                </div>       </div>
                                    <div class="col-md-3">

                                <div class="form-group ">
                                  <label>  عدد الايام المدفوعه   </label>
                                  <input class="form-control" type="date"/>
                                </div>       </div>

                                    <div class="col-md-6">

                                <div class="form-group ">
                                  <label>  عدد الايام المجانيه   </label>
                                  <input class="form-control" type="date"/>
                                </div>       </div>

                                    <div class="col-md-6">

                                <div class="form-group ">
                                  <label> عدد ايام تاخر بعد انتهاء الاجازة  </label>
                                  <input class="form-control" type="date"/>
                                </div>       </div>


                                          <div class="col-md-6">

                                <div class="form-group ">
                                  <label>الرصيد الافتتاحي يوم  </label>
                                  <input class="form-control" type="text"/>
                                </div>       </div>
                                          <div class="col-md-6">

                                <div class="form-group ">
                                  <label>عدد الايام رجوع الموظف قبل انتهاء  الاجازة المحجوزة </label>
                                  <input class="form-control" type="text"/>
                                </div>       </div>

                                   <div class="col-md-3">

                                <div class="form-group ">
                                  <label>راتب الاجازة </label>
                                  <input class="form-control" type="text"/>
                                </div>       </div>

                                  <div class="col-md-3">

                                <div class="form-group ">
                                  <label>تحتاج الى تذاكر  </label>
                                  <input class="form-control" type="text"/>
                                </div>       </div>

                                     <div class="col-md-3">

                                <div class="form-group ">
                                  <label> طلب قيمة تذاكر  </label>
                                  <input class="form-control" type="text"/>
                                </div>       </div>

                                     <div class="col-md-3">

                                <div class="form-group ">
                                  <label>  رقم التواصل  </label>
                                  <input class="form-control" type="text"/>
                                </div>       </div>


                                     <div class="col-md-3">

                                <div class="form-group ">
                                  <label>  رقم التواصل  </label>
                                  <input class="form-control" type="text"/>
                                </div>       </div>


                                     <div class="col-md-3">

                                <div class="form-group ">
                                  <label>  رقم الموظف البديل   </label>
                                  <input class="form-control" type="text"/>
                                </div>       </div>




                                <div class="col-md-3">
                                          <div class="form-group">
                                  <label> اسم الموظف البديل</label>
                                  <select class="form-control">
                                    <option>     عزو محمد </option>

                                  </select>


                                           </div>
                                  </div>

                                <div class="col-md-3">
                                          <div class="form-group">
                                  <label> وظيفه الموظف البديل</label>
                                  <select class="form-control">
                                    <option>     عزو محمد </option>

                                  </select>


                                           </div>
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
                                <div class="modal fade" id="modal72" tabindex="-1" role="dialog" aria-labelledby="modal72" aria-hidden="true">
                                  <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title">عرض تفاصيل </h5>
                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                              </div>
                                      <div class="modal-body">
                                        <div>
                                          <h4>السنه 2020  </h4>
                                        </div>
                                        <div class="mb-4">
                                        </div>
                                        <div class="row">

                                          <div class="col-md-4">
                                              <h5>الموظف : هنا عرض  </h5>
                                          </div>   <div class="col-md-4">
                                              <h5>رقم الاجازة : هنا عرض  </h5>
                                          </div>   <div class="col-md-4">
                                              <h5>نوع الاجازة : هنا عرض  </h5>
                                          </div>   <div class="col-md-4">
                                              <h5>تبدء من تاريخ : هنا عرض  </h5>
                                          </div>   <div class="col-md-4">
                                              <h5>تنتهي في تاريخ : هنا عرض  </h5>
                                          </div>   <div class="col-md-4">
                                              <h5>عدد ايام الاجازة : هنا عرض  </h5>
                                          </div>   <div class="col-md-4">
                                              <h5>عدد الايام المدفوعة : هنا عرض  </h5>
                                          </div>   <div class="col-md-4">
                                              <h5>عدد الايام المجانية : هنا عرض  </h5>
                                          </div>   <div class="col-md-12">
                                              <h5>عدد ايام تاخر بعد انتهاء الاجازة : هنا عرض  </h5>
                                          </div>   <div class="col-md-12">
                                              <h5>عدد الايام رجوع الموظف قبل انتهاء ايام الاجازة المحجوزة : هنا عرض  </h5>
                                          </div>   <div class="col-md-4">
                                              <h5>راتب الاجازة : هنا عرض  </h5>
                                          </div>   <div class="col-md-4">
                                              <h5>تحتاج الى تذاكر : هنا عرض  </h5>
                                          </div>   <div class="col-md-4">
                                              <h5>طلب قيمة التذاكر : هنا عرض  </h5>
                                          </div>   <div class="col-md-4">
                                              <h5>رقم التواصل : هنا عرض  </h5>
                                          </div>   <div class="col-md-4">
                                              <h5>رقم الموظف البديل : هنا عرض  </h5>
                                          </div>   <div class="col-md-4">
                                              <h5>اسم الموظف البديل : هنا عرض  </h5>
                                          </div>   <div class="col-md-6">
                                              <h5>وظيفة الموظف البديل : هنا عرض  </h5>
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
                                        <th>السنه</th>
                                        <th>الموظف</th>
                                        <th>نوع الاجازة</th>
                                        <th>تبداء الاجازة</th>
                                        <th>تنتهي الاجازة</th>
                                        <th>خيارات</th>
                                      </tr>
                                    </thead>
                                   <tbody>

                                     <tr>

                                      <td></td>
                                      <td></td>
                                                 <td><a class="btn btn-info btn-xs" href="#" data-toggle="modal" data-target="#modal72"><i class="fa fa-eye mr-1"></i>عرض</a>
                                            <div class="dropdown d-inline-block">
                                              <button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"><span>المزيد</span><span class="caret"></span></button>
                                              <div class="dropdown-menu"><a class="dropdown-item text-info" href="#" data-toggle="modal" data-target="#modal72"><i class="fa fa-eye mr-1"></i><span>تفاصيل</span></a><a class="dropdown-item text-warning" href="#" data-toggle="modal" data-target="#modal71"><i class="fa fa-edit mr-1"></i><span>تعديل</span></a><a class="dropdown-item delete text-danger" href="#"><i class="fa fa-trash mr-1"></i><span>حذف</span></a></div>
                                            </div>
                                          </td>
                                      </tr>

                                   </tbody>
                                   </table>
                                 <div class="mt-3">
                                     <ul class="pagination">



                                   </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </section>
                      </div>
                      <!-- ‫‪SYSTEM_B‬‬-->

                            <div class="tab-pane fade" id="tabs-4" role="tabpanel" aria-labelledby="tabs-4-tab">
                        <section class="content">
                          <div class="row">
                           <div class="col-12">
                    <div class="card border">
                      <div class="card-header p-2">
                                <div class="d-lg-flex bg-gray-light justify-content-lg-between px-4 py-3">
                                  <h4 class="align-self-center">قائمة   رصيد الاجازات</h4>
                                  <div class="align-self-center">
                                    <button class="btn btn-primary departments" data-toggle="modal" data-target="#modal60"><i class="fa fa-plus"></i> اضافة</button>
                                    <button class="btn btn-tool" type="button" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                                  </div>
                                </div>
                      </div>
                      <!-- add modal-->
                      <div class="modal fade" id="modal60" tabindex="-1" role="dialog" aria-labelledby="modal60" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title">اضافة     </h5>
                                      <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    </div>
                            <form action="{{ url('vacationbalanceSort')}}" method="GET" novalidate="" >

							  <div class="modal-body row ">
							   <div class="col-md-6">
                                          <div class="form-group">
                                  <label>اسم الفرع  </label>
                                  <select name="branch_nameAR" id="branch_nameAR" value="{{ old('branch_nameAR') }}">
                                      <option value="">*اختار الفرع</option>
                                        @foreach($users as $data2)
                                      <option value="{{ $data2->branch_nameAR }}">{{ ucfirst($data2->branch_nameAR) }}</option>
                                       @endforeach
                                    </select>
                                </div>

                                           </div>


                                  </div>
								   <div class="col-md-6">
                                   <div class="form-group">
                                       <label class="" >المحلية</label>
                                  <select name="dept_name" id="dept_name" value="dept_name">
                                         <option value="">*اختار المحلية</option>
                                </select>
                                       </div>

                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="" >المحلية</label>
                                   <select name="emply_nameAR" id="emply_nameAR" value="emply_nameAR">
                                          <option value="">*اختار vf</option>
                                 </select>
                                        </div>

                                   </div>

                                          <div class="col-md-6">

                                <div class="form-group ">
                                  <label>الرصيد الافتتاحي يوم  </label>
                                  <input name="openingtoday" class="form-control" type="text"/>
                                </div>       </div>
                                     <div class="col-md-6">

                                <div class="form-group ">
                                  <label>السنة </label>
                                  <input name="year" class="form-control" type="text"/>
                                </div>       </div>

                                     <div class="col-md-6">

                                <div class="form-group ">
                                  <label>الرصيد الافتتاحي لساعه الاسئذان  </label>
                                  <input name="openinghour" class="form-control" type="text"/>
                                </div>
								</div>
                                 <div class="col-md-6">

                                <div class="form-group ">
                                  <label>الرصيد المستهلك من الايام  </label>
                                  <input name="balanceday"class="form-control" type="text"/>
                                </div>
								</div>
                                <div class="col-md-6">

                                <div class="form-group ">
                                  <label>الرصيد المستهلك للاستئذان بالساعة  </label>
                                  <input name="balancehour"class="form-control" type="text"/>
                                </div>
								</div>
                                <div class="col-md-6">
                                          <div class="form-group">
                                  <label>ننوع الاجازة</label>
                                  <select name="holidaytype_name" class="form-control">
                                    <option>     هزو محمد </option>

                                  </select>


                                           </div>
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
                      <div class="modal fade" id="modal61" tabindex="-1" role="dialog" aria-labelledby="modal61" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title">تعديل     </h5>
                                      <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    </div>
                            <form>
                              <div class="modal-body row ">
                                  <div class="col-md-6">
                                          <div class="form-group">
                                  <label>اسم الموظف  </label>
                                  <select class="form-control">
                                    <option>     هزو محمد </option>

                                  </select>


                                           </div>
                                  </div>
                                          <div class="col-md-6">

                                <div class="form-group ">
                                  <label>الرصيد الافتتاحي يوم  </label>
                                  <input class="form-control" type="text"/>
                                </div>       </div>
                                     <div class="col-md-6">

                                <div class="form-group ">
                                  <label>السنة </label>
                                  <input class="form-control" type="text"/>
                                </div>       </div>

                                     <div class="col-md-6">

                                <div class="form-group ">
                                  <label>الرصيد الافتتاحي لساعه الاسئذان  </label>
                                  <input class="form-control" type="text"/>
                                </div>       </div>

                                <div class="col-md-6">

                                <div class="form-group ">
                                  <label>الرصيد   المستهلك من الايام  </label>
                                  <input class="form-control" type="text"/>
                                </div>       </div>
                                <div class="col-md-6">
                                          <div class="form-group">
                                  <label>ننوع الاجازة</label>
                                  <select class="form-control">
                                    <option>     هزو محمد </option>

                                  </select>


                                           </div>
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
                       <!-- show modal-->
                      <div class="modal fade" id="modal62" tabindex="-1" role="dialog" aria-labelledby="modal3" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title">عرض تفاصيل البنك</h5>
                                      <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    </div>
                            <div class="modal-body">
                              <div class="row">
                                <div class="col-12 mb-4">
                                  <h4 class="mt-0">المعز محمد ابراهيم احمد </h4>

                                </div>
                                <div class="col-md-6 mb-3">
                                  <div class="form-group">
                                    <label>السنه</label>
                                    <p class="h5">2020</p>
                                  </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                  <div class="form-group">
                                    <label>الرصيد الافتتاحي يوم</label>
                                    <p class="h5">654</p>
                                  </div>
                                </div>  <div class="col-md-6 mb-3">
                                  <div class="form-group">
                                    <label>الرصيد الافتتاحي لساعة الاستئذان  </label>
                                    <p class="h5">654</p>
                                  </div>
                                </div> <div class="col-md-6 mb-3">
                                  <div class="form-group">
                                    <label>الرصيد المستهلك من الايام </label>
                                    <p class="h5">654</p>
                                  </div>
                                </div><div class="col-md-8 mb-3">
                                  <div class="form-group">
                                    <label>الرصيد المستهلك للاستئذان بالساعة</label>
                                    <p class="h5">654</p>
                                  </div>
                                </div><div class="col-md-4 mb-3">
                                  <div class="form-group">
                                    <label>   نوع الاجازة</label>
                                    <p class="h5">654</p>
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

                              <th>  اسم الموظف </th>
                                <th>  السنه  </th>
                                <th> الرصيد المستهلك من الايام </th>
                                <th> الرصيد المستهلك للاستئذان بالساعة</th>
                                <th> نوع الاجازة</th>
                              <th>خيارات</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tbody>

                              <tr>

                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                                                <td><a class="btn btn-info btn-xs" href="#" data-toggle="modal" data-target="#modal72"><i class="fa fa-eye mr-1"></i>عرض</a>
                                                  <div class="dropdown d-inline-block">
                                                    <button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"><span>المزيد</span><span class="caret"></span></button>
                                                    <div class="dropdown-menu"><a class="dropdown-item text-info" href="#" data-toggle="modal" data-target="#modal72"><i class="fa fa-eye mr-1"></i><span>تفاصيل</span></a><a class="dropdown-item text-warning" href="#" data-toggle="modal" data-target="#modal71"><i class="fa fa-edit mr-1"></i><span>تعديل</span></a><a class="dropdown-item delete text-danger" href="#"><i class="fa fa-trash mr-1"></i><span>حذف</span></a></div>
                                                  </div>
                                                </td>
                                     </tr>

                               </tbody>
                            </table>
                                       <div class="mt-3">
                                          <ul class="pagination">



                                        </ul>
                                     </div>
                                  </div>
                                </div>
                              </div>
                          </div>
                        </section>
                      </div>

                              <div class="tab-pane fade" id="tabs-5" role="tabpanel" aria-labelledby="tabs-5-tab">
                        <section class="content">
                          <div class="row">
                           <div class="col-12">
                    <div class="card border">
                      <div class="card-header p-2">
                                <div class="d-lg-flex bg-gray-light justify-content-lg-between px-4 py-3">
                                  <h4 class="align-self-center">قائمة   بيانات السنوات</h4>
                                  <div class="align-self-center">
                                    <button class="btn btn-primary departments" data-toggle="modal" data-target="#modal77"><i class="fa fa-plus"></i> اضافة</button>
                                    <button class="btn btn-tool" type="button" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                                  </div>
                                </div>
                      </div>
                      <!-- add modal-->
                      <div class="modal fade" id="modal77" tabindex="-1" role="dialog" aria-labelledby="modal77" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title">اضافة    سنه  </h5>
                                      <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    </div>
                            <form action="{{ url('yearSort')}}" method="GET" novalidate="" >
                              <div class="modal-body ">
                                <div class="form-group ">
                                  <label>السنه الميلادية    </label>
                                  <input name="years_Gregorian" class="form-control" type="number"/>
                                </div>
                              <div class="form-group ">
                                  <label>السنه الهجرية    </label>
                                  <input name="years_hijri" class="form-control" type="number"/>
                                </div>
                                <div class="form-group ">
                                  <label> حاله السنه    </label>
                                  <input name="years_status" class="form-control" type="text"/>
                                </div>
                             <div class="form-group ">
                                  <label> تبداء من    </label>
                                  <input name="start_form" class="form-control" type="date"/>
                                </div>
                                   <div class="form-group ">
                                  <label> تنتهي من     </label>
                                  <input name="end_to" class="form-control" type="date"/>
                                </div>
                                   <div class="form-group ">
                                  <label> عدد ايام عمل ميلادي     </label>
                                  <input name="working_daysG" class="form-control" type="number"/>
                                </div>
                                     <div class="form-group ">
                                  <label> عدد ايام عمل هجري     </label>
                                  <input name="working_daysH" class="form-control" type="number"/>
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
                      <div class="modal fade" id="modal78" tabindex="-1" role="dialog" aria-labelledby="modal78" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title">تعديل      </h5>
                                      <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    </div>
                           <form>
                              <div class="modal-body ">
                                <div class="form-group ">
                                  <label>السنه الميلادية    </label>
                                  <input class="form-control" type="number"/>
                                </div>
                              <div class="form-group ">
                                  <label>السنه الهجرية    </label>
                                  <input class="form-control" type="number"/>
                                </div>
                                <div class="form-group ">
                                  <label> حاله السنه    </label>
                                  <input class="form-control" type="text"/>
                                </div>
                             <div class="form-group ">
                                  <label> تبداء من    </label>
                                  <input class="form-control" type="date"/>
                                </div>
                                   <div class="form-group ">
                                  <label> تنتهي من     </label>
                                  <input class="form-control" type="date"/>
                                </div>
                                   <div class="form-group ">
                                  <label> عدد ايام عمل ميلادي     </label>
                                  <input class="form-control" type="text"/>
                                </div>
                                     <div class="form-group ">
                                  <label> عدد ايام عمل هجري     </label>
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
                              <th>  السنه الميلادية  </th>
                              <th>  السنه الهجرية  </th>
                              <th>   حاله السنه  </th>
                              <th>    تبداء من  </th>
                              <th>   تنتهي من   </th>
                              <th>    عدد ايام عمل ميلادي   </th>
                              <th>    عدد ايام عمل هجري   </th>
                              <th>خيارات</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>



							 <td></td>
                                  <td><a class="btn btn-warning btn-xs mx-1" href="#" data-toggle="modal" data-target="#modal78"><i class="fa fa-edit mr-1"></i>تعديل</a><a class="btn btn-danger btn-xs mx-1" href="#"><i class="fa fa-trash mr-1"></i>خذف</a>
                                              </td>

                                    </tr>








                          </tbody>
                        </table>
                        <div class="mt-3">
                          <ul class="pagination">



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

<!-- /.script -->

<script src="javascript/jquery.js"></script>
<script>
            $(document).ready(function () {
            $('#branch_nameAR').on('change', function () {
            let branch_nameAR = $(this).val();
            $('#dept_name').empty();
            $('#dept_name').append(`<option value="0" disabled selected>Processing...</option>`);
            $.ajax({
            type: 'GET',
            url: 'GetSubCatAgainstMainCatEdit/' + branch_nameAR,
            success: function (response) {
            var response = JSON.parse(response);
            console.log(response);
            $('#dept_name').empty();
            $('#dept_name').append(`<option value="0" disabled selected>اختار المحلية*</option>`);

            response.forEach(element => {
                $('#dept_name').append(`<option value="${element['branch_nameAR']}">${element['dept_name']}</option>`);
                });

            }
        });
    });
});
</script>
<script>
            $(document).ready(function () {
            $('#dept_name').on('change', function () {
            let dept_name = $(this).val();
            $('#emply_nameAR').empty();
            $('#emply_nameAR').append(`<option value="0" disabled selected>Processing...</option>`);
            $.ajax({
            type: 'GET',
            url: 'GetSubCatAgainstMainCatEdit1/' + dept_name,
            success: function (response) {
            var response = JSON.parse(response);
            console.log(response);
            $('#emply_nameAR').empty();
            $('#emply_nameAR').append(`<option value="0" disabled selected>اختار hg*</option>`);
                response.forEach(element => {
                $('#emply_nameAR').append(`<option value="${element['dept_name']}">${element['emply_nameAR']}</option>`);
                });
            }
        });
    });
});
</script>



