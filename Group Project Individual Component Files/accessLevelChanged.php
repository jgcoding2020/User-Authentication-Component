<?php
    session_start();
    //denies access if not an admin
    if ($_SESSION["access"] != 1)
    {
        exit(header("Location:accessRejection.html"));
    }

    //sets statement based on user email and access level
    if ($_SESSION["accessLevelUpdate"] == 0)
      $statement = $_SESSION["emailToUpdate"] . " is now a Survey Respondent";
    else if ($_SESSION["accessLevelUpdate"] == 1)
      $statement = $_SESSION["emailToUpdate"] . " is now a System Administrator";
    else if ($_SESSION["accessLevelUpdate"] == 2)
      $statement = $_SESSION["emailToUpdate"] . " is now a Designer (form-dB designer/creator)";
    else if ($_SESSION["accessLevelUpdate"] == 3)
      $statement = $_SESSION["emailToUpdate"] . " is now a Manager (someone with interest/oversight in more than one survey and its data)";
    else if ($_SESSION["accessLevelUpdate"] == 4)
      $statement = $_SESSION["emailToUpdate"] . " is now a Analyst (someone needing access to data from more than just one survey for analysis)";
    else if ($_SESSION["accessLevelUpdate"] == 5)
      $statement = $_SESSION["emailToUpdate"] . " is now a Non-Person Entity (NPE)";
?>

<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="UTF-8">
        <title>Access Level Changed</title>
        <link rel="icon" type="image/x-icon" href="./favicon.ico">

        <link href="static/css/styleRejection.css" rel="stylesheet">
        <link href='static/css/styleRejectionFonts.css' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="static/css/styleRejectionAjax.css">

        <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"> -->
        <!--<link rel="stylesheet" href="./style.css">-->
        <style>
          body {background-color: rgb(236, 232, 223); font-family: Georgia, 'Times New Roman', Times, serif;}
          .jumbotron{background-color: rgb(236, 232, 223);}
          </style>
    </head>
    <body>
        <div class="jumbotron">
            <h1 class="display-3">Access Level Changed!</h1>
            <p class="lead">You have succesfully changed the user account access level!</p>
            <hr class="my-2">
            <p>
              <?php 
                echo ($statement);
              ?>
            </p>
            <p class="lead">
              <a class="btn btn-primary btn-lg" href="admin.php" role="button">OK</a>
            </p>
        </div>
    </body>
</html>