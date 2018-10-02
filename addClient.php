<?php

session_start();
require_once'include/dbconn.php';

$date = $_POST['date'];
$client_id = $_POST['client_id'];
$name     = $_POST['name'];
$surname  = $_POST['surname'];
$address  = $_POST['address'];
$gender = $_POST['gender'];
$license_code = $_POST['license_code'];
$contact_number = $_POST['contact_number'];
$num_of_lessons = $_POST['num_of_lessons'];
$start_date = $_POST['start_date'];
$start_time = $_POST['start_time'];
$lesson_duration = $_POST['lesson_duration'];
$instructor = $_POST['instructor_id'];


$sql = "INSERT INTO client(date,client_id, name,surname,address,"
        . "gender, license_code, contact_number, num_of_lessons, start_date,"
        . " start_time, lesson_duration,instructor_id ) VALUES('$date','$client_id','$name','$surname',"
        . "'$address','$gender', '$license_code', '$contact_number',"
        . "'$num_of_lessons', '$start_date','$start_time','$lesson_duration','$instructor_id')";
if (mysqli_query($conn, $sql)) {
    header("Location:client.php");
} else {
    exit("Error:could not process client details ");  
    
}

