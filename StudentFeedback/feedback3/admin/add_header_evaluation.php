<!-- Modal -->
<div id="add" class="modal fade" role="dialog" >
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" style="width:50%;margin:0 auto;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="text-align:center">Add Evaluation Category</h4>
      </div>
      <div class="modal-body">
	    <form action="" method="post">
		<input type="text" class="form-control" name="desc" placeholder="">
      </div>
      <div class="modal-footer">
		<input type="submit" name="saves" value="Save" class="btn btn-primary">
			</form>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<?php 
if(isset($_POST['saves'])){

$des = $_POST['desc'];

mysql_query("insert into evaluationheader(evaluateheader_description,evaluate_id) values('$des','$id')");


}

?>