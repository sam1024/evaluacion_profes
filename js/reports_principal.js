$(function() {
  $.ajax({
    type: "POST",
    url: 'tabla.php',
    data: {"id_area": $("#id_area").val()},
    success: function(reporte) {
        $("main").html(reporte);
    }
  });
});
