<?php

    include_once '../clases/clase-cliente.php';
    include_once '../clases/clase-firebase.php';

    $database = new Database();

    

    if ($_SERVER['REQUEST_METHOD']=='POST') {
        
        $cliente = new Cliente(null,
            $_POST["nombre"],
            $_POST["apellido"],
            $_POST["contraseña"],
            $_POST["correoelectronico"],
            $_POST["ciudad"],
            $_POST["estadocivil"],
            $_POST["edad"],
            null,
            null
        );
        
        echo $cliente->agregarCliente( $database->getDB() );
         
    }

   //obtenerClientee
   if ($_SERVER['REQUEST_METHOD']=='GET' && !isset($_GET["idCliente"])) {

    echo Cliente::obtenerCliente($database->getDB());
    }

   if ($_SERVER['REQUEST_METHOD']=='PUT' && isset($_GET["id"]) ) {
        
         
    echo "Editar"; 
}

if ($_SERVER['REQUEST_METHOD']=='DELETE' && isset($_GET["idCliente"]) ) {
        
    echo Cliente::eliminarCliente( $database->getDB(), $_GET["idCliente"]);
}

    
    



?>