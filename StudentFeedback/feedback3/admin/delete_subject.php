<?php 
include("../dbcon.php");

$id=$_GET['id'];


mysql_query("DELETE FROM `subject` WHERE subject_id = '$id'");
header("location:subject.php");
?>