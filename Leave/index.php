<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Leave Management System</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <link rel="icon" type="image/x-icon" href="../Images/Logo.jfif">
        <link rel="stylesheet" href="../CSS/nav.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <nav id="navbar">
            <div class="nav-right">
                <a href="./">Home</a>
                <a href="./New Request">New Leave Request</a>
                <a href="#">Leave Request History</a>
                <a href="#">Leave History</a>
                <div class="dropdown">
                    <button class="dropbtn"><?php echo 'Hi '.$_SESSION['name']; ?> 
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="./Profile"><i class="fa fa-user"></i>&nbsp;Profile</a>
                        <a href="#"><i class="fa fa-power-off"></i>&nbsp;Sign out</a>
                    </div>
                </div> 
                <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
            </div>
        </nav>
        <script src="../JS/nav.js"></script> 
    </body>
</html>