<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home page</title>
        <link href="css/instructor.css" rel="stylesheet" type="text/css"/>
    </head>
    <?php
    session_start();
    require_once'include/dbconn.php';
    ?>
    <body>
        <h1 id="pghead"><b>Welcome to Driving School System</b></h1> 
        <div id="btnHome">
            <button class="button"
                    onclick="location.href = 'client.php'" type="button">
                Client Booking</button>        
            <button class="button"
                    onclick="location.href = 'viewClientList.php'" type="button"> 
                Client List</button>    
            <button class="button"
                    onclick="location.href = 'viewLessons.php'" type="button"> 
                Lessons  </button>
            <button class="button"
                    onclick="location.href = 'editClient.php'">
                Update Booking </button> 
            <button class="button"
                    onclick="location.href = 'ViewClientStatus'"> 
                Client Status</button>          

        </div>
        <p></p>
        <div>
            <img id="img" src="images/image.jpg" 
                 alt="" vspace="120" />               
        </div>
    </body>
</html>