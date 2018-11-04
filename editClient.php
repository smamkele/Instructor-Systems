<!DOCTYPE html>
<!--
Updates client attendance by adjusting lessons attended 
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> Attendance </title>
        <link href="css/instructor.css" rel="stylesheet" type="text/css"/>
        <script src="js/instructor.js" type="text/javascript"></script>
    </head>
    <?php
    session_start();
    require_once'include/dbconn.php';    
    $sql = $conn->query("SELECT * FROM lesson");
    ?>
    <body>
        <h1 id="pghead"><b>Driving School System</b></h1>
        <div  id="attendance">
            <form action="updateClient.php" method="POST" >
                <label >Client Details:</label>           
                <select name ="client" onchange="getClient(this.value)">
                    <option value="">Client info</option>
                    <?php
                    if (mysqli_num_rows($sql) > 0) {
                        while ($row = $sql->fetch_assoc()) {
                            echo "<option id='client_option' value='$row[client_id]'>$row[client_id]</option>";
                            
                        }
                    }
                    ?>
                </select>
                <div id="selected_client"></div>     
                <p id="attbtn">      
                    <input type="submit" name="button" id="button" value="Submit">
                    <input type="submit" name="button2" id="button2" value="Reset">
                    
                </p>
            </form>
        </div>
    </body>
</html>
