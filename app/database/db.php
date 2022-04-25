<?php 

session_start();
require('connect.php');

function dd($value) //to be deleted.
{
	echo "<pre>", print_r($value, true), "</pre>";
	die();
}

function executeQuery($sql, $data)
{
	global $conn;
	$stmt = $conn->prepare($sql);
	$values = array_values($data);
	$types = str_repeat('s', count($values));
	$stmt->bind_param($types, ...$values);
	$stmt->execute();
	return $stmt;
}

function selectAll($table, $conditions = [])
{
	global $conn;
	$sql = "SELECT * FROM $table";
	if(empty($conditions)){
		$stmt = $conn->prepare($sql);
		$stmt->execute();
		$records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
		return $records;
	} else {
		//return only records that match the conditions
		//$sql = "SELECT * FROM $table WHERE username = 'Awa' AND admin=1";
		$i = 0;
		foreach ($conditions as $key => $value) {
			if($i == 0){
				$sql = $sql." WHERE $key=?";
			} else {
				$sql = $sql." AND $key=?";
			}
			$i++;
		}
		$stmt = executeQuery($sql, $conditions);
		$records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
		return $records;
	}	
}

function selectAllOR($table, $conditions = [])
{
	global $conn;
	$sql = "SELECT * FROM $table";
	if(empty($conditions)){
		$stmt = $conn->prepare($sql);
		$stmt->execute();
		$records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
		return $records;
	} else {
		//return only records that match the conditions
		//$sql = "SELECT * FROM $table WHERE username = 'Awa' AND admin=1";
		$i = 0;
		foreach ($conditions as $key => $value) {
			if($i == 0){
				$sql = $sql." WHERE $key=?";
			} else {
				$sql = $sql." OR $key=?";
			}
			$i++;
		}
		$stmt = executeQuery($sql, $conditions);
		$records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
		return $records;
	}	
}

function selectAllbyCreatedAt($table, $conditions = [])
{
	global $conn;
	$sql = "SELECT * FROM $table ORDER BY created_at DESC";
		$stmt = $conn->prepare($sql);
		$stmt->execute();
		$records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
		return $records;
}


function selectAllDepartmentNotODI($table, $conditions = [])
{
	global $conn;
	$sql = "SELECT * FROM $table WHERE name != 'Office of the Director for Instructions'";
		$stmt = $conn->prepare($sql);
		$stmt->execute();
		$records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
		return $records;
}

function selectAllDepartmentsAcademic($table, $conditions = [])
{
	global $conn;
	$sql = "SELECT * FROM $table WHERE type != 'Non-Academic'";
		$stmt = $conn->prepare($sql);
		$stmt->execute();
		$records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
		return $records;
}

function selectAllAcademicDepartment($table)
{
	global $conn;
	$sql = "SELECT * FROM $table WHERE name != 'Office of the Director for Instructions'";
		$stmt = $conn->prepare($sql);
		$stmt->execute();
		$records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
		return $records;
}

function selectAllGallery($table, $conditions = [])
{
	global $conn;
	$sql = "SELECT * FROM $table";
		$i = 0;
		foreach ($conditions as $key => $value) {
			if($i == 0){
				$sql = $sql." WHERE $key=?";
			} else {
				$sql = $sql." AND $key=?";
			}
			$i++;
		}
		$sql = $sql . " ORDER BY created_at DESC";
		$stmt = executeQuery($sql, $conditions);
		$records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
		return $records;	
}

function selectAllUsersNotODI($table)
{
	global $conn;
	$sql = "SELECT * FROM $table WHERE department != 'Office of the Director for Instructions' AND status != 'Disabled'";
		$stmt = $conn->prepare($sql);
		$stmt->execute();
		$records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
		return $records;	
}

function selectAllUsersByDept($table, $conditions = [])
{
	global $conn;
	$sql = "SELECT * FROM $table WHERE department =? AND status != 'Disabled'";
		$stmt = $conn->prepare($sql, $conditions);
		$stmt->execute();
		$records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
		return $records;	
}

function selectChatMsgs($table, $from, $to)
{
	global $conn;
	$sql = "SELECT * FROM $table WHERE (FromUser =$from AND ToUser =$to) OR (FromUser =$to AND ToUser =$from)";
		$stmt = $conn->prepare($sql);
		$stmt->execute();
		$records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
		return $records;	
}

