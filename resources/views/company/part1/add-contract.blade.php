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
                        <a href="{{ url('contract') }}"  >
                            العقود
                        </a>
                      </li>
                    <li class="breadcrumb-item">
                      <span>اضافة عقد</span>
                    </li>
                  </ol>
                </div><!-- /.col -->
                <div class="col-sm-12">
                  <h1>اضافة عقد </h1>
                </div><!-- /.col -->
              </div><!-- /.row -->
            </div><!-- /.container-fluid -->
          </div>
          <!-- /.content-header -->
          <div class="col-md-12">
          </div>
          <section class="content">
           <form action="{{ url('contractSort')}}" method="GET" novalidate="">
            @csrf
              <div class="row">

                <div class="col-lg-6">
                  <div class="card card-primary  card-outline  ">
                    <div class="card-header">
                      <h3 class="card-title"><i class="fas fa-list"></i>
                        <span>  بيانات الشركة  </span></h3>

                      <div class="card-tools">
                      </div>
                      <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->

                    <div class="card-body ">

                        <div class="form-group">
                            <label class="mr-2" for="class"> اختر الشركة </label>
                            <select class="form-control" name="comp_nameAR">
                                @foreach($sys_company as $data)
                                 <option >{{$data->comp_nameAR}}</option>
                                  @endforeach
                               </select>
                          </div>



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
                                      </select>
                                    </div>
								</div>

                          </div>

                    </div>

                  </div>


                     <div class="card card-primary  card-outline  ">
                    <div class="card-header">
                      <h3 class="card-title"><i class="fas fa-list"></i>
                        <span>  بيانات الموظف  </span></h3>

                      <div class="card-tools">
                      </div>
                      <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->

                    <div class="card-body ">

                        <div class="col-lg-12">
                           <div class="form-group">
                               <label class="mr-2" for="qualifications">اسم الموظف</label>
                                <select class="custom-select qualifications" name="emply_nameAR" id="emply_nameAR" value="emply_nameAR">
                                <option value="">*اختار الموظف</option>
                                </select>
                            </div>
                        </div>


                    </div>

                  </div>


                  <div class="card card-primary  card-outline  ">
                    <div class="card-header">
                      <h3 class="card-title"><i class="fas fa-list"></i>
                        <span> بيانات العقد  </span></h3>

                      <div class="card-tools">
                      </div>
                      <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->

                    <div class="card-body ">

                        <div class="form-group">
                            <label class="mr-2" for="class">نوع العقد </label>
                            <select class="form-control" name="contracttype_name">
                                @foreach($sys_contracttype as $data)
                                 <option >{{$data->contracttype_name}}</option>
                                  @endforeach
                               </select>
                          </div>

                          <div class="form-group">
                            <label for="from-date">تاريخ العقد</label>
                            <input id="contract_date"
                                type="date"
                                class="form-control"
                                name="contract_date"
                                value="{{ old('contract_date') }}"
                                required autocomplete="contract_date" autofocus >
                               @error('contract_date')
                               <span class="invalid-feedback" role="alert">
                                 <strong>الرجاء الاسم خالي</strong>
                               </span>
                                @enderror
                          </div>
                          <div class="row">
                              <div class="col-lg-6">
                                  <div class="form-group">
                                    <label for="from-date">تاريخ بداية العقد</label>
                                    <input id="contract_starting"
                                    type="date"
                                    class="form-control"
                                    name="contract_starting"
                                    value="{{ old('contract_starting') }}"
                                    required autocomplete="contract_starting" autofocus>
                                   @error('contract_starting')
                                   <span class="invalid-feedback" role="alert">
                                     <strong>الرجاء الاسم خالي</strong>
                                   </span>
                                    @enderror
                                  </div>

                              </div>
                              <div class="col-lg-6">
                                  <div class="form-group">
                                    <label for="from-date">تاريخ نهاية العقد</label>
                                    <input id="contract_end"
                                    type="date"
                                    class="form-control"
                                    name="contract_end"
                                    value="{{ old('contract_end') }}"
                                    required autocomplete="contract_end" autofocus>
                                   @error('contract_end')
                                   <span class="invalid-feedback" role="alert">
                                     <strong>الرجاء الاسم خالي</strong>
                                   </span>
                                    @enderror
                                  </div>

                              </div>
							   <div class="col-lg-6">
                                  <div class="form-group">
                                    <label for="from-date">مدة العقد بالايام </label>
                                    <input id="contract_duration"
                                    type="number"
                                    class="form-control"
                                    name="contract_duration"
                                    value="{{ old('contract_duration') }}"
                                    required autocomplete="contract_duration" autofocus>
                                   @error('contract_duration')
                                   <span class="invalid-feedback" role="alert">
                                     <strong>الرجاء الاسم خالي</strong>
                                   </span>
                                    @enderror
                                  </div>
								</div>
                              <div class="col-lg-6">
                                  <div class="form-group">
                                    <label for="from-date">تاريخ التجديد</label>
                                    <input id="date_renewal"
                                    type="date"
                                    class="form-control"
                                    name="date_renewal"
                                    value="{{ old('date_renewal') }}"
                                    required autocomplete="date_renewal" autofocus>
                                   @error('date_renewal')
                                   <span class="invalid-feedback" role="alert">
                                     <strong>الرجاء الاسم خالي</strong>
                                   </span>
                                    @enderror
                                  </div>

                              </div>
                              <div class="col-lg-6">
                                  <div class="form-group">
                                    <label for="from-date">حالة العقد</label>
                                    <input id="contract_status"
                                    type="number"
                                    class="form-control"
                                    name="contract_status"
                                    value="{{ old('contract_status') }}"
                                    required autocomplete="contract_status" autofocus>
                                   @error('contract_status')
                                   <span class="invalid-feedback" role="alert">
                                     <strong>الرجاء الاسم خالي</strong>
                                   </span>
                                    @enderror
                                  </div>

                              </div>
                          </div>

                    </div>

                  </div>

                 </div>

				  <div class="col-lg-6">
                  <div class="card card-primary mb-3 card-outline    ">
                    <div class="card-header">
                      <h3 class="card-title"><i class="fas fa-money-bill"></i>
                        <span> العمولة  </span></h3>

                      <div class="card-tools">
                      </div>
                      <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body pt-0">
                        <div class="form-group">
                            <label>العمولة </label>
                            <input id="commission"
                            type="number"
                            class="form-control"
                            name="commission"
                            value="{{ old('commission') }}"
                            required autocomplete="commission" autofocus>
                           @error('commission')
                           <span class="invalid-feedback" role="alert">
                             <strong>الرجاء الاسم خالي</strong>
                           </span>
                            @enderror
                          </div>
                          <div class="form-group">
                            <label>عمولة نهاية العقد </label>
                            <input id="contractend_comm"
                            type="number"
                            class="form-control"
                            name="contractend_comm"
                            value="{{ old('contractend_comm') }}"
                            required autocomplete="contractend_comm" autofocus>
                           @error('contractend_comm')
                           <span class="invalid-feedback" role="alert">
                             <strong>الرجاء الاسم خالي</strong>
                           </span>
                            @enderror
                          </div>
                          <div class="form-group">
                            <label>نسبة العمولة </label>
                            <input id="rate_commission"
                            type="number"
                            class="form-control"
                            name="rate_commission"
                            value="{{ old('rate_commission') }}"
                            required autocomplete="rate_commission" autofocus>
                           @error('rate_commission')
                           <span class="invalid-feedback" role="alert">
                             <strong>الرجاء الاسم خالي</strong>
                           </span>
                            @enderror
                          </div>
                    </div>

                  </div>


                  <div class="card card-primary mb-3 card-outline  ">
                    <div class="card-header">
                      <h3 class="card-title"><i class="fas fa-list"></i>
                        <span> العلاوات و البدلات  </span></h3>

                      <div class="card-tools">
                      </div>
                      <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body ">

                      <div class="form-group">
                        <label>الراتب الاساسي</label>
                        <input id="basic_salary"
                        type="number"
                        class="form-control"
                        name="basic_salary"
                        value="{{ old('basic_salary') }}"
                        required autocomplete="basic_salary" autofocus>
                       @error('basic_salary')
                       <span class="invalid-feedback" role="alert">
                         <strong>الرجاء الاسم خالي</strong>
                       </span>
                        @enderror

                      </div>

                      <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                  <label>له علاوات</label>
                                  <input id="bonuses"
                                  type="number"
                                  class="form-control"
                                  name="bonuses"
                                  value="{{ old('bonuses') }}"
                                  required autocomplete="bonuses" autofocus>
                                 @error('bonuses')
                                 <span class="invalid-feedback" role="alert">
                                   <strong>الرجاء الاسم خالي</strong>
                                 </span>
                                  @enderror
                                </div>
                            </div>

                          <div class="col-lg-6">
                              <div class="form-group">
                                <label>له بدل سكن</label>
                                <input id="housing"
                                  type="number"
                                  class="form-control"
                                  name="housing"
                                  value="{{ old('housing') }}"
                                  required autocomplete="housing" autofocus>
                                 @error('housing')
                                 <span class="invalid-feedback" role="alert">
                                   <strong>الرجاء الاسم خالي</strong>
                                 </span>
                                  @enderror
                              </div>
                          </div>

                      </div>


                      <div class="form-group">
                        <label>ساعات اضافية</label>
                        <input id="hour_extra"
                        type="number"
                        class="form-control"
                        name="hour_extra"
                        value="{{ old('hour_extra') }}"
                        required autocomplete="hour_extra" autofocus>
                       @error('hour_extra')
                       <span class="invalid-feedback" role="alert">
                         <strong>الرجاء الاسم خالي</strong>
                       </span>
                        @enderror

                      </div>

                      <div class="form-group">
                        <label>  المواصلات</label>
                        <input id="transport"
                        type="number"
                        class="form-control"
                        name="transport"
                        value="{{ old('transport') }}"
                        required autocomplete="transport" autofocus>
                       @error('transport')
                       <span class="invalid-feedback" role="alert">
                         <strong>الرجاء الاسم خالي</strong>
                       </span>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label>بدل اتصال</label>
                        <input id="contact"
                        type="number"
                        class="form-control"
                        name="contact"
                        value="{{ old('contact') }}"
                        required autocomplete="contact" autofocus>
                       @error('contact')
                       <span class="invalid-feedback" role="alert">
                         <strong>الرجاء الاسم خالي</strong>
                       </span>
                        @enderror

                      </div>

                      <div class="form-group">
                        <label>بدل معيشة</label>
                        <input id="living"
                        type="number"
                        class="form-control"
                        name="living"
                        value="{{ old('living') }}"
                        required autocomplete="living" autofocus>
                       @error('living')
                       <span class="invalid-feedback" role="alert">
                         <strong>الرجاء الاسم خالي</strong>
                       </span>
                        @enderror

                      </div>



                      <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                  <label>له تذاكر</label>
                                  <input id="tickets"
                                  type="text"
                                  class="form-control"
                                  name="tickets"
                                  value="{{ old('tickets') }}"
                                  required autocomplete="tickets" autofocus>
                                 @error('tickets')
                                 <span class="invalid-feedback" role="alert">
                                   <strong>الرجاء الاسم خالي</strong>
                                 </span>
                                  @enderror
                                </div>

                            </div>
                          <div class="col-lg-4">
                              <div class="form-group">
                                <label>عدد التذاكر</label>
                                <input id="tickets_number"
                                type="number"
                                class="form-control"
                                name="tickets_number"
                                value="{{ old('tickets_number') }}"
                                required autocomplete="tickets_number" autofocus>
                               @error('tickets_number')
                               <span class="invalid-feedback" role="alert">
                                 <strong>الرجاء الاسم خالي</strong>
                               </span>
                                @enderror
                              </div>

                          </div>
                          <div class="col-lg-4">
                              <div class="form-group">
                                <label>نوع التذاكر</label>
                                <input id="tickets_type"
                                type="text"
                                class="form-control"
                                name="tickets_type"
                                value="{{ old('tickets_type') }}"
                                required autocomplete="tickets_type" autofocus>
                               @error('tickets_type')
                               <span class="invalid-feedback" role="alert">
                                 <strong>الرجاء الاسم خالي</strong>
                               </span>
                                @enderror
                              </div>

                          </div>
                      </div>

                    </div>

                  </div>
                    </div>
                </div>
                <div class="col-12 mt-2">
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" type="submit" class="btn btn-primary">منجز</button>
                  </div>
                  <!-- /.card-footer -->
                </div>
              </div>
            </form>
          </section>

          <!-- /.row -->
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
