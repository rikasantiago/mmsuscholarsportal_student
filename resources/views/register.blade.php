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
        <img style="float:left;margin-left:100px;" src="/images/mmsu logo.png"  height="6%" width="6%">
        <h4>MMSU SCHOLAR'S PORTAL</h4>
        </div>
    
        <!--Register-->

        <div class="logincontainer2">
            <div class="wrapper">
            <div class="title"><span>Register</span></div>
        <form action="#">
          <div class="row"> 
            <input type="text" placeholder="Name">
          </div>
          <div class="row">
            <input type="password" placeholder="Student ID">
          </div>
          <div class="row">
            <input type="password" placeholder="Email Address">
          </div>
          <div class="row">
            <input type="password" placeholder="Password">
          </div>
          <div class="row">
            <input type="password" placeholder="Confirm Password">
          </div>
          <div class="row button"> <br>
          <a href="welcome"><button type="button" class="btnlogin">Signup</button></a>
          </div>
          
        </form>
      </div>
    </div>
            
  
    </body>
</html>
