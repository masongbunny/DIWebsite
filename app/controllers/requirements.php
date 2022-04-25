<?php 

include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/middleware.php");
include(ROOT_PATH . "/app/helpers/validateRequirement.php");


$table = 'requirements_list';
$reqs = selectAllSortByCreatedAt($table);
$table1 = 'requirements_submitted';

$currentAY = selectAll('current_academic_details');
$current_ay = $currentAY[0]['current_academic_year'];
$current_sem = $currentAY[0]['current_semester'];

$requirements = selectReqByAY($table, ['ay' => $current_ay, 'sem' => $current_sem]);

$submitted = selectAllByUsers($_SESSION['empid']);

$errors = array();
$acadusers = array();
$req_name = '';
$ay1 = '';
$ay2 = '';
$sem = '';
$empid = '';
$description = '';

if (isset($_POST['add-requirement'])){
	require ROOT_PATH.'/PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$errors = validateRequirement($_POST);
	if(count($errors) === 0){
		$_POST['ay'] = $current_ay;
		$_POST['sem'] = $current_sem;
		unset($_POST['add-requirement']);
		$info = selectAll('current_academic_details');
		$emailODI = $info[0]['autonotifemail'];
		$passwordODI = $info[0]['autonotifpassword'];
		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = $emailODI;                 // SMTP username
		$mail->Password = $passwordODI;                           // SMTP password
		$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 587;                                    // TCP port to connect to

		$mail->setFrom($emailODI, 'Office of the Director for Instuctions of Cavite State University - CCAT Campus');
		$users = selectAllUsersNotODI('users');
		foreach ($users as $key => $user) {
			$mail->addAddress($user['email']);     // Add a recipient
		}
		
		$mail->isHTML(true);                                  // Set email format to HTML

		$mail->Subject = 'ODI New Requirement';
		$mail->Body    = "The DI Office added a new requirement. <br><br> 
							Requirement Name: " . $_POST['req_name'] . "<br><br>
							Description: " . $_POST['description'];
		$mail->AltBody = 'The DI Office added a new requirement!';
		$mail->send();
		$req = create($table, $_POST);
		$_SESSION['message'] = "New requirement added on the list!";
		$_SESSION['type'] = "success";
		header('location: '. BASE_URL . "/superadmin/requirements/index.php");
		exit();
		
	} else {
		$req_name = $_POST['req_name'];
		$description = $_POST['description'];
	} 
}

if (isset($_POST['update-requirement'])){
	$errors = validateRequirement($_POST);
	if(count($errors) === 0){
		$id = $_POST['req_id'];
		unset($_POST['update-requirement'], $_POST['req_id']);
		$req = updateReq($table, $id, $_POST);
		$_SESSION['message'] = "Requirement Successfully Updated";
		$_SESSION['type'] = "success";
		header('location: '. BASE_URL . "/superadmin/requirements/index.php");
		exit();
	} else {
		$req_name = $_POST['req_name'];
	}
}

if (isset($_GET['edit_id'])){
	$req = selectOne($table, ['req_id' => $_GET['edit_id']]);
	$req_id = $req['req_id'];
	$req_name = $req['req_name'];
	$description = $req['description'];
	$ay1 = substr($req['ay'],0,4);
	$ay2 = substr($req['ay'],5,9);
	$sem = $req['sem'];
}


if (isset($_GET['delete_id'])) {
	//adminOnly();
	$count = deleteReq($table, $_GET['delete_id']);
	$_SESSION['message'] = "Requirement succesfully deleted!";
	$_SESSION['type'] = "success";
	header('location: '. BASE_URL . "/superadmin/requirements/index.php");
	exit();
}

if (isset($_GET['submit_id'])){
	$req = selectOne($table, ['req_id' => $_GET['submit_id']]);
	$req_id = $req['req_id'];
	$empid = $_SESSION['empid'];
	$req_name = $req['req_name'];
}

