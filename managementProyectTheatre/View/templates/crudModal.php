<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/html2canvas@1.0.0-rc.1/dist/html2canvas.min.js"></script>
<style>

  .nav {
    width: 100%;
    height: 100%;

  }

  .navContent {
    border: 1px solid gray;
    box-shadow: 2px 2px 2px 2px gray;
  }

  #modal_overflow{
    height: 50vh;
    overflow-y: scroll;
  }
  
  .tab-content {
    background-color: #d2d7df;
    height: 80vh; 
    /* height: auto; */
    
  }

  .divOptions {
    background-color: #d2d7df;
    padding: 0;
  }

  .settings {
    visibility: hidden;
  }

  .divTitle {
    background-color: #d2d7df;
  }
  .celda{
    text-align: center;

  }
  .titleHead{
    color:black;
    font-weight: bold;
  }
  td{
    color: white;
  }
  .tbody{
    width: 1000px;
    
  }
  .tableLend{
    font-size: 0.75em;
  }
  .inputLend{
    width: 100%;
    height: 50px;
  }
  .inputFind{
    width: 80%;
    height: 32px;
  }
  .spanLend{
    height: 100%;
    width: 30%;
  }
  .spanFind{
    height: 100%;
    width: 25%;
  }
  label{
    height: 30%;
    width: 25%;
  }

  canvas {
        width:90%;
        height:60%;
        background-color:#ffffff;
    } 
</style>
<div class="modal-content">
  
<nav style="box-shadow: 2px 2px 2px 2px gray; " class="modal-content">
  <div class="row" style="width: 100%;">
    <div class="col-8 divTitle">
      <h2 class="titleModal">Gestión de inventario</h2>
    </div>
    <div class="col-4 divOptions">
      <ul class="nav nav-tabs" id="myTab" role="tablist">

        <li class="nav-item" role="presentation" style="border: solid 1px black">
          <button class="nav-link active" style=" color:black;" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Añadir</button>
        </li>
        <li class="nav-item" role="presentation" style="border: solid 1px black">
          <button class="nav-link" style=" color:black;" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Buscar</button>
        </li>
        <li class="nav-item" role="presentation" style="border: solid 1px black">
          <button class="nav-link" style=" color:black;" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages" type="button" role="tab" aria-controls="messages" aria-selected="false">Prestar</button>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
<!--Contenedor general de las tres pestañas de opciones-->
<div class="tab-content navContent">
  <!--Contenido de la opción para añadir material nuevo-->
  <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab" style="margin-top: 2%;">
      <div class="row">
        <div class="col">
          <!--div del elemento para indicar que tipo de elemento se añade al inventario-->
          <div class="typeElement">
            <label class="input-group-text" for="inputGroupSelect01" style="width: 25%;">Tipo Elemento: </label>
            <select class="form-control option" id="option" style="width: 80%;">
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
          <div class="input-group input-group-sm mb-3" style="margin-top: 2%;  width:80%;">
            <span class="input-group-text" id="inputGroup-sizing-sm">Marca: </span>
            <input type="text" class="form-control " id="marca" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"  >
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
          <div class="input-group input-group-sm mb-3" style="margin-top: 2%; width:39%;">
            <span class="input-group-text" id="inputGroup-sizing-sm">Observaciones: </span>
            <input type="text" class="form-control " id="observaciones" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width:40%">
          </div>
        </div>
      </div>
      <div class="row">
      <div class="col-9">
        </div>
        <div class="col-3">
        <button type="button" class="btn btn-dark btn-add" id="add_btn" >Añadir</button>
        </div>
      </div>

  </div>
  <!--Contenido de la opción para buscar un material-->
  <div class="tab-pane" id="profile" style="width: 100%; margin-top:2%; margin-left: 17%" role="tabpanel" aria-labelledby="profile-tab">
        <!--div de opciones para indicar en que tabla buscar-->
        <div class="typeElement">
          <label class="input-group-text" for="inputGroupSelect01" >Tipo Elemento: </label>
          <select class="form-control" id="selectedOption" style="width: 68%;">
            <option selected>Buscar...</option>
            <option value="atrezzo">Atrezzo</option>
            <option value="cableado">Cableado</option>
            <option value="iluminacion">Iluminación</option>
            <option value="matMontaje">Material de Montaje</option>
            <option value="sonido">Sonido</option>
            <option value="video">Video</option>
            <option value="otros">Otros</option>
          </select>
        </div>
        <!--div para buscar por codigo de material-->
        <div class="input-group input-group-sm mb-3" style="margin-top: 2%; width:68%;">
          <span class="input-group-text spanFind" id="inputGroup-sizing-sm">Tipo de material: </span>
          <input type="text" class="form-control inputFind" id="tipo_materialFind" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
        </div>
        <!--div para buscar por utilidad del material-->
        <div class="input-group input-group-sm mb-3" style="margin-top: 2%; width:68%;">
          <span class="input-group-text spanFind" id="inputGroup-sizing-sm">Utilidad: </span>
          <input type="text" class="form-control inputFind" id="utilidadFind" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
        </div>
        <!--div para buscar por ubicación del material-->
        <div class="input-group input-group-sm mb-3" style="margin-top: 2%; width:68%;">
          <span class="input-group-text spanFind" id="inputGroup-sizing-sm">ubicación: </span>
          <input type="text" class="form-control inputFind" id="ubicacionFind" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
        </div>
        <!--div para buscar por la marca del material-->
        <div class="input-group input-group-sm mb-3" style="margin-top: 2%; width:68%;">
          <span class="input-group-text spanFind" id="inputGroup-sizing-sm">Marca: </span>
          <input type="text" class="form-control inputFind" id="marcaFind" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
        </div>
        <!--div para buscar por el modelo del material-->
        <div class="input-group input-group-sm mb-3" style="margin-top: 2%; width:68%;">
          <span class="input-group-text spanFind" id="inputGroup-sizing-sm">Metros: </span>
          <input type="text" class="form-control inputFind" id="metrosFind" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
        </div>
        <!--div para buscar por el año de compra del material-->
        <div class="input-group input-group-sm mb-3" style="margin-top: 2%; width:68%;">
          <span class="input-group-text spanFind" id="inputGroup-sizing-sm">Año de compra: </span>
          <input type="text" class="form-control inputFind" id="anio_compraFind" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
        </div>
        <!--div para buscar por el tipo de conexión del material-->
        <div class="input-group input-group-sm mb-3" style="margin-top: 2%; width:68%;">
          <span class="input-group-text spanFind" id="inputGroup-sizing-sm">Tipo de conexión: </span>
          <input type="text" class="form-control inputFind" id="tipo_conexionFind" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
        </div>
      <div class="col-8" style="text-align: right;">
        <button type="submit" class="btn btn-dark" onclick="findMaterial()" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Buscar</button>        
      </div>
      <div class="col-4">
      </div>
  </div>
