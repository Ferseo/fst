 
// function prueba(data){
//     console.log(data);
//     const $objetivo = data;
//     const enviarCapturaAServidor = data => {
//     let imagenComoBase64 = data.toDataURL();
//     imagenComoBase64 = encodeURIComponent(imagenComoBase64);
//     const payload = {
//         "captura": imagenComoBase64
//       };
//       const ruta = "../../../controller/lendMaterial.php";
//       fetch(ruta, {
//         method: "POST",
//         body: JSON.stringify(payload),
//         headers: {
//           "Content-type": "application/x-www-form-urlencoded",
//         }
//       }) .then(resultado => {
//         // A los datos los decodificamos como texto plano
//         return resultado.text()
//       })
//       .then(nombreDeLaFoto => {
//         // nombreDeLaFoto trae el nombre de la imagen que le dio PHP
//         console.log({ nombreDeLaFoto });
//         alert(`Guardada como ${nombreDeLaFoto}`);
  
//       });
//     };
//     html2canvas($objetivo) // Llamar a html2canvas y pasarle el elemento
//     .then(enviarCapturaAServidor); 
// }


/**
 * Funcion que que recoge los datos de los campos y los envia a travéz de Ajax
 * al archivo controlador para el trato de datos.
 */
function lendMaterial(data){
    console.log(data);
    let imagenComoBase64 = data;
    imagenComoBase64 = encodeURIComponent(imagenComoBase64);
    // const payload = {"captura":imagenComoBase64}
    let img = JSON.stringify(imagenComoBase64);
    
    //html2canvas(data).then(img);
    var tipo_materialLend = document.querySelector("#tipo_materialLend").value;
    var per_entiLend = document.querySelector("#per_entiLend").value;
    var dia_retirada = document.querySelector("#retiradaLend").value;
    var dia_entrega = document.querySelector("#entregaLend").value;
    var estado_material = document.querySelector("#estado_materialLend").value;
    if(document.querySelector("#observacionesLend").value != ""){
        var observacionesLend = document.querySelector("#observacionesLend").value;      
    }else{
        var observacionesLend = "No hay contenido a mostrar, todo esta correcto.";
    }
    $.ajax({
        type: "POST",
        url: "/fst/managementProyectTheatre/controller/lendMaterial.php",
        data: { 
            "tipo_materialLend":tipo_materialLend,
            "per_entiLend":per_entiLend,
            "dia_retirada":dia_retirada,
            "dia_entrega":dia_entrega,
            "estado_material":estado_material,
            "observaciones":observacionesLend,
            "img":img
    },

    success: function(response) {
        //window.location.reload();
    }
});
}

