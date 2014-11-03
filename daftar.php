<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Daftar</title>     
          <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/css/bootstrap.min.css">
          <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/angular.js/1.2.20/angular.min.js"></script>
          <script type="text/javascript" src="assets/js/daftar.js"></script>
</head>
<body>
	<div class="container-fluid" ng-app="myApp">
		<div class="row" ng-controller="myCtrl">
          <div class="col-md-2 col-lg-2"/></div>
          <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8"/> 
          	<h1>Daftar</h1>
          	<form action="daftar_proceed.php" name="myForm" method="POST" class="form-horizontal" role="form">
          		<div class="form-group" ng-class="{'has-error has-feedback':myForm.email.$dirty && myForm.email.$invalid,'has-success has-feedback':myForm.email.$valid}">
                       <label for="email" class="col-sm-2 control-label">Email</label>
                       <div class="col-xs-3">
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
          		<div class="form-group" ng-class="{'has-error has-feedback':myForm.username.$dirty && myForm.username.$invalid,'has-success has-feedback':myForm.username.$valid}">
                       <label for="username" class="col-sm-2 control-label">username</label>
                       <div class="col-xs-3">
                           <input ng-model="user.username" name="username" id="username" ng-minlength="3" ng-pattern="/^[a-z0-9_-]+$/" required type="text" class="form-control" placeholder="Isikan dengan username">
                           <div ng-show="myForm.username.$dirty && myForm.username.$invalid">
                             <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                             <span class="help-block" ng-show="myForm.username.$error.required">Harus diisi</span>
                             <span class="help-block" ng-show="myForm.username.$error.minlength">Minimal 3 huruf</span>
                             <span class="help-block" ng-show="myForm.username.$error.pattern">Username tidak valid, gunakan alphabet dengan non kapital &amp; angka saja, (undercore, strip diperbolehkan juga)</span>
                           </div>
                           <div ng-show="myForm.username.$valid">
                             <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                           </div>
                       </div>
                    </div>
          		<div class="form-group" ng-class="{'has-error has-feedback':myForm.password.$dirty && myForm.password.$invalid,'has-success has-feedback':myForm.password.$valid}">
                       <label for="password" class="col-sm-2 control-label">password</label>
                       <div class="col-xs-3">
                           <input ng-model="user.password" name="password" id="password" ng-minlength="5" ng-pattern="/^[a-z0-9_-]+$/" required type="password" class="form-control" placeholder="Isikan dengan password">
                           <div ng-show="myForm.password.$dirty && myForm.password.$invalid">
                             <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                             <span class="help-block" ng-show="myForm.password.$error.required">Harus diisi</span>
                             <span class="help-block" ng-show="myForm.password.$error.minlength">Minimal 5 huruf</span>
                             <span class="help-block" ng-show="myForm.password.$error.pattern">password tidak valid, gunakan alphabet &amp; angka saja, (undercore, strip diperbolehkan juga)</span>
                           </div>
                           <div ng-show="myForm.password.$valid">
                             <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                           </div>
                       </div>
                    </div>
          		<div class="form-group" ng-class="{'has-error has-feedback':myForm.password_verify.$dirty && myForm.password_verify.$invalid,'has-success has-feedback':myForm.password_verify.$valid}">
                       <label for="password_verify" class="col-sm-2 control-label">konfirmasi password</label>
                       <div class="col-xs-3">
                           <input ng-model="user.password_verify" name="password_verify" id="password_verify" data-match="user.password" required type="password" class="form-control" placeholder="Isikan password 1x lagi">
                           <div ng-show="myForm.password_verify.$dirty && myForm.password_verify.$invalid">
                             <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                             <span class="help-block" ng-show="myForm.password_verify.$error.required">Harus diisi</span>
                             <span class="help-block" ng-show="myForm.password_verify.$error.match">Password tidak sama</span>
                           </div>
                           <div ng-show="myForm.password_verify.$valid">
                             <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                           </div>
                       </div>
                    </div>
          		<div class="form-group">
          			<div class="col-sm-offset-2 col-sm-11">
	          			<input type="reset" class="btn btn-default" value="hapus">
	          			<button type="submit" class="btn btn-default" ng-disabled="myForm.$invalid">Rekam</button>
          			</div>
          		</div>
          	</form>
               <br>
               <a href="login" class="btn btn-link"><i class="glyphicon glyphicon-backward"></i> kembali ke halaman Login</a>
      	  </div>
          <div class="col-md-2 col-lg-2"/></div>
		</div>
	</div>
</body>
</html>