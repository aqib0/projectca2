<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
     <title> Login system </title>
	 <link rel="stylesheet" type="text/css" href="style.css">
	 <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>	 
   <div class="container" >
  <div class="login-box"></div>
   <div class="row">
   <div class="col-md-10 login-left" >
<h2> Login Form </h2>
       
	   
	
	<form method="post" action="login.php">
	<?php include('errors.php'); ?>
	   <div class="form-group">
	     <label>Username</label>
		 <input type="text" name="username" class="form-control" required >
	   </div>
        <div class="form-group">
	     <label>Password</label>
		 <input type="password" name="password" class="form-control" required >
	   </div>	
	   <div class="form-group">
	     <button type="submit" name="login" class="btn-primary">Login</button>
	   </div>	
       <p>
        	Not yet a member? <a href="register.php">Sign up</a>
       </p>			
    </form>	 
</div>
</div>	
</div>
</body>
</html>