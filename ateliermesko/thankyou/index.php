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
				background-image: url('thankyou_background.jpg');
				overflow:hidden;
			}
			.infobox {
				position: fixed;
				top: 210px;
				left: 12vw;
			}
			
			.infobox-content{
				text-align: center;
				padding: 20px;
				font-weight: 600;
				background-color: #ffffffe5;
				box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.2) 0px 1px 3px -1px;
				width: 31vw;
				max-width:300px;
			}
			.mobile{
				display:none;
			}			
			
			@media screen and (max-width: 992px) {
				body {            
					background-image: url('thankyou_background-mobile.jpg');
				}
				h1{
					margin: 20px auto 60px auto;
					font-weight:600;
				}
				.mobile{
					display:block;
					padding:0;
					text-align:center;
					
				}
				.desktop{
					display:none;
				}
				.infobox {	
					text-align:center;
					position: absolute;
					top: 40px;
					margin:auto;

				}
				.infobox-content p{
					margin-bottom:0;
					
				}
				.infobox-content{
					margin-top:170px;
					display:inline-block;
					width:90%;
					
				}
	
			}
		</style>
	</head>
	<body>
		<?php 
			include "../menu.php"; 
		?>
		<div class="container mobile">
			<div class="infobox-content">
				<div class="row">
					<div class="col">
						<p>Thank you for your message!</p>						
						<p>I'll be in touch soon...<br><br><b>Mesko</b></p>
					</div>          
				</div>
			</div>
		</div>
		<div class="container infobox desktop">
			<div class="infobox-content">
				<div class="row">
					<div class="col">
						<p>Thank you for your message!</p>						
						<p>I'll be in touch soon...<br><br><b>Mesko</b></p>
					</div>          
				</div>
			</div>
		</div>	
	</body>
</html>


