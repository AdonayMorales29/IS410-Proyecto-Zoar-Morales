<?php

	class Cliente{

		private $idCliente;
		private $nombre;
        private $apellido;
        private $contraseña;
        private $correoelectronico;
		private $ciudad;
        private $estadocivil;
        private $edad;

		public function __construct($idCliente,
					$nombre,
                    $apellido,
                    $contraseña,
                    $correoelectronico,
					$ciudad,
                    $estadocivil,
                    $edad){
			$this->idCliente = $idCliente;
			$this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->contraseña = $contraseña;
            $this->correoelectronico=$correoelectronico;
			$this->ciudad = $ciudad;
            $this->estadocivil = $estadocivil;
            $this->edad=$edad;
		}
		public function getIdCliente(){
			return $this->IdCliente;
		}
		public function setIdProducto($idCliente){
			$this->IdCliente = $idCliente;
		}
		public function getNombre(){
			return $this->nombre;
		}
		public function setNombre($nombre){
			$this->nombre = $nombre;
		}
		public function getApellido(){
			return $this->apellido;
		}
		public function setApellido($apellido){
			$this->apellido = $apellido;
        }
        public function getCorreoElectronico(){
            return $this->correoelectronico;
        }
        public function setCorreoElectronico($correoelectronico){
            $this->correoelectronico=$correoelectronico;
        }
		public function getContraseña(){
			return $this->contraseña;
		}
		public function setDescripcion($contraseña){
			$this->contraseña = $contraseña;
		}
		public function getCiudad(){
			return $this->ciudad;
		}
		public function setCiudad($ciudad){
			$this->ciudad = $ciudad;
		}
		public function getEstadocivil(){
			return $this->estadocivil;
		}
		public function setEstadocivil($estadocivil){
			$this->estadocivil = $estadocivil;
        }
        public function getEdad(){
            return $edad->edad;
        }
        public function setEdad($edad){
            $this->edad=$edad;
        }

		public function toString(){
			return "IdCliente: " . $this->idCliente . 
				" Nombre: " . $this->nombre . 
                " Apellido: " . $this->apellido . 
                " Contraseña: " . $this->contraseña . 
                " CorreoElectronico: ".$this->correoelectronico.
				" Estadocivil: " . $this->estadocivil . 
                " Ciudad: " . $this->ciudad.
                " Edad:".$this->edad;
        }

        public function agregarCliente($db){
            session_start();

            $cliente = $this->getData();

            $coleccion = $db->getReference("cliente");
            $resultado = $coleccion->push($cliente);

            if ($resultado->getKey() != null ) {
				return '{"mensaje" : "Registro almacenado", "Key" : "'.$resultado->getKey().'" }';

                $_SESSION["id"]=$resultado->getKey();
            } else {
                return '{"mensaje" : "Error al guardar el registro"}';
            }
            
        }
        
        public static function eliminarProducto($db, $idProducto, $idEmpresa){
            $ruta = "empresas/".$idEmpresa."/producto";

            $coleccion = $db->getReference($ruta);
            $resultado = $coleccion->getChild($idProducto)->remove();

            return '{"mensaje" : "Registro Eliminado"}';
            
        }

        public static function obtenerProducto($db, $idProducto, $idEmpresa){
            $ruta = "empresas/".$idEmpresa."/producto";

            $coleccion = $db->getReference($ruta);
            $resultado = $coleccion->getChild($idProducto)->getValue();

           // return '{"mensaje" : "Registro Eliminado"}';
           return json_encode($resultado);
            
        }

        public static function obtenerProductos($db, $idEmpresa){
            $ruta = "empresas/".$idEmpresa."/producto";

            $coleccion = $db->getReference($ruta);
            $resultado = $coleccion->getSnapshot()->getValue();

           // return '{"mensaje" : "Registro Eliminado"}';
           return json_encode($resultado);
            
        }
        
        public function actualizarProducto($db, $idEmpresa){
            $producto = $this->getData();

            $ruta = "empresas/".$idEmpresa."/producto";

            $coleccion = $db->getReference($ruta);
            $resultado = $coleccion->getChild($this->idProducto)->set($producto);


            if ($resultado->getKey() != null ) {
                return '{"mensaje" : "Registro Actualizado", "Key" : "'.$this->idProducto.'" }';
                $_SESSION["id"]=$resultado->getKey();
            } else {
                return '{"mensaje" : "No se Puede Actualizar"}';
            }
         
        }

		public function getData(){
			$resul["Nombre"] = $this->nombre;
			$resul["Apellido"] = $this->apellido;
			$resul["Contraseña"] = $this->contraseña;
            $resul["CorreoElectronico"] = $this->correoelectronico;
            $resul["Ciudad"] = $this->ciudad;
            $resul["Estadocivil"] = $this->estadocivil;
            $resul["Edad"] = $this->edad;

			return $resul;

		}


	}
?>