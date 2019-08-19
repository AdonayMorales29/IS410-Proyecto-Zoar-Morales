$(document).ready(function(){
    // clase al primer enlace
    $('.Principal .contenido[categoria="Todo"]').addClass('ct_item-active');
    $('.contenido').click(function(){
        var seleccionar=$(this).attr('categoria');

        //Activar color al enlace y filtrando productos
        $('.contenido').removeClass('ct_item-active');
        $(this).addClass('ct_item-active');
        
        //ocultar Productos

        $('.contenidoMuestra').css('transform', 'scale(0)');
        function hideContenido(){
            $('.contenidoMuestra').hide();
        }setTimeout(hideContenido,400);


        //Muestra

        function showMuestra(){
            $('.contenidoMuestra[categoria="'+seleccionar+'"').show();
            $('.contenidoMuestra[categoria="'+seleccionar+'"').css('transform', 'scale(1)');
        }setTimeout(showMuestra,800);
           

        
    });
    //Muestra todos los productos
  $('.contenido[categoria="Todo"]').click(function(){
       function showAll(){
     $('.contenidoMuestra').show();
     $('.contenidoMuestra').css('transform', 'scale(1)');
       }setTimeout(showAll,400);
           
  

   });
     
});