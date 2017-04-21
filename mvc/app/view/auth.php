<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Authentication</title>
	<link rel="stylesheet" href="../public/css/auth.css">
	<!-- <link rel="stylesheet" href="../public/css/bootstrap.min.css"> -->
</head>
<body>
	<div class="login-page">
	  	<div class="form">
	    	<form class="register-form">
		      	<input type="text" placeholder="name"/>
		      	<input type="password" placeholder="password"/>
		      	<input type="email" placeholder="email address"/>
		      	<button>create</button>
		      	<p class="message">Already registered? <a href="#">Sign In</a></p>
	    	</form>
	    	<form class="login-form">
			      <input type="email" placeholder="email"/>
			      <input type="password" placeholder="password"/>
			      <button>login</button>
			      <div class="open-id">
			      	<button class="login-facebook">Login with Facebook</button>
			      	<button class="login-google">Login with Google</button>
			      </div>
			      <p class="message">Not registered? <a href="#">Create an account</a></p>
	    	</form>
	  </div>
	</div>

	<script src="../public/js/jquery.js" type="text/javascript"></script>
	<script src="../public/js/auth.js" type="text/javascript"></script>
	<!-- <script src="../public/js/bootstrap.min.js" type="text/javascript"></script> -->
</body>
</html>
