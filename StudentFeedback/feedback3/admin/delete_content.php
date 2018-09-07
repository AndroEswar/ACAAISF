
<?php include('../header.php');?>
<?php include('../session.php');?>
<?php include('../dbcon.php');?>
<?php 	
$id = $_GET['id'];
$select =mysql_query("select * from `evaluation_content`  where evaluation_content_id = '$id'");
$row = mysql_fetch_array($select);
$get = $row['evaluationheader_id'];
mysql_query("DELETE FROM `evaluation_content`  where evaluation_content_id = '$id'");
header("location:evaluate_content.php?id=$get");

?>