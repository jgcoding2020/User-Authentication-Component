<?php
  session_start();
  session_unset();
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>BLOWFELD - Sign-Up/Login Form</title>
  <link rel="icon" type="image/x-icon" href="./favicon.ico">
  <link href='static/css/styleIndex.css' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="static/css/styleIndexCSS.css">
  <!-- <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'> -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"> -->
<link rel="stylesheet" href="./css/style.css">
<style>
  body {font-family: Georgia, 'Times New Roman', Times, serif;}
  button {font-family: Georgia, 'Times New Roman', Times, serif;}
</style>
</head>
<body>

<!-- partial:index.partial.html -->
<div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Create Account</h1>
          
          <form action="php/Registration.php" method="get">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" id="fname" name="fname" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text" id="lname" name="lname" required autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" id="email" name="email" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password" id="pwd" name="pwd" required autocomplete="off"/>
          </div>
          
          <button type="submit" class="button button-block">Get Started</button>
          
          </form>

        </div>
        
        <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form action="php/home.php" method="get">
          
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" id="email" name="email" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" id="pwd" name="pwd" required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button class="button button-block">Log In</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
<!-- partial -->
  <!-- <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="js/script.js"></script> -->
  <script src='static/jquery/scriptIndex.js'></script>
  <script  src="js/script.js"></script>

</body>
</html>
