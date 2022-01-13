<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<style>
  .nav {
    width: 100%;
    height: 100%;
    align-items: baseline;
    box-shadow: 5px 5px 5px black;
  }

  .navContent {
    height: 450px;
    border: 1px solid gray;
    box-shadow: 5px 5px 5px black;

  }

  .nav-link {
    padding-top: 0.25rem;
    padding-right: 0.5rem;
    padding-bottom: 0.25rem;
    padding-left: 0.5rem;
  }

  /*.titleModal{
    background-color: #d2d7df;
  }*/
  .tab-content {
    background-color: #d2d7df;
  }

  .divOptions {
    background-color: #d2d7df;
    padding: 0;
    height: 100%;
  }

  .settings {
    visibility: hidden;
  }

  .divTitle {
    background-color: #d2d7df;
  }
</style>
<nav>
  <div class="row" style="width: 100%;">
    <div class="col divTitle">
      <h2 class="titleModal">Gestión de inventario</h2>
    </div>
    <div class="col-4 divOptions">
      <ul class="nav nav-tabs" id="myTab" role="tablist">

        <li class="nav-item" role="presentation" style="box-shadow: 3px 2px 2px ;">
          <button class="nav-link active" style=" color:black;" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Añadir</button>
        </li>
        <li class="nav-item" role="presentation" style="box-shadow: 3px 2px 2px ;">
          <button class="nav-link" style=" color:black;" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Buscar</button>
        </li>
        <li class="nav-item" role="presentation" style="box-shadow: 3px 2px 2px ;">
          <button class="nav-link" style=" color:black;" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages" type="button" role="tab" aria-controls="messages" aria-selected="false">Prestar</button>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!--Contenedor general de las tres pestañas de opciones-->
