<?php
    require_once '../vendor/autoload.php';
    use Kreait\Firebase\Factory;


    class  Database{
        private $keyFile = '../Secret/proyecto-poo-c71cb-08adb4fb3f3a.json';
        private $url = 'https://proyecto-poo-c71cb.firebaseio.com/';
        private $db;

        public function __construct(){
            $firebase = (new Factory)
            ->withServiceAccount($this->keyFile)
            ->withDatabaseUri($this->url)
            ->create();

            $this->db = $firebase->getDatabase();

        }
        
        public function getDB(){
            return $this->db;
        }
        
    }
  
?>