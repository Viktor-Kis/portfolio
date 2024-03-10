<!DOCTYPE html>
<html lang="hu">
<head>
	<title>Emese Torma Make-up</title>
	<meta name="description" content="As a fashion makeup artist, Emese pays great attention to detail, understands the importance of enhancing natural beauty and has a keen eye for subtlety in her work. Emese plays a key role in working with fashion brands and magazines.">
	<meta property="og:url" content="https://ateliermesko.com/fashion">
	<meta property="og:type" content="website">
	<meta property="og:title" content="Emese Torma Make-up">
	<meta property="og:description" content="As a fashion makeup artist, Emese pays great attention to detail, understands the importance of enhancing natural beauty and has a keen eye for subtlety in her work. Emese plays a key role in working with fashion brands and magazines.">
	<meta property="og:image" content="https://ateliermesko.com/references/fashion/images/supersusi_taibeh5330.jpg">
	<meta name="twitter:card" content="summary_large_image">
	<meta property="twitter:domain" content="ateliermesko.com">
	<meta property="twitter:url" content="https://ateliermesko.com/fashion">
	<meta name="twitter:title" content="Emese Torma Make-up">
	<meta name="twitter:description" content="As a fashion makeup artist, Emese pays great attention to detail, understands the importance of enhancing natural beauty and has a keen eye for subtlety in her work. Emese plays a key role in working with fashion brands and magazines.">
	<meta name="twitter:image" content="https://ateliermesko.com/social/supersusi_taibeh5330.jpg">
	<?php include "../../head.php" ?>
    <style>
        body {            
			background-size: cover;
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-image: url('images/fashion_background.jpg');
        }
		@media (max-width: 1500px) {
			body {
				background-image: url('../../grey_background.jpg');			
			}
			
			.navbar{
				margin-bottom:40px;				
			}
		}
	<?php
		$cssContent = file_get_contents('../../assets/gallery.css');
		echo $cssContent;
	?>
    </style>
</head>
<body>

		

			<?php 
			include "../../menu.php"; 
			include "../../bottom-menu.php"; 
		?>

	<main role="main">
		<div class="container">
			<div class="gallery" id="imageGallery" style=" padding:30px;">
				<!-- Elemek dinamikusan kerülnek ide -->
			</div>
		</div>
	</main>

    <!-- Nagyított kép megjelenítése -->
    <div id="fullscreenContainer">
        <img id="fullscreenImage">
        <button onclick="closeFullscreen()">Close</button>
    </div>

    <script>
		<?php
			$content = file_get_contents('../../assets/gallery.js');
			echo $content;
		?>
		document.addEventListener('DOMContentLoaded', function() {
			
			language = 'en';
			loadContent('fashion');
		});
    </script>
</body>
</html>
