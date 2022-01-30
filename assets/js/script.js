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
function initVideo(){
    startHideTimer();
}

