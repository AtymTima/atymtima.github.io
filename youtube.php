<?php
  echo "<script src='http://code.createjs.com/createjs-2013.12.12.min.js'></script>
  		<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js'></script>
  		";
  include("include/links-with-bubbles.php");
  include("include/bubbles.php");
  include("include/functions.php");
  $youtube = __FILE__;
  include("include/navbar.php");
?>
<div class="videos" id="all_videos">
	<div class="videos-container">
		<div class="row-custom row-custom-override">
			<div class='video col-2'>
				<div style="padding:56.25% 0 0 0;position:relative;">
				<iframe style="position:absolute;top:0;left:0;width:100%;height:100%;" src="https://www.youtube.com/embed/Qu0Ap0v69Fw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			<div class='video col-2'>
				<div style="padding:56.25% 0 0 0;position:relative;">
				<iframe style="position:absolute;top:0;left:0;width:100%;height:100%;" src="https://www.youtube.com/embed/oJ4hC2l0W2U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
	include("include/footer.php");
?>
</body>

