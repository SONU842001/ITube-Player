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

     <!-- Creating the back button starts-->
     <div class="videoControls watchNav">
     <button onclick="window.history.back()"><i class="fas fa-arrow-left"></i></button>
          <h1><?php  echo $video->getTitle();?></h1>
     </div>






    <video controls autoplay> <!-- Here controls autoplay will give option to run the videos-->
         <source src='<?php echo $video->getFilePath(); ?>' type="video/mp4">
    </video>     

</div>