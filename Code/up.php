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
<center><a class="btn btn-success" id="submit" onlick=""><i class="fa fa-upload" aria-hidden="true"></i> Upload</a></center>
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

                                    </div>
 </div>
   <!-- ket thuc up-->
 
   <center>
       <a class="btn btn-success" href="/xemthem.php"><i class="fa fa-list" aria-hidden="true"></i> File See More</a>
   </center>
<div class="row" style="text-align: center">
    


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
      