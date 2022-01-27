<?php
class Entity {

    private $con, $sqlData;

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
    }

    public function getId() {
        return $this->sqlData["id"];
    }

    public function getName() {
        return $this->sqlData["name"];
    }

    public function getThumbnail() {
        return $this->sqlData["thumbnail"];
    }

    public function getPreview() {
        return $this->sqlData["preview"];
    }

}
?>