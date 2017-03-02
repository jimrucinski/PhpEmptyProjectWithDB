<?php
//
//Singleton Database Methodology
//
    class SingleDB{
        protected static $db;            
        private $host;
        private $user;
        private $pass;
        private $dbName;            
        private static $instance = "";            
        private $connection;
        private $results;
        private $numRows;
        private $stmt;            
        
        static function getInstance()
        {
            if(!self::$instance){//if there is no instance of itself
              self::$instance = new self(); //create one 
            }
            return self::$instance;
        }
        private function __construct(){
           
        }

        function connect($host, $user, $password, $dbName){
            $this -> user = $user;
            $this -> pass = $password;
            $this -> dbName =$dbName;
            $this -> host = $host;                    
            try{
                $dsn = 'mysql:host=' . $host .';dbname=' . $dbName ;
                self::$db = new PDO($dsn, $user, $password);
                self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);                
                
            } catch (PDOException $ex) {
                echo "connection error: " . $ex->getMessage();
            }
        }      

        public function resultset(){
            $this->execute();
            return $this->stmt->fetchALL(PDO::FETCH_ASSOC);
        }
        public function execute(){
            //$this->stmt->setFetchMode(PDO::FETCH_CLASS,'PmaTix');
            return $this->stmt->execute();
        }
        public function DoQuery($sql){
          $this->results = self::query($sql);
          //foreach(self::$db->query($sql) as $row){
          //          print_r($row);
          //}
        }
        public function query($sql){
            $this->stmt = self::$db->prepare($sql);
        }
    }

?>