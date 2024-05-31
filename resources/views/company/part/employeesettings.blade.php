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

                      <li class="breadcrumb-item"><span>اعدادات الموظف </span></li>
                  </ol>
                </div>
                <div class="col-sm-12">
                  <h1> اعدادات الموظف</h1>
                </div>
              </div>
            </div>
          </div>
  <section class="content">
    <div class="card card-primary card-outline card-outline-tabs">
        <div class="card-header p-0 border-bottom-0">
            <ul class="nav nav-tabs" id="tabs-tab" role="tablist">
              <!-- ‫‪SYSTEM‬‬-->
           <li class="nav-item active"><a class="nav-link" id="tabs-5-tab" data-toggle="pill" href="#tabs-5" role="tab" aria-controls="tabs-5" aria-selected="false">
انواع الاثباتات
                  </a></li>
                         <li class="nav-item "><a class="nav-link" id="tabs-6-tab" data-toggle="pill" href="#tabs-6" role="tab" aria-controls="tabs-6" aria-selected="false">
انواع الوثائق
                  </a></li>
            </ul>
          </div>
      <div class="card-body">
        <div class="tab-content" id="tabs-tabContent">
          <!-- ‫‪SYSTEM‬‬-->

                  <div class="tab-pane fade  active show" id="tabs-5" role="tabpanel" aria-labelledby="tabs-5-tab">
            <section class="content">
              <div class="row">
               <div class="col-12">
        <div class="card border">
          <div class="card-header p-2">
                    <div class="d-lg-flex bg-gray-light justify-content-lg-between px-4 py-3">
                      <h4 class="align-self-center">قائمة  انواع الاثباتات</h4>
                      <div class="align-self-center">
                        <button class="btn btn-primary departments" data-toggle="modal" data-target="#modal62"><i class="fa fa-plus"></i> اضافة</button>
                        <button class="btn btn-tool" type="button" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                      </div>
                    </div>
          </div>
          <!-- add modal-->
          <div class="modal fade" id="modal62" tabindex="-1" role="dialog" aria-labelledby="modal62" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">اضافة   نوع الاثباتات  </h5>
                          <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        </div>
                 <form action="{{ url('prooftypeSort')}}" method="GET" novalidate="">
                  <div class="modal-body ">
                    <div class="form-group ">
                      <label>اسم    الاثبات</label>
                      <input name="prooft_name" class="form-control" type="text"/>
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
          <div class="modal fade" id="modal63" tabindex="-1" role="dialog" aria-labelledby="modal63" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">تعديل   انواع الاثباتات  </h5>
                          <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        </div>
                <form>
                  <div class="modal-body ">
                  <div class="form-group ">
                      <label>اسم    الوثيقه</label>
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
                  <th>  اسم  الاثباتات</th>
                  <th>خيارات</th>
                </tr>
              </thead>
              <tbody>
                @foreach($sys_prooftype as $data)
                   <tr>
                       <td>{{$data->prooft_id}}</td>
                        <td>{{$data->prooft_name}}</td>
                    <td><a class="btn btn-warning btn-xs mx-1" href="#" data-toggle="modal" data-target="#modal63"><i class="fa fa-edit mr-1"></i>تعديل</a>
					<a class="btn btn-danger btn-xs mx-1" href="{{  url('dalprooftype')  }}/{{  $data->prooft_id  }}"><i class="fa fa-trash mr-1"></i>خذف</a>
                                  </td>

                        </tr>
                          @endforeach
                        </tbody>
                      </table>
                      <div class="mt-3">
                        <ul class="pagination">

                            {{  $sys_prooftype->links() }}

                        </ul>

                    </div>
                </section>
              </div>

                      <div class="tab-pane fade   " id="tabs-6" role="tabpanel" aria-labelledby="tabs-6-tab">
                <section class="content">
                  <div class="row">
                   <div class="col-12">
            <div class="card border">
              <div class="card-header p-2">
                        <div class="d-lg-flex bg-gray-light justify-content-lg-between px-4 py-3">
                          <h4 class="align-self-center">قائمة  انواع وثائق </h4>
                          <div class="align-self-center">
                            <button class="btn btn-primary departments" data-toggle="modal" data-target="#modal65"><i class="fa fa-plus"></i> اضافة</button>
                            <button class="btn btn-tool" type="button" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                          </div>
                        </div>
              </div>
              <!-- add modal-->
              <div class="modal fade" id="modal65" tabindex="-1" role="dialog" aria-labelledby="modal65" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title">اضافة   نوع وثائق   </h5>
                              <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                            <form action="{{ url('emply_doc_typesSort')}}" method="GET" novalidate="">
                                <div class="modal-body ">
                                  <div class="form-group ">
                                    <label>اسم    الوثيقه</label>
                                    <input name="doc_type_name" class="form-control" type="text"/>
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
              <div class="modal fade" id="modal64" tabindex="-1" role="dialog" aria-labelledby="modal64" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title">تعديل   انواع وثائق   </h5>
                              <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                    <form>
                      <div class="modal-body ">
                      <div class="form-group ">
                          <label>اسم    وثائق </label>
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
                      <th>  اسم  وثائق </th>
                      <th>خيارات</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($sys_emply_doc_type as $data)
                    <tr>
                        <td>{{$data->doc_type_id}}</td>
                         <td>{{$data->doc_type_name}}</td>

                          <td><a class="btn btn-warning btn-xs mx-1" href="#" data-toggle="modal" data-target="#modal64"><i class="fa fa-edit mr-1"></i>تعديل</a>
						  <a class="btn btn-danger btn-xs mx-1" href="{{  url('dalemply_doc_types')  }}/{{  $data->doc_type_id  }}"><i class="fa fa-trash mr-1"></i>خذف</a>
                                      </td>

                            </tr>


                            @endforeach


                  </tbody>
                </table>
                <div class="mt-3">
                  <ul class="pagination">
                    {{  $sys_emply_doc_type->links() }}

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
      </section>



        </div>
      </div>
    </div>
 @endsection
  </div>
            <!-- /.row -->



