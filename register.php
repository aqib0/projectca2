<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
     <title> Registration system </title>
	 <link rel="stylesheet" type="text/css" href="style.css">
	 <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>	 
<div class="container" >
  <div class="login-box"></div>
   <div class="row">
   <div class="col-md-10 login-left" >
       <h2>Registration form</h2>
	<form method="post" action="register.php">
	   <?php include('errors.php'); ?>
	   
	   <div class="form-group">
	     <label>Username</label>
		 <input type="text" name="username" value="<?php echo $username;?>" class="form-control" required>
	   </div>
        <div class="form-group">
	     <label>Email</label>
		 <input type="email" name="email" value="<?php echo $email; ?>" class="form-control" required >
	   </div>
        <div class="form-group">
	     <label>Password</label>
		 <input type="password" name="password_1" class="form-control" required >
	   </div>
        <div class="form-group">
	     <label>Confirm Password</label>
		 <input type="password" name="password_2" class="form-control" required >
	   </div>	
	   <div class="form-group">
	     <button type="submit" name="register" class="btn-primary">Register</button>
	   </div>	
       <p>
        	Already a member? <a href="login.php">Sign in</a>
       </p>			
    </form>	 
</div>
</div>
</div>	
</body>
</html>