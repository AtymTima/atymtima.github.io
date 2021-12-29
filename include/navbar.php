<body onload="";>
	<header>
	<div class="nav-custom">
		<div>
			<a href="main.php">
				<img src="assets/logo.png" alt="LOGO" class="logo">
			</a>
		</div>
		<div class="nav-btn">
			<ul class="nav-width">
				<?php
				if (isset($films)) {
					echo "
					<li><a href='main.php'>HIGHLIGHTS</a></li>
					<li class='nav-btn-underlined'><a href='films.php'>FILMS</a></li>
					<li><a href='animations.php'>ANIMATIONS</a></li>
					<li><a href='youtube.php'>TALKING.HEAD</a></li>
					";
				} else if (isset($animations)) {
					echo "
					<li><a href='main.php'>HIGHLIGHTS</a></li>
					<li><a href='films.php'>FILMS</a></li>
					<li class='nav-btn-underlined'><a href='animations.php'>ANIMATIONS</a></li>
					<li><a href='youtube.php'>TALKING.HEAD</a></li>
					";
				} else if (isset($youtube)) {
					echo "
					<li><a href='main.php'>HIGHLIGHTS</a></li>
					<li><a href='films.php'>FILMS</a></li>
					<li><a href='animations.php'>ANIMATIONS</a></li>
					<li class='nav-btn-underlined'><a href='youtube.php'>TALKING.HEAD</a></li>
					";
				} else {
					echo "
					<li class='nav-btn-underlined'><a href='main.php'>HIGHLIGHTS</a></li>
					<li><a href='films.php'>FILMS</a></li>
					<li><a href='animations.php'>ANIMATIONS</a></li>
					<li><a href='youtube.php'>TALKING.HEAD</a></li>
					";
				}
				?>
			</ul>
		</div>
	</div>
	</header>