<?php
    session_start();
//creates database connection
require_once('dbconnect.php');

//gets user email and access level information from form
$email = $_GET['email'];
$access = $_GET['value'];
echo "<br>";

unset($_SESSION["emailToUpdate"]);
unset($_SESSION["accessLevelUpdate"]);

$_SESSION["emailToUpdate"] = $email;
$_SESSION["accessLevelUpdate"] = $access;


//forces admin to use drop down selection box to change user access level or try again
if ($access == -1)
{
    $link = "#";
    echo "You must select an access level for the User:";
    echo "<br>";
    echo "<br>";
    $link_address = '../admin.php';
    die("Please try again: <a href='$link_address'>Link</a>");
}

$my_query = "";

//selects user to modify access level
$my_query = "select * from users where email = '$email'";

//checks login database users table for existing valid email
$result = mysqli_query($connection, $my_query);

//denies access level change if email does not exist
if (mysqli_num_rows($result) == 0)
{
    header("Location: ../invalidUsername.html");
}

//if email exists the users access level is changed and role displayed
else

{
    $my_query = "UPDATE users SET access = '$access' WHERE email = '$email'";

    echo "<br>";

    $result = mysqli_query($connection, $my_query);

    if($result)
    {
        header("Location:../accessLevelChanged.php");
    }

    else
    {
        echo "<b>ERROR: unable to post</b>";
    }

}
?>