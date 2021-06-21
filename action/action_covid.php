<?php 
session_start();
include '../model/model.php';
$model  = new Model();
$application = $_POST['application'];
$proof = $_POST['proof'];
$proof_number = $_POST['proof_number'];
$name = $_POST['name'];
$address = $_POST['address'];
$reg_id = $_SESSION['code'];
// echo $complaint;
// echo $description;
// echo $reg_id;
$insert=$model->covid_application_insert($application,$proof,$proof_number,$name,$address,$reg_id);
if($insert['status'])
{
	echo '<script type="text/javascript" >alert("Applied Successfully.");</script>';
	header('Location:../covid.php');
}
else
{
	echo '<script type="text/javascript" >alert("Error.");</script>';
	header('Location:../covid.php');
}
?>
