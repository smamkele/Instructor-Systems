
 <?php
 session_start();
require_once'dbconn.php';
        $username = $_POST['username'];
        $password = $_POST['psword'];

        $sql = ("SELECT * FROM user WHERE username = '$username' AND psword = '$password' ");
        $result = $conn->query($sql);
        if (!$row = $result->fetch_assoc()) {
            echo"Your username or password is incorrect";
        } else {
            //$_SESSION['id']=$row['id'];   
        header("Location:../home.php");
        }
        if (isset($_SESSION['id'])) {
            echo $_SESSION['username'];
        }
