<?php

session_start();
require_once'include/dbconn.php';
if (isset($_POST['date'])) {
    $date = $_POST['date'];
}
if (isset($_POST['clientId'])) {
    $client_id = $_POST['clientId'];
}
if (isset($_POST['firstName'])) {
    $name = $_POST['firstName'];
}
if (isset($_POST['surname'])) {
    $surname = $_POST['surname'];
}
if (isset($_POST['address'])) {
    $address = $_POST['address'];
}
if (isset($_POST['gender'])) {
    $gender = $_POST['gender'];
}
if (isset($_POST['license_code'])) {
    $license_code = $_POST['license_code'];
}
if (isset($_POST['contactNumber'])) {
    $contact_number = $_POST['contactNumber'];
}
if (isset($_POST['num_of_lessons'])) {
    $num_of_lessons = $_POST['num_of_lessons'];
}
if (isset($_POST['start_date'])) {
    $start_date = $_POST['start_date'];
}
if (isset($_POST['start_time'])) {
    $start_time = $_POST['start_time'];
}
if (isset($_POST['lesson_duration'])) {
    $lesson_duration = $_POST['lesson_duration'];
}
if (isset($_POST['instructor_id'])) {
    $instructor_id = $_POST['instructor_id'];
}

$sql = "INSERT INTO client(clientId, firstName,surname,address,"
        . "gender, contactNumber)"
        . " VALUES('$clientId','$firstName','$surname',"
        . "'$address','$gender', '$contactNumber')";

if(!mysqli_query($conn, $sql)){
     exit("Error:could not process client details ");
}
 else {
    echo 'Client details successfully added to the database';
}
$strSQL = "INSERT INTO lesson(date,license_code,num_of_lessons, start_date, start_time,"
        . " lesson_duration, clientId,instructor_id) VALUES('$date','$license_code','$num_of_lessons', "
        . "'$start_date', '$start_time','$lesson_duration', '$client_id', '$instructor_id')";


if(!mysqli_query($conn, $strSQL)){
     exit("Error:could not process lesson details ");
} 
header("Location:client.php");
mysqli_close($conn);   





