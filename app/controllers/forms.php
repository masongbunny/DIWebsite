<?php 

include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/middleware.php");
include(ROOT_PATH . "/app/helpers/validateForm.php");

$table = 'forms';

$forms = selectAll($table);

$errors	= array();
$id = '';
$name = '';
$file = '';
$type = '';

if(isset($_POST['add-form'])){
	//adminOnly();
	$errors = validateForm($_POST);

	if(!empty($_FILES['file']['name'])){
		$file_name = time() . '_' . $_FILES['file']['name'];
		$destination = ROOT_PATH . "/assets/forms/" . $file_name;
		
		$result = move_uploaded_file($_FILES['file']['tmp_name'], $destination);

		if($result){
			$_POST['file'] = $file_name;
		} else{
			array_push($errors, "Failed to upload file!");
		}
	} else {
		array_push($errors, "File required!");
	}

	if (count($errors) == 0) {
		unset($_POST['add-form']);
		$_POST['user_id']=$_SESSION['empid'];
		$form_id = create($table, $_POST);
		$_SESSION['message'] = "Form added successfully!";
		$_SESSION['type'] = "success";
		header("location: " . BASE_URL . '/superadmin/downloadableforms/index.php');	
			exit();
	} else{
		$name = $_POST['name'];
		$type = $_POST['type'];
	}
}

if (isset($_POST['update-form'])) {
	//adminOnly();
	$errors = validateUpdateForm($_POST);
	if(!empty($_FILES['file']['name'])){
		$file_name = time() . '_' . $_FILES['file']['name'];
		$destination = ROOT_PATH . "/assets/forms/" . $file_name;
		
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
		unset($_POST['update-form'], $_POST['id']);
		$_POST['user_id'] = $_SESSION['empid'];
		$form_id = update($table, $id, $_POST);
		$_SESSION['message'] = "Form updated successfully!";
		$_SESSION['type'] = "success";
		header("location: " . BASE_URL . '/superadmin/downloadableforms/index.php');	
		exit();
	} else{
		$name = $_POST['name'];
		$type = $_POST['type'];
	}
}

if(isset($_GET['id'])){
	$form = selectOne($table, ['id' => $_GET['id']]);
	$id = $form['id'];
	$name = $form['name'];
	$type = $form['type'];
}


if (isset($_GET['delete_id'])){
	$count = delete($table, $_GET['delete_id']);
	$_SESSION['message'] = "Form succesfully deleted!";
	$_SESSION['type'] = "success";
	header('location: '. BASE_URL . "/superadmin/downloadableforms/index.php");
	exit();
}