function selectChats($table, $from, $to)
{
	global $conn;
	$sql = "SELECT * FROM $table WHERE FromUser =$from AND ToUser =$to";
		$stmt = $conn->prepare($sql);
		$stmt->execute();
		$records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
		return $records;	
}

function selectAllStatus($table, $dept)
{
	global $conn;
	$sql = "SELECT * FROM $table WHERE department =? AND status != 'Disabled'";
	
	$stmt = executeQuery($sql, ['department' => $dept]);
	$records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
	return $records;	
}

function selectAllSortByCreatedAt($table, $conditions = [])
{
	global $conn;
	$sql = "SELECT * FROM $table ORDER BY created_at DESC";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
	return $records;
}

function selectReqByAY($table, $conditions = [])
{
	global $conn;
	$sql = "SELECT * FROM $table";
		$i = 0;
		foreach ($conditions as $key => $value) {
			if($i == 0){
				$sql = $sql." WHERE $key=?";
			} else {
				$sql = $sql." AND $key=?";
			}
			$i++;
		}
		$sql = $sql . " ORDER BY created_at DESC";
		$stmt = executeQuery($sql, $conditions);
		$records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
		return $records;	
}

function selectReqByAYSEM($ay, $sem)
{
	global $conn;
	;
	$sql = "SELECT
	rl.req_name,
  rs.file,
  rs.date_submitted,
  u.empid,
  u.lastname,
  u.firstname,
  u.department
	FROM requirements_list as rl
	JOIN requirements_submitted as rs
  	ON rl.req_id = rs.req_id
	JOIN users as u
  ON u.empid = rs.empid WHERE rl.ay=? AND rl.sem=?";
	$stmt = executeQuery($sql, ['ay' => $ay, 'sem' => $sem]);
	$records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
	return $records;	
}

function selectAllReq()
{
	global $conn;
	;
	$sql = "SELECT
	rl.req_name,
  rs.file,
  rs.date_submitted,
  u.empid,
  u.lastname,
  u.firstname,
  u.department,
  rl.ay,
  rl.sem
	FROM requirements_list as rl
	JOIN requirements_submitted as rs
  	ON rl.req_id = rs.req_id
	JOIN users as u
  ON u.empid = rs.empid ORDER BY rl.req_id DESC";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
	return $records;	
}

function selectAllByUSers($id)
{
	global $conn;
	;
	$sql = "SELECT
	rl.req_id,
	rl.req_name,
	rl.ay,
	rl.sem,
  rs.file,
  rs.date_submitted,
  u.empid,
  u.lastname,
  u.firstname,
  u.department
	FROM requirements_list as rl
	JOIN requirements_submitted as rs
  	ON rl.req_id = rs.req_id
	JOIN users as u
  ON u.empid = rs.empid WHERE rs.empid=?";
	$stmt = executeQuery($sql, ['empid' => $id]);
	$records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
	return $records;	
}

function selectReqByReqNameAYSem($ay,$sem,$id)
{
	global $conn;
	;
	$sql = "SELECT
	rl.req_name,
  rs.file,
  rs.date_submitted,
  u.empid,
  u.lastname,
  u.firstname,
  u.department
	FROM requirements_list as rl
	JOIN requirements_submitted as rs
  	ON rl.req_id = rs.req_id
	JOIN users as u
  ON u.empid = rs.empid WHERE rl.ay=? AND rl.sem=? AND rs.req_id=?";
	$stmt = executeQuery($sql, ['ay' => $ay, 'sem' => $sem, 'req_id' => $id]);
	$records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
	return $records;	
}

function selectReqByReqNameAndDept($ay,$sem,$id,$dept)
{
	global $conn;
	;
	$sql = "SELECT
	rl.req_name,
	rs.file,
	rs.date_submitted,
	u.empid,
	u.lastname,
	u.firstname,
	u.department
	FROM requirements_list as rl
	JOIN requirements_submitted as rs
  	ON rl.req_id = rs.req_id
	JOIN users as u
    ON u.empid = rs.empid WHERE rs.req_id=? AND u.department=? AND rl.ay=? AND rl.sem=?";
	$stmt = executeQuery($sql, ['req_id' => $id, 'department' => $dept, 'ay' => $ay, 'sem' => $sem]);
	$records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
	return $records;	
}

