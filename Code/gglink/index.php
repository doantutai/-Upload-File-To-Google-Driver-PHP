
<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Google Drive Direct Download Link Generator</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link rel="shortcut icon" type="image/png" href="images/favicon.png" >
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	</head>
<body>

	<div class="content">
		<div class="col-md-12">
		
			<div class="clearfix"></div>
			<div class="list-group content_get">
				<h2 class="list-group-item active">Google Drive Direct Download Link Generator</h2>
				<div class="list-group-item">
					<div><b>Hướng dẫn</b>: Tiện ích này giúp các bạn Tạo link download trực tiếp từ link Goole Drive<br />
					Ví dụ: <br />
					Bạn nhập link này xuống dưới <a href="https://drive.google.com/file/d/1lHfsGfvN-7GPGEfNKzHb_F8lg4eLaGNH/view?usp=sharing" target="_blank" rel="nofollow">https://drive.google.com/file/d/1lHfsGfvN-7GPGEfNKzHb_F8lg4eLaGNH/view?usp=sharing</a><br />
					Sẽ tạo ra link: <a href="https://drive.google.com/uc?export=download&id=1lHfsGfvN-7GPGEfNKzHb_F8lg4eLaGNH" rel="nofollow">https://drive.google.com/uc?export=download&id=1lHfsGfvN-7GPGEfNKzHb_F8lg4eLaGNH</a> (nhấn vào link này sẽ download trực tiếp)<br />
					</div>
					<br />
										<div class="form-group">
					    <label for="link">Google Drive Link</label>
					    <input type="text" class="form-control" id="link" onblur="FunctionURL()" placeholder="https://drive.google.com/file/d/XX-X__XXXXX-XXXXXXXXXXXXXXXX/view?usp=sharing">
					</div>
					<div class="form-group">
					 	<div class="row">
						    <div class="col-sx-12 col-sm-6 col-md-12">
						    	<label for="dl" class="loa">
							    	<div class="loading_content">
								    	<div class="name_download">Direct Download Link</div>
								    	<div class="loading_con">
								    	</div>
									</div>
								</label>
						    	<div class="input-group">
						            <input type="text" class="form-control" id="downloadlink" readonly>
						            <span class="input-group-btn">
								        <button id="copylinkbtn" class="btn btn-success" type="button"  data-clipboard-target="#downloadlink" disabled>Copy</button>
								    </span>
						        </div>
						    </div>
<!--			   <div class="col-sx-12 col-sm-6 col-md-4">
						    	<label>Link Rút Gọn</label>
						    	<div class="input-group">
						            <input type="text" class="form-control" id="compactlink" readonly>
						            <span class="input-group-btn">
								        <button id="compact" class="btn btn-primary" type="button" data-clipboard-target="#compactlink" disabled>Copy</button>
								    </span>
						        </div>
						    </div>
						     <div class="clearfix"></div>
						    <p id="alret_copy" class="p_text" hidden></p>
						</div>
					    <div class="clearfix"></div>
					</div>   -->
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
<br>

 <div class="container">

        <center>
            <h2 class="animatedElement">Partner</h2>
        <label><img src="https://i.imgur.com/WwmNVtM.png" alt="Google Adsense" title="Google Adsense" data-toggle="tooltip" data-placement="bottom" /></label>
        <label><img src="https://i.imgur.com/Qe7PjCy.png" alt="Google Domains" title="Google Domains" data-toggle="tooltip" data-placement="bottom" /></label>
        <label><img src="https://i.imgur.com/5hsGHTC.png" alt="NameSilo" title="NameSilo" data-toggle="tooltip" data-placement="bottom" /></label>
        <label><img src="https://i.imgur.com/PH37xJg.png" alt="Ifastnet" title="Ifastnet" data-toggle="tooltip" data-placement="bottom" /></label>
        <label><img src="https://i.imgur.com/AsPAAnB.png" alt="CloudFlare" title="CloudFlare" data-toggle="tooltip" data-placement="bottom" /></label>
        <label><img src="https://i.imgur.com/kQclTJn.png" alt="VuiIT" title="VuiIT" data-toggle="tooltip" data-placement="bottom" /></label>
       </center>
      </div>
      
       
      </div>
 </div>
<div style="text-align:center"><a href="/"> Back to Upload Page</a></div>  
		<div class="container">
		<hr/>
		<footer>
			<p style="text-align: center;">&copy; 2016-2019 TaiVe.TOP Free Cloud Upload. Donate: <font size="4"><a href="https://www.paypal.me/adminhpurl">PayPal</a><br></font><br></p>
		</footer>
	</div>	
	<script src="ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#copylinkbtn').click(function(){
				var copyText = document.getElementById("downloadlink");
			 	copyText.select();
			  	document.execCommand("copy");
			  	$('p#alret_copy').removeAttr('hidden');
				$('p#alret_copy').text("Đã Copy link " + copyText.value);
				setTimeout(function() { 
			        $('p#alret_copy').attr('hidden', 'hidden');
			    }, 3000);
			})
			$('#compact').click(function(){
				var copyText = document.getElementById("compactlink");
			 	copyText.select();
			  	document.execCommand("copy");
			  	$('p#alret_copy').removeAttr('hidden');
				$('p#alret_copy').text("Đã Copy link " + copyText.value);
				setTimeout(function() { 
			        $('p#alret_copy').attr('hidden', 'hidden');
			    }, 3000);
			})
			var url_defaule = 'https://drive.google.com/uc?export=download&id=';
			 $("#link").keyup(function(){
		        var link = $('#link').val();
		        let li = link.replace(/\/file\/d\/(.+)\/(.+)/, "$1");
		        var content_url = li.replace('https://drive.google.com', url_defaule);
		       	if(content_url !== link) {
		       		$('#downloadlink').val(content_url);
			        $('#copylinkbtn').removeAttr('disabled');
				}else{
					$('#downloadlink').val('');
			        $('#copylinkbtn').attr('disabled', 'disabled');
			    }
		    });
		});
	</script>
	</body>
</html>
