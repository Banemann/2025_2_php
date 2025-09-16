<?php

$password = $_POST["password"];
echo $password;

$hashed_password = password_hash($password, PASSWORD_DEFAULT);
echo $hashed_password;

if( password_verify($password, $hashed_password) ){
    echo "Logged in";
}
else{
    echo "Wrong password";
}