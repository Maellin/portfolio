toastr.options = {
  "closeButton": false,
  "debug": false,
  "newestOnTop": false,
  "progressBar": false,
  "positionClass": "toast-top-center",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
};

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
