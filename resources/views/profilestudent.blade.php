<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MMSU Scholar's Portal | Profile</title>

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="Scholar.css">  
        <!-- SCRIPT -->
        <script src="/Scholar.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="icon" href="/images/mmsu logo.png">
        
 
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



        <!--Profile-->


        <br>
  
        <div class="w3-card-4" style="width: 65vw; margin-left:20vw;">
    <div class="w3-container" style="text-align:center; background-color:#0C4B05; color:#FFCD00;">
    <h2 style="color:#fff;">Personal Data Sheet</h2>
    </div>
  
    <form class="w3-container" action="/action_page.php" >

    <p> <br>     
    <label class="w3-text-black" style="font-size:1.3vw;"><b>FULL NAME</b></label><br><br>
    <label class="w3-text-black">First Name</label>
    <input class="w3-input w3-border w3-sand" style="width:62vw;" name="first" type="text" placeholder="Ma. Rika Paula" required="required"/></p>
   
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
            <option value="cit">CIT</option>
            <option value="cte">CTE</option>
            <option value="casat">CASAT</option>
            <option value="cafsd">CAFSD</option>
            <option value="col">COL</option>
            <option value="gs">GRADUATE SCHOOL</option>
            <option value="com">COM</option>
        </select>


        <label class="w3-text-black">Course</label><br>
    <select name="room" id="room" style="width:100%;"class="inputapp">
    <!--CAS-->
            <option value="1">AB in Communication</option>
            <option value="2">AB in English Language</option>
            <option value="3">AB in Sociology</option>
            <option value="4">BS in Biology</option>
            <option value="5">BS in Computer Science</option>
            <option value="6">BS in Information Technology</option>
            <option value="7">BS in Mathematics</option>
            <option value="8">BS in Meteorology</option>

    <!--COE-->
            <option value="9">BS in Agricultural and Biosystems Engineering</option>
            <option value="10">BS in Civil Engineering</option>
            <option value="11">BS in Electrical Engineering</option>
            <option value="12">BS in Mechanical Engineering</option>
            <option value="13">BS in Chemical Engineering</option>
            <option value="14">BS in Ceramic Engineering</option>
            <option value="15">BS in Computer Engineering</option>
            <option value="16">BS in Elect. and Comm. Engineering</option>

    <!--CBEA-->

            <option value="17">BS in Accountancy</option>
            <option value="18">BS in Economics</option>
            <option value="19">BS in Business Administration</option>
            <option value="20">BS in Cooperative Management</option>
            <option value="21">BS in Accounting Technology</option>
            <option value="22">BS in Entrepreneurship</option>
            <option value="23">BS in Hospitality Management</option>
            <option value="24">BS in Tourism Management</option>

    <!--CHS-->

            <option value="25">BS in Nursing</option>
            <option value="25">BS in Physical Therapy</option>
            <option value="27">BS in Pharmacy</option>

    <!--CIT-->

            <option value="28">Bachelor in Automotive Technology (Ladder-type)</option>
            <option value="29">BS in Industrial Education</option>
            <option value="30">BS in Industrial Technology</option>

    <!--CTE-->

            <option value="31">Bachelor in Secondary Education</option>
            <option value="32">Bachelor in Elementary Education</option>

    <!--CASAT-->

            <option value="33">BS in Marine Biology</option>
            <option value="34">BS in Fisheries</option>

    <!--CAFSD-->

            <option value="35">BS in Agriculture</option>
            <option value="36">BS in Forestry</option>
            <option value="37">BS in Development Communication</option>
            <option value="38">BS in Home Technology</option>
            <option value="39">BS in Environmental Science</option>
            <option value="40">BS in Agricultural Technology</option>

    <!--COL--> 
            <option value="41">Bachelor of Law</option>

    <!--GRADUATE SCHOOL-->

            <option value="42">Doctor of Philosophy</option>
            <option value="43">Doctor of Education</option>
            <option value="44">Master of Arts in Education</option>
            <option value="45">Master of Education</option>
            <option value="46">Master of Arts in Public Administration</option>
            <option value="47">Master in Public Administration</option>
            <option value="48">Master of Science in Rural Development</option>
            <option value="49">Master of Rural Development</option>
            <option value="50">Master of Arts in Nursing</option>
            <option value="51">Master in Nursing</option>
            <option value="52">Master of Science in Agriculture</option>
            <option value="53">Master of Agriculture</option>
            <option value="54">Master of Science in Agroforestry</option>
            <option value="55">Graduate Diploma</option>


        </select>

    <label class="w3-text-black">Year Level</label><br>
    <select name="room" id="room" style="width:100%;"class="inputapp">
            <option value="1st">1st Year</option>
            <option value="2nd">2nd Year</option>
            <option value="3rd">3rd Year</option>
            <option value="4th">4th Year</option>
        </select>


    <p><br>
    <label class="w3-text-black" style="font-size:1.2vw;"><b>ADDRESS</b></label><br><br>
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

<a href="home"><button type="button" class="greenbutton" style="  margin-top: 2vw; margin-bottom:2vw; margin-right:25vw;margin-left:0vw">CANCEL</button></a>
        <button type="button" onclick="updateProfileFunction()" class="greenbutton" style="  margin-top:2vw;margin-right:12vw;"> UPDATE</button>

</body>
</html>