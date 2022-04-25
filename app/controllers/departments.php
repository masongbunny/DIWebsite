<?php 

include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/middleware.php");

$errors = array();
$table = 'departments';
$table1= 'faq';
$departments = selectAll($table);
$faqres = selectAll($table1);

$id = '';
$type='';
$name='';
$description='';
$display_art='';
$org_chart='';
$about_info = '';
$contact = '';

$about = selectOne($table, ['name' => 'Office of the Director for Instructions'] );
	$id1 = $about['id'];
	$name1 = $about['name'];
	$description1 = html_entity_decode($about['description']);
	$display_art1 = $about['display_art'];
	$org_chart1 = $about['org_chart'];
	$contact1 = html_entity_decode($about['contact']);
	$about_info1 = html_entity_decode($about['about_info']);

if (isset($_POST['add-unit'])){
	if(!empty($_FILES['display_art']['name'])){
		$file_name = time() . '_' . $_FILES['display_art']['name'];
		$destination = ROOT_PATH . "/assets/images/" . $file_name;
		
		$result = move_uploaded_file($_FILES['display_art']['tmp_name'], $destination);

		if($result){
			$_POST['display_art'] = $file_name;
		} else{
			array_push($errors, "Failed to upload file!");
		}
	} else {
		array_push($errors, "Display Image Required!");

	}

	if(!empty($_FILES['org_chart']['name'])){
		$file_name = time() . '_' . $_FILES['org_chart']['name'];
		$destination = ROOT_PATH . "/assets/images/" . $file_name;
		
		$result = move_uploaded_file($_FILES['org_chart']['tmp_name'], $destination);

		if($result){
			$_POST['org_chart'] = $file_name;
		} else{
			array_push($errors, "Failed to upload file!");
		}
	} else {
		array_push($errors, "Organization Chart Required!");
	}

	if(count($errors) === 0){
		unset($_POST['add-unit']);
		$_POST['description'] = htmlentities($_POST['description']);
		$_POST['about_info'] = htmlentities($_POST['about_info']);
		$_POST['contact'] = htmlentities($_POST['contact']);
		$user_id = create($table, $_POST);
		$_SESSION['message'] = "Unit Successfully Added!";
		$_SESSION['type'] = "success";
		header('location: '. BASE_URL . "/superadmin/departments/index.php");
		exit();
		
	} else {
		$name = $_POST['name'];
		$type = $_POST['type'];
		$description = $_POST['description'];
		$org_chart = $_POST['org_chart'];
		$display_art = $_POST['display_art'];
		$contact = $_POST['contact'];
		$about_info = $_POST['about_info'];
	}
}

if (isset($_POST['update-unit'])){
	//$errors = validateUser($_POST);
	if(!empty($_FILES['display_art']['name'])){
		$file_name = time() . '_' . $_FILES['display_art']['name'];
		$destination = ROOT_PATH . "/assets/images/" . $file_name;
		
		$result = move_uploaded_file($_FILES['display_art']['tmp_name'], $destination);

		if($result){
			$_POST['display_art'] = $file_name;
		} else{
			array_push($errors, "Failed to upload file!");
		}
	} else {
		unset($_POST['display_art']);
	}

	if(!empty($_FILES['org_chart']['name'])){
		$file_name = time() . '_' . $_FILES['org_chart']['name'];
		$destination = ROOT_PATH . "/assets/images/" . $file_name;
		
		$result = move_uploaded_file($_FILES['org_chart']['tmp_name'], $destination);

		if($result){
			$_POST['org_chart'] = $file_name;
		} else{
			array_push($errors, "Failed to upload file!");
		}
	} else {
		unset($_POST['org_chart']);
	}

	if(count($errors) === 0){
		$id = $_POST['id'];
		unset($_POST['update-unit'], $_POST['id']);
		$_POST['description'] = htmlentities($_POST['description']);
		$_POST['about_info'] = htmlentities($_POST['about_info']);
		$_POST['contact'] = htmlentities($_POST['contact']);
		$user_id = update($table, $id, $_POST);
		$_SESSION['message'] = "Unit Information Successfully Updated!";
		$_SESSION['type'] = "success";
		header('location: '. BASE_URL . "/superadmin/departments/index.php");
		exit();
		
	} else {
		$name = $_POST['name'];
		$type = $_POST['type'];
		$description = $_POST['description'];
		$org_chart = $_POST['org_chart'];
		$display_art = $_POST['display_art'];
		$contact = $_POST['contact'];
		$about_info = $_POST['about_info'];
	}
}

