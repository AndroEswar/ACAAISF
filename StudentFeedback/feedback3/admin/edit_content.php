<!-- Modal -->
<div id="edit<?php echo $ids ?>" class="modal fade" role="dialog" >
  <div class="modal-dialog">
<?php $sqld = mysql_query("select * from evaluation_content where evaluation_content_id='$ids'");
$rowd = mysql_fetch_array($sqld);
?>
    <!-- Modal content-->
    <div class="modal-content" style="width:100%;margin:0 auto;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="text-align:center">Edit Content</h4>
      </div>
      <div class="modal-body">
	    <form action="edit_action.php" method="post">
		<input type="hidden" name="id" value="<?php echo $id?>">
			<input type="hidden" name="ids" value="<?php echo $ids?>">
		<textarea class="form-control"  name="desc"><?php echo $rowd['Description'];?></textarea>
      </div>
      <div class="modal-footer">
		<input type="submit" name="edit" value="Save" class="btn btn-primary">
			</form>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
