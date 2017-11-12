<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Berkshire+Swash">
  
  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css'>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

      <link rel="stylesheet" href="loginregcss.css">
	<title>Registration system PHP and MySQL</title>
	</head>
<body>
	<body>
             <div class="topnav" id="myTopnav">
        
      <a class="fa fa-facebook-f" style="font-size:30px;color:white"></a>
      <a class="fa fa-google" style="font-size:30px;color:white"></a>
      <a class="fa fa-instagram" style="font-size:30px;color:white"></a>
    <h1>Source for All</h1>  
      
    </div>
	<div class="container">
	<div class="row">
	<div class="col-md-12">
	<ul class="tabs">
	            <li><a href="login.php" id="1">LOGIN</a></li>
	            <li><a href="register.php" id="2">SIGN UP</a></li>

	</div>

	<form method="post" action="register.php">

		<?php include('errors.php'); ?>
		<div class="col-sm-12">
		<div class="form row1" id="register" >
          <div class="col-sm-12 container">
		<div class="input">
			<input class="main-form animated bounceInDown" value="<?php echo $username; ?>" type="text" name="username" required  placeholder=" USERNAME"/>
		</div>
		<div class="input">
		<input class="main-form animated bounceInDown" type="email" name="email" value="<?php echo $email; ?>" placeholder=" EMAIL ADDRESS"/>
			
		</div>
		<div class="input">
			<input class="main-form animated bounceInDown" type="password" name="password_1" placeholder=" PASSWORD"/>
		</div>
		<div class="input">
			<input class="main-form animated bounceInDown" type="password" name="password_2" placeholder="CONFIRM PASSWORD"/>
			</div>
		<div class="input">
		<input class="main-form btn animated bounceInDown" type="submit" name="reg_user" value = "SIGN UP"/>
			
		</div>
		</div>
		</div>
		</div>
	</form>
	</div>
	</div>
	</body>
	 <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>

</body>
</html>

