<?php 
session_start();
include '../model/model.php';
$model  = new Model();
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['password'];
$check=$model->check_user($email);
if ($check)
{
	echo '<script type="text/javascript" >window.location="../index.html";alert("Sorry.This user already exists.");</script>';
}
else
{
	$insert=$model->form_insert($name,$phone,$email,$password);
	if($insert['status'])
	{
		$id = $insert['last_id'];
		$_SESSION["code"] = $id;
		header('Location:../home.php');
	}
	else
	{
		echo '<script type="text/javascript" >window.location="../index.html";alert("Error.");</script>';
	}
}
?>

