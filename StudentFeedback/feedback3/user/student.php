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
 <div class="row row-centered">
<div class="col-xs-6 col-centered" style="width:50%;margin:0 auto">
<div class="table-responsive">
	<table id="example" class="table table-striped table-bordered" align="center">
	<thead>
		<tr>
			<th>Student Name</th>
			<th>Action</th>
		</tr>
	</thead>
	
	<tbody>
	<?php $sql = mysql_query("select * from student");?>
		<?php while($row = mysql_fetch_array($sql)){
			$id=$row['student_id'];?>
		<tr>
			<td><?php echo $row['student_firstname']." ".$row['student_lastname']?></td>
			<td><a href="evaluate_student.php?id=<?php echo $id?>" class="btn btn-primary"><span class="glyphicon glyphicon-th-list">&nbsp;</span>Evaluate</a></td>
		</tr>
		<?php } ?>
	
	</tbody>
	
  </div>
   </div>
</div>
<?php 
if(isset($_POST['saves'])){

include('../dbcon.php');

$comment = $_POST['comments'];
$sqls = mysql_query("select * from feedback where category='$fac'  AND  account_id='$session_id'");
if(mysql_num_rows($sqls)>0){
?>
<script>
  alertify.alert("You had already comment on this facilities");
		 
	</script>
<?php
}else{
 mysql_query("INSERT INTO `feedback`(`comments`, `category`,`account_id`) 
 VALUES ('$comment','$fac','$session_id')");
?>
<script>
  alertify.alert("Successfully Submitted");	 
	</script>
<?php 
}
}

?>