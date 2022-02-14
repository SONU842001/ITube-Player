function volumeToggle(button) {
    var muted = $(".previewVideo").prop("muted");
    $(".previewVideo").prop("muted", !muted);//it is for muted and unmuted 

    $(button).find("i").toggleClass("fa-volume-mute");//changing icon muted to unmuted
    $(button).find("i").toggleClass("fa-volume-up");
}

function previewEnded() {
    $(".previewVideo").toggle();
    $(".previewImage").toggle();
}

/*Hiding the video controls after 2 seconds means after two seconds when mouse move from screen then video name and back button must disapear  */

function startHideTimer()
{
    var timeout = null;
    
    $(document).on("mousemove", function(){
        clearTimeout(timeout);
        $(".watchNav").fadeIn();

        timeout =setTimeout(function(){
            $(".watchNav").fadeOut();
        },2000);
        // after two second it will fadeout



    })
    
}

// progress timer of video starts  using ajax

function initVideo(videoId, username){
    startHideTimer();
    updateProgresTimer(videoId, username); 
}

function updateProgresTimer(videoId, username){
    addDuration(videoId, username);
   
}
function addDuration(videoId, username){
     $.post("ajax/addDuration.php", { videoId: videoId , username: username },function(data){  // post method in ajax (very important ) first ajax/addDuration.php se ajax request kiya gaya and phir function me data mila us file se
         alert(data);
     })
}