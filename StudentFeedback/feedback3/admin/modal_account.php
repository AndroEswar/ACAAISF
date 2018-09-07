<!-- Modal -->
<div id="account" class="modal fade" role="dialog" >
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" style="width:50%;margin:0 auto;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="text-align:center">Account</h4>
      </div>
      <div class="modal-body">
	    <form action="editadmin.php" method="post">
			<?php $sqls = mysql_query("select * from admin where admin_id='$session_id'");
				$row=mysql_fetch_array($sqls);?>
			<input type="text" name="lname" placeholder="Last Name" value="<?php echo $row['lastname']?>"class="form-control"><br/>
			<input type="hidden" name="type" value="teacher">
			<input type="text" name="fname" placeholder="First Name" value="<?php echo $row['firstname']?>"class="form-control"><br/>
			<input type="text" name="username" value="<?php echo $row['username']?>"  class="form-control"><br/>
			<input type="password" name="password" value="<?php echo $row['password']?>"  class="form-control"><br/>
		<?php ?>
      </div>
      <div class="modal-footer">
		<input type="submit" name="save" value="Save" class="btn btn-primary">
			</form>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>