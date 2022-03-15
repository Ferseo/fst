//Petición ajax que al pulsar el boton de eliminar en el panel de notificaciones, redirige
//archivo controlador para que haga la consulta a la bd

function realiceNotifications(data){
    // var parent = $(this).parent().attr('id');
            // var count = $(".deleteNotifications").attr('id');
            var count = data.id;
            // console.log(parent);
            // console.log(count);
    
            $.ajax({
                type: "POST",
                url: "../../controller/realiceNotification.php",
                data: {
                    count
                },
                success: function(response) {
                    window.location.reload();
                }
            });
}