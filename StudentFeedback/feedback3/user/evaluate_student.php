<?php include('head.php');?>
<style>

.row-centered {
    text-align:center;
}
.col-centered {
    display:inline-block;
    float:none;
    /* reset the text-align */
    text-align:left;
    /* inline-block space fix */
    margin-right:-4px;
}
</style>
<?php 
$id = $_GET['id'];
$sql = mysql_query("select * from student where student_id='$id' ");?>
		<?php $row = mysql_fetch_array($sql);
			 ?>
		
 <div class="row row-centered">
<div class="col-xs-6 col-centered" style="width:40%;margin:0 auto">
<div class="table-responsive">
	<form method="post">
		<table>
			<tr>
			<td>
			<label>Student name:</label>
			<p><?php echo $row['student_firstname']." ".$row['student_lastname']?></p>
			<input type="hidden" value="<?php $row['student_id']; ?>" name="staff">
			</td>
			
			</tr>
		<tr>
		<td>
			
		</td>
		
		</tr>
		</table>
		<label>Comment Box:</label>
		<textarea class="form-control" name="comments" style="height:400px;"></textarea>
		<br/>
		<input type="submit" name="saves" class="btn btn-primary">
	</form>
	
  </div>
   </div>
</div>
<?php 
if(isset($_POST['saves'])){

include('../dbcon.php');
$comment = $_POST['comments'];
$select = mysql_query("select * from student where student_id='$id'");
$row = mysql_fetch_array($select);
$idnum = $row['idnumber'];

 mysql_query("INSERT INTO `feedback`(`comments`, `category`, `idnumber`, `account_id`) 
 VALUES ('$comment','student','$idnum','$session_id')");?>
 <script>
  alertify.alert("Successfully save");
 </script>
 
 <?php 
 }
?>


