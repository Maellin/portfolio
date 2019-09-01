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

let params = new URLSearchParams(document.location.search.substring(1));
if (params.has('mail-sent')){
	toastr["success"]("Votre e-mail a bien été envoyé !");
}
else if (params.has('mail-failed')){
	toastr["error"]("Oups ! Une erreur est survenue. Votre e-mail n'a pas été envoyé.");
}

function showImage(){
  document.getElementById('loadingImage').style.visibility="visible";
}

