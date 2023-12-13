@php
use Illuminate\Support\Str;
@endphp
<!--extending layouts.main here-->
@extends('blog.layouts.main')

@section('my_posts')
<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-wrap -m-4">
                @foreach($data as $item)
                <div class="p-4 md:w-1/3">
                    <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                        <img class="lg:h-48 md:h-36 w-full object-cover object-center"
                            src="{{ asset('UploadedImages/'.$item->image) }}" alt="blog image">
                        <div class="p-6">
                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">{{ $item->title }}</h1>
                            <p id="description{{ $item->id }}" class="leading-relaxed mb-3">{{ Str::limit($item->description, 200) }}</p>
                            <div class="flex items-center flex-wrap ">
                                <button class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0 learn-more-btn"
                                id="learn-more-btn{{ $item->id }}"
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
                @endforeach
            </div>
        </div>
    </section>
@endsection

@section('script')

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
   
    <script src="js/plugin.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script>
   <script>
$(document).ready(function(){
    $(".learn-more-btn").click(function(){
        var id = $(this).data('target');

        $.ajax({
            url: '/getFullDescription/' + id,
            method: 'GET',
            success: function(data) {
                $('#description' + id).text(data.description);
                $('#learn-more-btn' + id).text(data.button_text);
            }
        });
    });
});
</script>

</script>

    {{-- <script>
        $(document).ready(function(){
            $('.learn-more-btn').on('click', function() {
                var id = $(this).data('target');
                var descriptionElement = $('#description' + id);
                
                if(descriptionElement.hasClass('expanded')) {
                    descriptionElement.removeClass('expanded');
                    descriptionElement.text(descriptionElement.data('short'));
                } else {
                    descriptionElement.addClass('expanded');
                    descriptionElement.data('short', descriptionElement.text());
                    descriptionElement.text('Loading full description...');
                    
                    $.ajax({
                        url:route('getFullDescription', { id: targetId }),
                        method: "GET",
                        data:{_token:'{{csrf_token()}}'},
                        success: function(data) {
                            descriptionElement.text(data);
                        },
                        error: function() {
                            descriptionElement.text('Error loading full description.');
                        }
                    });
                }
            });
        });
        </script> --}}

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
    {{-- <script src="js/owl.carousel.js"></script> --}}
    {{-- <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script> --}}
    <!-- script ends here-->
@endsection
