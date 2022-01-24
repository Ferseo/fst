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
            //console.log(data);
            var container = document.getElementById("tableMaterialResult");
            var table = document.createElement("table");
            var thead = document.createElement("thead");
            var titleTHead = document.createTextNode("Material encontrado");
            thead.appendChild(titleTHead);
            var tbody = document.createElement("tbody");
            for(var i = 0; i < data.length; i++){
                var row = document.createElement("tr");
                for(var j = 0; j < data.length; j++){
                    var column = document.createElement("td");
                    var textColumn = document.createTextNode(data[i][j] + " | ");
                    column.appendChild(textColumn);
                    row.appendChild(column);           
                }
                tbody.appendChild(row);
                //console.log(tbody);
            }
            thead.appendChild(tbody);
            table.appendChild(thead);
            container.appendChild(table);
            //console.log(data);

        
        }
        });
    
      
   
       
    



}