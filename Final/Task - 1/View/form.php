<?php
session_start();

$usernameError= $_SESSION["usernameErr"] ?? "";
$nameError= $_SESSION["nameErr"] ?? "";
$emailError= $_SESSION["emailErr"] ?? "";
$phoneError= $_SESSION["phoneErr"] ?? "";

$username = $_SESSION["username"] ?? "";
$name = $_SESSION["name"] ?? "";
$email = $_SESSION["email"] ?? "";
$phone = $_SESSION["phone"] ?? "";

$loginErr = $_SESSION["loginErr"] ?? "";


unset($_SESSION["usernameErr"]);
unset($_SESSION["nameErr"]);
unset($_SESSION["emailErr"]);
unset($_SESSION["phoneErr"]);

unset($_SESSION["username"]);
unset($_SESSION["name"]);
unset($_SESSION["email"]);
unset($_SESSION["phone"]);


unset($_SESSION["loginErr"]);

?>


<html>
<head>
    <title>Information Form</title>
</head>
<body>

<h2>Information Form</h2>

<form action="../Controller/formValidation.php" method="POST">
    
    <table>
        <tr>
            <td style="font-size: 20px;"> Username: </td>
            <td> <input type="text" name="username" placeholder="Enter username"> </td>
            <td> <span style="color: red;" ><?php echo $usernameError; ?></span> </td>
        </tr>

        <tr>
            <td style="font-size: 20px;">Name:</td>
            <td> <input type="text" name="name" placeholder="Enter your name"></td>
            <td> <span style="color: red;"><?php echo $nameError; ?></span> </td>
        </tr>

        <tr>
            <td style="font-size: 20px;">Email:</td>
            <td> <input type="text" name="email" placeholder="Enter your email"></td>
            <td> <span style="color: red;"><?php echo $emailError; ?></span> </td>
        </tr>

        <tr>
            <td style="font-size: 20px;">Phone Number:</td>
            <td> <input type="text" name="phone" placeholder="Enter your phone number"></td>
            <td> <span style="color: red;"><?php echo $phoneError; ?></span> </td>
        </tr>

        <tr>
            <td><p style="color: red;"><?php echo $loginErr; ?></p></td>
        </tr>

        <tr>
        
            <td><input type="submit" value="Submit" style="font-size: 20px;"></td>
        </tr>

    </table>



    
</form>

</body>
</html>