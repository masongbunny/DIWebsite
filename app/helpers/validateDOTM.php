<?php 

function validateDOTM($entry)
{
	$errors = array();

	if (empty($entry['caption'])){
		array_push($errors, 'Caption is required');
	}
	return ($errors);
}