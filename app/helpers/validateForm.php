<?php 

function validateForm($form)
{
	$errors = array();

	if (empty($form['name'])){
		array_push($errors, 'Form Name is required!');
	}

	if (empty($form['type'])){
		array_push($errors, 'Form Type is required!');
	}

	$existingForm = selectOne('forms', ['name' => $form['name']]);
	if ($existingForm){
		if (isset($form['update-form']) && $existingForm['id'] != $form['id']) {
			array_push($errors, 'Form with that name already exists!');
		} 
		
		if (isset($form['add-form'])) {
			array_push($errors, 'Form with that name already exists!');
		}

	}

	return ($errors);
}

function validateUpdateForm($form)
{
	$errors = array();

	if (empty($form['name'])){
		array_push($errors, 'Form Name is required!');
	}

	if (empty($form['type'])){
		array_push($errors, 'Form Type is required!');
	}

	return ($errors);
}