<?php 

include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/middleware.php");
include(ROOT_PATH . "/app/helpers/validateDOTM.php");

$table = 'dotm';
$entries = selectAll($table);

$table2	= 'gallery';
$galleries = selectAll($table2, ['department' => $_SESSION['department']]);

$table1 = 'current_academic_details';


$errors	= array();
$id = '';
$image = '';
$caption = '';

$autonotifemail = '';
$autonotifpassword = '';
$contactemail = '';
$ay1 ='';
$ay2 ='';
$current_semester ='';
$store1=0;
$store1=0;

if(isset($_POST['saadd-item'])){
	//adminOnly();
	$errors = validateDOTM($_POST);

	if(!empty($_FILES['image']['name'])){
		$file_name = time() . '_' . $_FILES['image']['name'];
		$destination = ROOT_PATH . "/assets/images/" . $file_name;
		
		$result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

		if($result){
			$_POST['image'] = $file_name;
		} else{
			array_push($errors, "Failed to upload image!");
		}
	} else {
		array_push($errors, "Image required!");
	}

	if (count($errors) == 0) {
		unset($_POST['saadd-item']);
		$dotm_id = create($table, $_POST);
		$_SESSION['message'] = "Item added successfully!";
		$_SESSION['type'] = "success";
		header("location: " . BASE_URL . '/superadmin/dotm/index.php');	
			exit();
	} else{
		$caption = $_POST['caption'];
	}
	
}

if(isset($_POST['saupdatedotm-item'])){
	//adminOnly();
	$errors = validateDOTM($_POST);

	if(!empty($_FILES['image']['name'])){
		$file_name = time() . '_' . $_FILES['image']['name'];
		$destination = ROOT_PATH . "/assets/images/" . $file_name;
		
		$result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

		if($result){
			$_POST['image'] = $file_name;
		} else{
			array_push($errors, "Failed to upload image!");
		}
	} else {
		unset($_POST['image']);
	}
	if (count($errors) == 0) {
		$id=$_POST['id'];
		unset($_POST['saupdatedotm-item'], $_POST['id']);
		$dotm_id = update($table, $id, $_POST);
		$_SESSION['message'] = "Item Updated successfully!";
		$_SESSION['type'] = "success";
		header("location: " . BASE_URL . '/superadmin/dashboard.php');	
			exit();
	} else{
		$caption = $_POST['caption'];
	}
}

if (isset($_POST['sadelete-all'])) {
	//adminOnly();
	$count = truncate();
	$_SESSION['message'] = "All items deleted!";
	$_SESSION['type'] = "success";
	header('location: '. BASE_URL . "/superadmin/dashboard.php");
	exit();
}

if (isset($_GET['sadelete_id'])) {
	//adminOnly();
	$count = delete($table, $_GET['sadelete_id']);
	$_SESSION['message'] = "Entry succesfully deleted!";
	$_SESSION['type'] = "success";
	header("location: " . BASE_URL . '/superadmin/dotm/index.php');
	exit();
}

if (isset($_GET['saedit_id'])) {
	//adminOnly();
	$count = selectAll($table, ['id' => $_GET['saedit_id']]);
	$image =  $count[0]['image'];
	$caption = $count[0]['caption'];
	$id = $count[0]['id'];
}

if (isset($_GET['edit_id'])) {
	//adminOnly();
	$count = selectAll($table, ['id' => $_GET['edit_id']]);
	$image =  $count[0]['image'];
	$caption = $count[0]['caption'];
	$id = $count[0]['id'];
}

if(isset($_POST['saupdate-details'])){
	//adminOnly();
	$store1 = (int)$_POST['ay1']+1;
	$store2 = (int)$_POST['ay2'];	

	if ($store2 != $store1) {
		array_push($errors, 'Academic Year must be consecutive! First value should be one year less than the second!');
	}

	$currentAY = selectAll('current_academic_details');
	$current_ay = $currentAY[0]['current_academic_year'];
	$current_sem = $currentAY[0]['current_semester'];
	$count = 0;

	$reqlist = selectAll('requirements_list', ['ay' => $current_ay, 'sem' => $current_sem]);
    $userlist = selectAllUsersNotODI('users');
	foreach ($reqlist as $i => $list){
		foreach ($userlist as $j => $user){
			$status=selectOne('requirements_submitted',['req_id' => $list['req_id'], 'empid' => $user['empid']]);
			if (!$status){
				$count=$count+1;
			}
		}
	}
	if ($count !== 0) {
		array_push($errors, 'Requirements submission not yet complete for the current semester. Please inform the faculty members to submit all requirements first!');
	}
	
	if (count($errors) == 0) {
		$count = truncateDetails();
		$_POST['current_academic_year'] = $_POST['ay1'] . '-' .$_POST['ay2'];
		unset($_POST['saupdate-details'], $_POST['ay1'], $_POST['ay2']);
		$detail_id = create($table1, $_POST);
		$_SESSION['message'] = "Current Academic Details Successfully Updated!";
		$_SESSION['type'] = "success";
		header("location: " . BASE_URL . '/superadmin/dotm/index.php');	
			exit();
	} else{
		$ay1 = $_POST['ay1'];
		$ay2 = $_POST['ay2'];
		$sem = $_POST['current_semester'];
		$autonotifemail = $_POST['autonotifemail'];
		$autonotifpassword = $_POST['autonotifpassword'];
	}
	
}

