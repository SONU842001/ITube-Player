<?php  // Incrementing the videos views?>

<?php 
$hideNav = true;
require_once("includes/header.php");

if(!isset($_GET["id"])){   // Here Get will take id values from browser URL (important concept)
    ErrorMessage::show("No ID passed into page ");
}

$video = new Video($con, $_GET["id"]);
$video->incrementViews();
$upNextVideo = VideoProvider::getUpNext($con, $video);

?>

<div class="watchContainer">

     <!-- Creating the back button starts-->
     <div class="videoControls watchNav">
     <button onclick="window.history.back()"><i class="fas fa-arrow-left"></i></button>
          <h1><?php  echo $video->getTitle();?></h1>
     </div>



      <!-- It will show next video after completing one video -->
      <div class="videoControls upNext" style="display:none;">
       <button onclick="restartVideo();"><i class="fas fa-redo"></i></button>

       <div class="upNextContainer">
       <h2>Up Next:</h2>
       <h3><?php echo $upNextVideo->getTitle();?></h3>
       <h3><?php echo $upNextVideo->getSeasonAndEpisode();?></h3>

       <button class="playNext" onclick="watchVideo(<?php echo $upNextVideo->getId();?>);"><i class="fas fa-play"></i>Play</button>
       
       </div>

      </div>





    <video controls autoplay onended="showUpNext()"> <!-- Here controls autoplay will give option to run the videos-->
         <source src='<?php echo $video->getFilePath(); ?>' type="video/mp4">
    </video>     

</div>

<!--  Hiding the video controls starts from hare -->

<script >
    initVideo("<?php echo $video->getId(); ?>", "<?php echo $userLoggedIn ;?>");
</script>