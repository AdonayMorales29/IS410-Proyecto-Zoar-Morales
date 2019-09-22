$("#login").click(function(event){


//console.log("login");
//valores de los input

var correo=$("#correo").val();
var contraseña=$("#contraseña").val();

//console.log(correo + "" + contraseña);

var parametro={pcorreo:correo, pcontraseña:contraseña};
//console.log(parametro);

$.ajax({
    url:'ajax/controladorInicioSesion.php?accion=login',
    method:'POST',
    dataType:'json',
    data:parametro,

    success:function(res){
        console.log(res);

        if (res.res==1){
            console.log("valido");
            location.href="http://www.cristalab.com/foros";

			}else{
				console.log("Invalido");

			}

        }

    }


})
function detalles(id) {
	console.log(id);

}
function login() {

	console.log("Funcion login");

	//obtener los valores de un input
	var correo = $("#correo").val();
	var contrasenia = $("#contrasenia").val();

	console.log(contrasenia + " " + correo);
}

