<?php

// Database connection
$conn = mysqli_connect("localhost:3307", "root", "", "demo");

if(!$conn)
{
    die("Database connection failed");
}


// Update password
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if($password == $cpassword)
    {
        $sql = "UPDATE user 
                SET password='$password' 
                WHERE name='$name'";

        if(mysqli_query($conn, $sql))
        {
            echo "Password Updated Successfully";
        }
        else
        {
            echo "Password Update Failed";
        }
    }
    else
    {
        echo "Password and Confirm Password do not match";
    }
}
