<?php 
if(isset($_POST['save'])){
include("../dbcon.php");
include("../session.php");
$sc = $_POST['subject_code'];
$sd = $_POST['subject_description'];


mysql_query("insert into subject(subject_code,subject_description) values('$sc','$sd')");
header("location:subject.php");
}

?>