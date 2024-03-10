<?php
function getCurrentURL()
{
	$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
	$host = $_SERVER['HTTP_HOST'];
	$uri = $_SERVER['REQUEST_URI'];
	return $protocol . '://' . $host . $uri;
}

function generateOpenGraphTags($title, $description, $image)
{
	$url = getCurrentURL();
	echo '<meta property="og:title" content="' . htmlspecialchars($title) . '" />' . PHP_EOL;
	echo '<meta property="og:description" content="' . htmlspecialchars($description) . '" />' . PHP_EOL;
	echo '<meta property="og:url" content="' . htmlspecialchars($url) . '" />' . PHP_EOL;
	echo '<meta property="og:image" content="' . htmlspecialchars($url) . htmlspecialchars($image) . '" />' . PHP_EOL;
	echo '<meta name="twitter:card" content="summary_large_image" />' . PHP_EOL;
	echo '<meta name="twitter:title" content="' . htmlspecialchars($title) . '" />' . PHP_EOL;
	echo '<meta name="twitter:description" content="' . htmlspecialchars($description) . '" />' . PHP_EOL;
	echo '<meta name="twitter:image" content="' . htmlspecialchars($url) . htmlspecialchars($image) . '" />' . PHP_EOL;
}
?>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script defer src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js'></script>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css'>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<style>
	/* latin-ext */
	@font-face {
		font-family: 'Karla';
		font-style: normal;
		font-weight: 400;
		font-display: swap;
		src: url(https://fonts.gstatic.com/s/karla/v30/qkB9XvYC6trAT55ZBi1ueQVIjQTD-JrIH2G7nytkHRyQ8p4wUjm6bnEr.woff2) format('woff2');
		unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
	}

	/* latin */
	@font-face {
		font-family: 'Karla';
		font-style: normal;
		font-weight: 400;
		font-display: swap;
		src: url(https://fonts.gstatic.com/s/karla/v30/qkB9XvYC6trAT55ZBi1ueQVIjQTD-JrIH2G7nytkHRyQ8p4wUje6bg.woff2) format('woff2');
		unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
	}

	/* latin-ext */
	@font-face {
		font-family: 'Karla';
		font-style: normal;
		font-weight: 600;
		font-display: swap;
		src: url(https://fonts.gstatic.com/s/karla/v30/qkB9XvYC6trAT55ZBi1ueQVIjQTD-JrIH2G7nytkHRyQ8p4wUjm6bnEr.woff2) format('woff2');
		unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
	}

	/* latin */
	@font-face {
		font-family: 'Karla';
		font-style: normal;
		font-weight: 600;
		font-display: swap;
		src: url(https://fonts.gstatic.com/s/karla/v30/qkB9XvYC6trAT55ZBi1ueQVIjQTD-JrIH2G7nytkHRyQ8p4wUje6bg.woff2) format('woff2');
		unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
	}

	/* latin-ext */
	@font-face {
		font-family: 'Karla';
		font-style: normal;
		font-weight: 700;
		font-display: swap;
		src: url(https://fonts.gstatic.com/s/karla/v30/qkB9XvYC6trAT55ZBi1ueQVIjQTD-JrIH2G7nytkHRyQ8p4wUjm6bnEr.woff2) format('woff2');
		unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
	}

	/* latin */
	@font-face {
		font-family: 'Karla';
		font-style: normal;
		font-weight: 700;
		font-display: swap;
		src: url(https://fonts.gstatic.com/s/karla/v30/qkB9XvYC6trAT55ZBi1ueQVIjQTD-JrIH2G7nytkHRyQ8p4wUje6bg.woff2) format('woff2');
		unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
	}

	/* latin-ext */
	@font-face {
		font-family: 'Karla';
		font-style: normal;
		font-weight: 800;
		font-display: swap;
		src: url(https://fonts.gstatic.com/s/karla/v30/qkB9XvYC6trAT55ZBi1ueQVIjQTD-JrIH2G7nytkHRyQ8p4wUjm6bnEr.woff2) format('woff2');
		unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
	}

	/* latin */
	@font-face {
		font-family: 'Karla';
		font-style: normal;
		font-weight: 800;
		font-display: swap;
		src: url(https://fonts.gstatic.com/s/karla/v30/qkB9XvYC6trAT55ZBi1ueQVIjQTD-JrIH2G7nytkHRyQ8p4wUje6bg.woff2) format('woff2');
		unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
	}

	body {
		margin: 0;
		font-family: 'Karla', sans-serif;
	}

	.infobox .dropdown-menu {
		background-color: #ffffffe0;
	}

	.infobox .dropdown-toggle::after {
		display: none !important;
	}

	.infobox .button-icon {
		height: 20px;
		padding: 0 0 2px 1px;
	}

	.infobox {
		position: fixed;
		top: 200px;
		left: 16%;
	}

	.infobox .btn.show {
		border: none !important;
	}

	.infobox .btn:hover {
		border: 1px solid #ffffff00;
		transform: scale(1.2);
	}

	.infobox .btn {
		transition: transform 0.2s ease-in-out;
	}

	.infobox-content p {
		margin-bottom: 2px;
		font-weight: 600;
	}

	.infobox-content {
		display: block;
		width: 450px;
		padding-left: 30px;
	}

	@media screen and (max-width: 768px) {
		.infobox {
			left: 0;
		}

		.dropdown-menu.show {
			width: max-content;
			transform: none !important;
			margin-top: 51px !important;
		}

		.infobox-content {
			width: 100%;
			padding-left: 14px;
			padding-right: 14px;
			padding-top: 20px;
		}

		.infobox-content p {
			margin-bottom: 20px;
		}
	}
</style>