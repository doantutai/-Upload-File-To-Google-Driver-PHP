    </div>
                            <script>
$("#submit").click(function() {
  $("#formUpload").submit()
});
$("#stop-upload").click(function() {
  location.reload();
});
 $("#formUpload").on('submit',(function(e) {
       e.preventDefault();
         $("#progress").show();
         $("#progress-bar").show();
         $("#ntt").hide();
    var elem = document.getElementById("progress"); 
    var width = 1;
    var id = setInterval(frame, 10);
    function frame() {
        if (width >= 100) {
            clearInterval(id);
        } else {
            width++; 
            elem.style.width = width + '%'; 
        }
    }       
    //end load width
 $('#submit').html('<i class="fa fa-refresh fa-spin"></i> Đăng tiến hành');
   $.ajax({
    url: "upload.php",
   type: "POST",
dataType: "text",   
   data:  new FormData(this),
   contentType: false,
         cache: false,
   processData:false,
    success : function (result){
				$('#submit').html('<i class="fa fa-refresh fa-spin"></i> Bắt đầu lại');
        					//	$('#oztrung').html(result).css('display', 'block');
          $("#progress").hide();
         $("#progress-bar").hide();
         $("#ntt").show();   
          $("#removeFile").click();           
    }
    });  
    //end ajax
 }));     
</script>


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

		<div class="container">
		<hr/>
		<footer>
			<p style="text-align: center;">&copy; 2016-2019 TaiVe.TOP Free Cloud Upload. Donate: <font size="4"><a href="https://www.paypal.me/adminhpurl">PayPal</a><br></font><br></p>
		</footer>
	</div>
	
</body>
</html>