<?php


try{
    require_once __DIR__."/x.php";
    _validateEmail();
    # All good, now data can be processed;
    session_start();
    $_SESSION["userName"] = "Casper";
    header("Location: /profile");
}catch(Exception $ex){
    _($ex);
}
