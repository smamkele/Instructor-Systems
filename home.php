<!DOCTYPE html>
<!--
Provides the home page interface
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
        <h1 id="pghead"><b>Driving School Management</b></h1>     
        <div id="btnHome">
            <button class="button"
                    onclick="location.href = 'client.php'" type="button">
                Booking</button>        
            <button class="button"
                    onclick="location.href = 'viewClientList.php'" type="button"> 
                Client List</button>    
            <button class="button"
                    onclick="location.href = 'viewLessons.php'" type="button"> 
                Lesson </button>
            <button class="button"
                    onclick="location.href = 'editClient.php'">
                Attendance </button>               

        </div>
        <p></p>        
    </body>
</html>