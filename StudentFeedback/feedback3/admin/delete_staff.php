<?php 
include("../dbcon.php");

$id=$_GET['id'];


mysql_query("DELETE FROM `staff` WHERE staff_id = '$id'");
header("location:staff.php");
?>