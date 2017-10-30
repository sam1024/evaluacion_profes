$(function() {
  console.log("focus a #user");
  $("#user").focus();
});

$("#form_login").submit(function(e) {
  validaCampos(e);
});

function validaCampos(e) {
  if ($("#user").val() === "") {
    showMsj("El campo usuario no puede ser vacio");
    e.preventDefault();
  } else if ($("#pass").val() === "") {
    showMsj("El campo contraseña no puede ser vacio");
    e.preventDefault();
  }
}

function showMsj(msj) {
  swal(
    'ERROR!!!',
    msj,
    'error'
  );
}
