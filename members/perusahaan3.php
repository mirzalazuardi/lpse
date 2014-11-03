<?php
  include_once 'cek_session_user.php';
  include_once '../conf/vars.php';
?>
<html>
<head>
<title>Form Perusahaan - Pengurus Perusahaan</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/angular.js/1.2.20/angular.min.js"></script>

<script type="text/javascript">
var app = angular.module('myApp', []);

app.controller('myCtrl', function ($scope) {
  $scope.user = [];
});
console.log('form built by mirzalazuardi hermawan (mirzalazuardi@gmail.com) - www.mh-praxis.com - 6th october 2014');
</script>
</head>
<body>
    <div class="container-fluid" ng-app="myApp">
      <div class="row" ng-controller="myCtrl">
        <div class="col-md-2 col-lg-2"/></div>
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8"/> 
        <br><br>
            <ul class="nav nav-tabs" role="tablist">
              <li><a href="../utama/">Data Utama</a></li>
              <li><a href="../akta/">Akta Perusahaan</a></li>
              <li class="active"><a href="../pengurus/">Pengurus Perusahaan</a></li>
              <li><a href="../pemilik/">Pemilik Perusahaan</a></li>
              <li><a href="../ijin/">Jenis Ijin Usaha</a></li>
              <li><a href="../../keluar">Keluar</a></li>
            </ul>
            <br>
          <form class="form-horizontal" role="form" name="myForm" method="POST" action="perusahaan3_proceed.php">
            <input type="hidden" name="username" value="<?=$_SESSION['username']?>">
            <div class="form-group" ng-class="{'has-error has-feedback':myForm.nama.$dirty && myForm.nama.$invalid,'has-success has-feedback':myForm.nama.$valid}">
              <label for="nama" class="col-sm-2 control-label">Nama</label>
              <div class="col-xs-4">
                  <input name="nama" id="nama" ng-model="user.nama" required ng-pattern="/^[a-zA-Z ]+$/" type="text" class="form-control" placeholder="Nama">                  
                  <div ng-show="myForm.nama.$dirty && myForm.nama.$invalid">
                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                    <span class="help-block" ng-show="myForm.nama.$error.required">Harus diisi</span>
                    <!-- <span class="help-block" ng-show="myForm.nama.$error.minlength">Minimal 3 huruf</span> -->
                    <span class="help-block" ng-show="myForm.nama.$error.pattern">Nama tidak valid</span>
                  </div>
                  <div ng-show="myForm.nama.$valid">
                    <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                  </div>
              </div>
            </div>
           <div class="form-group" ng-class="{'has-error has-feedback':myForm.nomorktp.$dirty && myForm.nomorktp.$invalid,'has-success has-feedback':myForm.nomorktp.$valid}">
              <label for="nomorktp" class="col-sm-2 control-label">Nomor KTP</label>
              <div class="col-xs-4">
                  <input name="nomorktp" id="nomorktp" ng-model="user.nomorktp" required ng-pattern="/^[0-9]+$/" type="text" class="form-control" placeholder="Nomor KTP">
                  <div ng-show="myForm.nomorktp.$dirty && myForm.nomorktp.$invalid">
                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                    <span class="help-block" ng-show="myForm.nomorktp.$error.required">Harus diisi</span>
                    <!-- <span class="help-block" ng-show="myForm.nomorktp.$error.minlength">Minimal 3 huruf</span> -->
                    <span class="help-block" ng-show="myForm.nomorktp.$error.pattern">KTP tidak valid</span>
                  </div>
                  <div ng-show="myForm.nomorktp.$valid">
                    <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                  </div>
              </div>
            </div>
          <div class="form-group" ng-class="{'has-error has-feedback':myForm.alamat.$dirty && myForm.alamat.$invalid,'has-success has-feedback':myForm.alamat.$valid}">
              <label for="alamat" class="col-sm-2 control-label">Alamat</label>
              <div class="col-xs-4">
                  <textarea name="alamat" id="alamat" ng-model="user.alamat" required ng-pattern="/^[a-zA-Z0-9./\s]+$/" class="form-control" rows="3" placeholder="Alamat"></textarea>
                  <div ng-show="myForm.alamat.$dirty && myForm.alamat.$invalid">
                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                    <span class="help-block" ng-show="myForm.alamat.$error.required">Harus diisi</span>
                    <!-- <span class="help-block" ng-show="myForm.alamat.$error.minlength">Minimal 3 huruf</span> -->
                    <span class="help-block" ng-show="myForm.alamat.$error.pattern">Alamat tidak valid</span>
                  </div>
                  <div ng-show="myForm.alamat.$valid">
                    <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                  </div>
              </div>
            </div>
          <div class="form-group" ng-class="{'has-error has-feedback':myForm.jabatan.$dirty && myForm.jabatan.$invalid,'has-success has-feedback':myForm.jabatan.$valid}">
              <label for="jabatan" class="col-sm-2 control-label">Jabatan</label>
              <div class="col-xs-4">
                  <input name="jabatan" id="jabatan" ng-model="user.jabatan" required ng-pattern="/^[a-zA-Z0-9 ]+$/" type="text" class="form-control" placeholder="Jabatan">
                  <div ng-show="myForm.jabatan.$dirty && myForm.jabatan.$invalid">
                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                    <span class="help-block" ng-show="myForm.jabatan.$error.required">Harus diisi</span>
                    <!-- <span class="help-block" ng-show="myForm.jabatan.$error.minlength">Minimal 3 huruf</span> -->
                    <span class="help-block" ng-show="myForm.jabatan.$error.pattern">Jabatan tidak valid</span>
                  </div>
                  <div ng-show="myForm.jabatan.$valid">
                    <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                  </div>
              </div> 
            </div>
   
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="reset" class="btn btn-default">Hapus</button>
                <button type="submit" class="btn btn-default" ng-disabled="myForm.$invalid">Rekam</button>
              </div>
            </div>
          </form> 
          <br><br>
          <center>&lt;powered by &copy; <a href="http://www.mh-praxis.com">mh-praxis.com</a> - 2014&gt;</center>
        </div>
        <div class="col-md-2 col-lg-2"/></div>
      </div> <!--END row  -->
    </div> <!--END container-fluid  -->
</body>
</html>
