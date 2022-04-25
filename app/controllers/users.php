<?php 
//userregistrationandlogin
include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/middleware.php");
include(ROOT_PATH . "/app/helpers/validateUser.php");

$table = 'users';

$admin_users = selectAll($table);

$rank = '';
$errors = array();
$id='';
$empid = '';
$lastname = '';
$firstname = '';
$middlename = '';
$birthday = '';
$email = '';
$contactno = '';
$password = '';
$position = '';
$department = '';
$status = '';
$passwordConf = '';
$status = '';


function loginUser($user){
	$_SESSION['empid'] = $user['empid'];
	$_SESSION['firstname'] = $user['firstname'];
	$_SESSION['lastname'] = $user['lastname'];
	$_SESSION['name'] = $user['firstname'] . ', ' . $user['firstname'];
	$_SESSION['position'] = $user['position'];
	$_SESSION['rank'] = $user['rank'];
	$_SESSION['department'] = $user['department'];
	$_SESSION['status'] = $user['status'];
	//$_SESSION['message'] = 'Welcome, ' . $user['firstname'] . '!';
	//$_SESSION['type'] = 'success';

	if ($_SESSION['position']=='Admin') {
		header('location: '. BASE_URL . "/superadmin/dashboard.php");
	} elseif ($_SESSION['position']=='Super Admin'){
		header('location: '. BASE_URL . "/superadmin/dashboard.php");
	} elseif ($_SESSION['position']=='Chairperson'){
		header('location: '. BASE_URL . "/chairperson/dashboard.php");
	}else {
		header('location: '. BASE_URL . "/faculty/dashboard.php");
	}
	exit();
}

