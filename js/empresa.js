$(document).ready(function(){
    console.log("la Empresa es =>" + $("#usuarioEmpresa").val() )
});



$("#btn-crear").click( function(){
    //alert("HOLA DESDE EL BOTOM");

    //$("#nombreEmpresa").val("hola")

    var datos = {
        empresa: $("#nombreEmpresa").val(),
        pais: $("#pais").val(),
        direccion: $("#direccion").val(),
        correo: $("#correo").val(),
        telefono: $("#telefono").val(),
        latitud: $("#latitud").val(),
        longitud: $("#longitud").val(),
        fax: $("#fax").val(),
        facebook: $("#facebook").val(),       
        twiter: $("#twiter").val(),       
        instagram: $("#instagram").val(),       

    };

    //console.log(datos);

    $.ajax({
        url: 'ajax/gestion-empresa.php',
        method: 'POST',
        data: datos,
        dataType: 'json',
        success : function(respuesta){
            console.log(respuesta);

            if (respuesta.key!="") {
                console.log( "se guardo el registro" );
                window.location = 'empresa.php';
            } else {
                console.log( "no guardo el registro" );
                
            }
        }


    });


});




$("#btn-crear").click(funcionCrearEmpresa);


var funcionCrearEmpresa =  function crearEmpresa() {
    
}