<!--extending layouts.main here-->
@extends('blog.layouts.main')

@section('my_posts')

    @foreach($data as $item)
            <div>
                <img class="post_img" src="UploadedImages/{{$item->image}}">
                <h2>{{$item->title}}</h2>
                <p>{{$item->description}}</p>
            </div>
    @endforeach
     
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