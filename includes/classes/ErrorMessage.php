<?php 
 // it is  for error message when user didnt mention entity id in url
?>

<?php
 
 class ErrorMessage {
     public static function show($text){
         exit("<span class='errorBanner'>$text</span>");
     }
 }

?>