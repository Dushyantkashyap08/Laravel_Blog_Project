<!--extending layouts.main here-->
@extends('blog.layouts.main')

@section('contact')
      <!-- contact section start -->
      <div class="contact_section layout_padding">
        <div class="container">
          <h1 class="contact_taital">Request A Call Back</h1>
          <div class="email_text">
             <div class="form-group">
                <input type="text" class="email-bt" placeholder="Name" name="Email">
             </div>
             <div class="form-group">
                <input type="text" class="email-bt" placeholder="Phone Numbar" name="Email">
             </div>
             <div class="form-group">
                <input type="text" class="email-bt" placeholder="Email" name="Email">
             </div>
             <div class="form-group">
                <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
             </div>
             <div class="send_btn"><a href="#">SEND</a></div>
          </div>
        </div>
      </div>
      <!-- contact section end -->
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