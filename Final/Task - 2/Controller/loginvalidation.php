<?php
session_start();

$username= $_POST["username"];
$password= $_POST["password"];

$hasUsernameError= true;
$hasPasswordError= true;

if(!$username){
    $_SESSION["usernameErr"]= "Username is required.";
    $hasUsernameError= true;
}else {
    unset($_SESSION["usernameErr"]);
    $hasUsernameError= false;
}



if(!$password){
    $_SESSION["passwordErr"] = "Password is required.";
    $hasPasswordError= true;
}else {
    unset($_SESSION["passwordErr"]);
    $hasPasswordError= false;
}

if($hasUsernameError || $hasPasswordError) {
    $_SESSION["username"] = $username;
    $_SESSION["password"] = $password;  
    Header("Location: ../View/login.php");
    exit();
} else if( $username == "arn" && $password ==  "123456") {
    echo "<h1>Login Successful!</h1>";
    $_SESSION["username"] = $username;
    $_SESSION["isLoggedIn"] = true;
    Header("Location: ../View/dashboard.php");
    exit();
}else{
    $_SESSION["loginErr"] = "Invalid username or password.";
    Header("Location: ../View/login.php");
    exit();
}


?>