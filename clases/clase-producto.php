<?php

	class Producto{

		private $idProducto;
		private $nombre;
		private $precio;
		private $descripcion;
		private $calficacion;
		private $urlImg;

		public function __construct($idProducto,
					$nombre,
					$precio,
					$descripcion,
					$calficacion,
					$urlImg){
			$this->idProducto = $idProducto;
			$this->nombre = $nombre;
			$this->precio = $precio;
			$this->descripcion = $descripcion;
			$this->calficacion = $calficacion;
			$this->urlImg = $urlImg;
		}
		public function getIdProducto(){
			return $this->idProducto;
		}
		public function setIdProducto($idProducto){
			$this->idProducto = $idProducto;
		}
		public function getNombre(){
			return $this->nombre;
		}
		public function setNombre($nombre){
			$this->nombre = $nombre;
		}
		public function getPrecio(){
			return $this->precio;
		}
		public function setPrecio($precio){
			$this->precio = $precio;
		}
		public function getDescripcion(){
			return $this->descripcion;
		}
		public function setDescripcion($descripcion){
			$this->descripcion = $descripcion;
		}
		public function getCalficacion(){
			return $this->calficacion;
		}
		public function setCalficacion($calficacion){
			$this->calficacion = $calficacion;
		}
		public function getUrlImg(){
			return $this->urlImg;
		}
		public function setUrlImg($urlImg){
			$this->urlImg = $urlImg;
		}
		public function toString(){
			return "IdProducto: " . $this->idProducto . 
				" Nombre: " . $this->nombre . 
				" Precio: " . $this->precio . 
				" Descripcion: " . $this->descripcion . 
				" Calficacion: " . $this->calficacion . 
				" UrlImg: " . $this->urlImg;
        }

        public function agregarProducto($db, $idEmpresa){
            $producto = $this->getData();

            $ruta = "empresas/".$idEmpresa."/producto";

            $coleccion = $db->getReference($ruta);
            $resultado = $coleccion->push($producto);


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
			$resul["Precio"] = $this->precio;
			$resul["Descripcion"] = $this->descripcion;
			$resul["Calificacion"] = $this->calficacion;
			$resul["urlImag"] = $this->urlImg;

			return $resul;

		}


	}
?>