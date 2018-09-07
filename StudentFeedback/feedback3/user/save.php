<?php
if(isset($_POST['saved'])){
include("../dbcon.php");

echo $id = $_POST['id'];
$subject = $_POST['subject'];
$sy = $_POST['school_year'];
$teacher = $_POST['teacher'];
$semester = $_POST['semester'];
$ratings = $_POST['ratings'];
$comment =$_POST['comment'];
$select = mysql_query("select * from teacher where teacher_id='$teacher'");
$row = mysql_fetch_array($select);
$idnum = $row['idnumber'];
for($i = 0;$i<count($id);$i++){	
$id_x = $id[$i];
$rate = $ratings[$i];
$sql = mysql_query("select * from teacher_evaluation_result where evaluation_content_id='$id_x' AND teacher_id='$teacher' AND school_year='$sy' AND subject_id='$subject'
AND semester ='$semester' AND account_id='$session_id'");
if(mysql_num_rows($sql)>0){?>
<script>
		  alertify.alert("Your have already evaluated this teacher");
		 
	</script>
		
<?php  }else{
mysql_query("INSERT INTO `teacher_evaluation_result`(`evaluation_content_id`, `teacher_id`, `ratings`, `school_year`, `subject_id`, `semester`,account_id)
 VALUES ('$id_x','$teacher ','$rate','$sy','$subject','$semester','$session_id')");
 
 ?>
 
<?php } }


mysql_query("INSERT INTO `feedback`(`comments`, `category`, `idnumber`, `account_id`) 
VALUES ('$comment','teacher','$idnum','$session_id')");
?>


<?php 
 ?>
<script>
		 
		  window.location = "teacher_category.php";
	</script>
<?php }
 ?>
