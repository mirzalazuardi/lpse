<?php
  include_once 'cek_session_user.php';
  include_once '../conf/vars.php';
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

<script type="text/javascript" src="<?=$base_url?>/assets/js/members/perusahaan1.js"> </script>


</head>
<body>
    <div class="container-fluid" ng-app="myApp">
      <div class="row" ng-controller="myCtrl">
          <div class="col-md-2 col-lg-2"/></div>
          <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8"/> 
            <div ng-show="message">
              <div class="alert alert-success" role="alert">{{ message.info }}. lanjut isi <a ng-href="<?=$base_url?>/members/perusahaan/akta/{{message.id}}">akta</a></div>
            </div>            
            <br><br>
            <ul class="nav nav-tabs" role="tablist">
              <li class="active"><a href="../utama/">Data Utama</a></li>
              <li><a href="../akta/">Akta Perusahaan</a></li>
              <li><a href="../pengurus/">Pengurus Perusahaan</a></li>
              <li><a href="../pemilik/">Pemilik Perusahaan</a></li>
              <li><a href="../ijin/">Jenis Ijin Usaha</a></li>
              <li><a href="../../keluar">Keluar</a></li>
            </ul>
            <br> 
            <form class="form-horizontal" role="form" name="myForm">
              <div class="form-group" ng-class="{'has-error has-feedback':myForm.namaperusahaan.$dirty && myForm.namaperusahaan.$invalid,'has-success has-feedback':myForm.namaperusahaan.$valid}">
                  <label for="namaperusahaan" class="col-sm-2 control-label">Nama Perusahaan</label>
                  <div class="col-xs-4">
                      <input ng-model="user.namaperusahaan" name="namaperusahaan" id="namaperusahaan" ng-minlength="3" ng-pattern="/^[a-zA-Z0-9 ]+$/" required type="text" class="form-control" placeholder="Isikan dengan Namaperusahaan">
                      <div ng-show="myForm.namaperusahaan.$dirty && myForm.namaperusahaan.$invalid">
                        <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                        <span class="help-block" ng-show="myForm.namaperusahaan.$error.required">Harus diisi</span>
                        <span class="help-block" ng-show="myForm.namaperusahaan.$error.minlength">Minimal 3 huruf</span>
                        <span class="help-block" ng-show="myForm.namaperusahaan.$error.pattern">Gunakan Huruf dan Angka saja</span>
                      </div>
                      <div ng-show="myForm.namaperusahaan.$valid">
                        <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                      </div>
                  </div>
              </div>
              <div class="form-group" ng-class="{'has-error has-feedback':myForm.username.$dirty && myForm.username.$invalid,'has-success has-feedback':myForm.username.$valid}">
                  <label for="username" class="col-sm-2 control-label">Nama User</label>
                  <div class="col-xs-4">
                      <!-- <input ng-model="user.username" name="username" id="username" ng-minlength="3" ng-pattern="/^[a-zA-Z0-9]+$/" required type="text" class="form-control" placeholder="Isikan dengan username" value="<?=$_SESSION['username']?>">
                      <div ng-show="myForm.username.$dirty && myForm.username.$invalid">
                        <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                        <span class="help-block" ng-show="myForm.username.$error.required">Harus diisi</span>
                        <span class="help-block" ng-show="myForm.username.$error.minlength">Minimal 3 huruf</span>
                        <span class="help-block" ng-show="myForm.username.$error.pattern">Gunakan Huruf dan Angka saja</span>
                      </div>
                      <div ng-show="myForm.username.$valid">
                        <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                      </div> -->
                       <p class="form-control-static"><strong><?=$_SESSION['username']?></strong></p>
                       <input type="hidden" ng-model="user.id_users" name="id_users" id="id_users" value="<?=$_SESSION['id']?>">
                  </div>
              </div>
              <div class="form-group" ng-class="{'has-error has-feedback':myForm.npwp.$dirty && myForm.npwp.$invalid,'has-success has-feedback':myForm.npwp.$valid}">
                  <label for="npwp" class="col-sm-2 control-label">NPWP</label>
                  <div class="col-xs-4">
                      <input ng-model="user.npwp" name="npwp" id="npwp" ng-minlength="3" ng-pattern="/^[a-zA-Z0-9\.\_\-\ \/]+$/" required type="text" class="form-control" placeholder="Isikan dengan NPWP" required>
                      <div ng-show="myForm.npwp.$dirty && myForm.npwp.$invalid">
                        <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                        <span class="help-block" ng-show="myForm.npwp.$error.required">Harus diisi</span>
                        <span class="help-block" ng-show="myForm.npwp.$error.minlength">Minimal 3 huruf</span>
                        <span class="help-block" ng-show="myForm.npwp.$error.pattern">NPWP tidak valid</span>
                      </div>
                      <div ng-show="myForm.npwp.$valid">
                        <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                      </div>
                  </div>
              </div>
              <div class="form-group" ng-class="{'has-error has-feedback':myForm.nomorpkp.$dirty && myForm.nomorpkp.$invalid}">
                  <label for="nomorpkp" class="col-sm-2 control-label">Nomor PKP<sup>*</sup></label>
                  <div class="col-xs-4">
                      <input ng-model="user.nomorpkp" name="nomorpkp" id="nomorpkp" type="text" class="form-control" ng-pattern="/^[a-zA-Z0-9.-_/ ]+$/" required placeholder="Isikan dengan Nomor PKP">
                      <div ng-show="myForm.nomorpkp.$dirty && myForm.nomorpkp.$invalid">
                        <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                        <span class="help-block" ng-show="myForm.nomorpkp.$error.required">Harus diisi</span>
                        <span class="help-block" ng-show="myForm.nomorpkp.$error.pattern">Nomor PKP tidak valid</span>
                      </div>                      
                  </div> 
              </div>
              <div class="form-group" ng-class="{'has-error has-feedback':myForm.alamat.$dirty && myForm.alamat.$invalid,'has-success has-feedback':myForm.alamat.$valid}">
                  <label for="alamat" class="col-sm-2 control-label">Alamat</label>
                  <div class="col-xs-4">
                      <textarea ng-model="user.alamat" name="alamat" id="alamat" ng-minlength="3" ng-pattern="/^[a-zA-Z0-9./ ]+$/" required class="form-control" rows="3" placeholder="Isikan dengan Alamat"></textarea>
                      <div ng-show="myForm.alamat.$dirty && myForm.alamat.$invalid">
                        <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                        <span class="help-block" ng-show="myForm.alamat.$error.required">Harus diisi</span>
                        <span class="help-block" ng-show="myForm.alamat.$error.minlength">Minimal 3 huruf</span>
                        <span class="help-block" ng-show="myForm.alamat.$error.pattern">Gunakan Huruf dan Angka saja</span>
                      </div>
                      <div ng-show="myForm.alamat.$valid">
                        <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                      </div>
                  </div> 
              </div>               
              <div class="form-group" ng-class="{'has-error has-feedback':myForm.propinsi.$dirty && myForm.propinsi.$invalid,'has-success has-feedback':myForm.propinsi.$valid}">
                  <label for="propinsi" class="col-sm-2 control-label">Propinsi</label>
                  <div class="col-xs-4">
                      <input ng-model="user.propinsi" name="propinsi" id="propinsi" typeahead="propinsi for propinsi in provinces | filter:$viewValue | limitTo:8" ng-minlength="3" ng-pattern="/^[a-zA-Z0-9 ]+$/" required type="text" class="form-control" placeholder="Isikan dengan Propinsi">
                      <div ng-show="myForm.propinsi.$dirty && myForm.propinsi.$invalid">
                        <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                        <span class="help-block" ng-show="myForm.propinsi.$error.required">Harus diisi</span>
                        <span class="help-block" ng-show="myForm.propinsi.$error.minlength">Minimal 3 huruf</span>
                        <span class="help-block" ng-show="myForm.propinsi.$error.pattern">Gunakan Huruf dan Angka saja</span>
                      </div>
                      <div ng-show="myForm.propinsi.$valid">
                        <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                      </div>
                  </div>
              </div>
              <div class="form-group" ng-class="{'has-error has-feedback':myForm.kota.$dirty && myForm.kota.$invalid,'has-success has-feedback':myForm.kota.$valid}">
                  <label for="kota" class="col-sm-2 control-label">Kota</label>
                  <div class="col-xs-4">
                      <input ng-model="user.kota" name="kota" id="kota" typeahead="kotas for kotas in cities | filter:$viewValue | limitTo:8" ng-minlength="3" ng-pattern="/^[a-zA-Z0-9\(\)\ ]+$/" required type="text" class="form-control" placeholder="Isikan dengan Kota">
                      <div ng-show="myForm.kota.$dirty && myForm.kota.$invalid">
                        <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                        <span class="help-block" ng-show="myForm.kota.$error.required">Harus diisi</span>
                        <span class="help-block" ng-show="myForm.kota.$error.minlength">Minimal 3 huruf</span>
                        <span class="help-block" ng-show="myForm.kota.$error.pattern">Gunakan Huruf dan Angka saja</span>
                      </div>
                      <div ng-show="myForm.kota.$valid">
                        <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                      </div>
                  </div>
              </div>               
              <div class="form-group" ng-class="{'has-error has-feedback':myForm.kodepos.$dirty && myForm.kodepos.$invalid,'has-success has-feedback':myForm.kodepos.$valid}">
                  <label for="kodepos" class="col-sm-2 control-label">Kodepos</label>
                  <div class="col-xs-4">
                      <input ng-model="user.kodepos" name="kodepos" id="kodepos"  ng-minlength="5" ng-pattern="/^[0-9]+$/" required type="text" class="form-control" placeholder="Isikan dengan Kodepos">
                      <div ng-show="myForm.kodepos.$dirty && myForm.kodepos.$invalid">
                        <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                        <span class="help-block" ng-show="myForm.kodepos.$error.required">Harus diisi</span>
                        <span class="help-block" ng-show="myForm.kodepos.$error.minlength">Minimal 5 huruf</span>
                        <span class="help-block" ng-show="myForm.kodepos.$error.pattern">Kodepos tidak valid</span>
                      </div>
                      <div ng-show="myForm.kodepos.$valid">
                        <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                      </div>
                  </div>
              </div>
              <div class="form-group" ng-class="{'has-error has-feedback':myForm.telepon.$dirty && myForm.telepon.$invalid,'has-success has-feedback':myForm.telepon.$valid}">
                  <label for="telepon" class="col-sm-2 control-label">Telepon</label>
                  <div class="col-xs-4">
                      <input ng-model="user.telepon" name="telepon" id="telepon" ng-minlength="9" ng-pattern="/^0[0-9]+$/" required type="text" class="form-control" placeholder="Isikan dengan Telepon">
                      <div ng-show="myForm.telepon.$dirty && myForm.telepon.$invalid">
                        <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                        <span class="help-block" ng-show="myForm.telepon.$error.required">Harus diisi</span>
                        <span class="help-block" ng-show="myForm.telepon.$error.minlength">Minimal 9 huruf</span>
                        <span class="help-block" ng-show="myForm.telepon.$error.pattern">Telepon tidak valid</span>
                      </div>
                      <div ng-show="myForm.telepon.$valid">
                        <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                      </div>
                  </div>
              </div>
              <div class="form-group" ng-class="{'has-error has-feedback':myForm.fax.$dirty && myForm.fax.$invalid,'has-success has-feedback':myForm.fax.$valid}">
                  <label for="fax" class="col-sm-2 control-label">Fax</label>
                  <div class="col-xs-4">
                      <input ng-model="user.fax" name="fax" id="fax" ng-minlength="9" ng-pattern="/^0[0-9]+$/" type="text" class="form-control" placeholder="Isikan dengan Fax">
                      <div ng-show="myForm.fax.$dirty && myForm.fax.$invalid">
                        <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                        <span class="help-block" ng-show="myForm.fax.$error.minlength">Minimal 9 huruf</span>
                        <span class="help-block" ng-show="myForm.fax.$error.pattern">Fax tidak valid</span>
                      </div>
                      <div ng-show="myForm.fax.$valid">
                        <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                      </div>
                  </div>
              </div>
              <div class="form-group" ng-class="{'has-error has-feedback':myForm.mobilephone.$dirty && myForm.mobilephone.$invalid,'has-success has-feedback':myForm.mobilephone.$valid}">
                  <label for="mobilephone" class="col-sm-2 control-label">Mobilephone</label>
                  <div class="col-xs-4">
                      <input ng-model="user.mobilephone" name="mobilephone" id="mobilephone" ng-minlength="9" ng-pattern="/^0[0-9]+$/" type="text" class="form-control" placeholder="Isikan dengan Mobilephone">
                      <div ng-show="myForm.mobilephone.$dirty && myForm.mobilephone.$invalid">
                        <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                        <span class="help-block" ng-show="myForm.mobilephone.$error.minlength">Minimal 9 huruf</span>
                        <span class="help-block" ng-show="myForm.mobilephone.$error.pattern">Telepon tidak valid</span>
                      </div>
                      <div ng-show="myForm.mobilephone.$valid">
                        <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                      </div>
                  </div>
              </div>
              <div class="form-group" ng-class="{'has-error has-feedback':myForm.email.$dirty && myForm.email.$invalid,'has-success has-feedback':myForm.email.$valid}">
                  <label for="email" class="col-sm-2 control-label">Email</label>
                  <div class="col-xs-4">
                      <input ng-model="user.email" name="email" id="email" required type="email" class="form-control" placeholder="Isikan dengan Email">
                      <div ng-show="myForm.email.$dirty && myForm.email.$invalid">
                        <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                        <span class="help-block" ng-show="myForm.email.$error.required">Harus diisi</span>
                        <span class="help-block" ng-show="myForm.email.$error.email">Email tidak valid</span>
                      </div>
                      <div ng-show="myForm.email.$valid">
                        <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                      </div>
                  </div>
              </div>
              <div class="form-group" ng-class="{'has-error has-feedback':myForm.website.$dirty && myForm.website.$invalid}">
                  <label for="website" class="col-sm-2 control-label">Website</label>
                  <div class="col-xs-4">
                      <input ng-model="user.website" name="website" id="website" type="url" class="form-control" placeholder="Isikan dengan Website">
                      <div ng-show="myForm.website.$dirty && myForm.website.$invalid">
                        <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                        <span class="help-block" ng-show="myForm.website.$error.url">URL tidak valid</span>
                      </div>                      
                  </div>
              </div>
              <div class="form-group">
                  <label for="kantorcabang" class="col-sm-2 control-label">Kantor Cabang</label>
                   <div class="col-xs-4">
                      <div class="radio">
                        <label>
                          <input type="radio" ng-model="user.kantorcabang" name="kantorcabang" id="kantorcabang1" value="1" required>
                          Ya
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" ng-model="user.kantorcabang" name="kantorcabang" id="kantorcabang2" value="0" required>
                          Tidak
                        </label>
                      </div>
                  </div>
              </div> 
              <div ng-show="user.kantorcabang==1">
                <div class="form-group" ng-class="{'has-error has-feedback':myForm.alamatutama.$dirty && myForm.alamatutama.$invalid}">
                    <label for="alamatutama" class="col-sm-2 control-label">Alamat Kantor Utama</label>
                    <div class="col-xs-4">
                        <textarea ng-model="user.alamatutama" name="alamatutama" id="alamatutama" ng-pattern="/^[a-zA-Z0-9./ ]+$/" class="form-control" rows="3" placeholder="Isikan dengan Alamat Kantor Utama"></textarea>
                        <div ng-show="myForm.alamatutama.$dirty && myForm.alamatutama.$invalid">
                          <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                          <span class="help-block" ng-show="myForm.alamatutama.$error.pattern">Alamat tidak valid</span>
                        </div> 
                    </div> 
                </div> 
                <div class="form-group" ng-class="{'has-error has-feedback':myForm.teleponutama.$dirty && myForm.teleponutama.$invalid}">
                    <label for="teleponutama" class="col-sm-2 control-label">Telepon Kantor Utama</label>
                    <div class="col-xs-4">
                        <input ng-model="user.teleponutama" name="teleponutama" id="teleponutama" ng-pattern="/^0[0-9]*/" type="text" class="form-control" placeholder="Isikan dengan Telepon Kantor Utama">
                        <div ng-show="myForm.teleponutama.$dirty && myForm.teleponutama.$invalid">
                          <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                          <span class="help-block" ng-show="myForm.teleponutama.$error.pattern">Telepon tidak valid</span>
                        </div> 
                    </div>
                </div>
                <div class="form-group" ng-class="{'has-error has-feedback':myForm.faxutama.$dirty && myForm.faxutama.$invalid}">
                    <label for="faxutama" class="col-sm-2 control-label">Fax Kantor Utama</label>
                    <div class="col-xs-4">
                        <input ng-model="user.faxutama" name="faxutama" id="faxutama" ng-pattern="/^0[0-9]*/" type="text" class="form-control" placeholder="Isikan dengan Fax Kantor Utama">
                        <div ng-show="myForm.faxutama.$dirty && myForm.faxutama.$invalid">
                          <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                          <span class="help-block" ng-show="myForm.faxutama.$error.pattern">Fax tidak valid</span>
                        </div> 
                    </div>
                </div>
                <div class="form-group" ng-class="{'has-error has-feedback':myForm.emailutama.$dirty && myForm.emailutama.$invalid}">
                    <label for="emailutama" class="col-sm-2 control-label">Email Kantor Utama</label>
                    <div class="col-xs-4">
                        <input ng-model="user.emailutama" name="emailutama" id="emailutama" type="email" class="form-control" placeholder="Isikan dengan Email Kantor Utama">
                        <div ng-show="myForm.emailutama.$dirty && myForm.emailutama.$invalid">
                          <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                          <span class="help-block" ng-show="myForm.emailutama.$error.email">Email tidak valid</span>
                        </div> 
                    </div>
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
    </div> <!-- END container-fluid -->
</body>
</html>