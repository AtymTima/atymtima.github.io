<?php
  echo "<script src='http://code.createjs.com/createjs-2013.12.12.min.js'></script>
  		<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js'></script>
  		";
  include("include/links-with-bubbles.php");
  include("include/bubbles.php");
  include("include/functions.php");
  $animations = __FILE__;
  include("include/navbar.php");
?>
<div class="videos" id="all_videos">
	<div class="videos-container">
		<div class="row-custom row-custom-override">
			<div class='video col-2'>
				<div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/660844002?h=00b72bb6c8&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="BrightBurner - Animation"></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
			</div>
		</div>
	</div>
</div>

<?php
	include("include/footer.php");
?>
</body>

