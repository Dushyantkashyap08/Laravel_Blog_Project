@extends('admin-panel.layouts.main')

    @section('charts')
    <div class="d-flex align-items-stretch">

      @include('admin-panel.layouts.sidebar')
   
      <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Charts</h2>
          </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Charts            </li>
          </ul>
        </div>
        <section>
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-8">
                <div class="line-chart block chart">
                  <div class="title"><strong>Line Chart Example</strong></div>
                  <canvas id="lineChartCustom1"></canvas>
                </div>
              </div>
              <div class="col-lg-4">       
                <div class="lin-chart block chart">
                  <div class="title"><strong>Line Chart Example</strong></div>
                  <div class="line-chart chart margin-bottom-sm">
                    <canvas id="lineChartCustom2"></canvas>
                  </div>
                  <div class="line-chart chart">
                    <canvas id="lineChartCustom3"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="chart block">
                  <div class="title"> <strong>Bar Chart Example</strong></div>
                  <div class="bar-chart chart margin-bottom-sm">
                    <canvas id="barChartCustom1"></canvas>
                  </div>
                  <div class="bar-chart chart">
                    <canvas id="barChartCustom2"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-lg-8">
                <div class="bar-chart block chart">
                  <div class="title"><strong>Bar Chart Example</strong></div>
                  <div class="bar-chart chart">
                    <canvas id="barChartCustom3"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="pie-chart chart block">
                  <div class="title"><strong>Pie Chart Example</strong></div>
                  <div class="pie-chart chart margin-bottom-sm">
                    <canvas id="pieChartCustom1"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="doughnut-chart chart block">
                  <div class="title"><strong>Pie Chart Example</strong></div>
                  <div class="doughnut-chart chart margin-bottom-sm">
                    <canvas id="doughnutChartCustom1"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="polar-chart chart block">
                  <div class="title"><strong>Polar Chart Example</strong></div>
                  <div class="polar-chart chart margin-bottom-sm">
                    <canvas id="polarChartCustom"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="radar-chart chart block">
                  <div class="title"><strong>Radar Chart Example</strong></div>
                  <div class="radar-chart chart margin-bottom-sm">
                    <canvas id="radarChartCustom"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
@endsection
    <!-- JavaScript files-->
    <script src="admin-template/vendor/jquery/jquery.min.js"></script>
    <script src="admin-template/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="admin-template/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="admin-template/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="admin-template/vendor/chart.js/Chart.min.js"></script>
    <script src="admin-template/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="admin-template/js/charts-custom.js"></script>
    <script src="admin-template/js/front.js"></script>
  </body>
</html>