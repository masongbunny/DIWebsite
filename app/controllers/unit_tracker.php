<?php 

include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/middleware.php");

$table = 'requirements_submitted';
$dept_name = '';
$id = '';
$req_name='';

$currentAY = selectAll('current_academic_details');
$current_ay = $currentAY[0]['current_academic_year'];
$current_sem = $currentAY[0]['current_semester'];

$sorts = selectAll('requirements_list');
$depts = selectAllDepartmentsAcademic('departments');

if (isset($_GET['unit_id'])) {
    $tmp = selectOne('departments', ['id' => $_GET['unit_id']]);
    $tmp1 = $tmp['name'];
    $dept_name = $tmp1;
    $requirements = selectReqByDepartment($current_ay, $current_sem, $dept_name);
    $users = selectAllStatus('users', $dept_name);
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
        $gen_status1 = ($submitted_count/$total_submission)*100;
        $gen_status = round($gen_status1, 2);
    }
    $reqlist = selectAll('requirements_list', ['ay' => $current_ay, 'sem' => $current_sem]);
    $userlist = selectAllStatus('users', $dept_name);
}

if (isset($_POST['go'])){
    $dept_name=$_POST['dept_name'];
    $requirements = selectReqByReqNameAndDept($current_ay, $current_sem, $_POST['id'], $_POST['dept_name']);
    $users = selectAllStatus('users', $_POST['dept_name']);
    $user_count = count($users);
    $get=selectOne('requirements_list', ['req_id' => $_POST['id']]);
    $req_name=$get['req_name'];
    if($user_count==0){
        $sub=0;
        $submitted_count = count($requirements);
        $gen_status = 0;
    } else{
        $list = selectAll('requirements_list', ['req_id' => $_POST['id']]);
        $list_count = count($list);
        $submitted_count = count($requirements);
        $total_submission = $list_count*$user_count;
        $sub=$total_submission;
        $gen_status1 = ($submitted_count/$total_submission)*100;
        $gen_status = round($gen_status1, 2);
    }

    $reqlist = selectAll('requirements_list',['req_id' => $_POST['id']]);
   $userlist = selectAllStatus('users', $_POST['dept_name']);

} else{
       $requirements = selectReqByDepartment($current_ay, $current_sem, $dept_name);
    $users = selectAllStatus('users', $dept_name);
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
        $gen_status1 = ($submitted_count/$total_submission)*100;
        $gen_status = round($gen_status1, 2);
    }
    $reqlist = selectAll('requirements_list', ['ay' => $current_ay, 'sem' => $current_sem]);
    $userlist = selectAllStatus('users', $dept_name);
}

if(isset($_POST['search-term'])){
    $requirements = searchTrackerDept($_POST['search-term'], $current_ay, $current_sem, $_POST['dept_name']);
}