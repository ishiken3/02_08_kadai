<?php
//外部ファイルとしてグラフ表示のdata.phpファイルを呼び出し
require('data.php');
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.min.js"></script>

  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>ダッシュボード</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />


  <!-- Bootstrap core CSS     -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Animation library for notifications   -->
  <link href="assets/css/animate.min.css" rel="stylesheet"/>

  <!--  Paper Dashboard core CSS    -->
  <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>


  <!--  CSS for Demo Purpose, don't include it in your project     -->
  <link href="assets/css/demo.css" rel="stylesheet" />


  <!--  Fonts and icons     -->
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
  <link href="assets/css/themify-icons.css" rel="stylesheet">

</head>
<body>

  <div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

 <div class="sidebar-wrapper">
  <div class="logo">
    <a href="http://www.creative-tim.com" class="simple-text">
      管理画面
    </a>
  </div>

  <ul class="nav">
    <li class="active">
           <li  class="active">
                <a href="dashboard.php">
                    <i class="ti-panel"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li>
                <a href="input.php">
                    <i class="ti-user"></i>
                    <p>Input</p>
                </a>
            </li>
             <li>
                <a href="user_ichiran.php">
                    <i class="ti-menu-alt"></i>
                    <p>user_ichiran</p>
                </a>
            </li>
            <li class="active-pro">
                <a href="upgrade.html">
                    <i class="ti-export"></i>
                    <p>Upgrade to PRO</p>
                </a>
            </li>
  </ul>
</div>
</div>

<div class="main-panel">
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar bar1"></span>
          <span class="icon-bar bar2"></span>
          <span class="icon-bar bar3"></span>
        </button>
        <a class="navbar-brand" href="#">Dashboard</a>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="ti-panel"></i>
              <p>Stats</p>
            </a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="ti-bell"></i>
              <p class="notification">5</p>
              <p>Notifications</p>
              <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
              <li><a href="#">Notification 1</a></li>
              <li><a href="#">Notification 2</a></li>
              <li><a href="#">Notification 3</a></li>
              <li><a href="#">Notification 4</a></li>
              <li><a href="#">Another notification</a></li>
            </ul>
          </li>
          <li>
            <a href="#">
              <i class="ti-settings"></i>
              <p>Settings</p>
            </a>
          </li>
        </ul>

      </div>
    </div>
  </nav>


  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-sm-6">
          <div class="card">
            <div class="content">
              <div class="row">
                <div class="col-xs-5">
                  <div class="icon-big icon-warning text-center">
                    <i class="ti-user"></i>
                  </div>
                </div>
                <div class="col-xs-7">
                  <div class="numbers">
                    <p>ユーザー数</p>
                    <?php echo $result_id['uu'];?>
                  </div>
                </div>
              </div>
              <div class="footer">
                <hr />
                <div class="stats">
                  <i class="ti-reload"></i> countで表示
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="card">
            <div class="content">
              <div class="row">
                <div class="col-xs-5">
                  <div class="icon-big icon-success text-center">
                    <i class="ti-stats-up"></i>
                  </div>
                </div>
                <div class="col-xs-7">
                  <div class="numbers">
                    <p>売上</p>
                    ¥<?php echo $result_sales['sum_sales'];?>
                  </div>
                </div>
              </div>
              <div class="footer">
                <hr />
                <div class="stats">
                  <i class="ti-calendar"></i> sumで表示
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="card">
            <div class="content">
              <div class="row">
                <div class="col-xs-5">
                  <div class="icon-big icon-danger text-center">
                    <i class="ti-pulse"></i>
                  </div>
                </div>
                <div class="col-xs-7">
                  <div class="numbers">
                    <p>平均顧客単価</p>
                    ¥<?php echo  $result_sales['sum_sales']/$result_id['uu'];?>
                  </div>
                </div>
              </div>
              <div class="footer">
                <hr />
                <div class="stats">
                  <i class="ti-timer"></i> 四則演算で表示

                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="card">
            <div class="content">
              <div class="row">
                <div class="col-xs-5">
                  <div class="icon-big icon-info text-center">
                    <i class="ti-wallet"></i>
                  </div>
                </div>
                <div class="col-xs-7">
                  <div class="numbers">
                    <p>月間最大売上単価</p>
                    ¥<?php echo $result_m_sales['m_sales'];?>
                  </div>
                </div>
              </div>
              <div class="footer">
                <hr />
                <div class="stats">
                  <i class="ti-reload"></i> maxとgroup byで表示
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">

        <div class="col-md-12">
          <div class="card">
            <div class="header">
              <h4 class="title">日別売上推移</h4>
              <p class="category">2018年5月</p>
            </div>
            <div class="content">
              <canvas id="myLine2Chart"></canvas><!--チャート記載部分-->
              <div class="footer">

                <hr>
                <div class="stats">
                  <i class="ti-reload"></i> BETWEENで日毎に表示
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="card">
            <div class="header">
              <h4 class="title">円グラフ</h4>
              <p class="category">ここは見た目だけ</p>
            </div>
            <div class="content">
              <canvas id="chartPrice"></canvas><!--チャート記載部分-->
              <div class="footer">
                <hr>
                <div class="stats">
                  <i class="ti-timer"></i> 見た目だけ
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card ">
            <div class="header">
              <h4 class="title">商品別売上</h4>
              <p class="category">2018年5月</p>
            </div>
            <div class="content">
              <canvas id="myBarChart"></canvas><!--チャート記載部分-->
              <div class="footer">
                <hr>
                <div class="stats">
                  <i class="ti-check"></i> 商品ごとsumで表示
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <footer class="footer">
    <div class="container-fluid">
      <nav class="pull-left">
        <ul>

          <li>
            <a href="http://www.creative-tim.com">
              Creative Tim
            </a>
          </li>
          <li>
            <a href="http://blog.creative-tim.com">
             Blog
           </a>
         </li>
         <li>
          <a href="http://www.creative-tim.com/license">
            Licenses
          </a>
        </li>
      </ul>
    </nav>

  </div>
