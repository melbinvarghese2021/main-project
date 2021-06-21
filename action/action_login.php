<?php 
session_start();
include '../model/model.php';
$model  = new Model();
$email = $_POST['email'];
$password = $_POST['password'];
$login = $model->login($email);
if($login)
{
	session_unset();
	if(strcmp($login['password'],$password)==0)
	{
		$_SESSION['code']=$login['reg_id'];
		header('Location:../home.php');
	}
	else
	{
		echo '<script type="text/javascript" >window.location="../index.html";alert("Wrong Credentials.Please Try Again.");</script>';
	}
}
else
{
	echo '<script type="text/javascript" >window.location="../index.html";alert("Sorry.Login failed.Please Try Again.");</script>';
}

?>