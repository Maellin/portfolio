var show = function(url) {
	var backdrop = document.getElementById('backdrop');
	backdrop.style.display = 'flex';

	var img = document.getElementById('img-modal');
	img.src = url;


	var body = document.getElementById('body')
	body.style.overflow = 'hidden'
}

var hide = function() {
	var backdrop = document.getElementById('backdrop');
	backdrop.style.display = 'none';

	var body = document.getElementById('body')
	body.style.overflow = 'scroll'
} 