var completas;
$(function() {
  completas = 1;
  showDatosTabla();
  $("#h_completas").val(completas);
});

$("#completas").on("click", function() {
  console.log("click");
  completas = 1;
  showDatosTabla();
  $("#h_completas").val(completas);
});

$("#faltantes").on("click", function() {
  completas = 0;
  showDatosTabla();
  $("#h_completas").val(completas);
});

function showDatosTabla() {
  $.ajax({
    type: "POST",
    url: 'tabla.php',
    data: {"id_area": $("#id_area").val(), "completas": completas},
    success: function(reporte) {
        $("#div_container").html(reporte);
    }
  });
}
