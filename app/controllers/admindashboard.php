<?php 
//userregistrationandlogin
include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/middleware.php");

$table = 'workexperience';

$errors = array();
$id='';
$empid = '';
$companyname = '';
$position= '';
$startdate = '';
$enddate = '';
$orgname = '';
$course = '';
$eventtitle = '';
$location = '';
$speaker = '';
$eventdate = '';
$file = '';
$eventname = '';
$awardname = '';
$awarddate = '';

if (isset($_POST['addworkexp'])){
	if(count($errors) === 0){
		unset($_POST['addworkexp']);
		$_POST['companyname'] = htmlentities($_POST['companyname']);
		$_POST['position'] = htmlentities($_POST['position']);
		$user_id = create($table, $_POST);
		$_SESSION['message'] = "Work Experience Successfully Added!";
		$_SESSION['type'] = "success";
		if ($_SESSION['position'] == "Super Admin") {
			header('location: '. BASE_URL . "/superadmin/dashboard.php");
		} elseif ($_SESSION['position'] == "Admin") {
			header('location: '. BASE_URL . "/superadmin/dashboard.php");
		} elseif ($_SESSION['position'] == "Faculty") {
			header('location: '. BASE_URL . "/faculty/dashboard.php");
		} elseif ($_SESSION['position'] == "Chairperson") {
			header('location: '. BASE_URL . "/chairperson/dashboard.php");
		} 
		exit();
		
	} else {
		$companyname = $_POST['companyname'];
		$position = $_POST['position'];
		$startdate = $_POST['startdate'];
		$enddate = $_POST['enddate'];
	}
}

if(isset($_GET['edit_id'])){
	$form = selectOne($table, ['id' => $_GET['edit_id']]);
	$id = $_GET['edit_id'];
	$companyname = html_entity_decode($form['companyname']);
	$position = html_entity_decode($form['position']);
	$startdate = $form['startdate'];
	$enddate = $form['enddate'];
}

if (isset($_POST['update-workexp'])){
	//$errors = validateUser($_POST);

	if(count($errors) === 0){
		$id = $_POST['id'];
		unset($_POST['update-workexp'], $_POST['id']);
		$_POST['companyname'] = htmlentities($_POST['companyname']);
		$_POST['position'] = htmlentities($_POST['position']);
		$user_id = update($table, $id, $_POST);
		$_SESSION['message'] = "Work Experience Successfully Updated!";
		$_SESSION['type'] = "success";
		if ($_SESSION['position'] == "Super Admin") {
			header('location: '. BASE_URL . "/superadmin/dashboard.php");
		} elseif ($_SESSION['position'] == "Admin") {
			header('location: '. BASE_URL . "/superadmin/dashboard.php");
		} elseif ($_SESSION['position'] == "Faculty") {
			header('location: '. BASE_URL . "/faculty/dashboard.php");
		} elseif ($_SESSION['position'] == "Chairperson") {
			header('location: '. BASE_URL . "/chairperson/dashboard.php");
		} 
		exit();
	} else {
		$id=$_POST['id'];
		$companyname = $_POST['companyname'];
		$position = $_POST['position'];
		$startdate = $_POST['startdate'];
		$enddate = $_POST['enddate'];
	}
}

if (isset($_GET['delete_id'])){
	$count = delete($table, $_GET['delete_id']);
	$_SESSION['message'] = "Entry succesfully deleted!";
	$_SESSION['type'] = "success";
	if ($_SESSION['position'] == "Super Admin") {
			header('location: '. BASE_URL . "/superadmin/dashboard.php");
		} elseif ($_SESSION['position'] == "Admin") {
			header('location: '. BASE_URL . "/superadmin/dashboard.php");
		} elseif ($_SESSION['position'] == "Faculty") {
			header('location: '. BASE_URL . "/faculty/dashboard.php");
		} elseif ($_SESSION['position'] == "Chairperson") {
			header('location: '. BASE_URL . "/chairperson/dashboard.php");
		} 
	exit();
}

