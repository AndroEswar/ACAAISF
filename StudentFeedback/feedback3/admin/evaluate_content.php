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
<?php $id=$_GET['id'];?>
 <div class="row row-centered">
<div class="col-xs-6 col-centered" style="width:90%;margin:0 auto">
<a href=""  data-toggle="modal" data-target="#add"class="btn btn-primary"><span class="glyphicon glyphicon-th-list">&nbsp;</span>Add Content</a><br/><br/>
<?php include("add_content_evaluation.php");?>

<div class="table-responsive">

		<table id="example" class="table table-striped table-bordered" align="center">
			<thead>
			<tr>
				<th>Description</th>
				<th>Action</th>
			</tr>
			</thead>
			<tbody>
		<?php $sql = mysql_query("select * from evaluation_content where evaluationheader_id='$id'");?>
		<?php while($row = mysql_fetch_array($sql)){
		$ids=$row['evaluation_content_id'];
		?>
		<tr>
			<td><?php echo $row['Description']?></td>
			<td><a href=""  data-toggle="modal" data-target="#edit<?php echo $ids ?>"class="btn btn-primary"><span class="glyphicon glyphicon-edit">&nbsp;</span>Edit</a>
&nbsp;
			<a href="delete_content.php?id=<?php echo $ids ?>" class="btn btn-danger"><span class="glyphicon glyphicon-remove">&nbsp;</span>
			</a></td>
		</tr>
		<?php include("edit_content.php");?>
		<?php } ?>
		</tbody>
	</table>
</div>
</div>
</div>