<?php
session_start();
require_once 'include/dbconn.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
     header('Location:index.php');
     exit();
}

$username = trim($_POST['username'] ?? '');
$password = trim($_POST['password'] ?? '');

if ($username === '' || $password === '') {
     header('Location:index.php?error=1');
     exit();
}

$stmt = $conn->prepare('SELECT id FROM user WHERE username = ? AND password = ? LIMIT 1');
$stmt->bind_param('ss', $username, $password);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

if (!$row) {
     header('Location:index.php?error=1');
     exit();
}

$_SESSION['id'] = $row['id'];
header('Location:home.php');
exit();