function selectReqByDepartment($ay,$sem,$dept)
{
	global $conn;
	;
	$sql = "SELECT
	rl.req_name,
  rs.file,
  rs.date_submitted,
  u.empid,
  u.lastname,
  u.firstname,
  u.department
	FROM requirements_list as rl
	JOIN requirements_submitted as rs
  	ON rl.req_id = rs.req_id
	JOIN users as u
  ON u.empid = rs.empid WHERE u.department=? AND rl.ay=? AND rl.sem=?";
	$stmt = executeQuery($sql, ['department' => $dept, 'ay' => $ay, 'sem' => $sem]);
	$records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
	return $records;	
}

function selectOne($table, $conditions)
{
	global $conn;
	$sql = "SELECT * FROM $table";
	
	$i = 0;
	foreach ($conditions as $key => $value) {
		if($i == 0){
			$sql = $sql." WHERE $key=?";
		} else {
			$sql = $sql." AND $key=?";
		}
		$i++;
	}

	$sql = $sql . " LIMIT 1";
	$stmt = executeQuery($sql, $conditions);
	$records = $stmt->get_result()->fetch_assoc();
	return $records;	
}


function create($table, $data)
{
	global $conn;
	$sql = "INSERT INTO $table SET ";

	$i = 0;
	foreach ($data as $key => $value) {
		if($i == 0){
			$sql = $sql." $key=?";
		} else {
			$sql = $sql.", $key=?";
		}
		$i++;
	}
	
	$stmt = executeQuery($sql, $data);
	$id = $stmt->insert_id;
	return $id;
}

function update($table, $id, $data)
{
	global $conn;
	$sql = "UPDATE $table SET ";

	$i = 0;
	foreach ($data as $key => $value) {
		if($i == 0){
			$sql = $sql." $key=?";
		} else {
			$sql = $sql.", $key=?";
		}
		$i++;
	}

	$sql = $sql . " WHERE id=?";
	$data['id'] = $id;
	$stmt = executeQuery($sql, $data);
	return $stmt->affected_rows;
}

function updateUsingEmail($table, $email, $data)
{
	global $conn;
	$sql = "UPDATE $table SET ";

	$i = 0;
	foreach ($data as $key => $value) {
		if($i == 0){
			$sql = $sql." $key=?";
		} else {
			$sql = $sql.", $key=?";
		}
		$i++;
	}

	$sql = $sql . " WHERE email=?";
	$data['email'] = $email;
	$stmt = executeQuery($sql, $data);
	return $stmt->affected_rows;
}

function updateReq($table, $id, $data)
{
	global $conn;
	$sql = "UPDATE $table SET ";

	$i = 0;
	foreach ($data as $key => $value) {
		if($i == 0){
			$sql = $sql." $key=?";
		} else {
			$sql = $sql.", $key=?";
		}
		$i++;
	}

	$sql = $sql . " WHERE req_id=?";
	$data['req_id'] = $id;
	$stmt = executeQuery($sql, $data);
	return $stmt->affected_rows;
}

function updateSubmittedReq($table, $id, $empid, $data)
{
	global $conn;
	$sql = "UPDATE $table SET ";

	$i = 0;
	foreach ($data as $key => $value) {
		if($i == 0){
			$sql = $sql." $key=?";
		} else {
			$sql = $sql.", $key=?";
		}
		$i++;
	}

	$sql = $sql . " WHERE req_id=? AND empid=?";
	$data['req_id'] = $id;
	$data['empid'] = $empid;
	$stmt = executeQuery($sql, $data);
	return $stmt->affected_rows;
}

function updateUser($table, $id, $data)
{
	global $conn;
	$sql = "UPDATE $table SET ";

	$i = 0;
	foreach ($data as $key => $value) {
		if($i == 0){
			$sql = $sql." $key=?";
		} else {
			$sql = $sql.", $key=?";
		}
		$i++;
	}

	$sql = $sql . " WHERE empid=?";
	$data['empid'] = $id;
	$stmt = executeQuery($sql, $data);
	return $stmt->affected_rows;
}

function delete($table, $id)
{
	global $conn;
	$sql = "DELETE FROM $table WHERE id=?";
	$stmt = executeQuery($sql, ['id'=> $id]);
	return $stmt->affected_rows;
}

 function truncate(){
 	global $conn;
 	$sql = "truncate dotm";
 	$stmt = $conn->prepare($sql);
	$stmt->execute();
 } 

