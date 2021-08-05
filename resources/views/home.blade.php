<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MMSU Scholar's Portal</title>

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="Scholar.css">  
        <!-- SCRIPT -->
        <script src="/studentDormFinder.js"></script>
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
  width: 33.33%;
  padding: 5px;
  margin-top: 120px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}

.square{
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
  border-radius:50px;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.text {
  background-color: #04AA6D;
  color: white;
  font-size: 16px;
  padding: 16px 32px;
}


.row:hover .square {
  opacity: 0.3;
}


.row:hover .middle {
  opacity: 1;
}

</style>

    </head>
    
    <body class="antialiased">
        
        <!--Navigation-->

        <div class="topnav" id="myTopnav">
        <img style="float:left;margin-left:100px;" src="/images/mmsu logo.png"  height="6%" width="6%">
        <p style="color: #fff; font-size: 1.20em; font-weight: bolder; margin-top:35px; margin-right:1090px;">MMSU SCHOLAR'S PORTAL</p>
</div>  

      <div class="menu">   
        <ul><li>
        <a href="#" style="float:right;margin:10px 0px 0px 0px;">18-020007</a>
        <ul>
        <li><a href="profilestudent">Profile</a></li><br>
        <li><a href="calendar">Calendar</a></li><br>
        <li><a href="scholarshipprograms">Scholarship Programs</a></li><br>
        <li><a href="welcome">Log Out</a></li>
        </ul>
        </ul></li>
        </div>

<!-- Page Content -->

<div class="row">
  <div class="column">
    <img class="square" src="/images/square1.png" alt="Snow" style="width:70%">
    <div class="middle" style="left: 250px; top:400px;">
    <div class="text"><a href="apply">APPLY TES</a></div>
  </div>

  </div>
  <div class="column">
    <img class="square" src="/images/square1.png" alt="Forest" style="width:70%">
    <div class="middle" style="left: 250px; top:400px; left: 775px;">
    <div class="text"><a href="scholarshipdetails">Update Existing Scholarship</a></div>
  </div>
</div>

  <div class="column">
    <img class="square" src="/images/square1.png" alt="Mountains" style="width:70%">
    <div class="middle" style="left: 250px; top:400px; left: 1290px;">
    <div class="text"><a href="termination">Terminate</a></div>
  </div>
  </div>
</div>


</body>
</html>
