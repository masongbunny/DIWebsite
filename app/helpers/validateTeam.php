<?php 

function validateTeam($team)
{
	$errors = array();

	if (empty($team['name'])){
		array_push($errors, 'Name is required');
	}
	if (empty($team['position'])){
		array_push($errors, 'position is required');
	}
	return ($errors);
}