<!--extending layouts.main here-->
@extends('blog.layouts.main')

@section('post_details')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <!-- Form Container -->
            <div class="card">
                <!-- Image at the top -->
                <img src="{{ asset('UploadedImages/'.$post->image) }}" class="card-img-top" alt="Image">

                <!-- Form Content -->
                <div class="card-body">
                    <!-- Title -->
                    <h1 class="card-title" style="text-align: center"><b>{{$post->title}}</b></h1>

                    <!-- Short Description -->
                    <p class="card-text">{{$post->description}}</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!--comments-->
<section class="text-gray-600 body-font relative" style="position:relative; left:-130px;">
    <div class="container px-200 py-24 mx-auto">
        <div class="lg:w-1/2 md:w-2/3 mx-auto  pl-10">
            <h1 class="sm:text-3xl text-2x2 font-medium title-font mb-4 text-gray-900">Leave us with a reply...</h1>
            <div class="flex flex-wrap -m-2">
                <div class="p-2 w-full">
                    <div class="relative">
                        <label for="message" class="leading-7 text-sm text-gray-600">Comment below</label>
                        <textarea id="message" name="message" class="w-full bg-gray-100 bg-opacity-50 rounded border border-black-500 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-48 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                    </div>
                </div>
                <div class="p-2 w-full">
                    <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!--comments end here-->


<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-col">
        <div class="h-1 bg-gray-200 rounded overflow-hidden">
          <div class="w-100 h-full bg-grey-500"></div>
        </div>
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
          <h2 class="text-xl font-medium title-font text-gray-900 mt-5">{{$items->title}}</h2>
          <p class="text-base leading-relaxed mt-2">{{ Str::limit($items->description, 200) }}</p>
          <a class="text-indigo-500 inline-flex items-center mt-3">Learn More
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </a>
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

