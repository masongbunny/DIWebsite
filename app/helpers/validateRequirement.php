<?php
function validateRequirement($user)
{
	$errors = array();

	$existingReq = selectOne('requirements_list', ['req_name' => $_POST['req_name']]);
	if ($existingReq){
		if (isset($_POST['update-post']) && $existingReq['req_id'] != $_POST['req_id']) {
			array_push($errors, 'Post with that title already exists!');
		} 
		
		if (isset($_POST['add-requirement'])) {
			array_push($errors, 'Requirement with that name already exists!');
		}
	}
	
	return ($errors);
}