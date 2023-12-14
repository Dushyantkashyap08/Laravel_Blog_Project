<!--extending layouts.main here-->
@extends('blog.layouts.main')

@section('about')
      

<section class="about-section py-5 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-6 d-flex flex-column justify-content-center">
          <h2 class="display-4 text-primary">About Blogomatic</h2>
          <p class="lead">Welcome to your one-stop shop for all things trending, educational, and beyond! We're a passionate team driven by curiosity and a love of sharing knowledge. Dive into the latest tech, explore history's mysteries, or get lost in the beauty of words – there's something for everyone.</p>
          <a href="{{route('register')}}" class="btn btn-primary">Join our community!</a>
        </div>
        <div class="col-md-6">
          <img src="images/team.jpg" alt="Blogomatic Team" class="img-fluid rounded shadow-lg">
        </div>
      </div>
    </div>
  </section>
  
  <section class="team-section py-5 bg-white">
    <div class="container">
      <h2 class="display-4 text-center mb-5">The Masterminds Behind Blogomatic</h2>
      <div class="row">
        <div class="col-lg-4">
          <div class="team-member text-center">
            <img src="images/1.png" alt="John Doe" class="img-fluid rounded-circle mb-3">
            <h3>John Doe</h3>
            <p class="text-muted">Co-Founder & Idea Machine</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="team-member text-center">
            <img src="images/2.jpg" alt="Jane Doe" class="img-fluid rounded-circle mb-3">
            <h3>Jane Doe</h3>
            <p class="text-muted">Lead Developer & Digital Sorceress</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="team-member text-center">
            <img src="images/3.jpg" alt="Bob Smith" class="img-fluid rounded-circle mb-3">
            <h3>Bob Smith</h3>
            <p class="text-muted">Designer & Artistic Guru</p>
          </div>
        </div>
      </div>
    </div>
  </section>
 
     <!-- Bootstrap JS (optional, but recommended for certain features) -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
      <!-- about section end -->
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
    <style>
        .about-section {
        background-color: #f5f5f5;
        }

        .team-section {
        background-color: #fff;
        }

        .team-member {
        border: 1px solid #ddd;
        border-radius: 10px;
        padding: 20px;
        }
    </style>
    <!-- javascript --> 
    <script src="js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>    
    <!-- script ends here-->
@endsection