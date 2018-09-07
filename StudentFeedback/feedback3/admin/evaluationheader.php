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
<a href=""  data-toggle="modal" data-target="#add"class="btn btn-primary"><span class="glyphicon glyphicon-th-list">&nbsp;</span>Add Header Category</a><br/><br/>
<?php include("add_header_evaluation.php");?>
<div class="table-responsive">

		<table id="example" class="table table-striped table-bordered" align="center">
			<thead>
			<tr>
				<th>Description</th>
				<th>Action</th>
			</tr>
			</thead>
			<tbody>
		<?php $sql = mysql_query("select * from evaluationform");?>
		<?php while($row = mysql_fetch_array($sql)){
		$id=$row['evaluate_id'];
		?>
		<tr>
			<td><?php echo $row['evaluate_description']?></td>
			<td><a href="evaluate_content.php?id=<?php echo $id ?>" class="btn btn-primary"><span class="glyphicon glyphicon-th-list">&nbsp;</span>View Content</a>&nbsp;<a href="delete_header.php?id=<?php echo $id ?>" class="btn btn-danger"><span class="glyphicon glyphicon-remove">&nbsp;</span></a></td>
		</tr>
		<?php } ?>
		</tbody>
	</table>
</div>
</div>
</div>