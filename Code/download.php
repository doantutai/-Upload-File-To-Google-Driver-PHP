<?php
include'config.php';
include'head.php';
if(isset($_GET['id'])){
?>
<?php
        $reg = mysqli_query($conn,"SELECT * FROM `filetrung` WHERE `id` = '".$_GET[id]."' ORDER BY time DESC");
while($res = mysqli_fetch_assoc($reg)){
?>
<div class="row">
    <div class="col-sm-3">
    				<div class="panel panel-primary">
					<div class="panel-heading"><h2 class="panel-title"><i class="fa fa-database" aria-hidden="true"></i> Unlimited Free Data Storage</h2></div>
						<div class="list-group">
							<div class="slideshow fade-in is-paused">
								<div class="list-group-item"><i class="fa fa-users" aria-hidden="true"></i> <a href="https://bitly.top" target="_blank">VuiIT Community</a></div>
								<div class="list-group-item"><i class="fa fa-link" aria-hidden="true"></i> <a href="https://bitly.top" target="_blank">URL Shortener</a></div>
								<div class="list-group-item"><i class="fa fa-paypal" aria-hidden="true"></i> <a href="https://www.paypal.me/adminhpurl" target="_blank">Donate PayPal</a></div>
							</div>	
						</div>
				</div>				

			</div>
			
			<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({
          google_ad_client: "ca-pub-4439905200166540",
          enable_page_level_ads: true
     });
</script>

<div class="col-sm-9">			
		    			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title">Download File ID <?php echo $res['id']; ?> Name <b><?php echo $res['name']; ?></b></h3>
				</div>
				<div class="panel-body">
				    <?php

				    if($res['passwd']){
				        if(isset($_POST['checkpass'])){
				        $passwd=mysqli_real_escape_string($_POST['password']);
				        				    $check = mysqli_result(mysqli_query($conn,"SELECT COUNT(*) FROM `filetrung` WHERE `passwd`='$passwd'"), 0);
if(empty($passwd)){
      echo " <script>swal({
  type: 'error',
  title: 'Oops...',
  text: 'Chưa Nhập Mật Khẩu File',
})  </script>";    
}

				        
elseif($check < 1){
echo'cc';
}else{
    ?>
    <style>
        #ntt{display:none};
        
    </style>
<?php
    if($res['type'] == 'image/png' or $res['type'] == 'image/jpeg'){
    ?>
<center>
    <style>
        .thumb{
                height: 200px;
    background-color: #3e3e3e;
    background-image: none;
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
        }
    </style>
            <div class="thumb" style="background-image: url(https://drive.google.com/uc?export=download&amp;id=<?php echo $res['link']; ?>);"></div>

<hr>
</center>
<?php
    }
    ?>    
<p>File name: <b><?php echo $res['name']; ?></b>
    </p>
    <p></p>
    <hr>
    <p>Link: 
 <a href="https://drive.google.com/open?id=<?php echo $res['link'];?>" target="_blank" class="btn btn-danger">View</a>  - 
  <a href="https://drive.google.com/uc?export=download&amp;id=<?php echo $res['link']; ?>" class="btn btn-success">Download</a>
    </p>
    <p></p>
    <hr>
    <p>Time : <?php echo(date("d-m-Y",$res['time']));?>| <?php echo(date("G:i",$res['time']));  ?></p>
    <p></p>
    <hr>
    <p>Size: <?php if($res['size'] >= 1073741824){
            echo number_format($res['size'] / 1073741824, 2) . ' GB';

        }elseif($res['size'] >= 1048576){
        	echo number_format($res['size'] / 1048576, 2) . ' MB';

        }elseif($res['size'] >= 1024){
        echo number_format($res['size'] / 1024, 2) . ' KB';
        }else{
        	echo'No Results';
        } ?></p>    
    <?php
}
				            
				        }
?>
<div id="ntt">
<form class="form-group" method="post" action="">
                            <div class="form-group">
                                <input class="form-control" type="text" name="password" placeholder="Enter File Password">
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" name="checkpass" value="View File">
                            </div>
                        </form>
                        </div>
<?php
}else{
    ?>
    <?php
    if($res['type'] == 'image/png' or $res['type'] == 'image/jpeg'){
    ?>
<center>
    <style>
        .thumb{
                height: 200px;
    background-color: #3e3e3e;
    background-image: none;
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
        }
    </style>
            <div class="thumb" style="background-image: url(https://drive.google.com/uc?export=download&amp;id=<?php echo $res['link']; ?>);"></div>

<hr>
</center>   
<?php
    }
    ?>
     <p>File name: <b><?php echo $res['name']; ?></b>
    </p>
    <p></p>
    
    
        <hr>
    <p><code>Size: <?php if($res['size'] >= 1073741824){
            echo number_format($res['size'] / 1073741824, 2) . ' GB';

        }elseif($res['size'] >= 1048576){
        	echo number_format($res['size'] / 1048576, 2) . ' MB';

        }elseif($res['size'] >= 1024){
        echo number_format($res['size'] / 1024, 2) . ' KB';
        }else{
        	echo'No Results';
        } ?></code></p>
        
            <hr>
    <p>Upload Time :
    <small><b class="btn btn-info btn-xs"><?php echo(date("d-m-Y",$res['time']));?>| <?php echo(date("G:i",$res['time']));  ?></b></small>
    </p>
    <p></p>
        
      <hr>  
    <p>Link: 
 <center><a href="https://drive.google.com/open?id=<?php echo $res['link'];?>" target="_blank" class="btn btn-danger">View File</a>  - 
  <a href="https://drive.google.com/uc?export=download&amp;id=<?php echo $res['link']; ?>" class="btn btn-success">Download</a></center>
    </p>
    <p></p>

<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- 728x90 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-4439905200166540"
     data-ad-slot="9237785213"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
    <?php
}
?>
      <div style="text-align:center"><a href="/"> Back to Upload Page</a></div>   


				</div>
			</div>
