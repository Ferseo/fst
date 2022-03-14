function findTasks(){
     $.ajax({
            type: "POST",
            url: "../../controller/findHistoricTasks.php",
            data: { },
        success: function(response) {
            //$('input[type="text"]').val('');
            var data = $.parseJSON(response);
            // console.log(data);     
            var container = document.getElementById("parent_modal");
            var table = document.createElement("div");
            table.className = "table table-dark";
            var tbody = document.createElement("div");
            if(data !== undefined){
                for(var i = 0; i <= data.length; i++){
                    //console.log(data); 
                    var button = document.createElement("button");
                   button.className = "btn";
                   button.id = data[i].cod_hist_tareas;
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
                   var button = document.createElement("button");
                   button.className = "btn";
                   //button.id = data[i].cod_hist_tareas;
                   var text1 = document.createTextNode(data[i].diaTarea);
                   var text2 = document.createTextNode(data[i].horarioTarea);
                   var text3 = document.createTextNode(data[i].lugarTarea);
                   var text4 = document.createTextNode(data[i].tipoTarea);
                   var text5 = document.createTextNode(data[i].TrabajadorDesempenia);
                    column1.appendChild(text1);
                    column2.appendChild(text2);
                    column3.appendChild(text3);
                    column4.appendChild(text4);
                    column5.appendChild(text5);
                   row.appendChild(column1);
                   row.appendChild(column2);
                   row.appendChild(column3);
                   row.appendChild(column4);
                   row.appendChild(column5);
                   row.appendChild(button); 
                    tbody.appendChild(row);
                }}
            table.appendChild(tbody);
            container.appendChild(table);
            }
        });
    return true;  
}