<?php 
if(isset($_POST['save'])){
include("../dbcon.php");
include("../session.php");
$sc = $_POST['subject_code'];
$sd = $_POST['subject_description'];
$id = $_POST['id'];

mysql_query("update  subject set subject_description='$sd',subject_code='$sc' where subject_id='$id'");
header("location:subject.php");
}

?>