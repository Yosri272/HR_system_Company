@extends ('layout.master')
@section('content')
@section('content1')
@section('content2')

         <!-- Content Header (Page header) -->
		  <br>

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
                                <span> الموظفين</span>
                            </li>
                        </ol>
                    </div><!-- /.col -->
                    <div class="col-sm-12">
                        <h1> الموظفين </h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <div class="col-md-12">
        </div>
        <section class="content">
            <div class="card card-primary card-outline card-outline-tabs">
                <div class="card-header p-0 border-bottom-0">
                    <ul class="nav nav-tabs" id="tabs-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="tabs-stores-tab" data-toggle="pill" href="#tabs-stores" role="tab" aria-controls="tabs-stores" aria-selected="true"> الموظفين</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tabs-shelve-tab" data-toggle="pill" href="#tabs-shelve" role="tab" aria-controls="tabs-shelve" aria-selected="false"> وثائق الموظف </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tabs-OPEN_BALANCE-tab" data-toggle="pill" href="#tabs-OPEN_BALANCE" role="tab" aria-controls="tabs-OPEN_BALANCE" aria-selected="false"> اثباتات الموظف </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tabs-warehouse-tab" data-toggle="pill" href="#tabs-warehouse" role="tab" aria-controls="tabs-warehouse" aria-selected="true"> التامينات الاجتماعية </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tabs-1-tab" data-toggle="pill" href="#tabs-1" role="tab" aria-controls="tabs-1" aria-selected="true">
                                التامينات الصحية
                            </a>
                        </li>

                        <li class="nav-item">
                            <a id="more" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">
                                <span> المزيد </span>
                            </a>
                            <ul aria-labelledby="more" class="dropdown-menu">


                                <li>
                                    <a class="nav-link" id="tabs-2-tab" data-toggle="pill" href="#tabs-2" role="tab" aria-controls="tabs-2" aria-selected="true">
                                        المؤهلات الخاصة بالموظف
                                    </a>
                                </li>


                                <li>
                                    <a class="nav-link" id="tabs-4-tab" data-toggle="pill" href="#tabs-4" role="tab" aria-controls="tabs-4" aria-selected="true">
                                        الدورات
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link" id="tabs-7-tab" data-toggle="pill" href="#tabs-7" role="tab" aria-controls="tabs-4" aria-selected="true">
                                        الخبرات
                                    </a>
                                </li>

                                <li>
                                    <a class="nav-link" id="tabs-5-tab" data-toggle="pill" href="#tabs-5" role="tab" aria-controls="tabs-5" aria-selected="true">
                                        اللغات
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link" id="tabs-8-tab" data-toggle="pill" href="#tabs-8" role="tab" aria-controls="tabs-8" aria-selected="true">
                                   التابعين للموظف</a>
                                </li>

                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="card-body ">
                    <div class="tab-content" id="tabs-tabContent">
                        <div class="tab-pane fade active show" id="tabs-stores" role="tabpanel" aria-labelledby="tabs-stores-tab">
                            <section class="content">

                                <div class="row">
                                    <div class="col-12">
                                        <div class="card text-right shadow-none">
                                            <div class="d-lg-flex bg-gray-light justify-content-lg-between px-4 py-3">
                                                <h4 class="align-self-center"> عرض قائمة الموظفين </h4>
                                                <div class="align-self-center">
                                                    <a class="btn btn-primary departments" href="{{ url('add-employee') }}">
                                                        <i class="fa fa-plus"></i> اضافة موظف
                                                    </a>

                                                    <button type="button" class="btn btn-tool" data-card-widget="maximize">
                                                        <i class="fas fa-expand"></i>
                                                    </button>
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
                                                            <label class="mr-2" for="class">الفرع </label>
                                                            <select name="class" id="class" class=" custom-select" data-select2-id="class" tabindex="-1" aria-hidden="true">
                                                                <option value="all" selected="" data-select2-id="2">الكل</option>
                                                                <option value="1">الفرع  1</option>
                                                                <option value="11">الفرع  2</option>
                                                            </select>
                                                        </div>
                                                               <div class="form-group mr-2">
                                                            <label class="mr-2" for="class">الادارة </label>
                                                            <select name="class" id="class" class=" custom-select" data-select2-id="class" tabindex="-1" aria-hidden="true">
                                                                <option value="all" selected="" data-select2-id="2">الكل</option>
                                                                <option value="1">الادارة  1</option>
                                                                <option value="11">الادارة  2</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group mr-2">
                                                            <label class="mr-2" for="class">الجنسية </label>
                                                            <select name="class" id="class" class=" custom-select" data-select2-id="class" tabindex="-1" aria-hidden="true">
                                                                <option value="all" selected="" data-select2-id="2">الكل</option>
                                                                <option value="1">اسم الجنسية 1</option>
                                                                <option value="11">اسم الجنسية 2</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group mr-2">
                                                            <label class="mr-2" for="qualifications">
                                                                المهنة
                                                            </label>
                                                            <select class="custom-select qualifications">
                                                                <option value="all" selected="">الكل</option>
                                                                <option value="1"> المهنة 1 </option>

                                                            </select>
                                                        </div>
                                                             <div class="form-group">
                                                              <label> من تاريخ</label>
                                                              <input class="form-control" type="date"/>
                                                             </div>
                                                            <div class="form-group">
                                                             <label> الي تاريخ</label>
                                                             <input class="form-control" type="date"/>
                                                            </div>
                                                        <button type="submit" class="btn btn-primary">
                                                            <span>بحث</span>
                                                            <i class="fa fa-search"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                                <div id="datatable_wrapper" class="dataTables_wrapper no-footer">
                                                    <div class="d-md-flex justify-content-between">

                                                        <div id="datatable_filter" class="dataTables_filter"><label><input type="search" class="" placeholder="بحث" aria-controls="datatable"></label></div>

                                                        <div class="dt-buttons"> <button class="btn btn-default" tabindex="0" aria-controls="datatable" type="button"><span>طباعة <i class="fa fa-print"></i></span></button> <button class="btn btn-success" tabindex="0" aria-controls="datatable" type="button"><span>اكسل <i class="fa fa-file-excel"></i></span></button> </div>

                                                    </div>
                                                    <table id="datatable" class="datatable table table-bordered table-striped dataTable no-footer" role="grid">
                                                        <thead>
                                                            <tr role="row">
                                                                <th class="sorting_disabled" rowspan="1" colspan="1" ># </th>
                                                                <th class="sorting_disabled" rowspan="1" colspan="1" > اسم
                                                                    الموظف</th>
                                                                <th class="sorting_disabled" rowspan="1" colspan="1" >
                                                                    التلفون</th>
                                                                <th class="sorting_disabled" rowspan="1" colspan="1" >
                                                                    الجنس</th>
                                                                <th class="sorting_disabled" rowspan="1" colspan="1" >
                                                                    المهنة</th>
                                                                   <th class="sorting_disabled" rowspan="1" colspan="1" >
                                                                    الفرع</th>
                                                                   <th class="sorting_disabled" rowspan="1" colspan="1" >
                                                                    الادارة</th>
                                                                <th class="sorting_disabled" rowspan="1" colspan="1" >
                                                                    الحالة</th>
                                                                <th class="sorting_disabled" rowspan="1" colspan="1" >
                                                                    خيارات</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                          @foreach($users as $data)
                                                            <tr role="row" class="odd">
                                                              <td>{{$data->emply_id}}</td>
                                                                 <td>{{$data->emply_nameAR}}</td>
                                                                 <td>{{$data->phone_jop}}</td>
                                                                 <td>{{$data->type}}</td>
                                                                 <td>{{$data->occupation}}</td>
                                                                 <td>{{$data->branch_nameAR}}</td>
                                                                 <td>{{$data->dept_name}}</td>
                                                                 <td>{{$data->empy_satus}}</td>
                                                                <td>
                                                                    <a class="btn btn-info btn-xs" href="{{  url('Assept')  }}/{{  $data->emply_id  }}"><i class="fa fa-eye"></i>
                                                                        عرض</a>
                                                                    <div class="dropdown d-inline-block">
                                                                        <button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                                                            <span>المزيد</span>
                                                                            <span class="caret"></span>

                                                                        </button>
                                                                        <div class="dropdown-menu" style="">
                                                                            <a href="{{ url('view-employee') }}" class="dropdown-item text-info">
                                                                                <i class="fa fa-eye"></i>
                                                                                <span>تفاصيل</span>
                                                                            </a>
                                                                            <a href="%D8%B7%D9%84%D8%A8%20%D8%A7%D8%AC%D8%A7%D8%B2%D8%A9.html" class="dropdown-item text-success">
                                                                                <i class="fa fa-plus"></i>
                                                                                <span>طلب اجازة</span>
                                                                            </a>
                                                                            <a href="" class="dropdown-item text-primary">
                                                                                <i class="fa fa-plus"></i>
                                                                                <span>طلب سلفه</span>
                                                                            </a>
                                                                            <a href="#" class="dropdown-item text-info">
                                                                                <i class="fa fa-plus"></i>
                                                                                <span>طلب عهده</span>
                                                                            </a>

                                                                            <a href="edit-employee.html" class="dropdown-item text-warning">
                                                                                <i class="fa fa-edit"></i>
                                                                                <span>تعديل</span>
                                                                            </a>
                                                                            <a href="#" class="dropdown-item delete text-danger" data-form="#deleteForm-12127">
                                                                                <i class="fa fa-trash"></i>
                                                                                <span>حذف</span>
                                                                            </a>
                                                                        </div>
                                                                        <form id="deleteForm-12127" action="#" method="POST" novalidate="">
                                                                            <input type="hidden" name="_token" value="cAFJKjhjoqZ8XW0J41SJVlZeKazkTsCGGDp8H4Kb">
                                                                            <input type="hidden" name="_method" value="DELETE"> </form>
                                                                    </div>


                                                                </td>
                                                            </tr>
															 @endforeach
                                                        </tbody>
                                                    </table>
                                                    <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                                                        <ul class="pagination">
                                                          {{  $users->links() }}

														</ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                        <!-- /.card -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </section>
                        </div>

                        <div class="tab-pane fade" id="tabs-shelve" role="tabpanel" aria-labelledby="tabs-shelve-tab">
                            <section class="content">
                                <div class="modal fade" id="shelveModal" tabindex="-1" role="dialog" aria-labelledby="shelveModal" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="shelveModalLabel">اضافة</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <form action="emply_docSort" method="GET" novalidate="">
                                                <input type="hidden" name="_token" value="h101Moov2kEDoN7GAZ5dSATxgNsC62iHlz1B5MYZ">
                                                <div class="modal-body">
												 <div class="row">
                                                  <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="mr-2" for="qualifications">نوع الوثيقه </label>
                                                        <select class="custom-select qualifications" name="doc_type_id">
                                                           @foreach($sys_emply_doc_type as $data)
                                                         <option >{{$data->doc_type_id}}</option>
                                                          @endforeach
                                                       </select>
                                                     </div>
                                                 </div>
												 <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="mr-2" for="qualifications">اسم الوثيقة</label>
                                                        <select class="custom-select qualifications" name="doc_type_name">
                                                           @foreach($sys_emply_doc_type as $data)
                                                         <option >{{$data->doc_type_name}}</option>
                                                          @endforeach
                                                        </select>
                                                    </div>
                                                    </div>
                                                 <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="from-date">تاريخ الاصدار</label>
                                                        <input type="date" name="date_release" id="from-date" value="2021-09-25" class="form-control">
                                                    </div>
													</div>
													 <div class="col-lg-6">
													 <div class="form-group">
                                                        <label for="from-date">تاريخ الانتهاء</label>
                                                        <input type="date" name="date_Expiry" id="from-date" value="2021-09-25" class="form-control">
                                                    </div>
													</div>
                                                    <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>جهة الاصدار</label>
                                                        <input name="issuer" type="text" class="form-control">
                                                    </div>
                                                    </div>
													<div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="mr-2" for="qualifications">فئة الوثيقه </label>
                                                        <select class="custom-select qualifications" name="doc_category">
                                                           @foreach($users as $data)
                                                         <option >{{$data->emply_nameAR}}</option>
                                                          @endforeach
                                                        </select>
                                                    </div>
													</div>
													<div class="col-lg-4">
                                                        <div class="form-group">
                                                        <label class="mr-2" for="qualifications">اسم الفرع</label>
                                                          <select class="custom-select qualifications" name="branch_nameAR" id="branch_nameAR" value="{{ old('branch_nameAR') }}">
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
													<div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label class="mr-2" for="qualifications"> مرفق</label>
                                                        <input type="date" name="attached" id="from-date" value="2021-09-25" class="form-control">
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
                                        <div class="card text-right shadow-none">
                                            <div class="d-lg-flex bg-gray-light justify-content-lg-between px-4 py-3">
                                                <h4 class="align-self-center">
                                                    عرض قائمة وثائق الموظفين
                                                </h4>
                                                <div class="align-self-center">
                                                    <button class="btn btn-primary departments" data-toggle="modal" data-target="#shelveModal">
                                                        <i class="fa fa-plus"></i> اضافة
                                                    </button>

                                                    <button type="button" class="btn btn-tool" data-card-widget="maximize">
                                                        <i class="fas fa-expand"></i>
                                                    </button>
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
                                                            <label class="mr-2" for="class">نوع الوثيقه </label>
                                                            <select name="class" id="class" class=" custom-select" data-select2-id="class" tabindex="-1" aria-hidden="true">
                                                                <option value="all" selected="" data-select2-id="2">الكل</option>
                                                                <option value="1">الفرع  1</option>
                                                                <option value="11">الفرع  2</option>
                                                            </select>
                                                        </div>



                                                           <div class="form-group">
                                                             <label> من تاريخ</label>
                                                             <input class="form-control" type="date"/>
                                                            </div>
                                                            <div class="form-group">
                                                             <label> الي تاريخ</label>
                                                             <input class="form-control" type="date"/>
                                                             </div>
                                                        <button type="submit" class="btn btn-primary">
                                                            <span>بحث</span>
                                                            <i class="fa fa-search"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                                <div id="datatable_wrapper" class="dataTables_wrapper no-footer">
                                                    <div class="d-md-flex justify-content-between">

                                                        <div id="datatable_filter" class="dataTables_filter"><label><input type="search" class="" placeholder="بحث" aria-controls="datatable"></label></div>

                                                        <div class="dt-buttons"> <button class="btn btn-default" tabindex="0" aria-controls="datatable" type="button"><span>طباعة <i class="fa fa-print"></i></span></button> <button class="btn btn-success" tabindex="0" aria-controls="datatable" type="button"><span>اكسل <i class="fa fa-file-excel"></i></span></button> </div>

                                                    </div>
                                                    <table id="datatable" class="datatable table table-bordered table-striped dataTable no-footer" role="grid">
                                                        <thead>
                                                            <tr role="row">
                                                                <th class="sorting_disabled" rowspan="1" colspan="1"># </th>
                                                                <th class="sorting_disabled" rowspan="1" colspan="1">
                                                                    نوع الوثيقه</th>
                                                                <th class="sorting_disabled" rowspan="1" colspan="1"> رقم
                                                                    الوثيقة</th>

                                                                <th class="sorting_disabled" rowspan="1" colspan="1"> اسم
                                                                    الوثيقة</th>

                                                                <th class="sorting_disabled" rowspan="1" colspan="1">
                                                                    الموظف</th>

                                                                <th class="sorting_disabled" rowspan="1" colspan="1">
                                                                    الخيارات</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                              @foreach($sys_emply_doc as $data)
                                                            <tr role="row" class="odd">
                                                                <td>{{$data->doc_type_id}}</td>
                                                                <td>{{$data->doc_Name}}</td>
                                                                <td>{{$data->emply_nameAR}}</td>
                                                                <td>{{$data->emply_nameAR}}</td>
                                                                <td>{{$data->emply_nameAR}}</td>
                                                                <td>
                                                                    <a class="btn btn-info btn-xs" href="{{ url('view-employee-documents') }}"><i class="fa fa-eye"></i>
                                                                        عرض</a>
                                                                    <div class="dropdown d-inline-block">
                                                                        <button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                                                            <span>المزيد</span>
                                                                            <span class="caret"></span>

                                                                        </button>
                                                                        <div class="dropdown-menu" style="">
                                                                            <a href="view-employee-documents.html" class="dropdown-item text-info">
                                                                                <i class="fa fa-eye"></i>
                                                                                <span>تفاصيل</span>
                                                                            </a>

                                                                            <a href="view-stores.html" class="dropdown-item text-info">
                                                                                <i class="fa fa-eye"></i>
                                                                                <span> تفاصيل المخزن </span>
                                                                            </a>

                                                                            <button data-toggle="modal" data-target="#shelveModal" class="dropdown-item text-warning">
                                                                                <i class="fa fa-edit"></i>
                                                                                <span>تعديل</span>
                                                                            </button>
                                                                            <a href="#" class="dropdown-item delete text-danger" data-form="#deleteForm-12127">
                                                                                <i class="fa fa-trash"></i>
                                                                                <span>حذف</span>
                                                                            </a>
                                                                        </div>
                                                                        <form id="deleteForm-12127" action="#" method="POST" novalidate="">
                                                                            <input type="hidden" name="_token" value="cAFJKjhjoqZ8XW0J41SJVlZeKazkTsCGGDp8H4Kb">
                                                                            <input type="hidden" name="_method" value="DELETE"> </form>
                                                                    </div>


                                                                </td>
                                                            </tr>
															 @endforeach
                                                        </tbody>
                                                    </table>
                                                    <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                                                        <ul class="pagination">
                                                          {{  $sys_emply_doc->links() }}

														 </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                        <!-- /.card -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </section>
                        </div>

                        <div class="tab-pane fade" id="tabs-OPEN_BALANCE" role="tabpanel" aria-labelledby="tabs-OPEN_BALANCE-tab">
                            <section class="content">
                                <div class="modal fade" id="OPEN_BALANCEModal" tabindex="-1" role="dialog" aria-labelledby="OPEN_BALANCEModalLabel" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="OPEN_BALANCEModalLabel">اضافة</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <form  method="post" action="{{ route('files.evidence') }}" enctype="multipart/form-data">
						                     @csrf

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
														  @foreach($users as $data2)
														  <option value="{{ $data2->dept_name }}">{{ ucfirst($data2->dept_name) }}</option>
                                                            @endforeach
                                                          </select>
                                                    </div>
													</div>
													<div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="mr-2" for="qualifications">اسم الموظف</label>
                                                         <select class="custom-select qualifications" name="emply_nameAR" id="emply_nameAR" value="emply_nameAR">
                                                         <option value="">*اختار الموظف</option>
														  @foreach($users as $data2)
														  <option value="{{ $data2->emply_nameAR }}">{{ ucfirst($data2->emply_nameAR) }}</option>
                                                            @endforeach
                                                         </select>
                                                    </div>
                                                    </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="mr-2" for="qualifications">
                                                                    نوع الاثبات
                                                                </label>
                                                               <select class="custom-select qualifications" name="proof_type">
                                                           @foreach($users as $data)
                                                         <option >{{$data->emply_nameAR}}</option>
                                                          @endforeach
                                                        </select>
                                                            </div>

                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label>رقم الاثبات </label>
                                                                <input type="text" class="form-control" name="proof_number">
                                                            </div>

                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label>جهه الاصدار </label>
                                                                <input type="text" class="form-control" name="issuer">
                                                            </div>

                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="mr-2" for="qualifications">البلد </label>
                                                            <select class="custom-select qualifications" name="country">
                                                           @foreach($users as $data)
                                                            <option >{{$data->emply_nameAR}}</option>
                                                          @endforeach
                                                            </select>
                                                            </div>

                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label>تاريخ الاصدار </label>
                                                                <input type="date" class="form-control" name="date_release">
                                                            </div>

                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label>تاريخ الانتهاء </label>
                                                                <input type="date" class="form-control" name="date_expiry">
                                                            </div>

                                                        </div>





                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label>رقم مكتب العمل</label>
                                                                <input type="number" class="form-control" name="phone_offwork">
                                                            </div>

                                                        </div>

                                                    </div>


                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label> الكفيل </label>
                                                                <input type="text" class="form-control" name="guarantor">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label>ت الكفيل </label>
                                                                <input type="number" class="form-control" name="phone_guarantor">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label>مرفق </label>
                                                     <input type="file" name="files[]" multiple class="form-control" accept="image/*">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>ملاحظات</label>
                                                       <input type="text" class="form-control" name="note">
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


                                <div class="modal fade" id="edit_BALANCEModalLabel" tabindex="-1" role="dialog" aria-labelledby="edit_BALANCEModalLabel" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="edit_BALANCEModalLabel">تعديل</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <form action="" method="post" novalidate="">
                                                <input type="hidden" name="_token" value="h101Moov2kEDoN7GAZ5dSATxgNsC62iHlz1B5MYZ">
                                                <div class="modal-body">

                                                    <div class="row">
                                                        <div class="col-lg-6">
														 <div class="form-group">
                                                                <label class="mr-2" for="qualifications">
                                                                    اسم الفرع
                                                                </label>
                                                                <select class="custom-select qualifications">
                                                                    <option value="1"> اسم الفرع
                                                                    </option>
                                                                    <option value="1"> اسم الفرغ
                                                                    </option>

                                                                </select>
                                                            </div>
															 <div class="form-group">
                                                                <label class="mr-2" for="qualifications">
                                                                    اسم القسم
                                                                </label>
                                                                <select class="custom-select qualifications">
                                                                    <option value="1"> اسم القسم
                                                                    </option>
                                                                    <option value="1"> اسم القسم
                                                                    </option>

                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="mr-2" for="qualifications">
                                                                    اسم الموظف
                                                                </label>
                                                                <select class="custom-select qualifications">
                                                                    <option value="1"> اسم الموظف
                                                                    </option>
                                                                    <option value="1"> اسم الموظف
                                                                    </option>

                                                                </select>
                                                            </div>

                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="mr-2" for="qualifications">
                                                                    نوع الاثبات
                                                                </label>
                                                                <select class="custom-select qualifications">
                                                                    <option value="1"> نوع الاثبات
                                                                    </option>
                                                                    <option value="1"> نوع الاثبات
                                                                    </option>

                                                                </select>
                                                            </div>

                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label>رقم الاثبات </label>
                                                                <input type="text" class="form-control">
                                                            </div>

                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label>جهه الاصدار </label>
                                                                <input type="text" class="form-control">
                                                            </div>

                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="mr-2" for="qualifications">البلد </label>
                                                                <select class="custom-select qualifications">
                                                                    <option value="1"> البلد </option>
                                                                    <option value="1"> البلد </option>
                                                                </select>
                                                            </div>

                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label>تاريخ الاصدار </label>
                                                                <input type="text" class="form-control">
                                                            </div>

                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label>تاريخ الانتهاء </label>
                                                                <input type="text" class="form-control">
                                                            </div>

                                                        </div>





                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label>رقم مكتب العمل</label>
                                                                <input type="text" class="form-control">
                                                            </div>

                                                        </div>

                                                    </div>


                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label> الكفيل </label>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label>ت الكفيل </label>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label>مرفق </label>
                                                            <input type="file" class="form-control">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>ملاحظات</label>
                                                        <textarea class="form-control" rows="3"></textarea>
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
                                        <div class="card text-right shadow-none">
                                            <div class="d-lg-flex bg-gray-light justify-content-lg-between px-4 py-3">
                                                <h4 class="align-self-center"> اثباتات الموظف </h4>
                                                <div class="align-self-center">
                                                    <button class="btn btn-primary departments" data-toggle="modal" data-target="#OPEN_BALANCEModal">
                                                        <i class="fa fa-plus"></i> اضافة
                                                    </button>

                                                    <button type="button" class="btn btn-tool" data-card-widget="maximize">
                                                        <i class="fas fa-expand"></i>
                                                    </button>
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
                                                            <label class="mr-2" for="class">نوع الوثيقه</label>
                                                            <select name="class" id="class" class=" custom-select" data-select2-id="class" tabindex="-1" aria-hidden="true">
                                                                <option value="all" selected="" data-select2-id="2">الكل</option>
                                                                <option value="1"> الموظفين 1</option>
                                                                <option value="11"> الموظفين 2</option>
                                                            </select>
                                                        </div>


                                                        <div class="form-group mr-4">
                                                            <label class="mr-2"> من تاريخ </label>
                                                            <input type="date" name="from_date" id="from-date" value="2021-09-25" class="form-control">
                                                        </div>
                                                         <div class="form-group mr-4">
                                                            <label class="mr-2"> الي  تاريخ </label>
                                                            <input type="date" name="from_date" id="from-date" value="2021-09-25" class="form-control">
                                                        </div>



                                                        <button type="submit" class="btn btn-primary">
                                                            <span>بحث</span>
                                                            <i class="fa fa-search"></i>
                                                        </button>
                                                    </form>

                                                </div>


                                                <div id="datatable_wrapper" class="dataTables_wrapper no-footer">
                                                    <div class="d-md-flex justify-content-between">

                                                        <div id="datatable_filter" class="dataTables_filter"><label><input type="search" class="" placeholder="بحث" aria-controls="datatable"></label></div>

                                                        <div class="dt-buttons"> <button class="btn btn-default" tabindex="0" aria-controls="datatable" type="button"><span>طباعة <i class="fa fa-print"></i></span></button> <button class="btn btn-success" tabindex="0" aria-controls="datatable" type="button"><span>اكسل <i class="fa fa-file-excel"></i></span></button> </div>

                                                    </div>
                                                    <table id="datatable" class="datatable table table-bordered table-striped dataTable no-footer" role="grid">
                                                        <thead>
                                                            <tr role="row">
                                                                <th class="sorting_disabled" rowspan="1" colspan="1"># </th>
                                                                <th class="sorting_disabled" rowspan="1" colspan="1"> رقم
                                                                    الاثبات</th>

                                                                <th class="sorting_disabled" rowspan="1" colspan="1"> اسم
                                                                    الوثيقة</th>
                                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 172px;"> نوع الوثيقه
                                                                </th>

                                                                <th class="sorting_disabled" rowspan="1" colspan="1">
                                                                    الموظف</th>

                                                                <th class="sorting_disabled" rowspan="1" colspan="1">
                                                                    الخيارات</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                          @foreach($sys_evidence as $data)
                                                            <tr role="row" class="odd">
                                                                <td>{{$data->serial_number }}</td>
                                                                <td>{{$data->proof_number}}</td>
                                                                <td>{{$data->proof_type}}</td>
                                                                <td>{{$data->basic_salary}}</td>
                                                                <td>{{$data->emply_nameAR}}</td>
                                                                <td>
                                                                    <a class="btn btn-info btn-xs" href="{{ url('view-employee-proofs') }}"><i class="fa fa-eye"></i>
                                                                        عرض</a>
                                                                    <div class="dropdown d-inline-block">
                                                                        <button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                                                            <span>المزيد</span>
                                                                            <span class="caret"></span>

                                                                        </button>
                                                                        <div class="dropdown-menu" style="">
                                                                            <a href="{{ url('view-employee-proofs') }}" class="dropdown-item text-info">
                                                                                <i class="fa fa-eye"></i>
                                                                                <span>تفاصيل</span>
                                                                            </a>


                                                                            <button data-toggle="modal" data-target="#edit_BALANCEModalLabel" class="dropdown-item text-warning">
                                                                                <i class="fa fa-edit"></i>
                                                                                <span>تعديل</span>
                                                                            </button>
                                                                            <a href="#" class="dropdown-item delete text-danger" data-form="#deleteForm-12127">
                                                                                <i class="fa fa-trash"></i>
                                                                                <span>حذف</span>
                                                                            </a>
                                                                        </div>
                                                                        <form id="deleteForm-12127" action="#" method="POST" novalidate="">
                                                                            <input type="hidden" name="_token" value="cAFJKjhjoqZ8XW0J41SJVlZeKazkTsCGGDp8H4Kb">
                                                                            <input type="hidden" name="_method" value="DELETE"> </form>
                                                                    </div>


                                                                </td>
                                                            </tr>
															  @endforeach
                                                        </tbody>
                                                    </table>
                                                    <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                                                        <ul class="pagination">
                                                           {{  $sys_evidence->links() }}

														</ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                        <!-- /.card -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </section>
                        </div>

                        <div class="tab-pane fade " id="tabs-warehouse" role="tabpanel" aria-labelledby="tabs-warehouse-tab">
                            <section class="content">
                                <div class="modal fade" id="jobtitlestModal" tabindex="-1" role="dialog" aria-labelledby="jobtitlestModalLabel" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="jobtitlestModalLabel">اضافة</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                             <form action="{{ url('socialseuritiesSort')}}" method="GET" novalidate="">

                                                <div class="modal-body">

                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label for="from-date">تاريخ الاشتراك</label>
                                                                <input type="date" name="subscription_name" id="from-date" value="2021-09-25" class="form-control">
                                                            </div>
                                                        </div>
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
														  @foreach($users as $data2)
														  <option value="{{ $data2->dept_name }}">{{ ucfirst($data2->dept_name) }}</option>
                                                            @endforeach
                                                          </select>
                                                    </div>
													</div>
													<div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="mr-2" for="qualifications">اسم الموظف</label>
                                                         <select class="custom-select qualifications" name="emply_nameAR" id="emply_nameAR" value="emply_nameAR">
                                                         <option value="">*اختار الموظف</option>
														  @foreach($users as $data2)
														  <option value="{{ $data2->emply_nameAR }}">{{ ucfirst($data2->emply_nameAR) }}</option>
                                                            @endforeach
                                                         </select>
                                                    </div>
                                                    </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="title"> حالة المشترك</label>
                                                                <input type="number" name="Joint_status"  class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="title">رقم مكتب العمل</label>
                                                                <input type="number" name="phone_offwork" class="form-control">
                                                            </div>
                                                        </div>
														                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="title">تاريخ الاستبعاد</label>
                                                                <input type="date" name="date_exclusion" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="title"> الاجر الاساسي </label>
                                                                <input type="number" name="wage_basic" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="title"> الاجر الخاضع </label>
                                                                <input type="number" name="subscription_wage" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="title"> نسبة الاجر على الموظف </label>
                                                                <input type="number" name="emply_rate" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="title"> نسبة الاجر على الشركة </label>
                                                                <input type="number" name="comp_rate" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="title"> بدل عمولات </label>
                                                                <input type="number" name="allowance_comm"  class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="title"> بدل سكن </label>
                                                                <input type="number" name="allowance_housing" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="title"> بدلات اخرى </label>
                                                                <input type="number" name="allowance_other" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>ملاحظات</label>
                                                        <textarea class="form-control" placeholder="ملاحظات" name="Attached" rows="3"></textarea>
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
                                        <div class="card text-right shadow-none">
                                            <div class="d-lg-flex bg-gray-light justify-content-lg-between px-4 py-3">
                                                <h4 class="align-self-center">
                                                    التامينات الاجتماعية
                                                </h4>
                                                <div class="align-self-center">
                                                    <button class="btn btn-primary departments" data-toggle="modal" data-target="#jobtitlestModal"><i class="fa fa-plus"></i> اضافة</button>

                                                    <button type="button" class="btn btn-tool" data-card-widget="maximize">
                                                        <i class="fas fa-expand"></i>
                                                    </button>
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


                                                        <div class="form-group mr-4">
                                                            <label class="mr-2"> من تاريخ </label>
                                                            <input type="date" name="from_date" id="from-date" value="2021-09-25" class="form-control">
                                                        </div>
                                                        <div class="form-group mr-4">
                                                            <label class="mr-2"> الي  تاريخ </label>
                                                            <input type="date" name="from_date" id="from-date" value="2021-09-25" class="form-control">
                                                        </div>



                                                        <button type="submit" class="btn btn-primary">
                                                            <span>بحث</span>
                                                            <i class="fa fa-search"></i>
                                                        </button>
                                                    </form>
                                                </div>


                                                <div id="datatable_wrapper" class="dataTables_wrapper no-footer">
                                                    <div class="d-md-flex justify-content-between">

                                                        <div id="datatable_filter" class="dataTables_filter"><label><input type="search" class="" placeholder="بحث" aria-controls="datatable"></label></div>

                                                        <div class="dt-buttons"> <button class="btn btn-default" tabindex="0" aria-controls="datatable" type="button"><span>طباعة <i class="fa fa-print"></i></span></button> <button class="btn btn-success" tabindex="0" aria-controls="datatable" type="button"><span>اكسل <i class="fa fa-file-excel"></i></span></button> </div>

                                                    </div>
                                                    <table id="datatable" class="datatable table table-bordered table-striped dataTable no-footer" role="grid">
                                                        <thead>
                                                            <tr role="row">
                                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 172px;"># </th>
                                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 455px;">
                                                                    الموظف
                                                                </th>
                                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 455px;">
                                                                    تاريخ الاشتراك
                                                                </th>
                                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 455px;">
                                                                    الاجر الاساسي
                                                                </th>
                                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 455px;">
                                                                    الاجر الخاضع
                                                                </th>
                                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 455px;">
                                                                    بدل سكن
                                                                </th>
                                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 455px;">
                                                                    بدل عمولات
                                                                </th>
                                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 455px;">
                                                                    نسبة الاجر
                                                                </th>
                                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 859px;">
                                                                    والخيارات</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                           @foreach($sys_socialseurities as $data)
                                                            <tr role="row" class="odd">
															     <td>{{$data->subscription_id }}</td>
                                                                 <td>{{$data->emply_nameAR }}</td>
                                                                 <td>{{$data->subscription_name}}</td>
                                                                 <td>{{$data->wage_basic}}</td>
                                                                 <td>{{$data->subscription_wage}}</td>
                                                                 <td>{{$data->allowance_housing}}</td>
						                                    	 <td>{{$data->allowance_comm}}</td>
                                                                 <td>{{$data->contract_starting}}</td>

                                                                <td>
                                                                    <a class="btn btn-info btn-xs" href="{{ url('view-employee-social-security') }}"><i class="fa fa-eye"></i> عرض</a>
                                                                    <div class="dropdown d-inline-block">
                                                                        <button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                                                            <span>المزيد</span>
                                                                            <span class="caret"></span>

                                                                        </button>
                                                                        <div class="dropdown-menu" style="">
                                                                            <a href="{{ url('view-employee-social-security') }}" class="dropdown-item text-info">
                                                                                <i class="fa fa-eye"></i>
                                                                                <span>تفاصيل</span>
                                                                            </a>

                                                                            <a href="#" class="dropdown-item text-info">
                                                                                <i class="fa fa-eye"></i>
                                                                                <span>تفاصيل المخزن</span>
                                                                            </a>

                                                                            <button data-toggle="modal" data-target="#jobtitlestModal" class="dropdown-item text-warning">
                                                                                <i class="fa fa-edit"></i>
                                                                                <span>تعديل</span>
                                                                            </button>
                                                                            <a href="#" class="dropdown-item delete text-danger" data-form="#deleteForm-12127">
                                                                                <i class="fa fa-trash"></i>
                                                                                <span>حذف</span>
                                                                            </a>
                                                                        </div>
                                                                        <form id="deleteForm-12127" action="#" method="POST" novalidate="">
                                                                            <input type="hidden" name="_token" value="cAFJKjhjoqZ8XW0J41SJVlZeKazkTsCGGDp8H4Kb">
                                                                            <input type="hidden" name="_method" value="DELETE"> </form>
                                                                    </div>


                                                                </td>
                                                            </tr>
															 @endforeach
                                                        </tbody>
                                                    </table>
                                                    <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                                                        <ul class="pagination">
                                                           {{  $sys_socialseurities->links() }}

														</ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                        <!-- /.card -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </section>
                        </div>

                        <div class="tab-pane fade " id="tabs-1" role="tabpanel" aria-labelledby="tabs-1-tab">
                            <section class="content">
                                <div class="modal fade" id="jobtitlestModal2" tabindex="-1" role="dialog" aria-labelledby="jobtitlestModal2Label" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="jobtitlestModal2Label">اضافة</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                             <form action="{{ url('healthinsurancesSort')}}" method="GET" novalidate="">

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
														  @foreach($users as $data2)
														  <option value="{{ $data2->dept_name }}">{{ ucfirst($data2->dept_name) }}</option>
                                                            @endforeach
                                                          </select>
                                                    </div>
													</div>
													<div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="mr-2" for="qualifications">اسم الموظف</label>
                                                         <select class="custom-select qualifications" name="emply_nameAR" id="emply_nameAR" value="emply_nameAR">
                                                         <option value="">*اختار الموظف</option>
														  @foreach($users as $data2)
														  <option value="{{ $data2->emply_nameAR }}">{{ ucfirst($data2->emply_nameAR) }}</option>
                                                            @endforeach
                                                         </select>
                                                    </div>
                                                    </div>
													<div class="col-lg-6">
                                                    <div class="form-group mr-2">
                                                        <label class="mr-2" for="class"> شركة التأمين </label>
                                                        <select  name="ins_company" class=" custom-select" >
                                                            <option >اسم شركة 1</option>
                                                            <option >اسم شركة 2</option>
                                                        </select>
                                                    </div>
													</div>
													<div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="title"> فئه التامين</label>
                                                        <input type="number" name="ins_category" class="form-control">
                                                    </div>
													</div>
													<div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="title"> صلاحية التامينات</label>
                                                        <input type="number" name="ins_validity" class="form-control">
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
                                        <div class="card text-right shadow-none">
                                            <div class="d-lg-flex bg-gray-light justify-content-lg-between px-4 py-3">
                                                <h4 class="align-self-center">
                                                    التامينات الصحية
                                                </h4>
                                                <div class="align-self-center">
                                                    <button class="btn btn-primary departments" data-toggle="modal" data-target="#jobtitlestModal2"><i class="fa fa-plus"></i> اضافة</button>

                                                    <button type="button" class="btn btn-tool" data-card-widget="maximize">
                                                        <i class="fas fa-expand"></i>
                                                    </button>
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

                                                        <div class="form-group mr-4">
                                                            <label class="mr-2"> من تاريخ </label>
                                                            <input type="date" name="from_date" id="from-date" value="2021-09-25" class="form-control">
                                                        </div>
                                                         <div class="form-group mr-4">
                                                            <label class="mr-2"> الي  تاريخ </label>
                                                            <input type="date" name="from_date" id="from-date" value="2021-09-25" class="form-control">
                                                        </div>



                                                        <button type="submit" class="btn btn-primary">
                                                            <span>بحث</span>
                                                            <i class="fa fa-search"></i>
                                                        </button>
                                                    </form>
                                                </div>


                                                <div id="datatable_wrapper" class="dataTables_wrapper no-footer">
                                                    <div class="d-md-flex justify-content-between">

                                                        <div id="datatable_filter" class="dataTables_filter"><label><input type="search" class="" placeholder="بحث" aria-controls="datatable"></label></div>

                                                        <div class="dt-buttons"> <button class="btn btn-default" tabindex="0" aria-controls="datatable" type="button"><span>طباعة <i class="fa fa-print"></i></span></button> <button class="btn btn-success" tabindex="0" aria-controls="datatable" type="button"><span>اكسل <i class="fa fa-file-excel"></i></span></button> </div>

                                                    </div>
                                                    <table id="datatable" class="datatable table table-bordered table-striped dataTable no-footer" role="grid">
                                                        <thead>
                                                            <tr role="row">
                                                                <th class="sorting_disabled" rowspan="1" colspan="1" ># </th>
                                                                <th class="sorting_disabled" rowspan="1" colspan="1" >
                                                                    الموظف
                                                                </th>
                                                                <th class="sorting_disabled" rowspan="1" colspan="1" >
                                                                    فئه التامين
                                                                </th>
                                                                <th class="sorting_disabled" rowspan="1" colspan="1" >
                                                                    صلاحية التامين
                                                                </th>
                                                                <th class="sorting_disabled" rowspan="1" colspan="1" >
                                                                    شركة التامين
                                                                </th>
                                                                <th class="sorting_disabled" rowspan="1" colspan="1" >
                                                                    والخيارات</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($sys_healthinsurances as $data)
                                                            <tr role="row" class="odd">
															     <td>{{$data->inscard_id }}</td>
                                                                 <td>{{$data->emply_nameAR }}</td>
                                                                 <td>{{$data->ins_category}}</td>
                                                                 <td>{{$data->ins_validity}}</td>
                                                                 <td>{{$data->ins_company}}</td>

                                                                <td>

                                                                    <button class="btn btn-warning btn-xs departments update" data-action="#" data-title="خدمة العملاء" data-toggle="modal" data-target="#jobtitlestModal2"><i class="fa fa-edit"></i> تعديل</button>
                                                                    <button type="button" data-form="#deleteForm-1" class="btn btn-danger btn-xs delete"><i class="fa fa-trash"></i>
                                                                        <span>حذف</span> </button>

                                                                </td>
                                                            </tr>
															 @endforeach
                                                        </tbody>
                                                    </table>
                                                    <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                                                        <ul class="pagination">
                                                            {{  $sys_healthinsurances->links() }}

														</ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                        <!-- /.card -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </section>
                        </div>

                        <div class="tab-pane fade " id="tabs-2" role="tabpanel" aria-labelledby="tabs-2-tab">
                            <section class="content">
                                <div class="modal fade" id="jobtitlestModal3" tabindex="-1" role="dialog" aria-labelledby="jobtitlestModal3Label" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="jobtitlestModal3Label">اضافة</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                             <form action="{{ url('qualificationempliesSort')}}" method="GET" novalidate="">
                                                <input type="hidden" name="_token" value="h101Moov2kEDoN7GAZ5dSATxgNsC62iHlz1B5MYZ">
                                                <div class="modal-body">

                                                      <div class="col-lg-12">
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
													  <div class="col-lg-12">
													 <div class="form-group">
                                                        <label  class="mr-2" for="qualifications">اسم القسم</label>
                                                            <select class="custom-select qualifications" name="dept_name" id="dept_name" value="dept_name">
                                                          <option value="">*اختار القسم</option>
														  @foreach($users as $data2)
														  <option value="{{ $data2->dept_name }}">{{ ucfirst($data2->dept_name) }}</option>
                                                            @endforeach
                                                          </select>
                                                    </div>
													</div>
													<div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label class="mr-2" for="qualifications">اسم الموظف</label>
                                                         <select class="custom-select qualifications" name="emply_nameAR" id="emply_nameAR" value="emply_nameAR">
                                                         <option value="">*اختار الموظف</option>
														  @foreach($users as $data2)
														  <option value="{{ $data2->emply_nameAR }}">{{ ucfirst($data2->emply_nameAR) }}</option>
                                                            @endforeach
                                                         </select>
                                                    </div>
                                                    </div>
                                                    <div class="form-group mr-2">
                                                        <label class="mr-2" for="class"> المؤهل </label>
                                                       <select name="qualification" class=" custom-select" >
                                                         @foreach($sys_qualification as $data1)
                                                      <option>{{$data1->qualification_name }}</option>
                                                       @endforeach
                                                      </select>
                                                    </div>
                                                    <div class="form-group mr-2">
                                                        <label class="mr-2" for="class"> التخصص </label>
                                                        <select name="specialization" class=" custom-select" >
                                                         @foreach($sys_specialties as $data1)
                                                          <option>{{$data1->specialties_name }}</option>
                                                         @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group mr-2">
                                                        <label class="mr-2" for="class"> مكان الحصول علية </label>
                                                        <select name="place" class=" custom-select" >
                                                           @foreach($sys_specialties as $data1)
                                                           <option>{{$data1->specialties_name }}</option>
                                                           @endforeach
                                                       </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="title"> الجامعة </label>
                                                        <input type="text" name="university" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="title"> سنة التخرج</label>
                                                        <input type="number" name="year_graduation" class="form-control">
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
                                        <div class="card text-right shadow-none">
                                            <div class="d-lg-flex bg-gray-light justify-content-lg-between px-4 py-3">
                                                <h4 class="align-self-center">
                                                    المؤهلات
                                                </h4>
                                                <div class="align-self-center">
                                                    <button class="btn btn-primary departments" data-toggle="modal" data-target="#jobtitlestModal3"><i class="fa fa-plus"></i> اضافة</button>

                                                    <button type="button" class="btn btn-tool" data-card-widget="maximize">
                                                        <i class="fas fa-expand"></i>
                                                    </button>
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
                                                                <select name="class" id="class" class=" custom-select" data-select2-id="class" tabindex="-1" aria-hidden="true">
                                                                    <option value="all" selected="" data-select2-id="2">الكل</option>

                                                                </select>
                                                            </div>
                                                            <div class="form-group mr-2">
                                                                <label class="mr-2" for="class">المؤهل </label>
                                                                <select name="class" id="class" class=" custom-select" data-select2-id="class" tabindex="-1" aria-hidden="true">
                                                                    <option value="all" selected="" data-select2-id="2">الكل</option>

                                                                </select>
                                                            </div>


                                                        <div class="form-group mr-4">
                                                            <label class="mr-2"> من تاريخ </label>
                                                            <input type="date" name="from_date" id="from-date" value="2021-09-25" class="form-control">
                                                        </div>
                                                         <div class="form-group mr-4">
                                                            <label class="mr-2"> الي  تاريخ </label>
                                                            <input type="date" name="from_date" id="from-date" value="2021-09-25" class="form-control">
                                                        </div>



                                                        <button type="submit" class="btn btn-primary">
                                                            <span>بحث</span>
                                                            <i class="fa fa-search"></i>
                                                        </button>
														 </div>
                                                    </form>



                                                <div id="datatable_wrapper" class="dataTables_wrapper no-footer">
                                                    <div class="d-md-flex justify-content-between">

                                                        <div id="datatable_filter" class="dataTables_filter"><label><input type="search" class="" placeholder="بحث" aria-controls="datatable"></label></div>

                                                        <div class="dt-buttons"> <button class="btn btn-default" tabindex="0" aria-controls="datatable" type="button"><span>طباعة <i class="fa fa-print"></i></span></button> <button class="btn btn-success" tabindex="0" aria-controls="datatable" type="button"><span>اكسل <i class="fa fa-file-excel"></i></span></button> </div>

                                                    </div>
                                                    <table id="datatable" class="datatable table table-bordered table-striped dataTable no-footer" role="grid">
                                                        <thead>
                                                            <tr role="row">
                                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 172px;"># </th>
                                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 455px;">
                                                                    الموظف
                                                                </th>
                                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 455px;">
                                                                    المؤهل
                                                                </th>
                                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 455px;">
                                                                    التخصص
                                                                </th>
                                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 455px;">
                                                                    الجامعة
                                                                </th>
                                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 455px;">
                                                                    مكان الحصول
                                                                </th>
                                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 455px;">
                                                                    سنة التخرج
                                                                </th>
                                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 859px;">
                                                                    والخيارات</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                          @foreach($sys_qualificationemply as $data)
                                                            <tr role="row" class="odd">
                                                               <td>{{$data->qualification_id }}</td>
                                                                 <td>{{$data->emply_nameAR}}</td>
                                                                 <td>{{$data->qualification}}</td>
                                                                 <td>{{$data->specialization}}</td>
                                                                 <td>{{$data->university}}</td>
						           	                             <td>{{$data->place}}</td>
									                             <td>{{$data->year_graduation}}</td>

                                                                <td>

                                                                    <button class="btn btn-warning btn-xs departments update" data-action="#" data-title="خدمة العملاء" data-toggle="modal" data-target="#jobtitlestModal3"><i class="fa fa-edit"></i> تعديل</button>
                                                                    <button type="button" data-form="#deleteForm-1" class="btn btn-danger btn-xs delete"><i class="fa fa-trash"></i>
                                                                        <span>حذف</span> </button>

                                                                </td>
                                                            </tr>
															 @endforeach
                                                        </tbody>
                                                    </table>
                                                    <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                                                        <ul class="pagination">
                                                            {{  $sys_qualificationemply->links() }}

														</ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                        <!-- /.card -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </section>
                        </div>


                        <div class="tab-pane fade " id="tabs-4" role="tabpanel" aria-labelledby="tabs-4-tab">
                            <section class="content">
                                <div class="modal fade" id="jobtitlestModal4" tabindex="-1" role="dialog" aria-labelledby="jobtitlestModal4Label" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="jobtitlestModal4Label">اضافة</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <form action="{{ url('coursesSort')}}" method="GET" novalidate="">
                                                <div class="modal-body">

                                                       <div class="col-lg-12">
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
													  <div class="col-lg-12">
													 <div class="form-group">
                                                        <label  class="mr-2" for="qualifications">اسم القسم</label>
                                                            <select class="custom-select qualifications" name="dept_name" id="dept_name" value="dept_name">
                                                          <option value="">*اختار القسم</option>
														  @foreach($users as $data2)
														  <option value="{{ $data2->dept_name }}">{{ ucfirst($data2->dept_name) }}</option>
                                                            @endforeach
                                                          </select>
                                                    </div>
													</div>
													<div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label class="mr-2" for="qualifications">اسم الموظف</label>
                                                         <select class="custom-select qualifications" name="emply_nameAR" id="emply_nameAR" value="emply_nameAR">
                                                         <option value="">*اختار الموظف</option>
														  @foreach($users as $data2)
														  <option value="{{ $data2->emply_nameAR }}">{{ ucfirst($data2->emply_nameAR) }}</option>
                                                            @endforeach
                                                         </select>
                                                    </div>
                                                    </div>

                                                        <div class="col-lg-12">
                                                            <div class="form-group mr-2">
                                                                <label class="mr-2" for="class"> المسمي الوظيفي </label>
                                                                <select name="jop_name" class=" custom-select" >
                                                               @foreach($sys_jop as $data1)
                                                              <option>{{$data1->jop_nameAR }}</option>
                                                              @endforeach
                                                             </select>
                                                            </div>

                                                        </div>



                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group mr-2">
                                                                <label class="mr-2" for="class"> مجال الدورة </label>
                                                               <select name="courses_field" class=" custom-select" >
                                                               @foreach($sys_jop as $data1)
                                                              <option>{{$data1->jop_nameAR }}</option>
                                                              @endforeach
                                                             </select>
                                                            </div>

                                                        </div>
                                                        <div class="col-lg-6">

                                                            <div class="form-group">
                                                                <label for="title"> الجهة </label>
                                                                <input type="text" name="job_organisation" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="title"> تاريخ البدء</label>
                                                                <input type="date" name="date_release" id="from-date" value="2021-09-25" class="form-control">
                                                            </div>

                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="title"> تاريخ الانتهاء</label>
                                                                <input type="date" name="date_expiry" id="from-date" value="2021-09-25" class="form-control">
                                                            </div>

                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="title"> مدتها </label>
                                                                <input type="number" name="duration" class="form-control">
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
                                        <div class="card text-right shadow-none">
                                            <div class="d-lg-flex bg-gray-light justify-content-lg-between px-4 py-3">
                                                <h4 class="align-self-center">
                                                    الدورات
                                                </h4>
                                                <div class="align-self-center">
                                                    <button class="btn btn-primary departments" data-toggle="modal" data-target="#jobtitlestModal4"><i class="fa fa-plus"></i> اضافة</button>

                                                <button type="button" class="btn btn-tool" data-card-widget="maximize">
                                                        <i class="fas fa-expand"></i>
                                                    </button>
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
                                                                <label class="mr-2" for="class">المسمي الوظيفي </label>
                                                                <select name="class" id="class" class=" custom-select" data-select2-id="class" tabindex="-1" aria-hidden="true">
                                                                    <option value="all" selected="" data-select2-id="2">الكل</option>

                                                                </select>
                                                            </div>

                                                        <div class="form-group mr-4">
                                                            <label class="mr-2"> من تاريخ </label>
                                                            <input type="date" name="from_date" id="from-date" value="2021-09-25" class="form-control">
                                                        </div>
                                                         <div class="form-group mr-4">
                                                            <label class="mr-2"> الي  تاريخ </label>
                                                            <input type="date" name="from_date" id="from-date" value="2021-09-25" class="form-control">
                                                        </div>



                                                        <button type="submit" class="btn btn-primary">
                                                            <span>بحث</span>
                                                            <i class="fa fa-search"></i>
                                                        </button>
                                                    </form>
                                                </div>

                                                <div id="datatable_wrapper" class="dataTables_wrapper no-footer">
                                                    <div class="d-md-flex justify-content-between">

                                                        <div id="datatable_filter" class="dataTables_filter"><label><input type="search" class="" placeholder="بحث" aria-controls="datatable"></label></div>

                                                        <div class="dt-buttons"> <button class="btn btn-default" tabindex="0" aria-controls="datatable" type="button"><span>طباعة <i class="fa fa-print"></i></span></button> <button class="btn btn-success" tabindex="0" aria-controls="datatable" type="button"><span>اكسل <i class="fa fa-file-excel"></i></span></button> </div>

                                                    </div>
                                                    <table id="datatable" class="datatable table table-bordered table-striped dataTable no-footer" role="grid">
                                                        <thead>
                                                            <tr role="row">
                                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 172px;"># </th>
                                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 455px;">
                                                                    الموظف
                                                                </th>
                                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 455px;">
                                                                    مجال الدورة
                                                                </th>
                                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 455px;">
                                                                    المسمي الوظيفي
                                                                </th>
                                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 455px;">
                                                                    الجهة
                                                                </th>
                                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 455px;">
                                                                    تاريخ البدء
                                                                </th>
                                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 455px;">
                                                                    تاريخ الانتهاء
                                                                </th>
                                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 455px;">
                                                                    مدتها
                                                                </th>
                                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 859px;">
                                                                    والخيارات</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                              @foreach($sys_courses as $data)
                                                            <tr role="row" class="odd">
                                                                <td>{{$data->courses_id }}</td>
                                                                 <td>{{$data->emply_nameAR}}</td>
                                                                 <td>{{$data->courses_field}}</td>
                                                                 <td>{{$data->jop_name}}</td>
                                                                 <td>{{$data->job_organisation}}</td>
						           	                             <td>{{$data->date_release}}</td>
									                             <td>{{$data->date_expiry}}</td>
                                                                 <td>{{$data->duration}}</td>

                                                                <td>

                                                                    <button class="btn btn-warning btn-xs departments update" data-action="#" data-title="خدمة العملاء" data-toggle="modal" data-target="#jobtitlestModal4"><i class="fa fa-edit"></i> تعديل</button>
                                                                    <button type="button" data-form="#deleteForm-1" class="btn btn-danger btn-xs delete"><i class="fa fa-trash"></i>
                                                                        <span>حذف</span> </button>

                                                                </td>
                                                            </tr>
															 @endforeach
                                                        </tbody>
                                                    </table>
                                                    <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                                                        <ul class="pagination">
                                                         {{  $sys_courses->links() }}

														</ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                        <!-- /.card -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </section>
                        </div>

                        <div class="tab-pane fade " id="tabs-5" role="tabpanel" aria-labelledby="tabs-5-tab">

                            <section class="content">
                                <div class="modal fade" id="jobtitlestModal5" tabindex="-1" role="dialog" aria-labelledby="jobtitlestModal5Label" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="jobtitlestModal5Label">اضافة</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <form action="job-titles.html" method="post" novalidate="">
                                                <input type="hidden" name="_token" value="h101Moov2kEDoN7GAZ5dSATxgNsC62iHlz1B5MYZ">
                                                <div class="modal-body">
                                                  <div class="form-group mr-2">
                                                        <label class="mr-2" for="class"> الفرع </label>
                                                        <select name="class" id="class" class=" custom-select" data-select2-id="class" tabindex="-1" aria-hidden="true">
                                                            <option value="1">اسم الفرع 1</option>
                                                            <option value="11">اسم الفرع 2</option>
                                                        </select>
                                                    </div>
													<div class="form-group mr-2">
                                                        <label class="mr-2" for="class"> القسم </label>
                                                        <select name="class" id="class" class=" custom-select" data-select2-id="class" tabindex="-1" aria-hidden="true">
                                                            <option value="1">اسم القسم 1</option>
                                                            <option value="11">اسم القسم 2</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group mr-2">
                                                        <label class="mr-2" for="class"> الموظف </label>
                                                        <select name="class" id="class" class=" custom-select" data-select2-id="class" tabindex="-1" aria-hidden="true">
                                                            <option value="1">اسم الموظف 1</option>
                                                            <option value="11">اسم الموظف 2</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="title"> اللغة الام </label>
                                                        <input type="number" class="form-control">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="title"> تقييم اللغة </label>
                                                        <input type="number" class="form-control">
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
                                        <div class="card text-right shadow-none">
                                            <div class="d-lg-flex bg-gray-light justify-content-lg-between px-4 py-3">
                                                <h4 class="align-self-center">
                                                    اللغات
                                                </h4>
                                                <div class="align-self-center">
                                                    <button class="btn btn-primary departments" data-toggle="modal" data-target="#jobtitlestModal5"><i class="fa fa-plus"></i> اضافة</button>

                                                    <button type="button" class="btn btn-tool" data-card-widget="maximize">
                                                        <i class="fas fa-expand"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body">

                                                <div id="datatable_wrapper" class="dataTables_wrapper no-footer">
                                                    <div class="d-md-flex justify-content-between">

                                                        <div id="datatable_filter" class="dataTables_filter"><label><input type="search" class="" placeholder="بحث" aria-controls="datatable"></label></div>

                                                        <div class="dt-buttons"> <button class="btn btn-default" tabindex="0" aria-controls="datatable" type="button"><span>طباعة <i class="fa fa-print"></i></span></button> <button class="btn btn-success" tabindex="0" aria-controls="datatable" type="button"><span>اكسل <i class="fa fa-file-excel"></i></span></button> </div>

                                                    </div>
                                                    <table id="datatable" class="datatable table table-bordered table-striped dataTable no-footer" role="grid">
                                                        <thead>
                                                            <tr role="row">
                                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 172px;"># </th>
                                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 455px;">
                                                                    الموظف
                                                                </th>
                                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 455px;">
                                                                    اللغة الام
                                                                </th>
                                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 455px;">
                                                                    تقييم اللغة
                                                                </th>

                                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 859px;">
                                                                    والخيارات</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                            <tr role="row" class="odd">
                                                                <td>1</td>
                                                                <td> الموظف </td>
                                                                <td>اللغة</td>
                                                                <td>8.5</td>
                                                                <td>
                                                                    <button class="btn btn-warning btn-xs departments update" data-action="#" data-title="خدمة العملاء" data-toggle="modal" data-target="#jobtitlestModal5"><i class="fa fa-edit"></i> تعديل</button>
                                                                    <button type="button" data-form="#deleteForm-1" class="btn btn-danger btn-xs delete"><i class="fa fa-trash"></i>
                                                                        <span>حذف</span> </button>

                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                                                        <ul class="pagination">
                                                            <li class="paginate_button page-item previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">السابق</a></li>
                                                            <li class="paginate_button page-item active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                                            <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                                            <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                                                            <li class="paginate_button page-item next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0" class="page-link">التالي</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                        <!-- /.card -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </section>
                        </div>





                          <div class="tab-pane fade " id="tabs-7" role="tabpanel" aria-labelledby="tabs-7-tab">

                            <section class="content">
                                <div class="modal fade" id="exprtitlestModal5" tabindex="-1" role="dialog" aria-labelledby="exprtitlestModal5" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="jobtitlestModal5Label">اضافة</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <form  method="post" action="{{ route('files.experiences') }}" enctype="multipart/form-data">
						                              @csrf
                                                <div class="modal-body ">

                                                    <div class="col-lg-12">
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
													  <div class="col-lg-12">
													 <div class="form-group">
                                                        <label  class="mr-2" for="qualifications">اسم القسم</label>
                                                            <select class="custom-select qualifications" name="dept_name" id="dept_name" value="dept_name">
                                                          <option value="">*اختار القسم</option>
														  @foreach($users as $data2)
														  <option value="{{ $data2->dept_name }}">{{ ucfirst($data2->dept_name) }}</option>
                                                            @endforeach
                                                          </select>
                                                    </div>
													</div>
													<div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label class="mr-2" for="qualifications">اسم الموظف</label>
                                                         <select class="custom-select qualifications" name="emply_nameAR" id="emply_nameAR" value="emply_nameAR">
                                                         <option value="">*اختار الموظف</option>
														  @foreach($users as $data2)
														  <option value="{{ $data2->emply_nameAR }}">{{ ucfirst($data2->emply_nameAR) }}</option>
                                                            @endforeach
                                                         </select>
                                                    </div>
                                                    </div>

                                                    <div class="form-group ">
                                                        <label for="title">  الخبرة </label>
                                                        <input type="number"  name="experiences"  class="form-control">
                                                    </div>

                                                     <div class="form-group  col-md-12">
                                                        <label for="title">  االمسمي الوظيفي </label>
                                                       <select name="jop_name" class=" custom-select" >
                                                          @foreach($sys_jop as $data1)
                                                              <option>{{$data1->jop_nameAR }}</option>
                                                              @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="title">  الجهه  </label>
                                                        <input name="location_job" type="text" class="form-control">
                                                    </div>
                                                      <div class="form-group">
                                                        <label for="title">  تاريخ بداية العمل  </label>
                                                        <input type="date" name="date_start" class="form-control">
                                                    </div>
                                                        <div class="form-group">
                                                        <label for="title">  تاريخ نهاية العمل  </label>
                                                        <input type="date" name="date_end" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="title">    سبب نهاية العمل  </label>
                                                        <input type="text" name="finishing_work" class="form-control">
                                                    </div>


                                                    <div class="form-group">
                                                        <label for="title"> تقييم الموظف </label>
                                                        <input type="number"  name="emply_evaluation" class="form-control">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="title"> مرفق  </label>
                                                        <input type="file" name="files[]" multiple class="form-control" accept="image/*">
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
                                        <div class="card text-right shadow-none">
                                            <div class="d-lg-flex bg-gray-light justify-content-lg-between px-4 py-3">
                                                <h4 class="align-self-center">
                                                    الخبرات
                                                </h4>
                                                <div class="align-self-center">
                                                    <button class="btn btn-primary departments" data-toggle="modal" data-target="#exprtitlestModal5"><i class="fa fa-plus"></i> اضافة</button>

                                                    <button type="button" class="btn btn-tool" data-card-widget="maximize">
                                                        <i class="fas fa-expand"></i>
                                                    </button>
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


                                                        <div class="form-group mr-4">
                                                            <label class="mr-2"> من تاريخ </label>
                                                            <input type="date" name="from_date" id="from-date" value="2021-09-25" class="form-control">
                                                        </div>
                                                        <div class="form-group mr-4">
                                                            <label class="mr-2"> الي  تاريخ </label>
                                                            <input type="date" name="from_date" id="from-date" value="2021-09-25" class="form-control">
                                                        </div>



                                                        <button type="submit" class="btn btn-primary">
                                                            <span>بحث</span>
                                                            <i class="fa fa-search"></i>
                                                        </button>
                                                    </form>
                                                </div>

                                                <div id="datatable_wrapper" class="dataTables_wrapper no-footer">
                                                    <div class="d-md-flex justify-content-between">

                                                        <div id="datatable_filter" class="dataTables_filter"><label><input type="search" class="" placeholder="بحث" aria-controls="datatable"></label></div>

                                                        <div class="dt-buttons"> <button class="btn btn-default" tabindex="0" aria-controls="datatable" type="button"><span>طباعة <i class="fa fa-print"></i></span></button> <button class="btn btn-success" tabindex="0" aria-controls="datatable" type="button"><span>اكسل <i class="fa fa-file-excel"></i></span></button> </div>

                                                    </div>
                                                    <table id="datatable" class="datatable table table-bordered table-striped dataTable no-footer" role="grid">
                                                        <thead>
                                                            <tr role="row">
                                                                <th class="sorting_disabled" rowspan="1" colspan="1" ># </th>
                                                                <th class="sorting_disabled" rowspan="1" colspan="1" >
                                                                    الموظف
                                                                </th>
                                                                <th class="sorting_disabled" rowspan="1" colspan="1" >
                                                                  الخبرة

                                                                </th>
                                                                <th class="sorting_disabled" rowspan="1" colspan="1" >
                                                                     الجهه
                                                                </th>
                                                                 <th class="sorting_disabled" rowspan="1" colspan="1" >
                                                                     تاريخ البداية
                                                                </th>
                                                                <th class="sorting_disabled" rowspan="1" colspan="1" >
                                                                     تاريخ النهايه
                                                                </th>

                                                                <th class="sorting_disabled" rowspan="1" colspan="1" >
                                                                    والخيارات</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                             @foreach($sys_experiences as $data)
                                                            <tr role="row" class="odd">
                                                                 <td>{{$data->experiences_id }}</td>
                                                                 <td>{{$data->emply_nameAR}}</td>
                                                                 <td>{{$data->experiences}}</td>
                                                                 <td>{{$data->location_job}}</td>
                                                                 <td>{{$data->date_start}}</td>
						                                      	 <td>{{$data->date_end}}</td>
                                                                <td>

                                                                      <a href="{{ url('view-employee-expe') }}">
                                                                         <button class="btn btn-info btn-xs departments update" data-action="#" data-title="خدمة العملاء" data-toggle="modal" data-target="#exprtitlestModal5"><i class="fa fa-eye"></i> تفاصيل</button>
                                                                    </a>

                                                                <button class="btn btn-warning btn-xs departments update" data-action="#" data-title="خدمة العملاء" data-toggle="modal" data-target="#exprtitlestModal5"><i class="fa fa-edit"></i> تعديل</button>
                                                                    <button type="button" data-form="#deleteForm-1" class="btn btn-danger btn-xs delete"><i class="fa fa-trash"></i>
                                                                        <span>حذف</span> </button>

                                                                </td>
                                                            </tr>
															  @endforeach
                                                        </tbody>
                                                    </table>
                                                    <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                                                        <ul class="pagination">
                                                              {{  $sys_experiences->links() }}


														</ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                        <!-- /.card -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </section>
                        </div>


                    <!-- التابعين للموظف -->


                          <div class="tab-pane fade " id="tabs-8" role="tabpanel" aria-labelledby="tabs-8-tab">

                            <section class="content">
                                <div class="modal fade" id="tabiaModal5" tabindex="-1" role="dialog" aria-labelledby="exprtitlestModal5" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="tabiaModal5">اضافة</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <form action="{{ url('employeedepSort')}}" method="GET" novalidate="">

                                                <div class="modal-body ">
                                                  <div class="row">
                                                       <div class="col-lg-6">
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
													  <div class="col-lg-6">
													 <div class="form-group">
                                                        <label  class="mr-2" for="qualifications">اسم القسم</label>
                                                            <select class="custom-select qualifications" name="dept_name" id="dept_name" value="dept_name">
                                                          <option value="">*اختار القسم</option>
														  @foreach($users as $data2)
														  <option value="{{ $data2->dept_name }}">{{ ucfirst($data2->dept_name) }}</option>
                                                            @endforeach
                                                          </select>
                                                    </div>
													</div>
													<div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="mr-2" for="qualifications">اسم الموظف</label>
                                                         <select class="custom-select qualifications" name="emply_nameAR" id="emply_nameAR" value="emply_nameAR">
                                                         <option value="">*اختار الموظف</option>
														  @foreach($users as $data2)
														  <option value="{{ $data2->emply_nameAR }}">{{ ucfirst($data2->emply_nameAR) }}</option>
                                                            @endforeach
                                                         </select>
                                                    </div>
                                                    </div>

                                                         <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label>اسم التابع </label>
                                                                <input type="text" name="name" class="form-control">
                                                            </div>

                                                           </div>
                                                           <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label>رقم الهوية  </label>
                                                                <input type="text" name="number_identity" class="form-control">
                                                            </div>

                                                           </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label>الجنس  </label>
                                                                 <select class="custom-select qualifications" name="TYPE">
                                                                 <option >ذكر  </option>
                                                                 <option >انثي  </option>
                                                                  </select>
                                                            </div>

                                                        </div>
                                                           <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label>الجنسية  </label>
                                                                <select class="custom-select qualifications" name="nationality">
                                                                @foreach($sys_nationality as $data)
                                                                 <option >{{$data->nationality_name}}</option>
                                                                @endforeach
                                                              </select>
                                                            </div>

                                                        </div>
                                                           <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label>الحاله الاجتماعية  </label>
                                                                <select class="custom-select qualifications" name="social_status">
                                                                 <option >غير متزوج </option>
                                                                 <option >متزوج  </option>
                                                                  </select>
                                                            </div>

                                                        </div>
                                                           <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label>تاريخ الميلاد  </label>
                                                                <input type="date" class="form-control" name="datebirth">
                                                            </div>

                                                        </div>
                                                          <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label>له تامين صحي  </label>
                                                                 <select class="custom-select qualifications" name="healthInsurance">
                                                                 <option >له تامين صحي   </option>
                                                                 <option > ليس له تامين صحي  </option>
                                                                  </select>
                                                            </div>

                                                        </div>
                                                           <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label>له تذاكر  </label>
                                                                <select class="custom-select qualifications" name="ticket">
                                                                 <option >له تذاكر   </option>
                                                                 <option > ليس له تذاكر  </option>
                                                                  </select>
                                                            </div>

                                                        </div>
                                                          <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label>رقم بطاقة التامين  </label>
                                                               <input type="number" name="icard" class="form-control">
                                                            </div>

                                                        </div>
                                                           <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label>صله القرابه  </label>
                                                                <select class="custom-select qualifications" name="famle">
                                                                 <option >صله القرابه   </option>
                                                                 <option > ليس له صله القرابة  </option>
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
                                        <div class="card text-right shadow-none">
                                            <div class="d-lg-flex bg-gray-light justify-content-lg-between px-4 py-3">
                                                <h4 class="align-self-center">
                                                    التابعين للموظف
                                                </h4>
                                                <div class="align-self-center">
                                                    <button class="btn btn-primary departments" data-toggle="modal" data-target="#tabiaModal5"><i class="fa fa-plus"></i> اضافة</button>

                                                    <button type="button" class="btn btn-tool" data-card-widget="maximize">
                                                        <i class="fas fa-expand"></i>
                                                    </button>
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


                                                        <div class="form-group mr-4">
                                                            <label class="mr-2"> من تاريخ </label>
                                                            <input type="date" name="from_date" id="from-date" value="2021-09-25" class="form-control">
                                                        </div>
                                                        <div class="form-group mr-4">
                                                            <label class="mr-2"> الي  تاريخ </label>
                                                            <input type="date" name="from_date" id="from-date" value="2021-09-25" class="form-control">
                                                        </div>



                                                        <button type="submit" class="btn btn-primary">
                                                            <span>بحث</span>
                                                            <i class="fa fa-search"></i>
                                                        </button>
                                                    </form>
                                                </div>

                                                <div id="datatable_wrapper" class="dataTables_wrapper no-footer">
                                                    <div class="d-md-flex justify-content-between">

                                                        <div id="datatable_filter" class="dataTables_filter"><label><input type="search" class="" placeholder="بحث" aria-controls="datatable"></label></div>

                                                        <div class="dt-buttons"> <button class="btn btn-default" tabindex="0" aria-controls="datatable" type="button"><span>طباعة <i class="fa fa-print"></i></span></button> <button class="btn btn-success" tabindex="0" aria-controls="datatable" type="button"><span>اكسل <i class="fa fa-file-excel"></i></span></button> </div>

                                                    </div>
                                                    <table id="datatable" class="datatable table table-bordered table-striped dataTable no-footer" role="grid">
                                                        <thead>
                                                            <tr role="row">
                                                                <th class="sorting_disabled" rowspan="1" colspan="1" ># </th>
                                                                <th class="sorting_disabled" rowspan="1" colspan="1" >
                                                                    الموظف
                                                                </th>
                                                                <th class="sorting_disabled" rowspan="1" colspan="1" >
                                                                     رقم الهوية

                                                                </th>
                                                                <th class="sorting_disabled" rowspan="1" colspan="1" >
                                                                     الاسم
                                                                </th>
                                                                   <th class="sorting_disabled" rowspan="1" colspan="1" >
                                                                     الجنس
                                                                </th>
                                                                 <th class="sorting_disabled" rowspan="1" colspan="1" >
                                                                         الحالة الاجتماعية
                                                                    </th>
                                                                     <th class="sorting_disabled" rowspan="1" colspan="1" >
                                                                           صلة القرابة
                                                                    </th>

                                                                <th class="sorting_disabled" rowspan="1" colspan="1" >
                                                                    والخيارات</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                               @foreach($sys_employeedeps as $data)
                                                            <tr role="row" class="odd">
                                                                 <td>{{$data->employeedep_id }}</td>
                                                                 <td>{{$data->emply_nameAR}}</td>
                                                                 <td>{{$data->number_identity}}</td>
                                                                  <td>{{$data->name}}</td>
                                                                 <td>{{$data->TYPE}}</td>
						                                     	 <td>{{$data->social_status}}</td>
									                             <td>{{$data->famle}}</td>
                                                                <td>

                                                                      <a href="{{ url('view-employee-tabian') }}">
                                                                         <button class="btn btn-info btn-xs departments update" data-action="#" data-title="خدمة العملاء" data-toggle="modal" data-target="#exprtitlestModal5"><i class="fa fa-eye"></i> تفاصيل</button>
                                                                    </a>

                                                                <button class="btn btn-warning btn-xs departments update" data-action="#" data-title="خدمة العملاء" data-toggle="modal" data-target="#tabiaModal5"><i class="fa fa-edit"></i> تعديل</button>
                                                                    <button type="button" data-form="#deleteForm-1" class="btn btn-danger btn-xs delete"><i class="fa fa-trash"></i>
                                                                        <span>حذف</span> </button>

                                                                </td>
                                                            </tr>
														   @endforeach
                                                        </tbody>
                                                    </table>
                                                    <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                                                        <ul class="pagination">
                                                           {{  $sys_employeedeps->links() }}
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
            $('#dept_name').append(`<option value="0" disabled selected>اختار القسم*</option>`);

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


