<?php
session_start();
//creates database connection
require_once('dbconnect.php');

//gets user login information from forms
$email = $_GET['email'];
$pwd = $_GET['pwd'];

$hashed = hash('sha512', $pwd);

$my_query = "";

//selects access field to determine landing page for user access level
$my_query = "select access, email from users where email = '$email' and pwd = '$hashed' ";

//checks login database User table for existing valid email and password 
$result = mysqli_query($connection, $my_query);

//if exists logs in
if (mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_assoc($result))

    //creates html landing space based on access level and saves session access level and email
    if ($row['access'] == 0):
        $_SESSION["access"] = $row['access'];
        $_SESSION["email"] = $row['email'];
        echo "You are a default (access 0).";
    elseif ($row['access'] == 1):
        $_SESSION["access"] = $row['access'];
        $_SESSION["email"] = $row['email'];
        header("Location:../admin.php");
    elseif ($row['access'] == 2):
        $_SESSION["access"] = $row['access'];
        $_SESSION["email"] = $row['email'];
        header("Location:../formCreation.php");
    elseif ($row['access'] == 3):
        $_SESSION["access"] = $row['access'];
        $_SESSION["email"] = $row['email'];
        header("Location:../analysis.php");
    elseif ($row['access'] == 4):
        $_SESSION["access"] = $row['access'];
        $_SESSION["email"] = $row['email'];
        header("Location:../analysis.php");
    elseif ($row['access'] == 5):
        $_SESSION["access"] = $row['access'];
        $_SESSION["email"] = $row['email'];
        echo "You are a Non-Person Entity (NPE) (access 5).";
    else:
        echo "Contact your system admin to set your application access level.";
    endif;
}

//else does not exist 
else

{
    header("Location:../wrongUsernamePassword.html");
}
?>