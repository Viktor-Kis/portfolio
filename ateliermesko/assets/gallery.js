var gallery, language;

function openFullscreen(imageSrc) {
	var fullscreenContainer = document.getElementById('fullscreenContainer');
	var fullscreenImage = document.getElementById('fullscreenImage');

	fullscreenImage.src = imageSrc;
	fullscreenContainer.style.display = 'block';
}

function closeFullscreen() {
	var fullscreenContainer = document.getElementById('fullscreenContainer');
	fullscreenContainer.style.display = 'none';
}

function loadContent(category) {
	gallery = document.getElementById('imageGallery');
	gallery.innerHTML = '';
	var xhr = new XMLHttpRequest();

	xhr.open('GET', 'http://pool.home/ateliermesko/assets/get_images.php?lang=' + language, true);
	xhr.onreadystatechange = function () {
		if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
			var data = JSON.parse(xhr.responseText);

			data.forEach(function(item) {
				if (item.category === category) {
					var galleryItem = document.createElement('div');
					galleryItem.classList.add('item');

					if (item.type === 'image') {
						var img = document.createElement('img');
						if (item.hasOwnProperty('thumbnail') && item.thumbnail !== null && item.thumbnail !== undefined) {
							  img.src = item.thumbnail;
						} else {
							  img.src = item.image;
						}
						
						img.alt = item.alt;
						img.loading = 'lazy'; 
						img.classList.add('thumbnail');
						img.addEventListener('click', function() {
							openFullscreen(item.image);
						});

						galleryItem.appendChild(img);

						if (item.text) {
							var text = document.createElement('div');
							text.classList.add('caption');
							text.textContent = (language === 'en') ? item.text : item.de_text;
							galleryItem.appendChild(text);
						}
					} else if (item.type === 'text') {
						var text = document.createElement('div');
						text.classList.add('caption');
						text.classList.add('d-flex');
						text.classList.add('justify-content-center');
						galleryItem.appendChild(text);
						var p = document.createElement('p');
						p.textContent = (language === 'en') ? item.text : item.de_text;
						text.appendChild(p);
					}

					gallery.appendChild(galleryItem);
				}
			});
		}
	}
	xhr.send();
}
