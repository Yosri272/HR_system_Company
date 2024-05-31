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
                    <li class="breadcrumb-item"><span>العقود  </span></li>
                  </ol>
                </div>
                <div class="col-sm-12">
              <h1>العقود</h1>
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
              قائمة العقود
              </a></li>
          <!-- license type-->
              <li class="nav-item"><a class="nav-link" id="tabs-2-tab" data-toggle="pill" href="#tabs-2" role="tab" aria-controls="tabs-2" aria-selected="false">
                                  انواع العقود

                  </a></li>
            <li class="nav-item"><a class="nav-link" id="tabs-4-tab" data-toggle="pill" href="#tabs-3" role="tab" aria-controls="tabs-3" aria-selected="false">
                                بنود العقود
                  </a></li>
               <li class="nav-item"><a class="nav-link" id="tabs-4-tab" data-toggle="pill" href="#tabs-4" role="tab" aria-controls="tabs-4" aria-selected="false">
                              بنود انهاء الخدمة
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
                              <h4 class="align-self-center">قائمة العقود</h4>
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
                                    <h5 class="modal-title">اضافة عقد  </h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                  </div>
                          <form>
                            <div class="modal-body row">
                              <div class="form-group col-lg-3">
                                <label>رقم العقد</label>
                                <input class="form-control" type="text"/>
                              </div>
                               <div class="form-group col-lg-3">
                                <label>   اسم الموظف</label>
                                <select class="form-control">
                                  <option>الاسم     1</option>
                                  <option>الاسم     2</option>

                                </select>
                              </div>
                                  <div class="form-group col-lg-3">
                                <label>    نوع العقد</label>
                                <select class="form-control">
                                  <option>نوع     1</option>
                                  <option>نوع     2</option>

                                </select>
                              </div>
                            <div class="form-group col-lg-3">
                                <label>تاريخ العقد</label>
                                <input class="form-control" type="date"/>
                              </div>
                           <div class="form-group col-lg-3">
                                <label>تاريخ بداية العقد </label>
                                <input class="form-control" type="date"/>
                              </div>
                             <div class="form-group col-lg-3">
                                <label>تاريخ نهاية العقد </label>
                                <input class="form-control" type="date"/>
                              </div>
                              <div class="form-group col-lg-3">
                                <label>مدة العقد بالايام </label>
                                <input class="form-control" type="text"/>
                              </div>
                              <div class="form-group col-lg-3">
                                <label>تاريخ التجديد</label>
                                <input class="form-control" type="date"/>
                              </div>
                                  <div class="form-group col-lg-3">
                                <label>حالة العقد </label>
                                <input class="form-control" type="text"/>
                              </div>
                          <div class="form-group col-lg-3">
                                <label>العمولة </label>
                                <input class="form-control" type="text"/>
                              </div>


                     <div class="form-group col-lg-3">
                                <label>احتساب العمولة نهاية العقد </label>
                                <input class="form-control" type="text"/>
                              </div>
                             <div class="form-group col-lg-3">
                                <label>نسبة العمولة </label>
                                <input class="form-control" type="text"/>
                              </div>
                              <div class="form-group col-lg-3">
                                <label>الراتب الاساسي </label>
                                <input class="form-control" type="text"/>
                              </div>
                             <div class="form-group col-lg-3">
                                <label>له تذاكر </label>
                                <input class="form-control" type="text"/>
                              </div>
                            <div class="form-group col-lg-3">
                                <label>له علاوات </label>
                                <input class="form-control" type="text"/>
                              </div>
                                 <div class="form-group col-lg-3">
                                <label>له بدل سكن </label>
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
                    <!-- edit modal-->
                    <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="modal2" aria-hidden="true">
                      <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title">تعديل العقد  </h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                  </div>
                            <form>
                            <div class="modal-body row">
                              <div class="form-group col-lg-3">
                                <label>رقم العقد</label>
                                <input class="form-control" type="text"/>
                              </div>
                               <div class="form-group col-lg-3">
                                <label>   اسم الموظف</label>
                                <select class="form-control">
                                  <option>الاسم     1</option>
                                  <option>الاسم     2</option>

                                </select>
                              </div>
                                  <div class="form-group col-lg-3">
                                <label>    نوع العقد</label>
                                <select class="form-control">
                                  <option>نوع     1</option>
                                  <option>نوع     2</option>

                                </select>
                              </div>
                            <div class="form-group col-lg-3">
                                <label>تاريخ العقد</label>
                                <input class="form-control" type="date"/>
                              </div>
                           <div class="form-group col-lg-3">
                                <label>تاريخ بداية العقد </label>
                                <input class="form-control" type="date"/>
                              </div>
                             <div class="form-group col-lg-3">
                                <label>تاريخ نهاية العقد </label>
                                <input class="form-control" type="date"/>
                              </div>
                              <div class="form-group col-lg-3">
                                <label>مدة العقد بالايام </label>
                                <input class="form-control" type="text"/>
                              </div>
                              <div class="form-group col-lg-3">
                                <label>تاريخ التجديد</label>
                                <input class="form-control" type="date"/>
                              </div>
                                  <div class="form-group col-lg-3">
                                <label>حالة العقد </label>
                                <input class="form-control" type="text"/>
                              </div>
                          <div class="form-group col-lg-3">
                                <label>العمولة </label>
                                <input class="form-control" type="text"/>
                              </div>


                     <div class="form-group col-lg-3">
                                <label>احتساب العمولة نهاية العقد </label>
                                <input class="form-control" type="text"/>
                              </div>
                             <div class="form-group col-lg-3">
                                <label>نسبة العمولة </label>
                                <input class="form-control" type="text"/>
                              </div>
                              <div class="form-group col-lg-3">
                                <label>الراتب الاساسي </label>
                                <input class="form-control" type="text"/>
                              </div>
                             <div class="form-group col-lg-3">
                                <label>له تذاكر </label>
                                <input class="form-control" type="text"/>
                              </div>
                            <div class="form-group col-lg-3">
                                <label>له علاوات </label>
                                <input class="form-control" type="text"/>
                              </div>
                                 <div class="form-group col-lg-3">
                                <label>له بدل سكن </label>
                                <input class="form-control" type="text"/>
                              </div>





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
                                    <h5 class="modal-title">عرض  العقد</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                  </div>
                          <div class="modal-body row">
                                 <div class="form-group mb-3 col-lg-3">
                              <label>   اسم الموظف</label>
                              <p class="h5">اسم الترخيص</p>
                            </div>
                                 <div class="form-group mb-3 col-lg-3">
                              <label>نوع العقد
                                <p class="h5">35467</p>
                              </label>
                            </div>
                                 <div class="form-group mb-3 col-lg-3">
                              <label>   رقم العقد</label>
                              <p class="h5">اسم الترخيص</p>
                            </div>
                            <div class="col-12">
                              <hr/>
                            </div>
                                 <div class="form-group mb-3 col-lg-3">
                              <label>تاريخ العقد </label>
                              <p class="h5">12\12\2022</p>
                            </div>
                                 <div class="form-group mb-3 col-lg-3">
                              <label>تاريخ بداية العقد </label>
                              <p class="h5">12\12\2022</p>
                            </div>
                                 <div class="form-group mb-3 col-lg-3">
                              <label>تاريخ نهاية العقد </label>
                              <p class="h5">12\12\2022</p>
                            </div>

                                 <div class="form-group mb-3 col-lg-3">
                              <label>مدة العقد بالايام </label>
                              <p class="h5">مكان الاصدار</p>
                            </div>
                                 <div class="form-group mb-3 col-lg-3">
                              <label>تاريخ التجديد </label>
                              <p class="h5">جهة الاصدار</p>
                            </div>
                                 <div class="form-group mb-3 col-lg-3">
                              <label>حالة العقد </label>
                              <p class="h5">نشط</p>
                            </div>
                                 <div class="form-group mb-3 col-lg-3">
                              <label>   العمولة</label>
                              <p class="h5">النشاط</p>
                            </div>
                                 <div class="form-group mb-3 col-lg-3">
                              <label>احتساب العمولة نهاية العقد</label>
                              <p class="h5">  وسط المدينة</p>
                            </div>
                                 <div class="form-group mb-3 col-lg-3">
                              <label>نسبة العمولة</label>
                              <p class="h5">  وسط المدينة</p>
                            </div>
                                 <div class="form-group mb-3 col-lg-3">
                              <label>الراتب الاساسي </label>
                              <p class="h5">  وسط المدينة</p>
                            </div>
                                 <div class="form-group mb-3 col-lg-3">
                              <label>له تذاكر </label>
                              <p class="h5">  وسط المدينة</p>
                            </div>
                                 <div class="form-group mb-3 col-lg-3">
                              <label>له علاوات  </label>
                              <p class="h5">  وسط المدينة</p>
                            </div>
                                 <div class="form-group mb-3 col-lg-3">
                              <label>له بدل سكن  </label>
                              <p class="h5">  وسط المدينة</p>
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
                            <th>اسم الموظف </th>
                            <th>تاريخ العهد</th>
                            <th>تاريخ بداية العقد</th>
                            <th>تاريخ نهايه العقد</th>

                            <th>الراتب الاساسي</th>


                            <th>خيارات</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>رقم</td>

                            <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>

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
          <!-- license type-->
          <div class="tab-pane fade" id="tabs-2" role="tabpanel" aria-labelledby="tabs-2-tab">
            <section class="content">
              <div class="row">
                <div class="col-12">
                  <div class="card shadow-none"></div>
                          <div class="d-lg-flex bg-gray-light justify-content-lg-between px-4 py-3">
                            <h4 class="align-self-center">انواع العقود</h4>
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
                                  <h5 class="modal-title">اضافة   </h5>
                                  <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
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
                  <!-- edit modal-->
                  <div class="modal fade" id="modal8" tabindex="-1" role="dialog" aria-labelledby="modal8" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title">تعديل   </h5>
                                  <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
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
                          <th>نوع العقد</th>
                          <th>خيارات</th>
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
              </div>
            </section>
          </div>

               <div class="tab-pane fade" id="tabs-3" role="tabpanel" aria-labelledby="tabs-3-tab">
            <section class="content">
              <div class="row">
                <div class="col-12">
                  <div class="card shadow-none"></div>
                          <div class="d-lg-flex bg-gray-light justify-content-lg-between px-4 py-3">
                            <h4 class="align-self-center">بنود العقود</h4>
                            <div class="align-self-center">
                              <button class="btn btn-primary departments" data-toggle="modal" data-target="#modal700"><i class="fa fa-plus"></i> اضافة</button>
                              <button class="btn btn-tool" type="button" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                            </div>
                          </div>
                  <!-- add modal-->
                  <div class="modal fade" id="modal700" tabindex="-1" role="dialog" aria-labelledby="modal700" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title">اضافة   </h5>
                                  <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
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


                  <!-- edit modal-->
                  <div class="modal fade" id="modal701" tabindex="-1" role="dialog" aria-labelledby="modal701" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title">تعديل   </h5>
                                  <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                     <form>
                          <div class="modal-body">

                            <div class="form-group ">
                                <label>نوع العقد </label>
                                <select class="form-control">
                                  <option>نوع     1</option>
                                  <option>نوع     2</option>

                                </select>
                              </div>
                                  <div class="form-group">
                              <label> مستوي البند</label>
                              <input class="form-control" type="text"/>
                            </div>
                               <div class="form-group">
                              <label> البند</label>
                             <textarea cols="55" rows="4"></textarea>
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



                         <!-- add modal-->
                  <div class="modal fade" id="modal702" tabindex="-1" role="dialog" aria-labelledby="modal702" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title">اضافة   </h5>
                                  <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                        <form>
                          <div class="modal-body row">

                              <div class="form-group mb-3 col-lg-6">
                                  <label>   نوع العقد </label>
                                  <p class="h5">اسم الترخيص</p>
                                </div>
                                <div class="form-group mb-3 col-lg-6">
                                  <label>    مستوي البنند </label>
                                  <p class="h5">اسم الترخيص</p>
                                </div>

                              <div class="form-group mb-3 col-lg-12">
                                  <label>    البند </label>
                                  <p class="h5">اسم الترخيصاسم الترخيصاسم الترخيصاسم الترخيصاسم الترخيصاسم الترخيص</p>
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
                              <th>نوع العقد</th>
                            <th> مستوي البنند</th>
                              <th>  البند</th>
                          <th>خيارات</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($sys_contractitem as $data)
                         <tr role="row" class="odd">
                              <td>{{$data->contractitem_id}}</td>
                              <td>{{$data->contractitem_nameAR}}</td>
                              <td>{{$data->item_leve}}</td>
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
              </div>
            </section>
          </div>




              <div class="tab-pane fade" id="tabs-4" role="tabpanel" aria-labelledby="tabs-4-tab">
            <section class="content">
              <div class="row">
                <div class="col-12">
                  <div class="card shadow-none"></div>
                          <div class="d-lg-flex bg-gray-light justify-content-lg-between px-4 py-3">
                            <h4 class="align-self-center"> بنود انهاء الخدمة</h4>
                            <div class="align-self-center">
                              <button class="btn btn-primary departments" data-toggle="modal" data-target="#modal705"><i class="fa fa-plus"></i> اضافة</button>
                              <button class="btn btn-tool" type="button" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                            </div>
                          </div>
                  <!-- add modal-->
                  <div class="modal fade" id="modal705" tabindex="-1" role="dialog" aria-labelledby="modal705" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title">اضافة   </h5>
                                  <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                        <form>
                          <div class="modal-body">

                            <div class="form-group ">
                                <label>نوع العقد </label>
                                <select class="form-control">
                                  <option>نوع     1</option>
                                  <option>نوع     2</option>

                                </select>
                              </div>
                                  <div class="form-group">
                              <label> مستوي البند</label>
                              <input class="form-control" type="text"/>
                            </div>
                               <div class="form-group">
                              <label> البند</label>
                             <textarea cols="55" rows="4"></textarea>
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
                  <div class="modal fade" id="modal706" tabindex="-1" role="dialog" aria-labelledby="modal706" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title">تعديل   </h5>
                                  <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                     <form>
                          <div class="modal-body">

                            <div class="form-group ">
                                <label>نوع العقد </label>
                                <select class="form-control">
                                  <option>نوع     1</option>
                                  <option>نوع     2</option>

                                </select>
                              </div>
                                  <div class="form-group">
                              <label> مستوي البند</label>
                              <input class="form-control" type="text"/>
                            </div>
                               <div class="form-group">
                              <label> البند</label>
                             <textarea cols="55" rows="4"></textarea>
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



                         <!-- add modal-->
                  <div class="modal fade" id="modal707" tabindex="-1" role="dialog" aria-labelledby="modal707" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title">عرض   </h5>
                                  <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                        <form>
                          <div class="modal-body row">

                              <div class="form-group mb-3 col-lg-6">
                                  <label>   نوع العقد </label>
                                  <p class="h5">اسم الترخيص</p>
                                </div>
<div class="form-group mb-3 col-lg-6">
                                  <label>    مستوي البنند </label>
                                  <p class="h5">اسم الترخيص</p>
                                </div>

                              <div class="form-group mb-3 col-lg-12">
                                  <label>    البند </label>
                                  <p class="h5">اسم الترخيصاسم الترخيصاسم الترخيصاسم الترخيصاسم الترخيصاسم الترخيص</p>
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
                              <th>نوع العقد</th>
                            <th> مستوي البنند</th>
                              <th>  البند</th>
                          <th>خيارات</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td> </td>        <td> </td>        <td> </td>
                                  <td>
                                      <a class="btn btn-info  btn-xs mx-1" href="#" data-toggle="modal" data-target="#modal707"><i class="fa fa-eye mr-1"></i>عرض</a>
                                      <a class="btn btn-warning btn-xs mx-1" href="#" data-toggle="modal" data-target="#modal706"><i class="fa fa-edit mr-1"></i>تعديل</a><a class="btn btn-danger btn-xs mx-1" href="#"><i class="fa fa-trash mr-1"></i>خذف</a>
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



