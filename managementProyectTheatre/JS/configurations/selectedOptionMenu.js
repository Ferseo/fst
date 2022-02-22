/***
 * Funcion que responde al evento click, la cual elimina del display el elemento que 
 * contiene los campos de editar, y genera con el DOM la opcion de sincronizar con 
 * diputacion.
 */
function sincroDipu(){
    var container_perfil = document.getElementById("miPerfil");
    container_perfil.style.display = "none";
   var container = document.getElementById("container");
   var div = document.createElement("div");
   div.id = "sincroDipu";
   var iframe = document.createElement("iframe");
   iframe.setAttribute("src", "https://app.dipalme.org/Servicios/Informacion/InformacionRRP.nsf/referencia/Diputacion+Provincial+de+Almeria+Informatica+SI-PEMPLEADO");
    div.appendChild(iframe);
    container.appendChild(div);
}

/***
 * Funcion que responde a un evento onclick, el cual simplemente recarga la pagina, y vueve a
 * la opcion de editar perfil 
 */
function miPerfil(){
    window.location.reload();
}