<div class="tab-content navContent">
  <!--Contenido de la opción para añadir material nuevo-->
  <div class="tab-pane active" id="home" style="width: 100%;" role="tabpanel" aria-labelledby="home-tab">
    <form name="addMaterial-form">
      <div class="row">
        <div class="col">
          <!--div del elemento para indicar que tipo de elemento se añade al inventario-->
          <div class="typeElement">
            <label class="input-group-text" for="inputGroupSelect01" style="width: 50%;">Tipo Elemento: </label>
            <select class="form-control option" id="option" style="width: 60%;">
              <option selected>Buscar...</option>
              <option value="atrezzo">Atrezzo</option>
              <option value="cableado">Cableado</option>
              <option value="iluminacion">Iluminación</option>
              <option value="matMontaje">Material de Montaje</option>
              <option value="sonido">Sonido</option>
              <option value="video">Video</option>
              <option value="otro">Otro</option>
            </select>
          </div>
        </div>
        <div class="col">
          <!--div para indicar la marca del material-->
          <div class="input-group input-group-sm mb-3" style="margin-top: 2%; width:80%;">
            <span class="input-group-text" id="inputGroup-sizing-sm">Marca: </span>
            <input type="text" class="form-control " id="marca" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width:40%">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <!--div del elemento para indicar el tipo de material-->
          <div class="input-group input-group-sm mb-3" style="margin-top: 2%; width:80%;">
            <span class="input-group-text" id="inputGroup-sizing-sm">Tipo de material: </span>
            <input type="text" class="form-control" id="tipo_material" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width:40%">
          </div>
        </div>
        <div class="col">
          <!--div para indicar el modelo del material-->
          <div class="input-group input-group-sm mb-3" style="margin-top: 2%; width:80%;">
            <span class="input-group-text" id="inputGroup-sizing-sm">Modelo: </span>
            <input type="text" class="form-control" id="modelo" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width:40%">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <!--div del código del material-->
          <div class="input-group input-group-sm mb-3" style="margin-top: 2%; width:80%;">
            <span class="input-group-text" id="inputGroup-sizing-sm">Código material: </span>
            <input type="text" class="form-control " id="cod_material" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width:40%">
          </div>
        </div>
        <div class="col">
          <!--div para los metros correspondientes al cableado-->
          <div class="input-group input-group-sm mb-3" style="margin-top: 2%; width:80%;">
            <span class="input-group-text" id="inputGroup-sizing-sm">Metros cable: </span>
            <input type="text" class="form-control" id="metros_cable" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width:40%">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <!--div para la cantidad de material existente-->
          <div class="input-group input-group-sm mb-3" style="margin-top: 2%; width:80%;">
            <span class="input-group-text" id="inputGroup-sizing-sm">Cantidad: </span>
            <input type="text" class="form-control" id="cantidad" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width:40%">
          </div>
        </div>
        <div class="col">
          <!--div para el año de compra del materia-->
          <div class="input-group input-group-sm mb-3" style="margin-top: 2%; width:80%;">
            <span class="input-group-text" id="inputGroup-sizing-sm">Año de compra: </span>
            <input type="text" class="form-control" id="anio_compra" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width:40%">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <!--div para la utilidad del material-->
          <div class="input-group input-group-sm mb-3" style="margin-top: 2%; width:80%;">
            <span class="input-group-text" id="inputGroup-sizing-sm">Utilidad: </span>
            <input type="text" class="form-control " id="utilidad" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width:40%">
          </div>
        </div>
        <div class="col">
          <!--div para el tipo de conexión que usa el material-->
          <div class="input-group input-group-sm mb-3" style="margin-top: 2%; width:80%;">
            <span class="input-group-text" id="inputGroup-sizing-sm">Tipo de conexión: </span>
            <input type="text" class="form-control" id="tipo_conexion" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width:40%">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <!--div para la ubicación del material-->
          <div class="input-group input-group-sm mb-3" style="margin-top: 2%; width:80%;">
            <span class="input-group-text" id="inputGroup-sizing-sm">ubicación: </span>
            <input type="text" class="form-control" id="ubicacion" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width:40%">
          </div>
        </div>
        <div class="col">
          <!--div para indicar la última revisión que se realizó al meterial-->
          <div class="input-group input-group-sm mb-3" style="margin-top: 2%; width:80%;">
            <span class="input-group-text" id="inputGroup-sizing-sm">Última revisión: </span>
            <input type="text" class="form-control" id="ultima_revision" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width:40%">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <!--div para las observaciones pertinenetes para cada material-->
          <div class="input-group input-group-sm mb-3" style="margin-top: 2%; width:80%;">
            <span class="input-group-text" id="inputGroup-sizing-sm">Observaciones: </span>
            <input type="text" class="form-control " id="observaciones" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width:40%">
          </div>
        </div>
        <div class="col">
          <button type="button" class="btn btn-dark " id="add_btn">Añadir</button>
        </div>
      </div>
    </form>
  </div>
  <!--Contenido de la opción para buscar un material-->
  <div class="tab-pane" id="profile" style="width: 100%; margin-top:0.5%;" role="tabpanel" aria-labelledby="profile-tab">
    <div class="row">
      <div class="col">
        <!--div de opciones para indicar en que tabla buscar-->
        <div class="typeElement">
          <label class="input-group-text" for="inputGroupSelect01" style="width: 30%;">Tipo Elemento: </label>
          <select class="form-control" id="inputGroupSelect01" style="width: 80%;">
            <option selected>Buscar...</option>
            <option value="atrezzo">Atrezzo</option>
            <option value="cableado">Cableado</option>
            <option value="iluminacion">Iluminación</option>
            <option value="matMontaje">Material de Montaje</option>
            <option value="sonido">Sonido</option>
            <option value="video">Video</option>
            <option value="otro">Otro</option>
          </select>
        </div>
      </div>
      <div class="col">
        <!--div para buscar por codigo de material-->
        <div class="input-group input-group-sm mb-3" style="margin-top: 2%; width:80%;">
          <span class="input-group-text" id="inputGroup-sizing-sm">Tipo de material: </span>
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">

        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <!--div para buscar por utilidad del material-->
        <div class="input-group input-group-sm mb-3" style="margin-top: 2%; width:80%;">
          <span class="input-group-text" id="inputGroup-sizing-sm">Utilidad: </span>
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
        </div>
      </div>
      <div class="col">
        <!--div para buscar por ubicación del material-->
        <div class="input-group input-group-sm mb-3" style="margin-top: 2%; width:80%;">
          <span class="input-group-text" id="inputGroup-sizing-sm">ubicación: </span>
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <!--div para buscar por la marca del material-->
        <div class="input-group input-group-sm mb-3" style="margin-top: 2%; width:80%;">
          <span class="input-group-text" id="inputGroup-sizing-sm">Marca: </span>
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
        </div>
      </div>
      <div class="col">
        <!--div para buscar por el modelo del material-->
        <div class="input-group input-group-sm mb-3" style="margin-top: 2%; width:80%;">
          <span class="input-group-text" id="inputGroup-sizing-sm">Modelo: </span>
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <!--div para buscar por el año de compra del material-->
        <div class="input-group input-group-sm mb-3" style="margin-top: 2%; width:80%;">
          <span class="input-group-text" id="inputGroup-sizing-sm">Año de compra: </span>
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
        </div>
      </div>
      <div class="col">
        <!--div para buscar por el tipo de conexión del material-->
        <div class="input-group input-group-sm mb-3" style="margin-top: 2%; width:80%;">
          <span class="input-group-text" id="inputGroup-sizing-sm">Tipo de conexión: </span>
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">

        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-11" style="text-align: right; margin-top: 3%">
        <button type="button" class="btn btn-dark">Buscar</button>
      </div>
      <div class="col-1">

      </div>
    </div>
  </div>
  <!--Contenido de la opción para prestar un material-->
  <div class=" tab-pane" id="messages" role="tabpanel" style="width: 80%; margin-left: 25%; margin-top:0.5%;" aria-labelledby="messages-tab">
    <div class="row">
      <!--div para indicar que tipo de material es prestado-->
      <div class="input-group input-group-sm mb-3" style="margin-top: 1%; width:80%;">
        <span class="input-group-text" id="inputGroup-sizing-sm">Tipo de material: </span>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
        <div style="margin-left: 18.5%;"></div>
      </div>
    </div>
    <div class="row">
      <!--div para indicar a la persona que se le presta-->
      <div class="input-group input-group-sm mb-3" style="margin-top: 1%; width:80%;">
        <span class="input-group-text" id="inputGroup-sizing-sm">Persona/Entidad: </span>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
        <div style="margin-left: 18.5%;"></div>
      </div>
    </div>
    <div class="row">

      <!--div para indicar el dia que retiran el material-->
      <div class="input-group input-group-sm mb-3" style="margin-top: 1%; width:80%;">
        <span class="input-group-text" id="inputGroup-sizing-sm">Día de retirada: </span>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
        <div style="margin-left: 18.5%;"></div>
      </div>
    </div>
    <div class="row">
      <!--div para indicar el dia que devuelven el material-->
      <div class="input-group input-group-sm mb-3" style="margin-top: 1%; width:80%;">
        <span class="input-group-text" id="inputGroup-sizing-sm">Día de entrega: </span>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
        <div style="margin-left: 18.5%;"></div>
      </div>
    </div>
    <div class="row">
      <!--div para indicar el estado del material al prestarlo-->
      <div class="input-group input-group-sm mb-3" style="margin-top: 1%; width:80%;">
        <span class="input-group-text" id="inputGroup-sizing-sm">Estado del material: </span>
        <textarea type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></textarea>
        <div style="margin-left: 18.5%;"></div>
      </div>
    </div>
    <div class="row">
      <!--div para indicar las observaciones pertinentes-->
      <div class="input-group input-group-sm mb-3" style="margin-top: 1%; width:80%;">
        <span class="input-group-text" id="inputGroup-sizing-sm">Observaciones: </span>
        <textarea type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width:20%"></textarea>
        <div style="margin-left: 18.5%;"></div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <button type="button" class="btn btn-dark">Continuar</button>
      </div>
    </div>

  </div>

