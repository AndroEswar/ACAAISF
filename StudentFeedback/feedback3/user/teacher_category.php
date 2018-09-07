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
			<th>Teacher Name</th>
			<th>Action</th>
		</tr>
	</thead>
	
	<tbody>
	<?php $sql = mysql_query("select * from teacher")?>
		<?php while($row = mysql_fetch_array($sql)){
			$id=$row['teacher_id'];?>
		<tr>
			<td><?php echo $row['teacher_firstname']." ".$row['teacher_lastname']?></td>
			<td><a href="evaluate_teacher.php?id=<?php echo $id ?>" class="btn btn-primary"><span class="glyphicon glyphicon-th-list">&nbsp;</span>Evaluate</a></td>
		</tr>
		<?php } ?>
	
	</tbody>
	
  </div>
   </div>
</div>