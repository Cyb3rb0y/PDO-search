<?php
class Database {
    private $host = null;
    private $db_name = null;
    private $username = null;
    private $passwort = null;
    public $conn;

    public function dbConnection(){
        $this->setupParams();
        $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" .$this->db_name , $this->username ,$this->passwort);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $exception){
            print $exception->getMessage();
        }
        return $this->conn;
    }
    private function setupParams(){
        $config = parse_ini_file("config/sql.inc.php");

        $this->host = $config['host'];
        $this->db_name = $config['db'];
        $this->username = $config['uid'];
        $this->passwort = $config['pwd'];
    }
}
?>