<?php

session_start();

$username= $_POST["username"];
$name= $_POST["name"];
$email= $_POST["email"];
$phone=$_POST["phone"];

$hasUsernameError = true;
$hasNameError = true;
$hasEmailError = true;
$hasPhoneError = true;



if($username){
    $_SESSION["usernameErr"] = "Username is required.";
    $hasUsernameError = true;
} else {
   unset($_SESSION["usernameErr"]); 
   $hasUsernameError = false; 
}

if($name){
    $_SESSION["nameErr"] = "Name is required.";
    $hasNameError = true;
} else {
    unset($_SESSION["nameErr"]);
    $hasNameError = false;
}

if($email){
    $_SESSION["emailErr"] = "Email is required.";
    $hasEmailError = true;
} else {
    unset($_SESSION["emailErr"]);
    $hasEmailError = false;
}

if($phone){
    $_SESSION["phoneErr"] = "Phone number is required.";
    $hasPhoneError = true;
} else {
    unset($_SESSION["phoneErr"]);
    $hasPhoneError = false;
}


if($hasUsernameError || $hasNameError || $hasEmailError || $hasPhoneError) {
    $_SESSION["username"] = $username;
    $_SESSION["name"] = $name;
    $_SESSION["email"] = $email;
    $_SESSION["phone"] = $phone;  
    Header("Location: ../View/form.php");
    exit();
} else {
    echo "<h1>Hello Mr, $name </h1>";
    echo "<h2>Your Information</h2>";
    echo "<h3>Your username is $username </h3>";
    echo "<h3>Your email is $email </h3>";
    echo "<h3>Your phone number is $phone </h3>";
}

?>