if(isset($_POST['update-aydetails'])){
	//adminOnly();
	$store1 = (int)$_POST['ay1']+1;
	$store2 = (int)$_POST['ay2'];	

	if ($store2 != $store1) {
		array_push($errors, 'Academic Year must be consecutive! First value should be one year less than the second!');
	}

	$currentAY = selectAll('current_academic_details');
	$current_ay = $currentAY[0]['current_academic_year'];
	$current_sem = $currentAY[0]['current_semester'];
	$count = 0;

	$reqlist = selectAll('requirements_list', ['ay' => $current_ay, 'sem' => $current_sem]);
    $userlist = selectAllUsersNotODI('users');
	foreach ($reqlist as $i => $list){
		foreach ($userlist as $j => $user){
			$status=selectOne('requirements_submitted',['req_id' => $list['req_id'], 'empid' => $user['empid']]);
			if (!$status){
				$count=$count+1;
			}
		}
	}
	if ($count !== 0) {
		array_push($errors, 'Requirements submission not yet complete for the current semester. Please inform the faculty members to submit all requirements first!');
	}
	if (count($errors) == 0) {
		$id='1';
		$_POST['current_academic_year'] = $_POST['ay1'] . '-' .$_POST['ay2'];
		unset($_POST['update-aydetails'], $_POST['ay1'], $_POST['ay2']);
		$detail_id = update($table1, $id, $_POST);
		$_SESSION['message'] = "Current Academic Details Successfully Updated!";
		$_SESSION['type'] = "success";
		header("location: " . BASE_URL . '/superadmin/dashboard.php');	
			exit();
	} else{
		$ay1 = $_POST['ay1'];
		$ay2 = $_POST['ay2'];
		$sem = $_POST['current_semester'];
	}
	
}

if(isset($_POST['add-image'])){
	//adminOnly();
	if(!empty($_FILES['image']['name'])){
		$file_name = time() . '_' . $_FILES['image']['name'];
		$destination = ROOT_PATH . "/assets/images/" . $file_name;
		
		$result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

		if($result){
			$_POST['image'] = $file_name;
		} else{
			array_push($errors, "Failed to upload image!");
		}
	} else {
		array_push($errors, "Image required!");
	}

	if (count($errors) == 0) {
		unset($_POST['add-image']);
		$_POST['department'] = $_SESSION['department'];
		$dotm_id = create($table2, $_POST);
		$_SESSION['message'] = "Item added successfully!";
		$_SESSION['type'] = "success";
		header("location: " . BASE_URL . '/chairperson/gallery/index.php');	
			exit();
	} else{
		$caption = $_POST['caption'];
		$image = $_POST['image'];
	}
	
}

if (isset($_GET['cdelete_id'])) {
	//adminOnly();
	$count = delete($table2, $_GET['cdelete_id']);
	$_SESSION['message'] = "Entry succesfully deleted!";
	$_SESSION['type'] = "success";
	header('location: '. BASE_URL . "/chairperson/dashboard.php");
	exit();
}

if (isset($_GET['cedit_id'])) {
	//adminOnly();
	$count = selectAll($table2, ['id' => $_GET['cedit_id']]);
	$caption = $count[0]['caption'];
	$id = $_GET['cedit_id'];
}

if(isset($_POST['cupdate-image'])){
	//adminOnly();
	if(!empty($_FILES['image']['name'])){
		$file_name = time() . '_' . $_FILES['image']['name'];
		$destination = ROOT_PATH . "/assets/images/" . $file_name;
		
		$result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

		if($result){
			$_POST['image'] = $file_name;
		} else{
			array_push($errors, "Failed to upload image!");
		}
	} else {
		unset($_POST['image']);
	}

	if (count($errors) == 0) {
		$id = $_POST['id'];
		unset($_POST['cupdate-image'], $_POST['id']);
		$dotm_id = update($table2, $id, $_POST);
		$_SESSION['message'] = "Item updated successfully!";
		$_SESSION['type'] = "success";
		header("location: " . BASE_URL . '/chairperson/gallery/index.php');	
			exit();
	} else{
		$caption = $_POST['caption'];
	}
	
}