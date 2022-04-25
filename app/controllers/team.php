<?php 

include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/middleware.php");
include(ROOT_PATH . "/app/helpers/validateTeam.php");

$table = 'team';
$teams = selectAll($table);

$errors	= array();
$id = '';
$image = '';
$name = '';
$position = '';

if(isset($_GET['id'])){
	$form = selectOne('departments', ['id' => $_GET['id']]);
	$name = $form['name'];
	$type = $form['type'];
	$description = html_entity_decode($form['description']);
	$display_art = $form['display_art'];
	$org_chart = $form['org_chart'];
	$contact = html_entity_decode($form['contact']);
	$about_info = html_entity_decode($form['about_info']);
}

if(isset($_POST['add-member'])){
	//adminOnly();
	$errors = validateTeam($_POST);

	if(!empty($_FILES['image']['name'])){
		$image_name = time() . '_' . $_FILES['image']['name'];
		$destination = ROOT_PATH . "/assets/images/" . $image_name;
		
		$result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

		if($result){
			$_POST['image'] = $image_name;
		} else{
			array_push($errors, "Failed to upload image!");
		}
	} else {
		array_push($errors, "Image required!");
	}

	if(count($errors) === 0){
		unset($_POST['add-member']);
		$team_id = create($table, $_POST);
		$_SESSION['message'] = "Member Added successfully!";
		$_SESSION['type'] = "success";
		header("location: " . BASE_URL . '/superadmin/team/index.php');	
		exit();
	} else{
		$name = $_POST['name'];
		$position = $_POST['position'];
	}	
}


if (isset($_GET['sadelete_id'])) {
	//adminOnly();
	$count = delete($table, $_GET['sadelete_id']);
	$_SESSION['message'] = "Item deleted successfully!";
	$_SESSION['type'] = "success";
	header('location: '. BASE_URL . "/superadmin/team/index.php");
	exit();
}

if (isset($_GET['edit_id'])) {
	//adminOnly();
	$count = selectOne($table, ['id' => $_GET['edit_id']]);
	$id = $count['id'];
	$name = $count['name'];
	$position = $count['position'];
}

if (isset($_POST['saupdate-member'])) {
	//adminOnly();
	if(!empty($_FILES['image']['name'])){
		$image_name = time() . '_' . $_FILES['image']['name'];
		$destination = ROOT_PATH . "/assets/images/" . $image_name;
		
		$result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

		if($result){
			$_POST['image'] = $image_name;
		} else{
			array_push($errors, "Failed to upload image!");
		}
	} else {
		unset($_POST['image']);
	}

	if(count($errors) === 0){
		$id = $_POST['id'];
		unset($_POST['saupdate-member'], $_POST['id']);
		$post_id = update($table, $id, $_POST);
		$_SESSION['message'] = "Member detail updated successfully!";
		$_SESSION['type'] = "success";
		header("location: " . BASE_URL . '/superadmin/team/index.php');	
		exit();
	} else{
		$id = $_POST['id'];
		$name = $_POST['name'];
		$position = $_POST['position'];
	}
}