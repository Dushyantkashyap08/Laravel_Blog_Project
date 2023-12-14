<!--extending layouts.main here-->
@extends('blog.layouts.main')

@section('contact')
      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container contact_form">
             <form action="{{url('send_mail')}}" method="post">
                 @csrf
                 <h1 class="contact_taital">Request A Call Back</h1>
 
                 @if(session()->has('success'))
                 <div class="alert alert-success">
                     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                     {{session()->get('success')}}
                 </div>
                 @endif
                 <div class="email_text">
                     <div class="form-group">
                         <input type="text" class="email-bt" placeholder="Name" name="name" required>
                     </div>
                     <div class="form-group">
                         <input type="email" class="email-bt" placeholder="Email" name="email" required>
                     </div>
                     <div class="form-group">
                         <textarea class="massage-bt" placeholder="Message" rows="5" id="comment" name="message"
                             required></textarea>
                     </div>
                     <div class="send_btn">
                         <input type="submit" class="btn btn-primary" style="width:100%;" name="save" value="Submit" />
                     </div>
                 </div>
             </form>
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
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>    
      <!-- script ends here-->

      <style>

.contact_section {
            background-color: #f8f9fa; /* Light grey background color */
            padding: 50px 0;
        }

        .contact_form {
            max-width: 600px;
            margin: 0 auto;
            border: 1px solid #000; /* 1px solid black border */
            border-radius: 10px; /* Optional: Add some border radius for a rounded appearance */
            padding: 20px;
        }

        .contact_taital {
            text-align: center;
            color: #333;
        }

        .email_text {
            margin-top: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .email-bt,
        .massage-bt {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .send_btn {
            text-align: center;
        }
      </style>
@endsection