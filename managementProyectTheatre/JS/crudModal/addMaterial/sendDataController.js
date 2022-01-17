//Función ajax para recoger los datos de los campos input y enviarlos al archivo de proceso de datos

$(document).ready(function() {
    $('#add_btn').on('click', function(e) {
      e.preventDefault();
      var option1 = document.querySelector('.option').value;
      if (option1 === "iluminacion" | option1 === "sonido" | option1 === "video") {
        let marcaAdd = document.querySelector("#marca").value;
        let tipoMaterialAdd = document.querySelector("#tipo_material").value;
        let modeloAdd = document.querySelector("#modelo").value;
        let cantidadAdd = document.querySelector("#cantidad").value;
        let anioCompraAdd = document.querySelector("#anio_compra").value;
        let utilidadAdd = document.querySelector("#utilidad").value;
        let tipoConexionAdd = document.querySelector("#tipo_conexion").value;
        let ubicacionAdd = document.querySelector("#ubicacion").value;
        let ultimaRevisionAdd = document.querySelector("#ultima_revision").value;
        let observacionesAdd = document.querySelector("#observaciones").value;
        $.ajax({
                type: "POST",
                url: "../../controller/addMaterial.php",
                data: { 
                    "option1": option1,
                    "marcaAdd": marcaAdd,
                    "tipoMaterialAdd": tipoMaterialAdd,
                    "modeloAdd": modeloAdd,
                    "cantidadAdd": cantidadAdd,
                    "anioCompraAdd": anioCompraAdd,
                    "utilidadAdd": utilidadAdd,
                    "tipoConexionAdd": tipoConexionAdd,
                    "ubicacionAdd": ubicacionAdd,
                    "ultimaRevisionAdd": ultimaRevisionAdd,
                    "observacionesAdd": observacionesAdd
            },
          success: function(response) {
            alert("Se ha añadido satisfactoriamente");
            $('input[type="text"]').val('');
          }
        });
      } 
      
      if (option1 === "atrezzo" | option1 === "matMontaje" | option1 === "otro") {
        let tipoMaterialAdd = document.querySelector("#tipo_material").value;
        let cantidadAdd = document.querySelector("#cantidad").value;
        let utilidadAdd = document.querySelector("#utilidad").value;
        let ubicacionAdd = document.querySelector("#ubicacion").value;
        let observacionesAdd = document.querySelector("#observaciones").value;
        $.ajax({
            type: "POST",
            url: "../../controller/addMaterial.php",
            data: { 
                "option1": option1,
                "tipoMaterialAdd": tipoMaterialAdd,
                "cantidadAdd": cantidadAdd,
                "utilidadAdd": utilidadAdd,
                "ubicacionAdd": ubicacionAdd,
                "observacionesAdd": observacionesAdd
        },
      success: function(response) {
        alert("Se ha añadido satisfactoriamente");
        $('input[type="text"]').val('');
      }
    });
      } 
       
      if (option1 === "cableado") {
        let tipoMaterialAdd = document.querySelector("#tipo_material").value;
        let cantidadAdd = document.querySelector("#cantidad").value;
        let metrosCableAdd = document.querySelector("#metros_cable");
        let ubicacionAdd = document.querySelector("#ubicacion").value;
        $.ajax({
            type: "POST",
            url: "../../controller/addMaterial.php",
            data: JSON.stringify({ 
              "option1": option1,
              "tipoMaterialAdd": tipoMaterialAdd,
              "cantidadAdd": cantidadAdd,
              "metrosCableAdd":  metrosCableAdd,
              "ubicacionAdd": ubicacionAdd
      }),
      dataType:'json',
      success: function(response) {
          console.log(option1)
        //alert("Se ha añadido satisfactoriamente");
        //$('input[type="text"]').val('');
      }
    });
      }
    });
  });