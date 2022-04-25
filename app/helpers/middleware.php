<?php 

function usersOnly($redirect = '/index.php')
{
	if(empty($_SESSION['empid'])){
		$_SESSION['message'] = 'You need to login to access this page!';
		$_SESSION['type'] = 'error';
		header('location: ' . BASE_URL . $redirect);
		exit(0);
	}
}

function adminOnly($redirect = '/index.php')
{
	if(empty($_SESSION['empid']) || $_SESSION['position'] !== 'Admin'){
		$_SESSION['message'] = 'You are not authorized to access this page!';
		$_SESSION['type'] = 'error';
		header('location: ' . BASE_URL . $redirect);
		exit(0);
	}
}

function superadminOnly($redirect = '/index.php')
{
	if(empty($_SESSION['empid']) || $_SESSION['position'] == 'Chairperson' || $_SESSION['position'] == 'Faculty'){
		$_SESSION['message'] = 'You are not authorized to access this page!';
		$_SESSION['type'] = 'error';
		header('location: ' . BASE_URL . $redirect);
		exit(0);
	}
}

function chairpersonOnly($redirect = '/index.php')
{
	if(empty($_SESSION['empid']) || $_SESSION['position'] !== 'Chairperson'){
		$_SESSION['message'] = 'You are not authorized to access this page!';
		$_SESSION['type'] = 'error';
		header('location: ' . BASE_URL . $redirect);
		exit(0);
	}
}

function facultyOnly($redirect = '/index.php')
{
	if(empty($_SESSION['empid']) || $_SESSION['position'] !== 'Faculty'){
		$_SESSION['message'] = 'You are not authorized to access this page!';
		$_SESSION['type'] = 'error';
		header('location: ' . BASE_URL . $redirect);
		exit(0);
	}
}

function guestOnly($redirect = '/index.php')
{
	if(isset($_SESSION['empid'])){
		header('location: ' . BASE_URL . $redirect);
		exit(0);
	}
}
