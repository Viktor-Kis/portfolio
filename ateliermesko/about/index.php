<!DOCTYPE html>
<html lang="hu">

<head>
	<?php include "../head.php" ?>
	<meta name="description" content="Atelier Mesko | Emese Torma | Make-up artist">
	<title>Atelier Mesko</title>
	<style>
		body {
			background-size: cover;
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-image: url('../inota_background.jpg');
		}

		.infobox-content {
			margin: auto;
			text-align: center;
			padding: 20px;
			font-weight: 600;
			width: 80%;
		}

		.text-content, .img-content{
			background-color: #ffffffe5;
			padding: 20px;
		}

		.img-content {
			border: 6px solid white;
		}

		.mobile {
			display: none;
		}

		.social {
			width: 100% !important;
			max-width: fit-content;
		}

		.desktop{
			width: 800px;
		}

		@media screen and (max-width: 768px) {
			body {
				background-image: url('../grey_background.jpg');
			}

			h1 {
				margin: 20px auto 30px auto;
				font-weight: 600;
			}

			.mobile {
				display: block;
				padding: 0;
				text-align: center;

			}

			.desktop {
				display: none;
			}

			.infobox {
				text-align: center;
				position: absolute;
				top: 40px;
				margin: auto;

			}

			.infobox-content p {
				margin-bottom: 0;
			}

			.infobox-content {
				margin-top: 34px;
				display: inline-block;
				width: 90%;
			}
		}
	</style>
</head>

<body>
	<?php
	include "../menu.php";
	?>
	<div class="container mobile">
		<h1>Emese Torma</h1>
		<div class="infobox-content mb-5">
			<div class="row">
				<div class="col">
					<p>She´s career in makeup is fascinating and dynamic. Working with photographers, filmmakers, dancers, choreographers and actors has provided with a diversity of creative opportunities. The intersection of quality and artistry is key in the field of make-up, where Emese´s skills contribute to enhancing visual storytelling in a variety of media.  She's passion for art and working with creative professionals makes every day exciting and challenging for.</p>
					<hr>
					<p>Professional training</p>
					<p>2009-2011 Handler Nándor Vocational School, Cosmetician, Hungary - Sopron</p>
					<p>2012-2013 Krea School of Contemporary Art / KREA / Hungary - Budapest</p>
					<p>2020 Maske Wien, Hairstyling workshop / Austria - Vienna</p>
					<p>2022 Maske Wien, Zombie gelatin, prosthetic wound workshop / Austria - Vienna</p>
				</div>
			</div>
			<?php include "../social-icons.php"; ?>
		</div>
		<img style="width:100%;" src="Emese-Torma.jpg" alt="Emese Torma">
	</div>
	<div class="container desktop mt-5">
		<div class=" mb-5">
			<div class="row gx-3">
				<div class="col my-auto">
					<div class="text-center text-content h-100">
						<h1>Emese Torma</h1>
						<p>She´s career in makeup is fascinating and dynamic. Working with photographers, filmmakers, dancers, choreographers and actors has provided with a diversity of creative opportunities. The intersection of quality and artistry is key in the field of make-up, where Emese´s skills contribute to enhancing visual storytelling in a variety of media.  She's passion for art and working with creative professionals makes every day exciting and challenging for.</p>
						<hr>
						<p>Professional training</p>
						<p>2009-2011 Handler Nándor Vocational School, Cosmetician, Hungary - Sopron</p>
						<p>2012-2013 Krea School of Contemporary Art / KREA / Hungary - Budapest</p>
						<p>2020 Maske Wien, Hairstyling workshop / Austria - Vienna</p>
						<p>2022 Maske Wien, Zombie gelatin, prosthetic wound workshop / Austria - Vienna</p>
						<p>2024 Professional training Orsolya Petrilla Special MakeUp effects workshop 2024</p>

					</div>
				</div>
				<div class="col">
					<div class="img-content h-100">
						<img class="img-responsive" width="100%" src="Emese-Torma.jpg" alt="Emese Torma" />
						<?php include "../social-icons.php"; ?>
					</div>
				</div>

			</div>


		</div>

	</div>
</body>

</html>