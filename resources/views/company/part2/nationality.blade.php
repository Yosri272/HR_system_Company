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
                    <li class="breadcrumb-item"><span>الجنسيات</span></li>
                  </ol>
                </div>
                <div class="col-sm-12">
                  <h1>الجنسيات</h1>
                </div>
              </div>
            </div>
          </div>
  <section class="content">
    <div class="row">
      <div class="col-12">
        <div class="card border">
          <div class="card-header p-2">
                    <div class="d-lg-flex bg-gray-light justify-content-lg-between px-4 py-3">
                      <h4 class="align-self-center">قائمة الجنسيات</h4>
                      <div class="align-self-center">
                        <button class="btn btn-primary departments" data-toggle="modal" data-target="#modal7"><i class="fa fa-plus"></i> اضافة</button>
                        <button class="btn btn-tool" type="button" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                      </div>
                    </div>
          </div>
          <!-- add modal-->
          <div class="modal fade" id="modal7" tabindex="-1" role="dialog" aria-labelledby="modal7" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">اضافة قسم  </h5>
                          <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        </div>
                <form action="{{ url('nationalitySort')}}" method="GET" novalidate="">
                  <div class="modal-body">
                    <div class="form-group">
                      <label>اسم الجنسية</label>
                      <input   name="nationality_name" class="form-control" type="text"/>
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
                      <label>اسم اللغة</label>
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
                  <th>اسم الجنسية</th>
                  <th>خيارات</th>
                </tr>
              </thead>
              <tbody>
                @foreach($sys_nationality as $data)
                <tr>
                  <td>{{$data->nationality_id}}</td>
                  <td>{{$data->nationality_name}}</td>
                    <td><a class="btn btn-warning btn-xs mx-1" href="#" data-toggle="modal" data-target="#modal8"><i class="fa fa-edit mr-1"></i>تعديل</a>
					<a class="btn btn-danger btn-xs mx-1" href="{{  url('dalnationality')  }}/{{  $data->nationality_id  }}"><i class="fa fa-trash mr-1"></i>خذف</a>
                          </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <div class="mt-3">
              <ul class="pagination">

                {{  $sys_nationality->links() }}

            </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
 @endsection
  </div>
            <!-- /.row -->