</div>
<!--Función para las pestañas del modal-->
<script>
  var firstTabEl = document.querySelector('#myTab li:last-child button')
  var firstTab = new bootstrap.Tab(firstTabEl)

  firstTab.show()
</script>
<!--Función para activar y desactivar campos de la pestaña añadir del modal-->
<script>
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
</script>
<!--Función ajax para recoger los datos de los campos input y enviarlos al archivo de proceso de datos-->
<script>
  $(document).ready(function() {

    $('#add_btn').on('click', function(e) {
      e.preventDefault();
      var option1 = document.querySelector('.option').value;
      //console.log(option1);
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
            option1:option1,
            /*marcaAdd:marcaAdd,
            tipoMaterialAdd:tipoMaterialAdd,
            modeloAdd:modeloAdd,
            cantidadAdd:cantidadAdd,
            anioCompraAdd:anioCompraAdd,
            utilidadAdd:utilidadAdd,
            tipoConexionAdd:tipoConexionAdd,
            ubicacionAdd:ubicacionAdd,
            ultimaRevisionAdd:ultimaRevisionAdd,
            ultimaRevisionAdd:ultimaRevisionAdd*/
          },
          success: function(response) {
            //alert("Se ha añadido satisfactoriamente");
            //window.location = "/fst/managementProyectTheatre/View/indexPages/indexAssistant.php";
            window.location = "/fst/managementProyectTheatre/controller/addMaterial.php";
          }
        });


      } else if (option1 === "atrezzo" | option1 === "matMontaje" | option1 === "otro") {
        /*$('input').prop('disabled', false);
        $("#cod_material").prop('disabled', true);
        $("#marca").prop('disabled', true);
        $("#modelo").prop('disabled', true);
        $("#metros_cable").prop('disabled', true);
        $("#anio_compra").prop('disabled', true);
        $("#tipo_conexion").prop('disabled', true);
        $("#ultima_revision").prop('disabled', true);*/
      } else if (option1 === "cableado") {
        /*$('input').prop('disabled', false);
        $("#cod_material").prop('disabled', true);
        $("#marca").prop('disabled', true);
        $("#modelo").prop('disabled', true);
        $("#anio_compra").prop('disabled', true);
        $("#tipo_conexion").prop('disabled', true);
        $("#ultima_revision").prop('disabled', true);
        $("#observaciones").prop('disabled', true);
        $("#utilidad").prop('disabled', true);*/
      } else if (option1 === "Buscar...") {
        //$('input').prop('disabled', false);
      }
    });
  });
  /*
   $(document).ready(function() {
      $('.delete').on('click', function(e) {
          e.preventDefault();
          var parent = $(this).parent().attr('id');
          var count = $(this).attr('id');
          console.log(count);
          $.ajax({
              type: "POST",
              url: "../../controller/deleteNotification.php",
              data: {
                  count
              },
              success: function(response) {
                  window.location = "/fst/managementProyectTheatre/View/indexPages/indexAssistant.php";
              }
          });
      });
  });
  */
</script>