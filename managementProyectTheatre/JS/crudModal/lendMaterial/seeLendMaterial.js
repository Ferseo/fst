function seeLendMatertial(){
    $.ajax({
        type: "POST",
        url: "/fst/managementProyectTheatre/controller/seeLendMaterial.php",
        data: { 
            
    },
    success: function(response) {
        
        var data = $.parseJSON(response);
        var container = document.getElementById("tableLendMaterial");
        var table = document.createElement("div");
        //Crear el thead 
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
                var column4 = document.createElement("div");
                column4.className = "col";
                var column5 = document.createElement("div");
                column5.className = "col";
                var column6 = document.createElement("div");
                column6.className = "col";

                var texNode1 = document.createTextNode(data[i].tipoMaterial);
                var texNode2 = document.createTextNode(data[i].per_enti);
                var texNode3 = document.createTextNode(data[i].dia_retirada);
                var texNode4 = document.createTextNode(data[i].dia_entrega);
                var texNode5 = document.createTextNode(data[i].estado_material);
                var texNode6 = document.createTextNode(data[i].observaciones);

                column1.appendChild(texNode1);
                column2.appendChild(texNode2);
                column3.appendChild(texNode3);
                column4.appendChild(texNode4);
                column5.appendChild(texNode5);
                column6.appendChild(texNode6);
            }


        }
    }
});
}