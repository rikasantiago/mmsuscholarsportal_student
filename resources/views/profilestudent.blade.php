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
        <link rel="icon" href="/images/mmsu logo.png">
        
 
    </head>
    
    <body class="antialiased">
        
        <!--Navigation-->

    <div class="topnav" id="myTopnav">
        <img style="float:left;margin-left:40px;" src="/images/mmsu logo.png"  height="6%" width="6%">
        <h3>MMSU SCHOLAR'S PORTAL</h3>
        
        <div class="menu">
                    <ul><li>
                     <a href="#" style="float:right;margin:10px 0px 0px 0px;">18-020007</a>
                        <ul>
                        <li><a href="welcome">Log Out</a></li>
                        </ul>
                     </div>
                </div>



        <!--Profile-->

        <div class="vd_title-section clearfix">
            <div class="vd_panel-header">
                <h1>Scholar's Profile</h1>
            </div>
        </div>

        <br>
        <div class="col-sm-3">
            <div class="text-center">
                <img class="avatar" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png" alt="avatar">
                <br>
                <input class="text-center center-block file-upload" style="text-indent:25px;display: block;margin-left: auto;margin-right: auto;" type="file">

<div class="profileprimary">
    Personal Data Sheet/Scholarship Details
</div>
<div class="profile_con">
    <form>
    <label style="margin-left:20px;" for="email">Full Name</label>
            <input type="text" id="fname" value="Rika Santiago" style="width: 25%;" class="inputapp">

            <label style="margin-left:60px;" for="email">College</label>
            <select name="room" id="room" style="width:25%;"class="inputapp">
            <option value="cas">CAS</option>
            <option value="coe">COE</option>
            <option value="cbea">CBEA</option>
            <option value="chs">CHS</option>
            <option value="cit">CIT</option>
            <option value="cte">CTE</option>
            <option value="cafsd">CAFSD</option>
            <option value="casat">CASAT</option>
        </select><br><br>

        <label style="margin-left:20px;" for="email">Sex</label>
            <input type="text" id="sex" value="Female" style="width: 25%;" class="inputapp">

            <label style="margin-left:60px;" for="email">Course</label>
            <select name="room" id="room" style="width:25%;"class="inputapp">
            <option value="cas">BS in Computer Science</option>
            <option value="coe">COE</option>
            <option value="cbea">CBEA</option>
            <option value="chs">CHS</option>
        </select><br><br>

        <label style="margin-left:20px;" for="email">Age</label>
            <input type="tel" id="number" value="21" style="width: 25%;" class="inputapp">

            <label style="margin-left:60px;" for="email">Year Level</label>
            <select name="room" id="room" style="width:25%;"class="inputapp">
            <option value="cas">3rd Year</option>
            <option value="coe">COE</option>
            <option value="cbea">CBEA</option>
            <option value="chs">CHS</option>
        </select><br><br>

        <label style="margin-left:20px;" for="email">Date of Birth</label>
            <input type="date" id="birthday" style="width: 25%;" class="inputapp">

            <label style="margin-left:60px;" for="email">Scholarship Program</label>
            <select name="room" id="room" style="width:25%;"class="inputapp">
            <option value="cas">College Scholar</option>
            <option value="coe">COE</option>
            <option value="cbea">CBEA</option>
            <option value="chs">CHS</option>
            <option value="chs">CIT</option>
            <option value="chs">CTE</option>
            <option value="chs">CAFSD</option>
            <option value="chs">CHS</option>
        </select><br><br>
        
        <label style="margin-left:20px;" for="email">Address</label>
            <input type="text" id="fname" value="Brgy 19. Laoag City" style="width: 25%;" class="inputapp">

            <label style="margin-left:60px;" for="email">Inclusive Year/Semester</label>
            <select name="room" id="room" style="width:25%;"class="inputapp">
            <option value="cas">2018-2019 1st Semester</option>
            <option value="coe">2018-2019 2nd Semester</option>
            <option value="cbea">2019-2020 1st Semester</option>
            <option value="chs">2019-2020 2nd Semester</option>
            <option value="chs">2020-2021 1st Semester</option>
            <option value="chs">2020-2021 2nd Semester</option>
            <option value="chs">2021-2022 1st Semester</option>
            <option value="chs">2021-2022 2nd Semester</option>
            <option value="chs">2022-2023 1st Semester</option>
            <option value="chs">2022-2023 2nd Semester</option>
        </select><br><br>

        <label style="margin-left:20px;" for="email">Mobile Number</label>
            <input type="text" id="sex" value="09453614124" style="width: 25%;" class="inputapp">

        <label style="margin-left:60px;" for="email">GWA</label>
            <input type="email" id="email" value="rikasantiago0324@gmail.com" style="width: 25%;" class="inputapp"><br><br>
            
</form>
</div>


        <a href="home"><button type="button" class="greenbutton" style="  margin-top:15px; margin-bottom:50px;margin-right:350px;margin-left:60px">CANCEL</button></a>
        <button type="button" onclick="updateProfileFunction()" class="greenbutton" style="  margin-top:15px; margin-bottom:50px;margin-right:120px;"> UPDATE</button>

</body>
</html>