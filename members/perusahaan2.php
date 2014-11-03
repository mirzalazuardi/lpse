<?php
  include_once 'cek_session_user.php';
  include_once '../conf/vars.php';
?>
<html>
<head>
<title>Form Perusahaan - Akta Perusahaan</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<!-- Optional theme -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css"> -->

<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/es5-shim/4.0.3/es5-shim.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/angular.js/1.2.20/angular.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/danialfarid-angular-file-upload/1.6.1/angular-file-upload.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/0.10.0/ui-bootstrap-tpls.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/lodash.js/2.4.1/lodash.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/restangular/1.4.0/restangular.min.js"></script>


<script type="text/javascript" src="<?=$base_url?>/assets/js/members/perusahaan2.js"></script>

</head>
<body>
    <div class="container-fluid" ng-app="myApp">
      <div class="row" ng-controller="myCtrl">
        <div class="col-md-2 col-lg-2"/></div>
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8"/> 
        <br><br>
            <ul class="nav nav-tabs" role="tablist">
              <li><a href="../utama/">Data Utama</a></li>
              <li class="active"><a href="../akta/">Akta Perusahaan</a></li>
              <li><a href="../pengurus/">Pengurus Perusahaan</a></li>
              <li><a href="../pemilik/">Pemilik Perusahaan</a></li>
              <li><a href="../ijin/">Jenis Ijin Usaha</a></li>
              <li><a href="../../keluar">Keluar</a></li>
            </ul>
            <br>
          <form class="form-horizontal" role="form" name="myForm">
            <input type="hidden" name="id_users" value="<?=$_SESSION['id']?>">
            <!-- aktapendirian -->
            <h3>Akta awal</h3>
            <div class="form-group" ng-class="{'has-error has-feedback':myForm.nomorakta1.$dirty && myForm.nomorakta1.$invalid,'has-success has-feedback':myForm.nomorakta1.$dirty && myForm.nomorakta1.$valid}">
              <label for="nomorakta1" class="col-sm-2 control-label">Nomor Akta</label>
              <div class="col-xs-4">
                  <input name="nomorakta1" id="nomorakta1" ng-model="user.nomorakta1" required ng-pattern="/[a-zA-Z0-9-._/ ]+/" type="text" class="form-control" placeholder="Nomor Akta">
                  <div ng-show="myForm.nomorakta1.$dirty && myForm.nomorakta1.$invalid">
                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                    <span class="help-block" ng-show="myForm.nomorakta1.$error.required">Harus diisi</span>
                    <!-- <span class="help-block" ng-show="myForm.nomorakta1.$error.minlength">Minimal 3 huruf</span> -->
                    <span class="help-block" ng-show="myForm.nomorakta1.$error.pattern">Nomor Akta tidak valid</span>
                  </div>
                  <div ng-show="myForm.nomorakta1.$dirty && myForm.nomorakta1.$valid">
                    <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                  </div>
              </div>
           </div>
           <div class="form-group" ng-class="{'has-error has-feedback':myForm.tanggal1.$dirty && myForm.tanggal1.$invalid,'has-success has-feedback':myForm.tanggal1.$dirty && myForm.tanggal1.$valid}">
              <label for="tanggal1" class="col-sm-2 control-label">Tanggal</label>
              <div class="col-xs-4">
                  <input name="tanggal1" id="tanggal1" ng-model="user.tanggal1" type="text" ng-pattern="/^((19|20){1}\d{2})\-([0]?[1-9]{1}|[1][0-2])\-([0]?[1-9]{1}|[1-2][1-9]{1}|[3][0-1])$/" class="form-control" placeholder="Tanggal">
                  <div ng-show="myForm.tanggal1.$dirty && myForm.tanggal1.$invalid">
                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                    <!-- <span class="help-block" ng-show="myForm.tanggal1.$error.required">Harus diisi</span> -->
                    <!-- <span class="help-block" ng-show="myForm.tanggal1.$error.minlength">Minimal 3 huruf</span> -->
                    <span class="help-block" ng-show="myForm.tanggal1.$error.pattern">Tanggal tidak valid(thn-bln-tgl, contoh 2001-12-31)</span>
                  </div>
                  <div ng-show="myForm.tanggal1.$dirty && myForm.tanggal1.$valid">
                    <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                  </div>
              </div>
          </div>
          <div class="form-group" ng-class="{'has-error has-feedback':myForm.notaris1.$dirty && myForm.notaris1.$invalid,'has-success has-feedback':myForm.notaris1.$dirty && myForm.notaris1.$valid}">
              <label for="notaris1" class="col-sm-2 control-label">Notaris</label>
              <div class="col-xs-4">
                  <input name="notaris1" id="notaris1" ng-model="user.notaris1" ng-pattern="/^[a-zA-Z ]+$/" type="text" class="form-control" placeholder="Notaris">
                  <div ng-show="myForm.notaris1.$dirty && myForm.notaris1.$invalid">
                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                    <!-- <span class="help-block" ng-show="myForm.notaris1.$error.required">Harus diisi</span>
                    <span class="help-block" ng-show="myForm.notaris1.$error.minlength">Minimal 3 huruf</span> -->
                    <span class="help-block" ng-show="myForm.notaris1.$error.pattern">Notaris tidak valid</span>
                  </div>
                  <div ng-show="myForm.notaris1.$dirty && myForm.notaris1.$valid">
                    <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                  </div>
              </div>
          </div>
            <!-- aktaperubahanterakhir -->
          <h3>Akta Akhir</h3>
          <div class="form-group" ng-class="{'has-error has-feedback':myForm.nomorakta2.$dirty && myForm.nomorakta2.$invalid,'has-success has-feedback':myForm.nomorakta2.$dirty && myForm.nomorakta2.$valid}">
              <label for="nomorakta2" class="col-sm-2 control-label">Nomor Akta</label>
              <div class="col-xs-4">
                  <input name="nomorakta2" id="nomorakta2" ng-model="user.nomorakta2" required type="text" ng-pattern="/[a-zA-Z0-9-._/ ]+/" class="form-control" placeholder="Nomor Akta">
                  <div ng-show="myForm.nomorakta2.$dirty && myForm.nomorakta2.$invalid">
                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                    <span class="help-block" ng-show="myForm.nomorakta2.$error.required">Harus diisi</span>
                    <!-- <span class="help-block" ng-show="myForm.nomorakta2.$error.minlength">Minimal 3 huruf</span> -->
                    <span class="help-block" ng-show="myForm.nomorakta2.$error.pattern">Nomor Akta tidak valid</span>
                  </div>
                  <div ng-show="myForm.nomorakta2.$dirty && myForm.nomorakta2.$valid">
                    <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                  </div>
              </div> 
         </div>
         <div class="form-group" ng-class="{'has-error has-feedback':myForm.tanggal2.$dirty && myForm.tanggal2.$invalid,'has-success has-feedback':myForm.tanggal2.$dirty && myForm.tanggal2.$valid}">
              <label for="tanggal2" class="col-sm-2 control-label">Tanggal</label>
              <div class="col-xs-4">
                  <input name="tanggal2" id="tanggal2" ng-model="user.tanggal2" type="text" ng-pattern="/^((19|20){1}\d{2})\-([0]?[1-9]{1}|[1][0-2])\-([0]?[1-9]{1}|[1-2][1-9]{1}|[3][0-1])$/" class="form-control" placeholder="Tanggal">
                  <div ng-show="myForm.tanggal2.$dirty && myForm.tanggal2.$invalid">
                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                    <!-- <span class="help-block" ng-show="myForm.tanggal2.$error.required">Harus diisi</span>
                    <span class="help-block" ng-show="myForm.tanggal2.$error.minlength">Minimal 3 huruf</span> -->
                    <span class="help-block" ng-show="myForm.tanggal2.$error.pattern">Tanggal tidak valid(thn-bln-tgl, contoh 2001-12-31)</span>
                  </div>
                  <div ng-show="myForm.tanggal2.$dirty && myForm.tanggal2.$valid">
                    <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                  </div>
              </div>
          </div>
          <div class="form-group" ng-class="{'has-error has-feedback':myForm.notaris2.$dirty && myForm.notaris2.$invalid,'has-success has-feedback':myForm.notaris2.$dirty && myForm.notaris2.$valid}">
              <label for="notaris2" class="col-sm-2 control-label">Notaris</label>
              <div class="col-xs-4">
                  <input name="notaris2" id="notaris2" ng-model="user.notaris2" ng-pattern="/^[a-zA-Z ]+$/" type="text" class="form-control" placeholder="Notaris">
                  <div ng-show="myForm.notaris2.$dirty && myForm.notaris2.$invalid">
                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                    <!-- <span class="help-block" ng-show="myForm.notaris2.$error.required">Harus diisi</span>
                    <span class="help-block" ng-show="myForm.notaris2.$error.minlength">Minimal 3 huruf</span> -->
                    <span class="help-block" ng-show="myForm.notaris2.$error.pattern">Notaris tidak valid</span>
                  </div>
                  <div ng-show="myForm.notaris2.$dirty && myForm.notaris2.$valid">
                    <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                  </div>
              </div>
          </div>
          <hr>
          <div class="form-group">
            <label for="fileakta1" class="col-sm-2 control-label">Upload Akta awal</label>
            <div class="col-xs-4">
              <input type="file" name="fileakta1" id="fileakta1" ng-model="user.fileakta1" ng-file-select="onFileSelect($files)" accept="image/*" class="form-control">   
              <!--  -->
              <div ng-show="selectedFiles != null">
      <div class="sel-file" ng-repeat="f in selectedFiles">
        {{($index + 1) + '.'}}
        <img ng-show="dataUrls[$index]" ng-src="{{dataUrls[$index]}}">
        <button class="button" ng-click="start($index)" ng-show="progress[$index] < 0">Start</button>
        <span class="progress" ng-show="progress[$index] >= 0">           
          <div style="width:{{progress[$index]}}%">{{progress[$index]}}%</div>
        </span>       
        <button class="button" ng-click="abort($index)" ng-show="hasUploader($index) && progress[$index] < 100">Abort</button>
        {{f.name}} - size: {{f.size}}B - type: {{f.type}}
      </div>
    </div>
              <!--  -->
            </div>
          </div>

          <div class="form-group">
            <label for="fileakta2" class="col-sm-2 control-label">Upload Akta akhir</label>
            <div class="col-xs-4">
              <input type="file" name="fileakta2" id="fileakta2" ng-model="user.fileakta2" ng-file-select="onFileSelect($files)" data-multiple="true" accept="image/*" class="form-control">
              {{ persen }} <br>
              {{ kumplit }}
            </div>
          </div>

          <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="reset" class="btn btn-default">Hapus</button>
                <button type="submit" class="btn btn-default" ng-disabled="myForm.$invalid" ng-click="pencet()">Rekam</button>
              </div>
          </div>
          </form> 
          <br><br>
          <center>&lt;powered by &copy; <a href="http://www.mh-praxis.com">mh-praxis.com</a> - 2014&gt;</center>
        </div>
        <div class="col-md-2 col-lg-2"/></div>
      </div> <!-- END row -->
    </div> <!--END container-fluid -->
</body>
</html>
