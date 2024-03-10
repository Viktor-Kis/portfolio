<!DOCTYPE html>
<html lang="hu">

<head>
	<title>Emese Torma Make-up</title>
	<meta name="description" content="Emese works as a makeup artist in various fields such as music, commercials, film and theatre located in Budapest and Vienna. In these industries, she is able to cater to the different needs of different clients, which shows her versatility and skill in creating the best visual look. She has a wide range of experience and has worked with a wide range of approaches and artistic visions. Emese is able to adapt and bring unique perspectives to her work. Emese plays a key role in enhancing visual storytelling and aesthetics in various forms of media and entertainment.">
	<meta property="og:url" content="https://ateliermesko.com/commercial">
	<meta property="og:type" content="website">
	<meta property="og:title" content="Emese Torma Make-up">
	<meta property="og:description" content="Emese works as a makeup artist in various fields such as music, commercials, film and theatre located in Budapest and Vienna. In these industries, she is able to cater to the different needs of different clients, which shows her versatility and skill in creating the best visual look. She has a wide range of experience and has worked with a wide range of approaches and artistic visions. Emese is able to adapt and bring unique perspectives to her work. Emese plays a key role in enhancing visual storytelling and aesthetics in various forms of media and entertainment.">
	<meta property="og:image" content="https://ateliermesko.com/social/The-Almighty-Alpacas-Band-Photo.jpg">
	<meta name="twitter:card" content="summary_large_image">
	<meta property="twitter:domain" content="ateliermesko.com">
	<meta property="twitter:url" content="https://ateliermesko.com/commercial">
	<meta name="twitter:title" content="Emese Torma Make-up">
	<meta name="twitter:description" content="Emese works as a makeup artist in various fields such as music, commercials, film and theatre located in Budapest and Vienna. In these industries, she is able to cater to the different needs of different clients, which shows her versatility and skill in creating the best visual look. She has a wide range of experience and has worked with a wide range of approaches and artistic visions. Emese is able to adapt and bring unique perspectives to her work. Emese plays a key role in enhancing visual storytelling and aesthetics in various forms of media and entertainment.">
	<meta name="twitter:image" content="https://ateliermesko.com/social/The-Almighty-Alpacas-Band-Photo.jpg">
	<?php include "../../head.php" ?>
	<style>
		<?php
		$cssContent = file_get_contents('../../assets/gallery.css');
		echo $cssContent;
		?>
		body {
			background-size: cover;
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-image: url('../../grey_background.jpg');
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
			text-align: center;
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

		.video-preview img {
			width: 400px;
			box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.2) 0px 1px 3px -1px;
		}

		.video-gallery {
			margin: auto;
			margin-top: 30px;
			max-width: 1200px;
		}

		iframe,
		video {
			width: 400px;
			height: 225px;
		}

		@media (max-width: 1200px) {
			.center {
				justify-content: flex-start;
			}

			.navbar {
				margin-bottom: 40px;
			}
		}

		/* Extra small devices (phones, 600px and down) */
		@media only screen and (max-width: 600px) {
			.video-preview img {
				width: 100%;
			}
		}
	</style>

</head>

<body>
	<?php include "../../menu.php";
	include "../../bottom-menu.php";
	?>

	<div class="container">
		<div class="video-gallery row">
			<div class="col-sm">
				<div class="video-container">
					<div id="video1" class="video-preview" onclick="loadVideo.call(this, 'youtube', '4Hp0wNaUYPE')">
						<img src="images/Klangkarussell_GIVVEN_Afterglow_Official_Video.jpg" alt="Videó előnézet 1">
						<div class="play-icon">&#9654;</div>
					</div>
				</div>
			</div>

			<div class="col-sm">
				<div class="video-container">
					<div id="video4" class="video-preview" onclick="loadVideo.call(this, 'youtube', 'bxNXLlgIq6A')">
						<img src="images/t-magenta.jpg" alt="Videó előnézet 1">
						<div class="play-icon">&#9654;</div>
					</div>
				</div>
			</div>

		</div>


		<div class="video-gallery row">
			<div class="col-sm">
				<div class="video-container">
					<div id="video5" class="video-preview" onclick="loadVideo.call(this, 'youtube','4BaBGHjE5ew')">
						<img src="images/Monobrother-februar.jpg" alt="Videó előnézet 1">
						<div class="play-icon">&#9654;</div>
					</div>
				</div>
			</div>
			<div class="col-sm">
				<div class="video-container">
					<div id="video6" class="video-preview" onclick="loadVideo.call(this, 'youtube','m6wwzldDJnM')">
						<img src="images/MONOBROTHER-Ehe.jpg" alt="Videó előnézet 1">
						<div class="play-icon">&#9654;</div>
					</div>
				</div>
			</div>
		</div>

		<div class="video-gallery row">
			<div class="col-sm">
				<div class="video-container">
					<div id="video5" class="video-preview" onclick="loadVideo.call(this, 'youtube','bnJmBcI37HI')">
						<img src="images/thorsteinn_einarsson_shackles_cover.jpg" alt="Videó előnézet 1">
						<div class="play-icon">&#9654;</div>
					</div>
				</div>
			</div>
			<div class="col-sm">
				<div class="video-container">
					<div id="video6" class="video-preview" onclick="loadVideo.call(this, 'youtube','dGHj0ruwxs4')">
						<img src="images/thorsteinn_einarsson_echo_cover.jpg" alt="Videó előnézet 1">
						<div class="play-icon">&#9654;</div>
					</div>
				</div>
			</div>
		</div>


		<div class="video-gallery row">
			<div class="col-sm">
				<div class="video-container">
					<div id="video2" class="video-preview" onclick="loadVideo.call(this, 'youtube','8QXhl9gk8-Y')">
						<img src="images/Bloom_beauty.jpg" alt="Videó előnézet 1">
						<div class="play-icon">&#9654;</div>
					</div>
				</div>
			</div>


			<div class="col-sm">
				<div class="video-container">
					<div id="video3" class="video-preview" onclick="loadVideo.call(this, 'youtube', 'MGleIfz8V7w')">
						<img src="images/image_film_cover.jpg" alt="Videó előnézet 1">
						<div class="play-icon">&#9654;</div>
					</div>
				</div>
			</div>

		</div>

	</div>

	<script>
		function loadVideo(type, targetId) {
			this.onclick = '';
			this.querySelector('.play-icon').style.display = 'none';
			if (type == 'youtube') {
				this.innerHTML = '<iframe src="https://www.youtube.com/embed/' + targetId + '?autoplay=1&mute=1" frameborder="0" allowfullscreen></iframe>';
			} else {
				this.innerHTML = videos[targetId];
			}
			this.click();
		}
	</script>


</body>

</html>