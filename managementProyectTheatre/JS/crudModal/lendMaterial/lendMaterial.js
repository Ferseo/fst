function lendMaterial(){
    var tipo_materialLend = document.querySelector("#tipo_materialLend").value;
    var per_entiLend = document.querySelector("#per_entiLend").value;
    var dia_retirada = document.querySelector("#retiradaLend").value;
    var dia_entrega = document.querySelector("#entregaLend").value;
    var estado_material = document.querySelector("#estado_materialLend").value;
    if(document.querySelector("#observacionesLend") != null){
        var observacionesLend = document.querySelector("#observacionesLend").value;
        
    }else{
        var observacionesLend = 'No hay contenido a mostrar, todo esta correcto.';
    }

    $.ajax({
        type: "POST",
        url: "/fst/managementProyectTheatre/controller/lendMaterial.php",
        data: { 
            "tipo_materialLend":tipo_materialLend,
            "per_entiLend":per_entiLend,
            "dia_retirada":dia_retirada,
            "dia_entrega":dia_entrega,
            "estado_material":estado_material,
            "observaciones":observacionesLend
    },
    success: function(response) {
        //window.location.reload();
    }
});
}