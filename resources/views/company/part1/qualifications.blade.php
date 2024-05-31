@extends ('layout.master')
@section('content')
@section('content1')
@section('content2')

         <!-- Content Header (Page header) -->
		  <br>
          <div class="content-header " >
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
                      <span>المؤهلات</span>
                    </li>
                  </ol>
                </div><!-- /.col -->
                <div class="col-sm-12 ">
                  <h1> المؤهلات </h1>
                </div><!-- /.col -->
              </div><!-- /.row -->
            </div><!-- /.container-fluid -->
          </div>
          <!-- /.content-header -->
          <div class="col-md-12">
          </div>
          <section class="content">
            <div class="modal fade" id="qualificationstModal" tabindex="-1" role="dialog"
              aria-labelledby="qualificationstModalLabel" style="display: none;" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="qualificationstModalLabel">اضافة</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <form action="{{ url('qualificationStort')}}" method="GET" novalidate="">
                  <!-- text input -->
                  <div class="form-group">
                    <label>اسم </label>
                    <input id="qualification_name" type="text" class="form-control @error('qualification_name') is-invalid @enderror" name="qualification_name" value="{{ old('qualification_name') }}" required autocomplete="name" autofocus>

                           @error('qualification_name')
                     <span class="invalid-feedback" role="alert">
                       <strong>الرجاء الاسم خالي</strong>
                     </span>
                      @enderror
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
                      <div class="modal fade" id="qualificationstModal1" tabindex="-1" role="dialog" aria-labelledby="modal78" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title">تعديل      </h5>
                                      <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    </div>
                         <form action="#" method="GET" novalidate="">
                              <div class="modal-body">
                               <div class="form-group">
                                <label for="title">الاسم</label>
                                 <input type="text" name="qualification_name" class="form-control" placeholder="إسم المؤهلات ">
                                 </div>
                              </div>



                              </div>
                                      <div class="modal-footer justify-content-start">
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">اغلاق</button>
                                        <button  type="submit"  class="btn btn-primary add" type="button">حفظ</button>
                                      </div>
                            </form>


                          </div>
                        </div>
                      </div>


            <div class="row">
              <div class="col-12">
                <div class="card text-right">
                  <div class="card-header">
                    <h3 class="card-title"> المؤهلات</h3>
                    <div class="card-tools">
                      <button class="btn btn-primary departments" data-toggle="modal"
                        data-target="#qualificationstModal"><i class="fa fa-plus"></i> اضافة</button>
                      <button type="button" class="btn btn-tool" data-card-widget="maximize"><i
                          class="fas fa-expand"></i></button>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <div id="datatable_wrapper" class="dataTables_wrapper no-footer">
                      <div class="d-md-flex justify-content-between">

                        <div id="datatable_filter" class="dataTables_filter"><label><input type="search" class=""
                              placeholder="بحث" aria-controls="datatable"></label></div>

                        <div class="dt-buttons"> <button class="btn btn-default" tabindex="0" aria-controls="datatable"
                            type="button"><span>طباعة <i class="fa fa-print"></i></span></button> <button
                            class="btn btn-success" tabindex="0" aria-controls="datatable" type="button"><span>اكسل <i
                                class="fa fa-file-excel"></i></span></button> </div>

                      </div>
                      <table id="datatable" class="datatable table table-bordered table-striped dataTable no-footer"
                        role="grid">
                        <thead>
                          <tr role="row">
                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 172px;">#</th>
                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 455px;">إسم المؤهلات</th>
                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 859px;">والخيارات</th>
                          </tr>
                        </thead>
                        <tbody>

                            @foreach($sys_qualification as $data)

                          <tr role="row" class="odd">
                            <td> {{$data->qualification_id}}</td>
                            <td> {{$data->qualification_name}} </td>
                            <td>
                              <a class="btn btn-info btn-xs" href="{{  url('view-qualification') }}/{{  $data->qualification_id  }}"><i class="fa fa-eye"></i>
                                عرض</a>
                                <button class="btn btn-warning btn-xs departments update" data-href="{{$data->qualification_name}}"
                                data-title="خدمة العملاء" data-toggle="#qualificationstModal1" data-target="qualificationstModal1"><i
                                  class="fa fa-edit"></i> تعديل</button>


								<button  class="btn btn-danger btn-xs delete" ><i
                                  class="fa fa-trash"></i><a href="{{  url('dalsys_qualification')  }}/{{  $data->qualification_id  }}">حذف</a></button>


                            </td>

                          </tr>
                          @endforeach
                        </tbody>

                      </table>
                      <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                        <ul class="pagination">

                            {{  $sys_qualification->links() }}


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



