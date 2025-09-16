<?php

function _($text){
    echo htmlspecialchars($text);
}

define("emailMin", 6);
define("emailMax", 50);
function _validateEmail(){
    $userEmail = $_POST['user_email'];
    if(strlen($userEmail) < emailMin){
        throw new Exception("Email min " .emailMin . " characters", 400);
    }
    if(strlen($userEmail) > emailMax){
        throw new Exception("Email max " .emailMax . " characters", 400);
    }

    return $userEmail;
}


function _noCache(){
    header("Cache-Control: no-cache, no-store, must-revalidate");
    header("Pragma: no-cache");
    header("Expires: Thu, 01 Jan 1970 00:00:00 GMT");
    header("Clear-Site-Data: \"cache\", \"cookies\", \"storage\", \"executionContexts\"");
}