<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  
  
  <div class="container">
      <div class="wrapper">
        <h1 class="title">CREATE AN ACCOUNT</h1>
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	
  	  <label>Username</label>
  	  <input id="input-items" type="text" name="username" value="<?php echo $username; ?>">
  	
  	
  	  <label>Email</label>
  	  <input id="input-items" type="email" name="email" value="<?php echo $email; ?>">
  	
  	
  	  <label>Password</label>
  	  <input id="input-items" type="password" name="password_1">
  	
  	
  	  <label>Confirm password</label>
  	  <input id="input-items" type="password" name="password_2">
  	
  	
  	  <button type="submit" name="reg_user">Register</button>
  	
  </form>
</body>
</html>