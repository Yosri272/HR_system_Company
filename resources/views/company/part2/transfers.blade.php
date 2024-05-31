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
                    <li class="breadcrumb-item"><span>التنقلات </span></li>

                  </ol>
                </div>
                <div class="col-sm-12">
                  <h1> التنقلات</h1>
                </div>
              </div>
            </div>
          </div>
  <section class="content">
    <div class="card card-primary card-outline card-outline-tabs">

      <div class="card-body">
        <div class="tab-content" id="tabs-tabContent">
          <!-- ‫‪SYSTEM‬‬-->
          <div class="tab-pane fade active show" id="tabs-1" role="tabpanel" aria-labelledby="tabs-1-tab">
            <section class="content">
              <div class="row">
                <div class="col-12">
                  <div class="card shadow-none">
                            <div class="d-lg-flex bg-gray-light justify-content-lg-between px-4 py-3">
                              <h4 class="align-self-center">  قائمة انواع التنقلات</h4>
                              <div class="align-self-center">
                                <button class="btn btn-primary departments" data-toggle="modal" data-target="#modal1"><i class="fa fa-plus"></i> اضافة نوع </button>
                                <button class="btn btn-tool" type="button" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                              </div>
                            </div>
                    <!-- add modal-->
                    <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title">اضافة    نوع جديد</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                  </div>
                           <form action="{{ url('TranSort')}}" method="GET" novalidate="">
                            <div class="modal-body">
                              <div class="form-group">
                                <label>  اسم النوع</label>
                                <input  name="tran_name" class="form-control" type="text"/>
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
                                    <h5 class="modal-title">تعديل   </h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                  </div>
                       <form>
                            <div class="modal-body">
                              <div class="form-group">
                                <label>  اسم النوع</label>
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
                            <th>نوع التنقل  </th>

                            <th>خيارات</th>
                          </tr>
                        </thead>
                        <tbody>
						 @foreach($sys_trans as $data)
                          <tr>
                            <td>{{$data->tran_id}}</td>
                            <td>{{$data->tran_name}}</td>
                          <td>
                        <a class="btn btn-info btn-xs" href="#"><i class="fa fa-eye"></i>
                          عرض</a>
                        <button class="btn btn-warning btn-xs departments update" data-action="#"
                          data-title=" "data-toggle="modal" data-target="#modal2"><i
                            class="fa fa-edit"></i> تعديل</button>
                       <button  class="btn btn-danger btn-xs delete" >
                        <i class="fa fa-trash"></i><a href="{{  url('daltransfers')  }}/{{  $data->tran_id  }}">حذف</a>
						</button>
                        <form id="deleteForm-1" action="#" method="POST" novalidate="">
                          <input type="hidden" name="_token" value="h101Moov2kEDoN7GAZ5dSATxgNsC62iHlz1B5MYZ">
                          <input type="hidden" name="_method" value="DELETE"> </form>
                      </td>
                         @endforeach

                        </tbody>
                      </table>
                      <div class="mt-3">
                        <ul class="pagination">

						  {{  $sys_trans->links() }}


						  </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
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



