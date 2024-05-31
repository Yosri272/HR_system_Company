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
                                <a href="{{ url('employees') }}">
                                    الموظفين
                                </a>
                              </li>
                            <li class="breadcrumb-item">
                              <span> اضافة موظف</span>
                            </li>
                          </ol>
                        </div><!-- /.col -->
                        <div class="col-sm-12">
                          <h1> اضافة موظف </h1>
                        </div><!-- /.col -->
                      </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                  </div>
                  <!-- /.content-header -->
                  <div class="col-md-12">
                  </div>
                  <section class="content">
                   <form  method="post" action="{{ route('files.employee') }}" enctype="multipart/form-data">
						   @csrf

                      <div class="row">

                        <div class="col-lg-6">
                          <div class="card card-primary  card-outline  ">
                            <div class="card-header">
                              <h3 class="card-title"><i class="fas fa-list"></i>
                                <span>   البيانات الاساسية  </span></h3>

                              <div class="card-tools">
                              </div>
                              <!-- /.card-tools -->
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body ">

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="from-date"> اسم الموظف (ar) </label>
                                            <input id="emply_nameAR"
                                            type="text"
                                            class="form-control"
                                            name="emply_nameAR"
                                            value="{{ old('emply_nameAR') }}"
                                            required autocomplete="emply_nameAR" autofocus>
                                            @error('emply_nameAR')
                                            <span class="invalid-feedback" role="alert">
                                              <strong>الرجاء الاسم خالي</strong>
                                            </span>
                                             @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="from-date"> اسم الموظف (en) </label>
                                            <input id="emply_NameEN"
                                             type="text"
                                             class="form-control @error('emply_NameEN') is-invalid @enderror"
                                             name="emply_NameEN"
                                             value="{{ old('emply_NameEN') }}"
                                             required autocomplete="emply_NameEN" autofocus>
                                            @error('emply_NameEN')
                                            <span class="invalid-feedback" role="alert">
                                              <strong>الرجاء الاسم خالي</strong>
                                            </span>
                                             @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                          <label for="from-date">البريد الالكتروني </label>
                                          <input
                                          id="email"
                                          type="email"
                                          class="form-control @error('email') is-invalid @enderror"
                                          name="email" value="{{ old('email') }}"
                                          required autocomplete="email" autofocus>

                                               @error('email')
                                         <span class="invalid-feedback" role="alert">
                                           <strong>{{ $message }}</strong>
                                         </span>
                                          @enderror

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="mr-2" for="qualifications">اختيار الفرع</label>
                                            <select class="custom-select qualifications" name="branch_nameAR">
                                                    @foreach($sys_branch as $data)
                                                     <option >{{$data->branch_nameAR}}</option>
                                                    @endforeach
                                                 </select>
                                          </div></div>
                                          <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="mr-2" for="qualifications">  اختيار القسم</label>
                                                <select class="custom-select qualifications" name="dept_name">
                                                    @foreach($sys_dept as $data)
                                                     <option >{{$data->dept_name}}</option>
                                                    @endforeach
                                                 </select>
                                              </div></div>
                                </div>

                                  <div class="row">
                                      <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="mr-2" for="qualifications">  الجنس</label>
                                            <select class="custom-select qualifications" name="type">
                                                <option >ذكر  </option>
                                                <option >انثي  </option>
                                            </select>
                                          </div>

                                      </div>
                                      <div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label for="from-date"> الحنسية  </label>
                                                <select class="custom-select qualifications" name="nationality">
                                                    @foreach($sys_nationality as $data)
                                                     <option >{{$data->nationality_name}}</option>
                                                    @endforeach
                                                 </select>   </div>
                                          </div>

                                      </div>
                                      <div class="col-lg-6">
                                          <div class="form-group">
                                            <label for="from-date">تاريخ الميلاد</label>
                                            <input id="datebirth"
                                            type="date"
                                            class="form-control @error('datebirth') is-invalid @enderror"
                                            name="datebirth"
                                            value="{{ old('datebirth') }}"
                                            required autocomplete="datebirth" autofocus>
                                           @error('datebirth')
                                           <span class="invalid-feedback" role="alert">
                                             <strong>الرجاء الاسم خالي</strong>
                                           </span>
                                            @enderror
                                          </div>

                                      </div>
                                      <div class="col-lg-6">
                                          <div class="form-group">
                                            <label for="from-date">مكان الميلاد</label>
                                            <input id="dateplace"
                                            type="text"
                                            class="form-control"
                                            name="dateplace"
                                            value="{{ old('dateplace') }}"
                                            required autocomplete="dateplace" autofocus>
                                           @error('dateplace')
                                           <span class="invalid-feedback" role="alert">
                                             <strong>الرجاء الاسم خالي</strong>
                                           </span>
                                            @enderror

                                          </div>

                                      </div>

                                      <div class="col-lg-4">
                                        <div class="form-group">
                                          <label for="from-date">الحالة الاجتماعية</label>
                                          <select class="custom-select qualifications" name="Social_status">
                                            <option >متزوج  </option>
                                            <option >غير متزوج  </option>
                                        </select>

                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                          <label for="from-date">الديانة </label>
                                          <input id="religion"
                                          type="text"
                                          class="form-control"
                                          name="religion"
                                          value="{{ old('religion') }}"
                                          required autocomplete="religion" autofocus>
                                         @error('religion')
                                         <span class="invalid-feedback" role="alert">
                                           <strong>الرجاء الاسم خالي</strong>
                                         </span>
                                          @enderror

                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                          <label for="from-date">المهنة </label>
                                          <input id="occupation"
                                          type="text"
                                          class="form-control"
                                          name="occupation"
                                          value="{{ old('occupation') }}"
                                          required autocomplete="occupation" autofocus>
                                         @error('occupation')
                                         <span class="invalid-feedback" role="alert">
                                           <strong>الرجاء الاسم خالي</strong>
                                         </span>
                                          @enderror

                                        </div>
                                    </div>



                                  </div>

                            </div>

                          </div>
                          <div class="card card-primary  card-outline  p-sticky t-15   ">
                            <div class="card-header">
                              <h3 class="card-title"><i class="fas fa-envelope"></i>
                                <span> بيانات التواصل  </span></h3>

                              <div class="card-tools">
                              </div>
                              <!-- /.card-tools -->
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body pt-0">
                                <div class="form-group">
                                    <label> تلفون العمل </label>
                                    <input id="phone_jop"
                                    type="tel"
                                    class="form-control"
                                    name="phone_jop"
                                    value="{{ old('phone_jop') }}"
                                    required autocomplete="phone_jop" autofocus>
                                   @error('phone_jop')
                                   <span class="invalid-feedback" role="alert">
                                     <strong>الرجاء الاسم خالي</strong>
                                   </span>
                                    @enderror

                                  </div>
                                  <div class="form-group">
                                    <label> تلفون الطوارئ </label>
                                    <input id="phone_emerg"
                                    type="tel"
                                    class="form-control"
                                    name="phone_emerg"
                                    value="{{ old('phone_emerg') }}"
                                    required autocomplete="phone_emerg" autofocus>
                                   @error('phone_emerg')
                                   <span class="invalid-feedback" role="alert">
                                     <strong>الرجاء الاسم خالي</strong>
                                   </span>
                                    @enderror

                                  </div>

                                  <div class="form-group">
                                    <label> تلفون فى البلد الام </label>
                                    <input id="phone_country"
                                    type="tel"
                                    class="form-control"
                                    name="phone_country"
                                    value="{{ old('phone_country') }}"
                                    required autocomplete="phone_country" autofocus>
                                   @error('phone_country')
                                   <span class="invalid-feedback" role="alert">
                                     <strong>الرجاء الاسم خالي</strong>
                                   </span>
                                    @enderror

                                  </div>

                                  <div class="form-group">
                                    <label>   العنوان في البلد الام </label>
                                    <input id="empyaddress_home"
                                    type="text"
                                    class="form-control"
                                    name="empyaddress_home"
                                    value="{{ old('empyaddress_home') }}"
                                    required autocomplete="empyaddress_home" autofocus>
                                   @error('empyaddress_home')
                                   <span class="invalid-feedback" role="alert">
                                     <strong>الرجاء الاسم خالي</strong>
                                   </span>
                                    @enderror

                                  </div>
                                  <div class="form-group">
                                    <label>   العنوان في المملكة </label>
                                    <input id="empyaddress_KSA"
                                    type="text"
                                    class="form-control"
                                    name="empyaddress_KSA"
                                    value="{{ old('empyaddress_KSA') }}"
                                    required autocomplete="empyaddress_KSA" autofocus>
                                   @error('empyaddress_KSA')
                                   <span class="invalid-feedback" role="alert">
                                     <strong>الرجاء الاسم خالي</strong>
                                   </span>
                                    @enderror

                                  </div>
                            </div>

                          </div>

                        </div>

                        <div class="col-lg-6">
                            <div class="card card-primary card-outline  p-sticky t-15   ">
                                <div class="card-header">
                                  <h3 class="card-title"><i class="fas fa-paperclip"></i>
                                    <span>صورة الموظف</span></h3>

                                  <div class="card-tools">
                                  </div>
                                  <!-- /.card-tools -->
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body pt-0">
                                  <div class="form-group">

                                    <div class="input-group">
                                      <div class="custom-file">

                                         <input type="file" name="files[]" multiple class="form-control" accept="image/*">

                                      </div>

                                    </div>
                                  </div>
                                </div>

                              </div>

                          <div class="card card-primary mb-3 card-outline  ">
                            <div class="card-header">
                              <h3 class="card-title"><i class="fas fa-money-bill-alt"></i>
                                <span> الحسابات </span></h3>

                              <div class="card-tools">
                              </div>
                              <!-- /.card-tools -->
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body ">

                              <div class="form-group">
                                <label>  التحويلة</label>
                                <input id="shunt"
                                type="number"
                                class="form-control"
                                name="shunt"
                                value="{{ old('shunt') }}"
                                required autocomplete="shunt" autofocus>
                               @error('shunt')
                               <span class="invalid-feedback" role="alert">
                                 <strong>الرجاء الاسم خالي</strong>
                               </span>
                                @enderror

                              </div>

                              <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                          <label>رقم الحساب</label>

                                          <input id="number_bank" type="number" class="form-control @error('number_bank') is-invalid @enderror" name="number_bank" value="{{ old('number_bank') }}" required autocomplete="name" autofocus>

                                          @error('number_bank')
                                    <span class="invalid-feedback" role="alert">
                                      <strong>الرجاء   رقم الحساب </strong>
                                    </span>
                                     @enderror

                                        </div>
                                    </div>

                                  <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="mr-2" for="qualifications">  البنك</label>
                                        <select class="custom-select qualifications" name="Bank">
                                            @foreach($sys_bank as $data)
                                            <option >{{$data->bank_nameAR}}</option>
                                            @endforeach
                                        </select>
                                      </div>
                                  </div>
                                  <div class="col-lg-6">
                                    <div class="form-group">
                                      <label>   رقم الحساب IBAN</label>
                                      <input id="IBAN" type="number" class="form-control @error('IBAN') is-invalid @enderror" name="IBAN" value="{{ old('IBAN') }}" required autocomplete="name" autofocus>

                                      @error('IBAN')
                                <span class="invalid-feedback" role="alert">
                                  <strong>الرجاء   رقم الحساب IBAN</strong>
                                </span>
                                 @enderror

                                    </div>
                                </div>
                              </div>

                            </div>

                          </div>

                        </div>
                        <div class="col-12 mt-2">
                          <!-- /.card-body -->
                          <div class="card-footer">
                            <button type="submit" class="btn btn-primary">منجز</button>
                          </div>
                          <!-- /.card-footer -->
                        </div>
                      </div>
                    </form>
                  </section>

                  <!-- /.row -->
                </div><!-- /.container-fluid -->
              </div>
              <!-- /.content -->
            </div>
              @endsection
            </div>
            <!-- /.row -->