if (isset($_POST['addeducbg'])){
	if(count($errors) === 0){
		unset($_POST['addeducbg']);
		$_POST['orgname'] = htmlentities($_POST['orgname']);
		$_POST['course'] = htmlentities($_POST['course']);
		$user_id = create('educbackground', $_POST);
		$_SESSION['message'] = "Educational Background Successfully Added!";
		$_SESSION['type'] = "success";
		if ($_SESSION['position'] == "Super Admin") {
			header('location: '. BASE_URL . "/superadmin/dashboard.php");
		} elseif ($_SESSION['position'] == "Admin") {
			header('location: '. BASE_URL . "/superadmin/dashboard.php");
		} elseif ($_SESSION['position'] == "Faculty") {
			header('location: '. BASE_URL . "/faculty/dashboard.php");
		} elseif ($_SESSION['position'] == "Chairperson") {
			header('location: '. BASE_URL . "/chairperson/dashboard.php");
		} 
		exit();
		
	} else {
		$orgname = $_POST['orgname'];
		$course = $_POST['course'];
		$startdate = $_POST['startdate'];
		$enddate = $_POST['enddate'];
	}
}

if(isset($_GET['editeducbg_id'])){
	$form = selectOne('educbackground', ['id' => $_GET['editeducbg_id']]);
	$id = $_GET['editeducbg_id'];
	$orgname = html_entity_decode($form['orgname']);
	$course = html_entity_decode($form['course']);
	$startdate = $form['startdate'];
	$enddate = $form['enddate'];
}

if (isset($_GET['deleteeducbg_id'])){
	$count = delete('educbackground', $_GET['deleteeducbg_id']);
	$_SESSION['message'] = "Entry succesfully deleted!";
	$_SESSION['type'] = "success";
	if ($_SESSION['position'] == "Super Admin") {
			header('location: '. BASE_URL . "/superadmin/dashboard.php");
		} elseif ($_SESSION['position'] == "Admin") {
			header('location: '. BASE_URL . "/superadmin/dashboard.php");
		} elseif ($_SESSION['position'] == "Faculty") {
			header('location: '. BASE_URL . "/faculty/dashboard.php");
		} elseif ($_SESSION['position'] == "Chairperson") {
			header('location: '. BASE_URL . "/chairperson/dashboard.php");
		} 
	exit();
}

if (isset($_POST['update-educbg'])){
	//$errors = validateUser($_POST);

	if(count($errors) === 0){
		$id = $_POST['id'];
		unset($_POST['update-educbg'], $_POST['id']);
		$_POST['orgname'] = htmlentities($_POST['orgname']);
		$_POST['course'] = htmlentities($_POST['course']);
		$user_id = update('educbackground', $id, $_POST);
		$_SESSION['message'] = "Educational Background Successfully Updated!";
		$_SESSION['type'] = "success";
		if ($_SESSION['position'] == "Super Admin") {
			header('location: '. BASE_URL . "/superadmin/dashboard.php");
		} elseif ($_SESSION['position'] == "Admin") {
			header('location: '. BASE_URL . "/superadmin/dashboard.php");
		} elseif ($_SESSION['position'] == "Faculty") {
			header('location: '. BASE_URL . "/faculty/dashboard.php");
		} elseif ($_SESSION['position'] == "Chairperson") {
			header('location: '. BASE_URL . "/chairperson/dashboard.php");
		} 
		exit();
	} else {
		$id=$_POST['id'];
		$companyname = $_POST['companyname'];
		$position = $_POST['position'];
		$startdate = $_POST['startdate'];
		$enddate = $_POST['enddate'];
	}
}

if (isset($_POST['addtraining'])){
	if(!empty($_FILES['file']['name'])){
		$file_name = time() . '_' . $_FILES['file']['name'];
		$destination = ROOT_PATH . "/assets/trainings/" . $file_name;
		
		$result = move_uploaded_file($_FILES['file']['tmp_name'], $destination);

		if($result){
			$_POST['file'] = $file_name;
		} else{
			array_push($errors, "Failed to upload file!");
		}
	} else {
		array_push($errors, "File required!");
	}

	if(count($errors) === 0){
		unset($_POST['addtraining']);
		$_POST['eventtitle'] = htmlentities($_POST['eventtitle']);
		$_POST['location'] = htmlentities($_POST['location']);
		$_POST['speaker'] = htmlentities($_POST['speaker']);
		$user_id = create('trainings', $_POST);
		$_SESSION['message'] = "Record succesfully posted!";
		$_SESSION['type'] = "success";
		if ($_SESSION['position'] == "Super Admin") {
			header('location: '. BASE_URL . "/superadmin/dashboard.php");
		} elseif ($_SESSION['position'] == "Admin") {
			header('location: '. BASE_URL . "/superadmin/dashboard.php");
		} elseif ($_SESSION['position'] == "Faculty") {
			header('location: '. BASE_URL . "/faculty/dashboard.php");
		} elseif ($_SESSION['position'] == "Chairperson") {
			header('location: '. BASE_URL . "/chairperson/dashboard.php");
		} 
		exit();
		
	} else {
		$eventtitle = $_POST['eventtitle'];
		$location = $_POST['location'];
		$speaker = $_POST['speaker'];
		$eventdate = $_POST['eventdate'];
		$file = $_POST['file'];
	}
}

