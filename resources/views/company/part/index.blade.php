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
                      <a href="{{ url('index') }}">
                        الاحصاءات
                      </a>
                    </li>
                    <li class="breadcrumb-item">
                      <span>نظام الموارد البشرية</span>
                    </li>
                  </ol>
                </div><!-- /.col -->
                <div class="col-sm-12">
                  <h1> نظام الموارد البشرية </h1>
                </div><!-- /.col -->
              </div><!-- /.row -->
            </div><!-- /.container-fluid -->
          </div>
          <!-- /.content-header -->
          <div class="col-md-12">
          </div>
          <div class="row">
            <div class="col-md-4 col-sm-6 col-12">
              <div class="info-box">
                <span class="info-box-icon bg-info"><i class="fas fa-th-large"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text"> الفئات </span>
                  <span class="info-box-number">10</span>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 col-12">
              <div class="info-box">
                <span class="info-box-icon bg-success"><i class="fas fa-minus"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text"> الاستقطاعات </span>
                  <span class="info-box-number">5871</span>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 col-12">
              <div class="info-box">
                <span class="info-box-icon bg-warning"><i class="fas fa-users"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text"> الموظفين </span>
                  <span class="info-box-number">720</span>
                </div>
              </div>
            </div>

            <div class="col-md-4 col-sm-6 col-12">
              <div class="info-box">
                <span class="info-box-icon bg-primary"><i class="fas fa-list"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text"> الدرجات الوظيفية </span>
                  <span class="info-box-number">35</span>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 col-12">
              <div class="info-box">
                <span class="info-box-icon bg-danger"><i class="fas fa-language"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text"> اللغات </span>
                  <span class="info-box-number">100</span>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 col-12">
              <div class="info-box">
                <span class="info-box-icon bg-secondary"><i class="fas fa-sticky-note"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text"> العقود </span>
                  <span class="info-box-number">847</span>
                </div>
              </div>
            </div>

          </div>
          @endsection
          <!-- /.row -->
