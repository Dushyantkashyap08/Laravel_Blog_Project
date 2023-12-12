@php
use Illuminate\Support\Str;
@endphp
<!--extending layouts.main here-->
@extends('blog.layouts.main')

@section('my_posts')
    @foreach($data as $item)
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap -m-4">
                <div class="p-4 md:w-1/3">
                    <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                        <img class="lg:h-48 md:h-36 w-full object-cover object-center"
                            src="{{ asset('UploadedImages/'.$item->image) }}" alt="blog image">
                        <div class="p-6">
                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">{{ $item->title }}</h1>
                            <p id="description{{ $item->id }}" class="leading-relaxed mb-3">{{ Str::limit($item->description, 300) }}</p>
                            <div class="flex items-center flex-wrap ">
                                <button class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0 learn-more-btn"
                                data-target="{{ $item->id }}">Learn More
                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                </svg>
                            </button>
                                <!-- Add your other elements here -->
                            </div>
                        </div>
                    </div>
                    <a href="{{url('my_post_del',$item->id)}}" class="btn btn-danger" onclick="confirmation(event)">Delete</a>
                </div>
            </div>
        </div>
    </section>
    @endforeach
@endsection

@section('script')
    <!-- script section-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
   
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- javascript -->
  
    <script>
        $(document).ready(function () {
            $('.learn-more-btn').on('click', function () {
                var targetId = $(this).data('target');
                var description = $('#description' + targetId);
                description.toggleClass('expanded');
    
                if (description.hasClass('expanded')) {
                    $(this).text('Show Less');
                } else {
                    $(this).text('Learn More');
                }
            });
        });
    </script>
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
    <script src="js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <!-- script ends here-->
@endsection
