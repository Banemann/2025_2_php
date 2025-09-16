<?php

function _($text){
    echo htmlspecialchars($text);
}

define("emailMin", 6);
define("emailMax", 50);
function _validateEmail(){
    $userEmail = $_POST['user_email'];
    if(strlen($userEmail) < emailMin){
        throw new Exception("Email min " .emailMin . " characters");
    }
    if(strlen($userEmail) > emailMax){
        throw new Exception("Email max " .emailMax . " characters");
    }

    return $userEmail;
}