</footer>

</div>
</div>


</body>

<!--   Core JS Files   -->
<script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src="assets/js/bootstrap-checkbox-radio.js"></script>

<!--  Charts Plugin -->
<script src="assets/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!-- Paper Dashboard Core javascript and methods for Demo purpose -->
<script src="assets/js/paper-dashboard.js"></script>

<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>

<script type="text/javascript">
 $(document).ready(function(){
   demo.initChartist();
 });
</script>

<script>
    //チャートJS 線グラフ
    var time_27 = <?php echo json_encode($result_time_27['time_27']); ?>;
    var time_28 = <?php echo json_encode($result_time_28['time_28']); ?>;
    var time_29 = <?php echo json_encode($result_time_29['time_29']); ?>;
    var time_30 = <?php echo json_encode($result_time_30['time_30']); ?>;
        //折れ線グラフ2
        var ctx = document.getElementById("myLine2Chart");
        var myLine2Chart = new Chart(ctx, {
  //グラフの種類
  type: 'line',
  //データの設定
  data: {
      //データ項目のラベル
      labels: ["2018/5/27", "2018/5/28", "2018/5/29", "2018/5/30"],
      //データセット
      datasets: [
      {
              //凡例
              label: "日別売上推移",
              //面の表示
              fill: false,
              //線のカーブ
              lineTension: 0,
              //背景色
              backgroundColor: "rgba(179,181,198,0.2)",
              //枠線の色
              borderColor: "rgba(179,181,198,1)",
              //結合点の枠線の色
              pointBorderColor: "rgba(179,181,198,1)",
              //結合点の背景色
              pointBackgroundColor: "#fff",
              //結合点のサイズ
              pointRadius: 10,
              //結合点のサイズ（ホバーしたとき）
              pointHoverRadius: 15,
              //結合点の背景色（ホバーしたとき）
              pointHoverBackgroundColor: "rgba(179,181,198,1)",
              //結合点の枠線の色（ホバーしたとき）
              pointHoverBorderColor: "rgba(220,220,220,1)",
              //結合点より外でマウスホバーを認識する範囲（ピクセル単位）
              pointHitRadius: 15,
              //グラフのデータ
              data: [time_27, time_28, time_29, time_30]
            }
            ]
          },
  //オプションの設定
  options: {
      //軸の設定
      scales: {
          //縦軸の設定
          yAxes: [{
              //目盛りの設定
              ticks: {
                  //最小値を0にする
                  beginAtZero: true
                }
              }]
            },
      //ホバーの設定
      hover: {
          //ホバー時の動作（single, label, dataset）
          mode: 'single'
        }
      }
    });
  </script>


  <script type="text/javascript">
    //ドーナツグラフ
    var ctx = document.getElementById("chartPrice");
    var myPieChart = new Chart(ctx, {
            //グラフの種類
            type: 'doughnut',
            //データの設定
            data: {
                //データ項目のラベル
                labels: ["30万円以下", "30万～50万", "60万～90万", "100万～200万", "200万円以上"],
                //データセット
                datasets: [{
                    //背景色
                    backgroundColor: [
                    "#DA372B",
                    "#EAAF00",
                    "#3A9A4B",
                    "#3A7CEC",
                    "#8042FF"
                    ],
                    //背景色(ホバーしたとき)
                    hoverBackgroundColor: [
                    "#DA372B",
                    "#EAAF00",
                    "#3A9A4B",
                    "#3A7CEC",
                    "#8042FF"
                    ],
                    //グラフのデータ
                    data: [314, 80, 108, 79, 10]
                  }]
                }
              });
            </script>


    <script type="text/javascript">//棒グラフ
    var s_a = <?php echo  $result_sales_a['sum_sales_a'];?>;
    var s_b = <?php echo  $result_sales_b['sum_sales_b'];?>;
    var s_c = <?php echo  $result_sales_c['sum_sales_c'];?>;
    var s_d = <?php echo  $result_sales_d['sum_sales_d'];?>;
    var s_e = <?php echo  $result_sales_e['sum_sales_e'];?>;
    var s_f = <?php echo  $result_sales_f['sum_sales_f'];?>;

    var ctx = document.getElementById("myBarChart");
    var myBarChart = new Chart(ctx, {
  //グラフの種類
  type: 'bar',
  //データの設定
  data: {
      //データ項目のラベル
      labels: ["商品A", "商品B", "商品C", "商品D", "商品E", "書譜品F"],
      //データセット
      datasets: [{
          //凡例
          label: "契約数",
          //背景色
          backgroundColor: "rgba(75,192,192,0.4)",
          //枠線の色
          borderColor: "rgba(75,192,192,1)",
          //グラフのデータ
          data: [s_a, s_b,s_c,s_d,s_e,s_f]
        }]
      },
  //オプションの設定
  options: {
      //軸の設定
      scales: {
          //縦軸の設定
          yAxes: [{
　　　　　　　　　//目盛りの設定
ticks: {
                  //開始値を0にする
                  beginAtZero:true,
                }
              }]
            }
          }
        });</script>

        </html>