<!-- Modal que muestra la tabla con los resultados de la busqueda -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" data-bs-target="#AvanzaModal">
  <div class="modal-dialog" >
    <div class="modal-content"  id="modal_overflow">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">MATERIAL ENCONTRADO</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div id="tableMaterialResult" ></div>    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="refreshModal()">Cerrar</button>
      </div>
    </div>
  </div>
</div>
  <!--Contenido de la opción para prestar un material-->
  <div class=" tab-pane" id="messages" role="tabpanel" style="width: 100%; margin-left: 17%; margin-top:2%;" aria-labelledby="messages-tab">
    <div class="row">
      <!--div para indicar que tipo de material es prestado-->
      <div class="input-group input-group-sm mb-3" style="margin-top: 1%; width:80%; ">
        <span class="input-group-text spanLend" id="inputGroup-sizing-sm">Tipo de material: </span>
        <input type="text" class="form-control inputLend" id="tipo_materialLend" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required >
        <div style="margin-left: 18.5%;"></div>
      </div>
    </div>
    <div class="row">
      <!--div para indicar a la persona que se le presta-->
      <div class="input-group input-group-sm mb-3" style="margin-top: 1%; width:80%; ">
        <span class="input-group-text spanLend" id="inputGroup-sizing-sm">Persona/Entidad: </span>
        <input type="text" class="form-control inputLend" id="per_entiLend" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
        <div style="margin-left: 18.5%;"></div>
      </div>
    </div>
    <div class="row">

      <!--div para indicar el dia que retiran el material-->
      <div class="input-group input-group-sm mb-3" style="margin-top: 1%; width:80%;">
        <span class="input-group-text spanLend" id="inputGroup-sizing-sm">Día de retirada: </span>
        <input type="text" class="form-control inputLend" id="retiradaLend" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
        <div style="margin-left: 18.5%;"></div>
      </div>
    </div>
    <div class="row">
      <!--div para indicar el dia que devuelven el material-->
      <div class="input-group input-group-sm mb-3" style="margin-top: 1%; width:80%;">
        <span class="input-group-text spanLend" id="inputGroup-sizing-sm">Día de entrega: </span>
        <input type="text" class="form-control inputLend" id="entregaLend" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
        <div style="margin-left: 18.5%;"></div>
      </div>
    </div>
    <div class="row">
      <!--div para indicar el estado del material al prestarlo-->
      <div class="input-group input-group-sm mb-3" style="margin-top: 1%; width:80%; ">
        <span class="input-group-text spanLend" id="inputGroup-sizing-sm">Estado del material: </span>
        <textarea type="text" class="form-control inputLend" id="estado_materialLend" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required></textarea>
        <div style="margin-left: 18.5%;"></div>
      </div>
    </div>
    <div class="row">
      <!--div para indicar las observaciones pertinentes-->
      <div class="input-group input-group-sm mb-3" style="margin-top: 1%; width:80%;">
        <span class="input-group-text spanLend" id="inputGroup-sizing-sm">Observaciones: </span>
        <textarea type="text" class="form-control inputLend" id="observacionesLend" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width:20%"></textarea>
        <div style="margin-left: 18.5%;"></div>
        <!-- <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#staticBackdropNew1"  style="margin-bottom: 6%;">firmar</button>  -->
      </div>

    </div>
    <div class="row ">
      <div class="col">
      <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#staticBackdropNew1"  style="margin-bottom: 6%;">firmar</button> 
        <!-- <button type="submit" class="btn btn-dark" onclick="lendMaterial()" style="margin-bottom: 6%;">Continuar</button>  -->
      </div>
      <div class="col">
      <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#staticBackdropNew" onclick="seeLendMatertial()" style="margin-bottom: 6%;">Ver préstamos</button> <!--añadimos el botón para ver materiales prestados-->
      </div>
    </div>

  </div>
    <!-- modal de firma -->
    <div class="modal fade" id="staticBackdropNew1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Firma</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <canvas id="pizarra"></canvas>
      </div>
      <div class="modal-footer">
        <button type="button" id="close_firma" class="btn btn-secondary" data-bs-dismiss="modal"
        onclick="refreshModal()">Cerrar</button>
      </div>
    </div>
  </div>
