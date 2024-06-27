<?php 
include "config.php";

$id = $_GET['id'];

$query = "DELETE FROM patient_1 WHERE id='".$id."'";
$res=mysqli_query($con,$query);
if($res)
	header('location:index_prescription.php');

?>