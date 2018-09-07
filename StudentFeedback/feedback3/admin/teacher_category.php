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
<div class="col-xs-6 col-centered" style="width:70%;margin:0 auto">

<div class="table-responsive">
<a href="#" data-toggle="modal" data-target="#add" class="btn btn-primary"><span class="glyphicon glyphicon-user"></span> Add teacher</a>
<a href="#" data-toggle="modal" data-target="#importteacher" class="btn btn-primary"><span class="glyphicon glyphicon-import"></span> Import Teacher</a>

<br/>
<?php include("addteacher.php");?>
<?php include("modal_import_teacher.php");?>

	<br/>
	<table id="example" class="table table-striped table-bordered" align="center">
	<thead>
		<tr>
			<th>Teacher Name</th>
			
			<th>Semester</th>
			<th>Year</th>
			<th>Action</th>
		</tr>
	</thead>
		
	<tbody>
	<?php $sql = mysql_query("select * from teacher")?>
		<?php while($row = mysql_fetch_array($sql)){
			$id=$row['teacher_id'];?>
		<tr>
			<td><?php echo $row['teacher_firstname']." ".$row['teacher_lastname']?></td>
			<form action="evaluation_view_teacher.php" method="post">
				
			<td>
					<select name="semester" class="form-control" required>
					<option></option>
					<option>1st</option>
					<option>2nd</option>
				</select>
				
				
			</td>
			
		
				<input type="hidden" name="id" value="<?php echo $id;?>">
		
			<td>
			<select name="school_year" class="form-control"required>
					<option></option>
						<option>2015-2016</option>
					<option>2016-2017</option>
					<option>2017-2018</option>
					<option>2018-2019</option>
					<option>2019-2020</option>
					<option>2020-2021</option>
					<option>2021-2022</option>
					<option>2022-2023</option>
					
				</select>
			</td>
			<td>
				<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-th-list">&nbsp;</span>View Evaluation</button>
				<button type="submit" class="btn btn-danger"><a href="delete_teacher.php?id=<?php echo $id?>" style="color:#ffffff"class="glyphicon glyphicon-remove"></a></button>
	
			</td>
			</form>
			</tr>
		<?php } ?>
	
	</tbody>
	
  </div>
   </div>
</div>