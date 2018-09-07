<?php 
if(isset($_POST['edit'])){
include('../dbcon.php');
$id = $_POST['id'];
$ids = $_POST['ids'];
$des = $_POST['desc'];
mysql_query("update evaluation_content set Description='$des' where evaluation_content_id='$ids'");

header("location:evaluate_content.php?id=$id");

}

?>