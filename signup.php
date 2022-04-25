<?php 
include("path.php");  
include(ROOT_PATH . "/app/controllers/users.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Office of the Director for Instruction - SIGN UP</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://kit.fontawesome.com/f88d2fa247.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="<?php echo BASE_URL . '/assets/css/header.css'; ?>">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<?php include(ROOT_PATH . "/app/includes/header.php"); ?>
<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL . '/assets/css/signup.css'; ?>">
<div class="login-container">
		<div class="signin-signup">
			<form action="signup.php" class="sign-up-form" method="post">
				<h2 class="title">Sign Up</h2>
				<?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>
				<div class="input-field">
					<i class="fas fa-id-card"></i>
					<input type="text" placeholder="Employee ID" name="empid" value="<?php echo $empid; ?>"required>
				</div>
				<div class="input-field">
					<i class="fas fa-envelope"></i>
					<input type="text" placeholder="Email" name="email" value="<?php echo $email; ?>"required>
				</div>
				<div class="input-field">
					<i class="fas fa-unlock"></i>
					<input type="password" placeholder="Password" name="password" value="<?php echo $password; ?>" required>
				</div>
				<div class="input-field">
					<i class="fas fa-lock"></i>
					<input type="password" placeholder=" Confirm Password" name="passwordConf" value="<?php echo $passwordConf; ?>" required>
				</div>
				<input type="submit" value="Sign Up" class="btn solid" name="register-btn">
				<p class="instruction">Sign Up using your employee ID </p>

			</form>
		</div>

		<div class="panels-container">
			<div class="panel left-panel">
				<div class="content">One of Us?
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. </p>
					<a href="<?php echo BASE_URL . '/login.php'; ?>"><button class="btn transparent" id="sign-up-btn" >Log In</button></a>
				</div>	
				<img src="<?php echo BASE_URL . '/assets/images/login.png'; ?>" class="image" alt="">
			</div>
		</div>
	</div>

</body>
</html>