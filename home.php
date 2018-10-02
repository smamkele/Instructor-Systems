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
       <div>
         
           <form action="index.php" method="POST">
            <input type="submit" name="addL" value=" Add Client Booking ">
            <input type="submit" name="addL" value=" view Client Booking ">
            <input type="submit" name="addL" value=" view Client report ">
            <input type="submit" name="addL" value=" update Client lessons ">
            <input type="submit" name="addL" value="  view appointments ">
            </form>
        </div>

       
    </body>
</html>
