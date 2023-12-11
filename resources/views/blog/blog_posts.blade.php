<!--extending layouts.main here-->
@extends('blog.layouts.main')

@section('blog_posts')
      <!-- services section start -->
      <div class="services_section layout_padding">
         <div class="container">
            <h1 class="services_taital" align="center">Blog Posts</h1>
            <div class="services_section_2">
               <div class="row">

                  @foreach($post as $posts)

                     <div class="col-md-4">
                        <div><img src="UploadedImages/{{$posts->image}}" class="services_img" style="height:300px ; width:400px;"></div>
                        <h4>{{$posts->title}}</h4>
                        <p>post By <strong>{{$posts->name}}</strong></p>
                        <div class="btn_main"><a href="{{url('post_details',$posts->id)}}">Read More</a></div>
                     </div>

                  @endforeach
               </div>
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