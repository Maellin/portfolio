var show = function(url) {
	var backdrop = document.getElementById('backdrop');
	backdrop.style.display = 'block';

	var img = document.getElementById('img-modal');
	img.src = url;
}

var hide = function() {
	var backdrop = document.getElementById('backdrop');
	backdrop.style.display = 'none';
} 