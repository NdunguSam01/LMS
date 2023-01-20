<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Leave Management System</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
        <link rel="icon" type="image/x-icon" href="./Images/Logo.jfif">
        <link rel="stylesheet" href="./CSS/index.css">
    </head>
    <body>
        <nav>
            <a href="./Admin/Register">Register</a>
        </nav>
        <div class="row">
            <div class="column">
                <img id="logo" src="./Images/MAN logo.jpg"/>
            </div>
            <div class="column" id="col1">
                <img src="./Images/Logo.png" style="width: 360px;"/>
                <form method="post" action="./Info Process/Login">
                    <label for="username"><i class='fa fa-user'></i></label>
                    <input type="text" name="username" placeholder="Employee ID" required autocomplete="off"><br><br>
                    <label for="password"><i class="fa fa-lock"></i></label>
                    <input type="password" name="password" placeholder="Password" id="password" required>
                    <i class="far fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i><br><br>
                    <button type="submit" name="login">Login</button>
                </form>
            </div>
        </div>
        
    <script src="./JS/main.js"></script>
    </body>
</html>