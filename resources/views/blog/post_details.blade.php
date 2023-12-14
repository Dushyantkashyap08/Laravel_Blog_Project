<!-- Extending layouts.main here -->
@extends('blog.layouts.main')

@section('post_details')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="card p-4 shadow-lg rounded-lg border-0">
                <img src="{{ asset('UploadedImages/'.$post->image) }}" class="img-fluid rounded-lg w-100 mb-4" alt="Image">

                <div class="card-body">
                    <h1 class="card-title display-4 fw-bold text-primary mb-3">{{ $post->title }}</h1>

                    <p class="card-text lead mb-4">{{ $post->description }}</p>
                </div>
            </div>
        </div>
    </div>
</div>



    @if(session()->has('success'))
      <div class="alert alert-success">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
          {{ session()->get('success') }}
      </div>
    @endif

    <!-- Comments Section -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h1 style="font-size: 40px;">Comment Section</h1>
            </div>
        </div>

        <!-- Alert for Success -->
        <div class="w-full h-1 bg-indigo-500 rounded mt-2 mb-4"></div>

        <!-- User Comment Section -->
        
        <div class="md:flex-grow flex items-center" style="background-color: lightgrey; border-radius: 20px; padding-bottom: 10px; margin-bottom: 50px;">
            <div class="w-20 h-20 rounded-full inline-flex items-center justify-center bg-gray-200 text-gray-400">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                    <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                </svg>
            </div>
            <div class="ml-4">
                <h2 class="font-medium title-font mt-4 text-gray-900 text-lg">Jhon Doe</h2>
                <p class="leading-relaxed">Bhai maza aagya website dekh k. </p>
            </div>
        </div>

        @foreach($data as $item)
        <div class="md:flex-grow flex items-center" style="background-color: lightgrey; border-radius: 20px; padding-bottom: 10px; margin-bottom: 50px;">
            <div class="w-20 h-20 rounded-full inline-flex items-center justify-center bg-gray-200 text-gray-400">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                    <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                </svg>
            </div>
            <div class="ml-4">
                <h2 class="font-medium title-font mt-4 text-gray-900 text-lg">{{$item->user_name}}</h2>
                <p class="leading-relaxed">{{$item->comment}}</p>
            </div>
        </div>
        @endforeach
        
        <!-- Leave a Comment Section -->
        <div class="row">
            <div class="col-md-12">
                <h1 style="font-size: 22px; text-decoration: underline;">Leave a Comment below</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form method="get" action="{{ route('submit_comment', $post->id) }}">
                    @csrf
                    <div class="mb-3">
                        <label for="comment-text" class="form-label">Comment</label>
                        <textarea class="form-control" name="comment" id="comment-text" rows="3" placeholder="Enter your comment"></textarea>
                    </div>
                    
                    <!-- Display Submit or Register Button -->
                    @if(Route::has('login'))
                        @auth
                            <input type="submit" class="btn btn-primary" value="Submit Button" style="background-color: #007bff;color: #fff;">
                        @else
                            <a href="{{ route('register') }}" class="btn btn-primary">Register First</a>
                        @endauth
                    @endif
                </form>
            </div>
        </div>
    </div>

    <!-- Similar Posts Section -->
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col">
                <div class="w-full h-1 bg-indigo-500 rounded mt-2 mb-4"></div>
                <div class="flex flex-wrap sm:flex-row flex-col py-6 mb-12">
                    <h1 class="sm:w-2/5 text-gray-900 font-medium title-font text-3xl mb-2 sm:mb-0">You may also like...</h1>
                </div>
            </div>
            <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
                @foreach($otherPosts as $items)
                    <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                        <div class="rounded-lg h-64 overflow-hidden">
                            <img alt="content" class="object-cover object-center h-full w-full" src="{{ asset('UploadedImages/'.$items->image) }}">
                        </div>
                        <h2 class="text-xl font-medium title-font text-gray-900 mt-5">{{ $items->title }}</h2>
                        <p class="text-base leading-relaxed mt-2">{{ Str::limit($items->description, 200) }}</p>
                        <div class="btn_main" style=""><a href="{{ url('post_details', $items->id) }}" style="margin-left: -10px; margin-bottom: 40px">Read More</a></div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

@section('script')
    <!-- script section-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            // Read More Button Click Event
            $(document).on('click', '.read-more', function (event) {
                event.preventDefault();
                $('.full-description').toggle();
            });
        });
    </script>
    <!-- script ends here-->
@endsection
