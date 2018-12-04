<!DOCTYPE html>

<html>

    <head>
        <meta charset="UTF-8">
        <link href="css/instructor.css" rel="stylesheet" type="text/css"/> 
        <script src="js/instructor.js" type="text/javascript"></script>
        <title>Client Information</title>
    </head>
    <?php
    session_start();
    require_once'include/dbconn.php';
    $sql = $conn->query("SELECT * FROM instructor");
    ?>
    <body>
        <h1 id="pghead"><b>Driving School Management System</b></h1>     
        <div id="personal">           
            <h2>Client Booking information </h2>            
            <form action="addClient.php" 
                  method="POST"
                  name ="client"
                  onsubmit= "return submform();">
                <label>Date</label>
                <input type ="date" 
                       name = "date"><br><br>

                <label>Identity number</label>
                <input type="text" 
                       name = "clientId"> <br><br>

                <label> Name</label>
                <input type = "text"
                       name = "firstName" ><br><br>

                <label>Surname </label>
                <input type = "text"
                       name = "surname"><br><br> 

                <label>Address</label>
                <input type = "text" 
                       name = "address"><br><br>
                Gender:
                <input type="radio" name="gender"                
                       value="female">Female
                <input type="radio" name="gender"                
                       value="male">Male
                <br><br>

                <label>License code:</label>             
                <input type="radio" name="license_code"                
                       value="10">10
                <input type="radio" name="license_code"                
                       value="08">08
                <br><br> 

                <label>Phone number</label>
                <input type = "text"
                       name = "contactNumber"> <br><br>

                <label>Total lessons</label>
                <input type = "number"
                       name = "num_of_lessons" ><br><br>

                <label>Start Date</label>
                <input type = "date" 
                       name = "start_date"><br><br> 

                <label>Start Time</label>
                <input type = "time"
                       name = "start_time"> <br><br> 

                <label>Duration</label>
                <input type = "text" 
                       name = "lesson_duration"><br><br> 

                <label>Instructor:</label>
                <select name ="instructor_id" onchange="getInstructor(this.value)">
                    <option value="instructor_id">Instructor Name</option>                
                    <?php
                    if (mysqli_num_rows($sql) > 0) {
                        while ($row = $sql->fetch_assoc()) {
                            echo "<option name='instructor_option' id='instructor_option' value='$row[instructor_id]'>$row[instructor_id].$row[instructor_name]</option>";
                        }
                    }
                    ?>             
                </select>
                <br><br>

                <input type="submit" 
                       name="addClient" value=" Save Client "> 
                <button onclick="location.href = 'index.php'" type="button">
                    Exit</button>      

                <p><hr width="1300">
            </form>
            <?PHP
            if (isset($session['clientId'])) {
                echo $session['clientId'];
            }
            ?>
        </div>        
        <script src="js/instructor.js" type="text/javascript"></script>       
    </body>
</html>
