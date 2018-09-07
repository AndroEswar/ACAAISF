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
<a href="#" data-toggle="modal" data-target="#addsubject"class="btn btn-primary"><span class="glyphicon glyphicon-user"></span> Add Subject</a>
<br/>
<?php include("addsubject.php");?>


	<br/>
	<table id="example" class="table table-striped table-bordered" align="center">
	<thead>
		<tr>
			<th>Subject Code</th>
			<th>Subject Description</th>
			<th>Action</th>
		</tr>
	</thead>
		
	<tbody>
	<?php $sql = mysql_query("select * from subject")?>
		<?php while($row = mysql_fetch_array($sql)){
			$id=$row['subject_id'];?>
		<tr>
			<td><?php echo $row['subject_code']?></td>
			<td><?php echo $row['subject_description']?></td>
		
				<input type="hidden" name="id" value="<?php echo $id;?>">
		
			<td>
				<button  class="btn btn-primary"  data-toggle="modal" data-target="#editsubject<?php echo $id?>" ><span class="glyphicon glyphicon-edit">&nbsp;</span>Edit</button>
				<button type="submit" class="btn btn-danger"><a href="delete_subject.php?id=<?php echo $id?>" style="color:#ffffff"class="glyphicon glyphicon-remove"></a></button>
			</td>
		
			</tr>
		<?php  
			include("modal_subject.php");} ?>
	
	</tbody>
	</table>
  </div>
   </div>
</div>