<?php
    class conectar{
        private $host;
        private $nombreBD;
        private $usuario;
        private $password;

        private $conexion;
        //1: Creo la variable 'statement' para guardar la sentencia SQL
        private $statement;
        //2: Se crea la variable que almacena los resultados obtenidos
        private $rs; 


        public function __construct($host, $nombreBD, $usuario, $password){
            $this->host=$host;
            $this->nombreBD=$nombreBD;
            $this->usuario=$usuario;
            $this->password= $password;                        
        }

        public function getConexion(){            

            try{
                $this->conexion= new PDO("mysql:host=".$this->host.
                ";dbname=".$this->nombreBD,
                $this->usuario,$this->password);

            }catch (PDOException $e){
                print json_encode($e->getMessage());
                die();
            }

            return $this->conexion;
        }

        //Se comienza una transaccion para usar commit y rollback
        public function beginTransaction(){
            try {
                return $this->conexion->beginTransaction();
            } catch (PDOException $e){
                print json_encode($e->getMessage());
                die();
            }           
        }

        public function commit(){
            try {
                return $this->conexion->commit();
            } catch (PDOException $e){
                print json_encode($e->getMessage());
                die();
            }
        }

        public function rollback(){
            try {
                return $this->conexion->rollback();
            } catch (PDOException $e){
                print json_encode($e->getMessage());
                die();
            }
        }

        public function desconectar() {
            $this->rs=null;
            $this->statement=null;
            $this->conexion=null;
        }

        
    }

?>