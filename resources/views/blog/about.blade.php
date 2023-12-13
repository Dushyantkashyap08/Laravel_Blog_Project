<!--extending layouts.main here-->
@extends('blog.layouts.main')

@section('about')
      <!-- about section start -->
      {{-- <div class="about_section layout_padding">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-6">
                  <div class="about_taital_main">
                     <h1 class="about_taital">About Us</h1>
                     <p class="about_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All </p>
                     <div class="readmore_bt"><a href="#">Read More</a></div>
                  </div>
               </div>
               <div class="col-md-6 padding_right_0">
                  <div><img src="images/about-img.png" class="about_img"></div>
               </div>
            </div>
         </div>
      </div> --}}

      <section class="about-section">
         <div class="container">
             <div class="row">
                 <div class="col-lg-6">
                     <h2 class="display-4">About Us</h2>
                     <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                 </div>
                 <div class="col-lg-6">
                     <img src="https://via.placeholder.com/600x400" alt="About Us Image" class="img-fluid rounded">
                 </div>
             </div>
         </div>
     </section>
 
     <!-- Team Section -->
     <section class="team-section">
         <div class="container" style="margin-bottom: 30px;">
             <h2 class="display-4 text-center mb-5">Our Team</h2>
             <div class="row">
                 <div class="col-lg-4">
                     <div class="team-member">
                         <img src="https://via.placeholder.com/150" alt="Team Member 1" class="img-fluid">
                         <h3>John Doe</h3>
                         <p>Co-Founder</p>
                     </div>
                 </div>
                 <div class="col-lg-4">
                     <div class="team-member">
                         <img src="https://via.placeholder.com/150" alt="Team Member 2" class="img-fluid">
                         <h3>Jane Doe</h3>
                         <p>Lead Developer</p>
                     </div>
                 </div>
                 <div class="col-lg-4">
                     <div class="team-member">
                         <img src="https://via.placeholder.com/150" alt="Team Member 3" class="img-fluid">
                         <h3>Bob Smith</h3>
                         <p>Designer</p>
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
    <!-- javascript --> 
    <script src="js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>    
    <!-- script ends here-->
@endsection