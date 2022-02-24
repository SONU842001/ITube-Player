<?php
require_once("includes/header.php");

if(!isset($_GET["id"])){
    ErrorMessage::show(("No id passed to page"));
}
   

   
$preview = new PreviewProvider($con,$userLoggedIn);
 echo $preview->createCategoryPreviewVideo($_GET["id"]);// if we use echo here then we have to return function otherwise we echo in place of return in function

$containers = new CategoryContainers($con,$userLoggedIn);
echo $containers->showCategory($_GET["id"]);

   
?>