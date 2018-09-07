<?php 
include("../dbcon.php");

$id=$_GET['id'];


mysql_query("DELETE FROM `facilities` WHERE facilities_id = '$id'");
header("location:facilities.php");
?>