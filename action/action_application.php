<?php 
session_start();
include '../model/model.php';
$model  = new Model();
$application = $_POST['application'];
$address = $_POST['address'];
$reg_id = $_SESSION['code'];
// echo $complaint;
// echo $description;
// echo $reg_id;
$insert=$model->application_insert($application,$address,$reg_id);
if($insert['status'])
{
	header('Location:../applications.php');
}
else
{
	echo '<script type="text/javascript" >alert("Error.");</script>';
}
?>
