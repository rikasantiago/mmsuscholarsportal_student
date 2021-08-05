<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MMSU Scholar's Portal | Profile</title>

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="Scholar.css">  
        <!-- SCRIPT -->
        <script src="/studentDormFinder.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="icon" href="/images/mmsu logo.png">
        
 
    </head>
    
    <body class="antialiased">
        
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



        <!--Profile-->


        <br>
  
        <div class="w3-card-4" style="width: 1000px; margin-left:250px;">
  <div class="w3-container" style="text-align:center; background-color:#0C4B05; color:#FFCD00;">
    <h2>Personal Data Sheet</h2>
  </div>
  <form class="w3-container" action="/action_page.php" >
   

    <p> <br>     
    <label class="w3-text-black" style="font-size:20px;"><b>FULL NAME</b></label><br><br>
    <label class="w3-text-black">First Name</label>
    <input class="w3-input w3-border w3-sand" style="width:970px;" name="first" type="text" placeholder="Ma. Rika Paula" required="required"/></p>
   
    <p>      
    <label class="w3-text-black">Middle Name</label>
    <input class="w3-input w3-border w3-sand" name="last" type="text" placeholder="Bondad"></p>

    <p>      
    <label class="w3-text-black">Last Name</label>
    <input class="w3-input w3-border w3-sand" name="last" type="text" placeholder="Santiago"></p>

    <p>      
    <label class="w3-text-black">Suffix</label>
    <input class="w3-input w3-border w3-sand" name="last" type="text" placeholder="*"></p><br>


    <p>      
    <label class="w3-text-black">Student Number</label>
    <input class="w3-input w3-border w3-sand" name="last" type="text" placeholder="18-020007"></p>
    
    <p>      
    <label class="w3-text-black">Mobile Number</label>
    <input class="w3-input w3-border w3-sand" name="last" type="text" placeholder="09453614124"></p>

    <label class="w3-text-black">Sex</label><br>
    <select name="room" id="room" style="width:100%;"class="inputapp">
            <option value="female">Male</option>
            <option value="male">Female</option>
        </select>


    <label class="w3-text-black">College</label><br>
    <select name="room" id="room" style="width:100%;"class="inputapp">
            <option value="cas">CAS</option>
            <option value="coe">COE</option>
            <option value="cbea">CBEA</option>
            <option value="chs">CHS</option>
        </select>

    <label class="w3-text-black">Course</label><br>
    <select name="room" id="room" style="width:100%;"class="inputapp">
            <option value="cas">BS in Computer Science</option>
            <option value="coe">COE</option>
            <option value="cbea">CBEA</option>
            <option value="chs">CHS</option>
        </select>

    <label class="w3-text-black">Year Level</label><br>
    <select name="room" id="room" style="width:100%;"class="inputapp">
            <option value="cas">1st Year</option>
            <option value="coe">2nd Year</option>
            <option value="cbea">3rd Year</option>
            <option value="chs">4th Year</option>
        </select>


    <p><br>
    <label class="w3-text-black" style="font-size:20px;"><b>ADDRESS</b></label><br><br>
    <label class="w3-text-black">House/Block/Lot No.</label>
    <input class="w3-input w3-border w3-sand" name="last" type="text" placeholder="House Number #30"></p>

    <p>      
    <label class="w3-text-black">Street</label>
    <input class="w3-input w3-border w3-sand" name="last" type="text" placeholder="Basa St."></p>

    <p>      
    <label class="w3-text-black">Brgy.</label>
    <input class="w3-input w3-border w3-sand" name="last" type="text" placeholder="Brgy. 29"></p>

    <p>      
    <label class="w3-text-black">City/Municipality</label>
    <input class="w3-input w3-border w3-sand" name="last" type="text" placeholder="Laoag City"></p>

    <p>      
    <label class="w3-text-black">Province</label>
    <input class="w3-input w3-border w3-sand" name="last" type="text" placeholder="Ilocos Norte"></p><br><br>


  </form>
</div>





        <a href="home"><button type="button" class="greenbutton" style="  margin-top:15px; margin-bottom:50px;margin-right:400px;margin-left:60px">CANCEL</button></a>
        <button type="button" onclick="updateProfileFunction()" class="greenbutton" style="  margin-top:15px; margin-bottom:50px;margin-right:120px;"> UPDATE</button>

</body>
</html>