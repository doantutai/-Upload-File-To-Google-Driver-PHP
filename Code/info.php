<?php
include'config.php';
if($_GET['p']== null){
    $_GET['p']=1;
}
if($_GET['p'] >= 2){
	$pages = ($_GET['p'] -1) * 10;
}
else{
	$pages = 0;
}
?>
 <div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="fa fa-refresh"></i> <?php echo $idbot = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `filetrung` WHERE `id`")); ?> Recently Uploaded File</h3>
				</div>
				<div class="panel-body">
				    <div class="table-responsive">
				    <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Size</th>
        <th>Type</th>
        <th>Option</th>
      </tr>
    </thead>
    <tbody>
        <?php
        //$reg = mysql_query("SELECT * FROM `filetrung` ORDER BY time DESC LIMIT 10 OFFSET {$pages}");
        $reg = mysqli_query($conn,"SELECT * FROM `filetrung` ORDER BY time DESC LIMIT 10");
while($res = mysqli_fetch_assoc($reg)){
?>
            <tr>
        <td scope="row"><?php echo $res['id']; ?></td>
        <td><?php echo $res['name'] ?></td>
        <td><code><?php if($res['size'] >= 1073741824){
            echo number_format($res['size'] / 1073741824, 2) . ' GB';

        }elseif($res['size'] >= 1048576){
        	echo number_format($res['size'] / 1048576, 2) . ' MB';

        }elseif($res['size'] >= 1024){
        echo number_format($res['size'] / 1024, 2) . ' KB';
        }else{
        	echo'No Results';
        } ?></code></td>
        <td><?php echo $res['type']; ?></td>
        <td><a href="/<?php echo $res['id']; ?>">View File</a></td>
      </tr>
      <?php
}
      ?>
          </tbody>
  </table>
</div>
</div>
</div> 