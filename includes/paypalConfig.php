<?php 

require_once("PayPal-PHP-SDK/autoload.php");
// create a controller 


$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
    'AUtcToe2SuSOF-JEdRbd-yqf_nByPsLSNZpHqY9_XWFh_x12GdqX17QHj9CT2y4CATC0QBwYLd4kmRQT',//client id of paypal
    'EPcC4krVHQWQ8yTvfnxQHLJynIL9DyyFlY01hi8kVCT-NL6KUs8LnV5vGCMd_FUyWmi14WWPPbaiDRNw' // secret id of paypal
    )
    );
?>