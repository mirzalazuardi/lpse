<?php
     session_start();
     if(isset($_SESSION['username'])) {
          $url = 'http://'.$_SERVER['SERVER_NAME'].'/members/perusahaan1.php';
          header('Location: '.$url);
     } 
     // else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
          <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/css/bootstrap.min.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
          <div class="col-md-2 col-lg-2"/></div>
          <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8"/> 
          	<h1>Login</h1>
          	<form action="login_proceed.php" class="form-horizontal" method="POST" role="form">
          		<div class="form-group">
          			<label for="username" class="col-xs-2 control-label">username</label>
          			<div class="col-xs-3">
	          			<input name="username" type="text" class="form-control" placeholder="ketik username">
          			</div>
          		</div>
          		<div class="form-group">
          			<label for="password" class="col-xs-2 control-label">password</label>
          			<div class="col-xs-3">
		          		<input name="password" type="password" class="form-control" placeholder="ketik password">
          			</div>
          		</div>
          		<div class="form-group">
          			<div class="col-sm-offset-2 col-sm-11">
                              <a href="daftar" class="btn btn-link">belum punya akun? klik disini untuk daftar</a>
                              <br>
	          			<input type="reset" class="btn btn-default" value="hapus">
	          			<input type="submit" class="btn btn-default" value="kirim">
          			</div>
          		</div>
          	</form>
               
               
      	  </div>
          <div class="col-md-2 col-lg-2"/></div>
		</div>
	</div>
</body>
</html>
<?php
// }
?>