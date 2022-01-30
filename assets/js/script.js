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

/* creating back button functionality*/

