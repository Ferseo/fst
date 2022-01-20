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
            console.log('todo ok');
        //alert("Se ha añadido satisfactoriamente");
        //$('input[type="text"]').val('');
        }
        });
    
      
   
       
    



}