<?php
  include_once 'cek_session_user.php';
?>
<html>
<head>
<title>Form Perusahaan - Jenis Ijin Usaha</title>
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
              <li><a href="../pengurus/">Pengurus Perusahaan</a></li>
              <li><a href="../pemilik/">Pemilik Perusahaan</a></li>
              <li class="active"><a href="../ijin/">Jenis Ijin Usaha</a></li>
              <li><a href="../../keluar">Keluar</a></li>
            </ul>
            <br>
            <form role="form" name="myForm" enctype="multipart/form-data" method="POST" action="perusahaan5_proceed.php">
                <input type="hidden" name="username" value="<?=$_SESSION['username']?>">
                <div class="table-responsive">
                      <table class="table table-striped">
                        <tr>
                            <th>#</th>
                            <th>Nomor Surat</th>
                            <th>Instansi Pemberi</th>
                            <th>Berlaku Sampai</th>
                            <th>Kualifikasi</th>
                            <th>Klasifikasi</th>
                            <th>Upload file</th>
                        </tr>
                        <tr>
                            <td>TDP</td>
                            <td><input name="nomorsurat_tdp" id="nomorsurat_tdp" ng-model="user.nomorsurat_tdp" type="text" class="form-control"></td>
                            <td><input name="instansipemberi_tdp" id="instansipemberi_tdp" ng-model="user.instansipemberi_tdp" type="text" class="form-control"></td>
                            <td><input name="berlakusampai_tdp" id="berlakusampai_tdp" ng-model="user.berlakusampai_tdp" type="text" class="form-control"></td>
                            <td><input name="kualifikasi_tdp" id="kualifikasi_tdp" ng-model="user.kualifikasi_tdp" type="text" class="form-control"></td>
                            <td><input name="klasifikasi_tdp" id="klasifikasi_tdp" ng-model="user.klasifikasi_tdp" type="text" class="form-control"></td>
                            <td><input name="upload_tdp" id="upload_tdp" ng-model="user.upload_tdp" type="file" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>SIUP</td>
                            <td><input name="nomorsurat_siup" id="nomorsurat_siup" ng-model="user.nomorsurat_siup" type="text" class="form-control"></td>
                            <td><input name="instansipemberi_siup" id="instansipemberi_siup" ng-model="user.instansipemberi_siup" type="text" class="form-control"></td>
                            <td><input name="berlakusampai_siup" id="berlakusampai_siup" ng-model="user.berlakusampai_siup" type="text" class="form-control"></td>
                            <td><input name="kualifikasi_siup" id="kualifikasi_siup" ng-model="user.kualifikasi_siup" type="text" class="form-control"></td>
                            <td><input name="klasifikasi_siup" id="klasifikasi_siup" ng-model="user.klasifikasi_siup" type="text" class="form-control"></td>
                            <td><input name="upload_siup" id="upload_siup" ng-model="user.upload_siup" type="file" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>SIUJK</td>
                            <td><input name="nomorsurat_siujk" id="nomorsurat_siujk" ng-model="user.nomorsurat_siujk" type="text" class="form-control"></td>
                            <td><input name="instansipemberi_siujk" id="instansipemberi_siujk" ng-model="user.instansipemberi_siujk" type="text" class="form-control"></td>
                            <td><input name="berlakusampai_siujk" id="berlakusampai_siujk" ng-model="user.berlakusampai_siujk" type="text" class="form-control"></td>
                            <td><input name="kualifikasi_siujk" id="kualifikasi_siujk" ng-model="user.kualifikasi_siujk" type="text" class="form-control"></td>
                            <td><input name="klasifikasi_siujk" id="klasifikasi_siujk" ng-model="user.klasifikasi_siujk" type="text" class="form-control"></td>
                            <td><input name="upload_siujk" id="upload_siujk" ng-model="user.upload_siujk" type="file" class="form-control"></td>
                        </tr>
                        <tr>
                            <td colspan="7">
                                <button type="reset" class="btn btn-default">Hapus</button>
                                <button type="submit" class="btn btn-default" ng-disabled="myForm.$invalid">Rekam</button>
                            </td>
                        </tr>
                   </table>
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
