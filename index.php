<!DOCTYPE html>
<!--
Provides the form for logging in to the system
-->
<html>       
    <head>
        <meta charset="UTF-8">        
        <link href="css/instructor.css" rel="stylesheet" type="text/css"/>         
        <title>Welcome</title>
        <script src="js/instructor.js" type="text/javascript"></script>
    </head>
    <?php
    session_start();
    require_once'include/dbconn.php';
    ?>
    <body>
        <h1 id="pghead"><b>Welcome to Driving School System</b></h1>        
        <div  id="login">           
            <form 
                action="login.php"
                method="POST"
                name="login"
                onsubmit= "return validateForm();">
                <fieldset>
                    <legend> LOGIN </legend>
                    Username:<br>
                    <input 
                        type="text" 
                        name="username" 
                        placeholder="Enter your Username"/><br><br>                  


                    Password:<br>
                    <input 
                        type="password" 
                        name="password" 
                        placeholder="Enter your Password"><br><br> 



                    <input id="submit-login"
                           type = "submit" 
                           value ="Login">

                </fieldset>
            </form>
            <?PHP
            if (isset($session['id'])) {
                echo $session['id'];
            }
            
            ?>
        </div> 

    </body>
</html>
