<?php
//functions.phpから管理者DB接続関数を呼び出す
include("functions.php");
$pdo = db_conn();


//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM kanri_db");
$status = $stmt->execute();

//３．データ表示
$view="";
if($status==false){
  errorMsg($stmt);
}else{
  //Selectデータの数だけ自動でループしてくれる
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    $view .= '<tr>';
    $view .= '<td>';
    $view .= $result["id"];
    $view .= '</a>';
    $view .= '</td>';

    $view .= '<td>';
    $view .= '<a href="user_detail.php?id='.$result["id"].'">';
    $view .= $result["name"];
    $view .= '</td>';


    $view .= '<td>';
    $view .= $result["lid"];
    $view .= '</td>';


    $view .= '<td>';
    $view .= $result["kanri_flg"];
    $view .= '</td>';

    $view .= '<td>';
    $view .= $result["life_flg"];
    $view .= '</td>';



    $view .= '<td>';
    $view .= '<a href="delete.php?id='.$result["id"].'">';
    $view .= '<btn class="btn btn-sm btn-success btn-icon"><i class="ti-close"> 削除</i></btn>';
    $view .= '</a>';
    $view .= '<br>';
    $view .= '</td>';
   $view .= '</tr>';
    
  }
}
?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Paper Dashboard by Creative Tim</title>

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
           <li>
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
             <li  class="active">
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
                    <a class="navbar-brand" href="#">管理者一覧</a>
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
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">管理者一覧</h4>
                                <p class="category">kanri_dbから管理者の一覧を取得して表示しています。</p>
                            </div>
                            <div class="content table-responsive table-full-width">

                                <table class="table table-striped">

                                    <thead>
                                        <th>ID</th>
                                        <th>NAME</th>
                                        <th>USER_ID</th>
                                        <th>管理者フラグ</th>
                                        <th>使用者フラグ</th>
                                        <th>削除</th>
                                    </thead>
                                    <tbody>
                                            <?=$view?>
                                    </tbody>
                                </table>

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


</html>
