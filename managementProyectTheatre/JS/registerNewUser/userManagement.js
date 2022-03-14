function userManagement(){
    $.ajax({
        type: "POST",
        url: "../../controller/userManagement.php",
        data: {
            
        },
        success: function(response) {
            var data = $.parseJSON(response);
            //var data = response; 
            var parent = document.getElementById("parent");
            //console.log(parent);
            //PRUEBA CREADA EN LAS PRÁCTICAS
            for(var i = 0; i < data.length; i++){ 
                var row = document.createElement("div");
                row.className = "row";
                var p = document.createElement("p");
                var textP = document.createTextNode(data[i].nombre);
                var button = document.createElement("button");
                var textButton = document.createTextNode("🗑️");
                button.className = "btn";
                button.id = data[i].nombre;
                button.setAttribute("onclick", "deleteUser(this)");
                button.appendChild(textButton);
                p.appendChild(textP);
                row.appendChild(p);
                row.appendChild(button);
                parent.appendChild(row);
            }

            // for(var i = 0; i < data.length; i++){
            //     var row = document.createElement("div");
            //     var span = document.createElement("span");
            //     var p = document.createElement("p");
            //     p.className = "span";
            //     var texto = document.createTextNode(data[i].nombre);
            //     var button = document.createElement("button");
            //     var textButton = document.createTextNode("🗑️")
            //     button.className = "btn";
            //     button.setAttribute("onclick", "deleteUser(this)");
            //     button.id = data[i].nombre;
            //     button.appendChild(textButton);
            //     p.appendChild(texto);
            //     p.appendChild(button);
            //     span.appendChild(p);
            //     row.appendChild(span);
            //     parent.appendChild(row);
            // }
            
        }
    })
}













window.onload = userManagement();