<?php 
if(isset($_POST['save'])){
include("../dbcon.php");
include("../session.php");
$lname = $_POST['lname'];
$fname = $_POST['fname'];

$username = $_POST['username'];
$password = $_POST['password'];

mysql_query("update  admin set lastname='$lname',firstname='$fname',username='$username',password='$password' where admin_id='$session_id'");
header("location:index.php");
}

?>