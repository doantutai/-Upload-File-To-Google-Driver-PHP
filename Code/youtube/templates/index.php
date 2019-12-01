<?php echo $this->inc('header.php', ['title' => 'Youtube Downloader']); ?>
	<div class="well">
		<form class="" method="get" id="download" action="getvideo.php">
			<h1 class="form-download-heading">Youtube Downloader</h1>
				<div class="input-group">
				  <input type="text" name="videoid" id="videoid" class="form-control input-lg" placeholder="Link Youtube Hoặc ID Video" autofocus>
				  <span class="input-group-btn">
					<input class="btn btn-primary btn-lg" type="submit" name="type" id="type" value="Tải Về" />
				  </span>
				</div><!-- /input-group -->
			<div class="video-info">
				<p>Hỗ trợ các định dạng link sau:</p>
					<ul>
						<li>youtube.com/watch?v=...</li>
						<li>youtu.be/...</li>
						<li>youtube.com/embed/...</li>
						<li>youtube-nocookie.com/embed/...</li>
						<li>youtube.com/watch?feature=player_embedded&v=...</li>
					</ul>
			</div>
		<!-- @TODO: Prepend the base URI -->
		<?php
		if ( $this->get('showBrowserExtensions') === true )
		{
			echo '<center><a href="ytdl.user.js" class="btn btn-sm btn-success" title="Install chrome extension to view a \'Download\' link to this application on Youtube video pages."> Install Chrome Extension </a></center>';
		}
		?>
		<hr />
		<p><b>Lưu ý: Chỉ tải được những video không bị tố cáo bản quyền</b></p>
	<!--	<p class="muted pull-right"><a href="https://github.com/jeckman/YouTube-Downloader" target="_blank">Youtube Downloader <?php echo $this->get('app_version', ''); ?></a> is licensed under GPL 2.</p>
		<div class="clearfix"></div>-->
		</form>
	</div>
<?php echo $this->inc('footer.php'); ?>
