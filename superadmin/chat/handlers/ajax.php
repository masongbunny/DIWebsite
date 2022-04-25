<?php 
include("../../../app/database/db.php");
if (isset($_REQUEST['action'])) {
	switch ($_REQUEST['action']) {
		case "SendMessage":
			$_POST['empid'] = $_SESSION['empid'];
			$_POST['message'] = $_REQUEST['message'];
			$chat=create('messages', $_POST);
			echo 'success';
			break;

		case "getChat":
			$chat=SelectAll('messages');
			$item = '';
			foreach ($chat as $value) {
				$item .= $value['empid'].' says: '. $value['message'].'<hr />';
			}
			echo $item;
			break;
	}
}
?>