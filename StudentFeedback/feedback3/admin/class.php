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
<br/>
<?php include("addstudent.php");?>
	<br/>
	<table id="example" class="table table-striped table-bordered" align="center">
	<thead>
		<tr>
			<th>Class</th>
			<th>Action</th>
		</tr>
	</thead>
	<?php $b = "B";?>
	<tbody>
	<?php $sql = mysql_query("select * from feedback where category LIKE '%".$b."%' group by category")?>
		<?php while($row = mysql_fetch_array($sql)){
			$id=$row['category'];?>
		<tr>
			<td>
			<?php echo $row['category'];?></td>
		
				<input type="hidden" name="id" value="<?php echo $id;?>">
			<?php echo $id;?>
			<td>
				<button  class="btn btn-primary"  data-toggle="modal" data-target="#comment<?php echo $id?>" ><span class="glyphicon glyphicon-th-list">&nbsp;</span>Comments</button>
				<button type="submit" class="btn btn-danger"><a href="delete_class.php?id=<?php echo $id?>" style="color:#ffffff"class="glyphicon glyphicon-remove"></a></button>
			</td>
		
			</tr>
		<?php  
			include("modal_class_comment.php");} ?>
	
	</tbody>
	</table>
  </div>
   </div>
</div>