<?php 
    session_start();
    $id = $_GET["id"];
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Productos</title>
    <link rel="shortcut icon" href="img/Zoar/1.png">
    <link rel="stylesheet" type="text/css" media="screen" href="css/mainProducto.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
   
</head>
   
<body >


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

            <div class=" col-xl-2 col-lg-2 col-md-4 col-sm-12    categorias  ">
                <a href="#" class="categoria_item" categoria="All">Todo</a>
                <a href="#" class="categoria_item" categoria="Tecnologia">Tecnologia</a>
                <a href="#" class="categoria_item" categoria="Autos">Autos</a>
                <a href="#" class="categoria_item" categoria="Motos">Motos</a>
                <a href="#" class="categoria_item" categoria="Joyeria">Joyeria</a>
                <a href="#" class="categoria_item" categoria="Belleza">Belleza</a>
                <a href="#" class="categoria_item" categoria="Deportes">Deportes</a>
                <a href="#" class="categoria_item" categoria="Repuestos">Repuestos</a>
                <a href="#" class="categoria_item" categoria="Instrumentos">Instrumentos Musicales</a> 
                <a href="landing.php" class="contenido" categoria="paginaPrincipal"><i class="fas fa-angle-double-left"></i>Pagina Principal</a>
            </div>
            <!--Productos a Mostrar-->

            <div class=" col-xl-10 col-lg-10 col-md-8 col-sm-12  listaProductos">
                    <h1 style="color:#400129;"> Elige tus Productos Aqui</h1>
                   <div class="col-12 ">
                        <select required class="contenidoPrincipal">
                                <option  value="">Registrate como</option>
                                <option  value="formulario-cliente"  >Cliente</option>
                                <option  value="formulario-empresa" >Empresa</option>
                        </select>
                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                        <a href="#"><i class="fab fa-twitter-square"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                   </div>
              <div class="row">
                    
                <div class="col-xl-3 col-lg-3 col-md-6 col-xs-12 col-sm-12 productos-Item" categoria="Tecnologia">
                    <img src="img/productos/cm.jpg" >
                    <a href="#" data-toggle="modal" data-target="#MuestraProducto" >Televisor</a>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-xs-12 col-sm-12 productos-Item" categoria="Tecnologia">
                        <img src="img/productos/comp.jpg" >
                        <a href="#" >Laptop</a>
                    </div>
                 <div class="col-xl-3 col-lg-3 col-md-6 col-xs-12 col-sm-12 productos-Item" categoria="Tecnologia">
                            <img src="img/productos/monitor1.jpg" >
                            <a href="#" >Monitor</a>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-xs-12 col-sm-12 productos-Item" categoria="Tecnologia">
                        <img src="img/productos/cel.jpg" >
                        <a href="#" >Telefono</a>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-xs-12 col-sm-12 productos-Item" categoria="Autos">
                        <img src="img/productos/car1.jpeg">
                        <a href="#" >Autos</a>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-xs-12 col-sm-12 productos-Item" categoria="Autos">
                    <img src="img/productos/car2.jpg" >
                    <a href="#" >Autos</a>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-xs-12 col-sm-12 productos-Item" categoria="Autos">
                    <img src="img/productos/car3.jpg" >
                    <a href="#" >Autos</a>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-xs-12 col-sm-12 productos-Item" categoria="Autos">
                    <img src="img/productos/car.jpg" >
                    <a href="#" >Autos</a>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-xs-12 col-sm-12 productos-Item" categoria="Motos">
                    <img src="img/productos/moto1.jpg" >
                    <a href="#" >Motos</a>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-xs-12 col-sm-12 productos-Item" categoria="Motos">
                    <img src="img/productos/moto2.jpg">
                    <a href="#" >Motos</a>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-xs-12 col-sm-12 productos-Item" categoria="Motos">
                    <img src="img/productos/moto3.jpg" >
                    <a href="#" >Motos</a>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-xs-12 col-sm-12  productos-Item" categoria="Motos">
                    <img src="img/productos/motos.jpg" >
                    <a href="#" >Motos</a>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-xs-12 col-sm-12 productos-Item" categoria="Joyeria">
                    <img src="img/productos/reloj.jpg" >
                    <a href="#" >Joyeria</a>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-xs-12 col-sm-12 productos-Item" categoria="Repuestos">
                        <img src="img/productos/repuestos.jpg" >
                        <a href="#" >Repuestos</a>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-xs-12 col-sm-12 productos-Item" categoria="Deportes">
                        <img src="img/productos/deportes.png" >
                        <a href="#" >Balon de Futbol</a>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-xs-12 col-sm-12 productos-Item" categoria="Instrumentos">
                        <img src="img/productos/bateria.jpg" >
                        <a href="#" >Bateria</a>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-xs-12 col-sm-12 productos-Item" categoria="Belleza">
                        <img src="img/productos/belleza.jpg" >
                        <a href="#" >Maquillaje</a>
                </div>

            </div>  

            </div>

        </div>
        <div class="modal fade ventanamodal" id="MuestraProducto" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="card tarjeta" style="width: 18rem;">
                                <img src="img/productos/cm.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title text-center">Televisor</h5>
                                  <hr>
                                  <p class="card-text">Si todavia no te has registrado dale click al siguiente enlace.</p>
                                  <a href="#" class="enlaces1">Cliente</a>
                                  <div class = "text-center" >
                                        <p>Calificacion de Producto</p>
                                        <i class="far fa-star estrellas"></i>
                                        <i class="far fa-star estrellas"></i>
                                        <i class="far fa-star estrellas"></i>
                                        <i class="far fa-star estrellas"></i>
                                        <i class="far fa-star estrellas"></i>
                                  </div>
                                <hr>
                                <span><i class="fas fa-bookmark"></i>Disponible</span>
                                <span ><del>Antes L 1500.00</del></span><br>
                                <span class="text-center"><b>Ahora L 1200.00</b></span><br>
                                  <a href="#" class="enlaces">Comprar</a> 
                                  <button type="button" class="boton">Añadir a la cesta</button>
                                  <hr>
                                  <a href="#" class="enlaces" >Empresa</a><br>

                                
                                </div>
                         </div>
                    </div>
                      <button type="button" class="boton" id="cerrar" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>  

      
     
</div>                
        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script> 
        <script src="js/producto.js"></script>
       
        
</body>
</html>