<!DOCTYPE html>
<html lang="hu">
<head>
	<meta name="description" content="Atelier Mesko | Emese Torma | Make-up artist">
	<title>Atelier Mesko</title>
	<?php include "../head.php" ?>
    <style>
		body {
			background-size: cover;
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-image: url('../inota_background.jpg');
        }
		.video-container {
			position: relative;
			max-width: 560px;
			margin: auto;
			margin-bottom: 20px;
		}
		.video-preview {
			cursor: pointer;
			position: relative;
			text-align:center;
		}
		.play-icon {
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			width: 80px;
			height: 80px;
			background-color: rgba(0, 0, 0, 0.4);
			border-radius: 50%;
			display: flex;
			justify-content: center;
			align-items: center;
			color: #fff;
			font-size: 2em;
		}		
		.video-preview img{
			width:600px;
			box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.2) 0px 1px 3px -1px;
		}		
		.video-gallery{
			margin:auto;
			margin-top:230px;
			/*max-width:1200px;*/
		}
		iframe, video {
			width: 600px;
			height: 338px;
		}

		@media (max-width: 1400px) {
			.video-gallery{
				margin-top:30px;
			}
			
		}

		@media (max-width: 767px) {
			iframe, video,	.video-preview img {		
				width: 66vw;
			}
			body {
				background-image: url('../grey_background.jpg');
			}
			.center{
				justify-content:flex-start;
			}
			.navbar{
				margin-bottom:40px;				
			}
		}

		@media (max-width: 576px) {
			iframe, video, .video-preview img {		
				width: 320px;
			}
		}
	</style>

</head>
<body>
    <?php include "../menu.php";?>

	<div class="container">
		<div class="video-gallery row">
			<div class="col-sm">
				<div class="video-container">
					<div id ="video2" class="video-preview" onclick="loadVideo.call(this, 'youtube','J4lkksSfYP4')">
						<img src="images/one_minute_cover.jpg" alt="Videó előnézet 1">
						<div class="play-icon">&#9654;</div>
					</div>
				</div>
			</div>
			<div class="col-sm">
				<div class="video-container">
					<div id ="video1" class="video-preview" onclick="loadVideo.call(this, 'youtube', '-JUR-Yc58u8')">
						<img src="images/the_zone_cover.jpg" alt="Videó előnézet 1" >
						<div class="play-icon">&#9654;</div>
					</div>
				</div>
			</div>

		</div>		
	</div>

	<script>
		function loadVideo(type, targetId) {		
			this.onclick='';
			this.querySelector('.play-icon').style.display = 'none';
			if (type=='youtube'){
				this.innerHTML = '<iframe src="https://www.youtube.com/embed/' + targetId + '?autoplay=1&mute=1" frameborder="0" allowfullscreen></iframe>';
			} else{
				this.innerHTML = videos[targetId];
			}
			this.click();
		}
	</script>


</body>

</html>
