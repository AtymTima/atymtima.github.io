<footer>
<div class="footer-custom">
	<div class="footer-btn">
		<ul class="footer-width">
			<?php
			if (isset($contacts)) {
				echo "
				<li><a href='main.php'>HIGHLIGHTS</a></li>
				<li class='nav-btn-underlined'><a href='films.php'>FILMS</a></li>
				<li><a href='animations.php'>ANIMATIONS</a></li>
				<li><a href='youtube.php'>TALKING.HEAD</a></li>
				";
			} else {
				echo "
				<li><a href= 'mailto:atymtimafilms@gmail.com?subject=Hire Request&body=Hi Timur,'>EMAIL</a> —</li>
				<li><a href='https://youtube.com/channel/UCSw7bZnTAxp_YJYxjb0Qn5A?sub_confirmation=1' target='_blank' rel='noopener noreferrer'>YOUTUBE</a> —</li>
				<li><a href='https://vimeo.com/user161883897' target='_blank' rel='noopener noreferrer'>VIMEO</a> —</li>
				<li><a href='https://www.instagram.com/atymtima/?hl=en' target='_blank' rel='noopener noreferrer'>INSTAGRAM</a></li>
				";
			}
			?>
		</ul>
	</div>
</div>
</footer>