<!--layouts.header starts here-->
@include('blog.layouts.header')
<!--layouts.header ends here-->


    <!--yield section starts here-->
    @yield('homepage')
    @yield('post_details')
    @yield('user_post')
    @yield('my_posts')
    @yield('about')
    @yield('contact')
    @yield('script')
    <!--yield section ends here-->

<!--layouts.footer starts here-->
@include('blog.layouts.footer')
<!--layouts.footer ends here-->
