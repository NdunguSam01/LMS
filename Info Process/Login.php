<?php
session_start();
include_once '../Database/dbConfig.php';

if(isset($_POST['login']))
{
    $id=mysqli_real_escape_string($con,$_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $password=md5($password);
    $query="SELECT * FROM users WHERE employeeID='$id' AND password='$password' ";
    $result=mysqli_query($con,$query);
    $row=mysqli_fetch_array($result);
    
    if($row['employeeID']==$id && $row['password']==$password)
    {
        //Redirecting admin to admin page
        if($row['role']=='admin')
        {
            $_SESSION['role'] = "admin";
            $_SESSION['name'] = $id;
            echo '<script>alert("Welcome admin")</script>';
            echo '<script>window.location.assign("../Admin");</script>';
        }
        //Redirecting user to user page
        elseif($row['role']='user')
        {
            $_SESSION['role'] = 'user';
            $_SESSION['name'] = $row['fname'];
            echo '<script>alert("Welcome user")</script>';
            echo '<script>window.location.assign("../Leave");</script>';
        }
    }
    else
    {
        echo '<script>alert("Wrong ID/password combination!")</script>';
        echo '<script>window.location.assign("../");</script>';
    }
}
?>