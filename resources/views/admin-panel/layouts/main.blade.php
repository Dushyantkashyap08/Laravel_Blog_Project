<!--layouts.header starts here-->
@include('admin-panel.layouts.header')
<!--layouts.header ends here-->

    <!--yield section starts here-->
    @yield('dashboard')
    @yield('comments')
    @yield('add_post')
    @yield('show_post')
    @yield('script')
    <!--yield section ends here-->
    
<!--layouts.footer starts here-->
@include('admin-panel.layouts.footer')
<!--layouts.footer ends here-->
    
    @yield('login')
    @yield('register')