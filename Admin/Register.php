<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>User Registration Page</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
        <link rel="stylesheet" href="../CSS/register.css">
        <link rel="icon" type="image/x-icon" href="../Images/Logo.jfif">
    </head>
    <body>
        
		
        <div class="row">
            <div class="column">
                <img id="logo" src="../Images/MAN logo.jpg"/>
            </div>
            <div class="column">
                <form method="post" action="../Info Process/Registration">
                    <!-- <img src="./Images/Logo.png"/> -->
                    <h2>All fields with * are mandatory</h2>
                    <table width="450px">
                        <tr>
                            <td>
                                <label for="fname">First name: <span style="color:red;">*</span></label>
                                <input type="text" name="fname" placeholder="First name" required autofocus>
                            </td>
                            <td>
                                <label for="lname">Last name: <span style="color:red;">*</span></label>
                                <input type="text" name="lname" placeholder="Last name" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="department">Department: <span style="color:red;">*</span></label>
                                <select name="department" placeholder="Select department">
                                    <option value="" disabled selected hidden>Choose a department</option>
                                    <option value="-">-</option>
                                    <option value="Department">Department</option>
                                </select>
                            </td>
                            <td>
                                <label for="role">Role: <span style="color:red;">*</span></label>
                                <select name="role">
                                    <option value="" disabled selected hidden> Choose a role</option>
                                    <option value="user">User</option>
                                    <option value="admin">Admin</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="password">Password: <span style="color:red;">*</span></label>
                                <input type="password" name="password" placeholder="Password" id="password" required>
                                <i class="far fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i>
                            </td>
                            <td>
                                <label for="cpassword">Confirm Password: <span style="color:red;">*</span></label>
                                <input type="password" name="cpassword" placeholder="Conifrm Password" id="cpassword" required>
                                <i class="far fa-eye" id="togglePassword1" style="margin-left: -30px; cursor: pointer;"></i>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div id="message">
                                    <h3>Password must contain the following:</h3>
                                    <li>A <b>lowercase</b> letter</li>
                                    <li>A <b>capital (uppercase)</b> letter</li>
                                    <li>A <b>number</b></li>
                                    <li>A <b>special character</b></li>
                                    <li>Minimum <b>8 characters</b></li>
                                </div>   
                            </td>     
                        </tr>
                    </table><br>
                        <button type="submit" name="register">Register</button>
                        <a href="../">Cancel</a>
                </form>
            </div>
        </div>
        

        <script src="./JS/main.js"></script>
    </body>
</html>