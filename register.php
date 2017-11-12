<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>
	<div class="cont_forms_active_login > .cont_img_back_ ">
	<div class="cont_form_sign_up > input"></div>
	<div class="cont_info_log_sign_up"></div>
	<div class="cont_forms"></div>


	<div class="col_md_sign_up"
	<form method="post" action="register.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn_sign_up" name="reg_user">Register</button>
		</div>
		<p>
			Already a member? 
			<a href="login.php">Sign in</a>
		</p>
	</form>
	</div>
</body>
</html>