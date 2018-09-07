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
<a href="#" data-toggle="modal" data-target="#addstaff" class="btn btn-primary"><span class="glyphicon glyphicon-user"></span> Add staff</a>
<br/>
<?php include("addstaff.php");?>
	<br/>
	<table id="example" class="table table-striped table-bordered" align="center">
	<thead>
		<tr>
			<th>Staff Name</th>
			<th>Action</th>
		</tr>
	</thead>
		
	<tbody>
	<?php $sql = mysql_query("select * from staff")?>
		<?php while($row = mysql_fetch_array($sql)){
			$id=$row['staff_id'];?>
		<tr>
			<td><?php echo $row['staff_firstname']." ".$row['staff_lastname']?></td>
			
				<input type="hidden" name="id" value="<?php echo $id;?>">
		
			<td>
				<button type="submit" class="btn btn-primary"  data-toggle="modal" data-target="#comment<?php echo $id?>"><span class="glyphicon glyphicon-th-list">&nbsp;</span>Comments</button>
				<button type="submit" class="btn btn-danger"><a href="delete_staff.php?id=<?php echo $id?>" style="color:#ffffff"class="glyphicon glyphicon-remove"></a></button>
	
			</td>
		<?php include("modal_staff.php");?>
			</tr>
		<?php } ?>
	
	</tbody>
	
  </div>
   </div>
</div>