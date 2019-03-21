//http://www.juanvt.com/blog/usar-jquery-en-wordpress/
// Si tu script está en el header
jQuery(document).ready(function($){
    // Aquí tu script
    $('.post_text_inner').each(function () {
        $(this).context.style.backgroundColor = 'green';
    });
});

// Si tu script está en el footer
/*(function ($){
    // Aquí tu script
})(jQuery);*/

