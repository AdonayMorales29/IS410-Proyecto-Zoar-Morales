$(document).ready(function(){
    // clase al primer enlace
 $('.categorias .categoria_item[categoria="all"]').addClass('ct_item-active');

 $('categoria_item').click(function(){
     $('.categoria_item').removeClass('ct_item-active');
     $(this).addClass('ct_item-active');
    
     console.log('categoria_item');
     
 })
});