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

               <div class="col-lg-6" style="margin:auto; position:relative; top:100px;">
                 <div class="block">
                   <h1 class="post_title" style="font-size:40px; font-weight: bold; text-align: center; padding: 30px; color:white; letter-spacing: 5px;">Add Post</h1>
                   <div class="block-body">
                     <form action="{{url('add_post')}}" method="post" enctype="multipart/form-data">
                       @csrf
                       <div class="form-group">
                         <label class="form-control-label">Post Title</label>
                         <input type="text" name="title" placeholder="enter title" class="form-control">
                       </div>
                       <br>
                       <div class="form-group">
                         <label class="form-control-label">Post Descriptiton</label>
                         <textarea name="description" class="form-control" placeholder="enter description"></textarea>
                       </div>
                       <br>
                       <div class="form-group">
                         <label class="form-control-label">Add Image</label>
                         <input type="file" placeholder="add image" name="image" class="form-control">
                       </div>
                       <br>
                       <div class="form-group">       
                         <input type="submit" value="Post" class="btn btn-primary">
                       </div>
                     </form>
                   </div>
                 </div>
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
