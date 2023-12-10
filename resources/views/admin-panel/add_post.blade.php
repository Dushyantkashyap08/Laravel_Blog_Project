
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .post_title{
          font-size:40px; 
          font-weight: bold; 
          text-align: center; 
          padding: 30px; 
          color:white;
        }

        .div_center {
          text-align: center;
          padding: 30px;
        }
        
        label{
          display:inline-block;
          width:200px;
        }

        .div_img{
          margin-left: 130px;
        }

    </style>
  </head>
  <body>
  @extends('admin-panel.layouts.main')
  
      @section('add_post')
      <div class="d-flex align-items-stretch">
  
        @include('admin-panel.layouts.sidebar')
        
        
        <div class="page-content">

          @if(session()->has('success'))
            <div class="alert alert-success">
              <button type="button" class="close" data-dismiss="alert" aria-hideen="true">x</button>
              {{session()->get('success')}}
            </div>      
          @endif
  
          @if(session('error'))
            <div class="alert alert-danger">
              {{session('error')}}
            </div> 
          @endif
          
          <h1 class="post_title">Add Post</h1>
          
            <div>
  
                <form action="{{url('add_post')}}" method="post" enctype="multipart/form-data">
                  @csrf
                    <div class="div_center">
                      <label>Post Title</label>
                      <input type="text" name="title" />
                    </div>
  
                    <div class="div_center">
                      <label>Post Decription</label>
                      <textarea name="description"></textarea>
                    </div>
  
                    <div class="div_center div_img">
                      <label>Add Image</label>
                      <input type="file" name="image" />
                    </div>
  
                    <div class="div_center ">
                      <input type="submit" class="btn btn-primary" />
                    </div>
                    
                </form>
  
            </div>
  
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