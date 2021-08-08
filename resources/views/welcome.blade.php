<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MMSU Scholar's Portal</title>

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="Scholar.css">  
        <!-- SCRIPT -->
        <script src="/studentDormFinder.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <link rel="icon" href="/images/mmsu logo.png">
    </head>
    
    <body class="antialiased">
        
        <!--Navigation-->

        <div class="topnav" id="myTopnav">
        <img style="float:left;margin-left:6vw;" src="/images/mmsu logo.png"  height="6%" width="6%">
        <h4>MMSU SCHOLAR'S PORTAL</h4>
        </div>
    
        <!--Login-->

        <div class="logincontainer">
            <div class="wrapper">
            <div class="title"><span>Student Login</span></div>
        <form action="#">
          <div class="row">
           
            <input type="text" placeholder="Student ID/Examinee No">
          </div>
          <div class="row">
           
            <input type="password" placeholder="Password">
          </div>
          <div class="signup-link">Not a member? <a href="register">Signup now</a></div>
          <div class="row button"> <br>
          <a href="home"><button type="button" class="btnlogin">Login</button></a>
          </div>
          
        
      </div>
    </div>
            
  
    </body>
</html>
