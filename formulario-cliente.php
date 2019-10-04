<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Clientes</title>
    <link rel="shortcut icon" href="img/Zoar/1.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/clientes.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">

</head>
<body>
    
    <div class="container-fluid contenedorPrincipal">
        <img  class="imagen"  src="img/Zoar/icono.png" style=" ">
        <h1 style="color:#400129d2">Crear Cuenta de Usuario</h1>
        <form action="" class="container contenedorPrincipal2">
            <div class="row">
                <div class="col-md-6 ">
                    <label class="label" for="validationCuston01">Nombre</label>
                    <input type="text" class="form-control " id="validationCuston01" placeholder="Nombre" required="">
                    <div class="invalid-feedback">
                        Ingrese los datos
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="label" for="validationCuston02">Apellido</label>
                    <input type="text" class="form-control" id="validationCuston02" placeholder="Apellido" required="">
                    <div class="invalid-feedback">
                        Ingrese los datos
                     </div>
                </div>
            </div>
                <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="validationCuston03"><i class="fas fa-unlock-alt"></i>Contraseña</label>
                    <input type="text" class="form-control" id="validationCuston03" placeholder="Contraseña" required="">
                    <div class="invalid-feedback">
                        Ingrese los datos
                    </div>
                </div>
    
                <div class="col-md-6 mb-3">
                    <label for="validationCuston04"><i class="far fa-envelope"></i>Correo Electronico</label>
                    <input type="text" class="form-control" id="validationCuston04" placeholder="Correo Electronico" required="">
                    <div class="invalid-feedback">
                        Ingrese los datos
                    </div>
                </div>
                </div>
           
            <div class="row">
                <div class="col-md-4 mb-3">
                        <label for="validationCuston05">Ciudad</label>
                        <input type="text" class="form-control" id="validationCuston05" placeholder="Ciudad" required="">
                        <div class="invalid-feedback">
                            Ingrese los datos
                        </div>
                </div>
                <div class="col-md-4 mb-3">
                        <label for="validationCuston06">Estado Civil</label>
                        <input type="text" class="form-control" id="validationCuston06" placeholder="Estado Civil" required="">
                        <div class="invalid-feedback">
                                Ingrese los datos
                        </div>
                </div>
                <div class="col-md-4 mb-3">
                        <label for="validationCuston07">Edad</label>
                        <input type="text" class="form-control" id="validationCuston07" placeholder="Edad" required="">
                        <div class="invalid-feedback">
                            Ingrese los datos
                        </div>
                </div>

            </div>
            <div class="row">
                    <div class="col-md-6 mb-3">
                        <div>
                            <button class="buttons"><i class="fab fa-facebook-square"></i> Iniciar sesión con Facebook</button>
                            <br>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                    <button class="button2"> <img id="google" src="img/google.png">Inicia sesión con Google</button>
                     </div>                   
            </div>
            <div class="row">
                <div class="col-12">
                    <a href="admi-cliente.html" style="font-size:1.5em;">Cuenta de Usuario</a>

                </div>

            </div>
            <button class="boton" type="submit"  id="crear" >Crear Cuenta</button>
        </form>
        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script>
            (function(){
                'use strict';
                window.addEventListener('load,', function(){
                
                    var form=document.getElementById('needs-validation');
                    form.addEventListener('submit',function(event){
                        if(form.checkValidty()==false){
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    },false);
                },false);
            
            })();
        </script>
        <script src="js/bootstrap.min.js"></script> 
    </div>
     
   
   
</body>
</html>