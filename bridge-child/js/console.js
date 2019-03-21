// Si tu script está en el header
var respuesta;
jQuery(document).ready(function($){
    // Aquí tu script

    $('.post_text_inner').each(function () {
        respuesta = $(this);
        console.log($(this));
        $(this).context.style.backgroundColor = 'green';
    });
});

