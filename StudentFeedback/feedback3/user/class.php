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
<div class="col-xs-6 col-centered" style="width:40%;margin:0 auto">
<div class="table-responsive">
	<form method="post">
		<table>
			<tr>
			
			<td>
			<label>Course</label>
			<select name="course" class="form-control" required>
				<option></option>
				<option>BSINFO</option>
				<option>BSIT</option>
				<option>BSIS</option>
				<option>BTTE</option>
				
			</select>
			
			</td>
			<td>
			<label>Section</label>
			<select name="section" class="form-control" required>
				<option></option>
				<option>A</option>
				<option>B</option>
				<option>C</option>
				<option>D</option>
				<option>E</option>
				<option>F</option>
				<option>G</option>
				
			</select>
			</td>
			<td>
			<label>YEAR</label>
			<select name="year" class="form-control" required>
				<option></option>
				<option>1st</option>
				<option>2nd</option>
				<option>3rd</option>
				<option>4th</option>
				
			</select>
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
$cat = $_POST['course']."".$_POST['year']."-".$_POST['section'];
$comment = $_POST['comments'];

 mysql_query("INSERT INTO `feedback`(`comments`, `category`,`account_id`) 
 VALUES ('$comment','$cat','$session_id')");
?>
<script>
  alertify.alert("Successfully Submitted");	 
	</script>
<?php 

}

?>