<?php 
include('dbcon.php');
if(isset($_POST['sub'])){
$category=$_POST['category'];

if($category=='teacherandstaff'){
		$lname=$_POST['lastname'];
		$fname=$_POST['firstname'];
		$idnumber =$_POST['idnumber'];
		$password =$_POST['password'];

		$sql = mysql_query("select * from account where idnumber='$idnumber'");
		$row = mysql_fetch_array($sql);
		$num = mysql_num_rows($sql);
		$account_type = $row['account_type'];
		$id = $row['account_id'];
		if($num<=0){
		?>
		<script>
		  alertify.alert("Your Id number is not found, You can't register in this system");
		</script>

		<?php }else{
		$sqls = mysql_query("select * from account where idnumber='$idnumber' AND status='unregistered'");
		if(mysql_num_rows($sqls)<=0){?>
		<script>
		  alertify.alert("You are already registered");
		</script>
		<?php }else{
		if($account_type=='teacher'){
		mysql_query("update account set status = 'registered', password='$password' where account_id='$id' ");
		mysql_query("INSERT INTO `teacher`(`tea_firstname`, `tea_lastname`, `account_id`) VALUES ('$fname','$lname','$id')");
		?>
		<script>
		  alertify.alert("Successfully Created");
		</script>
		<?php }else if($account_type=='staff'){
		mysql_query("update account set status = 'registered', password='$password' where account_id='$id' ");
		mysql_query("INSERT INTO `staff`(`sta_firstname`, `sta_lastname`, `account_id`) VALUES ('$fname','$lname','$id')");
		?>
		<script>
		  alertify.alert("Successfully Created");
		</script>
		<?php 
		}
		}
		}
}

}
if(isset($_POST['stu'])){

$lname=$_POST['lastname'];
$fname=$_POST['firstname'];
$idnumber =$_POST['idnumber'];
$password =$_POST['password'];
$sec =$_POST['section'];
$course =$_POST['course'];
$year =$_POST['year'];


$sql = mysql_query("select * from account where idnumber='$idnumber'");
$row = mysql_fetch_array($sql);
$num = mysql_num_rows($sql);
$account_type = $row['account_type'];
$id = $row['account_id'];
if($num<=0){
?>
<script>
  alertify.alert("Your Id number is not found, You can't register in this system");
</script>

<?php }else{
$sqls = mysql_query("select * from account where idnumber='$idnumber' AND status='unregistered'");
if(mysql_num_rows($sqls)<=0){?>
<script>
  alertify.alert("You are already registered");
</script>
<?php }else{
if($account_type=='student'){
mysql_query("update account set status = 'registered', password='$password' where account_id='$id' ");
mysql_query("INSERT INTO `student`(`stu_firstname`, `stu_lastname`, `stu_course`, `stu_section`, `stu_year`,account_id)
 VALUES ('$fname','$lname','$course','$sec','$year','$id')");
?>
<script>
  alertify.alert("Successfully Created");
</script>
<?php }
}
}


}
?>