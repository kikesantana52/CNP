<?php
session_start();
?>
<html>
	<head>
		<title>CNP J&G - ERP</title>
		<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="./css/main.css">
	</head>
	<body class="bg-indico">
		<div class="container">
	    <div class="row">
	      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
	        <div class="card card-signin my-5">
	          <div class="card-body">
	            <div class="text-center mb-2"><img src="img/logo2.png" alt="" class="img-fluid"></div>
	            <form action="ingresar.php" method="post"class="form-signin">
	                <input type="email" id="inputEmail" class="form-control mb-2" placeholder="Usuario" required autofocus>
	                <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required>
	              <div class="custom-control custom-checkbox mb-3">
	                <input type="checkbox" class="custom-control-input" id="customCheck1">
	                <label class="custom-control-label" for="customCheck1">Recordar contraseña</label>
	              </div>
	              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Entrar</button>
	            </form>
	          </div>
	        </div>
	      </div>
	    </div>
	  </div>
	</body>
</html>
