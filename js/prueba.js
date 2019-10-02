$(document).ready(function(){

    //obtenerEmpresas
    $.ajax({
        url: 'ajax/gestion-empresa.php',
        method: 'GET',
        dataType: 'json',
        success : function(respuesta){
            //console.log();

            for (llave in respuesta) {
                $("#tabla").append(
                    `<tr id="${ llave }" >
                        <th scope="row">${ llave }</th>
                        <td>${ respuesta[llave].Empresa }</td>
                        <td>${ respuesta[llave].Correo }</td>
                        <td>${ respuesta[llave].Direccion }</td>
                        <td>
                            <button class="btn btn-danger btn-sm" onclick="eliminar('${llave}')" type="button"><i class="fas fa-trash-alt"></i></button>
                            <button class="btn btn-primary btn-sm" onclick="editar('${llave}')" type="button"><i class="fas fa-edit"></i></button>
                            <button class="btn btn-primary btn-sm" onclick="productos('${llave}')" type="button"><i class="fas fa-edit"> producto</i></button>
                        </td>
                    </tr>`
                );                
            }


        }


    });

});


function eliminar(id) {
    alert("Se eliminara el registro => " + id);
 /*   
    $.ajax({
        url: 'ajax/gestion-empresa.php?idEmpresa='+id,
        method: 'DELETE',
        dataType: 'json',
        success : function(respuesta){

        }


    });
    */
}

function editar(id) {
    alert("Se editara el registro => " + id);
/*
    $.ajax({
        url: 'ajax/gestion-empresa.php?idEmpresa='+id,
        method: 'PUT',
        dataType: 'json',
        success : function(respuesta){

        }

    });
    */
}

function productos(idEmpresa) {
    alert("Se editara el registro => " + idEmpresa);

    $.ajax({
        url: 'ajax/gestion-producto.php?idEmpresa='+idEmpresa,
        method: 'GET',
        dataType: 'json',
        success : function(respuesta){
            console.log(respuesta)

            $('#exampleModalLong').modal("show");
        }

    });
    
}


function agregarPoductos() {
     var datos = {
         
     }:

    $.ajax({
        url: 'ajax/gestion-producto.php?idEmpresa='+idEmpresa,
        method: 'POST',
        dataType: 'json',
        data: datos,
        success : function(respuesta){
            console.log(respuesta)

            $('#exampleModalLong').modal("hide");
        }

    });
    
}



