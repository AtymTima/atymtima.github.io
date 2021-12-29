<script>
	function toggleMute() {
	  	var video = document.getElementById("background-video");
	  	video.muted = !video.muted;
	  	if (video.muted) {
	  		document.querySelector('#myBtn').textContent = 'Unmute';
	  	} else {
	  		document.querySelector('#myBtn').textContent = 'Mute';
	  	}
	}

	function showVideos() {
	  	window.location = 'main.php'
	}
</script>