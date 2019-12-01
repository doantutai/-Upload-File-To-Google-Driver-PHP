<?php
include'config.php';
include'head.php';
if($_GET['p']== null){
    $_GET['p']=1;
}
if($_GET['p'] >= 2){
	$pages = ($_GET['p'] -1) * 20;
}
else{
	$pages = 0;
}
?>

		<div class="row">
<div class="col-sm-12"> 	
<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="fa fa-refresh"></i> <?php echo $idbot = mysqli_num_rows(mysqli_query("SELECT * FROM `filetrung` WHERE `id`")); ?> File Đã Upload Gần Đây</h3>
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
        $reg = mysqli_query("SELECT * FROM `filetrung` ORDER BY time DESC LIMIT 20 OFFSET {$pages}");
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
<div class="row" style="text-align: center">
    
<?php 	

		$query = 'SELECT * FROM `filetrung`';
	$n = mysqli_num_rows(mysqli_query($query)) / 20;
	if(mysqli_num_rows(mysqli_query($query)) % 20 > 0){
		$n+=1;
	$n = (int) $n; }
	if(mysqli_num_rows(mysqli_query($query)) > 0): ?>
<ul class="pagination pagination-sm">
    <li class="<?php echo ($_GET['p']-1 != 0) ? 'Trước' : 'Trước disabled';?>"><a href="/xemthem.php/?p=1">Trước</a></li>
    <li class="<?php echo ($_GET['p']-1 != 0) ? 'Đầu Tiên' : 'Đầu Tiên disabled';?>"><a href="/xemthem.php/?p=<?php echo ($_GET['p']-1 != 0) ? $_GET['p']-1 : 1;?>">Đầu Tiên</a></li>
	<?php for($i = 1; $i <= $n; $i++){ ?>
    <li class="<?php echo ($_GET['p'] == $i) ? 'page active' : 'page'; ?>"><a href="/xemthem.php/?p=<?php echo $i ?>"><?php echo $i ?></a></li>
	<?php }; ?>
    <li class="<?php echo ($_GET['p']+1 > $n) ? 'Kế Tiếp disabled' : 'Kế Tiếp'; ?>"><a href="/xemthem.php/?p=<?php echo $_GET['p']+1 ?>">Kế Tiếp</a></li>
    <li class="<?php echo ($_GET['p']+1 > $n) ? 'Cuối Cùng disabled' : 'Cuối Cùng'; ?>"><a href="/xemthem.php/?p=<?php echo $n ?>">Cuối Cùng</a></li>
</ul>
<?php endif; ?>
</div>
<!--col-sm-12 -->
</div>
<!--row-->
</div>
</div>

<div style="text-align:center"><a href="/"> Back to Upload Page</a></div> 
     </div>

     <?php
     include'foot.php';
     ?>
      