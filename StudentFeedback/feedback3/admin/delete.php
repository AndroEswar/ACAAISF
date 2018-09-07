
<?php include('../header.php');?>
<?php include('../session.php');?>
<?php include('../dbcon.php');?>
<?php 	
$id = $_GET['id'];
echo $id;
mysql_query("DELETE FROM `evaluationform`  where evaluate_id = '$id'");
header("location:evaluation_form.php");

?>