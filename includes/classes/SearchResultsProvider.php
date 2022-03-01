<?php 

class SearchResultsProvider{
    private $con,$username;

    public function  __construct($con,$username)
    {
        $this->con= $con;
        $this->username = $username;


    }

    public function getResults($inputText){
        
        $entities = EntityProvider::getSearchEntities($this->con, $inputText);
        

        $hhtml ="<div class='previewCategories noScroll'>";

        $html .=$this->getResultHtml($entities);
        
        return $html . "</div>";
        
    } 

    private function getResultHtml($entities){
        if(sizeof($entities) == 0){
            return ;
        }
        

         $entitiesHtml = "";
         $previewProvider = new PreviewProvider($this->con, $this->username);
         foreach($entities as $entity){
             $entitiesHtml.= $previewProvider->createEntityPreviewSquare($entity);
         }
        //return $entitiesHtml."<br>";//return title with line break 
          return "<div class='category'>
                     <a href='category.php?id=$categoryId'>
                        <h3>$title</h3>
                     </a>
                      
                     <div class='entities'>
                         $entitiesHtml
                     </div>
                  </div>";
    }
}
?>