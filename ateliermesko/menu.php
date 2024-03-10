<?php include_once "main.php" ?>
<style>
	.navbar {
		background: linear-gradient(to bottom,
				rgba(255, 255, 255, 0.7) 30%,
				rgba(255, 255, 255, 0.5) 60%,
				rgba(255, 255, 255, 0.2) 80%,
				rgba(255, 255, 255, 0.0) 100%);
	}

	.navbar-nav {
		align-items: center;
	}

	.navbar .navbar-nav .nav-link {
		font-size: 22px;
		padding: 0.5em 0.5em;
		color: #252320;
	}

	.navbar .navbar-nav .nav-link.logo {
		padding: 0 2em;
		font-weight: 500;
		color: #252320;
		font-size: 30px;
	}

	.nav-item {
		width: 130px;
		text-align: center;
	}

	.nav-home {
		width: auto;
	}


	@media screen and (min-width: 768px) {
		.navbar-brand img {
			width: 100px;
		}

		.navbar-brand {
			margin-right: 0;
			padding: 0 1em;
		}
	}


	@media screen and (max-width: 576px) {}

	@media screen and (max-width: 768px) {
		.nav-home {
			display: none;
		}

		.navbar .navbar-nav .nav-link {
			font-size: 1.6em;
			color: white;
		}

		.navbar-collapse {
			width: 100%;
			background-color: rgba(0, 0, 0, 0.667);
			left: 0px;
			top: 86px;
			z-index: 5000;
			position: absolute;
		}
	}

	@media screen and (max-width: 992px) {
		.navbar {
			padding-bottom: 25px;
		}

		.logo {
			font-size: 22px;
		}
	}
</style>

<nav class="navbar navbar-expand-md ">
	<div class="container-fluid">
		<a class="navbar-brand d-md-none" href="<?php echoUrl(); ?>">
			<div class="logo">
				ATELIER&nbsp;<b>MESKO</b>
			</div>
		</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav mx-auto">
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="<?php echoUrl(); ?>/references">references</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echoUrl(); ?>/shorts">shorts</a>
				</li>
				<li class="nav-item nav-home">
					<a class="nav-link logo" href="<?php echoUrl(); ?>">
						ATELIER&nbsp;<b>MESKO</b>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echoUrl(); ?>/about">about</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echoUrl(); ?>/contact">contact</a>
				</li>
			</ul>
		</div>
	</div>
</nav>