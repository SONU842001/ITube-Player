<?php include_once("includes/header.php") ?>

<div class="textboxContainer">
    <input type="text" class="searchInput" placeholder="Search Movies & TV Shows">
</div>
<div class="results"></div>

<script>

$(function(){

    var username= '<?php echo $userLoggedIn; ?>';
    var timer;

    $(".searchInput").keyup(function(){

        clearTimeout(timer);

        timer = setTimeout(function(){
            var val = $(".searchInput").val();

            //Ajax code starts 
            if(val !="")
            {
                $.post("ajax/getSearchResults.php",{term: val ,username: username },function(data){
                    $(".results").html(data);
                })
            }
            else{
                $(".results").html("<h3 class='noSearch' > Plz Enter Movie Name</h3>");
            }
        }, 500);
    })
})


</script>
