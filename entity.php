<?php 
require_once("includes/header.php");



if(!isset($_GET["id"])){   // Here Get will take id values from browser URL (important concept)
    ErrorMessage::show("No ID passed into page ");
}

$entityId = $_GET["id"];
$entity = new Entity($con, $entityId);

$preview = new PreviewProvider($con,$userLoggedIn);
 echo $preview->createPreviewVideo($entity);//Now it will work for any individual id entity not random videos

 $seasonProvider = new SeasonProvider($con,$userLoggedIn);
  echo $seasonProvider->create($entity);

  $seasonProvider = new CategoryContainers($con,$userLoggedIn);
  echo $seasonProvider->showCategory($entity->getCategoryId(),"You might also like");
  

?>