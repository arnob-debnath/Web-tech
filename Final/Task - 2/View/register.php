<?php
session_start();

$usernameError= $_SESSION["usernameErr"] ?? "";
$emailError= $_SESSION["emailErr"] ?? "";
$passwordError= $_SESSION["passwordErr"] ?? "";
$confirmPasswordError= $_SESSION["confirmPasswordErr"] ?? "";

$username = $_SESSION["username"] ?? "";
$email = $_SESSION["email"] ?? "";
$password = $_SESSION["password"] ?? "";
$confirmPassword = $_SESSION["confirmPassword"] ?? "";

unset($_SESSION["usernameErr"]);
unset($_SESSION["emailErr"]);
unset($_SESSION["passwordErr"]);
unset($_SESSION["confirmPasswordErr"]);

?>


<html>
<head>
    <title>Registration Form</title>
</head>
<body>

<h2>Registration Form</h2>

<form action="../Controller/registervalidation.php" method="POST">
    
    <table>
        <tr>
            <td style="font-size: 20px;"> Username: </td>
            <td> <input type="text" name="username" placeholder="Enter username" value = "<?php echo $username;?>"> </td>
            <td> <span style="color: red;" ><?php echo $usernameError; ?></span> </td>`
        </tr>

        <tr>
            <td style ="font-size: 20px;">Email:</td>
            <td> <input type="email" name="email" placeholder="Enter your email" value = "<?php echo $email;?>"> </td>
            <td> <span style="color: red;"><?php echo $emailError; ?></span> </td>
        </tr>

        <tr>
            <td style="font-size: 20px;">Password:</td>
            <td> <input type="password" name="password" placeholder="Enter your password" value = "<?php echo $password;?>"></td>
            <td> <span style="color: red;"><?php echo $passwordError; ?></span> </td>
        </tr>

        <tr>
            <td style="font-size: 20px;">Confirm Password:</td>
            <td> <input type="password" name="confirm_password" placeholder="Confirm your password" value = "<?php echo $confirmPassword;?>"></td>
            <td> <span style="color: red;"><?php echo $confirmPasswordError; ?></span> </td>
        </tr>

        <tr>
            <td > 
                <input type="submit" value="Register" style="font-size: 20px;">
            </td>
        </tr>

    </table>

    <tr>
        <td>
            <p>Already have an account? <a href="login.php"><strong>Login here</strong></a>.</p>
        </td>
    </tr>

</form>
</body>
</html>