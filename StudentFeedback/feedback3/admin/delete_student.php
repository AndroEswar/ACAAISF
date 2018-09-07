<?php 
include("../dbcon.php");

$id=$_GET['id'];


mysql_query("DELETE FROM `student` WHERE student_id = '$id'");
header("location:student_category.php");
?>