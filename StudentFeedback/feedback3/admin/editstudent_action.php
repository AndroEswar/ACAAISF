<?php 
if(isset($_POST['save'])){
include("../dbcon.php");
$lname = $_POST['lname'];
$fname = $_POST['fname'];
$year = $_POST['year'];
$section =$_POST['section'];
$course=$_POST['course'];
$idnumber = $_POST['idnumber'];
$id=$_POST['id'];
mysql_query("update student set student_lastname='$lname',student_firstname='$fname',idnumber='$idnumber',student_course='$course',student_year='$year',
student_section='$section' where student_id='$id'");
header("location:student_category.php");
}

?>