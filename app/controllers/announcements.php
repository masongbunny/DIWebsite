<?php 

include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/middleware.php");
//include(ROOT_PATH . "/app/helpers/validateRequirement.php");

$table1='announcement_viewed';
$table = 'announcements';
$announces = selectAllbyCreatedAt($table);

$errors = array();
$id= '';
$title = '';
$file = '';
$content = '';
$assigned_to = '';
$rank = '';

$assigned1 = 'Everyone';
$assigned2 = $_SESSION['department'];
$assigned3 = $_SESSION['rank'];

$assigned = searchAssignedAnnouncements($assigned1,$assigned2,$assigned3);

if (isset($_POST['add-announcement'])){
	require ROOT_PATH.'/PHPMailer/PHPMailerAutoload.php';
	$mail = new PHPMailer;
	//$errors = validateUser($_POST);
	if(!empty($_FILES['file']['name'])){
		$file_name = time() . '_' . $_FILES['file']['name'];
		$destination = ROOT_PATH . "/assets/announcements/" . $file_name;
		
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
		$info = selectAll('current_academic_details');
		$emailODI = $info[0]['email'];
		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = $emailODI;                 // SMTP username
		$mail->Password = 'thecvsunexus2020';                           // SMTP password
		$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 587;                                    // TCP port to connect to
		$mail->setFrom($emailODI, 'Office of the Director for Instuctions of Cavite State University - CCAT Campus');
		if ($_POST['assigned_to'] == 'Chairpersons Only') {
			$users = selectAll('users', ['position' => 'Chairperson']);
		}
		$dept = selectAllDepartmentNotODI('departments');
		foreach ($dept as $key => $value){
			if ($_POST['assigned_to'] == $value['name']) {
				$users = selectAll('users', ['department' => $value['name']]);
			}
		}
		$rank = selectAll('ranks');
		foreach ($rank as $key => $value){
			if ($_POST['assigned_to'] == $value['rank']) {
				$users = selectAll('users', ['rank' => $value['rank']]);
			}
		}
		if ($_POST['assigned_to'] == 'Everyone') {
			$users = selectAllUsersNotODI('users');
		}

		foreach ($users as $key => $user) {
			$mail->addAddress($user['email']);     // Add a recipient
		}
		
		$mail->isHTML(true);                                  // Set email format to HTML

		$mail->Subject = 'New Announcement Posted';
		$mail->Body    = "The DI Office posted a new announcement. <br><br> 
							Title: " . $_POST['title'] . "<br><br>
							Content: " . $_POST['content'];
		$mail->AltBody = "The DI Office posted a new announcement!";
		$mail->send();
		unset($_POST['add-announcement']);
		$_POST['content'] = htmlentities($_POST['content']);
		$user_id = create($table, $_POST);
		$_SESSION['message'] = "Announcement succesfully posted!";
		$_SESSION['type'] = "success";
		header('location: '. BASE_URL . "/superadmin/announcements/index.php");
		exit();
		
	} else {
		$title = $_POST['title'];
		$file = $_POST['file'];
		$content = $_POST['content'];
		$assigned_to = $_POST['assigned_to'];
	}
}

if(isset($_GET['view_id'])){
	$form = selectOne($table, ['id' => $_GET['view_id']]);
	$title = $form['title'];
	$file = $form['file'];
	$content = $form['content'];
}

if(isset($_GET['edit_id'])){
	$form = selectOne($table, ['id' => $_GET['edit_id']]);
	$id = $form['id'];
	$title = $form['title'];
	$file = $form['file'];
	$content = $form['content'];
	$assigned_to = $form['assigned_to'];
}

if (isset($_POST['update-announcement'])) {
	//adminOnly();
	//$errors = validateUpdateForm($_POST);
	if(!empty($_FILES['file']['name'])){
		$file_name = time() . '_' . $_FILES['file']['name'];
		$destination = ROOT_PATH . "/assets/announcements/" . $file_name;
		
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
		unset($_POST['update-announcement'], $_POST['id']);
		$_POST['content'] = htmlentities($_POST['content']);
		$form_id = update($table, $id, $_POST);
		$_SESSION['message'] = "Announcement updated successfully!";
		$_SESSION['type'] = "success";
		header("location: " . BASE_URL . '/superadmin/announcements/index.php');	
		exit();
	} else{
		$id = $_POST['id'];
		$title = $_POST['title'];
		$file = $_POST['file'];
		$content = $_POST['content'];
		$assigned_to = $_POST['assigned_to'];
	}
}

if (isset($_GET['delete_id'])){
	$count = delete($table, $_GET['delete_id']);
	$_SESSION['message'] = "Announcement succesfully deleted!";
	$_SESSION['type'] = "success";
	header('location: '. BASE_URL . "/superadmin/announcements/index.php");
	exit();
}

if(isset($_GET['viewed_id'])){
	$form = selectOne($table, ['id' => $_GET['viewed_id']]);
	$id = $form['id'];
	$title = $form['title'];
	$content = $form['content'];
	$file = $form['file'];

	$_POST['id'] = $id;
	$_POST['empid'] = $_SESSION['empid'];

	$checker = selectAll($table1, ['empid' => $_POST['empid'], 'id' => $_POST['id']]);
	if (!$checker) {
		$pass = create($table1, $_POST);
	}
}