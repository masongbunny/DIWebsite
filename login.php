<?php 
include("path.php");  
include(ROOT_PATH . "/app/controllers/users.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Office of the Director for Instruction - LOG IN</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://kit.fontawesome.com/f88d2fa247.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="<?php echo BASE_URL . '/assets/css/header.css'; ?>">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<?php include(ROOT_PATH . "/app/includes/header.php"); ?>
<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL . '/assets/css/login.css'; ?>">
<div class="login-container">
		<div class="signin-signup">
			<form action="login.php" class="sign-in-form" method="post">
				<h2 class="title">Log In</h2>
				<?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>
				<div class="input-field">
					<i class="fas fa-user"></i>
					<input type="text" placeholder="Employee ID" name="empid" value="<?php echo $empid; ?>" required>
				</div>
				<div class="input-field">
					<i class="fas fa-lock"></i>
					<input type="password" placeholder="Password" name="password" value="<?php echo $password; ?>" required>
				</div>
				<input type="submit" value="Login" class="btn solid" name="login-btn">
				<p class="instruction">Login using your employee ID <br><br><a href="forgotpassword.php">Forgot password?</a></p>
			</form>
		</div>

		<div class="panels-container">
			<div class="panel left-panel">
				<div class="content">New Here?
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. </p>
					<a href="<?php echo BASE_URL . '/signup.php'; ?>"><button class="btn transparent" id="sign-up-btn">Sign Up</button></a>
				</div>	
				<img src="<?php echo BASE_URL . '/assets/images/login.png'; ?>" class="image" alt="">
			</div>
		</div>
	</div>
</body>
</html>