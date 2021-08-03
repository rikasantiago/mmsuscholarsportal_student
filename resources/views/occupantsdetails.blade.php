<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="/images/mmsu logo.png">

        <title>MMSU - Dorm Management | Occupants</title>

        <!-- CSS -->
            <link rel="stylesheet" type="text/css" href="/ADMINstyle.css">

        <!-- JS -->
          <script type="text/javascript" src="dormfinderadmin.js"></script>
        
    </head>
    
    <body class="antialiased">
        
    <div class="uppernav">
        <h3 style="color:#0C4B05;margin-left:20px;">MMSU </h3> <h3> - Admin</h3>
    </div>
    
    <div class="topnav" id="myTopnav">
        <img style="float:left;margin-left:20px;margin-top:10px;" src="/images/mmsu logo.png"  height="60" width="60">
        <h4>MARIANO MARCOS <br> STATE UNIVERSITY</h4>
        <div class="titleheader">OCCUPANTS - Details</div>
    </div>
                
    <div class="verticalnav">
        <ul>
            <li class="username">Admin Name</li>
            <li><a href="admindashboard"> <img src="https://img.icons8.com/fluent-systems-regular/96/000000/home.png"/> Home</a></li>
            <li><a href="adminregistration"> <img src="https://img.icons8.com/fluent-systems-regular/50/000000/parse-resume.png"/> Registrants</a></li>
            <li><a class="active" href="admindormmain"><img src="https://img.icons8.com/fluent-systems-regular/96/000000/department.png"/> Dorm</a></li>
            <li><a href="#contact"><img src="https://img.icons8.com/fluent-systems-regular/96/000000/info-squared.png"/> Contact</a></li><br><br>
            <li><a href="welcome" style="color:red;"><img src="https://img.icons8.com/ios-filled/50/000000/exit.png"/>Log Out</a></li>
        </ul>    
    </div>
    
    <div class="dorm_details_con">

    <form>
        <label for="fname">Full Name</label>
            <input type="text" id="fname" value="Paola Francisco" style="width: 400px;" class="readapp" readonly="readonly"><br><br>
        <label for="fstudentid">Student Number</label>
            <input type="text" id="fstudentid" value="18-020008" style="width: 400px;" class="readapp" readonly="readonly"><br><br>
        <label for="gender">Sex</label>
            <input type="text" id="gender" value="Female" style="width: 400px;" class="readapp" readonly="readonly"><br><br>
        <label for="birthday">Date of Birth</label>
            <input type="text" id="birthday" value="11/04/2000" style="width: 400px;" class="readapp" readonly="readonly"><br><br>
        <label for="birthday">Address</label>
            <input type="text" id="birthday" value="Brgy. 26, Laoag City" style="width: 400px;" class="readapp" readonly="readonly"><br><br>
        <label for="email">Email</label>
            <input type="email" id="email" value="pjnfrancisco@gmail.com" style="width: 400px;" class="readapp" readonly="readonly"><br><br>
        <label for="number">Mobile Number</label>
            <input type="tel" id="number" value="09355350600" style="width: 400px;" class="readapp" readonly="readonly"><br><br>
        <label for="number">Contact of Guardian</label>
            <input type="tel" id="number" value="09355350600" style="width: 400px;" class="readapp" readonly="readonly"><br><br><br><br>
        <label for="college">College:</label>
            <input type="text" id="college" value="CAS" style="width: 400px;" class="readapp" readonly="readonly"><br><br>
        <label for="course">Course:</label>
            <input type="text" id="course" value="BSCS" style="width: 400px;" class="readapp" readonly="readonly"><br><br>
        <label for="dormitory">Type of Room:</label>
            <input type="text" id="dormitory" value="Dormitory Type" style="width: 400px;" class="readapp" readonly="readonly"><br>

        <button type="button" onclick="download()" class="btndownload">DOWNLOAD</button>
        <button type="button" onclick="remove()" class="btndelete">DELETE</button>
    </form>
    </div>

        </body>
    </head>
</html>