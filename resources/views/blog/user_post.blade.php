<!--extending layouts.main here-->
@extends('blog.layouts.main')

@section('user_post')

    @include('sweetalert::alert')

      <!-- services section start -->
      <div class="col-lg-6" style="margin:auto; position:relative; top:50px;">
        
        <div class="card" style="width: 100%; background-color: lightgrey; height:550px; ">
            <div class="card-body">
                <h5 class="card-title" style="text-align: center; font-size:30px; padding: 20px; color:white; letter-spacing: 5px;">Create Post</h5>
                <form action="{{url('create_post')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="form-control-label">Post Title</label>
                        <input type="text" name="title" placeholder="enter title" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                        <label class="form-control-label">Post Descriptiton</label>
                        <textarea name="description" class="form-control form-control-lg" placeholder="enter description"></textarea>
                    </div>
                    <br>
                    <div class="form-group">
                        <label class="form-control-label">Add Image</label>
                        <input type="file" placeholder="add image" name="image" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="submit" value="Post" class="btn btn-primary btn-lg btn-block">
                    </div>
                </form>
            </div>
        </div>
    </div>
      <!-- services section end -->
@endsection


@section('script')
    <!-- script section-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- javascript --> 
    <script src="js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>    
    <!-- script ends here-->
@endsection