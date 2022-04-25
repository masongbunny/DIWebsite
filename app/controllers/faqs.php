<?php 

include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/middleware.php");
//include(ROOT_PATH . "/app/helpers/validateRequirement.php");

$table = 'faq';
$faqs = selectAll($table);

$errors = array();
$id = '';
$question = '';
$answer = '';

if(isset($_POST['add-faq'])){
	//adminOnly();
	if (count($errors) == 0) {
		unset($_POST['add-faq']);
		$_POST['question'] = htmlentities($_POST['question']);
		$_POST['answer'] = htmlentities($_POST['answer']);
		$dotm_id = create($table, $_POST);
		$_SESSION['message'] = "Item added successfully!";
		$_SESSION['type'] = "success";
		header("location: " . BASE_URL . '/superadmin/faq/index.php');	
			exit();
	} else{
		$question = $_POST['question'];
		$answer = $_POST['answer'];
	}
	
}

if (isset($_GET['delete_id'])) {
	$count = delete($table, $_GET['delete_id']);
	$_SESSION['message'] = "Entry succesfully deleted!";
	$_SESSION['type'] = "success";
	header("location: " . BASE_URL . '/superadmin/faq/index.php');
	exit();
}

if (isset($_GET['edit_id'])) {
	$count = selectAll($table, ['id' => $_GET['edit_id']]);
	$question = html_entity_decode($count[0]['question']);
	$answer = html_entity_decode($count[0]['answer']);
	$id = $_GET['edit_id'];
}

if(isset($_POST['update-faq'])){
	//adminOnly();
	if (count($errors) == 0) {
		$id=$_POST['id'];
		unset($_POST['update-faq'], $_POST['id']);
		$_POST['question'] = htmlentities($_POST['question']);
		$_POST['answer'] = htmlentities($_POST['answer']);
		$dotm_id = update($table, $id, $_POST);
		$_SESSION['message'] = "Item Updated successfully!";
		$_SESSION['type'] = "success";
		header("location: " . BASE_URL . '/superadmin/faq/index.php');	
			exit();
	} else{
		$question = $_POST['question'];
		$answer = $_POST['answer'];
		$id=$_POST['id'];
	}
	
}