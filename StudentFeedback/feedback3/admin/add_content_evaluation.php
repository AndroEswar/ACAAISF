<!-- Modal -->
<div id="add" class="modal fade" role="dialog" >
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" style="width:100%;margin:0 auto;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="text-align:center">Add Content</h4>
      </div>
      <div class="modal-body">
	    <form action="" method="post">
		<textarea class="form-control" name="desc"></textarea>
      </div>
      <div class="modal-footer">
		<input type="submit" name="savess" value="Save" class="btn btn-primary">
			</form>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<?php 
if(isset($_POST['savess'])){

$des = $_POST["desc"];
$sqls  =mysql_query("select * from evaluation_content where evaluationheader_id='$id'");
$rows = mysql_fetch_array($sqls);
$e_id = $rows['evaluate_id'];
mysql_query("insert into evaluation_content(Description,evaluate_id,evaluationheader_id) values('$des','$e_id',$id)");


}

?>