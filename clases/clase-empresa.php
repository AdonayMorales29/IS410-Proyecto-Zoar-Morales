<?php


	class Empresa{

		private $idEmpresa;
		private $empresa;
		private $pais;
		private $direccion;
		private $correo ;
		private $telefono;
		private $latitud;
		private $longitud;
		private $fax;
		private $facebook;
		private $twiter;
        private $instagram;
        private $logo;
        private $banner;

		public function __construct($idEmpresa,
					$empresa,
					$pais,
					$direccion,
					$correo ,
					$telefono,
					$latitud,
					$longitud,
					$fax,
					$facebook,
					$twiter,
                    $instagram,
                    $logo,
                    $banner){
			$this->idEmpresa = $idEmpresa;
			$this->empresa = $empresa;
			$this->pais = $pais;
			$this->direccion = $direccion;
			$this->correo  = $correo ;
			$this->telefono = $telefono;
			$this->latitud = $latitud;
			$this->longitud = $longitud;
			$this->fax = $fax;
			$this->facebook = $facebook;
			$this->twiter = $twiter;
            $this->instagram = $instagram;
			$this->logo = $logo;
			$this->banner = $banner;
            
		}
		public function getIdEmpresa(){
			return $this->idEmpresa;
		}
		public function setIdEmpresa($idEmpresa){
			$this->idEmpresa = $idEmpresa;
		}
		public function getEmpresa(){
			return $this->empresa;
		}
		public function setEmpresa($empresa){
			$this->empresa = $empresa;
		}
		public function getPais(){
			return $this->pais;
		}
		public function setPais($pais){
			$this->pais = $pais;
		}
		public function getDireccion(){
			return $this->direccion;
		}
		public function setDireccion($direccion){
			$this->direccion = $direccion;
		}
		public function getCorreo (){
			return $this->correo ;
		}
		public function setCorreo ($correo ){
			$this->correo  = $correo ;
		}
		public function getTelefono(){
			return $this->telefono;
		}
		public function setTelefono($telefono){
			$this->telefono = $telefono;
		}
		public function getLatitud(){
			return $this->latitud;
		}
		public function setLatitud($latitud){
			$this->latitud = $latitud;
		}
		public function getLongitud(){
			return $this->longitud;
		}
		public function setLongitud($longitud){
			$this->longitud = $longitud;
		}
		public function getFax(){
			return $this->fax;
		}
		public function setFax($fax){
			$this->fax = $fax;
		}
		public function getFacebook(){
			return $this->facebook;
		}
		public function setFacebook($facebook){
			$this->facebook = $facebook;
		}
		public function getTwiter(){
			return $this->twiter;
		}
		public function setTwiter($twiter){
			$this->twiter = $twiter;
		}
		public function getInstagram(){
			return $this->instagram;
		}
		public function setInstagram($instagram){
			$this->instagram = $instagram;
		}
		public function toString(){
			return "IdEmpresa: " . $this->idEmpresa . 
				" Empresa: " . $this->empresa . 
				" Pais: " . $this->pais . 
				" Direccion: " . $this->direccion . 
				" Correo : " . $this->correo  . 
				" Telefono: " . $this->telefono . 
				" Latitud: " . $this->latitud . 
				" Longitud: " . $this->longitud . 
				" Fax: " . $this->fax . 
				" Facebook: " . $this->facebook . 
				" Twiter: " . $this->twiter . 
                " Instagram: " . $this->instagram;
				" Logo: " . $this->logo;
				" banner: " . $this->banner;
                
        }
        
        public function agregarEmpresa($db){
            session_start();

            $empresa = $this->getData();

            $coleccion = $db->getReference("empresas");
            $resultado = $coleccion->push($empresa);

            if ($resultado->getKey() != null ) {
				return '{"mensaje" : "Registro almacenado", "Key" : "'.$resultado->getKey().'" }';
				
				//$coleccion = $db->getReference("empresas/".$resultado->getKey()."/Redes Sociales")->push(array());

                $_SESSION["id"]=$resultado->getKey();
            } else {
                return '{"mensaje" : "Error al guardar el registro"}';
            }
            
		}

		public static function obtenerEmpresas($db){
            $ruta = "empresas";

            $coleccion = $db->getReference($ruta);
            $resultado = $coleccion->getSnapshot()->getValue();

           // return '{"mensaje" : "Registro Eliminado"}';
           return json_encode($resultado);
            
		}
		
        public static function eliminarEmpresas($db){
            $ruta = "empresas/".$idEmpresa;

			$coleccion = $db->getReference($ruta);
            $resultado = $coleccion->getSnapshot()->getValue();

            return '{"mensaje" : "Registro Eliminado"}';
            
        }
			

        public function getData(){
            $result['Empresa'] = $this->empresa;
            $result['Pais'] = $this->pais;
            $result['Direccion'] = $this->direccion;
            $result['Correo'] = $this->correo;
            $result['Telefono'] = $this->telefono;
            $result['Latitud'] = $this->latitud;
            $result['Longitud'] = $this->longitud;
            $result['fax'] = $this->fax;
            $result['facebook'] = $this->facebook;
            $result['Twiter'] = $this->twiter;
            $result['Instagram'] = $this->instagram;


            return $result;
        }
	}
?>