if (isset($_POST['register-btn'])){
	$errors = validateUser($_POST);

	if(count($errors) === 0){
		unset($_POST['register-btn'], $_POST['passwordConf']);
		$_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
		$_POST['lastname'] = '!!TO_BE_EDITED!!';
		$_POST['firstname'] = '!!TO_BE_EDITED!!';
		$_POST['middlename'] = '!!TO_BE_EDITED!!';
		$_POST['contactno'] = '!!TO_BE_EDITED!!';
		$_POST['birthday'] = '0000-00-00';
		$_POST['position'] = '!!TO_BE_EDITED!!';
		$_POST['rank'] = '!!TO_BE_EDITED!!';
		$_POST['department'] = '!!TO_BE_EDITED!!';
		$_POST['status'] = 'Pending';

		$user_id = create($table, $_POST);
		$_SESSION['title'] = "Successful Registration!";
		$_SESSION['text'] = "You have successfully registered. Please wait for the ODI to approve your registration.";
		$_SESSION['icon'] = "success";
		$_SESSION['location'] = "index.php";
		header('location: '. BASE_URL . "/messagepopper.php");
		exit();
	
	} else {
		$empid = $_POST['empid'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$passwordConf = $_POST['passwordConf'];

	}
}

if (isset($_POST['create-admin'])){
	$errors = validateAdminUser($_POST);

	if(count($errors) === 0){
		unset($_POST['passwordConf'], $_POST['create-admin']);
		$_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
		$_POST['middlename'] = '!!TO_BE_EDITED!!';
		$_POST['contactno'] = '!!TO_BE_EDITED!!';
		$_POST['birthday'] = '0000-00-00';
		$user_id = create($table, $_POST);
		$_SESSION['message'] = "User succesfully added!";
		$_SESSION['type'] = "success";
		header('location: '. BASE_URL . "/superadmin/users/index.php");
		exit();
		
	} else {
		$empid = $_POST['empid'];
		$lastname = $_POST['lastname'];
		$firstname = $_POST['firstname'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$passwordConf = $_POST['passwordConf'];
		$position = $_POST['position'];
		$department = $_POST['department'];
		$rank = $_POST['rank'];
	}
}

if (isset($_POST['create-rank'])){
	
	if(count($errors) === 0){
		unset($_POST['create-rank']);
		$user_id = create('ranks', $_POST);
		$_SESSION['message'] = "New rank succesfully added!";
		$_SESSION['type'] = "success";
		header('location: '. BASE_URL . "/superadmin/users/rankindex.php");
		exit();
		
	} else {
		$rank = $_POST['rank'];
	}
}

if (isset($_POST['update-rank'])){
	if(count($errors) === 0){
		$id = $_POST['id'];
		unset($_POST['update-rank'], $_POST['id']);
		$user_id = update('ranks', $id, $_POST);
		$_SESSION['message'] = "Rank succesfully updated!";
		$_SESSION['type'] = "success";
		header('location: '. BASE_URL . "/superadmin/users/rankindex.php");
		exit();
		
	} else {
		$rank = $_POST['rank'];
	}
}

if (isset($_POST['update-user'])){
	//adminOnly();
	$errors = validateEditUser($_POST);

	if(count($errors) == 0){
		$id = $_POST['empid'];
		if (empty($_POST['password'])) {
			unset($_POST['password'], $_POST['passwordConf'], $_POST['update-user'], $_POST['empid']);
		} else {
			unset($_POST['passwordConf'], $_POST['update-user'], $_POST['empid']);
			$_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
		}
		$count = updateUser($table, $id, $_POST);
		$user = selectOne($table, ['empid' => $_SESSION['empid']]);
		$_SESSION['firstname'] = $user['firstname'];
		if ($_POST['status'] == 'On Leave') {
			$_SESSION['message'] = "Account updated to 'On Leave' status. If employee is on-leave for the whole semester, they will not be required to submit requirements. Attach their leave form as requirement. Go to Requirements Repository > Manual Submission.";
			$_SESSION['type'] = "success";
			header('location: '. BASE_URL . "/superadmin/users/index.php");
			exit();
		}
		$_SESSION['message'] = "Account succesfully updated!";
		$_SESSION['type'] = "success";
		header('location: '. BASE_URL . "/superadmin/users/index.php");
		exit();
	
	} else {
		$empid = $_POST['empid'];
		$lastname = $_POST['lastname'];
		$firstname = $_POST['firstname'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$passwordConf = $_POST['passwordConf'];
		$position = $_POST['position'];
		$department = $_POST['department'];
		$status = $_POST['status'];
		$rank = $_POST['rank'];
	}
}

if (isset($_POST['update-superadmin'])){
	//adminOnly();
	$errors = validateEditUser($_POST);

	if(count($errors) == 0){
		$id = $_POST['empid'];
		if (empty($_POST['password'])) {
			unset($_POST['password'], $_POST['passwordConf'], $_POST['update-superadmin'], $_POST['empid']);
		} else {
			unset($_POST['passwordConf'], $_POST['update-superadmin'], $_POST['empid']);
			$_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
		}
		$count = updateUser($table, $id, $_POST);
		$user = selectOne($table, ['empid' => $_SESSION['empid']]);
		$_SESSION['firstname'] = $user['firstname'];
		$_SESSION['message'] = "Account succesfully updated!";
		$_SESSION['type'] = "success";
		header('location: '. BASE_URL . "/superadmin/dashboard.php");
		exit();
	
	} else {
		$empid = $_POST['empid'];
		$lastname = $_POST['lastname'];
		$firstname = $_POST['firstname'];
		$middlename = $_POST['middlename'];
		$birthday = $_POST['birthday'];
		$email = $_POST['email'];
		$contactno = $_POST['contactno'];
		$password = $_POST['password'];
		$passwordConf = $_POST['passwordConf'];
	}
}

if (isset($_POST['update-faculty'])){
	//adminOnly();
	$errors = validateEditUser($_POST);

	if(count($errors) == 0){
		$id = $_POST['empid'];
		if (empty($_POST['password'])) {
			unset($_POST['password'], $_POST['passwordConf'], $_POST['update-faculty'], $_POST['empid']);
		} else {
			unset($_POST['passwordConf'], $_POST['update-faculty'], $_POST['empid']);
			$_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
		}
		$count = updateUser($table, $id, $_POST);
		$user = selectOne($table, ['empid' => $_SESSION['empid']]);
		$_SESSION['firstname'] = $user['firstname'];
		$_SESSION['message'] = "Account succesfully updated!";
		$_SESSION['type'] = "success";
		header('location: '. BASE_URL . "/faculty/dashboard.php");
		exit();
	
	} else {
		$empid = $_POST['empid'];
		$lastname = $_POST['lastname'];
		$firstname = $_POST['firstname'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$passwordConf = $_POST['passwordConf'];
	}
}

if (isset($_POST['update-chairperson'])){
	//adminOnly();
	$errors = validateEditUser($_POST);

	if(count($errors) == 0){
		$id = $_POST['empid'];
		if (empty($_POST['password'])) {
			unset($_POST['password'], $_POST['passwordConf'], $_POST['update-chairperson'], $_POST['empid']);
		} else {
			unset($_POST['passwordConf'], $_POST['update-chairperson'], $_POST['empid']);
			$_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
		}
		$count = updateUser($table, $id, $_POST);
		$user = selectOne($table, ['empid' => $_SESSION['empid']]);
		$_SESSION['firstname'] = $user['firstname'];
		$_SESSION['message'] = "Account succesfully updated!";
		$_SESSION['type'] = "success";
		header('location: '. BASE_URL . "/chairperson/dashboard.php");
		exit();
	
	} else {
		$empid = $_POST['empid'];
		$lastname = $_POST['lastname'];
		$firstname = $_POST['firstname'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$passwordConf = $_POST['passwordConf'];
	}
}

if (isset($_POST['approve-user'])){

	//adminOnly();

	if(count($errors) == 0){
		$id = $_POST['empid'];
		unset($_POST['passwordConf'], $_POST['approve-user'], $_POST['empid']);
		$count = updateUser($table, $id, $_POST);
		$_SESSION['message'] = "User account approved!";
		$_SESSION['type'] = "success";
		header('location: '. BASE_URL . "/superadmin/users/index.php");
		exit();
	
	} else {
		$empid = $_POST['empid'];
		$lastname = $_POST['lastname'];
		$firstname = $_POST['firstname'];
		$email = $_POST['email'];
		$position = $_POST['position'];
		$department = $_POST['department'];
		$rank = $_POST['rank'];
	}
}

if (isset($_GET['id'])){
	$user = selectOne($table, ['empid' => $_GET['id']]);
	$empid = $user['empid'];
	$lastname = $user['lastname'];
	$firstname = $user['firstname'];
	$middlename = $user['middlename'];
	$birthday = $user['birthday'];
	$email = $user['email'];
	$contactno = $user['contactno'];
	$position = $user['position'];
	$department = $user['department'];
	$status = $user['status'];
	$rank = $user['rank'];
}

if (isset($_POST['login-btn'])){
	$errors = validateLogin($_POST);

	if(count($errors) === 0){
		$user = selectOne($table, ['empid' => $_POST['empid']]);
		if ($user && $user['status'] == 'Active' || $user['status'] == 'On Leave') {
			if ($user && password_verify($_POST['password'], $user['password'])) {
				loginUser($user);
			} else {
				array_push($errors, 'Password is incorrect');
				$empid = $_POST['empid'];
			}
		} elseif ($user && $user['status'] == 'Pending') {
			$_SESSION['title'] = "Pending Approval!";
			$_SESSION['text'] = "Account with that Employee ID is already registered but is still on review. Please wait for the ODI to approve your registration. You may send an email or visit the DI Office to follow up.";
			$_SESSION['icon'] = "warning";
			$_SESSION['location'] = "index.php";
			header('location: '. BASE_URL . "/messagepopper.php");
			exit();
		} elseif ($user && $user['status'] == 'Disabled') {
			$_SESSION['title'] = "Disabled Account!";
			$_SESSION['text'] = "Account with that Employee ID has been disabled. Please contact or visit the DI Office if there has been a mistake.";
			$_SESSION['icon'] = "warning";
			$_SESSION['location'] = "index.php";
			header('location: '. BASE_URL . "/messagepopper.php");
			exit();
		} else{
			array_push($errors, 'Employee ID does not exist on file! Please try again or sign up.');
		}
	} 
}

//deleteadminaccount
if (isset($_GET['delete_id'])) {
	//adminOnly();
	$count = deleteUser($table, $_GET['delete_id']);
	$_SESSION['message'] = "Account succesfully deleted!";
	$_SESSION['type'] = "success";
	header('location: '. BASE_URL . "/superadmin/users/index.php");
	exit();
}

if (isset($_GET['disable_id'])) {
	//adminOnly();
	$id = $_GET['disable_id'];
	unset($_GET['disable_id']);
	$_POST['status'] = 'Disabled';
	$count = updateUser($table, $id, $_POST);
	$_SESSION['message'] = "Account Status set to Disabled!";
	$_SESSION['type'] = "success";
	header('location: '. BASE_URL . "/superadmin/users/index.php");
	exit();
}

if (isset($_GET['enable_id'])) {
	//adminOnly();
	$id = $_GET['enable_id'];
	unset($_GET['enable_id']);
	$_POST['status'] = 'Active';
	$count = updateUser($table, $id, $_POST);
	$_SESSION['message'] = "Account Status set back to Active!";
	$_SESSION['type'] = "success";
	header('location: '. BASE_URL . "/superadmin/users/index.php");
	exit();
}

if (isset($_GET['rank_edit_id'])){
	$user = selectOne('ranks', ['id' => $_GET['rank_edit_id']]);
	$id = $user['id'];
	$rank = $user['rank'];
}

if (isset($_GET['rank_delete_id'])) {
	//adminOnly();
	$count = deleteUser('ranks', $_GET['rank_delete_id']);
	$_SESSION['message'] = "Rank succesfully deleted!";
	$_SESSION['type'] = "success";
	header('location: '. BASE_URL . "/superadmin/users/rankindex.php");
	exit();
}

if (isset($_POST['go-btn'])){
	$string = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!@#$%^&*()";
	$password = str_shuffle($string);
	require ROOT_PATH.'/PHPMailer/PHPMailerAutoload.php';
	$mail = new PHPMailer;
	$errors = validateForgotPassword($_POST);

	if(count($errors) === 0){
		$info = selectAll('current_academic_details');
		$emailODI = $info[0]['email'];
		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = $emailODI;                 // SMTP username
		$mail->Password = 'thecvsunexus2020';        // SMTP password
		$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 587;                                    // TCP port to connect to
		$mail->setFrom($emailODI, 'Office of the Director for Instuctions of Cavite State University - CCAT Campus');
		$mail->addAddress($_POST['email']);     // Add a recipient
		
		$mail->isHTML(true);                                  // Set email format to HTML

		$mail->Subject = 'Password Reset | Forgot Password';
		$mail->Body    = "It seems like you forgot your password to our site. <br><br> 
							Here is your new password: " . $password . "<br><br>
							Use this <strong>link<strong> to log in.";
		$mail->AltBody = "It seems like you forgot your password to our site. <br><br> 
							Here is your new password: " . $password . "<br><br>
							Go to https://www.odi-cvsu-ccat.edu.ph to log in.";
		$mail->send();
		$email1 = $_POST['email'];
		unset($_POST['go-btn'], $_POST['email']);
		$_POST['password'] = password_hash($password, PASSWORD_DEFAULT);
		$user_id = updateUsingEmail('users', $email1, $_POST);
		$_SESSION['title'] = "Successful Password Reset!";
		$_SESSION['text'] = "New Password sent to email!";
		$_SESSION['icon'] = "success";
		$_SESSION['location'] = "index.php";
		header('location: '. BASE_URL . "/messagepopper.php");
		exit();
	
	} else {
		$email = $_POST['email'];
	}
}