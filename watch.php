<?php  // Incrementing the videos views?>

<?php 

require_once("includes/header.php");
if(!isset($_GET["id"])){   // Here Get will take id values from browser URL (important concept)
    ErrorMessage::show("No ID passed into page ");
}

$video = new Video($con, $_GET["id"]);
$video->incrementViews();

?>

<div class="watchContainer">
    <video controls autoplay> <!-- Here controls autoplay will give option to run the videos-->
         <source src='<?php echo $video->getFilePath(); ?>' type="video/mp4">
    </video>     

</div>