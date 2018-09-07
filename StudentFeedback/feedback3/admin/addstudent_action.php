<?php 
if(isset($_POST['save'])){
include("../dbcon.php");
$lname = $_POST['lname'];
$fname = $_POST['fname'];
$year = $_POST['year'];
$section =$_POST['section'];
$course=$_POST['course'];
$idnumber = $_POST['idnumber'];
mysql_query("insert into account (idnumber) values('$idnumber')");
mysql_query("insert into student(student_lastname,student_firstname,idnumber,student_course,student_year,student_section)
 values('$lname','$fname','$idnumber','$course','$year','$section')");
header("location:student_category.php");
}

?>