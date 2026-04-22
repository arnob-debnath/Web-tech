<?php
session_start();

?>


<html>
<head>
    <title>Login Form</title>
</head>
<body>

<h2>Login Form</h2>

<form action="../Controller/loginvalidation.php" method="POST">
    
    <table>
        <tr>
            <td style="font-size: 20px;"> Username: </td>
            <td> <input type="text" name="username" placeholder="Enter username"> </td>
        </tr>

        <tr>
            <td style ="font-size: 20px;">Password:</td>
            <td> <input type="password" name="password" placeholder="Enter your password"> </td>
        </tr>

        <tr>
            <td > 
                <input type="submit" value="Login" style="font-size: 20px;">
            </td>
        </tr>

    </table>


</form>
</body>
</html>