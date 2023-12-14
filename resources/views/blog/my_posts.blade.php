@php
use Illuminate\Support\Str;
@endphp
<!--extending layouts.main here-->
@extends('blog.layouts.main')

@section('my_posts')
<section class="text-gray-600 body-font">
    <div class="container px-5 py-5 mx-auto">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach($data as $blog)
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('UploadedImages/'.$blog->image) }}" class="card-img-top" alt="blog image">
                    <div class="card-body">
                        <h1 class="card-title" style="font-size:23px;"><b>{{ $blog->title }}</b></h1>
                        <p class="card-text" id="blogDesc{{ $blog->id }}">
                            <span class="truncated-text">
                                {{ Str::limit($blog->description, 200) }}
                            </span>
                            <span class="full-description" style="display: none;">
                                {{ $blog->description }}
                            </span>
                            <br/>
                            <a href="javascript:void(0);" onclick="toggleDescription({{ $blog->id }})" id="seeMoreLink{{ $blog->id }}" class="btn btn-primary"><b>Read More</b></a>
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="{{ url('my_post_del', $blog->id) }}" class="btn btn-danger" onclick="confirmation(event)">Delete</a>
                    </div>
                </div>
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
        //category page 
        function toggleDescription(blogId) {
            var truncatedDesc = document.querySelector('#blogDesc' + blogId + ' .truncated-text');
            var fullDesc = document.querySelector('#blogDesc' + blogId + ' .full-description');
            var seeMoreLink = document.getElementById('seeMoreLink' + blogId);
        
            if (truncatedDesc.style.display !== 'none') {
                truncatedDesc.style.display = 'none';
                fullDesc.style.display = 'inline';
                seeMoreLink.innerHTML = '<b>Read Less</b>';
            } else {
                truncatedDesc.style.display = 'inline';
                fullDesc.style.display = 'none';
                seeMoreLink.innerHTML = '</b>Read More</b>';
            }
        }
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
@endsection
