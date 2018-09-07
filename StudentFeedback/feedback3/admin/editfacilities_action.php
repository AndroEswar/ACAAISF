<?php 
if(isset($_POST['save'])){
include("../dbcon.php");
include("../session.php");
$facility = $_POST['facility'];
$id = $_POST['id'];

mysql_query("update  facilities set facilities_description='$facility' where facilities_id='$id'");
header("location:facilities.php");
}

?>