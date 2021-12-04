<?php
    class Bodega{
        private $conn;
        private $db_table = "bodega";
        public $id;
        public $nombre;
        public $descripcion;
        public $estado;
        public function __construct($db){
            $this->conn = $db;
        }

        public function getBodegas(){
            $sqlQuery = "SELECT id, nombre, descripcion, estado FROM " . $this->db_table . "";
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->execute();
            return $stmt;
        }

         public function getBodega(){
            $sqlQuery = "SELECT id, nombre, descripcion, estado FROM ". $this->db_table ." WHERE id = ? LIMIT 0,1";
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->bindParam(1, $this->id);
            $stmt->execute();
            return $stmt;
        }  

        public function createBodega(){
            $sqlQuery = "INSERT INTO ". $this->db_table ." SET nombre = :nombre, descripcion = :descripcion, estado = :estado";
            $stmt = $this->conn->prepare($sqlQuery);
            $this->nombre=htmlspecialchars(strip_tags($this->nombre));
            $this->descripcion=htmlspecialchars(strip_tags($this->descripcion));
            $this->estado=htmlspecialchars(strip_tags($this->estado));
            $stmt->bindParam(":nombre", $this->nombre);
            $stmt->bindParam(":descripcion", $this->descripcion);
            $stmt->bindParam(":estado", $this->estado);
            if($stmt->execute()){
               return true;
            }
            return false;
        }      

        public function updateBodega(){
            $sqlQuery = "UPDATE ". $this->db_table ." SET nombre = :nombre, descripcion = :descripcion,  estado = :estado WHERE id = :id";
            $stmt = $this->conn->prepare($sqlQuery);
            $this->id=htmlspecialchars(strip_tags($this->id));
            $this->nombre=htmlspecialchars(strip_tags($this->nombre));
            $this->descripcion=htmlspecialchars(strip_tags($this->descripcion));
            $this->estado=htmlspecialchars(strip_tags($this->estado));
            $stmt->bindParam(":id", $this->id);
            $stmt->bindParam(":nombre", $this->nombre);
            $stmt->bindParam(":descripcion", $this->descripcion);
            $stmt->bindParam(":estado", $this->estado);
            if($stmt->execute()){
               return true;
            }
            return false;
        }

        function deleteBodega(){
            $sqlQuery = "UPDATE ". $this->db_table ." SET estado = :estado WHERE id = :id";
            $stmt = $this->conn->prepare($sqlQuery);
            $this->id=htmlspecialchars(strip_tags($this->id));
            $this->estado=htmlspecialchars(strip_tags($this->estado));
            $stmt->bindParam(":id", $this->id);
            $stmt->bindParam(":estado", $this->estado);
            if($stmt->execute()){
               return true;
            }
            return false;
        }
    }
?>