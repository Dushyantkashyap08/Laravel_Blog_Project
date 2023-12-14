@extends('admin-panel.layouts.main')

    @section('dashboard')
    <div class="d-flex align-items-stretch">
      
    @include('admin-panel.layouts.sidebar')

      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Dashboard</h2>
          </div>
        </div>
        <section class="no-padding-top no-padding-bottom">
          <div class="container-fluid">
            <div class="row">
              <!--new users-->
              <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="icon"><i class="icon-user-1"></i></div><strong>Total Users</strong>
                    </div>
                    <div class="number dashtext-1">{{$data}}</div>
                  </div>
                  <div class="progress progress-template">
                    <div role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-1"></div>
                  </div>
                </div>
              </div>
              <!--new user ends here -->

              <!--new posts -->
              <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="icon"><i class="icon-contract"></i></div><strong>All Posts</strong>
                    </div>
                    <div class="number dashtext-2">{{$post}}</div>
                  </div>
                  <div class="progress progress-template">
                    <div role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-2"></div>
                  </div>
                </div>
              </div>
              <!--new posts ends here -->

              <!--new comments-->
              <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                  <div class="title">
                    <div class="icon"><i class="icon-paper-and-pencil"></i></div><strong>Top Comments</strong>
                  </div>
                  <!-- Add your recent comments content here -->
                  
                  <ul>
                    
                    @foreach($comments as $comment)
                      <li>{{$comment->comment}}
                        <ul>
                          @foreach($post_title as $title)
                          <li>{{$title->title}}</li>
                          @endforeach
                        </ul>
                      </li>
                    @endforeach
                    
                  </ul>
                </div>
              </div>
              <!--new comments ends here -->

              <!--new likes-->
              {{-- <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="icon"><i class="icon-writing-whiteboard"></i></div><strong>New Likes</strong>
                    </div>
                    <div class="number dashtext-4">41</div>
                  </div>
                  <div class="progress progress-template">
                    <div role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-4"></div>
                  </div>
                </div>
              </div> --}}
              <!--new likes ends here -->
            </div>
          </div>
          {{-- @endforeach --}}
        </section>
        <section class="no-padding-bottom">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-4">
                <div class="bar-chart block no-margin-bottom">
                  <canvas id="barChartExample1"></canvas>
                </div>
                <div class="bar-chart block">
                  <canvas id="barChartExample2"></canvas>
                </div>
              </div>
              <div class="col-lg-8">
                <div class="line-cahrt block">
                  <canvas id="lineCahrt"></canvas>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
@endsection

@section('script')
    <!-- JavaScript files-->
    <script src="admin-template/vendor/jquery/jquery.min.js"></script>
    <script src="admin-template/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="admin-template/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="admin-template/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="admin-template/vendor/chart.js/Chart.min.js"></script>
    <script src="admin-template/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="admin-template/js/charts-home.js"></script>
    <script src="admin-template/js/front.js"></script>
    <!-- JavaScript files ends here-->
@endsection
  