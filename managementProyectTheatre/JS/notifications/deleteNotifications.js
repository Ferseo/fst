//Petición ajax que al pulsar el boton de eliminar en el panel de notificaciones, redirige
//archivo controlador para que haga la consulta a la bd
$(document).ready(function() {
    $('.deleteMaterial').on('click', function(e) {
        e.preventDefault();
        var parent = $(this).parent().attr('id');
        var count = $(this).attr('id');
        console.log(parent);
        console.log(count);

        $.ajax({
            type: "POST",
            url: "../../controller/deleteNotification.php",
            data: {
                count
            },
            success: function(response) {
                window.location.reload();
            }
        });
    });
});