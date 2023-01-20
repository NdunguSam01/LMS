<?php
include_once '../Database/dbConfig.php';

if(isset($_POST['register']))
{
    $fname = $_POST['fname'];
    $lname=$_POST['lname'];
    $department=$_POST['department'];
    $role = $_POST['role'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];

    if($password==$cpassword)
    {
        $password = md5($password);
        $insert = "INSERT INTO users(fname,lname,department,role,password) VALUES ('$fname','$lname','$department','$role','$password')";
        mysqli_query($con, $insert);
        echo '<script>alert("Registration successful")</script>';
        header("Location:../");
        // header("Location: http://www.example.com/another-page.php");
        // exit();
    }
    else if($password!=$cpassword)
    {
        header("Location: Register");
        exit();
    }
    else
    {
        header("Location: Register");
        exit();
    }
}
?>

