<!DOCTYPE html>

<html>

    <head>
        <meta charset="UTF-8">
        <link href="css/instructor.css" rel="stylesheet" type="text/css"/>       
        <title>Client Information</title>
    </head>
    <?php
    session_start();
    require_once'include/dbconn.php';
    ?>
    <body>
        <p id="id1"><b>Welcome to Makhi driving school instructor systems</b></p>

        <div id="personal">           
            <h1>Client Booking </h1>            
            <form action="addClient.php" method="POST">

                <label>Date</label>
                <input type = "date" name = "date"><br><br>
                <label>Identity number</label>
                <input type = "text" name = "client_id"> <br><br>
                <label> Name</label>
                <input type = "text" name = "name" ><br><br> 
                <label>Surname </label>
                <input type = "text" name = "surname"><br><br> 
                <label>Address</label>
                <input type = "text" name = "address"><br><br> 
                <label>Gender</label>
                <input type = "text" name = "gender"> <br><br>
                <label>License code</label>
                <input type = "text" name = "license_code"> <br><br>
                <label>Phone number</label>
                <input type = "number" name = "contact_number"> <br><br>
                <label>Total lessons</label>
                <input type = "text" name = "num_of_lessons" ><br><br>
                <label>Start Date</label>
                <input type = "date" name = "start_date"><br><br> 
                <label>Start Time</label>
                <input type = "time" name = "start_time"> <br><br>   
                <label>Duration</label>
                <input type = "text" name = "lesson_duration"><br><br> 
                <label>Instructor</label>
                <input type = "text" name = "instructor"><br><br>             
                <input type="submit" name="addL" value=" Add Client Booking ">           
                <p><hr width="1300">


            </form>
        </div>
        <script src="js/instructor.js" type="text/javascript"></script>       
    </body>
</html>
