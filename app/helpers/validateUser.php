<?php 

function validateUser($user)
{
	$errors = array();

	$existingEmpId = selectOne('users', ['empid' => $user['empid']]);
	if ($existingEmpId){
	 	if (isset($_POST['register-btn']) && $existingEmpId['status'] == 'Pending') {
	 		$_POST['status'] = 'Pending';
			$_SESSION['title'] = "Pending Registration Found!";
			$_SESSION['text'] = "Account with that Employee ID is pending approval. Please wait for the ODI to approve your registration. You may send an email or visit the DI Office to follow up.";
			$_SESSION['icon'] = "warning";
			$_SESSION['location'] = "index.php";
			header('location: '. BASE_URL . "/messagepopper.php");
			exit();
		}elseif (isset($_POST['register-btn']) && $existingEmpId['status'] == 'Active'){
			$_SESSION['title'] = "Existing Registration Found!";
			$_SESSION['text'] = "Account with that Employee ID already exists. Please login instead.";
			$_SESSION['icon'] = "warning";
			$_SESSION['location'] = "login.php";
			header('location: '. BASE_URL . "/messagepopper.php");
			exit();
		}
	}

	if ($existingEmpId){
	 	if (isset($_POST['create-admin']) && $existingEmpId['status'] == 'Pending') {
	 		array_push($errors, 'Pending faculty/chairperson registration found for this employee ID! Please check Manage Account Section!');
		}if (isset($_POST['create-admin']) && $existingEmpId['status'] == 'Active'){
			array_push($errors, 'Employee ID already registered!');
		}
	}


	if (!preg_match('/([a-z]{1,})/', $user['password']) || !preg_match('/([A-Z]{1,})/', $user['password']) || !preg_match('/([\d]{1,})/', $user['password']) || strlen($user['password']) < 8 ) {
	    array_push($errors, 'Password must be at least 8 characters long and must contain atleast one (1) lowercase character, one (1) uppercase character, and one (1) number!');
	}

	if ($user['passwordConf'] !== $user['password']){
		array_push($errors, 'Passwords do not match!');
	}

	$existingEmail = selectOne('users', ['email' => $user['email']]);
	if ($existingEmail){
		if (isset($_POST['register-btn']) || isset($_POST['create-admin'])) {
			array_push($errors, 'Email already exists!');
		}
	}
	return ($errors);
}

function validateAdminUser($user)
{
	$errors = array();
	if ($user['position'] == 'Admin' || $user['position'] == 'Super Admin') {
		if ($user['department']!== 'Director for Instructions') {
			array_push($errors, 'An Admin or Super Admin account must be registered under the Director for Instructions!');
		}
		if ($user['rank']!== 'ODI Staff'){
			array_push($errors, 'An Admin or Super Admin rank must be registered as an ODI Staff!');
		}
	} 
	
	$existingEmpId = selectOne('users', ['empid' => $user['empid']]);
	if ($existingEmpId){
	 	if (isset($_POST['create-admin']) && $existingEmpId['status'] == 'Pending') {
	 		array_push($errors, 'Pending faculty/chairperson registration found for this employee ID! Please check Manage Account Section!');
		}if (isset($_POST['create-admin']) && $existingEmpId['status'] == 'Active'){
			array_push($errors, 'Employee ID already registered!');
		}
	}

	if (!preg_match('/([a-z]{1,})/', $user['password']) || !preg_match('/([A-Z]{1,})/', $user['password']) || !preg_match('/([\d]{1,})/', $user['password']) || strlen($user['password']) < 8 ) {
	    array_push($errors, 'Password must be at least 8 characters long and must contain atleast one (1) lowercase character, one (1) uppercase character, and one (1) number!');
	}

	if ($user['passwordConf'] !== $user['password']){
		array_push($errors, 'Passwords do not match!');
	}

	$existingEmail = selectOne('users', ['email' => $user['email']]);
	if ($existingEmail){
		if (isset($_POST['register-btn']) || isset($_POST['create-admin'])) {
			array_push($errors, 'Email already exists!');
		}
	}
	return ($errors);
}

function validateEditUser($user)
{
	$errors = array();
	if ($user['passwordConf'] !== $user['password']){
		array_push($errors, 'Passwords do not match!');
	}

	if (!empty($_POST['password'])) {
		if (!preg_match('/([a-z]{1,})/', $user['password']) || !preg_match('/([A-Z]{1,})/', $user['password']) || !preg_match('/([\d]{1,})/', $user['password']) || strlen($user['password']) < 8 ) {
		    array_push($errors, 'Password must be at least 8 characters long and must contain atleast one (1) lowercase character, one (1) uppercase character, and one (1) number!');
		}
	}


	$existingEmail = selectOne('users', ['email' => $user['email']]);
	if ($existingEmail){
		if (isset($user['update-user']) && $existingEmail['empid'] != $user['empid']) {
			array_push($errors, 'Email already exists!');
		} 
	}
	return ($errors);
}

function validateLogin($user)
{   
	$errors = array();

	if (empty($user['empid'])){
		array_push($errors, 'Employee ID is required!');
	}

	if (empty($user['password'])){
		array_push($errors, 'Password is required!');
	}

	return ($errors);
} 

function validateForgotPassword($user)
{
	$errors = array();

	$existingEmail = selectOne('users', ['email' => $user['email']]);
	if (!$existingEmail){
	 	array_push($errors, 'Email not found!');
	}
	return ($errors);
}