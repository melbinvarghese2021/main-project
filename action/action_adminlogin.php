<?php 
session_start();
include '../model/model.php';
$model  = new Model();
$name = $_POST['name'];
$password = $_POST['password'];
$login = $model->adminlogin($name);
if($login)
{
	session_unset();
	if(strcmp($login['password'],$password)==0)
	{
		$_SESSION['admin']=$login['admin_id'];
		header('Location:../admin/index.php');
	}
	else
	{
		 echo '<script type="text/javascript" >window.location="../admin.php";alert("Wrong Credentials.Please Try Again.");</script>';
	}
}
else
{
	echo '<script type="text/javascript" >window.location="../admin.php";alert("Sorry.Login failed.Please Try Again.");</script>';
}

?>