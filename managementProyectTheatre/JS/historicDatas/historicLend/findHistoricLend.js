function findLendMaterial(){
    $.ajax({
        type: "POST",
            url: "../../controller/findHistoricLend.php",
            data: { },
            success: function(response) {
                var data = $.parseJSON(response);
                console.log(data);  
                var container = document.getElementById("container");
                var table = document.createElement("div");
                var thead = document.createElement("div");
                thead.className = "row";
                thead.id = "bold";
                var hmp = document.createElement("td");
                hmp.className="col";
                hmp.innerHTML = "Mat.Prestado";

                var dr = document.createElement("td");
                dr.className="col";
                dr.innerHTML = "Retirada";

                var de = document.createElement("td");
                de.className="col";
                de.innerHTML = "Entrega";

                var em = document.createElement("td");
                em.className="col";
                em.innerHTML = "Estado Mat.";

                var ob = document.createElement("td");
                ob.className="col";
                ob.innerHTML = "Observ";

                var pe = document.createElement("td");
                pe.className="col";
                pe.innerHTML = "Pers/Ent";

                var ed = document.createElement("td");
                ed.className="col";
                ed.innerHTML = "Estado dev.";

                var tp = document.createElement("td");
                tp.className="col";
                tp.innerHTML = "Presta";

                var tr = document.createElement("td");
                tr.className="col";
                tr.innerHTML = "Recibe";

                var vacio = document.createElement("td");
                vacio.className="col";
                //tr.innerHTML = "Recibe";


                thead.appendChild(hmp);
                thead.appendChild(dr);
                thead.appendChild(de);
                thead.appendChild(em);
                thead.appendChild(ob);
                thead.appendChild(pe);
                thead.appendChild(ed);
                thead.appendChild(tp);
                thead.appendChild(tr);
                thead.appendChild(vacio);
                table.className = "table ";  //Probar a comentar a ver como queda la tabla en blaco
                var tbody = document.createElement("div");
                if(data !== undefined){
                    for(var i = 0; i <= data.length-1;i++){
                        var row = document.createElement("div");
                        row.className = "row border";
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
                        column7.className = "col";
                        var column8 = document.createElement("div");
                        column8.className = "col";
                        var column9 = document.createElement("div");
                        column9.className = "col";
                        var button = document.createElement("button");
                        button.className = "btn col";
                        button.innerHTML = "🗑️";
                        button.setAttribute("onclick", "deleteLend(this);");
                        button.setAttribute("type", "submit");
                        button.id = data[i].codigo;
                        
                        var text1 = document.createTextNode(data[i].materialPrestado);
                        var text2 = document.createTextNode(data[i].diaRetirada);
                        var text3 = document.createTextNode(data[i].diaEntrega);
                        var text4 = document.createTextNode(data[i].estadoMaterial);
                        var text5 = document.createTextNode(data[i].observaciones);
                        var text6 = document.createTextNode(data[i].personaPrestamo);
                        var text7 = document.createTextNode(data[i].estado_devolucion);
                        var text8 = document.createTextNode(data[i].trabajador_presta);
                        var text9 = document.createTextNode(data[i].trabajador_recibe);

                        column1.appendChild(text1);
                        column2.appendChild(text2);
                        column3.appendChild(text3);
                        column4.appendChild(text4);
                        column5.appendChild(text5);
                        column6.appendChild(text6);
                        column7.appendChild(text7);
                        column8.appendChild(text8);
                        column9.appendChild(text9);
                        row.appendChild(column1);
                        row.appendChild(column2);
                        row.appendChild(column3);
                        row.appendChild(column4);
                        row.appendChild(column5);
                        row.appendChild(column6);
                        row.appendChild(column7);
                        row.appendChild(column8);
                        row.appendChild(column9);
                        row.appendChild(button); 
                    tbody.appendChild(row);

                    }
                }
                table.appendChild(thead);
                table.appendChild(tbody);
                container.appendChild(table);
            }
    });





}

window.onload = findLendMaterial();