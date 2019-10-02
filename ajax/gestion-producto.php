<?php

    include_once '../clases/clase-producto.php';
    include_once '../clases/clase-firebase.php';

    $database = new Database();

    if ($_SERVER['REQUEST_METHOD']=='POST' && !isset($_POST["idProducto"])) {
        
        $producto = new Producto(null,
            $_POST["nombre"],
            $_POST["precio"],
            $_POST["descripcion"],
            $_POST["calificacion"],
            $_POST["urlImg"],           
        );
        
        echo $producto->agregarProducto( $database->getDB(), $_POST["idEmpresa"] );
         
    }
//------------------------------------------------------------------------------------------
//obtenerProductos
    if ($_SERVER['REQUEST_METHOD']=='GET' && isset($_GET["idEmpresa"])) {

        echo Producto::obtenerProductos($database->getDB(),$_GET["idEmpresa"]);
   }
//----------------------------------------------------------------------------------------
   //ACTUALIZAR
   if ($_SERVER['REQUEST_METHOD']=='PUT' && isset($_GET["idEmpresa"]) && isset($_GET["idProducto"]) ) {
        $_PUT=array();
        if ($_SERVER['REQUEST_METHOD']=='PUT') {
            parse_str(file_get_contents("php://input"),$_PUT);
        }
        $producto = new Producto($_GET["idProducto"],
        $_PUT["nombre"],
        $_PUT["precio"],
        $_PUT["descripcion"],
        $_PUT["calificacion"],
        $_PUT["urlImg"],           
);
          
    echo $producto->actualizarProducto($database->getDB(), $_GET["idEmpresa"] );
}

if ($_SERVER['REQUEST_METHOD']=='DELETE' && isset($_GET["idProducto"]) ) {

    echo Producto::eliminarProducto( $database->getDB(), $_GET["idProducto"], $_GET["idEmpresa"]);
        
}

if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST["idProducto"]) && isset($_POST["idEmpresa"]) ) {

    echo Producto::obtenerProducto( $database->getDB(), $_POST["idProducto"], $_POST["idEmpresa"]);
        
}

    
    



?>