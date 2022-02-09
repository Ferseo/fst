/**
 * Función que recoge los datos de los campos input y los envia al archivo controlador
 * para ejecutar la consulta a la bd, y una vez el controlador devuelve el resultado, coloca los 
 * datos de la busqueda en una tabla.
 */
 function findMaterial(){
        var option = document.querySelector("#selectedOption").value;

        if(document.querySelector("#tipo_materialFind").value){
            var tipoMaterialFind = document.querySelector("#tipo_materialFind").value;
        }
        if(document.querySelector("#utilidadFind").value){
            var utilidadFind =  document.querySelector("#utilidadFind").value;
        }
        if(document.querySelector("#ubicacionFind").value){
            var ubicacionFind = document.querySelector("#ubicacionFind").value;
        }
        if(document.querySelector("#marcaFind").value){
            var marcaFind = document.querySelector("#marcaFind").value;
        }
        if(document.querySelector("#metrosFind").value){
            var metrosFind = document.querySelector("#metrosFind").value;
        }
        if(document.querySelector("#anio_compraFind").value){
            var anioCompraFind = document.querySelector("#anio_compraFind").value;
        }
        if(document.querySelector("#tipo_conexionFind").value){
            var tipoConexionFind = document.querySelector("#tipo_conexionFind").value;
        }
        $.ajax({
            type: "POST",
            url: "/fst/managementProyectTheatre/controller/findMaterial.php",
            data: { 
                "option": option,
                "tipoMaterialFind": tipoMaterialFind,
                "utilidadFind": utilidadFind,
                "ubicacionFind": ubicacionFind,
                "marcaAFind": marcaFind,
                "metrosFind": metrosFind,
                "anioCompraFind": anioCompraFind,                    
                "tipoConexionFind": tipoConexionFind,
        },
        success: function(response) {
            $('input[type="text"]').val('');
            var data = $.parseJSON(response);     
            var container = document.getElementById("tableMaterialResult");
            var table = document.createElement("div");
            table.className = "table table-dark";
            var tbody = document.createElement("div");
            if(data !== undefined){
                for(var i = 0; i <= data.length-1; i++){
                    var row = document.createElement("div");
                    row.className = "row";
                        var column1 = document.createElement("div");
                        column1.className = "col";
                        var column2 = document.createElement("div");
                        column2.className = "col";
                        var column3 = document.createElement("div");
                        column3.className = "col";
                        var textColumnTipoMaterial = document.createTextNode(data[i].tipoMaterial );
                        if(data[i].marca){
                            var column4 = document.createElement("div");
                            column4.className = "col";
                            var textColumnmarca = document.createTextNode(data[i].marca );
                            column4.appendChild(textColumnmarca);
                            row.appendChild(column4);
                        }
                        if(data[i].modelo){
                            var column5 = document.createElement("div");
                            column5.className = "col";
                            var textColumnmodelo = document.createTextNode(data[i].modelo );
                            column5.appendChild(textColumnmodelo);
                            row.appendChild(column5);
                        }
                        var column6 = document.createElement("div");
                        var button = document.createElement("button");
                        column6.className = "col";
                        button.innerHTML = "🗑️";
                        button.className = "btn  deleteMaterial";
                        button.setAttribute("onclick", "deleteMaterial()");
                        //button.setAttribute("type", "submit");
                        button.id = data[i].codigo;                    
                        var textColumncantidad = document.createTextNode(data[i].cantidad );
                        var textColumnubicacion = document.createTextNode(data[i].ubicacion );
                        column1.appendChild(textColumnTipoMaterial);
                        column2.appendChild(textColumncantidad);
                        column3.appendChild(textColumnubicacion);
                        column6.appendChild(button);
                        row.appendChild(column1);
                        row.appendChild(column2);
                        row.appendChild(column3);
                        row.appendChild(column6);           
                    tbody.appendChild(row);
                }
            }
            //thead.appendChild(tbody);
            table.appendChild(tbody);
            container.appendChild(table);
        }
        });
    return true;
}

/**
 * Método asignado al botón de cerrar del modal, que simplemente refresca la pagina para
 * vaciar el modal.
 */
function refreshModal(){
    window.location.reload();
}

