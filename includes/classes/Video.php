

<?php
class Video{

    private $con, $sqlData,$entity;

    public function __construct($con, $input) {
        $this->con = $con;

        if(is_array($input)) {// Checking ,input is array or not  
            $this->sqlData = $input;
        }
        else {// If input is not array then we have to make array with help of id value
            $query = $this->con->prepare("SELECT * FROM entities WHERE id=:id");
            $query->bindValue(":id", $input);
            $query->execute();

            $this->sqlData = $query->fetch(PDO::FETCH_ASSOC);
        }
    

    $this->entity = new Entity($con, $this->sqlData["entityId"]);

}
    public function getId(){
        return $this->sqlData["id"];
    }

    public function getTitle(){
        return $this->sqlData["title"];
    }
    public function getDescription(){
        return $this->sqlData["description"];
    }
    public function getFilePath(){
        return $this->sqlData["filepath"];
        
    }

    public function getThumbnail(){
     
        //return $this->sqlData["thumbnail"]; // As we have no video thumbnail in database so we take entity thumbnail

        return $entity->getThumbnail();
    }

    public function getEpisodeNumber(){
        return $this->sqlData["episode"];
        
    }
}
?>