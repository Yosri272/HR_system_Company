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
                    <li class="breadcrumb-item"><span>التقيم</span></li>
                  </ol>
                </div>
                <div class="col-sm-12">
                  <h1>التقيم</h1>
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
التقيم                    </a></li>
          <!-- license type-->
          <li class="nav-item"><a class="nav-link" id="tabs-2-tab" data-toggle="pill" href="#tabs-2" role="tab" aria-controls="tabs-2" aria-selected="false">
معاير التقيم
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
                              <h4 class="align-self-center">قائمة التقيم</h4>
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
                          <form action="{{ url('evaluationSort')}}" method="GET" novalidate="">
                            <div class="modal-body row">


                               <div class="col-lg-4">
                                  <div class="form-group">
                                    <label class="mr-2" for="qualifications">اسم الفرع</label>
                                    <select class="custom-select qualifications" name="branch_nameAR" id="branch_name" >
                                    <option value="">*اختار الفرع</option>
                                    @foreach($users as $data2)
                                    <option >{{ ucfirst($data2->branch_nameAR) }}</option>
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
								  <div class="form-group col-lg-6">
                                               <label>   المعيار </label>
                                                <select class="form-control" name="criteria_nameAR">
												@foreach($sys_criteria as $data)

                  									<option>{{$data->criteria_nameAR}}</option>
													@endforeach
                                                </select>

                                              </div>
                                    <div class="col-lg-6">
									<div class="form-group">
                                    <label>   المدير المباشر </label>
                                    <select class="form-control" name="maig_direct">
                                      <option>اسم     4</option>
                                      <option>اسم     5</option>
                                    </select>
                                  </div>
								  </div>
                              <div class="col-lg-6">
							  <div class="form-group">
                                <label>نوع التقيم </label>
                                <input class="form-control" name="evaluation_type" type="text"/>
                              </div>
							  </div>
                              <div class="col-lg-6">
							  <div class="form-group">
                                <label> من تاريخ </label>
                                <input class="form-control" name="date_of" type="date"/>
                              </div>
							  </div>
                              <div class="col-lg-6">
							  <div class="form-group">
                                <label> الى تاريخ </label>
                                <input class="form-control" name="date_to" type="date"/>
                              </div>
							  </div>
                              <div class="col-lg-6">
							  <div class="form-group">
                                <label> السنه </label>
                                <input class="form-control" name="year" type="text"/>
                              </div>
							  </div>
                                  <div class="col-lg-6">
								  <div class="form-group">
                                <label> الدرجه المستحقه </label>
                                <input class="form-control" name="degree_due" type="text"/>
                              </div>
							  </div>
                                  <div class="col-lg-6">
								  <div class="form-group">
                                <label>  حاله التقيم </label>
                                <input class="form-control" name="evaluation_status" type="text"/>
                              </div>
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
                      <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title">تعديل   </h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                  </div>
                    <form>
                            <div class="modal-body row">

                                  <div class="form-group col-lg-6">
                                    <label>   المعيار </label>
                                    <select class="form-control">
                                      <option>المعيار     1</option>
                                      <option>المعيار     2</option>
                                      <option>المعيار     3</option>
                                      <option>المعيار     4</option>
                                      <option>المعيار     5</option>
                                    </select>
                                  </div>
                                <div class="form-group col-lg-6">
                                    <label>   اسم الموظف  </label>
                                    <select class="form-control">
                                      <option>اسم     4</option>
                                      <option>اسم     5</option>
                                    </select>
                                  </div>
                                    <div class="form-group col-lg-6">
                                    <label>   المدير المباشر </label>
                                    <select class="form-control">
                             <option>اسم     4</option>
                                      <option>اسم     5</option>
                                    </select>
                                  </div>
                              <div class="form-group col-lg-6">
                                <label>نوع التقيم </label>
                                <input class="form-control" type="text"/>
                              </div>
                              <div class="form-group col-lg-6">
                                <label> من تاريخ </label>
                                <input class="form-control" type="date"/>
                              </div>
                              <div class="form-group col-lg-6">
                                <label> الى تاريخ </label>
                                <input class="form-control" type="date"/>
                              </div>
                              <div class="form-group col-lg-4">
                                <label> السنه </label>
                                <input class="form-control" type="text"/>
                              </div>
                                  <div class="form-group col-lg-4">
                                <label> الدرجه المستحقه </label>
                                <input class="form-control" type="text"/>
                              </div>
                                  <div class="form-group col-lg-4">
                                <label>  حاله التقيم </label>
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
                    <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="modal3" aria-hidden="true">
                      <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title">عرض  </h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                  </div>
                          <div class="modal-body row">
                            <div class="form-group mb-3 col-lg-4">
                              <label>المعيار
                                <p class="h5">35467</p>
                              </label>
                            </div>
                            <div class="form-group mb-3 col-lg-4">
                              <label>   اسم الموظف</label>
                              <p class="h5">عزو محمد </p>
                            </div>
                   <div class="form-group mb-3 col-lg-4">
                              <label>    المدير المباشر</label>
                              <p class="h5">عزو محمد </p>
                            </div>

                            <div class="form-group mb-3 col-lg-4">
                              <label>رقم العهدة </label>
                              <p class="h5">4565456</p>
                            </div>
                            <div class="form-group mb-3 col-lg-4">
                              <label>نوع التقيم </label>
                              <p class="h5">نوع </p>
                            </div>
                            <div class="form-group mb-3 col-lg-4">
                              <label>من تاريخ </label>
                              <p class="h5">12\12\2022</p>
                            </div>
                               <div class="form-group mb-3 col-lg-4">
                              <label>الى تاريخ </label>
                              <p class="h5">12\12\2022</p>
                            </div>
                                 <div class="form-group mb-3 col-lg-4">
                              <label> الدرجه المستحقه </label>
                              <p class="h5">الدرحه</p>
                            </div>
                              <div class="form-group mb-3 col-lg-4">
                              <label> حاله التقيم</label>
                              <p class="h5">حاله</p>
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
                            <th>المعيار </th>
                            <th>اسم الموظف</th>
                            <th>اسم المدير المباشر </th>
                            <th>نوع التقيم</th>
                            <th>من تاريخ</th>
                            <th>الي تاريخ</th>
                            <th> الدرجه المستحقة</th>
                            <th>خيارات</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($sys_evaluation as $data)
                          <tr>
                              <td>{{$data->evaluation_id}}</td>
                              <td>{{$data->criteria_nameAR}}</td>
                              <td>{{$data->emply_nameAR}}</td>
                              <td>{{$data->maig_direct}}</td>
                              <td>{{$data->evaluation_type}}</td>
                              <td>{{$data->date_of}}</td>
                              <td>{{$data->date_to}}</td>
							  <td>{{$data->degree_due}}</td>
                                    <td><a class="btn btn-info btn-xs" href="#" data-toggle="modal" data-target="#modal3"><i class="fa fa-eye mr-1"></i>عرض</a>
                                      <div class="dropdown d-inline-block">
                                        <button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"><span>المزيد</span><span class="caret"></span></button>
                                        <div class="dropdown-menu"><a class="dropdown-item text-info" href="#" data-toggle="modal" data-target="#modal3"><i class="fa fa-eye mr-1"></i><span>تفاصيل</span></a><a class="dropdown-item text-warning" href="#" data-toggle="modal" data-target="#modal2"><i class="fa fa-edit mr-1"></i><span>تعديل</span></a><a class="dropdown-item delete text-danger" href="{{  url('dalevaluation')  }}/{{  $data->evaluation_id  }}"><i class="fa fa-trash mr-1"></i><span>حذف</span></a></div>
                                      </div>
                                    </td>
                          </tr>

                          @endforeach

                        </tbody>
                      </table>
                      <div class="mt-3">
                        <ul class="pagination">
                           {{  $sys_evaluation->links() }}

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
                            <h4 class="align-self-center"> معاير التقيم </h4>
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
                           <form action="{{ url('criteriaSort')}}" method="GET" novalidate="">
                          <div class="modal-body">
                            <div class="form-group">
                              <label>اسم المعيار العربي</label>
                              <input name="criteria_nameAR" class="form-control" type="text"/>
                            </div>
							<div class="form-group">
                              <label>اسم المعيار الانجليزي</label>
                              <input name="criteria_nameEN" class="form-control" type="text"/>
                            </div>
                                <div class="form-group">
                              <label> نوع المعيار</label>
                              <input name="criteria_type" class="form-control" type="text"/>
                            </div>
                               <div class="form-group">
                              <label>الدرجه  </label>
                              <input name="criteria_degree" class="form-control" type="number"/>
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
                              <label>اسم المعيار العربي</label>
                              <input name="tran_name" class="form-control" type="text"/>
                            </div>
							<div class="form-group">
                              <label>اسم المعيار الانجليزي</label>
                              <input name="tran_name" class="form-control" type="text"/>
                            </div>
                                <div class="form-group">
                              <label> نوع المعيار</label>
                              <input name="tran_name" class="form-control" type="text"/>
                            </div>
                               <div class="form-group">
                              <label>الدرجه  </label>
                              <input name="tran_name" class="form-control" type="number"/>
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

                            <th>اسم المعيار</th>
                          <th>نوع المعيار </th>
                             <th>الدرجه  </th>
                          <th>خيارات</th>
                        </tr>
                      </thead>
                      <tbody>
                       @foreach($sys_criteria as $data)
                          <tr>
                            <td>{{$data->criteria_id}}</td>
                            <td>{{$data->criteria_nameAR}}</td>
                            <td>{{$data->criteria_type}}</td>
						    <td>{{$data->criteria_degree}}</td>
                                  <td><a class="btn btn-warning btn-xs mx-1" href="#" data-toggle="modal" data-target="#modal8"><i class="fa fa-edit mr-1"></i>تعديل</a><a class="btn btn-danger btn-xs mx-1" href="{{  url('dalcriteria')  }}/{{  $data->criteria_id  }}"><i class="fa fa-trash mr-1"></i>خذف</a>
                                  </td>
                        </tr>

                       @endforeach
                      </tbody>
                    </table>
                    <div class="mt-3">
                      <ul class="pagination">
                       {{  $sys_criteria->links() }}

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



