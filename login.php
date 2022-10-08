<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  
  <div class="container">
      <div class="wrapper">
	  <h1 class="title">SIGN IN</h1>
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	
  		<label>Username</label>
  		<input type="text" id="input-items" name="username" >
  	
  	
  		<label>Password</label>
  		<input type="password" name="password" id="input-items">
  	
  	
  		<button type="submit" class="btn" name="login_user">Login</button>
  	
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
  </div>
    </div>
</body>
</html>