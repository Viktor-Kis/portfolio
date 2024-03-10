<!DOCTYPE html>
<html lang="hu">

<head>
	<?php include "../head.php";
	include "../main.php";		?>
	<meta name="description" content="Atelier Mesko | Emese Torma | Make-up artist">
	<title>Atelier Mesko</title>
	<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
	<style>
		body {
			background-size: cover;
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-image: url('../inota_background.jpg');
		}

		.form-container {
			background-color: transparent;
			margin-top: 60px;
		}

		form {
			text-align: left;
		}

		input,
		textarea {
			background-color: #ffffffdd;
			border: none;
			color: #111111;
			font-size: 16px;
		}

		input[type="text"],
		input[type="email"],
		textarea {
			padding-left: 6px;
			width: 100%;
		}

		input[type="submit"] {
			padding: 6px 10px;
		}

		input::placeholder,
		textarea::placeholder {
			color: #333333;
		}

		input:focus,
		textarea:focus {
			outline: none;
			border-left: 3px solid #232520;
			color: #111111;
		}

		textarea::resizer {
			width: 80px;
			height: 80px;
			resize: both;
		}

		textarea::-webkit-resizer {
			border-width: 16px;
			border-style: solid;
			border-color: transparent #232520 #232520 transparent;
		}

		textarea {
			resize: both;
			width: 100%;
		}

		.social {
			max-width: fit-content;
		}

		@media (max-width: 768px) {
			body {
				background-image: url('../grey_background.jpg');
			}

			.center {
				justify-content: flex-start;
			}

			.social {
				width: 50% !important;
			}
		}
	</style>
</head>

<body>
	<?php
	include "../menu.php";
	include "../social-icons.php";
	?>

	<div class="d-flex">
		<div class="form-container mx-auto">
			<form action="#" id="message_form" method="post">
				<input placeholder="Name" type="text" id="name" name="name" required><br><br>
				<input placeholder="E-mail" type="email" id="email" name="email" required><br><br>
				<textarea placeholder="Message" id="message" name="message" rows="8" cols="40" required autocomplete="off"></textarea><br><br>
				<input type="submit" value="Submit">
			</form>
		</div>
	</div>
</body>
<script>
	$(function() {
		function after_form_submitted(data) {
			console.log(data.result);
			if (data.status == 'success') {
				window.location.href = '<?php echoUrl(); ?>/thankyou';
				console.log("ok");
			} else {
				jQuery.each(data.errors, function(key, val) {
					console.log("hiba");
					console.log(val);
				});
			}
		}

		$('#message_form').submit(function(e) {
			e.preventDefault();
			$form = $(this);
			$.ajax({
				type: "POST",
				url: '<?php echoUrl(); ?>/contact/form/handler.php',
				data: $form.serialize(),
				success: after_form_submitted,
				dataType: 'json'
			});
		});
	});
</script>

</html>