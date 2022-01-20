
$(document).ready(function() {
    $('#selectedOption').on('click', function(e) {
      e.preventDefault();
      var option = document.querySelector('#selectedOption').value;
      if (option === "iluminacion" | option === "sonido" | option === "video") {
        $('input').prop('disabled', false);
        $("#metrosFind").prop('disabled', true);
        $("#anio_compraFind").prop('disabled', true);
      } else if (option === "atrezzo" | option === "matMontaje" | option === "otro") {
        $('input').prop('disabled', false);
        $("#metrosFind").prop('disabled', true);
        $("#anio_compraFind").prop('disabled', true);
        $("#marcaFind").prop('disabled', true);
        $("#tipo_conexionFind").prop('disabled', true);
      } else if (option === "cableado") {
        $('input').prop('disabled', false);
        $("#tipo_materialFind").prop('disabled', true);
        $("#marcaFind").prop('disabled', true);
        $("#anio_compraFind").prop('disabled', true);
        $("#utilidadFind").prop('disabled', true);
      } else if (option === "Buscar...") {
        $('input').prop('disabled', false);
      }
    });
  });