</div>




  <!-- Modal que muestra los materiales prestados -->
<div class="modal fade" id="staticBackdropNew" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true"  >
  <div class="modal-dialog" >
    <div class="modal-content" id="modal_overflow">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">MATERIAL PRESTADO</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <div id="tableLendMaterial"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="refreshModal()">Cerrar</button>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="../../JS/jquery.js"></script>
<script>
//======================================================================
// VARIABLES
//======================================================================
let miCanvas = document.querySelector('#pizarra');
let lineas = [];
let correccionX = 0;
let correccionY = 0;
let pintarLinea = false;
// Marca el nuevo punto
let nuevaPosicionX = 0;
let nuevaPosicionY = 0;

let posicion = miCanvas.getBoundingClientRect()
correccionX = posicion.x;
correccionY = posicion.y;

miCanvas.width = 500;
miCanvas.height = 500;

//======================================================================
// FUNCIONES
//======================================================================

/**
 * Funcion que empieza a dibujar la linea
 */
function empezarDibujo() {
    pintarLinea = true;
    lineas.push([]);
};

/**
 * Funcion que guarda la posicion de la nueva línea
 */
function guardarLinea() {
    lineas[lineas.length - 1].push({
        x: nuevaPosicionX,
        y: nuevaPosicionY
    });
    
}

/**
 * Funcion dibuja la linea
 */
function dibujarLinea(event) {
    event.preventDefault();
    if (pintarLinea) {
        let ctx = miCanvas.getContext('2d')
        // Estilos de linea
        ctx.lineJoin = ctx.lineCap = 'round';
        ctx.lineWidth = 10;
        // Color de la linea
        ctx.strokeStyle = "#0D0909";
        // Marca el nuevo punto
        if (event.changedTouches == undefined) {
            // Versión ratón
            nuevaPosicionX = event.layerX;
            nuevaPosicionY = event.layerY;
        } else {
            // Versión touch, pantalla tactil
            nuevaPosicionX = event.changedTouches[0].pageX - correccionX;
            nuevaPosicionY = event.changedTouches[0].pageY - correccionY;
        }
        // Guarda la linea
        guardarLinea();
        // Redibuja todas las lineas guardadas
        ctx.beginPath();
        lineas.forEach(function (segmento) {
            ctx.moveTo(segmento[0].x, segmento[0].y);
            segmento.forEach(function (punto, index) {
                ctx.lineTo(punto.x, punto.y);
            });
        });
        ctx.stroke();
        
    }
    
}

/**
 * Funcion que deja de dibujar la linea
 */
function pararDibujar () {
    pintarLinea = false;
    guardarLinea();
}
document.getElementById("close_firma").addEventListener("click", function( event ) {
      var img    = miCanvas.toDataURL("image/png");
      //img = encodeURI(img);
      lendMaterial(img);
    },true);
//======================================================================
// EVENTOS
//======================================================================

// Eventos raton
miCanvas.addEventListener('mousedown', empezarDibujo, false);
miCanvas.addEventListener('mousemove', dibujarLinea, false);
miCanvas.addEventListener('mouseup', pararDibujar, false);

// Eventos pantallas táctiles
// miCanvas.addEventListener('touchstart', empezarDibujo, false);
// miCanvas.addEventListener('touchmove', dibujarLinea, false);
</script>
<script src="../../JS/crudModal/addMaterial/activeInput.js"></script>
<script src="../../JS/crudModal/findMaterial/activateInputsFind.js"></script>
<script src="../../JS/crudModal/activateOption.js"></script>
<script src="../../JS/crudModal/addMaterial/sendDataController.js"></script>
<script src="../../JS/crudModal/findMaterial/findMaterial.js"></script>
<script src="../../JS/crudModal/lendMaterial/lendMaterial.js"></script> 
<script src="../../JS/crudModal/findMaterial/deleteMaterial.js"></script>
<script src="../../JS/crudModal/lendMaterial/seeLendMaterial.js"></script>
<script src="../../JS/crudModal/lendMaterial/returnedLend.js"></script>