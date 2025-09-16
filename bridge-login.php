<?php

try{
    require_once __DIR__."/x.php";
    $userEmail = _validateEmail();
    require_once __DIR__."/db.php";
    $sql = "SELECT * FROM users WHERE user_email = :email";
    $stmt = $_db->prepare($sql);
    $stmt->bindValue(":email", $userEmail);
    $stmt->execute();
    $user = $stmt->fetch();

    // var_dump($user);
    // echo "<br>";
    // print_r($user);
    // echo "<br>";
    // echo json_encode($user);

    if( !$user ){
        header("Location: /login");
        exit();
    }

    unset($user["user_password"]);
    session_start();    
    $_SESSION["user"] = $user;
    header("Location: profile.php");
}catch(Exception $e){
    http_response_code($e->getCode());
    _($e->getMessage());
}
