<?php

    include_once '../clases/clase-empresa.php';
    include_once '../clases/clase-firebase.php';

    $database = new Database();

    if ($_SERVER['REQUEST_METHOD']=='POST') {
        
        $empresa = new Empresa(null,
            $_POST["empresa"],
            $_POST["pais"],
            $_POST["direccion"],
            $_POST["correo"],
            $_POST["telefono"],
            $_POST["latitud"],
            $_POST["longitud"],
            $_POST["fax"],
            $_POST["facebook"],
            $_POST["twiter"],
            $_POST["instagram"],
            null,
            null
        );
        
        echo $empresa->agregarEmpresa( $database->getDB() );
         
    }

   //obtenerEmpreas
   if ($_SERVER['REQUEST_METHOD']=='GET' && !isset($_GET["idEmpresa"])) {

    echo Empresa::obtenerEmpresas($database->getDB());
}

   if ($_SERVER['REQUEST_METHOD']=='PUT' && isset($_GET["id"]) ) {
        
         
    echo "Editar"; 
}

if ($_SERVER['REQUEST_METHOD']=='DELETE' && isset($_GET["idEmpresa"]) ) {
        
         
    echo "remove"; 
}

    
    



?>