if(isset($_GET['edit_id'])){
	$form = selectOne($table, ['id' => $_GET['edit_id']]);
	$id = $_GET['edit_id'];
	$name = $form['name'];
	$type = $form['type'];
	$description = html_entity_decode($form['description']);
	$display_art = $form['display_art'];
	$org_chart = $form['org_chart'];
	$contact = html_entity_decode($form['contact']);
	$about_info = html_entity_decode($form['about_info']);
}

if (isset($_GET['delete_id'])){
	$count = delete($table, $_GET['delete_id']);
	$_SESSION['message'] = "Unit succesfully deleted!";
	$_SESSION['type'] = "success";
	header('location: '. BASE_URL . "/superadmin/departments/index.php");
	exit();
}


if(isset($_GET['edit_about_id'])){
	$form = selectOne($table, ['id' => $_GET['edit_about_id']]);
	$id = $_GET['edit_about_id'];
	$name1 = $form['name'];
	$description1 = html_entity_decode($form['description']);
	$display_art1 = $form['display_art'];
	$org_chart1 = $form['org_chart'];
	$contact1 = html_entity_decode($form['contact']);
	$about_info1 = html_entity_decode($form['about_info']);
}

if (isset($_POST['update-about'])){
	//$errors = validateUser($_POST);
	if(!empty($_FILES['display_art']['name'])){
		$file_name = time() . '_' . $_FILES['display_art']['name'];
		$destination = ROOT_PATH . "/assets/images/" . $file_name;
		
		$result = move_uploaded_file($_FILES['display_art']['tmp_name'], $destination);

		if($result){
			$_POST['display_art'] = $file_name;
		} else{
			array_push($errors, "Failed to upload file!");
		}
	} else {
		unset($_POST['display_art']);
	}

	if(!empty($_FILES['org_chart']['name'])){
		$file_name = time() . '_' . $_FILES['org_chart']['name'];
		$destination = ROOT_PATH . "/assets/images/" . $file_name;
		
		$result = move_uploaded_file($_FILES['org_chart']['tmp_name'], $destination);

		if($result){
			$_POST['org_chart'] = $file_name;
		} else{
			array_push($errors, "Failed to upload file!");
		}
	} else {
		unset($_POST['org_chart']);
	}

	if(count($errors) === 0){
		$id = $_POST['id'];
		unset($_POST['update-about'], $_POST['id']);
		$_POST['description'] = htmlentities($_POST['description']);
		$_POST['about_info'] = htmlentities($_POST['about_info']);
		$_POST['contact'] = htmlentities($_POST['contact']);
		$user_id = update($table, $id, $_POST);
		$_SESSION['message'] = "Unit Information Successfully Updated!";
		$_SESSION['type'] = "success";
		header('location: '. BASE_URL . "/superadmin/about/index.php");
		exit();
		
	} else {
		$name = $_POST['name'];
		$type = $_POST['type'];
		$description = $_POST['description'];
		$org_chart = $_POST['org_chart'];
		$display_art = $_POST['display_art'];
		$contact = $_POST['contact'];
		$about_info = $_POST['about_info'];
	}
}

if(isset($_POST['search-faq'])){
    $faqres = searchFAQ($_POST['search-faq']);
}