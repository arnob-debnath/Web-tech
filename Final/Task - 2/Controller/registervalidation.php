<?php
session_start();

$username= $_POST["username"];
$email= $_POST["email"];
$password= $_POST["password"];
$confirmPassword=$_POST["confirm_password"];

$hasUsernameError= true;
$hasEmailError= true;
$hasPasswordError= true;
$hasConfirmPasswordError= true;

if(!$username){
    $_SESSION["usernameErr"]= "Username is required.";
    $hasUsernameError= true;
}else if(strlen($username) < 3){
    $_SESSION["usernameErr"]= "At least 3 characters needed.";
    $hasUsernameError= true;
}else {
    unset($_SESSION["usernameErr"]);
    $hasUsernameError= false;
}

if(!$email){
    $_SESSION["emailErr"] = "Email is required.";
    $hasEmailError= true;
}else {
    unset($_SESSION["emailErr"]);
    $hasEmailError= false;
}

if(!$password){
    $_SESSION["passwordErr"] = "Password is required.";
    $hasPasswordError= true;
}else if(strlen($password) < 6){
    $_SESSION["passwordErr"] = "Minimum 6 characters needed.";
    $hasPasswordError= true;
}else {
    unset($_SESSION["passwordErr"]);
    $hasPasswordError= false;
}

if(!$confirmPassword){
    $_SESSION["confirmPasswordErr"] = "Please confirm your password.";
    $hasConfirmPasswordError= true;
}else if($password !== $confirmPassword){
    $_SESSION["confirmPasswordErr"] = "Passwords do not match.";
    $hasConfirmPasswordError= true;
}else {
    unset($_SESSION["confirmPasswordErr"]);
    $hasConfirmPasswordError= false;
}

if($hasUsernameError || $hasEmailError || $hasPasswordError || $hasConfirmPasswordError) {
    $_SESSION["username"] = $username;
    $_SESSION["email"] = $email;
    $_SESSION["password"] = $password;
    $_SESSION["confirmPassword"] = $confirmPassword;  
    Header("Location: ../View/register.php");
    exit();
} else {
    echo "<h1>Registration Successful!</h1>";
    Header("Location: ../View/login.php");
    exit();

}

?>