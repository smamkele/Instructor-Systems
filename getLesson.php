<?php
session_start();
require_once'include/dbconn.php';
$q = intval($_GET['q']);

$sql="SELECT * FROM lesson WHERE client_id = '".$q."'";
$result = mysqli_query($conn,$sql);
$html="";
$attLesson=0;

echo '<table> <thead>
                <tr>
                    <th colspan="6">Attendance</th>
                </tr>
                <tr>
                    <th>TotalLessons</th><th>Date</th><th>Time</th><th>Duration</th><th>Client</th><th>Instructor</th>
                </tr>
            </thead>
    

</table>';
echo "<tr><td>$row[num_of_lessons]</td><td>$row[start_date]</td><td>$row[start_time]</td><td>$row[lesson_duration]</td><td>$row[client_id]</td><td>$row[instructor_id]</td></tr>";
                    
                 
                    
