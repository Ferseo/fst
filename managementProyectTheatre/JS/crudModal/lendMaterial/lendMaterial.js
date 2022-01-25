function lendMaterial(){
    var tipo_materialLend = document.querySelector("#tipo_materialLend");
    var per_entiLend = document.querySelector("#per_entiLend");
    var dia_retirada = document-querySelector("#retiradaLend");
    var dia_entrega = document.querySelector("#entregaLend");
    var estado_material = document.querySelector("#estado_materialLend");
    if(document.querySelector("#observacionesLend") != null){
        var observacionesLend = document.querySelector("#observacionesLend");
    }else{
        var observacionesLend = 'No hay reseñas a mostrar, todo está correcto.';
    }

    $.ajax({
        type: "POST",
        url: "/fst/managementProyectTheatre/controller/lendMaterial.js",
        data: { 
            "tipo_materialLend":tipo_materialLend,
            "per_entiLend":per_entiLend,
            "dia_retirada":dia_retirada,
            "dia_entrega":dia_entrega,
            "estado_material":estado_material,
            "observaciones":observacionesLend
    },
    success: function(response) {
        //Aqui colocar la respuesta
    }
});
}