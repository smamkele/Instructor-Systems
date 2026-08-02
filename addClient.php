<?php
require_once 'include/auth.php';
require_once 'include/dbconn.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location:client.php');
    exit();
}

$date = trim($_POST['date'] ?? '');
$clientId = trim($_POST['client_id'] ?? '');
$name = trim($_POST['name'] ?? '');
$surname = trim($_POST['surname'] ?? '');
$address = trim($_POST['address'] ?? '');
$gender = trim($_POST['gender'] ?? '');
$licenseCode = trim($_POST['license_code'] ?? '');
$contactNumber = trim($_POST['contact_number'] ?? '');
$numOfLessons = trim($_POST['num_of_lessons'] ?? '');
$startDate = trim($_POST['start_date'] ?? '');
$startTime = trim($_POST['start_time'] ?? '');
$lessonDuration = trim($_POST['lesson_duration'] ?? '');
$instructorId = trim($_POST['instructor_id'] ?? '');

$requiredValues = [$date, $clientId, $name, $surname, $address, $gender, $licenseCode, $contactNumber, $numOfLessons, $startDate, $startTime, $lessonDuration, $instructorId];
foreach ($requiredValues as $value) {
    if ($value === '') {
        exit('Error: please complete all booking fields.');
    }
}

$conn->begin_transaction();

try {
    $clientStmt = $conn->prepare('INSERT INTO client (client_id, name, surname, address, gender, contact_number) VALUES (?, ?, ?, ?, ?, ?) ON DUPLICATE KEY UPDATE name = VALUES(name), surname = VALUES(surname), address = VALUES(address), gender = VALUES(gender), contact_number = VALUES(contact_number)');
    $clientStmt->bind_param('ssssss', $clientId, $name, $surname, $address, $gender, $contactNumber);
    $clientStmt->execute();

    $lessonStmt = $conn->prepare('INSERT INTO lesson (`date`, license_code, num_of_lessons, start_date, start_time, lesson_duration, client_id, instructor_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?)');
    $lessonStmt->bind_param('siissisi', $date, $licenseCode, $numOfLessons, $startDate, $startTime, $lessonDuration, $clientId, $instructorId);
    $lessonStmt->execute();

    $conn->commit();
    header('Location:viewLessons.php?success=1');
    exit();
} catch (Throwable $throwable) {
    $conn->rollback();
    exit('Error: could not process booking details.');
}





