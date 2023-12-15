<!--extending layouts.main here-->
@extends('admin-panel.layouts.main')

<!--add_post section goes here-->
@section('add_post')

  <!--d-flex goes here-->
  <div class="d-flex align-items-stretch">

      <!--sidebar goes here-->
      @include('admin-panel.layouts.sidebar')
      <!--sidebar ends here-->

      <!--page-content goes here-->
      <div class="page-content">

          @if(session()->has('success'))
              <div class="alert alert-success">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                  {{session()->get('success')}}
              </div>
          @endif
          
          <!--col-lg-6 goes here-->
          <div class="col-lg-6" style="margin:auto; position:relative; top:100px;">
              <!--block goes here-->
              <div class="block">
                  <h1 class="post_title" style="font-size:40px; font-weight: bold; text-align: center; padding: 30px; color:white; letter-spacing: 5px;">Add Post</h1>
                  <!--block-body goes here-->
                  <div class="block-body">
                      <!--form goes here-->
                      <form action="{{url('add_post')}}" method="post" enctype="multipart/form-data">
                          @csrf
                          <div class="form-group">
                              <label class="form-control-label">Post Title</label>
                              <input type="text" name="title" placeholder="enter title" class="form-control">
                          </div>
                          <br>
                          <div class="form-group">
                              <label class="form-control-label">Post Description</label>
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
                      <!--form ends here-->
                  </div>
                  <!--block-body ends here-->
              </div>
              <!--block ends here-->
          </div>
          <!--col-lg-6 ends here-->
      </div>
      <!--page-content ends here-->
  </div>
  <!--d-flex ends here-->
@endsection
<!--add_post section ends here-->

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
<!-- JavaScript files end here-->
@endsection
