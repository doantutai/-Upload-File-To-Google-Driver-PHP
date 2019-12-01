<?php
include'config.php';
include'head.php';
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


		<div class="row">
<div class="col-sm-12"> 	
<div class="alert alert-danger alert-dismissable fade in">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
		<strong>Your IP!</strong> <?php echo         $ip = $_SERVER['REMOTE_ADDR'];?>!  |  Maximum Upload 15GB Each File</div>
		    			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="fa fa-upload"></i> Upload File Driver</h3>
				</div>
				<div class="panel-body">
                        <form class="form-group" method="post" id="formUpload" enctype="multipart/form-data">
                            <div id="ntt">
                            <div class="form-group">
                                <input class="form-control" type="file" name="fileToUpload" id="removeFile">
                            </div>

                            <div class="form-group">
<a class="btn btn-success" id="submit" onlick=""><i class="fa fa-upload" aria-hidden="true"></i> Upload</a>
                            </div>
                            </div>
                                <div id="progress-bar">
                            	<div id="progress"></div>
                            	</div>
                            	<div id="oztrung" style="display:none"></div>
                        </form>
                        <!--form class="form-group" method="post" action="" id="formUpload" enctype="multipart/form-data">
                            <div id="ntt">
                            
                                                        <div class="form-group">
                                <label><i>*Set Password For File Or Leave Blank</i></label>
                                <input class="form-control" type="text" name="password" placeholder="Điền mật khẩu bỏ trống nếu không dùng">
                            </div>
                            
                            
                            <div class="form-group">
                                <input class="form-control" type="file" name="fileToUpload"/>
                            </div>
                            <div class="form-group">
                                <label><i>*Đặt Mật Khẩu Cho File Hoặc Bỏ Trống</i></label>
                                <input class="form-control" type="text" name="password" placeholder="Điền mật khẩu bỏ trống nếu không dùng"/>
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" name="submit" onclick="move()" value="Upload"/>
                            </div>
                            </div>
                            <div id="progress-bar">
                            	<div id="progress"></div>
                            </div>
                        </form-->
<center>
                            <img src="https://drive.google.com/uc?export=download&amp;id=1l-GExah29GCYFB7d0EOhCW6spik2qi7o" style="
    width: 200px;
">
                            <img src="https://drive.google.com/uc?export=download&amp;id=1eIllnID2tKCFo__N5WkNBE1vI-rgawsZ" style="
    width: 200px;
">
                        </center>
                                    </div>
 </div>
   <!-- ket thuc up-->
   <div id="showinfo"></div>
   <center>
       <a class="btn btn-success" href="/xemthem.php"><i class="fa fa-list" aria-hidden="true"></i> File See More</a>
   </center>
   
   
   
<div class="row" style="text-align: center">
    
    <!--
<?php 	/*

		$query = 'SELECT * FROM `filetrung`';
	$n = mysql_num_rows(mysql_query($query)) / 10;
	if(mysql_num_rows(mysql_query($query)) % 10 > 0)
		$n+=1;
	$n = (int) $n; 
	if(mysql_num_rows(mysql_query($query)) > 0): ?>
<ul class="pagination pagination-sm">
    <li class="<?php echo ($_GET['p']-1 != 0) ? 'Trước' : 'Trước disabled';?>"><a href="/?p=1">Trước</a></li>
    <li class="<?php echo ($_GET['p']-1 != 0) ? 'Đầu Tiên' : 'Đầu Tiên disabled';?>"><a href="/?p=<?php echo ($_GET['p']-1 != 0) ? $_GET['p']-1 : 1;?>">Đầu Tiên</a></li>
	<?php for($i = 1; $i <= $n; $i++){ ?>
    <li class="<?php echo ($_GET['p'] == $i) ? 'page active' : 'page'; ?>"><a href="/?p=<?php echo $i ?>"><?php echo $i ?></a></li>
	<?php }; ?>
    <li class="<?php echo ($_GET['p']+1 > $n) ? 'Kế Tiếp disabled' : 'Kế Tiếp'; ?>"><a href="/?p=<?php echo $_GET['p']+1 ?>">Kế Tiếp</a></li>
    <li class="<?php echo ($_GET['p']+1 > $n) ? 'Cuối Cùng disabled' : 'Cuối Cùng'; ?>"><a href="/?p=<?php echo $n ?>">Cuối Cùng</a></li>
</ul>
<?php endif;*/ ?>-->

</div>
<!--col-sm-12 -->
</div>
<!--row-->
</div>
</div>     
     </div>
     <script>
         setInterval(function () {
    $("#showinfo").load("info.php"); 
}, 200);
     </script>
     <?php
     include'foot.php';
     ?>
      