if(isset($_GET['edittrainings_id'])){
	$form = selectOne('trainings', ['id' => $_GET['edittrainings_id']]);
	$id = $_GET['edittrainings_id'];
	$eventtitle = html_entity_decode($form['eventtitle']);
	$location = html_entity_decode($form['location']);
	$speaker = $form['speaker'];
	$eventdate = $form['eventdate'];
	$file = $form['file'];
}

if (isset($_POST['update-training'])) {
	//adminOnly();
	//$errors = validateUpdateForm($_POST);
	if(!empty($_FILES['file']['name'])){
		$file_name = time() . '_' . $_FILES['file']['name'];
		$destination = ROOT_PATH . "/assets/trainings/" . $file_name;
		
		$result = move_uploaded_file($_FILES['file']['tmp_name'], $destination);

		if($result){
			$_POST['file'] = $file_name;
		} else{
			array_push($errors, "Failed to upload file!");
		}
	} else {
		unset($_POST['file']);
	}

	if(count($errors) == 0){
		$id = $_POST['id'];
		unset($_POST['update-training'], $_POST['id']);
		$_POST['eventtitle'] = htmlentities($_POST['eventtitle']);
		$_POST['location'] = htmlentities($_POST['location']);
		$_POST['speaker'] = htmlentities($_POST['speaker']);
		$form_id = update('trainings', $id, $_POST);
		$_SESSION['message'] = "Record updated successfully!";
		$_SESSION['type'] = "success";
		if ($_SESSION['position'] == "Super Admin") {
			header('location: '. BASE_URL . "/superadmin/dashboard.php");
		} elseif ($_SESSION['position'] == "Admin") {
			header('location: '. BASE_URL . "/superadmin/dashboard.php");
		} elseif ($_SESSION['position'] == "Faculty") {
			header('location: '. BASE_URL . "/faculty/dashboard.php");
		} elseif ($_SESSION['position'] == "Chairperson") {
			header('location: '. BASE_URL . "/chairperson/dashboard.php");
		} 	
		exit();
	} else{
		$id = $_POST['id'];
		$eventtitle = $_POST['eventtitle'];
		$location = $_POST['location'];
		$speaker = $_POST['speaker'];
		$eventdate = $_POST['eventdate'];
		$file = $_POST['file'];
	}
}
if (isset($_GET['deletetrainings_id'])){
	$count = delete('trainings', $_GET['deletetrainings_id']);
	$_SESSION['message'] = "Entry succesfully deleted!";
	$_SESSION['type'] = "success";
	if ($_SESSION['position'] == "Super Admin") {
			header('location: '. BASE_URL . "/superadmin/dashboard.php");
		} elseif ($_SESSION['position'] == "Admin") {
			header('location: '. BASE_URL . "/superadmin/dashboard.php");
		} elseif ($_SESSION['position'] == "Faculty") {
			header('location: '. BASE_URL . "/faculty/dashboard.php");
		} elseif ($_SESSION['position'] == "Chairperson") {
			header('location: '. BASE_URL . "/chairperson/dashboard.php");
		} 
	exit();
}

