<?php
class SeasonProvider {
    private $con, $username;

    public function __construct($con, $username) {
        $this->con = $con;
        $this->username = $username;
    }

    public function create($entity) {
        $seasons = $entity->getSeasons();

        if(sizeof($seasons) == 0) {
            return;// it will return movies 
        }

        $seasonsHtml = "";//i have created a string to concatenate the html part
        foreach($seasons as $season) {
            $seasonNumber = $season->getSeasonNumber();
            

// Here i have done string concatenation 
            $seasonsHtml .= "<div class='season'> 
                                    <h3>Season $seasonNumber</h3>
                                </div>";
                                
        }

       return $seasonsHtml;
    }
}
?>