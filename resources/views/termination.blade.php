<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MMSU Scholar's Portal | Termination</title>

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="Scholar.css">  
        <!-- SCRIPT -->
        <script src="/studentDormFinder.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="icon" href="/images/mmsu logo.png">
        
 
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



        <!--Termination-->

        <br><br><br>
  
        <div class="w3-card-4" style="width: 1000px; margin-left:250px;">
  <div class="w3-container" style="text-align:center; background-color:#0C4B05; color:#FFCD00;">
    <h2>Termination of Scholarship</h2>
  </div>
  <form class="w3-container" action="/action_page.php" ><br>

  <label class="w3-text-black" style="font-size:20px;"><b>Reason of Termination:</b></label><br>
  <input type="radio" id="age1" name="age" value="30">
  <label for="reason1">Graduated</label><br>
  <input type="radio" id="age2" name="age" value="60">
  <label for="reason2">Did not qualify to eligibility requirements</label><br>  
  <input type="radio" id="age3" name="age" value="100">
  <label for="reason3">Change of Scholarship Program</label><br> 
  <input type="radio" id="age3" name="age" value="100">
  <label for="reason4">Stopped Schooling</label><br>
  <input type="radio" id="age3" name="age" value="100"style ="margin-left:20px;">
  <label for="reason5">i. Sickness/Health Condition</label><br>
  <input type="radio" id="age3" name="age" value="100"style ="margin-left:20px;">
  <label for="reason6">ii. Family Concerns</label><br>
  <input type="radio" id="age3" name="age" value="100"style ="margin-left:20px;">
  <label for="reason7">iii. Personal Concerns</label><br>
  <label class="w3-text-black" style="margin-left:20px;">If Other, please specify:</label><br>
        <input type="text" name="color" id="color" style="width:400px; margin-left:20px;" /></td><br><br>
</form>



</div><br><br><br>

        <a href="home"><button type="button" class="greenbutton" style="  margin-top:15px; margin-bottom:50px;margin-right:400px;margin-left:90px">CANCEL</button></a>
        <button type="button" onclick="updateProfileFunction()" class="greenbutton" style="  margin-top:15px; margin-bottom:50px;margin-right:170px;"> UPDATE</button>

</body>
</html>