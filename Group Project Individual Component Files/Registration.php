<?php

//creates database connection
require_once('dbconnect.php');

//gets user information entered into forms 
$fname = $_GET['fname'];
$lname = $_GET['lname'];
$email = $_GET['email'];
$pwd = $_GET['pwd'];
$access = 0; 

$my_query = "";

//checks login database User table for existing email
$my_query = "select * from users where email = '$email' ";

$result = mysqli_query($connection, $my_query);

//if email exists in login database User table denies account creation
if (mysqli_num_rows($result) > 0)
{
    echo "Sorry, this email already exists. Please choose a different email";
}

//if email does not exist in login database User table accepts account creation
else

{
    $hashed = hash('sha512', $pwd);
    $my_query = "INSERT INTO users (fname, lname, email, pwd, access) VALUES ('$fname','$lname','$email','$hashed','$access')";

    echo "<br>";

    $result = mysqli_query($connection, $my_query);

    if($result)
    {
        header("Location:../accountCreated.html");
    }

    else
    {
        echo "<b>ERROR: unable to post</b>";
    }
}
?>