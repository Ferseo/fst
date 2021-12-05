<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<style>
  .nav {
    width: 80%;
    background-color: #CCCDCF;
    box-shadow: 5px 5px 5px black;
  }

  .navContent {
    width: 80%;
    height: 60%;
    border: 1px solid gray;
    box-shadow: 5px 5px 5px black;

  }

  .tab-content {
    background-color: #CCCDCF;
  }

  .settings {
    visibility: hidden;
  }

  .titleModal {
    padding: 10px 525px 5px 10px;

  }

  .leftBox {
    width: 50%;
    float: left;
  }

  .rigthBox {
    width: 50%;
    float: left;
  }
</style>

<ul class="nav nav-tabs" id="myTab" role="tablist">
  <h2 class="titleModal">Gestión de inventario</h2>
  <li class="nav-item" role="presentation" style="box-shadow: 3px 2px 2px #838485;">
    <button class="nav-link active" style=" color:black;" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Añadir</button>
  </li>
  <li class="nav-item" role="presentation" style="box-shadow: 3px 2px 2px #838485;">
    <button class="nav-link" style=" color:black;" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Buscar</button>
  </li>
  <li class="nav-item" role="presentation" style="box-shadow: 3px 2px 2px #838485;">
    <button class="nav-link" style=" color:black;" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages" type="button" role="tab" aria-controls="messages" aria-selected="false">Prestar</button>
  </li>
</ul>
<!--Aquí comenzamos con el contenido de las distintas opciones-->
<div class="tab-content navContent">

  <!--Contenido de la opción para añadir material nuevo-->
  <div class="tab-pane active" id="home" style="width: 100%;" role="tabpanel" aria-labelledby="home-tab">
    <div class="leftBox">
      <!--div del elemento para indicar que tipo de elemento se añade al inventario-->
      <div class="typeElement">
        <label class="input-group-text" for="inputGroupSelect01" style="width: 50%;">Tipo Elemento: </label>
        <select class="form-select" id="inputGroupSelect01" style="width: 60%;">
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
      <!--div del elemento para indicar el tipo de material-->
      <div class="input-group input-group-sm mb-3" style="margin-top: 2%; width:80%;">
        <span class="input-group-text" id="inputGroup-sizing-sm">Tipo de material: </span>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width:40%">
      </div>
      <!--div del código del material-->
      <div class="input-group input-group-sm mb-3" style="margin-top: 2%; width:80%;">
        <span class="input-group-text" id="inputGroup-sizing-sm">Código material: </span>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width:40%">
      </div>
      <!--div para la cantidad de material existente-->
      <div class="input-group input-group-sm mb-3" style="margin-top: 2%; width:80%;">
        <span class="input-group-text" id="inputGroup-sizing-sm">Cantidad: </span>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width:40%">
      </div>
      <!--div para la utilidad del material-->
      <div class="input-group input-group-sm mb-3" style="margin-top: 2%; width:80%;">
        <span class="input-group-text" id="inputGroup-sizing-sm">Utilidad: </span>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width:40%">
      </div>
      <!--div para la ubicación del material-->
      <div class="input-group input-group-sm mb-3" style="margin-top: 2%; width:80%;">
        <span class="input-group-text" id="inputGroup-sizing-sm">ubicación: </span>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width:40%">
      </div>
      <!--div para las observaciones pertinenetes para cada material-->
      <div class="input-group input-group-sm mb-3" style="margin-top: 2%; width:80%;">
        <span class="input-group-text" id="inputGroup-sizing-sm">Observaciones: </span>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width:40%">
      </div>
    </div>
    <div class="rigthBox">
      <!--div para indicar la marca del material-->
      <div class="input-group input-group-sm mb-3" style="margin-top: 2%; width:80%;">
        <span class="input-group-text" id="inputGroup-sizing-sm">Marca: </span>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width:40%">
      </div>
      <!--div para indicar el modelo del material-->
      <div class="input-group input-group-sm mb-3" style="margin-top: 2%; width:80%;">
        <span class="input-group-text" id="inputGroup-sizing-sm">Modelo: </span>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width:40%">
      </div>
      <!--div para los metros correspondientes al cableado-->
      <div class="input-group input-group-sm mb-3" style="margin-top: 2%; width:80%;">
        <span class="input-group-text" id="inputGroup-sizing-sm">Metros cable: </span>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width:40%">
      </div>
      <!--div para el año de compra del materia-->
      <div class="input-group input-group-sm mb-3" style="margin-top: 2%; width:80%;">
        <span class="input-group-text" id="inputGroup-sizing-sm">Año de compra: </span>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width:40%">
      </div>
      <!--div para el tipo de conexión que usa el material-->
      <div class="input-group input-group-sm mb-3" style="margin-top: 2%; width:80%;">
        <span class="input-group-text" id="inputGroup-sizing-sm">Tipo de conexión: </span>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width:40%">
      </div>
      <!--div para indicar la última revisión que se realizó al meterial-->
      <div class="input-group input-group-sm mb-3" style="margin-top: 2%; width:80%;">
        <span class="input-group-text" id="inputGroup-sizing-sm">Última revisión: </span>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width:40%">
      </div>
      <!--Botón que icia la acción de guardar-->
      <button type="button" class="btn btn-dark">Añadir</button>
    </div>
  </div>

















  <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">profile</div>
  <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">messages</div>
</div>

<script>
  var firstTabEl = document.querySelector('#myTab li:last-child button')
  var firstTab = new bootstrap.Tab(firstTabEl)

  firstTab.show()
</script>