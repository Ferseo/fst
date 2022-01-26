function findMaterial(){
        var option = document.querySelector("#selectedOption").value;
        //console.log(option);

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
            $('select').val('Buscar...');
            var data = $.parseJSON(response);  
            //var data = response;
            console.log(data);       
            var container = document.getElementById("tableMaterialResult");
            var table = document.createElement("table");
            table.className = "table table-dark";
            var thead = document.createElement("thead");
            var titleTHead = document.createTextNode("Material encontrado");
            thead.appendChild(titleTHead);
            thead.className = "titleHead";
            var tbody = document.createElement("tbody");
            if(data !== undefined){
                for(var i = 0; i <= data.length-1; i++){
                    var row = document.createElement("tr");
                    row.className = "row";
                        var column1 = document.createElement("td");
                        column1.className = "col";
                        var column2 = document.createElement("td");
                        column2.className = "col";
                        var column3 = document.createElement("td");
                        column3.className = "col";
                        var textColumnTipoMaterial = document.createTextNode(data[i].tipoMaterial );
                        textColumnTipoMaterial.className = "celda";
                        var textColumncantidad = document.createTextNode(data[i].cantidad );
                        textColumncantidad.className = "celda";
                        var textColumnubicacion = document.createTextNode(data[i].ubicacion );
                        textColumnubicacion.className = "celda";
                        column1.appendChild(textColumnTipoMaterial);
                        column2.appendChild(textColumncantidad);
                        column3.appendChild(textColumnubicacion);
                        row.appendChild(column1);
                        row.appendChild(column2);
                        row.appendChild(column3);           
                    tbody.appendChild(row);
                }
            }
            thead.appendChild(tbody);
            table.appendChild(thead);
            container.appendChild(table);        
        }
        });
    
      
   
       
    



}