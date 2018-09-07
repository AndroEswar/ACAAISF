<?php 
include("../dbcon.php");

$id=$_GET['id'];


mysql_query("DELETE FROM `feedback` WHERE category = '$id'");
header("location:class.php");
?>