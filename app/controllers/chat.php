<?php 

include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/middleware.php");

$chats= selectAll('chat');

//dd($chats);
$table = 'chat';
$table1 = 'users';
$id = '';
$FromUser = '';
$ToUser = '';
$message = '';
$msgFrom=array();

$users = selectAll('users');

$msgFrom = selectAll('chat', ['ToUser' => $_SESSION['empid']]);
$temp = array_unique(array_column($msgFrom, 'FromUser'));
$unique_arr = array_intersect_key($msgFrom, $temp);
//dd($msgfrom);
//$chats = selectAllbyToUser($table, ['ToUser' => $_SESSION['empid']]);

if (isset($_GET['from_id'])){
	$msgs = selectChatMsgs($table,$_GET['from_id'],$_SESSION['empid']);
	$ToUser=$_GET['from_id'];
	$newmsgs = selectChats($table,$_GET['from_id'],$_SESSION['empid']);
	foreach ($newmsgs as $key => $value) {
		$updtstat = update('chat', $value['id'], ['viewed' => '1']);
	}
}

if (isset($_POST['new-message'])){
		$_POST['FromUser'] = $_SESSION['empid'];
		unset($_POST['new-message']);
		$_POST['viewed'] = 0;
		$req = create($table, $_POST);
		if ($_SESSION['position'] == "Super Admin" || $_SESSION['position'] == "Admin") {
			header('location: '. BASE_URL . "/superadmin/chat/index.php?from_id=".$_POST['ToUser']);
		} elseif ($_SESSION['position'] == "Faculty") {
			header('location: '. BASE_URL . "/faculty/chat/index.php?from_id=".$_POST['ToUser']);
		} elseif ($_SESSION['position'] == "Chairperson") {
			header('location: '. BASE_URL . "/chairperson/chat/index.php?from_id=".$_POST['ToUser']);
		} 
		exit();
}