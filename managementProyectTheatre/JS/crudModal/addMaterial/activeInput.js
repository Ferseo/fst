//Función para activar y desactivar campos de la pestaña añadir del modal

$(document).ready(function() {
    $('.option').on('click', function(e) {
      e.preventDefault();
      var option = document.querySelector('.option').value;
      if (option === "iluminacion" | option === "sonido" | option === "video") {
        $('input').prop('disabled', false);
        $("#cod_material").prop('disabled', true);
        $("#metros_cable").prop('disabled', true);
      } else if (option === "atrezzo" | option === "matMontaje" | option === "otro") {
        $('input').prop('disabled', false);
        $("#cod_material").prop('disabled', true);
        $("#marca").prop('disabled', true);
        $("#modelo").prop('disabled', true);
        $("#metros_cable").prop('disabled', true);
        $("#anio_compra").prop('disabled', true);
        $("#tipo_conexion").prop('disabled', true);
        $("#ultima_revision").prop('disabled', true);
      } else if (option === "cableado") {
        $('input').prop('disabled', false);
        $("#cod_material").prop('disabled', true);
        $("#marca").prop('disabled', true);
        $("#modelo").prop('disabled', true);
        $("#anio_compra").prop('disabled', true);
        $("#tipo_conexion").prop('disabled', true);
        $("#ultima_revision").prop('disabled', true);
        $("#observaciones").prop('disabled', true);
        $("#utilidad").prop('disabled', true);
      } else if (option === "Buscar...") {
        $('input').prop('disabled', false);
      }
    });
  });


