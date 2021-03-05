<?php 

require_once 'db_config.php';

class Crud {
    private $conn;

    public function __construct(){
        $database = new Database();
        $db = $database->dbConnection();
        $this->conn = $db;
    }
    public function createComiclist($artists, $art, $title_eng, $title_de, $sites, $complete, $translated, $editing){
        $stmt = $this->conn->prepare("INSERT INTO liste (artists,art,title_eng,title_de,sites,complete,translated,editing) VALUES (:artists,:art,:title_eng,:title_de,:sites,:complete,:translated,:editing)");
        $erg = $stmt->execute(array(
            ':artists' => $artists,
            ':art' => $art,
            ':title_eng' => $title_eng,
            ':title_de' => $title_de,
            ':sites' => $sites,
            ':complete' => $complete,
            ':translated' => $translated,
            ':editing' => $editing
        ));
        return $erg;
    }
    public function getComiclist(){
        $stmt = $this->conn->query("SELECT * FROM liste ORDER BY artists, title_eng");
        $data = $stmt->fetchAll();
        return $data;
    }
    public function getList($id){
        $stmt = $this->conn->prepare("SELECT * FROM liste WHERE id=:id");
        $stmt->execute(array(':id' => $id));
        $data = $stmt->fetch();
        return $data;
    }
    public function updateList($id, $artists, $art, $title_eng, $title_de, $sites, $complete, $translated, $editing){
        $stmt = $this->conn->prepare("UPDATE liste SET artists=:artists,art=:art,title_eng=:title_eng,title_de=:title_de,sites=:sites,complete=:complete,translated=:translated,editing=:editing  WHERE id=:id");
        $erg = $stmt->execute(array(
                            ':artists' => $artists,
                            ':art' => $art,
                            ':title_eng' => $title_eng,
                            ':title_de' => $title_de,
                            ':sites' => $sites,
                            ':complete' => $complete,
                            ':translated' => $translated,
                            ':editing' => $editing,
                            ':id' => $id                                
        ));
        return $erg;
    }
    # Ist die Function so richtig??
    public function searchList($search){
        $stmt = $this->conn->prepare("SELECT * FROM liste WHERE artists=:search OR title_eng=:search OR title_de=:search ORDER BY title_eng");
        $stmt->execute(array(':search' => $search));
        $data = $stmt->fetchAll();
        return $data;
    }
}
?>