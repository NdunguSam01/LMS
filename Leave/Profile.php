<?php
include '../Database/dbConfig.php';


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>User Profile</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <link rel="icon" type="image/x-icon" href="../Images/Logo.jfif">
        <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>    
        <script>
            $(function()
            {
                $('#navbar').load('./index.php');
            })
        </script>
    </head>
    <body>
        <div id="navbar"></div>
        <table>
            <tr>
                <td>First Name</td>
                <td>Last Name</td>
            </tr>
            <tr>
                <td><input type="text" readonly value=""></td>
                <td><input type="text" readonly></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>Phone Number</td>
            </tr>
            <tr>
                <td><input type="text" readonly value=""></td>
                <td><input type="text" readonly></td>
            </tr>
            <tr>
                <td>Department</td>
                <td>Password</td>
            </tr>
            <tr>
                <td><input type="text" readonly value=""></td>
                <td><input type="text" readonly></td>
            </tr>
        </table>
        <script src="" async defer></script>
    </body>
</html>