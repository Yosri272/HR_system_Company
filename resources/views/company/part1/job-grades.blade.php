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
                      <span>الدرجات الوظيفية</span>
                    </li>
                  </ol>
                </div><!-- /.col -->
                <div class="col-sm-12">
                  <h1> الدرجات الوظيفية </h1>
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
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="jobtitlestModalLabel">اضافة</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                   <form action="{{ url('jopdegreeSort')}}" method="GET" novalidate="">
                    <input type="hidden" name="_token" value="h101Moov2kEDoN7GAZ5dSATxgNsC62iHlz1B5MYZ">
                    <div class="modal-body">
                      <div class="form-group">
                        <label for="title">مسمي الدرجة</label>
                        <input type="text" name="jopdegree_name" class="form-control">
                      </div>
                      <div class="row">
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label for="title">الدرجة الوظيفية</label>
                            <input type="number" name="jopdegree" class="form-control">
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group mr-2">
                            <label class="mr-2" for="class">فئه الوظيفية </label>
                             <select class="form-control" name="jop_category">
							 @foreach($sys_categories as $data)
                              <option >{{$data->category_Name}}</option>
							   @endforeach
                            </select>

                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label for="title"> العلاوة السنوية</label>
                            <input type="number" name="annualbonus" class="form-control">
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label for="title">نسبة العلاوة السنوية</label>
                            <input type="number" name="annualbonus_rate" class="form-control">
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label for="title"> المرتب عند التعيين </label>
                            <input type="number"  name="salaryuponappointment" class="form-control">
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label for="title"> المرتب عند انهاء الخدمة </label>
                            <input type="number" name="salaryuponendservice" class="form-control">
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label for="title"> الجنسية </label>
                            <select class="form-control" name="nationality">
                                @foreach($sys_nationality as $data)
                                 <option >{{$data->nationality_name}}</option>
                                  @endforeach
                               </select>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label for="title"> بحسب سنوات الخبرة </label>
                            <input type="number" name="year" class="form-control">
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label for="title"> ادني مؤهل </label>
                            <select class="form-control" name="qualification_min">
                                @foreach($sys_qualification as $data)
                                 <option >{{$data->qualification_name}}</option>
                                  @endforeach
                               </select>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label for="title"> اعلا مؤهل </label>
                            <select class="form-control" name="qualification_hig">
                                @foreach($sys_qualification as $data)
                                 <option >{{$data->qualification_name}}</option>
                                  @endforeach
                               </select>
                          </div>
                        </div>

                      </div>
                      <div class="form-group">
                        <label>ملاحظات</label>
                        <textarea class="form-control" name="note" placeholder="ملاحظات" rows="3"></textarea>
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
                    <h3 class="card-title"> الدرجات الوظيفية</h3>
                    <div class="card-tools">
                      <button class="btn btn-primary departments" data-toggle="modal"
                        data-target="#jobtitlestModal"><i class="fa fa-plus"></i> اضافة</button>
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
                          <label class="mr-2" for="class">الفئة </label>
                          <select name="class" id="class" class=" custom-select" data-select2-id="class" tabindex="-1"
                            aria-hidden="true">
                            <option value="all" selected="" data-select2-id="2">الكل</option>
                            <option value="1">اسم الفئة 1</option>
                            <option value="11">اسم الفئة 2</option>
                          </select>
                        </div>
                        <div class="form-group mr-2">
                          <label class="mr-2" for="qualifications">الجنسية</label>
                          <select class="custom-select qualifications" name="qualifications" id="qualifications">
                            <option value="all" selected="">الكل</option>
                            <option value="1"> الجنسية </option>

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

                        <div class="dt-buttons"> <button class="btn btn-default" tabindex="0"
                            aria-controls="datatable" type="button"><span>طباعة <i
                                class="fa fa-print"></i></span></button> <button class="btn btn-success" tabindex="0"
                            aria-controls="datatable" type="button"><span>اكسل <i
                                class="fa fa-file-excel"></i></span></button> </div>

                      </div>
                      <table id="datatable" class="datatable table table-bordered table-striped dataTable no-footer"
                        role="grid">
                        <thead>
                          <tr role="row">
                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 172px;">#</th>
                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 455px;"> الدرجة</th>
                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 455px;"> مسمي الدرجة
                            </th>
                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 455px;"> الفئة</th>
                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 455px;"> العلاوة
                              السنوية</th>
                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 455px;"> نسبة العلاوة
                            </th>
                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 455px;"> ادني مرتب</th>
                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 455px;"> اعلا مرتب</th>
                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 859px;">والخيارات</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($sys_jopdegree as $data)
                          <tr role="row" class="odd">
						    <td>{{$data->jopdegree_id}}</td>
                            <td>{{$data->jopdegree}}</td>
                            <td>{{$data->jopdegree_name}}</td>
                             <td>{{$data->jop_category}}</td>
                            <td>{{$data->annualbonus}}</td>
                             <td>10%</td>
                            <td>{{$data->qualification_min}}</td>
                            <td>{{$data->qualification_hig}}</td>

                            <td>
                              <a class="btn btn-info btn-xs" href="{{ url('view-job-grades')}}/{{  $data->jopdegree_id  }}"><i class="fa fa-eye"></i>
                                عرض</a>
                              <button class="btn btn-warning btn-xs departments update" data-action="#"
                                data-title="خدمة العملاء" data-toggle="modal" data-target="#jobtitlestModal"><i
                                  class="fa fa-edit"></i> تعديل</button>
                                  <button  class="btn btn-danger btn-xs delete" >
                                    <i class="fa fa-trash"></i><a href="{{  url('daljob-grades')  }}/{{  $data->jopdegree_id  }}">حذف</a></button>

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

						 {{  $sys_jopdegree->links() }}


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



