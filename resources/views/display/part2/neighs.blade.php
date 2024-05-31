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
                      <a href="index.html">نظام الموارد البشرية
                      </a>
                    </li>
                    <li class="breadcrumb-item">
                      <a href="qualifications.html">
                        المؤهلات
                      </a>
                    </li>
                    <li class="breadcrumb-item">
                      <span>تفاصيل المؤهل</span>
                    </li>
                  </ol>
                </div><!-- /.col -->
                <div class="col-sm-12">
                  <h1> المؤهل </h1>
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
                    <a class="nav-link active" id="tabs-stores-tab" data-toggle="pill" href="#tabs-stores" role="tab"
                      aria-controls="tabs-stores" aria-selected="true"> التفاصيل </a>
                  </li>


                </ul>
              </div>
              <div class="card-body ">

                <form action="{{  url('disneighs')  }}/{{  $data->neigh_id  }}" method="GET" novalidate="">
                    @csrf
                <div class="tab-content" id="tabs-tabContent">
                  <div class="tab-pane fade active show" id="tabs-stores" role="tabpanel"
                    aria-labelledby="tabs-stores-tab">

                      <table class="table table-striped">
                        <tbody>
                          <tr>
						  <td style="width: 20%;">كود المؤهل</td>
						  <td>12111</td>
						  @foreach($sys_neighs as $data)
                            <td>{{$data->neigh_id}}</td>
							@endforeach
                          </tr>
                          <tr>
						   <td style="width: 20%;">كود المؤهل</td>
						    <td>12111</td>
						  @foreach($sys_neighs as $data)
                           <td>{{$data->state_id}}</td>
							@endforeach
                          </tr>

                        </tbody>
                      </table>

                  </div>


      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
  
</form>
    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="float-right d-none d-sm-inline">

      </div>
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
</body>
 @endsection
</html>
