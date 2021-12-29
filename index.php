<?php
  include("include/links.php");
  include("include/functions.php");
?>
<body>
  <video autoplay muted loop id="background-video" onclick="showVideos()">
    <source src="assets/background.mp4" type="video/mp4">
  </video>

  <div class="content">
    <button id="myBtn" onclick="toggleMute()">Unmute</button>
  </div>
</body>