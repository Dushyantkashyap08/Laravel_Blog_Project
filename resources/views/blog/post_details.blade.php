<!--extending layouts.main here-->
@extends('blog.layouts.main2')

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

                    <!--Post By-->
                    <h3 class="card-text">post by:     <i>{{$post->name}}</i></h3>

                    {{-- <!-- Full Description (Initially Hidden) -->
                    <p class="card-text full-description" style="display: none;">{{ $post->description }}</p>

                    <!-- Read More Button -->
                    <a href="#"  class="btn btn-primary read-more">Read More</a> --}}
                </div>
            </div>
        </div>
    </div>
</div>
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

