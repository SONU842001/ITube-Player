<?php
require_once("includes/header.php");
   
$preview = new PreviewProvider($con,$userLoggedIn);
 echo $preview->createMoviesPreviewVideo();// if we use echo here then we have to return function otherwise we echo in place of return in function

$containers = new CategoryContainers($con,$userLoggedIn);
echo $containers->showMovieCategories();

   
?>