if (isset($_POST['addaward'])){
	if(!empty($_FILES['file']['name'])){
		$file_name = time() . '_' . $_FILES['file']['name'];
		$destination = ROOT_PATH . "/assets/awards/" . $file_name;
		
		$result = move_uploaded_file($_FILES['file']['tmp_name'], $destination);

		if($result){
			$_POST['file'] = $file_name;
		} else{
			array_push($errors, "Failed to upload file!");
		}
	} else {
		array_push($errors, "File required!");
	}

	if(count($errors) === 0){
		unset($_POST['addaward']);
		$_POST['eventname'] = htmlentities($_POST['eventname']);
		$_POST['awardname'] = htmlentities($_POST['awardname']);
		$user_id = create('awards', $_POST);
		$_SESSION['message'] = "Record succesfully posted!";
		$_SESSION['type'] = "success";
		if ($_SESSION['position'] == "Super Admin") {
			header('location: '. BASE_URL . "/superadmin/dashboard.php");
		} elseif ($_SESSION['position'] == "Admin") {
			header('location: '. BASE_URL . "/superadmin/dashboard.php");
		} elseif ($_SESSION['position'] == "Faculty") {
			header('location: '. BASE_URL . "/faculty/dashboard.php");
		} elseif ($_SESSION['position'] == "Chairperson") {
			header('location: '. BASE_URL . "/chairperson/dashboard.php");
		} 
		exit();
		
	} else {
		$eventname = $_POST['eventname'];
		$awardname = $_POST['awardname'];
		$awarddate = $_POST['awarddate'];
		$file = $_POST['file'];
	}
}
if(isset($_GET['editawards_id'])){
	$form = selectOne('awards', ['id' => $_GET['editawards_id']]);
	$id = $_GET['editawards_id'];
	$eventname = html_entity_decode($form['eventname']);
	$awardname = html_entity_decode($form['awardname']);
	$awarddate = $form['awarddate'];
	$file = $form['file'];
}
if (isset($_POST['update-awards'])) {
	//adminOnly();
	//$errors = validateUpdateForm($_POST);
	if(!empty($_FILES['file']['name'])){
		$file_name = time() . '_' . $_FILES['file']['name'];
		$destination = ROOT_PATH . "/assets/awards/" . $file_name;
		
		$result = move_uploaded_file($_FILES['file']['tmp_name'], $destination);

		if($result){
			$_POST['file'] = $file_name;
		} else{
			array_push($errors, "Failed to upload file!");
		}
	} else {
		unset($_POST['file']);
	}

	if(count($errors) == 0){
		$id = $_POST['id'];
		unset($_POST['update-awards'], $_POST['id']);
		$_POST['eventname'] = htmlentities($_POST['eventname']);
		$_POST['awardname'] = htmlentities($_POST['awardname']);
		$form_id = update('awards', $id, $_POST);
		$_SESSION['message'] = "Record updated successfully!";
		$_SESSION['type'] = "success";
		if ($_SESSION['position'] == "Super Admin") {
			header('location: '. BASE_URL . "/superadmin/dashboard.php");
		} elseif ($_SESSION['position'] == "Admin") {
			header('location: '. BASE_URL . "/superadmin/dashboard.php");
		} elseif ($_SESSION['position'] == "Faculty") {
			header('location: '. BASE_URL . "/faculty/dashboard.php");
		} elseif ($_SESSION['position'] == "Chairperson") {
			header('location: '. BASE_URL . "/chairperson/dashboard.php");
		} 	
		exit();
	} else{
		$id = $_POST['id'];
		$eventname = $_POST['eventname'];
		$awardname = $_POST['awardname'];
		$awarddate = $_POST['awarddate'];
		$file = $_POST['file'];
	}
}
if (isset($_GET['deleteawards_id'])){
	$count = delete('awards', $_GET['deleteawards_id']);
	$_SESSION['message'] = "Entry succesfully deleted!";
	$_SESSION['type'] = "success";
	if ($_SESSION['position'] == "Super Admin") {
			header('location: '. BASE_URL . "/superadmin/dashboard.php");
		} elseif ($_SESSION['position'] == "Admin") {
			header('location: '. BASE_URL . "/superadmin/dashboard.php");
		} elseif ($_SESSION['position'] == "Faculty") {
			header('location: '. BASE_URL . "/faculty/dashboard.php");
		} elseif ($_SESSION['position'] == "Chairperson") {
			header('location: '. BASE_URL . "/chairperson/dashboard.php");
		} 
	exit();
}

if (isset($_GET['prof_id'])) {
	$info = selectAll('users', ['empid' => $_GET['prof_id']]);
	$exp = selectAll('workexperience', ['empid' => $_GET['prof_id']]);
	$edbg = selectAll('educbackground', ['empid' => $_GET['prof_id']]);
	$trn = selectAll('trainings', ['empid' => $_GET['prof_id']]);
	$awrd = selectAll('awards', ['empid' => $_GET['prof_id']]);
}