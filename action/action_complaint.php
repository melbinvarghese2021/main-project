<?php 
session_start();
include '../model/model.php';
$model  = new Model();
$complaint = $_POST['complaint'];
$description = $_POST['description'];
$reg_id = $_SESSION['code'];
// echo $complaint;
// echo $description;
// echo $reg_id;
$insert=$model->complaint_insert($complaint,$description,$reg_id);
if($insert['status'])
{
	header('Location:../complaints.php');
}
else
{
	echo '<script type="text/javascript" >alert("Error.");</script>';
	header('Location:../complaints.php');
}
?>
