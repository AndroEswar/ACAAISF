<?php 
include("../dbcon.php");

$id=$_GET['id'];


mysql_query("DELETE FROM `teacher` WHERE teacher_id = '$id'");
header("location:teacher_category.php");
?>