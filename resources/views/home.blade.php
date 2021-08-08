<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MMSU Scholar's Portal</title>

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="Scholar.css">  
        <!-- SCRIPT -->
        <script src="/Scholar.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="fonts/simple-line-icons/simple-line-icons.min.css">
        <link rel="stylesheet" href="fonts/font-awesome-css/font-awesome.min.css">
        <link rel="stylesheet" href="fonts/material-design-icons/material-icon.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="icon" href="/images/mmsu logo.png">
        
<style>

.column {
  float: left;
  width: 40%;
  padding: 1vw;
  margin-top: 5vw;
  margin-left: 6vw;
}
.square{
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
  border-radius:3vw;
}
</style>

    </head>
    
    <body class="antialiased">
        
        <!--Navigation-->

        <div class="topnav" id="myTopnav">
        <img style="float:left;margin-left:6vw;" src="/images/mmsu logo.png"  height="6%" width="6%">
        <p style="color: #fff; font-size: 1.2vw; font-weight: bolder; margin-top:2.5vw; margin-right:70vw;">MMSU SCHOLAR'S PORTAL</p>
</div>  

      <div class="menu">   
        <ul><li>
        <a href="#" style="float:right;margin:0vw 0vw 0vw 0vw;">18-020007</a>
        <ul>
        <li><a href="profilestudent">Profile</a></li><br>
        <li><a href="calendar">Calendar</a></li><br>
        <li><a href="scholarshipprograms">Scholarship Programs</a></li><br>
        <li><a href="welcome">Log Out</a></li>
        </ul>
        </ul></li>
        </div>

<!-- Page Content -->

<div class="alert">
  <b>Notice:</b>
  All scholars must upload all necessary files.
</div>


  <div class="column">
    <img class="square" src="/images/apply.jpg" alt="Snow" style="width:70%">
  </div>
  <a href="apply"><button type="button" class="homebutton" style="top: 80%; left: 16%;">Apply for TES</button></a>

  <div class="column">
    <img class="square" src="/images/update.jpg" alt="Forest" style="width:70%">
    <a href="scholarshipdetails"><button type="button" class="homebutton" style="top: 80%; left: 62%;">Update Scholarship</button></a>
</div>

  <div class="column">
    <img class="square" src="/images/delete.jpg" alt="Mountains" style="width:70%">
</div>
<a href="termination"> <button type="button" class="homebutton" style="top: 150%; left: 16%;">Terminate Scholarship</button></a>

<div class="column">
    <img class="square" src="/images/upload.jpg" alt="Mountains" style="width:70%">
</div>
<a href="upload"><button type="button" class="homebutton" style="top: 150%; left: 59%; width:26vw; height:3vw;">Upload Free Higher Education Form</button></a>


</body>
</html>
