
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <!--sweetalert cdn-->
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
    
  <title>Document</title>
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
        width: 80%;
        text-align: center;
        margin-left: 150px;
      }

      .head_row {
        background-color: skyblue;
      }

      .post_img {
        height:150px;
        width: 150px;
        padding: 30px;
      }
  </style>
</head>
<body>
  @extends('admin-panel.layouts.main')
  
      @section('show_post')
      <div class="d-flex align-items-stretch">
  
        @include('admin-panel.layouts.sidebar')
        
        <div class="page-content">

          @if(session()->has('success'))
            <div class="alert alert-danger">
              <button type="button" class="close" data-dismiss="alert" aria-hideen="true">x</button>
              {{session()->get('success')}}
            </div>      
          @endif
              <h1 class="all_posts">All Posts</h1>

              <table class="all_post_table">
                <tr class="head_row">
                  <th>Title</th>
                  <th>Description</th>
                  <th>Post By</th>
                  <th>Status</th>
                  <th>Usertype</th>
                  <th>Image</th>
                  <th>Delete</th>
                </tr>
               
                @foreach($post as $posts)

                <tr>
                  <td>{{$posts->title}}</td>
                  <td>{{$posts->description}}</td>
                  <td>{{$posts->name}}</td>
                  <td>{{$posts->status}}</td>
                  <td>{{$posts->usertype}}</td>
                  <td>
                    <img class="post_img" src="UploadedImages/{{$posts->image}}">
                  </td>
                  <td><a href="{{url('delete_post',$posts->id)}}" class="btn btn-danger" onclick="confirmation(event)">Delete</a></td>
                </tr>

                @endforeach
              </table>

        </div>
      </div>
  @endsection
  
  @section('script')
      <!-- JavaScript files-->
      <script src="admin-template/vendor/jquery/jquery.min.js"></script>
      <script src="admin-template/vendor/popper.js/umd/popper.min.js"> </script>
      <script src="admin-template/vendor/bootstrap/js/bootstrap.min.js"></script>
      <script src="admin-template/vendor/jquery.cookie/jquery.cookie.js"> </script>
      <script src="admin-template/vendor/chart.js/Chart.min.js"></script>
      <script src="admin-template/vendor/jquery-validation/jquery.validate.min.js"></script>
      <script src="admin-template/js/charts-home.js"></script>
      <script src="admin-template/js/front.js"></script>
      <!-- JavaScript files ends here-->
  @endsection
</body>
</html>