</div>
</div>

  <div class="container">
	<div class="row">
		<div class="col-md-4">
			<h2>Unlimited Storage</h2>
			<p>Expanding capacity on demand.</p>
			<p class="text-danger">Maximum file size 15gb upload</p>
		</div>
		<div class="col-md-4">
			<h2>Unlimited Bandwidth</h2>
			<p>Free for download and watching</p>
			<p>Upload - Download - Watch Online</p>
		</div>
		<div class="col-md-4" title="Not available" style="color: #e0d9d9;">
			<h2 style="text-decoration: line-through;">Pay Per View</h2>
			<p style="text-decoration: line-through;">Make money form views of video.</p>
			<p style="text-decoration: line-through;">Flexible payment.</p>
		</div>
	</div>
</div>

 <div  style="margin-top: 10px">  </div>	  

<center><h1><font color="#ff0000"><b>FEATURE INTRODUCTION</b></font></h1></center>

 <div  style="margin-top: 10px">  </div>	  


<h2><b><font color="#00b050">Unlimited Storage</font></b></h2>


<p> 
As a member of the internet for a long time, we understand that sometimes we need a place to store large files, or sometimes we need to share it with friends.&nbsp;<div><br><div>But today's servers are mostly for storage capacity is very low or you have to put some money out to upgrade the institute.&nbsp;</div><div><br></div><div>Understanding that, we created this server to allow you to store large files for free.&nbsp;</div><div><br></div><div>However, for the sake of maintaining the server, we have placed ads on our site. If you do not mind, please do not block our ads. That gives us more motivation to provide a better experience for you.</div></div> </p>




<h2><b><font color="#00b050">Unlimited Bandwidth</font></b></h2>




<p> <div>Also with the unlimited storage space, we also not limit the bandwidth.</div><div><br></div><div>If your internet connection is strong, you can download file at 10MB/s or even 50MB/s to 100MB/s.</div><div><br></div><div>That is not possible for normal server, but with our servers set by the Google server so the large transmission line allows you to download at a fast speed that almost no where.</div><div><br></div><div>And once again we would like to thank you for using our service, as well as for introducing others. With the motto "Sharing is Happiness", we will try harder in the future.</div>
</p>


<h2><b><font color="#00b050">Pay Per View/Download</font></b></h2>


<p> 

<div>We are currently free completely and no have intention of paying for the affiliate link.</div><div><br></div><div>Because if we do that we have apply more features, which will be very annoying for free users.</div><div><br></div><div>It's not for the profit, we not have bring a bad experience to our users.</div>

</p>
  
    
    

    <div id='ad-items-bottom' class="col-lg-12" style="float:none">
        <div class="row center-block text-center" style="margin-top: 10px">
        </div>
    </div>
</div>



<?php
}
}
include'foot.php';

?>