if (isset($_GET['doc_id'])){
	$req = selectOne($table, ['req_id' => $_GET['doc_id']]);
	$req_id = $req['req_id'];
	$empid = $_SESSION['empid'];
	$req_name = $req['req_name'];
}


if(isset($_POST['submit-requirement'])){
	//adminOnly();

	if(!empty($_FILES['file']['name'])){
		$file_name = time() . '_' . $_FILES['file']['name'];
		$destination = ROOT_PATH . "/assets/submitted_docs/" . $file_name;
		
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
		unset($_POST['submit-requirement'], $_POST['req_name']);
		$form_id = create($table1, $_POST);
		$_SESSION['message'] = "Requirement submitted successfully!";
		$_SESSION['type'] = "success";
		header("location: " . BASE_URL . '/faculty/requirements/index.php');	
			exit();
	} else{
		$req_name = $_POST['req_name'];
		$req_id = $_POST['req_id'];
		$empid = $_POST['empid'];
		$file = $_POST['file'];
	}
	
}

if(isset($_POST['csubmit-requirement'])){
	//adminOnly();

	if(!empty($_FILES['file']['name'])){
		$file_name = time() . '_' . $_FILES['file']['name'];
		$destination = ROOT_PATH . "/assets/submitted_docs/" . $file_name;
		
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
		unset($_POST['csubmit-requirement'], $_POST['req_name']);
		$form_id = create($table1, $_POST);
		$_SESSION['message'] = "Requirement submitted successfully!";
		$_SESSION['type'] = "success";
		header("location: " . BASE_URL . '/chairperson/requirements/index.php');	
			exit();
	} else{
		$req_name = $_POST['req_name'];
		$req_id = $_POST['req_id'];
		$empid = $_POST['empid'];
		$file = $_POST['file'];
	}
	
}

if (isset($_POST['update-document'])){
	if(!empty($_FILES['file']['name'])){
		$file_name = time() . '_' . $_FILES['file']['name'];
		$destination = ROOT_PATH . "/assets/submitted_docs/" . $file_name;
		
		$result = move_uploaded_file($_FILES['file']['tmp_name'], $destination);

		if($result){
			$_POST['file'] = $file_name;
		} else{
			array_push($errors, "Failed to upload file!");
		}
	} else {
		array_push($errors, "File required!");
	}
	$errors = validateRequirement($_POST);
	if(count($errors) === 0){
		$id = $_POST['req_id'];
		$empid = $_POST['empid'];
		unset($_POST['update-document'], $_POST['req_id'], $_POST['req_name'], $_POST['empid']);
		$req = updateSubmittedReq($table1, $id, $empid, $_POST);
		$_SESSION['message'] = "Document succesfully updated!";
		$_SESSION['type'] = "success";
		header('location: '. BASE_URL . "/chairperson/requirements/index.php");
		exit();
		
	} else {
		$req_name = $_POST['req_name'];
		$req_id = $_POST['req_id'];
	}
}

if (isset($_POST['cupdate-document'])){
	if(!empty($_FILES['file']['name'])){
		$file_name = time() . '_' . $_FILES['file']['name'];
		$destination = ROOT_PATH . "/assets/submitted_docs/" . $file_name;
		
		$result = move_uploaded_file($_FILES['file']['tmp_name'], $destination);

		if($result){
			$_POST['file'] = $file_name;
		} else{
			array_push($errors, "Failed to upload file!");
		}
	} else {
		array_push($errors, "File required!");
	}
	$errors = validateRequirement($_POST);
	if(count($errors) === 0){
		$id = $_POST['req_id'];
		$empid = $_POST['empid'];
		unset($_POST['cupdate-document'], $_POST['req_id'], $_POST['req_name'], $_POST['empid']);
		$req = updateSubmittedReq($table1, $id, $empid, $_POST);
		$_SESSION['message'] = "Document succesfully updated!";
		$_SESSION['type'] = "success";
		header('location: '. BASE_URL . "/chairperson/requirements/index.php");
		exit();
		
	} else {
		$req_name = $_POST['req_name'];
		$req_id = $_POST['req_id'];
	}
}


