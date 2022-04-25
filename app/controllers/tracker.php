<?php 

include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/middleware.php");

$errors = array();
$empid='';
$req_id = '';
$file = '';

$table = 'requirements_submitted';

$currentAY = selectAll('current_academic_details');
$current_ay = $currentAY[0]['current_academic_year'];
$current_sem = $currentAY[0]['current_semester'];

$sorts = selectAll('requirements_list');
$depts = selectAllDepartmentsAcademic('departments');
$req_name='';
$documents = selectAllReq();


if (isset($_POST['go'])){
    $get=selectOne('requirements_list', ['req_id' => $_POST['id']]);
    $req_name=$get['req_name'];
	$requirements = selectReqByReqNameAYSem($current_ay, $current_sem, $_POST['id']);
	$users = selectAllUsersNotODI('users');
    $user_count = count($users);
    if($user_count==0){
        $sub=0;
        $submitted_count = count($requirements);
        $gen_status = 0;
    } else{
        $list = selectAll('requirements_list', ['req_id' =>$_POST['id']]);
        $list_count = count($list);
        $submitted_count = count($requirements);
        $total_submission = $list_count*$user_count;
        $sub=$total_submission;
        $gen_status1 = ($submitted_count/$total_submission)*100;
        $gen_status = round($gen_status1, 2);
    }

    $reqlist = selectAll('requirements_list', ['req_id' =>$_POST['id']]);
    $userlist = selectAllUsersNotODI('users');

} else{
	$requirements = selectReqByAYSEM($current_ay, $current_sem);
    $users = selectAllUsersNotODI('users');
    $user_count = count($users);
    if($user_count==0){
        $sub=0;
        $submitted_count = count($requirements);
        $gen_status = 0;
    } else{
        $list = selectAll('requirements_list');
        $list_count = count($list);
        $submitted_count = count($requirements);
        $total_submission = $list_count*$user_count;
        $sub=$total_submission;
        if ($list_count == 0) {
            $gen_status1 = 0;
        }
        else {
            $gen_status1 = ($submitted_count/$total_submission)*100;
        }
        $gen_status = round($gen_status1, 2);
    }
    $reqlist = selectAll('requirements_list', ['ay' => $current_ay, 'sem' => $current_sem]);
    $userlist = selectAllUsersNotODI('users');
}

if(isset($_POST['search-term'])){
    $requirements = searchTracker($_POST['search-term'], $current_ay, $current_sem);
}

if(isset($_POST['search-terms'])){
    $documents = searchTrackers($_POST['search-terms']);
}

if(isset($_POST['manual-submit-requirement'])){
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
    $check = selectAll('users', ['empid' => $_POST['empid']]);
    if (count($check) === 0) {
        array_push($errors, "Employee ID does not exist on record!");
    }

    $check_submit = selectAll('requirements_submitted', ['empid' => $_POST['empid'], 'req_id' => $_POST['req_id']]);
    if ($check_submit) {
        array_push($errors, "Employee with that ID already submitted the requirement from their account!");
    }
    
    if(count($errors) === 0){
        unset($_POST['manual-submit-requirement']);
        $req = create($table, $_POST);
        $_SESSION['message'] = "Requirement successfully submitted!";
        $_SESSION['type'] = "success";
        header('location: '. BASE_URL . "/superadmin/repository/index.php");
        exit();
        
    } else {
        $req_id = $_POST['req_id'];
        $empid = $_POST['empid'];
        $file = $_POST['file'];
    }
}


