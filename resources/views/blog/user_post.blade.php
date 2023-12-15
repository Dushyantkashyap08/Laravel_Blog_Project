<!--extending layouts.main here-->
@extends('blog.layouts.main')

<!-- user_post section start -->
@section('user_post')
    @include('sweetalert::alert')

    <!-- services section start -->
    <div class="col-lg-6" style="margin:auto; position:relative; top:20px; margin-bottom:50px;">
        <div class="card" style="width: 100%; background-color: lightgrey; height:500px; ">
            <div class="card-body">
                <h5 class="card-title" style="text-align: center; font-size:30px; color:white; letter-spacing: 5px;">Create Post</h5>
                <!-- form starts here -->
                <form action="{{url('create_post')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="form-control-label">Post Title</label>
                        <input type="text"  name="title" placeholder="enter title" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                        <label class="form-control-label">Post Description</label>
                        <textarea name="description"  class="form-control form-control-lg" placeholder="enter description"></textarea>
                    </div>
                    <br>
                    <div class="form-group">
                        <label class="form-control-label">Add Image</label>
                        <input type="file"  placeholder="add image" name="image" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="submit" value="Post" class="btn btn-primary btn-lg btn-block">
                    </div>
                </form>
                <!-- form ends here -->
            </div>
        </div>
    </div>
    <!-- services section end -->
@endsection
<!-- user_post section ends -->

<!-- script section start -->
@section('script')
    <!-- Bootstrap and other scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- script ends here-->
@endsection
<!-- script section ends -->