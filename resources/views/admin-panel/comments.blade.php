<!--extending layouts.main here-->
@extends('admin-panel.layouts.main')
  <!--comments goes here-->
  @section('comments')
      <!--d-flex goes here-->
      <div class="d-flex align-items-stretch">
  
      <!--sidebar goes here-->
      @include('admin-panel.layouts.sidebar')
      <!--sidebar ends here-->

        <!--page-content goes here-->
        <div class="page-content">
          
          <h1 class="all_posts">All Comments</h1>
          
          @if(session()->has('success'))
            <div class="alert alert-danger">
              <button type="button" class="close" data-dismiss="alert" aria-hideen="true">x</button>
              {{session()->get('success')}}
            </div>      
          @endif
           <!--table goes here-->
              <table class="all_post_table">
                <tr class="head_row">
                  <th>Id</th>
                  <th>Comments</th>
                  <th>User_id</th>
                  <th>User_name</th>
                  <th>Post_id</th>
                  <th>Delete</th>
                </tr>
               
                @foreach($data as $items)
                <tr>
                    <td>{{$items->id}}</td>
                    <td>{{ \Illuminate\Support\Str::limit($items->comment, $limit = 20, $end = '...') }}</td>
                    <td>{{$items->user_id}}</td>
                    <td>{{$items->user_name}}</td>
                    <td>{{$items->post_id}}</td>
                    <td><a href="{{url('delete_comment',$items->id)}}" onclick="confirmation(event)"><svg xmlns="http://www.w3.org/2000/svg" height="30" width="30" viewBox="0 0 448 512"><path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg></a></td>
                </tr>
                @endforeach
                <tr>
                  <td colspan="6">
                    {{$data->links('pagination::bootstrap-5')}}
                  </td>
                </tr>
            </table>
            <!--table ends here-->
        </div>
        <!--page-content ends here-->
      </div>
      <!--d-flex ends here-->
@endsection
<!--comments ends here-->
  
@section('script')
      <!-- JavaScript files-->
      <script src="admin-template/vendor/jquery/jquery.min.js"></script>
      <script src="admin-template/vendor/popper.js/umd/popper.min.js"> </script>
      <script src="admin-template/vendor/bootstrap/js/bootstrap.min.js"></script>
      <script src="admin-template/vendor/jquery.cookie/jquery.cookie.js"> </script>
      <script src="admin-template/vendor/jquery-validation/jquery.validate.min.js"></script>
      <script src="admin-template/js/front.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script type="text/javascript">
        function confirmation(event) {
            event.preventDefault();
            var urlToRedirect = event.currentTarget.getAttribute('href');
    
            console.log(urlToRedirect);
    
            swal({
                title: "Are you sure to Delete this ?",
                text: "You won't be able to revert this Delete",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
    
            .then((willcancel) => {
                if (willcancel) {
                    window.location.href = urlToRedirect;
                }
            });
        }
    </script>
      <style>
        .all_posts{
            font-size:40px; 
            font-weight: bold; 
            text-align: center; 
            padding: 20px; 
            color:white;
            letter-spacing: 5px;
        }
        .all_post_table {
          border: 1px solid white;
          font-size:20px;
          width: 90%;
          text-align: center;
          margin-left: 70px;
        }
        .head_row {
          background-color: skyblue;
        }
  
        .post_img {
          height:150px;
          width: 150px;
          padding: 30px;
        }
      .all_post_table th,
      .all_post_table td {
          padding: 15px;
          border: 1px solid #ddd; /* Add a border to each cell */
      }
  </style>
      <!-- JavaScript files ends here-->
@endsection
</body>
</html>