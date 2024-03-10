<!DOCTYPE html>
<html  lang="en">
	<head>
		<title>Emese Torma Make-up</title>
		<meta name="description" content="Atelier Mesko is an artistic vision that presents a unique approach to makeup art and visual aesthetics. Founder Emese Torma is make-up artist who has a wide range of make-up experience, has worked with people from different cultural backgrounds and artistic visions. Atelier Mesko showcases Emese's references, vision and various collaborations with filmmakers, photographers, models, actors and creative people.">
		<meta property="og:url" content="https://ateliermesko.com/">
		<meta property="og:type" content="website">
		<meta property="og:title" content="Emese Torma Make-up">
		<meta property="og:description" content="Atelier Mesko is an artistic vision that presents a unique approach to makeup art and visual aesthetics. Founder Emese Torma is make-up artist who has a wide range of make-up experience, has worked with people from different cultural backgrounds and artistic visions. Atelier Mesko showcases Emese's references, vision and various collaborations with filmmakers, photographers, models, actors and creative people.">
		<meta property="og:image" content="https://ateliermesko.com/social/ateliermesko.jpg">
		<meta name="twitter:card" content="summary_large_image">
		<meta property="twitter:domain" content="ateliermesko.com">
		<meta property="twitter:url" content="https://ateliermesko.com/">
		<meta name="twitter:title" content="Emese Torma Make-up">
		<meta name="twitter:description" content="Atelier Mesko is an artistic vision that presents a unique approach to makeup art and visual aesthetics. Founder Emese Torma is make-up artist who has a wide range of make-up experience, has worked with people from different cultural backgrounds and artistic visions. Atelier Mesko showcases Emese's references, vision and various collaborations with filmmakers, photographers, models, actors and creative people.">
		<meta name="twitter:image" content="https://ateliermesko.com/social/ateliermesko.jpg">
		<?php
			include_once "main.php";
			include "head.php";
			generateOpenGraphTags("Atelier Mesko", "Atelier Mesko", "cloud.jpg");
		?>		
	</head>
	<style>		
		body {
			width: 100vw;
			height: 100vh;
			overflow: hidden;
			display: flex;
			justify-content: center;
			align-items: center;
			color:#252320;
		}
		.nowebgl{
			background-size: cover;
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-image: url('cloud.jpg');
		}

		h1{
			font-size:69px;
		}		
		h2{
			font-weight:800;
			font-size:69px;
		}
		.bottom-menu .col{
			background-color: transparent !important;
		}
		
		.bottom-menu{
			position: fixed;
			bottom: 32px;
			left: 40px;
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
	

		canvas {
			position: absolute;
			top:0;
			left:0;
			z-index:-99;
		}
		.lead {
			max-width: 630px;
			margin:auto;
		}
		.makeup{
			margin-top: 131px;
			margin-left: -131px;
			width: 300px;
			transform: rotate(90deg);
			font-size: 40px;
		}
		#toggleButton{
			width:100px;
			height:100px;
		}
	
		#toggleButton:focus {
			outline: none;
		}
		.atelier{
			text-align:right;
		}
		.name{
			float:right;
			font-size:22px;
			letter-spacing:8px;
		}


		/* Extra small devices (phones, 600px and down) */
		@media only screen and (max-width: 600px) {
			.bottom-menu { 
				width: 90%;
				left: 5%;
			}			
			.bottom-menu .row{
				margin: auto;
			}
			.name{
				font-size:17px;
				font-weight:600;
				letter-spacing:0;
				transform: translate(0px, -14px);
			}
			.makeup{
				font-size:26px;
				transform: rotate(90deg) translate(0px, 7px);
				font-weight:600;
			}
			.atelier{
				font-size:34px;
				text-align:right;
			}
			.mesko{
				font-size:34px;
				text-align:left;
			}
			.lead .col{
				width:50%;
			}
		}
	</style>
	<body>
		<div class="container">
			<button id="toggleButton" aria-label="Play music" style="background-color:transparent; border:none; position:fixed; top:10px; left:10px;">
				<img id="soundImage" width="80" height="80" src="nosound.svg" alt="Listen"></img>
			</button>
			<audio id="audioPlayer" src="Rob_Jenkins_-_Diflastod_05.mp3" loop></audio>
			<div class="lead">
				<div class="row flex-nowrap">
					<div class="col">
						<h1 class="atelier">ATELIER</h1>
						<p class="name" >EMESE TORMA</p>
					</div>
					<div class="col">
						<h1 class="mesko"><b>MESKO</b></h1>
						<p class="makeup" style="">MAKE UP ARTIST</p>
					</div>
				</div>
			</div>
		</div>
		
		<div>
			<div class="bottom-menu">
				<div class="row flex-nowrap">
					<div class="col">
						<a href="<?php echo getUrl();?>/references">references</a>
					</div>
					<div class="col">
						<a href="<?php echo getUrl();?>/shorts">shorts</a>
					</div>
					<div class="col">
						<a href="<?php echo getUrl();?>/about">about</a>
					</div>
					<div class="col">
						<a href="<?php echo getUrl();?>/contact">contact</a>
					</div>
				</div>
			</div>
		</div>

		<script src="three.min.js"></script>
		<script src="postprocessing.min.js"></script>
		<script>
			let scene, camera, cloudParticles = [],composer;

			function init() {
				scene = new THREE.Scene();
				camera = new THREE.PerspectiveCamera(60,window.innerWidth / window.innerHeight,1,1000);
				camera.position.z = 1;
				camera.rotation.x = 1.16;
				camera.rotation.y = -0.12;
				camera.rotation.z = 0.27;
				renderer = new THREE.WebGLRenderer();
				renderer.setSize(window.innerWidth,window.innerHeight);
				scene.fog = new THREE.FogExp2(0x7cc8de, 0.001);
				renderer.setClearColor(scene.fog.color);
				document.body.appendChild(renderer.domElement);

				let loader = new THREE.TextureLoader();
				loader.load("cloud.jpg", function(texture){
				  cloudGeo = new THREE.PlaneBufferGeometry(1761,2048);
				  cloudMaterial = new THREE.MeshLambertMaterial({
					map:texture,
					transparent: true
				  });

				  for(let p=0; p<50; p++) {
					let cloud = new THREE.Mesh(cloudGeo, cloudMaterial);
					cloud.position.set(
					  -200, 200,-300
					);
					cloud.rotation.x = 1.16;
					cloud.rotation.y = -0.12;
					cloud.rotation.z = 6;
					cloud.material.opacity = 0.07;
					cloudParticles.push(cloud);
					scene.add(cloud);
				  }
				});

				const bloomEffect = new POSTPROCESSING.BloomEffect({
					blendFunction: POSTPROCESSING.BlendFunction.COLOR_DODGE,
					kernelSize: POSTPROCESSING.KernelSize.SMALL,
					useLuminanceFilter: true,
					luminanceThreshold: 0.3,
					luminanceSmoothing: 0.75
				  });
				bloomEffect.blendMode.opacity.value = 1.5;

				let effectPass = new POSTPROCESSING.EffectPass(
				camera,
				bloomEffect
				);
				effectPass.renderToScreen = true;

				let ambient = new THREE.AmbientLight(0x386080);
				ambient.intensity = 1;
				scene.add(ambient);

				let directionalLight = new THREE.DirectionalLight(0xff8c19);
				directionalLight.position.set(0,0,1);
				scene.add(directionalLight);

				
				composer = new POSTPROCESSING.EffectComposer(renderer);
				composer.addPass(new POSTPROCESSING.RenderPass(scene, camera));
				composer.addPass(effectPass);

				window.addEventListener("resize", onWindowResize, false);
				render();

			}
			function onWindowResize() {
				camera.aspect = window.innerWidth / window.innerHeight;
				camera.updateProjectionMatrix();
				renderer.setSize(window.innerWidth, window.innerHeight);
			}
		  
			function render() {
				cloudParticles.forEach(p => {
					p.rotation.z -=0.001;
				});
				composer.render(0.1);
				requestAnimationFrame(render);
			}
			
			const gl = document.createElement('canvas').getContext('webgl2');
			if (!gl) {
				if (typeof WebGL2RenderingContext !== 'undefined') {				
					console.log('your browser appears to support WebGL2 but it might be disabled. Try updating your OS and/or video card drivers');
				} else {
					console.log('your browser has no WebGL2 support at all'); 
				}
				var bodyElement = document.body;
				bodyElement.classList.add('nowebgl');
			} else {
				init();
			}
			
			document.addEventListener('DOMContentLoaded', function() {
				var audioPlayer = document.getElementById('audioPlayer');
				var toggleButton = document.getElementById('toggleButton');
				audioPlayer.addEventListener('loadedmetadata', function() {
					audioPlayer.currentTime = 56; 
				});
				toggleButton.addEventListener('click', function() {
				console.log("ccc");
					if (audioPlayer.paused) {
						audioPlayer.play();
						document.getElementById('soundImage').src = 'sound.svg';
					} else {
						audioPlayer.pause();
						document.getElementById('soundImage').src = 'nosound.svg';
					}
				});
			});
		</script>
  </body>
</html>
