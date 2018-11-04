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
    ?>
    <body>
        <h1 id="pghead"><b>Driving School System</b></h1> 
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
                       name = "client_id"> <br><br>

                <label> Name</label>
                <input type = "text"
                       name = "name" ><br><br>

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

                <label>License code</label>
                <input type = "text"
                       name = "license_code"> <br><br>

                <label>Phone number</label>
                <input type = "text"
                       name = "contact_number"> <br><br>

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

                <label>Instructor</label>
                <input type = "text" 
                       name = "instructor_id"><br><br>

                <input type="submit" 
                       name="addClient" value=" Save Client "> 
                <button onclick="location.href = 'index.php'" type="button">
                    Exit</button>      

                <p><hr width="1300">
            </form>
            <?PHP
            if (isset($session['client_id'])) {
                echo $session['client_id'];
            }
            ?>
        </div>        
        <script src="js/instructor.js" type="text/javascript"></script>       
    </body>
</html>
