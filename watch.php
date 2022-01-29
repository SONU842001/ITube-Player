<?php  // Incrementing the videos views?>

<?php 

require_once("includes/header.php");
if(!isset($_GET["id"])){   // Here Get will take id values from browser URL (important concept)
    ErrorMessage::show("No ID passed into page ");
}

$video = new Video($con, $_GET["id"]);
$video->incrementViews();
?>