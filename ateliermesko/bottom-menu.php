<?php include_once "main.php" ?>
<style>
	.bottom-menu{
		z-index:90;
		width:50%;
		min-width:460px;
		margin:30px auto 0 auto;
		padding:0 42px;
	}

	.bottom-menu .row{
		text-align:center;
		font-weight:800;
	}

	.bottom-menu .row a:hover {
		transform: scale(1.22);
	}

	.bottom-menu .row a{
		color:#252320;
		text-decoration:none;
		transition: transform 0.2s ease-in-out;
		display:inline-block;
	}
	.bottom-menu .active{
		border: 1px solid black;
	}
	.bottom-menu .col{
		background-color: #ffffff99;
		padding-top:2px;		
	}
	.bottom-menu .col.active{
		padding-top:1px;
		background-color: #ffffff66;
	}	
	.bottom-menu .col.active a {
		font-weight: 600;
	}
	.bottom-menu .row .active a:hover {
		transform: none;
	}
	
	/* Extra small devices (phones, 600px and down) */
	@media only screen and (max-width: 600px) {
		.bottom-menu{
			min-width:fit-content;
			width:100%;
			padding:0;
		}
		.bottom-menu .row{
			width: 100%;
			margin: auto;
		}
		.container{
			padding:0;
		}
	}
</style>

<div class="bottom-menu">
	<div class="row flex-nowrap">
		<div id="commercial" class="col">
			<a href="<?php echoUrl(); ?>/references/commercial">Commercial</a>
		</div>
		<div id="fashion" class="col">
			<a href="<?php echoUrl(); ?>/references/fashion">Fashion</a>
		</div>
		<div id="movie" class="col">
			<a href="<?php echoUrl(); ?>/references/movie">Movie</a>
		</div>
		<div id="theatre" class="col">
			<a href="<?php echoUrl(); ?>/references/theatre">Theatre</a>
		</div>
	</div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        var currentUrl = window.location.pathname;
        var menuItems = document.querySelectorAll('.bottom-menu .col');
        menuItems.forEach(function(item) {
            if (currentUrl.includes(item.id)) {
                item.classList.add('active');
            } else{
				item.classList.remove('active');
			}
        });
    });
</script>
