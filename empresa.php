<?php 
    session_start();
    $id = 'Lq7xhL9RNB-bdtDLk';
    
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Administrador Empresarial</title>
    <link rel="shortcut icon" href="img/Zoar/1.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/admin-empresa.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
</head>
<body>
      <!--Contenedor--> 
<div class="container-fluid">
        <div>
                <nav  class="navbar navbar-light navegador">
                        <a class="navbar-brand"><img src="img/Zoar/icono.png" style="height:60px;  "></a>
                        <div>
                            <a href="#"><i class="fas fa-cart-plus"></i></a>
                            <a href="#"><i class="fas fa-heart"></i></a>
                            <a href=""><i class="fas fa-user-alt"></i></a>   
                        </div>
                        <form  class="form-inline">
                          <input id="BuscarProducto" class="form-control mr-sm-2" type="search" placeholder="Buscar Producto" aria-label="Search">
                          <button id="buscador" class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
                        </form>
                       
                </nav>
        </div>
        <div class="row container-fluid ">

            <div class=" col-xl-2 col-lg-2 col-md-4 col-sm-12   Principal  ">
                <a href="#" class="contenido" categoria="Todo">Todo</a>
                <a href="#" class="contenido" categoria="principal">Principal</a>
                <a href="productos.php?id=<?php echo $id?>" class="contenido" categoria="productos"><i class="fas fa-shopping-cart"></i>Productos</a>
                <a href="#" class="contenido" categoria="perfil"><i class="fas fa-user-tie"></i>Perfil</a>
                <a href="#" class="contenido" categoria="Graficos">Graficos</a>
                <a href="landing.html" class="contenido" categoria="paginaPrincipal"><i class="fas fa-angle-double-left"></i>Pagina Principal</a>
            </div>
            <!--Productos a Mostrar-->

         <div class=" col-xl-10 col-lg-10 col-md-8 col-sm-12 container-fluid  lista">

                    <h1 style="color:#400129;"> Bienvenido a la Plataforma</h1>
                    <hr>
                <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-xs-12 col-sm-12 contenidoMuestra" categoria="Todo" >
                                <img src="img/listado.jpg" alt="">
                             <button class="botonEmpresa">Listado de Comentarios</button>
                            </div>  
                            <div class="col-xl-12 col-lg-12 col-md-12 col-xs-12 col-sm-12 contenidoMuestra" categoria="Todo" >
                                <img src="img/PorDia.png" alt="">
                                <button class="botonEmpresa">Grafico de Ventas Por Dias</button>
                            </div>  
                            <div class="col-xl-12 col-lg-12 col-md-12 col-xs-12 col-sm-12 contenidoMuestra" categoria="Todo" >
                                <img src="img/mensual.jpg">
                                <button class="botonEmpresa">Grafico de Seguidores por mes</button>
                            </div>     
                            <br><br><br> 
                            <input type="text" id="usuarioEmpresa" value=" <?php echo $id ?> ">
                </div> 
                <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-xs-12 col-sm-12 contenidoMuestra" categoria="Graficos" >
                                <img src="img/listado.jpg" alt="">
                             <button class="botonEmpresa">Listado de Comentarios</button>
                            </div>  
                            <div class="col-xl-12 col-lg-12 col-md-12 col-xs-12 col-sm-12 contenidoMuestra" categoria="Graficos" >
                                <img src="img/PorDia.png" alt="">
                                <button class="botonEmpresa">Grafico de Ventas Por Dias</button>
                            </div>  
                            <div class="col-xl-12 col-lg-12 col-md-12 col-xs-12 col-sm-12 contenidoMuestra" categoria="Graficos" >
                                <img src="img/mensual.jpg">
                                <button class="botonEmpresa">Grafico de Seguidores por mes</button>
                            </div>     
                            <br><br><br> 
                </div> 
              <div class="row">
                  
                    <div class="col-xl-4 col-lg-4 col-md-12 col-xs-12 col-sm-12 contenidoMuestra" categoria="principal" >
                     <button class="botonEmpresa">Publicar Promociones</button>
                    </div>  
                    <div class="col-xl-4 col-lg-4 col-md-12 col-xs-12 col-sm-12 contenidoMuestra" categoria="principal" >
                            <button class="botonEmpresa">Registrar Sucursales</button>
                    </div>  
                    <div class="col-xl-4 col-lg-4 col-md-12 col-xs-12 col-sm-12 contenidoMuestra" categoria="principal" >
                            <button class="botonEmpresa">Registrar Productos</button>
                    </div>     
              </div> 
             <hr>       
            <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-xs-12 col-sm-12 contenidoMuestra" categoria="perfil">
                        <img src="img/hp.jpg" >
                        <a href="#" data-toggle="modal" data-target="#MuestraProducto" >Editar Perfil</a>
                    </div>

             </div>
            </div>
        <div class="modal fade ventanamodal" id="MuestraProducto" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="card tarjeta" style="width: 18rem;">
                                <img src="img/hp.jpg" class="card-img-top">
                                <div class="card-body">
                                  <h5 class="card-title text-center">perfil</h5>
                                  <hr>
                                  <button type="button" class="boton">Cambiar Imagen</button>
                                <hr>
                                    <label for="">Nombre de Empresa</label>
                                   <input placeholder="nombre">
                                   <label for="">Administrador</label>
                                   <input placeholder="Administrador">
                                   <button type="button" class="boton">Guardar</button>
                                   <hr>
                                  
                                   <div class="text-center">
                                        <p>Redes sociales</p>
                                   <a href="#"><i class="fab fa-facebook"></a>
                                   <a href="#"><i class="fab fa-twitter-square"></i></a>
                                   <a href="#"><i class="fab fa-instagram"></i></a>   
                                    </div>
                                </div>
                         </div>
                    </div>
                      <button type="button" class="boton" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>  

      
     
</div>                


        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script> 
        <script src="js/admin-empresa.js"></script>
</body>
</html>