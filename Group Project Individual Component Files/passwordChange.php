<?php
    session_start();
//creates database connection
require_once('dbconnect.php');

//gets user email and access level information from form
$email = $_GET['email'];
$pwd = $_GET['pwd'];
echo "<br>";

unset($_SESSION["emailToUpdate"]);

$_SESSION["emailToUpdate"] = $email;

$my_query = "";

//selects user to modify password
$my_query = "select * from users where email = '$email'";

//checks login database users table for existing valid email
$result = mysqli_query($connection, $my_query);

//denies password change if email does not exist
if (mysqli_num_rows($result) == 0)
{
    header("Location: ../invalidUsername.html");
}

//if email exists the users password is changed
else

{
    $hashed = hash('sha512', $pwd);
    $my_query = "UPDATE users SET pwd = '$hashed' WHERE email = '$email'";

    echo "<br>";

    $result = mysqli_query($connection, $my_query);

    if($result)
    {
        header("Location:../passwordUpdated.php");
    }

    else
    {
        echo "<b>ERROR: unable to post</b>";
    }
}
?>