function seeLendMatertial(){
    $.ajax({
        type: "POST",
        url: "../../../controller/seeLendMaterial.php",
        data: {},
    success: function(response) {
        
        var data = $.parseJSON(response);
        console.log(data);
        var container = document.getElementById("tableLendMaterial");
        var table = document.createElement("div");
        table.className = "table table-dark tableLend";
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
                var column7 = document.createElement("div");
                var button = document.createElement("button");
                column7.className = "col";
                var column8 =document.createElement("div");
                column8.className = "col";
                button.innerHTML = "🗑️";
                button.className = "btn deleteLend";
                button.setAttribute("onclick", "returnedLend(this)");
                button.setAttribute("type", "submit");
                button.id = data[i].codigo;   

                var texNode1 = document.createTextNode(data[i].materialPrestado);
                var texNode2 = document.createTextNode(data[i].personaPrestamo);
                var texNode3 = document.createTextNode(data[i].diaRetirada);
                var texNode4 = document.createTextNode(data[i].diaEntrega);
                var texNode5 = document.createTextNode(data[i].estadoMaterial);
                var texNode6 = document.createTextNode(data[i].observaciones);
                var textNode7 = document.createTextNode(data[i].trabajador_presta);

                column1.appendChild(texNode1);
                column2.appendChild(texNode2);
                column3.appendChild(texNode3);
                column4.appendChild(texNode4);
                column5.appendChild(texNode5);
                column6.appendChild(texNode6);
                column8.appendChild(textNode7);
                column7.appendChild(button);
                
                row.appendChild(column1);
                row.appendChild(column2);
                row.appendChild(column3);
                row.appendChild(column4);
                row.appendChild(column5);
                row.appendChild(column6);
                row.appendChild(column8);
                row.appendChild(column7);
                tbody.appendChild(row);
            }


        }
            table.appendChild(tbody);
            container.appendChild(table);
    }
});
}