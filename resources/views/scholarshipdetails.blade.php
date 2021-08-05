<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MMSU Scholar's Portal | Scholarship </title>

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



        <!--Scholarship Details-->

        <div class="w3" style="margin-left:0px;">
  <div class="w3-container" style="background-color:#E5E4E2; color:#808080; width: 1600px;">
    <h1 style="float:left; font-family:Regular;">Update Existing Scholarship</h1>
  </div>

        <br>
  
        <div class="w3-card-4" style="width: 1000px; margin-left:250px;">
  <div class="w3-container" style="text-align:center; background-color:#0C4B05; color:#FFCD00;">
    <h2>Scholarship Details</h2>
  </div>
  <form class="w3-container" action="/action_page.php" ><br>

  <label class="w3-text-black">Scholarship Program</label><br>
    <select name="room" id="room" style="width:100%;"class="inputapp">  
        <option value="cas">University Scholar</option>
        <option value="coe">College Scholar</option>
        <option value="cbea">Incentive for USC Officers and SC Presidents</option>
        <option value="chs">Training Allowance for Athletes and Artists</option>
        <option value="cas">Student Assistanship Program</option>
        <option value="coe">Special Program for Employment of Students (SPES)</option>
        <option value="cbea">ATI Scholarship - Youth in Agriculture and Fisheries Program (YAFP)</option>
        <option value="spes">Cash Grant to Medical Students enrolled in State Universities and Colleges (CGMS-SUCs)</option>
        <option value="cas">CHED Expanded Grants-in-Aid Program for Poverty Alleviation (ESGPPA)</option>
        <option value="coe">CHED FDP II</option>
        <option value="cbea">CHED K12 Scholarship</option>
        <option value="chs">CHED SUC-Tulong Dunong</option>
        <option value="cas">CHED Universal Access to Quality Education Tertiary Education (TES2)</option>
        <option value="coe">Department of Agriculture-Agricultural Competitiveness Enhancement Fund Grants-in-Aid in Higher Educational (DA-ACEF GIAHEP) Scholarship</option>
        <option value="cbea">DAR Apayao</option>
        <option value="spes">DA BFAR Scholarship</option>
        <option value="chs">DOH Pre-Service Scholarship Program</option>
        <option value="cas">DOST-Science Education Institute Undergraduate Scholarship/Junior Level Science Scholarship</option>
        <option value="coe">Landbank Gawad Patnubay Scholarship Program</option>
        <option value="cbea">CHED Partylist/SSGP/Congressional/ Senate</option>
        <option value="spes">CHED State Scholarship Program (Full/Half Merit)</option>
        <option value="cas">CHED SAFE</option>
        <option value="coe">CHED Student Financial Assistance Program (STUFAP)</option>
        <option value="cbea">City Government of Batac Sirib Mannalon</option>
        <option value="chs">LGU Scholarships (City of Batac, City of Laoag, Bacarra, Cabugao, Dingras)</option>
        <option value="chs">GSIS Scholarship Program</option>
        <option value="cas">NCIP Merit-based Scholarship and Educational Assistance Program</option>
        <option value="coe">OWWA Scholarship</option>
        <option value="cbea">Sirib Scholarship (Academic, Youth)</option>
        <option value="spes">PBED Step-up Scholarship</option>
        <option value="cas">Toyota Motor Philippine Foundation, Inc. Scholarship</option>
        <option value="coe">Gokongwei Scholarship Program</option>
        <option value="cbea">Others (please specify:)</option>

        </select>

<label class="w3-text-black">If Other, please specify:</label><br>
        <input type="text" name="color" id="color" style="width:970px;" /></td><br>

        <label class="w3-text-black">Inclusive Year/Semester</label><br>
    <select name="room" id="room" style="width:100%;"class="inputapp">
            <option value="cas">2021-2022 / Second Semester</option>
            <option value="cas">2021-2022 / First Semester</option>
            <option value="cas">2020-2021 / Second Semester</option>
            <option value="cas">2020-2021 / First Semester</option>

        </select>

   
    <p>      
    <label class="w3-text-black">GWA</label>
    <input class="w3-input w3-border w3-sand" name="last" type="text" placeholder="1.75"></p><br>

    
    <label class="w3-text-indigo"><a href="proof">Upload Proof of Scholarship</a></label>
    <hr>
    
   
</form>


</div><br>





        <a href="home"><button type="button" class="greenbutton" style="  margin-top:15px; margin-bottom:50px;margin-right:400px;margin-left:90px">CANCEL</button></a>
        <button type="button" onclick="updateProfileFunction()" class="greenbutton" style="  margin-top:15px; margin-bottom:50px;margin-right:120px;"> UPDATE</button>

</body>
</html>