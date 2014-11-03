<?php
  include_once 'cek_session_user.php';
?>
<html>
<head>
<title>Form Perusahaan - Data utama</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<!-- <link rel="stylesheet" href="http://lib.mrz/bower_components/bootstrap/dist/css/bootstrap.min.css"> -->

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/angular.js/1.2.20/angular.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/0.10.0/ui-bootstrap-tpls.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/lodash.js/2.4.1/lodash.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/restangular/1.4.0/restangular.min.js"></script>

<!-- <script type="text/javascript" src="http://lib.mrz/bower_components/angular/angular.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/0.10.0/ui-bootstrap-tpls.min.js"></script>
<script src="http://lib.mrz/bower_components/lodash/dist/lodash.min.js"></script>
<script src="http://lib.mrz/bower_components/restangular/dist/restangular.min.js"></script> -->

<script type="text/javascript" src="<?=$_SERVER['SERVER_NAME']?>/aa.js"> </script>


</head>
<body>
    <div class="container-fluid" ng-app="myApp">
      <div class="row" ng-controller="myCtrl">
          <div class="col-md-2 col-lg-2"/></div>
          <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8"/> 
            <h1>Selamat Datang, <?=$_SESSION['username']?></h1>
            <ul>
              <li><a href="perusahaan/utama/">Daftar Perusahaan </a></li>
              <li><a href="#">Perusahaan yg sudah terdaftar </a></li>
              <li><a href="members/keluar/">Keluar </a></li>
            </ul>
          </div>
          <div class="col-md-2 col-lg-2"/></div>
      </div> <!-- END row -->
    </div> <!-- END container-fluid -->
</body>
</html>