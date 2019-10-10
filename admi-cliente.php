<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Administrador Cliente</title>
    <link rel="shortcut icon" href="img/Zoar/1.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/admin-cliente.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
</head>
<body>
      <!--Contenedor--> 
<div class="container-fluid">
        <div>
                <nav  class="navbar navbar-light navegador">
                        <a class="navbar-brand"><img src="img/Zoar/icono.png" style="height:75px;  "></a>
                        <form  class="form-inline">
                          <input id="BuscarProducto" class="form-control mr-sm-2" type="search" placeholder="Buscar Producto" aria-label="Search">
                          <button id="buscador" class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
                        </form>
                       
                </nav>
        </div>
        <div class="row container-fluid ">

            <div class=" col-xl-2 col-lg-2 col-md-4 col-sm-12   Principal ">
                <a href="#" class="contenido" categoria="Todo">Todo</a>
                <a href="#" class="contenido" categoria="perfil"><i class="fas fa-user-tie"></i>Perfil</a>
                <a href="#" class="contenido" categoria="Favoritos"><i class="fas fa-heart"></i>Favoritos</a>
                <a href="#" class="contenido" categoria="Carrito"><i class="fas fa-cart-arrow-down"></i>Carrito</a>
                <a href="productos.html" class="contenido" categoria="productos"><i class="fas fa-shopping-cart"></i>Productos</a>
                <a href="landing.php" class="contenido" categoria="paginaPrincipal"><i class="fas fa-angle-double-left"></i>Pagina Principal</a>
              
              
               
            </div>
            <!--Productos a Mostrar-->

         <div class=" col-xl-10 col-lg-10 col-md-8 col-sm-12 container-fluid  lista">

                    <h1 style="color:#400129;" class="text-center"> !Hola! </h1>
                    <h2 style="color:#570137;"  class="text-center">!Que Gusto Tenerte con Nosotros! </h2>
                    <hr>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-xs-6 col-sm-6 contenidoMuestra" categoria="perfil" >
                      <img src="img/perfil.jpg" alt="">
                      <span><b>Elsa Petrona Betancourth</b></span>
                      <span><i class="fas fa-grin-wink"></i>¡ La imaginación me lleva a cualquier lugar!</span>

                    </div>  
                    <div class="col-xl-6 col-lg-6 col-md-6 col-xs-6 col-sm-6 contenidoMuestra" categoria="perfil" >      
                        <span><b>Personalizacion de Perfil</b></span>
                        <br>
                        <button class="botonCliente" >Editar Perfil</button>
                        <button class="botonCliente" >Informacion Opcional</button>
                        <button class="botonCliente" >Cuentas de Usuario</button>
                        <button class="botonCliente" >Comprar Producto</button>

                    </div>  
                </div> 

        </div>
         
</div>                


        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script> 
        <script src="js/admin-cliente.js"></script>
</body>
</html>