<!DOCTYPE html>
<!--
Provides attendance update for each client
-->
<?php
require_once'include/dbconn.php';
$q = intval($_GET['q']);

$sql = "SELECT * FROM lesson WHERE client_id = '" . $q . "'";
$result = mysqli_query($conn, $sql);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Attendance</title>
        <link href="css/instructor.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>            
        <div id="personal">         
            <form method="POST" action="">
                <label>Date</label>
                <input type ="date" 
                       name = "date"><br><br>
                <label>Start Date</label>
                <input type = "date" 
                       name = "start_date"><br><br> 
                <label>Start Time</label>
                <input type = "time"
                       name = "start_time"> <br><br> 
                <label>lesson</label>
                <input type = "number"
                       name = "num_of_lessons" ><br><br>
                <label>Instructor</label>
                <input type="text" 
                       name = "instructor_id"> <br><br> 
                <button type="submit" name="edit">Edit</button>
                <button type="submit" name="save">Save</button>
            </form>
        </div>
        <?PHP
        while ($row = mysqli_fetch_array($result)) {
       
    echo "<input type ='date' name = 'date' value='$row[date]'>";
   echo "<input type ='date' name = 'start_date' value='$row[start_date]'>";
 echo "<input type ='time' name = 'start_time' value='$row[start_time]'>";
   echo "<input type ='number' name = 'num_of_lessons' value='$row[num_of_lessons]'>";
    echo "<input type ='text' name = 'instructor_id' value='$row[instructor_id]'>";
        
        }
        
        ?>
    </body>
</html>
