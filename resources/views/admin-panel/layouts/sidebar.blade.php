<!-- Sidebar Navigation-->
<nav id="sidebar">
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center">
      <div class="avatar"><img src="admin-template/img/avatar-6.jpg" alt="..." class="img-fluid rounded-circle"></div>
      <div class="title">
        <h1 class="h5">Mark Stephen</h1>admin-template/
        <p>Web Designer</p>
      </div>
    </div>
    <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
    <ul class="list-unstyled">
            <li class="active"><a href="{{url('/home')}}"> <i class="icon-home"></i>Home </a></li>
            <li><a href="{{url('add_post')}}"> <i class="icon-grid"></i>Add Post </a></li>
            <li><a href="{{url('comments_table')}}"> <i class="fa fa-bar-chart"></i>Comments</a></li>
            <li><a href="{{url('show_post')}}"> <i class="icon-padnote"></i> Show Post </a></li>
    </ul>
</nav>
  <!-- Sidebar Navigation end-->