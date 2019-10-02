$(document).ready(function(){
    obtenerProductos( $("#usuarioEmpresa").val() );

    console.log("la Empresa es =>" + $("#usuarioEmpresa").val() );

});




function obtenerProductos(id){

    var datos = {id: id};

    $.ajax({
        url: 'ajax/gestion-empresa.php',
        method: 'POST',
        data: datos,
        dataType: 'json',
        success : function(respuesta){
            console.log(respuesta);
        }
    });

}