function deleteUser($table, $id)
{
	global $conn;
	$sql = "DELETE FROM $table WHERE empid=?";
	$stmt = executeQuery($sql, ['empid'=> $id]);
	return $stmt->affected_rows;
}

function deleteReq($table, $id)
{
	global $conn;
	$sql = "DELETE FROM $table WHERE req_id=?";
	$stmt = executeQuery($sql, ['req_id'=> $id]);
	return $stmt->affected_rows;
}

function getPosts()
{
	global $conn;
	$sql = "SELECT p.*, u.firstname FROM posts AS p JOIN users AS u ON p.user_id=u.empid ORDER BY p.id DESC";

	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
	return $records;
}

function getPostsLimit($data1,$data2)
{
	global $conn;
	$sql = "SELECT p.*, u.firstname FROM posts AS p JOIN users AS u ON p.user_id=u.empid ORDER BY p.id DESC LIMIT $data1,$data2";

	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
	return $records;
}


function searchPosts($term)
{
	$match = '%' . $term . '%';
	global $conn;
	$sql = "SELECT 
			*, u.firstname 
			FROM posts AS p 
			JOIN users AS u 
			ON p.user_id=u.empid 
			WHERE p.title LIKE ? OR p.body LIKE ?";

	$stmt = executeQuery($sql, ['title' => $match, 'body' => $match]);
	$records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
	return $records;
}

function searchAssignedAnnouncements($data1, $data2, $data3)
{
	global $conn;
	$sql = "SELECT 
			* 
			FROM announcements 
			WHERE assigned_to IN (?, ?, ?) ORDER BY created_at DESC";

	$stmt = executeQuery($sql, [$data1, $data2, $data3]);
	$records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
	return $records;
}

function getPostsByTopicId($topic_id)
{
	global $conn;
	$sql = "SELECT p.*, u.fullname FROM posts AS p JOIN users AS u ON p.user_id=u.empid WHERE p.published=? AND topic_id=? ORDER BY p.id DESC";

	$stmt = executeQuery($sql, ['published' => 1, 'topic_id' => $topic_id]);
	$records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
	return $records;
}

function getFacultyForms()
{
	global $conn;
	$sql = "SELECT * FROM forms WHERE type = 'Faculty'";
		$stmt = $conn->prepare($sql);
		$stmt->execute();
		$records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
		return $records;
}

function getOJTForms()
{
	global $conn;
	$sql = "SELECT * FROM forms WHERE type = 'OJT'";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
	return $records;
}

function getResearchForms()
{
	global $conn;
	$sql = "SELECT * FROM forms WHERE type = 'Research'";
		$stmt = $conn->prepare($sql);
		$stmt->execute();
		$records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
		return $records;
}

function searchForms($term)
{
	$match = '%' . $term . '%';
	global $conn;
	$sql = "SELECT * FROM forms WHERE name LIKE ? OR file LIKE ? OR type LIKE ?";

	$stmt = executeQuery($sql, ['name' => $match, 'file' => $match, 'type' => $match]);
	$records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
	return $records;
}

function searchUsers($term)
{
	$match = '%' . $term . '%';
	global $conn;
	$sql = "SELECT * FROM users WHERE empid LIKE ? OR lastname LIKE ? OR firstname LIKE ? OR email LIKE ? OR position LIKE ? OR department LIKE ? OR status LIKE ?";

	$stmt = executeQuery($sql, ['empid' => $match, 'lastname' => $match, 'firstname' => $match, 'email' => $match, 'position' => $match, 'department' => $match, 'status' => $match]);
	$records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
	return $records;
}

function searchFaqs($term)
{
	$match = '%' . $term . '%';
	global $conn;
	$sql = "SELECT * FROM faq WHERE question LIKE ? OR answer LIKE ?";

	$stmt = executeQuery($sql, ['question' => $match, 'answer' => $match]);
	$records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
	return $records;
}

function getUsersByCreatedAt()
{
	global $conn;
	$sql = "SELECT * FROM users ORDER BY created_at DESC";

	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
	return $records;
}

 function truncateDetails(){
 	global $conn;
 	$sql = "truncate current_academic_details";
 	$stmt = $conn->prepare($sql);
	$stmt->execute();
 } 

 function searchReqs($term)
{
	$match = '%' . $term . '%';
	global $conn;
	$sql = "SELECT * FROM requirements_list WHERE req_id LIKE ? OR req_name LIKE ? OR ay LIKE ? OR sem LIKE ?";

	$stmt = executeQuery($sql, ['req_id' => $match, 'req_name' => $match, 'ay' => $match, 'sem' => $match]);
	$records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
	return $records;
}

