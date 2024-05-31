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
                      <span> الوظائف</span>
                    </li>
                  </ol>
                </div><!-- /.col -->
                <div class="col-sm-12">
                  <h1> الوظائف </h1>
                </div><!-- /.col -->
              </div><!-- /.row -->
            </div><!-- /.container-fluid -->
          </div>
          <!-- /.content-header -->
          <div class="col-md-12">
          </div>
          <section class="content">
            <div class="modal fade" id="jobtitlestModal" tabindex="-1" role="dialog"
              aria-labelledby="jobtitlestModalLabel" style="display: none;" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="jobtitlestModalLabel">اضافة</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <form action="{{ url('jopdataSort')}}" method="GET" novalidate="">
                    <input type="hidden" name="_token" value="h101Moov2kEDoN7GAZ5dSATxgNsC62iHlz1B5MYZ">
                    <div class="modal-body">

                      <div class="row">
                        <div class="col-lg-4">
                          <div class="form-group">
                             <label class="mr-2" for="qualifications">اسم الفرع</label>
                               <select class="custom-select qualifications" name="branch_nameAR" id="branch_name" value="{{ old('branch_name') }}">
                                 <option value="">*اختار الفرع</option>
                                   @foreach($users as $data2)
                                   <option value="{{ $data2->branch_nameAR }}">{{ ucfirst($data2->branch_nameAR) }}</option>
                                   @endforeach
                                   </select>
                             </div>
						</div>
						<div class="col-lg-4">
							<div class="form-group">
                              <label  class="mr-2" for="qualifications">اسم القسم</label>
                              <select class="custom-select qualifications" name="dept_name" id="dept_name" value="dept_name">
                              <option value="">*اختار القسم</option>
                              </select>
                            </div>
						</div>
						<div class="col-lg-4">
                            <div class="form-group">
                                <label class="mr-2" for="qualifications">اسم الموظف</label>
                                <select class="custom-select qualifications" name="emply_nameAR" id="emply_nameAR" value="emply_nameAR">
                                <option value="">*اختار الموظف</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group mr-2">
                            <label class="mr-2" for="class"> الدرجة الوظيفية </label>
                             <select class="form-control" name="jopdegree">
							 @foreach($sys_jopdegree as $data)
                              <option >{{$data->jopdegree}}</option>
							   @endforeach
                            </select>
                          </div>
                        </div>
						   <div class="col-lg-6">
                          <div class="form-group mr-2">
                            <label class="mr-2" for="class"> المسمي الوظفيي </label>
                             <select class="form-control" name="jopdegree_name">
							 @foreach($sys_jops as $data)
                              <option >{{$data->jop_nameAR}}</option>
							   @endforeach
                            </select>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group mr-2">
                            <label class="mr-2" for="class">المؤهل </label>
                             <select class="form-control" name="qualification">
							 @foreach($sys_qualification as $data)
                              <option >{{$data->qualification_name}}</option>
							   @endforeach
                            </select>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group mr-2">
                            <label class="mr-2" for="class"> التخصص </label>
                             <select class="form-control" name="specialties_name">
							 @foreach($sys_specialties as $data)
                              <option >{{$data->specialties_name}}</option>
							   @endforeach
                            </select>
                          </div>
                        </div>




                        <div class="col-lg-6">
                          <div class="form-group">
                            <label for="from-date">تاريخ التعيين</label>
							<input  name="date_hiring" class="form-control" type="date"/>

                          </div>

                        </div>
                        <div class="col-lg-6">
                          <div class="form-group mr-2">
                            <label class="mr-2" for="class"> خطاب التعيين </label>
                            <select class="form-control" name="appointment_letter">
                              <option value="1"> خطاب 1</option>
                              <option value="11"> خطاب 2</option>
                            </select>
                          </div>
                        </div>

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
                <div class="card text-right">
                  <div class="card-header">
                    <h3 class="card-title"> الوظائف</h3>
                    <div class="card-tools">
                      <button class="btn btn-primary departments" data-toggle="modal" data-target="#jobtitlestModal"><i
                          class="fa fa-plus"></i> اضافة</button>
                      <button type="button" class="btn btn-tool" data-card-widget="maximize"><i
                          class="fas fa-expand"></i></button>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <div class="card-extra clearfix pt-2 pb-3 mb-3">
                      <form action="" method="GET" class="form-inline guide-advanced-search" novalidate="">
                        <input type="hidden" name="_token" value="cAFJKjhjoqZ8XW0J41SJVlZeKazkTsCGGDp8H4Kb">
                        <div class="form-group mr-">
                          <label>
                            <i class="fa fa-cogs ml-1"></i>
                            <span>بحث متقدم</span>
                          </label>
                        </div>
                        <div class="form-group mr-2">
                          <label class="mr-2" for="class">التخصص </label>
                          <select name="class" id="class" class=" custom-select" data-select2-id="class" tabindex="-1"
                            aria-hidden="true">
                            <option value="all" selected="" data-select2-id="2">الكل</option>
                            <option value="1">اسم التخصص 1</option>
                            <option value="11">اسم التخصص 2</option>
                          </select>
                        </div>
                        <div class="form-group mr-2">
                          <label class="mr-2" for="qualifications">الموظف</label>
                          <select class="custom-select qualifications" name="qualifications" id="qualifications">
                            <option value="all" selected="">الكل</option>
                            <option value="1"> الموظف </option>

                          </select>
                        </div>

                        <button type="submit" class="btn btn-primary">
                          <span>بحث</span>
                          <i class="fa fa-search"></i>
                        </button>
                      </form>
                    </div>
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
                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 455px;"> المؤهل</th>
                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 455px;"> التخصص
                            </th>
                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 455px;"> الفرع</th>
                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 455px;">
                              القسم</th>
                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 455px;"> تاريخ التعيين
                            </th>
                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 455px;"> الموظف </th>

                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 859px;">والخيارات</th>
                          </tr>
                        </thead>
                        <tbody>
                         @foreach($sys_jopdata as $data)
                          <tr>
						     <td>{{$data->jop_id}}</td>
                             <td>{{$data->qualification}}</td>
                             <td>{{$data->specialties_name}}</td>
                             <td>{{$data->branch_nameAR}}</td>
                             <td>{{$data->dept_name}}</td>
                             <td>{{$data->date_hiring}}</td>
                            <td>{{$data->emply_nameAR}}</td>
                            <td>
                              <a class="btn btn-info btn-xs" href="{{url('view-job')}}/{{  $data->jop_id  }}"><i class="fa fa-eye"></i>
                                عرض</a>
                              <button class="btn btn-warning btn-xs departments update" data-action="#"
                                data-title="خدمة العملاء" data-toggle="modal" data-target="#jobtitlestModal"><i
                                  class="fa fa-edit"></i> تعديل</button>
                                  <button  class="btn btn-danger btn-xs delete" >
                                    <i class="fa fa-trash"></i><a href="{{  url('daljobs')  }}/{{  $data->jop_id  }}">حذف</a></button>

                              <form id="deleteForm-1" action="#" method="POST" novalidate="">
                                <input type="hidden" name="_token" value="h101Moov2kEDoN7GAZ5dSATxgNsC62iHlz1B5MYZ">
                                <input type="hidden" name="_method" value="DELETE"> </form>
                            </td>
                          </tr>
						    @endforeach
                        </tbody>
                      </table>
                      <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                        <ul class="pagination">

						   {{  $sys_jopdata->links() }}

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

<script src="javascript/jquery.js"></script>

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
            $('#emply_nameAR').append(`<option value="0" disabled selected>اختيار الموظف</option>`);
                response.forEach(element => {
                $('#emply_nameAR').append(`<option value="${element['dept_name']}">${element['emply_nameAR']}</option>`);
                });
            }
        });
    });
});
</script>
<script>
            $(document).ready(function () {
            $('#branch_name').on('change', function () {
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
            $('#dept_name').append(`<option value="0" disabled selected>اختار القسم*</option>`);

            response.forEach(element => {
                $('#dept_name').append(`<option value="${element['branch_nameAR']}">${element['dept_name']}</option>`);
                });

            }
        });
       });
    });
</script>

