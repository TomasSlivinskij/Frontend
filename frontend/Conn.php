<?php
session_start();

$FirstName = "";
$LastName = "";
$email = "";
$country = "";
$adress = "";
$errors = array();

$db = new mysqli("localhost", "root", "", "frontend");
if($db->connect_error){
	die("connection failed".$db->connect_error);
}

if(isset($_POST['form'])){
	$FirstName = mysqli_real_escape_string($db, $_POST['FirstName']);
	$LastName = mysqli_real_escape_string($db, $_POST['LastName']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$country = mysqli_real_escape_string($db, $_POST['country']);
	$adress = mysqli_real_escape_string($db, $_POST['adress']);
}

if (empty($FirstName)){ array_push($errors, "First name is required"); }
if (empty($LastName)){ array_push($errors, "Last name is required"); }
if (empty($email)){ array_push($errors, "Email is required"); }
if (empty($country)){ array_push($errors, "Country is required"); }
if (empty($adress)){ array_push($errors, "Adress is required"); }
?>