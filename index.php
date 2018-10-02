<!DOCTYPE html>
<!DOCTYPE html>
<!--
Provides the form for logging in to the system
-->
<html>       
    <head>
        <meta charset="UTF-8">        
        <link href="css/instructor.css" rel="stylesheet" type="text/css"/>
    
        <title>Welcome</title>
    </head>
    <?php
    session_start();
    require_once'include/dbconn.php';
    ?>
    <body> 

        <p id="id1"><b>Welcome to Makhi driving school instructor systems</b></p>
        <p id="id2"><i>Please Login</i></p>
        <form id="login" action="include/login.php" method="POST">                
            <input type="text" name="username" placeholder="Username"><br><br>
            <input type="password" name="psword" placeholder="Password"><br><br>
            <button  type = "submit">Login</button>           
        </form>       
    </body>
</html>