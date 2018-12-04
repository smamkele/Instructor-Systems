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
    $sql1 = $conn->query("SELECT * FROM client");
    ?>
    <body>
        <h1 id="pghead"><b>Attendance</b></h1>
        <div  id="attendance">
            <form action="" method="POST" >
                <label >Client Details:</label>           
                <select name ="client" onchange="getClient(this.value)">
                    <option value="">Client info</option>
                    <?php
                    if (mysqli_num_rows($sql1) > 0) {
                        while ($row = $sql1->fetch_assoc()) {
                            echo "<option name='client_option' id='client_option' value='$row[client_id]'>$row[name].$row[surname]</option>";
                        }
                    }
                    ?>
                </select>                
            </form>
        </div>
        <div id="selected_client">                 
                </div> 
    </body>
</html>
