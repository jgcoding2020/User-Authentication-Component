<?php
    session_start();
    if ($_SESSION["access"] != 1)
    {
        exit(header("Location:accessRejection.html"));
    }
?>

<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="icon" type="image/x-icon" href="./favicon.ico">
        <link href="static/css/styleAdmin.css" rel="stylesheet">
        <script src="static/jquery/scriptAdmin.js"></script>
        <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> -->
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
        <title>Administration</title>
        <style>
          body {background-color: rgb(236, 232, 223); font-family: Georgia, 'Times New Roman', Times, serif;}
          a {color: black;}
          .blowfeldsign {font-size: 30px;}
          .topnav {background-color: #333; overflow: hidden; border-radius: 5px;}
          .topnav a {float: left; color: white; text-align: center; padding: 10px 20px; text-decoration: none; font-size: 20px; border-style: solid; border-color: #333; border-spacing: 1px; border-radius: 5px;}
          .topnav a:hover {background-color: rgb(233, 232, 232); color: black;}
          .topnav a.active {background-color: white; color: black;}
        </style>
    </head>
    <body class="container-fluid py-4">
        <h1 class="blowfeldsign"><strong>BLOWFELD</strong></h1>
        <div class="topnav">
            <a  href="index.php">Logout</a>
            <a  href="formCreation.php">Form Creation</a>
            <a  href="analysis.php">Data Analysis</a>
        </div> 
        <!--form for admin to update user access levels-->
        <form action="php/AccessLevel.php" method="get">
            <div class="container-fluid row">
                <!--spacing div-->
                <div class="container-fluid col-sm-4">
                </div>
                <!--user email search input-->
                <div class="form-group container-fluid py-2 col-sm-4">
                    <label for="formGroupUserEmail"><strong>Search User Email:</strong></label>
                    <input type="email" id="email" name="email" class="form-control" required autocomplete="off" placeholder="User Email">
                </div>
                <!--spacing div-->
                <div class="container-fluid col-sm-4">
                </div>
            </div>
            <div class="container-fluid row">
                <!--spacing div-->
                <div class="container-fluid col-sm-4">
                </div>
                <!--Drop down box for user access level selection-->
                <div class="form-group container-fluid py-2 col-sm-4">
                    <label for="formGroupSetAccessLevel"><strong>Set Access Level</strong></label>
                    <select class="custom-select" id="formGroupSetAccessLevel" name="value">
                        <option selected value="-1">Open this select menu</option>
                        <option value="0">Survey Respondent (default/basic)</option>
                        <option value="1">System Administrator</option>
                        <option value="2">Designer (form-dB designer/creator)</option>
                        <option value="3">Manager (someone with interest/oversight in more than one survey and its data)</option>
                        <option value="4">Analyst (someone needing access to data from more than just one survey for analysis)</option>
                        <option value="5">Non-Person Entity (NPE)</option>
                    </select>
                </div>
                <!--spacing div-->
                <div class="container-fluid col-sm-4">
                </div>
            </div>
            <div class="row py-2 container-fluid">
                <!--spacing div-->
                <div class="col-sm-5 container-fluid">
                </div>
                <!--form submit button-->
                <button type="submit" class="button button-block col-sm-2 container-fluid">Submit</button>
                <!--spacing div-->
                <div class="col-sm-5 container-fluid">
                </div>
            </div>
        </form>
        <form action="php/passwordChange.php" method="get">
            <div class="container-fluid row">
                <!--spacing div-->
                <div class="container-fluid col-sm-4">
                </div>
                <!--user email search input-->
                <div class="form-group container-fluid py-2 col-sm-4">
                    <label for="formGroupUserEmail"><strong>Search User Email:</strong></label>
                    <input type="email" id="email" name="email" class="form-control" required autocomplete="off" placeholder="User Email">
                </div>
                <!--spacing div-->
                <div class="container-fluid col-sm-4">
                </div>
            </div>
            <div class="container-fluid row">
                <!--spacing div-->
                <div class="container-fluid col-sm-4">
                </div>
                <!--user password change input-->
                <div class="form-group container-fluid py-2 col-sm-4">
                    <label for="formGroupUserEmail"><strong>Enter Password:</strong></label>
                    <input type="password" id="pwd" name="pwd" class="form-control" required autocomplete="off" placeholder="User Password">
                </div>
                <!--spacing div-->
                <div class="container-fluid col-sm-4">
                </div>
            </div>
            <div class="row py-2 container-fluid">
                <!--spacing div-->
                <div class="col-sm-5 container-fluid">
                </div>
                <!--form submit button-->
                <button type="submit" class="button button-block col-sm-2 container-fluid">Submit</button>
                <!--spacing div-->
                <div class="col-sm-5 container-fluid">
                </div>
            </div>
        </form>
        <!-- <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> -->
        <script src='static/jquery/scriptIndex.js'></script><!-- Same script as the index.php page -->
        <script  src="js/script.js"></script>
    </body>
</html>