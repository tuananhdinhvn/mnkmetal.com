@extends('admin.master')
@section('title', 'Trang quản trị')


@section('css')
<style>
    body {
        background: #fff !important;
    }
</style>
@endsection


@section('scripthead')
<script type="text/javascript" src="js/loader.js"></script>
<script type="text/javascript">
  google.charts.load('current', {'packages':['bar']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ['Months', 'Revenue'],
        <?php
            for ($i = 0; $i < $count_month_report; $i++) {
                echo "['".$arr_month[$i]."',  ".$arr_month_revenue[$i]."],";
            }
        ?>
    ]);
    var options = {
      chart: {
        title: 'Doanh thu tháng',
        subtitle: '',
      }
    };

    var chart = new google.charts.Bar(document.getElementById('columnchart_material'));
    chart.draw(data, google.charts.Bar.convertOptions(options));
  }
</script>
@endsection


@section('main')
  <!--main content start-->
  <section id="main-content">
      <section class="wrapper">
          <div class="row">
              <div class="col-lg-12 main-chart">
                    <!--CUSTOM CHART START -->
                    {{--  <div class="border-head">
                        <h3>Báo cáo doanh thu</h3>
                    </div> --}}

                    {{--  <!--Google chart-->
                    <div id="columnchart_material" style="width: 100%; height: 500px;"></div> --}}
                    
                    <div class="row mt">
                        <!-- SERVER STATUS PANELS -->
                        <div class="col-md-12 col-sm-12 mb">
                            <div class="weather pn">
                                <i class="fa fa-users fa-4x"></i>
                                <h2>{{ $all_new_customer_count }} khách mới cần xác nhận</h2>
                            </div>
                        </div>

                        {{-- 
                        <div class="col-md-12 col-sm-12 mb">
                            <div class="weather pn">
                                <i class="fa fa-users fa-4x"></i>
                                <h2>{{ $new_customer_event_count }} khách đăng ký sự kiện</h2>
                            </div>
                        </div>
                         --}}


                        {{--  <!-- /col-md-4-->
                        <div class="col-md-4 col-sm-4 mb">
                            <!-- INSTAGRAM PANEL -->
                            <div class="weather pn">
                                <i class="fa fa-comments fa-4x"></i>
                                <h2>11 new comment</h2>
                            </div>
                        </div>
                        <!-- /col-md-4 -->
                        <div class="col-md-4 col-sm-4 mb">
                            <!-- INSTAGRAM PANEL -->
                            <div class="weather pn">
                                <i class="fa fa-tags fa-4x"></i>
                                <h2>Product list</h2>
                            </div>
                        </div>
                        <!-- /col-md-4 -->  --}}
                    </div>
                    <!-- /row -->
                
              </div>
             
          </div>
      </section>
  </section>
  <!--main content end-->
@endsection


@section('script')
    
@endsection