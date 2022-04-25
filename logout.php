<?php 
include("path.php");
session_start();

unset($_SESSION['empid']);
unset($_SESSION['firstname']);
unset($_SESSION['lastname']);
unset($_SESSION['name']);
unset($_SESSION['position']);
unset($_SESSION['rank']);
unset($_SESSION['department']);
unset($_SESSION['status']);
unset($_SESSION['message']);
unset($_SESSION['type']);

session_destroy();

header('location: ' . BASE_URL . '/index.php');