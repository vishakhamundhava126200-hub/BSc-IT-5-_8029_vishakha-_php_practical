<?php

$conn = new mysqli("localhost","root","","signup_db");

if($conn->connect_error){
    die("Connection Failed : ".$conn->connect_error);
}

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];

$password=password_hash($_POST['password'],PASSWORD_DEFAULT);

$sql="INSERT INTO users(name,email,phone,password)
VALUES('$name','$email','$phone','$password')";

if($conn->query($sql)==TRUE){

echo "<h2>Registration Successful!</h2>";

}
else{

echo "Error : ".$conn->error;

}

$conn->close();

?>