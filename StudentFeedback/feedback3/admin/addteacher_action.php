<?php 
if(isset($_POST['save'])){
include("../dbcon.php");
$lname = $_POST['lname'];
$fname = $_POST['fname'];

$idnumber = $_POST['idnumber'];
mysql_query("insert into account (idnumber) values('$idnumber')");
mysql_query("insert into teacher(teacher_lastname,teacher_firstname,idnumber) values('$lname','$fname','$idnumber')");
header("location:teacher_category.php");
}

?>