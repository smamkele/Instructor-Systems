
 <?php
 session_start();
require_once'include/dbconn.php';
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = ("SELECT * FROM user WHERE username = '$username' AND password = '$password' ");
        $result = $conn->query($sql);
        if (!$row = $result->fetch_assoc()) {
             echo"Your username or password is incorrect";
        } else {            
            $_SESSION['id']=$row['id'];
            
                 header("Location:home.php");            
         }
  
