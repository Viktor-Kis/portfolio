<!DOCTYPE html>
<html lang="hu">

<head>
	<meta name="description" content="Atelier Mesko | Emese Torma | Make-up artist">
	<title>Atelier Mesko</title>
	<?php
	include_once "../main.php";
	include "../head.php";
	$cssContent = file_get_contents('../assets/gallery.css');
	echo '<style>' . $cssContent . '</style>';
	?>
	<style>
		body {
			background-size: cover;
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-image: url('../inota_background.jpg');
		}

		.container {
			max-width: none;
		}

		.gallery {
			max-width: 800px;
		}

		.caption {
			height: 220px;
		}

		.caption p {
			margin: auto;
		}

		@media (max-width: 768px) {
			.gallery {
				column-count: 1;
			}

			.caption {
				height: auto;
				max-width: 412px;
				margin: auto;
			}

			body {
				background-image: url('../grey_background.jpg');
			}


		}

		@media (max-width: 600px) {
			body {
				padding-bottom: 200px;
			}
		}
	</style>
</head>

<body class="references">
	<header>
		<?php include "../menu.php" ?>
	</header>
	<main role="main">
		<div class="container">
			<?php include "../bottom-menu.php" ?>
			<div class="gallery" id="imageGallery">
			</div>
		</div>
	</main>
	<div id="fullscreenContainer">
		<img id="fullscreenImage">
		<button onclick="closeFullscreen()">X</button>
	</div>
	<script>
		<?php
		$content = file_get_contents('../assets/gallery.js');
		echo $content;
		?>
		document.addEventListener('DOMContentLoaded', function() {
			language = 'en';
			loadContent('references');
		});
	</script>
</body>

</html>