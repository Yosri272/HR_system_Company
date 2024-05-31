<!DOCTYPE html>
<html>
<head>
    <title>Laravel Sweet Alert Confirm Delete Example - ItSolutionStuff.com</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>
<body>

<div class="container">
    <h1>Laravel Sweet Alert Confirm Delete Example - ItSolutionStuff.com</h1>

    <table class="table table-bordered data-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>

                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sys_qualification as $user)
                <tr>
                    <td>{{ $user->qualification_id }}</td>
                    <td>{{ $user->qualification_name }}</td>

                    <td>
                        <form method="POST" action="{{ route('users.delete', $user->qualification_id) }}">
                            @csrf
                            <input name="_method" type="hidden" value="DELETE">
                            <button type="submit" class="btn btn-xs btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Delete'>Delete</button>
                        </form>
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

</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">

     $('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          swal({
              title: `هل أنت متأكد أنك تريد حذف هذا السجل؟`,
              text: "إذا قمت بحذف هذا ، فسيختفي إلى الأبد.",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              form.submit();
            }
          });
      });

</script>

</html>
