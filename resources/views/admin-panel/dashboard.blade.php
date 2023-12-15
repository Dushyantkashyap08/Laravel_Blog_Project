<!--extending layouts.main here-->
@extends('admin-panel.layouts.main')

  <!--dashboard goes here-->
  @section('dashboard')
    <div class="d-flex align-items-stretch">
      
      <!--sidebar goes here-->
      @include('admin-panel.layouts.sidebar')
      <!--sidebar ends here-->

       <!--page-content goes here-->
        <div class="page-content">

          <!--page-header goes here-->
          <div class="page-header">
            <div class="container-fluid">
              <h2 class="h5 no-margin-bottom">Dashboard</h2>
            </div>
          </div>
          <!--page-header ends here-->

          <!--no-padding section goes here-->
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
                      <div class="number dashtext-2">{{$postCount}}</div>
                    </div>
                    <div class="progress progress-template">
                      <div role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-2"></div>
                    </div>
                  </div>
                </div>
                <!--new posts ends here -->

                <!--new comments-->
                <div class="col-md-3 col-sm-6" >
                  <div class="statistic-block block" style="width:520px;"> 
                    <div class="title">
                      <div class="icon"><i class="icon-paper-and-pencil"></i></div><strong>Top Comments</strong>
                    </div>
                    <!-- Add your recent comments content here -->
                      <ul>
                        @foreach($comments as $commentData)
                            <li>
                              {{$commentData->comment}}
                              <ul style="list-style-type:square">
                                    <li>{{$commentData->post->title}}</li>
                              </ul>
                            </li>
                        @endforeach
                    </ul>
                  </div>
                </div>
                <!--new comments ends here -->

              </div>
            </div>
            {{-- @endforeach --}}
          </section>
          <!--no-padding section ends here-->

          <!--no-padding section goes here-->
          <section class="no-padding-bottom">
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-8" style="margin:auto;">
                  <div class="line-cahrt block">
                    <canvas id="lineCahrt"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!--no-padding section ends here-->
        </div>
    </div>
    <!--page-content ends here-->
@endsection
<!--section ends here-->

@section('script')
<script src="admin-template/vendor/chart.js/Chart.min.js"></script>
<script>
  var userPostsCtx = document.getElementById('lineCahrt').getContext('2d');
var userPostsData = {!! json_encode($userPostsData) !!};
var userPostsLabels = Object.keys(userPostsData);
var userPostsValues = Object.values(userPostsData);

var usersPostsChart = new Chart(userPostsCtx, {
    type: 'bar',
    data: {
        labels: userPostsLabels,
        datasets: [{
            label: 'Number of Posts by User',
            data: userPostsValues,
            backgroundColor: 'rgba(255, 99, 132, 0.2)',
            borderColor: 'rgba(255, 99, 132, 1)',
            borderWidth: 1,
            fill: true // Enable fill to create a stacked area
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true,
                stacked: true // Enable stacking for the y-axis
            },
            x: {
                stacked: true // Enable stacking for the x-axis (category scale)
            }
        }
    }
});
</script>
    <!-- JavaScript files-->
    <script src="admin-template/vendor/jquery/jquery.min.js"></script>
    <script src="admin-template/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="admin-template/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="admin-template/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="admin-template/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="admin-template/js/front.js"></script>
    <!-- JavaScript files ends here-->
@endsection
  