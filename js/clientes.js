//$(document).ready(function(){
    //console.log("la Empresa es =>" + $("#usuarioEmpresa").val() )
//});



$("#btn-crear").click(function(){
   //alert("HOLA DESDE EL BOTOM");

    //$("#nombreEmpresa").val("hola")

    var datos = {
        nombre: $("#nombre").val(),
        apellido: $("#apellido").val(),
        contraseña: $("#contraseña").val(),
        correoelectronico: $("#correoelectronico").val(),
        ciudad: $("#ciudad").val(),
        estadocivil: $("#estadocivil").val(),
        edad: $("#edad").val(),     

    };

    //console.log(datos);

    $.ajax({
        url: 'ajax/gestion-cliente.php',
        method: 'POST',
        data: datos,
        dataType: 'json',
        success : function(respuesta){
            console.log(respuesta);

            if (respuesta.key!="") {
                console.log( "se guardo el registro" );
                window.location = 'admi-cliente.php';
            } else {
                console.log( "no guardo el registro" );
                
            }
        }


    });


});




$("#btn-crear").click(funcionCrearCliente);


var funcionCrearCliente =  function crearCliente() {
    
}