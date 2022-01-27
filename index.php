<?php
require_once("includes/header.php");
   
$preview = new PreviewProvider($con,$userLoggedIn);
 echo $preview->createPreviewVideo(null);// if we use echo here then we have to return function otherwise we echo in place of return in function

$preview = new CategoryContainers($con,$userLoggedIn);
echo $preview->showAllCategories(null);

   
?>
