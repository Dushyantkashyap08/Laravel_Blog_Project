<!-- Sidebar Navigation-->
<nav id="sidebar">
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center">
      <div class="avatar"><img src="images/admin.png" class="img-fluid rounded-circle"></div>
      <div class="title">
        <h1 class="h5">Dushyant Kashyap</h1>
        <p>Admin</p>
      </div>
    </div>
    <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
    <ul class="list-unstyled">
            <li class="active"><a href="{{url('/home')}}"> <i class="icon-home"></i>Dashboard </a></li>
            <li><a href="{{url('add_post')}}"> <i class="icon-grid"></i>Add Post</a></li>
            <li><a href="{{url('comments_table')}}"><i class="fa fa-bar-chart"></i>Comments</a></li>
            <li><a href="{{url('show_post')}}"><i class="icon-padnote"></i>Show Post</a></li>
    </ul>
</nav>
  <!-- Sidebar Navigation end-->