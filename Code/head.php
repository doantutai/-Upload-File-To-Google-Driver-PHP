<style>
    #progress-bar {
    width: 100%;
    background-color: #ddd;
    display: none;
}
#progress {
    width: 1%;
    height: 30px;
    background-color: #4CAF50;
    display: none;
}
    img[src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"]{display:none}

</style>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=yes">
	<title>Upload File | TaiVe.TOP </title>
	<meta name="description" content="website Upload Miển Phí">
<meta property="og:type" content="website">
<meta content='https://i.imgur.com/3QWrH5D.png' property='og:image'/>
<meta content='TAIVE.TOP | Upload File, Miễm Phí' property='og:image:alt'/>
<meta content='http://taive.top/' property='og:url'/>
<meta content='vi' http-equiv='content-language'/>
<meta content='VuiIT Community' name='author'/>
<meta content='TAIVE.TOP | Upload File, Miễm Phí' name='copyright'/>

	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.7/sweetalert2.min.css">
    <link href='//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'/>
    <link rel="icon" type="image/png" href="https://i.imgur.com/DQXhRsZ.png">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.7/sweetalert2.min.js"></script>
</head>
<body>
	<div class="container" style="margin-top: 15px;">
	    
<br>
<br>
<br>	    
	    	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				
				<a class="navbar-brand" href="/">
					<span class="fa fa-cloud fa-x2"></span> TaiVe.TOP</a>

			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-left">
					                <li><a href="/xemthem.php"><span class="glyphicon glyphicon-folder-open"></span> File Manager</a></li>
					
	                	                <li class="dropdown">
	                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><span class="fa fa-cogs"></span> Tools <span class="caret"></span></a>
	                    <ul class="dropdown-menu">
	                        <li><a href="/fshare/index.php"><span class="fa fa-arrow-down"></span> GET Link Fshare</a></li>
	                        <li><a href="https://bitly.top"><span class="fa fa-link"></span> URL Shortener</a></li>
	                        <li><a href="/gglink/index.php"><span class="fa fa-hdd-o"></span> GET Link Google Drive</a></li>
	                        <li><a href="/videofb/index.php"><span class="fa fa-facebook-official"></span> Download Video Facebook</a></li>
	                        <li><a href="/youtube/index.php"><span class="fa fa-youtube-play"></span> Download Video Youtube</a></li>
	                    </ul>
	                </li>
						                
	            	            </ul>
				<ul class="nav navbar-nav navbar-right">
											<li><a href="/up.php" ><i class="fa fa-cloud-upload"></i> Upload</a></li>
<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><i class="fa fa-usd"></i> Donate <span class="caret"></span></a>
    <ul class="dropdown-menu">
        <li class="g-signin2" style="display:none"></li>
        <li><a href="https://www.paypal.me/adminhpurl"><span class="fa fa-paypal"></span> PayPal</a></li>
       
    </ul>
    <form id="logout-form" action="https://dowsfile.com/logout" method="POST" style="display: none;">
        <input type="hidden" name="_token" value="8QXNOtds5OPulSwrap1DDsN6rgMabFLlVhjji7cJ">
    </form>
</li>
											
				</ul>
				
			</div>
		</div>
	</nav>