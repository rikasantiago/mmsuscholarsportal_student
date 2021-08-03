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



        <!--Termination-->

        <div class="vd_title-section clearfix">
            <div class="vd_panel-header">
                <h1>Termination of Scholarship</h1>
            </div>
        </div>

 

<div class="profileprimary">
    Terminate Scholarship
</div>
<div class="profile_con2">
    <form>
        <br>
 
    <label style="margin-left:20px;" for="email">Reason of Termination :</label>
            <select name="room" id="room" style="width:25%;"class="inputapp">
            <option value="cas">Graduated</option>
            <option value="coe">COE</option>
            <option value="cbea">CBEA</option>
            <option value="chs">CHS</option>
            <option value="cit">CIT</option>
            <option value="cte">CTE</option>
            <option value="cafsd">CAFSD</option>
            <option value="casat">CASAT</option>
        </select><br><br>
            
</form>
</div>


        <a href="home"><button type="button" class="greenbutton" style="  margin-top:15px; margin-bottom:50px;margin-right:350px;margin-left:120px">CANCEL</button></a>
        <button type="button" onclick="updateProfileFunction()" class="greenbutton" style="  margin-top:15px; margin-bottom:50px;margin-right:120px;"> UPDATE</button>

</body>
</html>