function searchAnnouncements($term)
{
	$match = '%' . $term . '%';
	global $conn;
	$sql = "SELECT * FROM announcements WHERE title LIKE ?";

	$stmt = executeQuery($sql, ['title' => $match]);
	$records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
	return $records;
}


function searchAnnounce($term)
{
	$match = '%' . $term . '%';
	global $conn;
	$sql = "SELECT * FROM announcements WHERE id LIKE ? OR title LIKE ? OR file LIKE ? OR assigned_to LIKE ?";

	$stmt = executeQuery($sql, ['id' => $match, 'title' => $match, 'file' => $match, 'assigned_to' => $match]);
	$records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
	return $records;
}

function searchDepartment($term)
{
	$match = '%' . $term . '%';
	global $conn;
	$sql = "SELECT * FROM departments WHERE name LIKE ? OR type LIKE ?";

	$stmt = executeQuery($sql, ['name' => $match, 'type' => $match]);
	$records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
	return $records;
}

function searchTracker($term,$ay,$sem)
{
	$match = '%' . $term . '%';
	global $conn;
	$sql = "SELECT 
	u.empid,
	u.firstname,
	u.lastname,
	u.department, 
	rl.req_name,
	rs.file,
	rs.date_submitted
	FROM requirements_list as rl
	JOIN requirements_submitted as rs
  	ON rl.req_id = rs.req_id
	JOIN users as u
  ON u.empid = rs.empid WHERE rl.ay=? AND rl.sem=? AND u.empid LIKE ? OR u.firstname LIKE ? OR u.lastname LIKE ? OR u.department LIKE ? OR rl.req_name LIKE ?";
	$stmt = executeQuery($sql, ['ay' => $ay, 'sem' => $sem, 'empid' => $match, 'firstname' => $match, 'lastname' => $match, 'department' => $match, 'req_name' => $match]);
	$records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
	return $records;	
}

function searchTrackers($term)
{
	$match = '%' . $term . '%';
	global $conn;
	$sql = "SELECT 
	u.empid,
	u.firstname,
	u.lastname,
	u.department, 
	rl.req_name,
	rs.file,
	rs.date_submitted,
	rl.ay,
	rl.sem
	FROM requirements_list as rl
	JOIN requirements_submitted as rs
  	ON rl.req_id = rs.req_id
	JOIN users as u
  ON u.empid = rs.empid WHERE u.empid LIKE ? OR u.firstname LIKE ? OR u.lastname LIKE ? OR u.department LIKE ? OR rl.req_name LIKE ? OR rl.ay LIKE ? OR rl.sem LIKE ? ORDER BY rl.req_id DESC";
	$stmt = executeQuery($sql, ['empid' => $match, 'firstname' => $match, 'lastname' => $match, 'department' => $match, 'req_name' => $match, 'ay' => $match, 'sem' => $match]);
	$records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
	return $records;	
}

function searchTrackerDept($term,$ay,$sem,$dept)
{
	$match = '%' . $term . '%';
	global $conn;
	$sql = "SELECT 
	u.empid,
	u.firstname,
	u.lastname,
	u.department, 
	rl.req_name,
	rs.file,
	rs.date_submitted
	FROM requirements_list as rl
	JOIN requirements_submitted as rs
  	ON rl.req_id = rs.req_id
	JOIN users as u
    ON u.empid = rs.empid WHERE u.department=? AND rl.ay=? AND rl.sem=? AND u.empid LIKE ? OR u.firstname LIKE ? OR u.lastname LIKE ? OR rl.req_name LIKE ?";
	$stmt = executeQuery($sql, ['department' => $dept, 'ay' => $ay, 'sem' => $sem, 'empid' => $match, 'firstname' => $match, 'lastname' => $match, 'req_name' => $match]);
	$records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
	return $records;	
}

function searchFAQ($term)
{
	global $conn;
	$match = '%' . $term . '%';
	$sql = "SELECT 
			* 
			FROM faq 
			WHERE question LIKE ? OR answer LIKE ?";

	$stmt = executeQuery($sql, ['question' => $match, 'answer' => $match]);
	$records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
	return $records;
}
