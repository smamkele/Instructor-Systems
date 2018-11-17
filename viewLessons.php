<!DOCTYPE html>
<!--
Provides Clients lesson bookings and adjust remaining lesson for each client
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/instructor.css" rel="stylesheet" type="text/css"/>
        <title>Lesson Booking</title>
    </head>
  <h1 id="pghead"><b>Driving School Management</b></h1>     
        <?php
        require_once 'include/dbconn.php';
        ?>
        <table cellpadding="2" cellspacing="2" border="1">
            <thead>
                <tr>
                    <th colspan="6">Lesson report</th>
                </tr>
                <tr>
                    <th>Total lessons</th><th> Date lesson start</th><th>Lesson Start Time</th><th>Lesson duration</th><th>Client_id</th><th>Instructor </th>
                </tr>
            </thead>
            <tbody>
                <?php
                $html = "";
  
                $recset = $conn->query("Select lesson.*,instructor.instructor_name from lesson,instructor where lesson.instructor_id=instructor.instructor_id" );
                
                if (mysqli_num_rows($recset) > 0) {
                    while ($row = $recset->fetch_assoc()) {                       
                        $html .= "<tr><td>$row[num_of_lessons]</td><td>$row[start_date]"
                                . "</td><td>$row[start_time]</td><td>$row[lesson_duration]</td>"
                                . "<td>$row[client_id]</td><td>$row[instructor_name]</td>"
                                . "</tr>";
                    }
                    echo $html;
                    
                } else {
                    exit("<p class='err'>Client list not found.</p>");
                }

                mysqli_free_result($recset);
                 
                ?>
            </tbody>
        </table>  
    </body>
</html>
