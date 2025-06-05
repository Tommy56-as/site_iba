<?php
 class DataBase {
    private $db_name;
    private $db_user;
    private $db_password;
    private $db_host;
    private $conn;

    public  function __construct($db_name ="IBA_NKONGSAMBA"  , $db_user="root", $db_password="", $db_host="localhost") {
        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_password = $db_password;
        $this->db_host = $db_host;
    }

    public function connect(){
         $this->conn == null;
         try{
            $dsn = "mysql:host=" . $this->db_host . ";dbname=" . $this->db_name . ";charset=utf8";
            $conn = new PDO($dsn,$this->db_user,$this->db_password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn = $conn;
         }catch (PDOException $e){
            echo "Erreur de connexion : " . $e->getMessage();
         }
        return $this->conn;
    }

    public function query($statement){
        $req = $this->connect->query($statement);
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }

}
?>