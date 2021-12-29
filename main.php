<?php
  echo "<script src='http://code.createjs.com/createjs-2013.12.12.min.js'></script>
  		<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js'></script>
  		";
  include("include/links-with-bubbles.php");
  include("include/bubbles.php");
  include("include/functions.php");
  $main = __FILE__;
  include("include/navbar.php");
?>
<div class="videos" id="all_videos">
	<div class="videos-container">
		<div class="row-custom row-custom-override">
			<div class='video col-3'>
				<div style="padding:100% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/660693106?h=776c83e7e9&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" allowfullscreen="allowfullscreen" mozallowfullscreen="mozallowfullscreen" msallowfullscreen="msallowfullscreen" oallowfullscreen="oallowfullscreen" webkitallowfullscreen="webkitallowfullscreen" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Annoying Ads or Just A Type Of Music?"></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
			</div>
			<div class='video col-3'>
				<div style="padding:100% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/660738457?h=3e3f1486b3&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Do I Use My Body To Attract An Audience?"></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
			</div>
			<div class='video col-3'>
				<div style="padding:100% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/660744711?h=e6f0859549&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="How Did Instagram Sell Itself for $1million?"></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
			</div>
		</div>
	</div>
</div>

<?php
	include("include/footer.php");
?>
</body>

