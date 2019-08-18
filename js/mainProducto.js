$(document).ready(function(){
    // clase al primer enlace
    $('.categorias .categoria_item[categoria="all"]').addClass('ct_item-active');
    $('.categoria_item').click(function(){
        var seleccionarProducto=$(this).attr('categoria');

        //Activar color al enlace y filtrando productos
        $('.categoria_item').removeClass('ct_item-active');
        $(this).addClass('ct_item-active');
        //ocultar Productos

        $('.productos-Item').css('transform', 'scale(0)');
        function hideProductos(){
            $('.productos-Item').hide();
        }setTimeout(hideProductos,400);


        //Muestra Productos

        function showProductos(){
            $('.productos-Item[categoria="'+seleccionarProducto+'"').show();
            $('.productos-Item[categoria="'+seleccionarProducto+'"').css('transform', 'scale(1)');
        }setTimeout(showProductos,800);
           

        
    });
    //Muestra todos los productos
   $('.categoria_item[categoria="All"]').click(function(){
       function showAll(){
        $('.productos-Item').show();
        $('.productos-Item').css('transform', 'scale(1)');
       }setTimeout(showAll,400);
           
  

   });
     
});

 
