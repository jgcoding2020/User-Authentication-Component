<?php

//php variables storing login database information
//Uses apache with port 80
//Database server MySQL 5.7.24
//Document root C:\MAMP\htdocs
$host = 'localhost';//Using port 3306, it is the MySQL port
$username = 'root';
$password = 'root';
$database_name = 'blowfeld';//Changed this from 'login' to 'blowfeld'

//Create variable storing connection to login database
$connection = mysqli_connect($host, $username, $password, $database_name);

//Print to console any error in the connection
if (mysqli_connect_errno()):
    printf("Error: Connection error. " , mysqli_connect_error());
    exit();
endif;
?>
